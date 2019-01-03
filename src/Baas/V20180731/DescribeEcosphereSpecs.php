<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeEcosphereSpecs
 *
 */
class DescribeEcosphereSpecs extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'DescribeEcosphereSpecs';

    /**
     * @var string
     */
    public $method = 'POST';
}
