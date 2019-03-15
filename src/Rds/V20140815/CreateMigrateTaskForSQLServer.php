<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getDBName()
 * @method $this withDBName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getIsOnlineDB()
 * @method $this withIsOnlineDB($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getOSSUrls()
 * @method $this withOSSUrls($value)
 */
class CreateMigrateTaskForSQLServer extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';
}
