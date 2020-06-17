<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Slb\Slb;
use AlibabaCloud\Slb\V20140515\DescribeRegions;
use PHPUnit\Framework\TestCase;

/**
 * Class SlbTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class SlbTest extends TestCase
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
        $request1 = AlibabaCloud::slb()
                                ->v20140515()
                                ->describeRegions()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Slb::v20140515()
                       ->describeRegions()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(DescribeRegions::class, $request1);
        self::assertInstanceOf(DescribeRegions::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testSlb()
    {
        $result = Slb::v20140515()
                     ->describeRegions()
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
