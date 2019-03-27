<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Iot\V20180120\BatchGetDeviceState;
use PHPUnit\Framework\TestCase;

/**
 * Class IotTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class IotTest extends TestCase
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
        $request = AlibabaCloud::iot()
                               ->v20180120()
                               ->batchGetDeviceState()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(BatchGetDeviceState::class, $request);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testCs()
    {
        $result = AlibabaCloud::iot()
                              ->v20180120()
                              ->batchGetDeviceState()
                              ->withIotInstanceId('id')
                              ->withProductKey('key')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertEquals('物联网平台实例不存在', $result['ErrorMessage']);
    }
}
