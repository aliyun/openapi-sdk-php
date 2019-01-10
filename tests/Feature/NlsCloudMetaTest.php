<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class NlsCloudMetaTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlsCloudMetaTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    /**
     * @throws ServerException
     */
    public function testNlsCloudMeta()
    {
        try {
            $result = AlibabaCloud::nlsCloudMeta()
                                  ->v20180518()
                                  ->createToken()
                                  ->host('nls-meta.cn-shanghai.aliyuncs.com')
                                  ->request();
            self::assertArrayHasKey('NlsRequestId', $result);
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    /**
     * @throws ServerException
     */
    public function testWithClientMethod()
    {
        try {
            $result = AlibabaCloud::roaRequest()
                                  ->pathPattern('/pop/2018-05-18/tokens')
                                  ->product('nls-cloud-meta')
                                  ->version('2018-05-18')
                                  ->method('POST')
                                  ->action('CreateToken')
                                  ->host('nls-meta.cn-shanghai.aliyuncs.com')
                                  ->request();
            self::assertArrayHasKey('NlsRequestId', $result);
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
