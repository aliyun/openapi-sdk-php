<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNodeStorage()
 * @method $this withNodeStorage($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNodeClass()
 * @method $this withNodeClass($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getEffectiveTime()
 * @method $this withEffectiveTime($value)
 * @method string getDBInstanceId()
 * @method $this withDBInstanceId($value)
 * @method string getNodeId()
 * @method $this withNodeId($value)
 */
class ModifyNodeSpec extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';
}
