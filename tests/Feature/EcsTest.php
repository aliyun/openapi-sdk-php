<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Ecs\EcsVersion;
use AlibabaCloud\Ecs\V20140526\Ecs;
use PHPUnit\Framework\TestCase;

/**
 * Class EcsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class EcsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId(\getenv('REGION_ID'))->asGlobalClient();
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcs()
    {
        $result = AlibabaCloud::ecs()
                              ->v20140526()
                              ->describeRegions()
                              ->connectTimeout(15)
                              ->timeout(20)
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
                            ->connectTimeout(15)
                            ->timeout(20)
                            ->request();

        self::assertArrayHasKey('Region', $result['Regions']);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcsInApiStaticMethod()
    {
        $result = Ecs::describeRegions()
                     ->connectTimeout(15)
                     ->timeout(20)
                     ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }


    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testDeleteKeyPairs()
    {
        //AlibabaCloud::ecs()->v20140526()->deleteKeyPairs()->withKeyPairNames()
        $result = AlibabaCloud::rpcRequest()
                              ->product('Ecs')
            // ->scheme('https') // https | http
                              ->version('2014-05-26')
                              ->action('DeleteKeyPairs')
                              ->method('POST')
                              ->options([
                                            'query' => [
                                                'RegionId' => 'cn-shenzhen',
                                                'KeyPairNames' => 'aliyunhongkong',
                                                'SourceRegionId' => 'cn-shenzhen',
                                            ],
                                        ])
                              ->request();
    }
}
