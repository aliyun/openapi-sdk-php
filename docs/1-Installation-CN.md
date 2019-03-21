[← 环境要求](0-Requirements-CN.md) | 安装[(English)](1-Installation-EN.md) | [客户端 →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-CN.md)
***

# 安装
安装 Alibaba Cloud SDK for PHP 有如下方式：

- 通过 Composer 安装依赖
- 下载使用 ZIP 文件

在安装之前，请确保您的环境使用的是 PHP 5.5 或更高版本。了解有关[环境要求和建议的更多信息](0-Requirements-CN.md)。

## 通过 Composer 安装依赖
通过 Composer 安装是推荐方式。Composer 是一款 PHP 工具，用于管理和安装项目的依赖项。有关如何安装 Composer、配置自动加载并遵循定义依赖关系的其他最佳实践的更多信息，请参阅 [getcomposer.org](https://getcomposer.org)。

### 安装依赖
如果已在系统上[全局安装 Composer](https://getcomposer.org/doc/00-intro.md#globally)，请直接在项目目录中运行以下内容来安装 Alibaba Cloud SDK for PHP 作为依赖项：
```bash
composer require alibabacloud/sdk
composer dump-autoload --optimize
```

否则，请下载并安装 Composer（Windows 用户请下载并运行 [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)）
```bash
curl -sS https://getcomposer.org/installer | php
```

然后，执行 Composer 命令安装 Alibaba Cloud SDK for PHP 作为依赖项
```bash
php -d memory_limit=-1 composer.phar require alibabacloud/sdk
php -d memory_limit=-1 composer.phar dump-autoload --optimize
```

### 生成类映射
在 `composer.json` 中 `config` 部分设置 `"optimize-autoloader": true` 可免执行 `dump-autoload --optimize`。

### 将自动加载工具添加到 PHP 脚本
要在脚本中使用 Alibaba Cloud SDK for PHP，请在脚本中包含自动加载工具，如下所示。
```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

## 下载使用 ZIP 文件
Alibaba Cloud SDK for PHP 中的一个 ZIP 文件包含运行开发工具包所需的所有类和依赖项。

请[下载 .zip 文件](http://aliyunsdk-pages.alicdn.com/php-sdk/sdk.zip)，然后在项目中的选定位置进行解压缩。然后将自动加载工具包含到您的脚本中，如下所示。

```php
<?php

require __DIR__ . '/vendor/autoload.php'; 
```

***
[← 环境要求](0-Requirements-CN.md) | 安装[(English)](1-Installation-EN.md) | [客户端 →](https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/2-Client-CN.md)
