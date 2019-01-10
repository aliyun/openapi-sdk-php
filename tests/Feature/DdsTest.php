<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
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
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    /**
     * @throws \AlibabaCloud\Client\Exception\ServerException
     */
    public function testDds()
    {
        $request = AlibabaCloud::dds()
                               ->v20151201()
                               ->describeRegions();
        try {
            $result = $request->request();
            self::assertArrayHasKey('DdsRegion', $result['Regions']);
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
