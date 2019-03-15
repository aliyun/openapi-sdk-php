<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCircuitCode()
 * @method $this withCircuitCode($value)
 * @method string getVlanId()
 * @method $this withVlanId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getVbrId()
 * @method $this withVbrId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPeerGatewayIp()
 * @method $this withPeerGatewayIp($value)
 * @method string getPeeringSubnetMask()
 * @method $this withPeeringSubnetMask($value)
 * @method string getPhysicalConnectionId()
 * @method $this withPhysicalConnectionId($value)
 * @method string getLocalGatewayIp()
 * @method $this withLocalGatewayIp($value)
 */
class AssociatePhysicalConnectionToVirtualBorderRouter extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
