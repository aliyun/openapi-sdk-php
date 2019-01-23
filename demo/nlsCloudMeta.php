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
    $result = AlibabaCloud::nlsCloudMeta()
                          ->v20180518()
                          ->createToken()
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
