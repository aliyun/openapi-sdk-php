# Signature V2 regression tests

The default HMAC signer is provided by `alibabacloud/client`. Install a Client
release that defaults to HMAC-SHA256, then run the offline product SDK tests:

```sh
composer install
vendor/bin/phpunit --no-configuration --bootstrap tests/bootstrap.php tests/Unit/SignatureV2Test.php
```

This repository uses PHPUnit 4.8, so use a compatible PHP runtime when installing
its development dependencies. The new tests also support PHPUnit 9 in a separate
test environment; no PHPUnit dependency upgrade is required by this change.

To test a local Client checkout instead of the installed Client classes:

```sh
ALIBABACLOUD_CLIENT_PATH=../openapi-sdk-php-client \
  vendor/bin/phpunit --no-configuration --bootstrap tests/bootstrap.php tests/Unit/SignatureV2Test.php
```

The bootstrap validates that path and prepends its Client source loader. All other
dependencies still come from `vendor`. An invalid path fails the test run.

The tests mock every HTTP response and capture the resulting requests. They
independently calculate RPC GET/POST and ROA HMAC signatures, check the unchanged
signature version `1.0`, cover default AccessKey, named STS, and explicit SHA1
clients, and verify body digests and the separate MNS SHA1 protocol. They require
no cloud credentials and make no API calls. `composer test` includes live Feature
tests and is not needed for this regression check.

The product SDK dependency remains `alibabacloud/client: ^1.5`. Existing lockfiles
can retain an older Client; verify the installed version with
`composer show alibabacloud/client` when validating a release. Packaged ZIP
distributions must also include the intended Client release.
