<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\NlsCloudMeta\NlsCloudMeta;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\NlsCloudMeta\V20180518\CreateToken;

/**
 * Class NlsCloudMetaTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlsCloudMetaTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::nlsCloudMeta()
                                ->v20180518()
                                ->createToken()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = NlsCloudMeta::v20180518()
                                ->createToken()
                                ->connectTimeout(20)
                                ->timeout(25);

        self::assertInstanceOf(CreateToken::class, $request1);
        self::assertInstanceOf(CreateToken::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testNlsCloudMeta()
    {
        $result = AlibabaCloud::nlsCloudMeta()
                              ->v20180518()
                              ->createToken()
                              ->host('nls-meta.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('NlsRequestId', $result);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testWithClientMethod()
    {
        $result = AlibabaCloud::roa()
                              ->pathPattern('/pop/2018-05-18/tokens')
                              ->product('nls-cloud-meta')
                              ->version('2018-05-18')
                              ->method('POST')
                              ->action('CreateToken')
                              ->host('nls-meta.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('NlsRequestId', $result);
    }
}
