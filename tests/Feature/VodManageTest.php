<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Vod\Vod;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Vod\V20170321\DeleteImage;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class VodManageTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VodManageTest extends TestCase
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
     * 搜索媒资信息
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     */
    public function testSearchMedia()
    {
        $result = Vod::v20170321()
                     ->searchMedia()
                     ->withFields('Title,CoverURL,Status')
                     ->withMatch("Status in ('Normal','Checking') and CreationTime = ('2018-07-01T08:00:00Z','2018-08-01T08:00:00Z')")
                     ->withPageNo(1)
                     ->withPageSize(10)
                     ->withSearchType('video')
                     ->withSortBy('CreationTime:Desc')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('MediaList', $result);

        return $result['MediaList'];
    }

    /**
     * 批量获取视频信息
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     */
    public function testGetVideoInfos()
    {
        $result = Vod::v20170321()
                     ->getVideoInfos()
                     ->withVideoIds('e67e761ec04342cd9ca5149c74xxxxxx,b19439abb9a94374b7f4d45f69xxxxxx')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('NonExistVideoIds', $result);

        return $result['NonExistVideoIds'];
    }

    /**
     * 修改视频信息
     *
     * @depends testCreateUploadVideo
     *
     * @param string $videoId
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testUpdateVideoInfo($videoId)
    {
        $result = Vod::v20170321()
                     ->updateVideoInfo()
                     ->withVideoId($videoId)
                     ->withTitle('New Title')
                     ->withDescription('New Description')
                     ->withCoverURL('http://img.alicdn.com/tps/TB1qnJ1PVXXXXXCXXXXXXXXXXXX-700-700.png')
                     ->withTags('tag1,tag2')
                     ->withCateId(0)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('RequestId', $result);

        return $videoId;
    }

    /**
     * 获取视频信息
     *
     * @depends testUpdateVideoInfo
     *
     * @param string $videoId
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testGetVideoInfo($videoId)
    {
        $result = Vod::v20170321()
                     ->getVideoInfo()
                     ->withVideoId($videoId)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('Video', $result);
        self::assertEquals('New Description', $result['Video']['Description']);

        return $videoId;
    }

    /**
     * 获取源文件信息（含原片下载地址）
     *
     * @depends testGetVideoInfo
     *
     * @param string $videoId
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testGetMezzanineInfo($videoId)
    {
        $result = Vod::v20170321()
                     ->getMezzanineInfo()
                     ->withVideoId($videoId)
                     ->withAuthTimeout(3600 * 5)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('Mezzanine', $result);

        return $videoId;
    }

    /**
     * 获取视频列表
     *
     * @depends testGetVideoInfo
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     */
    public function testGetVideoList()
    {
        $result = Vod::v20170321()
                     ->getVideoList()
                     ->withPageNo(1)
                     ->withPageSize(20)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('VideoList', $result);

        return $result['Video'];
    }

    /**
     * 批量修改视频信息
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     */
    public function testUpdateVideoInfos()
    {
        $updateContentArray        = [];
        $updateContent1            = [];
        $updateContent1['VideoId'] = 'e67e761ec04342cd9ca5149c74xxxxxx';
        $updateContent1['Title']   = 'new Title1';
        $updateContentArray[]      = $updateContent1;
        $updateContent2            = [];
        $updateContent2['VideoId'] = 'b19439abb9a94374b7f4d45f69xxxxxx';
        $updateContent2['Title']   = 'new Title2';
        $updateContentArray[]      = $updateContent2;

        $result = Vod::v20170321()
                     ->updateVideoInfos()
                     ->withUpdateContent(json_encode($updateContentArray))
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('NonExistVideoIds', $result);

        return $result['NonExistVideoIds'];
    }

    /**
     * 删除视频
     *
     * @depends                        testGetVideoInfo
     *
     *
     * @return array
     * @throws ClientException
     * @throws ServerException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The video does not exist./
     */
    public function testDeleteVideos()
    {
        $result = Vod::v20170321()
                     ->deleteVideo()
                     ->withVideoIds('abc123')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('RequestId', $result);

        return $result['RequestId'];
    }

    /**
     * 删除媒体流
     *
     * @depends                        testGetVideoInfo
     *
     * @param string $videoId
     *
     * @throws ClientException
     * @throws ServerException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The stream does not exist./
     */
    public function testDeleteStream($videoId)
    {
        Vod::v20170321()
           ->deleteStream()
           ->withVideoId($videoId)
           ->withJobIds($videoId)
           ->connectTimeout(60)
           ->timeout(65)
           ->request();
    }

    /**
     * 批量删除源文件
     *
     * @depends                        testGetVideoInfo
     *
     * @param string $videoId
     *
     * @return mixed
     * @throws ClientException
     * @throws ServerException
     */
    public function testDeleteMezzanines($videoId)
    {
        $result = Vod::v20170321()
                     ->deleteMezzanines()
                     ->withVideoIds($videoId)
                     ->withForce(false)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('UnRemoveableVideoIds', $result);

        return $result['UnRemoveableVideoIds'];
    }

    /**
     * 批量更新图片信息
     *
     * @depends                        testGetVideoInfo
     *
     * @return mixed
     * @throws ClientException
     * @throws ServerException
     */
    public function testUpdateImageInfos()
    {
        $updateContentArray        = [];
        $updateContent1            = [];
        $updateContent1['ImageId'] = '7e66f99e1cb34199822753981xxxxxx';
        $updateContent1['Title']   = 'new Title1';
        $updateContentArray[]      = $updateContent1;
        $updateContent2            = [];
        $updateContent2['ImageId'] = 'd2171a5656454c49a4f11a544cxxxxx';
        $updateContent2['Title']   = 'new Title2';
        $updateContentArray[]      = $updateContent2;

        $result = Vod::v20170321()
                     ->updateImageInfos()
                     ->withUpdateContent(json_encode($updateContentArray))
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('NonExistImageIds', $result);

        return $result['NonExistImageIds'];
    }
}
