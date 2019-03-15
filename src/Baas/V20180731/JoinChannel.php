<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getDo()
 * @method $this withDo($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class JoinChannel extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
