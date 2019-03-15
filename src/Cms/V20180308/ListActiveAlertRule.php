<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getProduct()
 * @method $this withProduct($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListActiveAlertRule extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';
}
