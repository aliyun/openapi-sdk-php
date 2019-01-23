English | [简体中文](./README-CN.md)


<p align="center"><img src="./src/AlibabaCloud.svg"></p>
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


## About
**Alibaba Cloud SDK for PHP** is a development kit that supports quick access to products, dependency on [Alibaba Cloud Client for PHP][client].


## Release Notes
We developed a new kernel on the principle of `eliminating known issues` and `compatible with old grammar`, adding the following features:
- [Support Composer][packagist]
- [Support for multiple client and client profiles][clients]
- [Result is a powerful object][result]
- [More flexible configuration per request][request]


## Requirements
- You must use PHP 5.5.0 or later.
- if you use the `RsaKeyPair` (Only Japan station is supported) client, you will also need [OpenSSL PHP extension][OpenSSL]. 


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


## Recommend new grammar
Before request, please [Understanding the usage of the client][client], after request, please [Understanding the result object][result].

> Currently only some Alibaba Cloud products are supported, you can use [Alibaba Cloud Client for PHP][request] to initiate any custom requests. [API Explorer](https://api.aliyun.com) provides the ability to call the cloud product OpenAPI online, and dynamically generate Alibaba Cloud Client for PHP Example code and quick retrieval interface, which can significantly reduce the difficulty of using the cloud API. It is highly recommended.

```php
<?php

use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

// Set up a global client
AlibabaCloud::accessKeyClient('foo', 'bar')
            ->regionId('cn-hangzhou')
            ->asGlobalClient();

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


## References
* [Alibaba Cloud Regions & Endpoints][endpoints]
* [OpenAPI Explorer][open-api]
* [Packagist][packagist]
* [Composer][composer]
* [Guzzle Documentation][guzzle-docs]
* [Latest Release][latest-release]


[open-api]: https://api.alibabacloud.com
[latest-release]: https://github.com/aliyun/openapi-sdk-php
[guzzle-docs]: http://docs.guzzlephp.org/en/stable/request-options.html
[composer]: http://getcomposer.org
[packagist]: https://packagist.org/packages/alibabacloud/sdk
[client]: https://github.com/aliyun/openapi-sdk-php-client#alibaba-cloud-client-for-php
[clients]: https://github.com/aliyun/openapi-sdk-php-client#client
[request]: https://github.com/aliyun/openapi-sdk-php-client#request
[result]: https://github.com/aliyun/openapi-sdk-php-client#result
[ak]: https://usercenter.console.aliyun.com/?spm=5176.doc52740.2.3.QKZk8w#/manage/ak
[home]: https://home.console.aliyun.com/?spm=5176.doc52740.2.4.QKZk8w
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
[aliyun]: https://www.aliyun.com
[alibabacloud]: https://www.alibabacloud.com
[request]: https://github.com/aliyun/openapi-sdk-php-client/blob/master/README.md#request
[endpoints]: https://developer.aliyun.com/endpoints
