<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\AlibabaCloud;
use Composer\Script\Event;
use ReflectionException;

/**
 * CLass DumpServices
 *
 * @package   AlibabaCloud
 * @mixin     AlibabaCloud
 * @codeCoverageIgnore
 */
class DumpServices
{

    /**
     * @var array
     */
    private static $products = [];

    /**
     * @var array
     */
    private static $supported = [];

    /**
     * @param Event $event
     *
     * @return void
     */
    public static function dump(Event $event)
    {
        require_once $event->getComposer()->getConfig()->get('vendor-dir') . '/autoload.php';
        foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . '*') as $productDirectory) {
            if (is_dir($productDirectory)) {
                $product                   = \basename($productDirectory);
                self::$products[]          = $product;
                $versions                  = self::generateVersionResolverFile($productDirectory);
                self::$supported[$product] = $versions;
            }
        }
        self::generateServiceResolverTraitFile();
        self::generateSupportedFile();
    }

    private static function generateSupportedFile()
    {
        $productNum  = count(self::$supported);
        $versionsNum = 0;
        $list        = '';
        foreach (self::$supported as $product => $versions) {
            $list .= "| $product |";
            foreach ($versions as $version) {
                $version = str_replace('V', '', $version);
                $versionsNum++;
                $list .= "V$version, ";
            }
            $list .= "|\n";
            $list = str_replace(', |', '|', $list);
        }

        $en = <<<EOT
English | [简体中文](./SUPPORTED-CN.md)

# Supported
Alibaba Cloud SDK for PHP has supported quick access to $versionsNum versions of $productNum products, as listed below:

| Products |   Versions    |
|----------|:-------------:|
$list
EOT;

        $cn = <<<EOT
[English](./SUPPORTED.md) | 简体中文

# 支持
Alibaba Cloud SDK for PHP 已经支持 $productNum 个产品共 $versionsNum 个版本的快捷访问，列表如下：

| 产品     |      版本      |
|----------|:-------------:|
$list
EOT;

        $file = __DIR__ . DIRECTORY_SEPARATOR . '../SUPPORTED.md';
        \file_put_contents($file, $en);

        $file = __DIR__ . DIRECTORY_SEPARATOR . '../SUPPORTED-CN.md';
        \file_put_contents($file, $cn);
    }

    /**
     * @param string $productDirectory
     *
     * @return array
     */
    private static function generateVersionResolverFile($productDirectory)
    {
        $productName = basename($productDirectory);

        $versions = self::getVersions($productDirectory);
        if ($versions === []) {
            return [];
        }

        $method = '';
        foreach ($versions as $version) {
            $lcVersion = \lcfirst($version);
            $method    .= \PHP_EOL . " * @method {$version}\\{$productName}ApiResolver {$lcVersion}()";
        }

        $php = <<<EOT
<?php

namespace AlibabaCloud\\{$productName};

use AlibabaCloud\VersionResolverTrait;

/**
 * Resolve version based on the method name.
 *{$method}
 */
class {$productName}
{
    use VersionResolverTrait;
}

EOT;

        $fileName = $productDirectory . DIRECTORY_SEPARATOR . $productName . '.php';
        \file_put_contents($fileName, $php);

        return $versions;
    }

    /**
     * @param string $productDirectory
     *
     * @return array
     */
    private static function getVersions($productDirectory)
    {
        $versions = [];
        foreach (glob($productDirectory . DIRECTORY_SEPARATOR . '*') as $versionDirectory) {
            // Product have versions.
            if (is_dir($versionDirectory) && \mb_strlen(\basename($versionDirectory)) === 9) {
                $versions[] = \basename($versionDirectory);
            }
        }

        // Product have no versions.
        if ($versions === []) {
            self::generateNoVersionApiResolverFile($productDirectory);
        }

        return $versions;
    }

    /**
     * @param string $versionDirectory
     *
     * @return array
     */
    private static function getApis($versionDirectory)
    {
        $apis = [];
        foreach (glob($versionDirectory . DIRECTORY_SEPARATOR . '*') as $apiDirectory) {
            if (\is_file($apiDirectory)) {
                $apis[] = \basename($apiDirectory);
            }
        }

        return $apis;
    }

    /**
     * @param string $directory
     *
     * @return void
     */
    private static function generateNoVersionApiResolverFile($directory)
    {
        $product = basename($directory);
        $apis    = self::getApis($directory);
        $method  = '';
        foreach ($apis as $api) {
            $api   = \str_replace('.php', '', $api);
            $lcApi = \lcfirst($api);

            // Avoid adding the itself to the code
            if ($api !== $product) {
                $method .= \PHP_EOL . " * @method static $api {$lcApi}(array \$options = [])";
            }
        }

        $php = <<<EOT
<?php

namespace AlibabaCloud\\{$product};

use AlibabaCloud\ApiResolverTrait;

/**
 * Class Find the specified Api of the $product based on the method name as the Api name.
 *
 *{$method}
 */
class {$product}
{
    use ApiResolverTrait;
}

EOT;

        $fileName = $directory . DIRECTORY_SEPARATOR . $product . '.php';
        \file_put_contents($fileName, $php);
    }

    /**
     * @return void
     */
    private static function generateServiceResolverTraitFile()
    {
        $method = '';
        foreach (self::$products as $product) {
            $lcProduct = \lcfirst($product);
            if (self::isStaticMethodExists($lcProduct)) {
                $lcProduct .= 'Service';
            }
            $method .= \PHP_EOL . " * @method static {$product}\\{$product} {$lcProduct}()";
        }

        $php = <<<EOT
<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\AlibabaCloud;

/**
 * Resolve product based on the static method name.
 *
 * @mixin     AlibabaCloud
 *
 * @codeCoverageIgnore
 *{$method}
 */
trait ServiceResolverTrait
{
}

EOT;

        \file_put_contents(self::getServiceResolverTraitFilePath(), $php);
    }

    /**
     * @param string $methodName
     *
     * @return bool
     */
    private static function isStaticMethodExists($methodName)
    {
        try {
            $class = new \ReflectionClass(AlibabaCloud::class);
            foreach ($class->getMethods() as $method) {
                if ($method->name === $methodName) {
                    return true;
                }
            }

            return false;
        } catch (ReflectionException $e) {
            echo $e->getMessage();
            exit(-1);
        }
    }

    /**
     * @return string
     */
    private static function getServiceResolverTraitFilePath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'ServiceResolverTrait.php';
    }
}
