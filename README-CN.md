[English](./README.md) | 简体中文


<p align="center"><img src="./src/Aliyun.svg"></p>
<p align="center">
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/license" alt="License"></a>
<br/>
<a href="https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php"><img src="https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php/badges/quality-score.png" alt="Scrutinizer Code Quality"></a>
<a href="https://travis-ci.org/aliyun/openapi-sdk-php"><img src="https://travis-ci.org/aliyun/openapi-sdk-php.svg?branch=master" alt="Travis Build Status"></a>
<a href="https://ci.appveyor.com/project/songshenzong/openapi-sdk-php/branch/master"><img src="https://ci.appveyor.com/api/projects/status/ttsf2ugc88dqyn1o/branch/master?svg=true" alt="Appveyor Build Status"></a>
<a href="https://codecov.io/gh/aliyun/openapi-sdk-php"><img src="https://codecov.io/gh/aliyun/openapi-sdk-php/branch/master/graph/badge.svg" alt="codecov"></a>
<a href="https://scrutinizer-ci.com/code-intelligence"><img src="https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php/badges/code-intelligence.svg" alt="Code Intelligence Status"></a>
</p> 


## 关于
**Alibaba Cloud SDK for PHP** 是支持产品快捷访问的开发包，由 [Alibaba Cloud Client for PHP][client] 提供底层支持。


## 发行说明
我们在 `消除已知问题` 和 `兼容旧语法` 的原则上开发了新内核，增加了如下特性：
- [支持 Composer][packagist]
- [支持多客户端和客户端配置文件][clients]
- [结果是一个强大的对象][result]
- [每一个请求配置更加灵活][request]


## 要求
- 您必须使用 PHP 5.5.0 或更高版本。
- 如果您使用了 `RsaKeyPair` 客户端（仅支持日本站），还需要 [OpenSSL PHP 扩展][OpenSSL]。


## 建议
- 使用 [Composer][composer] 并优化自动加载 `composer dump-autoload --optimize`
- 安装 [cURL][cURL] 7.16.2 或更高版本
- 使用 [OPCache][OPCache]
- 生产环境中不要使用 [Xdebug][xdebug]


## 安装
1. 下载并安装 Composer（Windows 用户请下载并运行 [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)）
```bash
curl -sS https://getcomposer.org/installer | php
```

2. 执行 Composer 命令安装 Alibaba Cloud SDK for PHP 的最新稳定版本
```bash
php -d memory_limit=-1 composer.phar require alibabacloud/sdk
```

3. 在代码中引入 Composer 自动加载工具
```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```


## 兼容旧语法
新内核仍支持旧语法，但已标记 `@deprecated` 让 IDE 高亮提示，强烈建议开发者使用新语法，我们将在未来某个版本中完全移除旧语法。


```php
<?php
    
use AlibabaCloud\Client\DefaultAcsClient;
use AlibabaCloud\Client\Profile\DefaultProfile;
use AlibabaCloud\Ecs\V20140526\DescribeRegions;
use AlibabaCloud\Client\Exception\ClientException;

$profile = DefaultProfile::getProfile('<region>', '<accessKeyId>', '<accessKeySecret>');
$client  = new DefaultAcsClient($profile);
$request = new DescribeRegions();

try {
    $result = $client->getAcsResponse($request);
    print_r($result->Regions);
    print_r($result['Regions']);
    print_r($result->toArray());
} catch (ClientException $exception) {
   echo $exception->getMessage(). PHP_EOL;
}
```


## 推荐新语法
请求之前，请 [了解客户端的用法][client]，请求之后，请 [了解结果对象][result]。

> 目前仅支持部分阿里云产品，您可使用 [Alibaba Cloud Client for PHP][request] 发起任何自定义请求。[API Explorer](https://api.aliyun.com) 提供在线调用阿里云产品，并动态生成 Alibaba Cloud Client for PHP 代码和快速检索接口等能力，能显著降低使用云 API 的难度，强烈推荐使用。

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// 设置全局客户端
AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asGlobalClient();

try {
    // 访问产品 APIs
    $request = AlibabaCloud::ecs()->v20140526()->describeRegions();
    
    // 设置选项/参数并执行请求
    $result = $request->withResourceType('type') // API 的参数
                      ->withInstanceChargeType('type') // API 的参数
                      ->client('client1') // 指定发送客户端，否则使用全局客户端
                      ->debug(true) // 开启调试会输出详细信息
                      ->connectTimeout(0.01) // 连接超时会抛出异常
                      ->timeout(0.01) // 超时会抛出异常
                      ->request(); // 执行请求
    
    // 也可以传入数组设置
    $options = [
                   'debug'           => true,
                   'connect_timeout' => 0.01,
                   'timeout'         => 0.01,
                   'query'           => [
                       'ResourceType' => 'type',
                       'InstanceChargeType' => 'type',
                   ],
               ];

    // 设置的优先级
    $result2 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions($options)
                           ->options([
                                         'query' => [
                                             'Key'      => '我会覆盖构造函数的这个值',
                                             'new'      => '我是新增的值',
                                         ],
                                     ])
                           ->options([
                                         'query' => [
                                             'Key' => '我会覆盖以前的值',
                                             'bar' => '我是新增的值',
                                         ],
                                     ])
                           ->debug(false) // 最后调用的会覆盖前者
                           ->request();
    
} catch (ClientException $exception) {
    echo $exception->getMessage(). PHP_EOL;
} catch (ServerException $exception) {
    echo $exception->getMessage() . PHP_EOL;
    echo $exception->getErrorCode(). PHP_EOL;
    echo $exception->getRequestId(). PHP_EOL;
    echo $exception->getErrorMessage(). PHP_EOL;
}
```


## 相关
* [阿里云服务 Regions & Endpoints][endpoints]
* [OpenAPI Explorer][open-api]
* [Packagist][packagist]
* [Composer][composer]
* [Guzzle中文文档][guzzle-docs]
* [Latest Release][latest-release]


[open-api]: https://api.aliyun.com
[latest-release]: https://github.com/aliyun/openapi-sdk-php
[guzzle-docs]: https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html
[composer]: http://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[client]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README-CN.md#alibaba-cloud-client-for-php
[clients]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README-CN.md#%E5%AE%A2%E6%88%B7%E7%AB%AF
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README-CN.md#%E8%AF%B7%E6%B1%82
[result]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README-CN.md#%E7%BB%93%E6%9E%9C
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[aliyun]: https://www.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README-CN.md#%E8%AF%B7%E6%B1%82
[endpoints]: https://developer.aliyun.com/endpoints
