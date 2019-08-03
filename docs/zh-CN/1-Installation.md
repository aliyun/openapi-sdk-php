[← 先决条件](/docs/zh-CN/0-Prerequisites.md) | 安装[(English)](/docs/en-US/1-Installation.md) | [客户端 →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/zh-CN/2-Client.md)
***

# 安装
安装 Alibaba Cloud SDK for PHP 有如下方式：

- [通过 Composer 安装依赖](#%E9%80%9A%E8%BF%87-composer-%E5%AE%89%E8%A3%85%E4%BE%9D%E8%B5%96)
- [下载使用 ZIP 文件](#%E4%B8%8B%E8%BD%BD%E4%BD%BF%E7%94%A8-zip-%E6%96%87%E4%BB%B6)

在安装之前，请确保您的环境使用的是 PHP 5.5 或更高版本。了解有关[环境要求和建议的更多信息](/docs/zh-CN/0-Prerequisites.md)。

## 通过 Composer 安装
通过 Composer 安装是推荐方式。Composer 是一款 PHP 工具，用于管理和安装项目的依赖项。有关如何安装 Composer、配置自动加载并遵循定义依赖关系的其他最佳实践的更多信息，请参阅 [getcomposer.org](https://getcomposer.org)。

如果已在系统上[全局安装 Composer](https://getcomposer.org/doc/00-intro.md#globally)，请直接在项目目录中运行以下内容来安装 Alibaba Cloud SDK for PHP 作为依赖项：
```bash
composer require alibabacloud/sdk
```

否则，请下载并安装 Composer（Windows 用户请下载并运行 [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)）：
```bash
curl -sS https://getcomposer.org/installer | php
```

然后，执行 Composer 命令安装最新版 Alibaba Cloud SDK for PHP 作为依赖项：
```bash
php -d memory_limit=-1 composer.phar require alibabacloud/sdk
```

> 一些用户可能由于网络问题无法安装，可以使用[阿里云 Composer 全量镜像](https://developer.aliyun.com/composer)。


## 下载使用 ZIP 文件
我们强烈建议您使用 Composer 进行安装，但同时也为不能使用 Composer 的用户提供了包含所有类和依赖项的 ZIP 文件。

请[下载 .zip 文件](http://aliyunsdk-pages.alicdn.com/php-sdk/sdk.zip)，然后在项目中的选定位置解压。


## 将自动加载工具添加到 PHP 脚本
要在脚本中使用 Alibaba Cloud SDK for PHP，请在脚本中包含自动加载工具，如下所示。
```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

***
[← 先决条件](/docs/zh-CN/0-Prerequisites.md) | 安装[(English)](/docs/en-US/1-Installation.md) | [客户端 →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/zh-CN/2-Client.md)
