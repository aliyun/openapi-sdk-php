<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Vod\Vod;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Vod\V20170321\DeleteImage;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class VodUploadTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class VodUploadTest extends TestCase
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

        $request3 = (new Vod())->v20170321()
                               ->deleteImage()
                               ->connectTimeout(60)
                               ->timeout(65);

        self::assertInstanceOf(DeleteImage::class, $request1);
        self::assertInstanceOf(DeleteImage::class, $request2);
        self::assertInstanceOf(DeleteImage::class, $request3);
        self::assertEquals($request1, $request2);
        self::assertEquals($request2, $request3);
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
     * 刷新视频上传凭证
     *
     * @depends testCreateUploadVideo
     *
     * @param $videoId
     *
     * @return string
     * @throws ClientException
     * @throws ServerException
     */
    public function testRefreshUploadVideo($videoId)
    {
        $result = Vod::v20170321()
                     ->refreshUploadVideo()
                     ->withVideoId($videoId)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('UploadAddress', $result);

        return $result['VideoId'];
    }

    /**
     * 获取图片上传地址和凭证
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testCreateUploadImage()
    {
        $result = Vod::v20170321()
                     ->createUploadImage()
                     ->withImageType('cover')
                     ->withImageExt('png')
                     ->withDescription('Description')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('ImageId', $result);

        return $result['ImageId'];
    }

    /**
     * 获取图片信息
     *
     * @depends testCreateUploadImage
     *
     * @param string $imageId
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testGetImageInfo($imageId)
    {
        $result = Vod::v20170321()
                     ->getImageInfo()
                     ->withImageId($imageId)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('ImageInfo', $result);

        return $imageId;
    }

    /**
     * 删除图片
     *
     * @depends testCreateUploadImage
     *
     * @param string $imageId
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testDeleteImage($imageId)
    {
        $result = Vod::v20170321()
                     ->deleteImage()
                     ->withDeleteImageType('ImageId')
                     ->withImageIds($imageId)
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('RequestId', $result);

        return $imageId;
    }

    /**
     * 获取辅助媒资上传地址和凭证
     *
     * @return string
     * @throws ServerException
     * @throws ClientException
     */
    public function testCreateUploadAttachedMedia()
    {
        $result = Vod::v20170321()
                     ->createuploadattachedmedia()
                     ->withBusinessType('watermark')
                     ->withMediaExt('gif')
                     ->withTitle('Title')
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('UploadAddress', $result);

        return $result['UploadAddress'];
    }

    /**
     * URL批量拉取上传
     *
     * @return array
     * @throws ServerException
     * @throws ClientException
     */
    public function testUploadMediaByURL()
    {
        $url                         = 'http://test.xxx.com/xxxx.mp4';
        $uploadMetadataList          = [];
        $uploadMetadata              = [];
        $uploadMetadata['SourceUrl'] = $url;
        $uploadMetadata['Title']     = 'upload by url sample';
        $uploadMetadataList[]        = $uploadMetadata;

        $result = Vod::v20170321()
                     ->uploadMediaByURL()
                     ->withUploadURLs($url)
                     ->withUploadMetadatas(json_encode($uploadMetadataList))
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('JobId', $result['UploadJobs'][0]);

        return $result['UploadJobs'];
    }

    /**
     * 注册媒资信息
     *
     * @return array
     * @throws ServerException
     * @throws ClientException
     * @expectedException \AlibabaCloud\Client\Exception\ServerException
     * @expectedExceptionMessageRegExp /The storageLocation must be registered on VOD./
     */
    public function testRegisterMedia()
    {
        $metaDataArray       = [];
        $metaData            = [];
        $metaData['Title']   = 'registerMedia by url sample';
        $metaData['FileURL'] = 'https://xxxxxx.oss-cn-shanghai.aliyuncs.com/vod_sample.mp4';
        $metaDataArray[]     = $metaData;

        $result = Vod::v20170321()
                     ->registerMedia()
                     ->withRegisterMetadatas(json_encode($metaDataArray))
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('JobId', $result['UploadJobs'][0]);

        return $result['UploadJobs'];
    }

    /**
     * 获取URL上传信息
     *
     * @return array
     * @throws ServerException
     * @throws ClientException
     */
    public function testGetURLUploadInfos()
    {

        // URL列表
        $urls   = [];
        $urls[] = 'http://xxx.cn-shanghai.aliyuncs.com/sample1.mp4';
        $urls[] = 'http://xxx.cn-shanghai.aliyuncs.com/sample2.mp4';
        // 对URL进行编码
        $uploadURLs = [];
        foreach ($urls as $url) {
            $uploadURLs[] = urlencode($url);
        }

        $result = Vod::v20170321()
                     ->getURLUploadInfos()
                     ->withUploadURLs(implode(',', $uploadURLs))
                     ->connectTimeout(60)
                     ->timeout(65)
                     ->request();

        self::assertArrayHasKey('URLUploadInfoList', $result);

        return $result['URLUploadInfoList'];
    }
}
