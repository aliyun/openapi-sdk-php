<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getHash()
 * @method $this withHash($value)
 */
class QueryTransaction extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
