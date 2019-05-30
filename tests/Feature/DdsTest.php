<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Dds\Dds;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Dds\V20151201\DescribeRegions;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class DdsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class DdsTest extends TestCase
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
        )->regionId(\getenv('REGION_ID'))->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::dds()
                                ->v20151201()
                                ->describeRegions()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Dds::v20151201()
                       ->describeRegions()
                       ->connectTimeout(20)
                       ->timeout(25);

        self::assertInstanceOf(DescribeRegions::class, $request1);
        self::assertInstanceOf(DescribeRegions::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testDds()
    {
        $request = Dds::v20151201()
                      ->describeRegions()
                      ->connectTimeout(20)
                      ->timeout(25);

        $result = $request->request();
        self::assertArrayHasKey('DdsRegion', $result['Regions']);
    }
}
