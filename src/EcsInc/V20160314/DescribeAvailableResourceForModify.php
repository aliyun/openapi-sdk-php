<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOperationType()
 * @method $this withOperationType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMigrate()
 * @method $this withMigrate($value)
 */
class DescribeAvailableResourceForModify extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
