<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GenerateOssUriForTsl
 *
 */
class GenerateOssUriForTsl extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'GenerateOssUriForTsl';

    /**
     * @var string
     */
    public $method = 'POST';
}
