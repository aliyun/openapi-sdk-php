<?php

require_once '../vendor/autoload.php';

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;
use Symfony\Component\Dotenv\Dotenv;

/**
 * 加载环境变量
 */
$env = dirname(__DIR__) . DIRECTORY_SEPARATOR . '.env';
if (is_readable($env)) {
    (new Dotenv())->load($env);
}
$key    = \getenv('ACCESS_KEY_ID');
$secret = \getenv('ACCESS_KEY_SECRET');

/**
 * 创建一个全局客户端
 */
AlibabaCloud::accessKeyClient($key, $secret)->regionId('cn-shanghai')->asDefaultClient();

//------------------------------ 图片审核 开始 ----------------------------------
/**
 * 传图片 URL 同步检测
 */
try {
    $task1  = [
        'dataId' => uniqid('', true),
        'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg',
    ];
    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->imageSyncScan()
                          ->jsonBody([
                                         'tasks'  => [$task1],
                                         'scenes' => ['porn', 'terrorism'],
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 异步检测
 */
try {
    $task1  = [
        'dataId' => uniqid('', true),
        'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg',
    ];
    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->imageAsyncScan()
                          ->jsonBody([
                                         'tasks'  => [$task1],
                                         'scenes' => ['porn', 'terrorism'],
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    $taskId = $result['data'][0]['taskId'];

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 查询异步检测结果
 */
try {
    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->imageAsyncScanResults()
                          ->jsonBody([
                                         $taskId,
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

//------------------------------ 图片审核 结束 ----------------------------------

//------------------------------ 视频审核 开始 ----------------------------------
/**
 * 提交视频url检测任务
 */
try {
    $task1  = [
        'dataId' => uniqid('', true),
        'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/video.mp4',
    ];
    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->videoAsyncScan()
                          ->jsonBody([
                                         'tasks'  => [$task1],
                                         'scenes' => ['porn', 'terrorism'],
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    $taskId = $result['data'][0]['taskId'];

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 提交视频语音综合检测任务
 */
try {
    $task1 = [
        'dataId' => uniqid('', true),
        'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/video.mp4',
    ];

    $result = AlibabaCloud::green()
                          ->v20180509()
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

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 查询视频异步检测结果
 */
try {
    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->videoAsyncScanResults()
                          ->jsonBody([
                                         $taskId,
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 视频截帧同步检测
 */
try {
    $task1 = [
        'frames' => [
            ['offset' => '0', 'url' => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg'],
            ['offset' => '1', 'url' => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg'],
            ['offset' => '2', 'url' => 'http://aliyunsdk-pages.alicdn.com/tests/ImageSearch.jpg'],
        ],
    ];

    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->videoSyncScan()
                          ->jsonBody([
                                         'tasks'  => [$task1],
                                         'scenes' => ['porn', 'terrorism'],
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}
//------------------------------ 视频审核 结束 ----------------------------------

//------------------------------ 文本反垃圾 开始 ----------------------------------
/**
 * 文本内容检测
 */
try {
    $task1 = [
        'dataId'  => uniqid('', true),
        'content' => '需要检测的文本内容',
    ];

    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->textScan()
                          ->jsonBody([
                                         'tasks'  => [$task1],
                                         'scenes' => ['antispam'],
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    $taskId = $result['data'][0]['taskId'];

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 文本反垃圾结果反馈
 */
try {
    $result = AlibabaCloud::green()
                          ->v20180509()
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

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}
//------------------------------ 文本反垃圾 结束 ----------------------------------

//------------------------------ 语音反垃圾 开始 ----------------------------------
/**
 * 提交语音异步检测任务
 */
try {
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

    $taskId = $result['data'][0]['taskId'];

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}

/**
 * 查询视频异步检测结果
 */
try {
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

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}
//------------------------------ 语音反垃圾 结束 ----------------------------------

//------------------------------ 图片OCR识别 开始 ----------------------------------
/**
 * 传图片url检测示例代码
 */
try {
    $task1  = [
        'dataId' => uniqid('', true),
        'url'    => 'http://aliyunsdk-pages.alicdn.com/tests/id-card-front.jpeg',
    ];
    $result = AlibabaCloud::green()
                          ->v20180509()
                          ->imageSyncScan()
                          ->jsonBody([
                                         'tasks'  => [$task1],
                                         'scenes' => ['ocr'],
                                         'extras' => [['card' => 'id-card-front']],
                                     ])
                          ->host('green.cn-shanghai.aliyuncs.com')
                          ->connectTimeout(20)
                          ->timeout(25)
                          ->request();

    // Convert the result to an array and print
    print_r($result->toArray());
} catch (ClientException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
} catch (ServerException $e) {
    // Print the error message
    echo $e->getErrorMessage() . PHP_EOL;
    print_r($e->getResult()->toArray());
}
//------------------------------ 图片OCR识别 结束 ----------------------------------
