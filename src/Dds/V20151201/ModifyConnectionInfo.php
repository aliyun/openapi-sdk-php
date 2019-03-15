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
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMonitorNodeId()
 * @method $this withMonitorNodeId($value)
 * @method string getConnectionAddress()
 * @method $this withConnectionAddress($value)
 * @method string getMonitorInstanceId()
 * @method $this withMonitorInstanceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyConnectionInfo extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';
}
