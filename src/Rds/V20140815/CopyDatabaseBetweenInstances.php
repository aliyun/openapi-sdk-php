<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRestoreTime()
 * @method $this withRestoreTime($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSyncUserPrivilege()
 * @method $this withSyncUserPrivilege($value)
 * @method string getDbNames()
 * @method $this withDbNames($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTargetDBInstanceId()
 * @method $this withTargetDBInstanceId($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class CopyDatabaseBetweenInstances extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
