<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Alimt\V20181012\TranslateECommerce;

/**
 * Class AlimtTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class AlimtTest extends TestCase
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
        )->regionId('cn-hangzhou')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::alimt()
                               ->v20181012()
                               ->translateECommerce()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(TranslateECommerce::class, $request);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testAlimt()
    {
        $result = AlibabaCloud::alimt()
                              ->v20181012()
                              ->translateECommerce()
                              ->method('POST')
                              ->withSourceLanguage('en')
                              ->withScene('title')
                              ->withSourceText('book')
                              ->withFormatType('text')
                              ->withTargetLanguage('zh')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('Data', $result);
    }
}
