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
        )->regionId('cn-shanghai')
                    ->asGlobalClient();
    }

    public function testEcs()
    {
        $request = AlibabaCloud::ecs()->v20140526()->describeRegions();

        try {
            $result = $request->request();
            self::assertArrayHasKey('Region', $result['Regions']);
        } catch (ServerException $e) {
            self::assertEquals(
                'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                $e->getErrorMessage()
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testEcsInVersionStaticMethod()
    {
        try {
            $request = EcsVersion::v20140526()->describeRegions();
            $result  = $request->request();
            self::assertArrayHasKey('Region', $result['Regions']);
        } catch (ServerException $e) {
            self::assertEquals(
                'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                $e->getErrorMessage()
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testEcsInApiStaticMethod()
    {
        try {
            $request = Ecs::describeRegions();
            $result  = $request->request();
            self::assertArrayHasKey('Region', $result['Regions']);
        } catch (ServerException $e) {
            self::assertEquals(
                'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                $e->getErrorMessage()
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
