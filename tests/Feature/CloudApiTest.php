<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\CloudAPI\CloudAPI;
use AlibabaCloud\CloudAPI\V20160714\DescribeRegions;
use PHPUnit\Framework\TestCase;

/**
 * Class CloudApiTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CloudApiTest extends TestCase
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
        $request1 = AlibabaCloud::cloudAPI()
                                ->v20160714()
                                ->describeRegions()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = CloudAPI::V20160714()
                            ->describeRegions()
                            ->connectTimeout(60)
                            ->timeout(65);

        self::assertInstanceOf(DescribeRegions::class, $request1);
        self::assertInstanceOf(DescribeRegions::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testCloudApi()
    {
        $request = CloudAPI::v20160714()
                           ->describeRegions()
                           ->connectTimeout(60)
                           ->timeout(65);

        $result = $request->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
