[← 先决条件](0-Prerequisites-CN.md) | 安装[(English)](1-Installation-EN.md) | [客户端 →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-CN.md)
***

# 安装
安装 Alibaba Cloud SDK for PHP 有如下方式：

- [通过 Composer 安装依赖](#%E9%80%9A%E8%BF%87-composer-%E5%AE%89%E8%A3%85%E4%BE%9D%E8%B5%96)
- [下载使用 ZIP 文件](#%E4%B8%8B%E8%BD%BD%E4%BD%BF%E7%94%A8-zip-%E6%96%87%E4%BB%B6)

在安装之前，请确保您的环境使用的是 PHP 5.5 或更高版本。了解有关[环境要求和建议的更多信息](0-Prerequisites-CN.md)。

## 通过 Composer 安装依赖
通过 Composer 安装是推荐方式。Composer 是一款 PHP 工具，用于管理和安装项目的依赖项。有关如何安装 Composer、配置自动加载并遵循定义依赖关系的其他最佳实践的更多信息，请参阅 [getcomposer.org](https://getcomposer.org)。

### 安装依赖
如果已在系统上[全局安装 Composer](https://getcomposer.org/doc/00-intro.md#globally)，请直接在项目目录中运行以下内容来安装 Alibaba Cloud SDK for PHP 作为依赖项并生成类映射：
```bash
composer require alibabacloud/sdk --optimize-autoloader
```

否则，请下载并安装 Composer（Windows 用户请下载并运行 [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)）：
```bash
curl -sS https://getcomposer.org/installer | php
```

然后，执行 Composer 命令安装最新版 Alibaba Cloud SDK for PHP 作为依赖项并生成类映射：
```bash
php -d memory_limit=-1 composer.phar require alibabacloud/sdk --optimize-autoloader
```


### 类映射生成
必须开启[类映射生成][class-map-generation]功能才能使用 Alibaba Cloud SDK for PHP，有3种方法开启此功能：

- 在 `composer.json` 文件中 `config` 部分增加 `"optimize-autoloader": true` ，可一劳永逸。
- 执行 `composer install` 或 `composer update` 时增加 `-o` 或 `--optimize-autoloader` 选项。
- 执行 `composer dump-autoload` 时增加 `-o` 或 `--optimize` 选项。


### 将自动加载工具添加到 PHP 脚本
要在脚本中使用 Alibaba Cloud SDK for PHP，请在脚本中包含自动加载工具，如下所示。
```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

## 下载使用 ZIP 文件
我们强烈建议您使用 Composer 进行安装，但同时也为不能使用 Composer 的用户提供了包含所有类和依赖项的 ZIP 文件。

请[下载 .zip 文件](http://aliyunsdk-pages.alicdn.com/php-sdk/sdk.zip)，然后在项目中的选定位置解压，最后将自动加载工具包含到您的脚本中，如下所示：

```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

***
[← 先决条件](0-Prerequisites-CN.md) | 安装[(English)](1-Installation-EN.md) | [客户端 →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-CN.md)

[class-map-generation]:https://getcomposer.org/doc/articles/autoloader-optimization.md#optimization-level-1-class-map-generation
