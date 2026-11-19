<?php

namespace AlibabaCloud\Tests\Unit;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Credentials\AccessKeyCredential;
use AlibabaCloud\Client\Credentials\Providers\CredentialsProvider;
use AlibabaCloud\Client\Signature\ShaHmac1Signature;
use AlibabaCloud\CS\CS;
use AlibabaCloud\Dybaseapi\MNS\Requests\BatchReceiveMessage;
use AlibabaCloud\Dybaseapi\MNS\Signature;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class SignatureV2Test extends TestCase
{
    const SECRET = 'test-secret+/=';
    const TOKEN = 'test-token+/=';

    public static function clients()
    {
        return [
            ['default', 'sha256'],
            ['sts', 'sha256'],
            ['legacy', 'sha1'],
        ];
    }

    public static function rpcRequests()
    {
        $requests = [];
        foreach (self::clients() as $client) {
            foreach (['GET', 'POST'] as $method) {
                $requests[] = [$client[0], $client[1], $method];
            }
        }

        return $requests;
    }

    /**
     * @dataProvider rpcRequests
     */
    public function testEcsRpcSignature($client, $algorithm, $method)
    {
        $name = $this->prepareClient($client);
        AlibabaCloud::ecs()->v20140526()->describeRegions()
                    ->client($name)
                    ->regionId('cn-hangzhou')
                    ->host('ecs.example.invalid')
                    ->method($method)
                    ->withAcceptLanguage('中文 +/*~')
                    ->request();

        $request = $this->sentRequest();
        parse_str($request->getUri()->getQuery(), $query);
        parse_str((string)$request->getBody(), $form);
        $parameters = array_merge($query, $form);
        self::assertSame('DescribeRegions', $parameters['Action']);
        self::assertSame('2014-05-26', $parameters['Version']);
        self::assertSame('HMAC-' . strtoupper($algorithm), $parameters['SignatureMethod']);
        self::assertSame('1.0', $parameters['SignatureVersion']);
        self::assertSame($client . '-ak', $parameters['AccessKeyId']);
        if ($client === 'sts') {
            self::assertSame(self::TOKEN, $parameters['SecurityToken']);
        }
        if ($method === 'POST') {
            self::assertSame([], $query);
            self::assertSame('中文 +/*~', $form['AcceptLanguage']);
        }

        $signature = $parameters['Signature'];
        unset($parameters['Signature']);
        ksort($parameters);
        $parts = [];
        foreach ($parameters as $key => $value) {
            $parts[] = rawurlencode($key) . '=' . rawurlencode($value);
        }
        $stringToSign = $method . '&%2F&' . rawurlencode(implode('&', $parts));
        self::assertSame(base64_encode(hash_hmac($algorithm, $stringToSign, self::SECRET . '&', true)), $signature);
    }

    /**
     * @dataProvider clients
     */
    public function testCsRoaSignature($client, $algorithm)
    {
        $name = $this->prepareClient($client);
        CS::v20151215()->describeClusters()
                    ->client($name)
                    ->regionId('cn-hangzhou')
                    ->host('cs.example.invalid')
                    ->withName('中文 +/*~')
                    ->request();

        $request = $this->sentRequest();
        self::assertSame('/clusters', $request->getUri()->getPath());
        parse_str($request->getUri()->getQuery(), $query);
        self::assertSame('中文 +/*~', $query['name']);
        if ($client === 'sts') {
            self::assertSame(self::TOKEN, $request->getHeaderLine('x-acs-security-token'));
        }
        $this->assertRoaSignature($request, $client, $algorithm);
    }

    public function testImageSearchBodySignature()
    {
        $name = $this->prepareClient('default');
        AlibabaCloud::imageSearch()->v20190325()->addImage()
                    ->client($name)
                    ->regionId('cn-hangzhou')
                    ->host('imagesearch.example.invalid')
                    ->withInstanceName('test-instance')
                    ->withPicContent('image+/=')
                    ->request();

        $request = $this->sentRequest();
        self::assertSame('POST', $request->getMethod());
        self::assertSame('/v2/image/add', $request->getUri()->getPath());
        $body = (string)$request->getBody();
        self::assertSame(['InstanceName' => 'test-instance', 'PicContent' => 'image+/='], json_decode($body, true));
        self::assertSame(base64_encode(md5($body, true)), $request->getHeaderLine('Content-MD5'));
        $this->assertRoaSignature($request, 'default', 'sha256');
    }

    public function testMnsKeepsItsIndependentSha1Protocol()
    {
        $request = new BatchReceiveMessage(2, 5);
        $request->setQueueName('test-queue');
        $request->setQueryString($request->generateQueryString());
        $request->setHeader('Date', 'Tue, 20 Oct 2026 00:00:00 GMT');
        $request->setHeader('x-mns-version', '2015-06-06');
        $stringToSign = "GET\n\n\nTue, 20 Oct 2026 00:00:00 GMT\nx-mns-version:2015-06-06\n" .
                        '/queues/test-queue/messages?numOfMessages=2&waitseconds=5';

        self::assertSame(
            base64_encode(hash_hmac('sha1', $stringToSign, self::SECRET, true)),
            Signature::SignRequest(self::SECRET, $request)
        );
    }

    public function testImageSearchCustomBodySignature()
    {
        $name = $this->prepareClient('default');
        $request = AlibabaCloud::imageSearch()->v20180120()->addItem()
                              ->client($name)
                              ->regionId('cn-hangzhou')
                              ->host('imagesearch.example.invalid')
                              ->withInstanceName('test-instance')
                              ->withItemId('item')
                              ->withCateId('0')
                              ->withCustContent('test')
                              ->addPicture('pic', 'image');
        $body = $request->options['body'];
        $request->request();

        $sent = $this->sentRequest();
        self::assertSame($body, (string)$sent->getBody());
        self::assertSame('', $sent->getHeaderLine('Content-MD5'));
        $this->assertRoaSignature($sent, 'default', 'sha256');
    }

    private function prepareClient($client)
    {
        $this->cleanUp();
        AlibabaCloud::accessKeyClient('default-ak', self::SECRET)->asDefaultClient();
        AlibabaCloud::stsClient('sts-ak', self::SECRET, self::TOKEN)->name('signature-sts');
        AlibabaCloud::client(new AccessKeyCredential('legacy-ak', self::SECRET), new ShaHmac1Signature())
                    ->name('signature-legacy');
        AlibabaCloud::rememberHistory();
        AlibabaCloud::mockResponse(200, ['Content-Type' => 'application/json'], '{}');

        return $client === 'default' ? CredentialsProvider::getDefaultName() : 'signature-' . $client;
    }

    private function sentRequest()
    {
        $history = AlibabaCloud::getHistory();
        self::assertCount(1, $history);

        return $history[0]['request'];
    }

    private function assertRoaSignature(RequestInterface $request, $client, $algorithm)
    {
        self::assertSame('HMAC-' . strtoupper($algorithm), $request->getHeaderLine('x-acs-signature-method'));
        self::assertSame('1.0', $request->getHeaderLine('x-acs-signature-version'));
        $headers = [];
        foreach ($request->getHeaders() as $name => $values) {
            $name = strtolower($name);
            if (strpos($name, 'x-acs-') === 0) {
                $headers[$name] = implode(',', $values);
            }
        }
        ksort($headers);
        $stringToSign = $request->getMethod() . "\n" . $request->getHeaderLine('Accept') . "\n" .
                        $request->getHeaderLine('Content-MD5') . "\n" .
                        $request->getHeaderLine('Content-Type') . "\n" . $request->getHeaderLine('Date') . "\n";
        foreach ($headers as $name => $value) {
            $stringToSign .= $name . ':' . $value . "\n";
        }
        parse_str($request->getUri()->getQuery(), $query);
        ksort($query);
        $stringToSign .= $request->getUri()->getPath() . '?' .
                         rawurldecode(http_build_query($query, '', '&', PHP_QUERY_RFC3986));
        $signature = base64_encode(hash_hmac($algorithm, $stringToSign, self::SECRET, true));
        self::assertSame('acs ' . $client . '-ak:' . $signature, $request->getHeaderLine('Authorization'));
    }

    /**
     * @after
     */
    public function cleanUp()
    {
        AlibabaCloud::cancelMock();
        AlibabaCloud::forgetHistory();
        AlibabaCloud::notRememberHistory();
        AlibabaCloud::flush();
    }
}
