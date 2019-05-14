<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\ImageSearch\ImageSearch;
use AlibabaCloud\ImageSearch\V20190325\AddImage;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class ImageSearchV20190325Test
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class ImageSearchV20190325Test extends TestCase
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
                                ->v20190325()
                                ->addImage()
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = ImageSearch::v20190325()
                               ->addImage()
                               ->connectTimeout(20)
                               ->timeout(25);
        self::assertInstanceOf(AddImage::class, $request1);
        self::assertInstanceOf(AddImage::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testAddImage()
    {
        $content          = file_get_contents(__DIR__ . '/ImageSearch.jpg');
        $encodePicContent = base64_encode($content);

        $result = AlibabaCloud::imageSearch()
                              ->v20190325()
                              ->addimage()
                              ->contentType('application/x-www-form-urlencoded; charset=UTF-8')
                              ->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                              ->withProductId('1234')
                              ->withPicName('test')
                              ->withPicContent($encodePicContent)
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
    public function testSearchImage()
    {
        $content          = file_get_contents(__DIR__ . '/ImageSearch.jpg');
        $encodePicContent = base64_encode($content);

        $result = AlibabaCloud::imageSearch()
                              ->v20190325()
                              ->searchImage()
                              ->contentType('application/x-www-form-urlencoded; charset=UTF-8')
                              ->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                              ->withPicContent($encodePicContent)
                              ->withStart(0)
                              ->withNum(10)
                              ->connectTimeout(30)
                              ->timeout(35)
                              ->request();

        self::assertArrayHasKey('Auctions', $result);
    }

    /**
     * @throws ClientException
     * @throws ServerException
     */
    public function testDeleteImage()
    {
        $result = AlibabaCloud::imageSearch()
                              ->v20190325()
                              ->deleteImage()
                              ->contentType('application/x-www-form-urlencoded; charset=UTF-8')
                              ->withInstanceName(getenv('IMAGE_SEARCH_INSTANCE_NAME'))
                              ->withProductId('1234')
                              ->connectTimeout(30)
                              ->timeout(35)
                              ->request();

        self::assertArrayHasKey('Message', $result);
        self::assertEquals('success', $result['Message']);
    }
}
