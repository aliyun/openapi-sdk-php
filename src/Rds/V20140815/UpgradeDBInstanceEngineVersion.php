<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getEngineVersion()
 * @method $this withEngineVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpgradeDBInstanceEngineVersion extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
