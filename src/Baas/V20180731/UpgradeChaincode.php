<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getOrganizationId()
 * @method $this withOrganizationId($value)
 * @method string getChaincodeId()
 * @method $this withChaincodeId($value)
 * @method string getCollectionConfig()
 * @method $this withCollectionConfig($value)
 * @method string getEndorsePolicy()
 * @method $this withEndorsePolicy($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class UpgradeChaincode extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
