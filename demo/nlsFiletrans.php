<?php

require_once '../vendor/autoload.php';

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// Create a global client
AlibabaCloud::accessKeyClient(
    \getenv('ACCESS_KEY_ID'),
    \getenv('ACCESS_KEY_SECRET')
)->regionId('cn-shanghai')->asGlobalClient();

try {
    // Submit task
    $result = AlibabaCloud::nlsFiletrans()
                          ->v20180817()
                          ->submitTask()
                          ->withTask(json_encode([
                                                     'app_key'   => 'app_key',
                                                     'file_link' => 'https://aliyun-nls.oss-cn-hangzhou.aliyuncs.com/asr/fileASR/examples/nls-sample-16k.wav',
                                                 ]))
                          ->withDebug('true')
                          ->request();
    // Convert the result to an array and print
    print_r($result->toArray());

    // Query task status
    $statusResult = AlibabaCloud::nlsFiletrans()
                                ->v20180817()
                                ->getTaskResult()
                                ->withTaskId($result['TaskId'])
                                ->withDebug('true')
                                ->request();
    // Convert the result to an array and print
    print_r($statusResult->toArray());
} catch (ClientException $e) {
    // Print the error code
    echo $e->getErrorCode() . PHP_EOL;
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error code
    echo $e->getErrorCode() . PHP_EOL;
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    // Print the RequestId
    echo $e->getRequestId() . PHP_EOL;
    // Convert the result to an array and print
    print_r($e->getResult()->toArray());
}
