<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getNewName()
 * @method $this withNewName($value)
 */
class RenameBlockchain extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
