<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class NlsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testNls()
    {
        $request = AlibabaCloud::nlsCloudMeta()
                               ->v20180518()
                               ->createToken()
                               ->host('nls-meta.cn-shanghai.aliyuncs.com');
        try {
            $result = $request->request();
            self::assertArrayHasKey('NlsRequestId', $result);
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                    'AccessKeyId is mandatory for this action.',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testNlsWithOldMethod()
    {
        $request = AlibabaCloud::roaRequest()
                               ->pathPattern('/pop/2018-05-18/tokens')
                               ->product('nls-cloud-meta')
                               ->version('2018-05-18')
                               ->method('POST')
                               ->action('CreateToken')
                               ->host('nls-meta.cn-shanghai.aliyuncs.com');
        try {
            $result = $request->request();
            self::assertArrayHasKey('NlsRequestId', $result);
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                    'AccessKeyId is mandatory for this action.',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
