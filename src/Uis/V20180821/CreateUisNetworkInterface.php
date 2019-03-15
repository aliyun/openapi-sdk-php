<?php

namespace AlibabaCloud\Uis\V20180821;

use AlibabaCloud\Rpc;

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUisNodeId()
 * @method $this withUisNodeId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateUisNetworkInterface extends Rpc
{
    public $product = 'Uis';

    public $version = '2018-08-21';

    public $method = 'POST';

    public $serviceCode = 'uis';
}
