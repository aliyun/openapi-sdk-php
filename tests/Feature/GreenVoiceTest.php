<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Green\V20180509\VoiceAsyncScan;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class GreenVoiceTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class GreenVoiceTest extends TestCase
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
                               ->voiceAsyncScan()
                               ->host('green.cn-shanghai.aliyuncs.com')
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(VoiceAsyncScan::class, $request);
    }

    /**
     * 提交语音异步检测任务
     *
     * 返回 taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testVoiceAsyncScan()
    {
        $task1  = [
            'dataId' => uniqid('', true),
            'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/voice.mp3',
        ];
        $result = AlibabaCloud::green()
                              ->v20180509()
                              ->voiceAsyncScan()
                              ->jsonBody([
                                             'tasks'  => [$task1],
                                             'scenes' => ['antispam'],
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
     * 查询视频异步检测结果
     * 返回 taskId
     *
     * @depends testVoiceAsyncScan
     *
     * @param string $taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testVideoAsyncScanResults($taskId)
    {
        $result = AlibabaCloud::green()
                              ->v20180509()
                              ->voiceAsyncScanResults()
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
