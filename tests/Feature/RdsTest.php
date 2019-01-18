<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class RdsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class RdsTest extends TestCase
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
     */
    public function testRds()
    {
        try {
            AlibabaCloud::rds()
                        ->v20140815()
                        ->deleteDatabase()
                        ->withDBInstanceId(\time())
                        ->withDBName('name')
                        ->connectTimeout(15)
                        ->timeout(20)
                        ->request();
        } catch (ServerException $e) {
            self::assertEquals(
                'DBInstanceIdentifier does not refer to an existing DB instance.',
                $e->getErrorMessage()
            );
        }
    }
}
