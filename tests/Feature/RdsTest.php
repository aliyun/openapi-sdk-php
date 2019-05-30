<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Rds\Rds;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Rds\V20140815\DeleteDatabase;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

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
        )->regionId(\getenv('REGION_ID'))->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::rds()
                                ->v20140815()
                                ->deleteDatabase()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Rds::v20140815()
                       ->deleteDatabase()
                       ->connectTimeout(20)
                       ->timeout(25);

        self::assertInstanceOf(DeleteDatabase::class, $request1);
        self::assertInstanceOf(DeleteDatabase::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     */
    public function testRds()
    {
        try {
            Rds::v20140815()
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
}
