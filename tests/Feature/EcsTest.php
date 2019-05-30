<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Ecs\Ecs;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Ecs\EcsVersion;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Ecs\V20140526\DescribeRegions;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

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
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Ecs::v20140526()
                       ->describeRegions()
                       ->connectTimeout(20)
                       ->timeout(25);

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
                     ->connectTimeout(20)
                     ->timeout(25)
                     ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcsInVersionStaticMethod()
    {
        $result = EcsVersion::v20140526()
                            ->describeRegions()
                            ->connectTimeout(20)
                            ->timeout(25)
                            ->request();

        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
