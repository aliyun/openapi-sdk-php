<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Slb\V20140515\DescribeRegions;
use PHPUnit\Framework\TestCase;

/**
 * Class SlbTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class SlbTest extends TestCase
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
        $request = AlibabaCloud::slb()
                               ->v20140515()
                               ->describeRegions()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(DescribeRegions::class, $request);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testSlb()
    {
        $result = AlibabaCloud::slb()
                              ->v20140515()
                              ->describeRegions()
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
