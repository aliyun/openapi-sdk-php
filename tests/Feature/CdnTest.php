<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Cdn\Cdn;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Cdn\V20180510\DescribeIpInfo;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

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
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Cdn::v20180510()
                       ->describeIpInfo()
                       ->connectTimeout(20)
                       ->timeout(25);

        self::assertInstanceOf(DescribeIpInfo::class, $request1);
        self::assertInstanceOf(DescribeIpInfo::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testCdn()
    {
        $request = AlibabaCloud::cdn()
                               ->v20180510()
                               ->describeIpInfo()
                               ->withIP('192.168.0.1')
                               ->connectTimeout(20)
                               ->timeout(25)
                               ->withSecurityToken('token');

        $result = $request->request();
        self::assertEquals('False', $result['CdnIp']);
    }
}
