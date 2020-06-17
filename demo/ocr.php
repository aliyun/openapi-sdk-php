<?php

require_once '../vendor/autoload.php';

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * @see https://help.aliyun.com/document_detail/151900.html
 */

try {
    // Create a global client
    AlibabaCloud::accessKeyClient(
        \getenv('ACCESS_KEY_ID'),
        \getenv('ACCESS_KEY_SECRET')
    )->regionId('cn-shanghai')->asDefaultClient();

    $result = AlibabaCloud::ocr()
                          ->v20191230()
                          ->recognizeLicensePlate()
                          ->withImageURL('https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/tiankong/3%E8%BD%A6%E7%89%8C%E8%AF%86%E5%88%AB.jpg')
                          ->request();

    // Convert the result to an array and print
    print_r($result->toArray());
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
