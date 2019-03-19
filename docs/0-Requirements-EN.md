[← Home](../README.md) | Requirements[(中文)](0-Requirements-CN.md) | [Installation →](1-Installation-EN.md)
***

## Requirements
- You must use PHP 5.5.0 or later.
- if you use the `RsaKeyPair` (Only Japan station is supported) client, you will also need [OpenSSL PHP extension][OpenSSL]. 

## Recommendations
- Use [Composer][composer] and optimize automatic loading `composer dump-autoload --optimize`
- Install [cURL][cURL] 7.16.2 or later version
- Use [OPCache][OPCache]
- In a production environment, do not use [Xdebug][xdebug]

***
[← Home](../README.md) | Requirements[(中文)](0-Requirements-CN.md) | [Installation →](1-Installation-EN.md)

[composer]: https://getcomposer.org
[cURL]: http://php.net/manual/en/book.curl.php
[OPCache]: http://php.net/manual/en/book.opcache.php
[xdebug]: http://xdebug.org
[OpenSSL]: http://php.net/manual/en/book.openssl.php
