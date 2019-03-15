<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getProductName()
 * @method $this withProductName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class UpdateProduct extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
