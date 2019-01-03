<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetMyBlockchains
 *
 */
class GetMyBlockchains extends RpcRequest
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
    public $action = 'GetMyBlockchains';

    /**
     * @var string
     */
    public $method = 'POST';
}
