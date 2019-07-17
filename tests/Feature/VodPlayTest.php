<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Vod\Vod;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Vod\V20170321\DeleteImage;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class VodPlayTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VodPlayTest extends TestCase
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
        $request1 = AlibabaCloud::vod()
                                ->v20170321()
                                ->deleteImage()
                                ->connectTimeout(60)
                                ->timeout(65);

        $request2 = Vod::v20170321()
                       ->deleteImage()
                       ->connectTimeout(60)
                       ->timeout(65);

        self::assertInstanceOf(DeleteImage::class, $request1);
        self::assertInstanceOf(DeleteImage::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * 获取视频上传地址和凭证
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testCreateUploadVideo()
    {
        $result = Vod::v20170321()
                     ->createUploadVideo()
                     ->withTitle('title')
                     ->withFileName('FileName.mov')
                     ->withDescription('Description')
                     ->withCoverURL('CoverURL')
                     ->withTags('tag')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('UploadAddress', $result);

        return $result['VideoId'];
    }

    /**
     * 获取播放凭证
     *
     * @depends                        testCreateUploadVideo
     *
     * @param $videoId
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The video has no stream to play for the request parameter/
     */
    public function testGetPlayInfo($videoId)
    {
        $result = Vod::v20170321()
                     ->getPlayInfo()
                     ->withVideoId($videoId)
                     ->withAuthTimeout(3600 * 24)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('VideoMeta', $result);

        return $result['VideoMeta'];
    }

    /**
     * 获取播放凭证
     *
     * @depends                        testCreateUploadVideo
     *
     * @param $videoId
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     */
    public function testGetVideoPlayAuth($videoId)
    {
        $result = Vod::v20170321()
                     ->getVideoPlayAuth()
                     ->withVideoId($videoId)
                     ->withAuthInfoTimeout(3600 * 24)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('VideoMeta', $result);

        return $result['VideoMeta'];
    }
}
