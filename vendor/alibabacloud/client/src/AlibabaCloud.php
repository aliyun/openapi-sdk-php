<?php

namespace AlibabaCloud\Client;

use AlibabaCloud\Client\Traits\LogTrait;
use AlibabaCloud\Client\Traits\MockTrait;
use AlibabaCloud\Client\Traits\ClientTrait;
use AlibabaCloud\Client\Traits\HistoryTrait;
use AlibabaCloud\Client\Traits\RequestTrait;
use AlibabaCloud\Client\Traits\EndpointTrait;
use AlibabaCloud\Client\Traits\DefaultRegionTrait;
use AlibabaCloud\Client\Exception\ClientException;

/**
 * Class AlibabaCloud
 *
 * @package   AlibabaCloud\Client
 * @mixin     \AlibabaCloud\ProductsResolver
 * @mixin     \AlibabaCloud\IdeHelper
 */
class AlibabaCloud
{
    use ClientTrait;
    use DefaultRegionTrait;
    use EndpointTrait;
    use RequestTrait;
    use MockTrait;
    use HistoryTrait;
    use LogTrait;

    /**
     * Version of the Client
     */
    const VERSION = '1.5.1';

    /**
     * This static method can directly call the specific service.
     *
     * @param string $product
     * @param array  $arguments
     *
     * @codeCoverageIgnore
     * @return object
     * @throws ClientException
     */
    public static function __callStatic($product, $arguments)
    {
        $product = \ucfirst($product);

        $product_resolver = 'AlibabaCloud\\ProductsResolver';
        if (\class_exists($product_resolver)) {
            new $product_resolver;
            $product_class = 'AlibabaCloud' . '\\' . $product;
        }

        $service_resolver = 'AlibabaCloud\\IdeHelper';
        if (\trait_exists($service_resolver)) {
            $product_class = 'AlibabaCloud' . '\\' . $product . '\\' . $product;
        }

        if (isset($product_class) && \class_exists($product_class)) {
            return new $product_class;
        }

        if (!\class_exists($product_resolver) && !\trait_exists($service_resolver)) {
            throw new ClientException(
                'Please install alibabacloud/sdk to support product quick access.',
                SDK::SERVICE_NOT_FOUND
            );
        }

        throw new ClientException(
            "May not yet support product $product quick access, "
            . 'you can use [Alibaba Cloud Client for PHP] to send any custom '
            . 'requests: https://github.com/aliyun/openapi-sdk-php-client/blob/master/docs/3-Request-EN.md',
            SDK::SERVICE_NOT_FOUND
        );
    }
}
