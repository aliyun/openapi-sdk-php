<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getEnableIpv6()
 * @method $this withEnableIpv6($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIpv6CidrBlock()
 * @method $this withIpv6CidrBlock($value)
 * @method string getVpcName()
 * @method $this withVpcName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getCidrBlock()
 * @method $this withCidrBlock($value)
 * @method string getUserCidr()
 * @method $this withUserCidr($value)
 */
class CreateVpc extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
