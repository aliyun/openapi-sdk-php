[English](./README.md) | 简体中文

Alibaba Cloud SDK for PHP
======


[![Latest Stable Version](https://poser.pugx.org/alibabacloud/sdk/v/stable)](https://packagist.org/packages/alibabacloud/sdk)
[![Total Downloads](https://poser.pugx.org/alibabacloud/sdk/downloads)](https://packagist.org/packages/alibabacloud/sdk)
[![Latest Unstable Version](https://poser.pugx.org/alibabacloud/sdk/v/unstable)](https://packagist.org/packages/alibabacloud/sdk)
[![License](https://poser.pugx.org/alibabacloud/sdk/license)](https://packagist.org/packages/alibabacloud/sdk)
[![composer.lock](https://poser.pugx.org/alibabacloud/sdk/composerlock)](https://packagist.org/packages/alibabacloud/sdk)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php/badges/quality-score.png)](https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php)
[![Build Status](https://travis-ci.org/aliyun/openapi-sdk-php.svg)](https://travis-ci.org/aliyun/openapi-sdk-php)
[![codecov](https://codecov.io/gh/aliyun/openapi-sdk-php/branch/master/graph/badge.svg)](https://codecov.io/gh/aliyun/openapi-sdk-php)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php/badges/code-intelligence.svg)](https://scrutinizer-ci.com/code-intelligence)


![](./src/Aliyun.svg)


**Alibaba Cloud SDK for PHP** 在继承 [Alibaba Cloud Client for PHP][client] 的基础上提供了产品快捷访问方法，让您更加轻松的使用阿里云服务。

## 发行说明
我们在 `消除已知问题` 和 `兼容旧语法` 的原则上开发了新内核，增加了如下特性：
- [支持 Composer][packagist]
- [支持多客户端和客户端配置文件][client]  
- [返回结果更强的大][result]
- [每一个请求配置更加灵活][request]
- 更加方便的调用接口


## 要求
您必须使用 PHP 5.5.0 或更高版本，如果您使用了 `RsaKeyPair` 客户端（仅支持日本站），还需要 [OpenSSL PHP 扩展][OpenSSL]。

## 建议
- 使用 [Composer][composer] 并优化自动加载 `composer dump-autoload --optimize`
- 安装 [cURL][cURL] 7.16.2 或更高版本
- 使用 [OPCache][OPCache]
- 生产环境中不要使用 [Xdebug][xdebug]

## 安装
1. 下载并安装 Composer（Windows 用户请下载并运行 [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe) ）
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
    use AlibabaCloud\Client\Exception\ClientException;
    use AlibabaCloud\Client\Profile\DefaultProfile;
    use AlibabaCloud\Ecs\V20140526\DescribeRegions;
    
    $profile = DefaultProfile::getProfile('<region>', '<accessKeyId>', '<accessKeySecret>');
    $client  = new DefaultAcsClient($profile);
    $request = new DescribeRegions();
    try {
        $response = $client->getAcsResponse($request);
        print_r($response);
    } catch (ClientException $exception) {
        print_r($exception->getErrorMessage());
    }

```


## 推荐新语法

发送之前，请 [了解客户端的用法][client]，发送之后，请 [了解结果对象][result]。


```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asGlobalClient();

try {
    // 发送，默认使用全局客户端
    $result1 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions();

    // 指定客户端发送
    $result2 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions()
                           ->client('client1')
                           ->request();

    // 链式设置
    $result3 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions()
                           ->client('client1') // 指定发送客户端
                           ->connectTimeout(0.001) // 连接超时会抛出异常
                           ->timeout(0.001) // 超时会抛出异常
                           ->debug(true) // 开启调试会输出详细信息
                           ->request();

    // 传统设置
    $request2 = AlibabaCloud::ecs()
                            ->v20140526()
                            ->describeRegions();
    $request2->client('client1');
    $request2->timeout(0.001);
    $result2 = $request2->request();


    // 构造设置
    $request3 = AlibabaCloud::ecs()
                            ->v20140526()
                            ->describeRegions([
                                                  'debug'           => true,
                                                  'timeout'         => 0.01,
                                                  'connect_timeout' => 0.01,
                                                  'query'           => [
                                                      'pageSize' => 1,
                                                  ],
                                              ]);
    $result3  = $request3->request();

    // 设置的优先级
    $result4 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions([
                                                 'debug'           => true,
                                                 'timeout'         => 0.01,
                                                 'connect_timeout' => 0.01,
                                                 'query'           => [
                                                     'pageSize' => 1,
                                                     'Key'      => 'value',
                                                 ],
                                             ])
                           ->options([
                                         'query' => [
                                             'pageSize' => 1,
                                             'Key'      => '我会覆盖构造函数的这个值',
                                             'new'      => '我是新增的值',
                                         ],
                                     ])
                           ->options([
                                         'query' => [
                                             'Key' => '我会覆盖以前的值',
                                             'new' => '我会覆盖以前的值',
                                         ],
                                     ])
                           ->debug(false)// 最后调用的会覆盖前者
                           ->request();
} catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
} catch (ServerException $exception) {
    print_r($exception->getErrorMessage());
}
    

```


## 相关

* [OpenAPI Explorer][open-api]
* [Packagist][packagist]
* [Composer][composer]
* [Guzzle Docs][guzzle-docs]
* [Latest Release][latest-release]


[open-api]: https://api.aliyun.com/
[latest-release]: https://github.com/aliyun/openapi-sdk-php
[guzzle-docs]: http://guzzlephp.org
[composer]: http://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[result]:https://github.com/aliyun/openapi-sdk-php-client#result
[request]: https://github.com/aliyun/openapi-sdk-php-client#request
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[client]: https://github.com/aliyun/openapi-sdk-php-client
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
