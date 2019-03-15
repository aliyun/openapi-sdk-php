<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getMigrateAcrossZone()
 * @method $this withMigrateAcrossZone($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
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
 */
class DescribeResourcesModification extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';
}
