<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Green\Green;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Green\V20180509\VideoAsyncScan;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class GreenVideoTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class GreenVideoTest extends TestCase
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
        $request = AlibabaCloud::green()
                               ->v20180509()
                               ->videoAsyncScan()
                               ->host('green.cn-shanghai.aliyuncs.com')
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(VideoAsyncScan::class, $request);
    }

    /**
     * 提交视频url检测任务
     * 计费按照该处传递的场景进行
     * 一次请求中可以同时检测多个视频，每个视频可以同时检测多个风险场景，计费按照场景和视频截帧数计算
     * 例如：检测2个视频，场景传递porn,terrorism，计费会按照2个视频的截帧总数乘以鉴黄场景的价格加上2个视频的截帧总数乘以暴恐检测场景的费用计算//本地文件先进行上传，然后进行检测
     * $task1 = array('dataId' =>  uniqid(),
     *
     * 返回 taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testVideoAsyncScan()
    {
        $task1  = [
            'dataId' => uniqid('', true),
            'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/video.mp4',
        ];
        $result = Green::v20180509()
                       ->videoAsyncScan()
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
     * 提交视频语音综合检测任务
     *
     * 设置待检测视频，默认一次请求只支持1个task，如果需要开放到更多，请通过工单联系我们。
     * 计费按照该处传递的场景进行
     * 一次请求中可以同时检测多个视频，每个视频可以同时检测多个风险场景，计费按照场景和视频截帧数计算
     *  例如：检测2个视频，场景传递porn,terrorism，计费会按照2个视频的截帧总数乘以鉴黄场景的价格加上2个视频的截帧总数乘以暴恐检测场景的费用计算
     * 如果同时检测视频画面和视频中的语音，视频中的画面还是按照上述示例计费，语音部分按照视频语音的总时长进行计费
     *
     * 返回 taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testVideoAsyncScanWithAudioScenes()
    {
        $task1 = [
            'dataId' => uniqid('', true),
            'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/video.mp4',
        ];

        $result = Green::v20180509()
                       ->videoAsyncScan()
                       ->jsonBody([
                                      'tasks'       => [$task1],
                                      'scenes'      => ['porn', 'terrorism'],
                                      'audioScenes' => 'antispam',
                                  ])
                       ->host('green.cn-shanghai.aliyuncs.com')
                       ->connectTimeout(20)
                       ->timeout(25)
                       ->request();

        self::assertArrayHasKey('taskId', $result['data'][0]);
        self::assertNotEmpty($result['data'][0]['taskId']);
    }

    /**
     * 查询视频异步检测结果
     * 返回 taskId
     *
     * @depends testVideoAsyncScan
     *
     * @param string $taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testVideoAsyncScanResults($taskId)
    {
        $result = Green::v20180509()
                       ->videoAsyncScanResults()
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

    /**
     * 视频截帧同步检测
     *
     * 计费按照该处传递的场景进行
     * 一次请求中可以同时检测多个视频，每个视频可以同时检测多个风险场景，计费按照场景和视频截帧数计算
     * 例如：检测2个视频，场景传递porn,terrorism，
     * 计费会按照2个视频的截帧总数乘以鉴黄场景的价格加上2个视频的截帧总数乘以暴恐检测场景的费用计算
     * 本地文件先进行上传，然后进行检测
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testVideoSyncScan()
    {
        $task1 = [
            'frames' => [
                ['offset' => '0', 'url' => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg'],
                ['offset' => '1', 'url' => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg'],
                ['offset' => '2', 'url' => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg'],
            ],
        ];

        $result = Green::v20180509()
                       ->videoSyncScan()
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
    }
}
