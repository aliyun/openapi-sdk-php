<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getInstances()
 * @method $this withInstances($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class AddMyGroupInstances extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
