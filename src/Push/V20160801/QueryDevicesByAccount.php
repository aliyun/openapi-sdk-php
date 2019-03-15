<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class QueryDevicesByAccount extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
