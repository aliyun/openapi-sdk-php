<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class ImageSearchTestNew
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class ImageSearchTestNew extends TestCase
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

    public function testSearchImage()
    {
        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asDefaultClient();

        $request          = AlibabaCloud::imageSearch()
                                        ->v20190325()
                                        ->searchImage();
        $content          = file_get_contents(__DIR__ . '/ImageSearchNew.jpg');
        $encodePicContent = base64_encode($content);

        $result = $request->withInstanceName('yuanshoutest2')
                          ->withPicContent($encodePicContent)
                          ->withStart(0)
                          ->withNum(10)
                          ->request();

        self::assertArrayHasKey('Auctions', $result);
    }
}
