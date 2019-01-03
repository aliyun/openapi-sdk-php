<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class RamTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class RamTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    public function testRam()
    {
        $request = AlibabaCloud::ram()
                               ->v20150501()
                               ->listAccessKeys();
        try {
            $result = $request->request();
            self::assertEquals(
                \getenv('ACCESS_KEY_ID'),
                $result['AccessKeys']['AccessKey'][0]['AccessKeyId']
            );
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
