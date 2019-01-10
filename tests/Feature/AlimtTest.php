<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use PHPUnit\Framework\TestCase;

/**
 * Class AlimtTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class AlimtTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ALIMT_ACCESS_KEY_ID'),
            \getenv('ALIMT_ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')->asGlobalClient();
    }

    /**
     * @throws \AlibabaCloud\Client\Exception\ServerException
     */
    public function testAlimt()
    {
        $request = AlibabaCloud::alimt()
                               ->v20181012()
                               ->translateECommerce()
                               ->method('POST')
                               ->withSourceLanguage('en')
                               ->withScene('title')
                               ->withSourceText('book')
                               ->withFormatType('text')
                               ->withTargetLanguage('zh');
        try {
            $result = $request->request();
            self::assertArrayHasKey('Data', $result);
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
