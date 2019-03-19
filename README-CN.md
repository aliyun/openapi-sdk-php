[English](./README.md) | 简体中文


<p align="center"><img src="./src/Aliyun.svg"></p>
<p align="center">
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/composerlock" alt="composer.lock"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/alibabacloud/sdk"><img src="https://poser.pugx.org/alibabacloud/sdk/license" alt="License"></a>
<br/>
<a href="https://codecov.io/gh/aliyun/openapi-sdk-php"><img src="https://codecov.io/gh/aliyun/openapi-sdk-php/branch/master/graph/badge.svg" alt="codecov"></a>
<a href="https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php"><img src="https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php/badges/quality-score.png" alt="Scrutinizer Code Quality"></a>
<a href="https://travis-ci.org/aliyun/openapi-sdk-php"><img src="https://travis-ci.org/aliyun/openapi-sdk-php.svg?branch=master" alt="Travis Build Status"></a>
<a href="https://ci.appveyor.com/project/songshenzong/openapi-sdk-php/branch/master"><img src="https://ci.appveyor.com/api/projects/status/ttsf2ugc88dqyn1o/branch/master?svg=true" alt="Appveyor Build Status"></a>
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


## 快速开始

1. **阿里云帐户**  - 在您开始之前，您需要注册阿里云帐户并获取您的[凭证](https://usercenter.console.aliyun.com/#/manage/ak)。
1. **环境要求**  - 您的系统需要满足[环境要求](docs/0-Requirements-CN.md)），包括 **PHP> = 5.5**。 我们强烈建议使用cURL扩展，并使用TLS后端编译cURL 7.16.2+。
1. **安装依赖**  - 如果在您的系统上全局安装Composer，您可以在项目目录中运行以下内容，将 Alibaba Cloud SDK for PHP 添加为依赖项：
   ```
   composer require alibabacloud/sdk
   ```
   请看 [安装](docs/1-Installation-CN.md) 有关通过 Composer 和其他方式安装的详细信息。
1. **优化自动加载**  - 必须执行这个命令，否则可能无法使用。
   ```
   composer dump-autoload --optimize
   ```


## 在线示例
[API Explorer](https://api.aliyun.com) 提供在线调用阿里云产品，并动态生成 SDK 代码和快速检索接口等能力，能显著降低使用云 API 的难度。


## 快速使用
请求之前，请[了解使用客户端][clients]，请求之后，请[了解结果对象][result]。

> 目前仅支持部分阿里云产品，[已支持产品列表](SUPPORTED-CN.md)，对于没有支持的产品，您可使用 [Alibaba Cloud Client for PHP][request] 发起自定义请求，还可使用 [API Explorer](https://api.aliyun.com) 在线生成 Alibaba Cloud Client for PHP 代码。

<br/>

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// 设置全局客户端
AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asDefaultClient();

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
[clients]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-CN.md
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/3-Request-CN.md
[result]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/4-Result-CN.md
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[aliyun]: https://www.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[endpoints]: https://developer.aliyun.com/endpoints
