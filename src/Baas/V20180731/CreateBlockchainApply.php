<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getMachineNum()
 * @method $this withMachineNum($value)
 * @method string getLiveTime()
 * @method $this withLiveTime($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 */
class CreateBlockchainApply extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
