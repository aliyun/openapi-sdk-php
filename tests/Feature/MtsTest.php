<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class MtsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class MtsTest extends TestCase
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
    public function testMts()
    {
        $result = AlibabaCloud::mts()
                              ->v20140618()
                              ->queryFpImportResult()
                              ->format('JSON')
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->request();
        self::assertArrayHasKey('PageInfo', $result);
    }
}
