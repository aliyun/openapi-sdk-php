<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Alimt\Alimt;
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
        $request1 = AlibabaCloud::alimt()
                                ->v20181012()
                                ->translateECommerce()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Alimt::v20181012()
                         ->translateECommerce()
                         ->connectTimeout(20)
                         ->timeout(25);

        $request3 = (new Alimt())->v20181012()
                                 ->translateECommerce()
                                 ->connectTimeout(20)
                                 ->timeout(25);

        self::assertInstanceOf(TranslateECommerce::class, $request1);
        self::assertInstanceOf(TranslateECommerce::class, $request2);
        self::assertInstanceOf(TranslateECommerce::class, $request3);
        self::assertEquals($request1, $request2);
        self::assertEquals($request1, $request3);
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
