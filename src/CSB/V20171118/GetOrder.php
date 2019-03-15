<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Rpc;

/**
 * @method string getOrderId()
 * @method $this withOrderId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class GetOrder extends Rpc
{
    public $product = 'CSB';

    public $version = '2017-11-18';

    public $scheme = 'https';
}
