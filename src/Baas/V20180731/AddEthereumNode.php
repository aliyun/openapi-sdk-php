<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getNodeName()
 * @method $this withNodeName($value)
 * @method string getEthereumId()
 * @method $this withEthereumId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getExternalNode()
 * @method $this withExternalNode($value)
 */
class AddEthereumNode extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
