<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPrivateNatGatewayId()
 * @method $this withPrivateNatGatewayId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSourceCIDR()
 * @method $this withSourceCIDR($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSNatIp()
 * @method $this withSNatIp($value)
 */
class CreatePrivateSNatEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
