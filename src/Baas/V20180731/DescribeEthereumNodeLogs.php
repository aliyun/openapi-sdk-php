<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class DescribeEthereumNodeLogs extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
