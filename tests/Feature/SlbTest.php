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

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testSlb()
    {
        $result = AlibabaCloud::slb()
                              ->v20140515()
                              ->describeRegions()
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
