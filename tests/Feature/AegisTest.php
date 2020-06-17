<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Aegis\Aegis;
use AlibabaCloud\Aegis\V20161111\DescribeAlarmEventDetail;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

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
        $request1 = AlibabaCloud::aegis()
                                ->v20161111()
                                ->describeAlarmEventDetail()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Aegis::v20161111()
                         ->describeAlarmEventDetail()
                         ->connectTimeout(60)
                         ->timeout(65);

        $request3 = (new Aegis())->v20161111()
                                 ->describeAlarmEventDetail()
                                 ->connectTimeout(60)
                                 ->timeout(65);

        self::assertInstanceOf(DescribeAlarmEventDetail::class, $request1);
        self::assertInstanceOf(DescribeAlarmEventDetail::class, $request2);
        self::assertInstanceOf(DescribeAlarmEventDetail::class, $request3);
        self::assertEquals($request1, $request2);
        self::assertEquals($request1, $request3);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testAegis()
    {
        $result = Aegis::v20161111()
                       ->describeAlarmEventDetail()
                       ->withAlarmUniqueInfo('info')
                       ->withFrom('from')
                       ->connectTimeout(60)
                       ->timeout(65)
                       ->request();
        self::assertArrayHasKey('RequestId', $result);
    }
}
