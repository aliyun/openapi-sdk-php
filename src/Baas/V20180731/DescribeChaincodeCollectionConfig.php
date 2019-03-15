<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class DescribeChaincodeCollectionConfig extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
