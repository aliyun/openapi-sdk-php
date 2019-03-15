<?php

namespace AlibabaCloud\YqBridge\V20170810;

use AlibabaCloud\Rpc;

/**
 * @method string getUid()
 * @method $this withUid($value)
 */
class CheckCloudUser extends Rpc
{
    public $product = 'YqBridge';

    public $version = '2017-08-10';

    public $method = 'POST';
}
