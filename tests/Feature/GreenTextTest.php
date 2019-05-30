<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Green\Green;
use PHPUnit\Framework\TestCase;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Green\V20180509\TextScan;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class GreenTextTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class GreenTextTest extends TestCase
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
                               ->textScan()
                               ->host('green.cn-shanghai.aliyuncs.com')
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(TextScan::class, $request);
    }

    /**
     * 文本内容检测
     *
     * 返回 taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testTextScan()
    {
        $task1 = [
            'dataId'  => uniqid('', true),
            'content' => '需要检测的文本内容',
        ];

        $result = Green::v20180509()
                       ->textScan()
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
     * 文本反垃圾结果反馈
     * 返回 taskId
     *
     * @depends testTextScan
     *
     * @param string $taskId
     *
     * @throws ClientException
     * @throws ServerException
     */
    public function testTextFeedback($taskId)
    {
        $result = Green::v20180509()
                       ->textFeedback()
                       ->jsonBody([
                                      'taskId'  => $taskId,
                                      'content' => '需要检测的文本内容',
                                      'label'   => 'spam',
                                  ])
                       ->host('green.cn-shanghai.aliyuncs.com')
                       ->connectTimeout(20)
                       ->timeout(25)
                       ->request();

        self::assertArrayHasKey('msg', $result);
        self::assertEquals('OK', $result['msg']);
    }
}
