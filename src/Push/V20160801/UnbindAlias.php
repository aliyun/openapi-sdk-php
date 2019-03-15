<?php

namespace AlibabaCloud\Push\V20160801;

use AlibabaCloud\Rpc;

/**
 * @method string getAliasName()
 * @method $this withAliasName($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getUnbindAll()
 * @method $this withUnbindAll($value)
 */
class UnbindAlias extends Rpc
{
    public $product = 'Push';

    public $version = '2016-08-01';

    public $method = 'POST';
}
