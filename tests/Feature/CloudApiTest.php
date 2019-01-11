<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class CloudApiTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CloudApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')
                    ->asGlobalClient();
    }

    /**
     * @throws ServerException
     */
    public function testCloudApi()
    {
        $request = AlibabaCloud::cloudAPI()
                               ->v20160714()
                               ->describeRegions();

        try {
            $result = $request->request();
            self::assertArrayHasKey('Region', $result['Regions']);
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

}
