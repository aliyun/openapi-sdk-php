<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
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
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-hangzhou')->asGlobalClient();
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
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->request();
        self::assertArrayHasKey('Data', $result);
    }
}
