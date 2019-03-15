<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class NodeInstall extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
