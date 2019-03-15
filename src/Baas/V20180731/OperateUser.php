<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class OperateUser extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
