[← 首页](../README-CN.md) | 环境要求[(English)](0-Requirements-EN.md) | [安装 →](1-Installation-CN.md)
***

## 要求
- 您必须使用 PHP 5.5.0 或更高版本。
- 如果您使用了 `RsaKeyPair` 客户端（仅支持日本站），还需要 [OpenSSL PHP 扩展][OpenSSL]。

## 建议
- 使用 [Composer][composer] 并优化自动加载 `composer dump-autoload --optimize`
- 安装 [cURL][cURL] 7.16.2 或更高版本
- 使用 [OPCache][OPCache]
- 生产环境中不要使用 [Xdebug][xdebug]

***
[← 首页](../README-CN.md) | 环境要求[(English)](0-Requirements-EN.md) | [安装 →](1-Installation-CN.md)

[composer]: https://getcomposer.org
[cURL]: http://php.net/manual/zh/book.curl.php
[OPCache]: http://php.net/manual/zh/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/zh/book.openssl.php
