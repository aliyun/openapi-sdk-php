[← Requirements](0-Requirements-EN.md) | Installation[(中文)](1-Installation-CN.md) | [Client →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-EN.md)
***

# Installation
There are ways to install Alibaba Cloud SDK for PHP:

- As a dependency via Composer
- Installing by Using the ZIP file

Before you install ensure your environment is using PHP version 5.5 or later. Learn more about [environment requirements and recommendations](0-Requirements-EN.md).

## As a dependency via Compose
Composer is the recommended way to install. Composer is a tool for PHP that manages and installs the dependencies of your project. For more information on how to install Composer, configure autoloading, and follow other best practices for defining dependencies, see [getcomposer.org](https://getcomposer.org).

### Install
If Composer is already [installed globally on your system](https://getcomposer.org/doc/00-intro.md#globally), run the following in the base directory of your project to install Alibaba Cloud SDK for PHP as a dependency:
```bash
composer require alibabacloud/sdk
composer dump-autoload --optimize
```

Otherwise, download and install Composer (Windows users please download and run [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe))
```bash
curl -sS https://getcomposer.org/installer | php
```

Then type this Composer command to install the latest version of the Alibaba Cloud SDK for PHP as a dependency
```bash
php -d memory_limit=-1 composer.phar require alibabacloud/sdk
php -d memory_limit=-1 composer.phar dump-autoload --optimize
```

### Add autoloader to your PHP scripts
To utilize the Alibaba Cloud SDK for PHP in your scripts, include the autoloader in your scripts, as follows.
```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

## Installing by Using the ZIP file
The Alibaba Cloud SDK for PHP includes a ZIP file containing all the classes and dependencies you need to run.

Download the [.zip file](http://aliyunsdk-pages.alicdn.com/php-sdk/sdk.zip), and then extract it into your project at a location you choose. Then include the autoloader in your scripts, as follows.

```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

***
[← Requirements](0-Requirements-EN.md) | Installation[(中文)](1-Installation-CN.md) | [Client →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-EN.md)
