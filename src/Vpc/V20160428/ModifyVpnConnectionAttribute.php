<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getIkeConfig()
 * @method $this withIkeConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRemoteSubnet()
 * @method $this withRemoteSubnet($value)
 * @method string getEffectImmediately()
 * @method $this withEffectImmediately($value)
 * @method string getAutoConfigRoute()
 * @method $this withAutoConfigRoute($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getIpsecConfig()
 * @method $this withIpsecConfig($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getHealthCheckConfig()
 * @method $this withHealthCheckConfig($value)
 * @method string getLocalSubnet()
 * @method $this withLocalSubnet($value)
 * @method string getVpnConnectionId()
 * @method $this withVpnConnectionId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyVpnConnectionAttribute extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
