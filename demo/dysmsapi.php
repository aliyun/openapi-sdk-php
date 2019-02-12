<?php
require_once '../vendor/autoload.php';

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// Create a global client
AlibabaCloud::accessKeyClient(
    \getenv('SMS_ACCESS_KEY_ID'),
    \getenv('SMS_ACCESS_KEY_SECRET')
)->regionId('cn-shanghai')->asGlobalClient();

try {
    $result = AlibabaCloud::dysmsapi()
                          ->v20170525()
                          ->sendSms()
                          ->withPhoneNumbers(\getenv('SMS_PHONE'))
                          ->withSignName(\getenv('SMS_SIGN_NAME'))
                          ->withTemplateCode(\getenv('SMS_CODE'))
                          ->withTemplateParam(json_encode(
                              [
                                                      'score' => '100',
                                                      'bonus' => '100',
                                                  ],
                              JSON_UNESCAPED_UNICODE
                                              ))
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
