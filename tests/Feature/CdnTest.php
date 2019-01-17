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

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testCdn()
    {
        $request = AlibabaCloud::cdn()->v20180510()
                               ->describeIpInfo()
                               ->withIP('192.168.0.1')
                               ->connectTimeout(15)
                               ->timeout(20)
                               ->withSecurityToken('token');

        $result = $request->request();
        self::assertEquals('False', $result['CdnIp']);
    }
}
