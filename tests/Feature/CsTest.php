<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\CS\CS;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\CS\V20151215\DescribeApiVersion;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class CsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CsTest extends TestCase
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
        $request1 = AlibabaCloud::cS()
                                ->v20151215()
                                ->describeApiVersion()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = CS::v20151215()
                      ->describeApiVersion()
                      ->connectTimeout(20)
                      ->timeout(25);

        self::assertInstanceOf(DescribeApiVersion::class, $request1);
        self::assertInstanceOf(DescribeApiVersion::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testCs()
    {
        $result = AlibabaCloud::cS()
                              ->v20151215()
                              ->describeApiVersion()
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('docker_region_versions', $result);
    }
}
