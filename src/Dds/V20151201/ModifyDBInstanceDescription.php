<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getDBInstanceDescription()
 * @method $this withDBInstanceDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ModifyDBInstanceDescription extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';
}
