<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api DescribeResourcesModification
 *
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method string getDataDiskCategory()
 * @method string getCores()
 * @method string getSystemDiskCategory()
 * @method string getMigrateAcrossZone()
 * @method string getInstanceType()
 * @method string getNetworkCategory()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOperationType()
 * @method string getOwnerId()
 * @method string getDestinationResource()
 */
class DescribeResourcesModification extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $memory
     *
     * @return $this
     */
    public function withMemory($memory)
    {
        $this->data['Memory'] = $memory;
        $this->options['query']['Memory'] = $memory;

        return $this;
    }

    /**
     * @param string $dataDiskCategory
     *
     * @return $this
     */
    public function withDataDiskCategory($dataDiskCategory)
    {
        $this->data['DataDiskCategory'] = $dataDiskCategory;
        $this->options['query']['DataDiskCategory'] = $dataDiskCategory;

        return $this;
    }

    /**
     * @param string $cores
     *
     * @return $this
     */
    public function withCores($cores)
    {
        $this->data['Cores'] = $cores;
        $this->options['query']['Cores'] = $cores;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function withSystemDiskCategory($systemDiskCategory)
    {
        $this->data['SystemDiskCategory'] = $systemDiskCategory;
        $this->options['query']['SystemDiskCategory'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $migrateAcrossZone
     *
     * @return $this
     */
    public function withMigrateAcrossZone($migrateAcrossZone)
    {
        $this->data['MigrateAcrossZone'] = $migrateAcrossZone;
        $this->options['query']['MigrateAcrossZone'] = $migrateAcrossZone;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $networkCategory
     *
     * @return $this
     */
    public function withNetworkCategory($networkCategory)
    {
        $this->data['NetworkCategory'] = $networkCategory;
        $this->options['query']['NetworkCategory'] = $networkCategory;

        return $this;
    }

    /**
     * @param string $resourceId
     *
     * @return $this
     */
    public function withResourceId($resourceId)
    {
        $this->data['ResourceId'] = $resourceId;
        $this->options['query']['ResourceId'] = $resourceId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $operationType
     *
     * @return $this
     */
    public function withOperationType($operationType)
    {
        $this->data['OperationType'] = $operationType;
        $this->options['query']['OperationType'] = $operationType;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $destinationResource
     *
     * @return $this
     */
    public function withDestinationResource($destinationResource)
    {
        $this->data['DestinationResource'] = $destinationResource;
        $this->options['query']['DestinationResource'] = $destinationResource;

        return $this;
    }
}
