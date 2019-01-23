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
    $result = AlibabaCloud::roaRequest()
                          ->product('Nlp')
                          ->version('2018-04-08')
                          ->pathPattern('/nlp/api/wordpos/[Domain]')
                          ->pathParameter('Domain', 'general')
                          ->serviceCode('')// 本链只是演示，如有可增加此链，空和空字符串不必增加
                          ->endpointType('openAPI')// 如有可增加此链，openAPI 为默认，不必增加
                          ->method('POST')// 如果不是 GET 可增加此连，GET是默认值，不必增加
                          ->body(json_encode([
                                                 'lang' => 'ZH',
                                                 'text' => '李宇春天',
                                             ]))
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
