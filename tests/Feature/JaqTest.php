<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class JaqTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class JaqTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hongkong')->asGlobalClient();
    }

    public function testJaq()
    {
        try {
            $result = AlibabaCloud::jaq()
                                  ->v20161123()
                                  ->afsAppCheck()
                                  ->withCallerName('name')
                                  ->withSession('session')
                                  ->request();
            self::assertEquals(
                'the uid do not apply the service.',
                $result['ErrorMsg']
            );
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'AccessKeyId is mandatory for this action.',
                    'Specified access key is not found.',

                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
