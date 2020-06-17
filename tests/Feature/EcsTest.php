<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ecs\Ecs;
use AlibabaCloud\Ecs\EcsVersion;
use AlibabaCloud\Ecs\V20140526\DescribeRegions;
use PHPUnit\Framework\TestCase;

/**
 * Class EcsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class EcsTest extends TestCase
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
        $request1 = AlibabaCloud::ecs()
                                ->v20140526()
                                ->describeRegions()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Ecs::v20140526()
                       ->describeRegions()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(DescribeRegions::class, $request1);
        self::assertInstanceOf(DescribeRegions::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcs()
    {
        $result = Ecs::v20140526()
                     ->describeRegions()
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
