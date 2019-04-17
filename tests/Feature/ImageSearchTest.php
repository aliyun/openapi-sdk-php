<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\ImageSearch\V20180120\AddItem;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class ImageSearchTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class ImageSearchTest extends TestCase
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
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::imageSearch()
                               ->v20180120()
                               ->addItem()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(AddItem::class, $request);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The specified instance name is invalid./
     */
    public function testAddItem()
    {
        $request = AlibabaCloud::imageSearch()
                               ->v20180120()
                               ->addItem()
                               ->withInstanceName('sdktest')
                               ->withCateId('0')
                               ->withCustContent('{"key":"value"}')
                               ->withItemId('1234')
                               ->addPicture('picture', file_get_contents(__DIR__ . '/ImageSearch.jpg'))
                               ->host('imagesearch.cn-shanghai.aliyuncs.com')
                               ->connectTimeout(30)
                               ->timeout(35);
        $result  = $request->request();
        self::assertArrayHasKey('Message', $result);
        self::assertEquals('success', $result['Message']);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The specified instance name is invalid../
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
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The specified instance name is invalid../
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

    public function testSearchImage()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('IMAGE_SEARCH_ACCESS_KEY_ID'),
            \getenv('IMAGE_SEARCH_ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();

        $request = AlibabaCloud::imageSearch()
                               ->v20190325()
                               ->searchImage()
                               ->contentType('application/x-www-form-urlencoded; charset=UTF-8');

        $content          = file_get_contents(__DIR__ . '/ImageSearch.jpg');
        $encodePicContent = base64_encode($content);

        $result = $request->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                          ->withPicContent($encodePicContent)
                          ->withStart(0)
                          ->withNum(10)
                          ->request();

        self::assertArrayHasKey('Auctions', $result);
    }
}
