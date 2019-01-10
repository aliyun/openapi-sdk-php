<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use PHPUnit\Framework\TestCase;

/**
 * Class VpcTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VpcTest extends TestCase
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
    public function testVpc()
    {
        $request = AlibabaCloud::vpc()
                               ->v20160428()
                               ->describeRegions();
        try {
            $result = $request->request();
            self::assertArrayHasKey('Region', $result['Regions']);
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
