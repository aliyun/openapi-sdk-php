<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupDesc()
 * @method $this withGroupDesc($value)
 * @method string getIotInstanceId()
 * @method $this withIotInstanceId($value)
 * @method string getSuperGroupId()
 * @method $this withSuperGroupId($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateDeviceGroup extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

    public $method = 'POST';
}
