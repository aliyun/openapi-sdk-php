<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getRouteSource()
 * @method $this withRouteSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getWeight()
 * @method $this withWeight($value)
 * @method string getVpnGatewayId()
 * @method $this withVpnGatewayId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRouteDest()
 * @method $this withRouteDest($value)
 * @method string getNextHop()
 * @method $this withNextHop($value)
 */
class DeleteVpnPbrRouteEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
