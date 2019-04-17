<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Aegis\V20161111\DescribeAlarmEventDetail;

/**
 * Class AegisTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class AegisTest extends TestCase
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
        )->regionId('cn-hangzhou')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::aegis()
                               ->v20161111()
                               ->describeAlarmEventDetail()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(DescribeAlarmEventDetail::class, $request);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testAegis()
    {
        $result = AlibabaCloud::aegis()
                              ->v20161111()
                              ->describeAlarmEventDetail()
                              ->withAlarmUniqueInfo('info')
                              ->withFrom('from')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('RequestId', $result);
    }

    /**
     * @throws ClientException
     */
    public function testSetMethod()
    {
        $with = AlibabaCloud::aegis()
                            ->v20161111()
                            ->describeAlarmEventDetail()
                            ->withAlarmUniqueInfo('info')
                            ->withFrom('from')
                            ->connectTimeout(20)
                            ->timeout(25);

        $set = AlibabaCloud::aegis()
                           ->v20161111()
                           ->describeAlarmEventDetail()
                           ->setAlarmUniqueInfo('info')
                           ->setFrom('from')
                           ->connectTimeout(20)
                           ->timeout(25);

        self::assertTrue(json_encode($set) === json_encode($with));
    }
}
