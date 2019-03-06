<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class ImageSearchTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class ImageSearchTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testAddItem()
    {
        $result = AlibabaCloud::imageSearch()
                              ->v20180120()
                              ->addItem()
                              ->withInstanceName('sdktest')
                              ->withCateId('0')
                              ->withCustContent('{"key":"value"}')
                              ->withItemId('1234')
                              ->addPicture('picture', file_get_contents(__DIR__ . '/ImageSearch.jpg'))
                              ->host('imagesearch.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(30)
                              ->timeout(35)
                              ->request();

        self::assertArrayHasKey('Message', $result);
        self::assertEquals('success', $result['Message']);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testSearchItem()
    {
        $result = AlibabaCloud::imageSearch()
                              ->v20180120()
                              ->searchItem()
                              ->withInstanceName('sdktest')
                              ->withNum(10)
                              ->withStart(0)
                              ->withCateId('0')
                              ->withSearchPicture(file_get_contents(__DIR__ . '/ImageSearch.jpg'))
                              ->host('imagesearch.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(30)
                              ->timeout(35)
                              ->request();

        self::assertArrayHasKey('Message', $result);
        self::assertEquals('success', $result['Message']);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testDeleteItem()
    {
        $result = AlibabaCloud::imageSearch()
                              ->v20180120()
                              ->deleteItem()
                              ->withInstanceName('sdktest')
                              ->withItemId('1234')
                              ->addPicture('picture')
                              ->host('imagesearch.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(30)
                              ->timeout(35)
                              ->request();

        self::assertArrayHasKey('Message', $result);
        self::assertEquals('success', $result['Message']);
    }
}
