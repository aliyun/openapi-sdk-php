<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class SlbTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class SlbTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testSlb()
    {
        $request = AlibabaCloud::slb()
                               ->v20140515()
                               ->describeRegions();
        try {
            $result = $request->request();
            self::assertArrayHasKey('Region', $result['Regions']);
        } catch (ServerException $e) {
            self::assertEquals(
                'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                $e->getErrorMessage()
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
