<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 */
class DescribeEthereumDeletable extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
