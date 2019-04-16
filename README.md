English | [简体中文](./README-CN.md)


<p align="center">
<a href=" https://www.alibabacloud.com"><img src="https://aliyunsdk-pages.alicdn.com/icons/AlibabaCloud.svg"></a>
</p>

<h1 align="center">Alibaba Cloud SDK for PHP</h1>

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
<a href="https://ci.appveyor.com/project/aliyun/openapi-sdk-php"><img src="https://ci.appveyor.com/api/projects/status/mddt341e3hpju1nw/branch/master?svg=true" alt="Appveyor Build Status"></a>
<a href="https://scrutinizer-ci.com/code-intelligence"><img src="https://scrutinizer-ci.com/g/aliyun/openapi-sdk-php/badges/code-intelligence.svg" alt="Code Intelligence Status"></a>
</p>


Alibaba Cloud SDK for PHP is a development kit that supports quick access to products, dependency on [Alibaba Cloud Client for PHP][client].


## Release Notes
We developed a new kernel on the principle of `eliminating known issues` and `compatible with old grammar`, adding the following features:
- [Support Composer][packagist]
- [Support for multiple client and client profiles][clients]
- [Result is a powerful object][result]
- [More flexible configuration per request][request]


## Prerequisites
Your system will need to meet the [Prerequisites](docs/0-Prerequisites-EN.md), including having PHP >= 5.5. We highly recommend having it compiled with the cURL extension and cURL 7.16.2+.


## Installation
If Composer is already [installed globally on your system](https://getcomposer.org/doc/00-intro.md#globally), run the following in the base directory of your project to install Alibaba Cloud SDK for PHP as a dependency and generation class map:
```
composer require alibabacloud/sdk --optimize-autoloader
```
> Some users may not be able to install due to network problems, you can try to switch the Composer mirror.

Please see the [Installation](docs/1-Installation-EN.md) for more detailed information about installing through Composer and other ways.


## Class Map Generation
You must enable the [Class Map Generation][class-map-generation] feature to use the Alibaba Cloud SDK for PHP. There are 3 ways to enable this feature:

- Set `"optimize-autoloader": true` inside the `config` key of `composer.json`.
- Call `composer install` or `composer update` with `-o` / `--optimize-autoloader`.
- Call `composer dump-autoload` with `-o` / `--optimize`.


## Online Demo
[API Explorer](https://api.aliyun.com) provides the ability to call the cloud product OpenAPI online, and dynamically generate SDK Example code and quick retrieval interface, which can significantly reduce the difficulty of using the cloud API.


## Quick Examples
Before you begin, you need to sign up for an Alibaba Cloud account and retrieve your [Credentials](https://usercenter.console.aliyun.com/#/manage/ak). Before request, please [Understanding the Clients][clients], after request, please [Understanding the Result][result].

> Currently only some Alibaba Cloud products are supported, [Supported Products](SUPPORTED.md), For products that are not supported, you can use [Alibaba Cloud Client for PHP][request] to initiate custom requests, and you can use [API Explorer](https://api.aliyun.com) to generate Alibaba Cloud Client for PHP code online.

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// Set up a global client
AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asDefaultClient();

try {
    // Access product APIs
    $request = AlibabaCloud::ecs()->v20140526()->describeRegions();
    
    // Set options/parameters and execute request
    $result = $request->withResourceType('type') // API parameter
                      ->withInstanceChargeType('type') // API parameter
                      ->client('client1') // Specify the client for send
                      ->debug(true) // Enable the debug will output detailed information
                      ->connectTimeout(0.01) // Throw an exception when Connection timeout 
                      ->timeout(0.01) // Throw an exception when timeout 
                      ->request(); // Execution request

    // Can also Set by passing in an array
    $options = [
                   'debug'           => true,
                   'connect_timeout' => 0.01,
                   'timeout'         => 0.01,
                   'query'           => [
                       'ResourceType' => 'type',
                       'InstanceChargeType' => 'type',
                   ],
               ];
    
    // Settings priority
    $result2 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions($options)
                           ->options([
                                         'query' => [
                                             'Key'      => 'I will overwrite this value in constructor',
                                             'new'      => 'I am new value',
                                         ],
                                     ])
                           ->options([
                                         'query' => [
                                             'Key' => 'I will overwrite the previous value',
                                             'bar' => 'I am new value',
                                         ],
                                     ])
                           ->debug(false) // Overwrite the true of the former
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


## Issues
[Opening an Issue](https://github.com/aliyun/openapi-sdk-php/issues/new/choose), Issues not conforming to the guidelines may be closed immediately.


## Changelog
Detailed changes for each release are documented in the [release notes](CHANGELOG.md).


## Contribution
Please make sure to read the [Contributing Guide](CONTRIBUTING.md) before making a pull request.


## References
* [Alibaba Cloud Regions & Endpoints][endpoints]
* [OpenAPI Explorer][open-api]
* [Packagist][packagist]
* [Composer][composer]
* [Guzzle Documentation][guzzle-docs]
* [Latest Release][latest-release]


## License
[Apache-2.0](LICENSE.md)

Copyright 1999-2019 Alibaba Group Holding Ltd.


[open-api]: https://api.alibabacloud.com
[latest-release]: https://github.com/aliyun/openapi-sdk-php
[guzzle-docs]: http://docs.guzzlephp.org/en/stable/request-options.html
[composer]: http://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[client]: https://github.com/aliyun/openapi-sdk-php-client#alibaba-cloud-client-for-php
[clients]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-EN.md
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/3-Request-EN.md
[result]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/4-Result-EN.md
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[aliyun]: https://www.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[endpoints]: https://developer.aliyun.com/endpoints
[class-map-generation]:https://getcomposer.org/doc/articles/autoloader-optimization.md#optimization-level-1-class-map-generation
