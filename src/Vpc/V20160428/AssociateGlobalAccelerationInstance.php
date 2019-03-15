<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getBackendServerId()
 * @method $this withBackendServerId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getGlobalAccelerationInstanceId()
 * @method $this withGlobalAccelerationInstanceId($value)
 * @method string getBackendServerRegionId()
 * @method $this withBackendServerRegionId($value)
 * @method string getBackendServerType()
 * @method $this withBackendServerType($value)
 */
class AssociateGlobalAccelerationInstance extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';
}
