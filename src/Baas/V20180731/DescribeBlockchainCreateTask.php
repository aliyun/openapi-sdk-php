<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getCurrent()
 * @method $this withCurrent($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeBlockchainCreateTask extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
