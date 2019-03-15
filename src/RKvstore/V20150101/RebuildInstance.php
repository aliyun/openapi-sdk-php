<?php

namespace AlibabaCloud\RKvstore\V20150101;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNodeType()
 * @method $this withNodeType($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getInstanceClass()
 * @method $this withInstanceClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getBusinessInfo()
 * @method $this withBusinessInfo($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSrcDBInstanceId()
 * @method $this withSrcDBInstanceId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getConfig()
 * @method $this withConfig($value)
 */
class RebuildInstance extends Rpc
{
    public $product = 'R-kvstore';

    public $version = '2015-01-01';

    public $method = 'POST';

    public $serviceCode = 'redisa';
}
