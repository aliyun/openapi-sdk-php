<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 */
class InvokeThingService extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
