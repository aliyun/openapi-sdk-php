<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Dds\Dds;
use AlibabaCloud\Dds\V20151201\DescribeRegions;
use PHPUnit\Framework\TestCase;

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
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Dds::v20151201()
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
    public function testDds()
    {
        $request = Dds::v20151201()
                      ->describeRegions()
                      ->connectTimeout(60)
                      ->timeout(65);

        $result = $request->request();
        self::assertArrayHasKey('DdsRegion', $result['Regions']);
    }
}
