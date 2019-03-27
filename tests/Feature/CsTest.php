<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\CS\V20151215\DescribeApiVersion;
use PHPUnit\Framework\TestCase;

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
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::cS()
                               ->v20151215()
                               ->describeApiVersion()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(DescribeApiVersion::class, $request);
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
