<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Sas\Sas;
use AlibabaCloud\Sas\V20181203\DescribeAlarmEventList;
use Exception;
use PHPUnit\Framework\TestCase;
use Stringy\Stringy;

/**
 * Class SasTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class SasTest extends TestCase
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
        $request1 = AlibabaCloud::sas()
                                ->v20181203()
                                ->describeAlarmEventList()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Sas::v20181203()
                       ->describeAlarmEventList()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(DescribeAlarmEventList::class, $request1);
        self::assertInstanceOf(DescribeAlarmEventList::class, $request2);
        self::assertEquals($request1, $request2);
    }

    public function testSas()
    {
        try {
            $result = Sas::v20181203()
                         ->describeAlarmEventList()
                         ->withFrom('sas')
                         ->withCurrentPage(1)
                         ->withPageSize(10)
                         ->connectTimeout(60)
                         ->timeout(65)
                         ->request();
            self::assertArrayHasKey('PageInfo', $result);
        } catch (Exception $exception) {
            // Allow foreign access timeout
            // Linux: timed out
            // Windows: Timed out
            self::assertTrue(
                Stringy::create($exception->getMessage())->contains('timed out', false)
            );
        }
    }
}
