<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getVpcTaskIdList()
 * @method $this withVpcTaskIdList($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getTaskIdList()
 * @method $this withTaskIdList($value)
 * @method string getVpcInstanceId()
 * @method $this withVpcInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getTunnelId()
 * @method $this withTunnelId($value)
 * @method string getSwitchTime()
 * @method $this withSwitchTime($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ModifyActiveOperationPendingTask extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
