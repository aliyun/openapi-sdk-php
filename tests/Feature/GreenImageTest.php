<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Green\Green;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Green\V20180509\ImageSyncScan;
use AlibabaCloud\Client\Exception\ServerException;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class GreenImageTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class GreenImageTest extends TestCase
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
        $request1 = AlibabaCloud::green()
                                ->v20180509()
                                ->imageSyncScan()
                                ->host('green.cn-shanghai.aliyuncs.com')
                                ->connectTimeout(20)
                                ->timeout(25);

        $request2 = Green::v20180509()
                         ->imageSyncScan()
                         ->host('green.cn-shanghai.aliyuncs.com')
                         ->connectTimeout(20)
                         ->timeout(25);

        self::assertInstanceOf(ImageSyncScan::class, $request1);
        self::assertInstanceOf(ImageSyncScan::class, $request2);
        self::assertEquals($request1, $request2);
    }

    /**
     * 传图片 URL 检测
     * 设置待检测图片， 一张图片一个task
     * 多张图片同时检测时，处理的时间由最后一个处理完的图片决定
     * 通常情况下批量检测的平均rt比单张检测的要长, 一次批量提交的图片数越多，rt被拉长的概率越高
     * 这里以单张图片检测作为示例, 如果是批量图片检测，请自行构建多个task
     * 计费按照该处传递的场景进行
     * 一次请求中可以同时检测多张图片，每张图片可以同时检测多个风险场景，计费按照场景计算
     * 例如：检测2张图片，场景传递porn,terrorism，计费会按照2张图片鉴黄，2张图片暴恐检测计算
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testImageSyncScan()
    {
        $task1  = [
            'dataId' => uniqid('', true),
            'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg',
        ];
        $result = AlibabaCloud::green()
                              ->v20180509()
                              ->imageSyncScan()
                              ->jsonBody([
                                             'tasks'  => [$task1],
                                             'scenes' => ['porn', 'terrorism'],
                                         ])
                              ->host('green.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();

        self::assertEquals('porn', $result['data'][0]['results'][0]['scene']);
        self::assertEquals('pass', $result['data'][0]['results'][0]['suggestion']);
        self::assertEquals('terrorism', $result['data'][0]['results'][1]['scene']);
        self::assertEquals('pass', $result['data'][0]['results'][1]['suggestion']);
    }

    /**
     * 异步检测
     * 返回 taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testImageAsyncScan()
    {
        $task1  = [
            'dataId' => uniqid('', true),
            'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg',
        ];
        $result = AlibabaCloud::green()
                              ->v20180509()
                              ->imageAsyncScan()
                              ->jsonBody([
                                             'tasks'  => [$task1],
                                             'scenes' => ['porn', 'terrorism'],
                                         ])
                              ->host('green.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();

        self::assertArrayHasKey('taskId', $result['data'][0]);
        self::assertNotEmpty($result['data'][0]['taskId']);

        return $result['data'][0]['taskId'];
    }

    /**
     * 查询异步检测结果
     * 返回 taskId
     *
     * @depends testImageAsyncScan
     *
     * @param string $taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testImageAsyncScanResults($taskId)
    {
        $result = AlibabaCloud::green()
                              ->v20180509()
                              ->imageAsyncScanResults()
                              ->jsonBody([
                                             $taskId,
                                         ])
                              ->host('green.cn-shanghai.aliyuncs.com')
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();

        self::assertArrayHasKey('taskId', $result['data'][0]);
        self::assertNotEmpty($result['data'][0]['taskId']);
    }
}
