<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Cdn\Cdn;
use AlibabaCloud\Cdn\V20180510\DescribeIpInfo;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class CdnTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CdnTest extends TestCase
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
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::cdn()
                                ->v20180510()
                                ->describeIpInfo()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Cdn::v20180510()
                       ->describeIpInfo()
                       ->connectTimeout(60)
                       ->timeout(65);

        $request3 = (new Cdn())->v20180510()
                               ->describeIpInfo()
                               ->connectTimeout(60)
                               ->timeout(65);

        self::assertInstanceOf(DescribeIpInfo::class, $request1);
        self::assertInstanceOf(DescribeIpInfo::class, $request2);
        self::assertInstanceOf(DescribeIpInfo::class, $request3);
        self::assertEquals($request1, $request2);
        self::assertEquals($request1, $request3);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testCdn()
    {
        $request = Cdn::v20180510()
                      ->describeIpInfo()
                      ->withIP('192.168.0.1')
                      ->connectTimeout(60)
                      ->timeout(65)
                      ->withSecurityToken('token');

        $result = $request->request();
        self::assertEquals('False', $result['CdnIp']);
    }
}
