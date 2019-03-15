<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class GetThingTopo extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
