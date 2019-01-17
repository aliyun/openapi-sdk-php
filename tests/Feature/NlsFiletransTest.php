<?php

namespace AlibabaCloud\Tests\Feature;

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use PHPUnit\Framework\TestCase;

/**
 * Class NlsFiletransTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class NlsFiletransTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId('cn-shanghai')->asGlobalClient();
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testSubmitTask()
    {
        $result = AlibabaCloud::nlsFiletrans()
                              ->v20180817()
                              ->submitTask()
                              ->host('filetrans.cn-shanghai.aliyuncs.com')
                              ->withTask(json_encode([
                                                         'app_key'   => 'app_key',
                                                         'file_link' => 'https://aliyun-nls.oss-cn-hangzhou.aliyuncs.com/asr/fileASR/examples/nls-sample-16k.wav',
                                                     ]))
                              ->withDebug('true')
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->request();
        self::assertArrayHasKey('TaskId', $result);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testGetTaskResult()
    {
        $result = AlibabaCloud::nlsFiletrans()
                              ->v20180817()
                              ->getTaskResult()
                              ->host('filetrans.cn-shanghai.aliyuncs.com')
                              ->withTaskId('id')
                              ->withDebug('true')
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->request();
        self::assertArrayHasKey('TaskId', $result);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testSubmitTaskWithClientMethod()
    {
        $result = AlibabaCloud::rpcRequest()
                              ->product('nls-cloud-meta')
                              ->version('2018-08-17')
                              ->method('POST')
                              ->action('SubmitTask')
                              ->host('filetrans.cn-shanghai.aliyuncs.com')
                              ->options([
                                            'query' => [
                                                'Task'  => json_encode([
                                                                           'app_key'   => 'app_key',
                                                                           'file_link' => 'https://aliyun-nls.oss-cn-hangzhou.aliyuncs.com/asr/fileASR/examples/nls-sample-16k.wav',
                                                                       ]),
                                                'Debug' => 'true',
                                            ],
                                        ])
                              ->connectTimeout(15)
                              ->timeout(20)
                              ->request();

        self::assertArrayHasKey('TaskId', $result);
    }
}
