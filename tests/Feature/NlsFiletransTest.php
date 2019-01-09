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

    public function testSubmitTask()
    {
        try {
            $result = AlibabaCloud::nlsFiletrans()
                                  ->v20180817()
                                  ->submitTask()
                                  ->host('filetrans.cn-shanghai.aliyuncs.com')
                                  ->withTask(json_encode([
                                                             'app_key'   => 'app_key',
                                                             'file_link' => 'https://aliyun-nls.oss-cn-hangzhou.aliyuncs.com/asr/fileASR/examples/nls-sample-16k.wav',
                                                         ]))
                                  ->withDebug('true')
                                  ->request();
            self::assertArrayHasKey('TaskId', $result);
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                    'AccessKeyId is mandatory for this action.',
                    'Specified access key is not found.',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testGetTaskResult()
    {
        try {
            $result = AlibabaCloud::nlsFiletrans()
                                  ->v20180817()
                                  ->getTaskResult()
                                  ->host('filetrans.cn-shanghai.aliyuncs.com')
                                  ->withTaskId('id')
                                  ->withDebug('true')
                                  ->request();
            self::assertArrayHasKey('TaskId', $result);
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                    'AccessKeyId is mandatory for this action.',
                    'Specified access key is not found.',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }

    public function testSubmitTaskWithClientMethod()
    {
        try {
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
                                  ->request();

            self::assertArrayHasKey('TaskId', $result);
        } catch (ServerException $e) {
            self::assertContains(
                $e->getErrorMessage(),
                [
                    'The input parameter "AccessKeyId" that is mandatory for processing this request is not supplied.',
                    'AccessKeyId is mandatory for this action.',
                ]
            );
        } catch (ClientException $e) {
            self::assertStringStartsWith('cURL error', $e->getErrorMessage());
        }
    }
}
