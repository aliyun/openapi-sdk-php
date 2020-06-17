<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Vpc\V20160428\DescribeRegions;
use AlibabaCloud\Vpc\Vpc;
use PHPUnit\Framework\TestCase;

/**
 * Class VpcTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VpcTest extends TestCase
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
        $request1 = AlibabaCloud::vpc()
                                ->v20160428()
                                ->describeRegions()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Vpc::v20160428()
                       ->describeRegions()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(DescribeRegions::class, $request1);
        self::assertInstanceOf(DescribeRegions::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testVpc()
    {
        $result = Vpc::v20160428()
                     ->describeRegions()
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
