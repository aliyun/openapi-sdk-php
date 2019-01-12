<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\AlibabaCloud;
use ReflectionException;
use Stringy\Stringy;

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
     * @return void
     */
    public static function dump()
    {
        foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . '*') as $productDirectory) {
            if (is_dir($productDirectory)) {
                self::$products[] = \basename($productDirectory);
                self::generateVersionResolverFile($productDirectory);
            }
        }
        self::generateServiceResolverTraitFile();
    }

    /**
     * @return string
     */
    private static function getServiceResolverTraitFilePath()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'ServiceResolverTrait.php';
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
 * Find service based on the static method name as service name.
 *
 * @package   AlibabaCloud
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
     * @param string $productDirectory
     *
     * @return bool
     */
    private static function generateVersionResolverFile($productDirectory)
    {
        $productName = basename($productDirectory);

        $versions = self::getVersions($productDirectory);
        if ($versions === []) {
            return false;
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
 * Find the specified version of the $productName based on the method name as the version name.
 *
 * @package   AlibabaCloud\\{$productName}
 *{$method}
 */
class {$productName}
{
    use VersionResolverTrait;
}

EOT;

        $fileName = $productDirectory . DIRECTORY_SEPARATOR . $productName . '.php';
        \file_put_contents($fileName, $php);
        return true;
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
                self::generateApiResolverFile($versionDirectory);
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
     * @param string $versionDirectory
     *
     * @return void
     */
    private static function generateApiResolverFile($versionDirectory)
    {
        $version = basename($versionDirectory);
        $product = \basename(\dirname($versionDirectory));

        $apis   = self::getApis($versionDirectory);
        $method = '';
        foreach ($apis as $api) {
            $api   = \str_replace('.php', '', $api);
            $lcApi = \lcfirst($api);
            // Avoid adding the itself and ApiResolver  to the code
            if ($api !== $product && !Stringy::create($api)->endsWith('ApiResolver')) {
                $method .= \PHP_EOL . " * @method $api {$lcApi}(array \$options = [])";
            }
        }

        $php = <<<EOT
<?php

namespace AlibabaCloud\\{$product}\\{$version};

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the $product based on the method name as the Api name.
 *
 * @package   AlibabaCloud\\{$product}\\{$version}
 *{$method}
 */
class {$product}ApiResolver
{
    use ApiResolverTrait;
}

EOT;

        $fileName = $versionDirectory . DIRECTORY_SEPARATOR . $product . 'ApiResolver.php';
        \file_put_contents($fileName, $php);
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
 * @package   AlibabaCloud\\{$product}
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
}
