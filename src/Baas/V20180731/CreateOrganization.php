<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getSpecName()
 * @method $this withSpecName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 * @method string getPeersCount()
 * @method $this withPeersCount($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateOrganization extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
