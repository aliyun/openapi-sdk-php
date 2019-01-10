<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Nlp\V20180408\Nlp;
use PHPUnit\Framework\TestCase;

/**
 * Class NlpTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlpTest extends TestCase
{
    public function testWordSegment()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('NLP_ACCESS_KEY_ID'),
            \getenv('NLP_ACCESS_KEY_SECRET')
        )->name('content')
                    ->regionId('cn-shanghai');

        $request = AlibabaCloud::nlp()
                               ->v20180408()
                               ->wordSegment();

        $request->withDomain('general');
        $request->jsonBody([
                               'lang' => 'ZH',
                               'text' => 'Iphone专用数据线',
                           ]);

        try {
            $result = $request->client('content')->request();
            self::assertEquals('Iphone', $result['data'][0]['word']);
        } catch (ServerException $e) {
            $this->assertContains(
                $e->getErrorCode(),
                [
                    'InvalidApi.NotPurchase',
                    'MissingAccessKeyId',
                    'InvalidAccessKeyId.NotFound',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith(
                'cURL error',
                $e->getErrorMessage()
            );
        }
    }

    /**
     * @throws ServerException
     */
    public function testWordSegmentWithApiResolver()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('NLP_ACCESS_KEY_ID'),
            \getenv('NLP_ACCESS_KEY_SECRET')
        )->name('content')
                    ->regionId('cn-shanghai');

        try {
            $result = Nlp::wordSegment()
                         ->withDomain('general')
                         ->jsonBody([
                                        'lang' => 'ZH',
                                        'text' => 'Iphone专用数据线',
                                    ])
                         ->client('content')
                         ->request();

            self::assertEquals('Iphone', $result['data'][0]['word']);
        } catch (ClientException $e) {
            self::assertStringStartsWith(
                'cURL error',
                $e->getErrorMessage()
            );
        }
    }

    public function testWordSegmentParametersInConstruct()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('NLP_ACCESS_KEY_ID'),
            \getenv('NLP_ACCESS_KEY_SECRET')
        )->name('content')
                    ->regionId('cn-shanghai');

        try {
            $result = Nlp::wordSegment([
                                           'body' => \json_encode([
                                                                      'lang' => 'ZH',
                                                                      'text' => 'Iphone专用数据线',
                                                                  ]),
                                       ])
                         ->withDomain('general')
                         ->client('content')
                         ->request();

            self::assertEquals('Iphone', $result['data'][0]['word']);
        } catch (ClientException $e) {
            self::assertStringStartsWith(
                'cURL error',
                $e->getErrorMessage()
            );
        } catch (ServerException $e) {
            \dump($e->getResult()->getRequest()->stringToBeSigned());
            \dump($e->getMessage());
        }
    }
}
