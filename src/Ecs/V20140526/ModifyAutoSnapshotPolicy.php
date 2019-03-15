<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getDataDiskPolicyEnabled()
 * @method $this withDataDiskPolicyEnabled($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskPolicyRetentionDays()
 * @method $this withDataDiskPolicyRetentionDays($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSystemDiskPolicyRetentionLastWeek()
 * @method $this withSystemDiskPolicyRetentionLastWeek($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskPolicyTimePeriod()
 * @method $this withSystemDiskPolicyTimePeriod($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDataDiskPolicyRetentionLastWeek()
 * @method $this withDataDiskPolicyRetentionLastWeek($value)
 * @method string getSystemDiskPolicyRetentionDays()
 * @method $this withSystemDiskPolicyRetentionDays($value)
 * @method string getDataDiskPolicyTimePeriod()
 * @method $this withDataDiskPolicyTimePeriod($value)
 * @method string getSystemDiskPolicyEnabled()
 * @method $this withSystemDiskPolicyEnabled($value)
 */
class ModifyAutoSnapshotPolicy extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
