<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getGwProductKey()
 * @method $this withGwProductKey($value)
 * @method string getGwDeviceName()
 * @method $this withGwDeviceName($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGwIotId()
 * @method $this withGwIotId($value)
 * @method string getDeviceListStr()
 * @method $this withDeviceListStr($value)
 */
class NotifyAddThingTopo extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
