<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 */
class BindPhone extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
