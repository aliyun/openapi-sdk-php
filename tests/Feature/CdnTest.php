<?php

namespace AlibabaCloud\Tests\Feature;

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
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testCdn()
    {
        $request = AlibabaCloud::cdn()
                               ->v20180510()
                               ->describeIpInfo()
                               ->withIP('192.168.0.1')
                               ->withSecurityToken('token');

        try {
            $result = $request->request();
            self::assertEquals('False', $result['CdnIp']);
        } catch (ServerException $e) {
            self::assertEquals('AccessKeyId is mandatory for this action.', $e->getErrorMessage());
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
