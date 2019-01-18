<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class DdsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class DdsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId(\getenv('REGION_ID'))->asGlobalClient();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testDds()
    {
        $request = AlibabaCloud::dds()
                               ->v20151201()
                               ->describeRegions()
                               ->connectTimeout(15)
                               ->timeout(20);

        $result = $request->request();
        self::assertArrayHasKey('DdsRegion', $result['Regions']);
    }
}
