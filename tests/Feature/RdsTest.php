<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Rds\V20140815\DeleteDatabase;
use PHPUnit\Framework\TestCase;

/**
 * Class RdsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class RdsTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId(\getenv('REGION_ID'))->asGlobalClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::rds()
                               ->v20140815()
                               ->deleteDatabase()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(DeleteDatabase::class, $request);
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
                        ->connectTimeout(20)
                        ->timeout(25)
                        ->request();
        } catch (ServerException $e) {
            self::assertEquals(
                'DBInstanceIdentifier does not refer to an existing DB instance.',
                $e->getErrorMessage()
            );
        }
    }

    public function testSetMethod()
    {
        $with = AlibabaCloud::rds()
                            ->v20140815()
                            ->deleteDatabase()
                            ->withDBInstanceId(\time())
                            ->withDBName('name')
                            ->connectTimeout(20)
                            ->timeout(25);

        $set = AlibabaCloud::rds()
                           ->v20140815()
                           ->deleteDatabase()
                           ->setDBInstanceId(\time())
                           ->setDBName('name')
                           ->connectTimeout(20)
                           ->timeout(25);
        self::assertTrue(json_encode($set) === json_encode($with));
    }
}
