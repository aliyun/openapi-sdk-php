<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class CsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class CsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testCs()
    {
        try {
            $result = AlibabaCloud::cS()
                                  ->v20151215()
                                  ->describeApiVersion()
                                  ->request();
            self::assertEquals('2015-12-21', $result['build']);
        } catch (ServerException $e) {
            self::assertEquals(
                'AccessKeyId is mandatory for this action.',
                $e->getErrorMessage()
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
