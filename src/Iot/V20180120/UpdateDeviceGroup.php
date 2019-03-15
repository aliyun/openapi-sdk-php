<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class UpdateDeviceGroup extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
