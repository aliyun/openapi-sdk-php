<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class UpdateEthereumClientUserPassword extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
