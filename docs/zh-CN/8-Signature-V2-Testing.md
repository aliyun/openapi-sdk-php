[English](/docs/en-US/8-Signature-V2-Testing.md)

# 签名 V2 回归测试

默认 HMAC 签名实现由 `alibabacloud/client` 提供。请先安装默认使用 HMAC-SHA256 的 Client 版本，再运行产品 SDK 的离线测试：

```sh
composer install
vendor/bin/phpunit --no-configuration --bootstrap tests/bootstrap.php tests/Unit/SignatureV2Test.php
```

本仓库使用 PHPUnit 4.8，安装开发依赖时需要使用兼容的 PHP 运行时。新增测试也支持在独立的 PHPUnit 9 测试环境中运行；此次改动不要求升级仓库的 PHPUnit 依赖。

如需验证本地修改后的候选 Client，而不是已安装的 Client 类，可指定本地仓库目录：

```sh
ALIBABACLOUD_CLIENT_PATH=../openapi-sdk-php-client \
  vendor/bin/phpunit --no-configuration --bootstrap tests/bootstrap.php tests/Unit/SignatureV2Test.php
```

测试 bootstrap 会校验该路径，并优先从该目录加载 Client 源码。其余依赖仍从 `vendor` 加载。路径无效会导致测试失败。

测试会模拟所有 HTTP 响应并捕获最终请求，独立计算 RPC GET/POST 和 ROA 的 HMAC 签名，检查签名版本仍为 `1.0`，覆盖默认 AccessKey、命名 STS 和显式 SHA1 客户端，并验证请求体摘要及独立的 MNS SHA1 协议。测试不需要云端凭证，也不会调用真实 API。`composer test` 包含调用真实服务的 Feature 测试，此次回归检查不需要运行它。

产品 SDK 的依赖约束保持为 `alibabacloud/client: ^1.5`。已有锁文件可能仍锁定旧版 Client；发布验收时，请使用 `composer show alibabacloud/client` 确认实际安装的版本。离线测试不替代真实云端联调和发行包验收，发行 ZIP 也需要另行确认包含目标 Client 版本。
