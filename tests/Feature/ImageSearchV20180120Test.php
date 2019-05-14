<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\ImageSearch\ImageSearch;
use AlibabaCloud\ImageSearch\V20180120\AddItem;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class ImageSearchV20180120Test
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class ImageSearchV20180120Test extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('IMAGE_SEARCH_ACCESS_KEY_ID'),
            \getenv('IMAGE_SEARCH_ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request1 = AlibabaCloud::imageSearch()
                                ->v20180120()
                                ->addItem()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = ImageSearch::v20180120()
                               ->addItem()
                               ->connectTimeout(20)
                               ->timeout(25);
        self::assertInstanceOf(AddItem::class, $request1);
        self::assertInstanceOf(AddItem::class, $request2);
        self::assertEquals($request1, $request2);
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
                              ->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                              ->withCateId('0')
                              ->withCustContent('{"key":"value"}')
                              ->withItemId('1234')
                              ->addPicture('picture', file_get_contents(__DIR__ . '/ImageSearch.jpg'))
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
                              ->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                              ->withNum(10)
                              ->withStart(0)
                              ->withCateId('0')
                              ->withSearchPicture(file_get_contents(__DIR__ . '/ImageSearch.jpg'))
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
                              ->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                              ->withItemId('1234')
                              ->addPicture('picture')
                              ->connectTimeout(30)
                              ->timeout(35)
                              ->request();

        self::assertArrayHasKey('Message', $result);
        self::assertEquals('success', $result['Message']);
    }
}
