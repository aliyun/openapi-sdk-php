<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class AcceptEthereumInvitation extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
