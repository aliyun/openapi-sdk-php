[← 首页](/README-CN.md) | 先决条件[(English)](/docs/en/0-Prerequisites.md) | [安装 →](/docs/zh/1-Installation.md)
***

# 要求和建议
在使用 Alibaba Cloud SDK for PHP 前请确保您的环境支持以下要求和建议。


## 要求
- 您必须使用 PHP 5.5.0 或更高版本。
- 使用 [Composer][composer] 并优化自动加载 `composer dump-autoload --optimize`
- 如果您使用了 `RsaKeyPair` 客户端（仅支持日本站），还需要 [OpenSSL PHP 扩展][OpenSSL]。


## 建议
- 安装 [cURL][cURL] 7.16.2 或更高版本
- 使用 [OPCache][OPCache]
- 生产环境中不要使用 [Xdebug][xdebug]

***
[← 首页](/README-CN.md) | 先决条件[(English)](/docs/en/0-Prerequisites.md) | [安装 →](/docs/zh/1-Installation.md)

[composer]: https://getcomposer.org
[cURL]: http://php.net/manual/zh/book.curl.php
[OPCache]: http://php.net/manual/zh/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/zh/book.openssl.php
