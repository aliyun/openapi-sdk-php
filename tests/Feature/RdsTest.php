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
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testRds()
    {
        $request = AlibabaCloud::rds()
                               ->v20140815()
                               ->deleteDatabase()
                               ->withDBInstanceId(\time())
                               ->withDBName('name');

        try {
            $request->request();
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'DBInstanceIdentifier does not refer to an existing DB instance.',
                    'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                ]

            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
