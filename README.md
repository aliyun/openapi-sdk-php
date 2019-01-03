English | [简体中文](./README-CN.md)

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


The **Alibaba Cloud SDK for PHP** provides a quick access method for products based on the inheritance of [Alibaba Cloud Client for PHP][client], making it easier for you to use Alibaba Cloud services.

## Release Notes
We developed a new kernel on the principle of `eliminating known issues` and `compatible with old grammar`, adding the following features:
- [Support Composer][packagist]
- [Support for multiple client and client profiles][client]
- [Return a bigger result][result]
- [More flexible configuration per request][request]
- More convenient call interface


## Requirements
You must use PHP5.5.0 or later, if you use the `RsaKeyPair` (Only Japan station is supported) client, you will also need [OpenSSL PHP extension][OpenSSL]. 

## Recommendations
- Use [Composer][composer] and optimize automatic loading `composer dump-autoload --optimize`
- Install [cURL][cURL] 7.16.2 or later version
- Use [OPCache][OPCache]
- In a production environment, do not use [Xdebug][xdebug]

## Installation
1. Download and install Composer（Windows user please download and run [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe))
```bash
curl -sS https://getcomposer.org/installer | php
```

2. Execute the Composer command, install the newest and stable version of Alibaba Cloud SDK for PHP
```bash
php -d memory_limit=-1 composer.phar require alibabacloud/sdk
```

3. Require the Composer auto-loading tool
```php
<?php
require __DIR__ . '/vendor/autoload.php'; 
```

## Compatible with old grammar

The new kernel still supports the old syntax, but the `@deprecated` has been flagged to highlight the IDE. Developers are strongly encouraged to use the new syntax, and we will completely remove the old syntax in a future release.


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


## Recommend new grammar

Before sending, please [Understanding the usage of the client][client], after sending, please [Understanding the result object][result].


```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asGlobalClient();

try {
    // Send, default to global client
    $result1 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions();

    // Specify the client for send
    $result2 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions()
                           ->client('client1')
                           ->request();

    // Chain settings
    $result3 = AlibabaCloud::ecs()
                           ->v20140526()
                           ->describeRegions()
                           ->client('client1') // Specify the client for send
                           ->connectTimeout(0.001) // Throw an exception when Connection timeout 
                           ->timeout(0.001) // Throw an exception when timeout 
                           ->debug(true) // Enable the debug will output detailed information
                           ->request();

    // Traditional settings
    $request2 = AlibabaCloud::ecs()
                            ->v20140526()
                            ->describeRegions();
    $request2->client('client1');
    $request2->timeout(0.001);
    $result2 = $request2->request();


    // Construction settings
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

    // Settings priority
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
                                             'Key'      => 'I will overlay this value of the constructor',
                                             'new'      => 'I am the new added value',
                                         ],
                                     ])
                           ->options([
                                         'query' => [
                                             'Key' => 'I will overlay the previous value',
                                             'new' => 'I will overlay the previous value',
                                         ],
                                     ])
                           ->debug(false) // The last call will overwrite the former
                           ->request();
} catch (ClientException $exception) {
    print_r($exception->getErrorMessage());
} catch (ServerException $exception) {
    print_r($exception->getErrorMessage());
}
    

```


## References

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
