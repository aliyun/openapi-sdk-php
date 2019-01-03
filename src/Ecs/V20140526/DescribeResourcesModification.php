<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeResourcesModification
 *
 * @method string getResourceOwnerId()
 * @method string getMemory()
 * @method string getCores()
 * @method string getMigrateAcrossZone()
 * @method string getInstanceType()
 * @method string getResourceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOperationType()
 * @method string getOwnerId()
 * @method string getDestinationResource()
 */
class DescribeResourcesModification extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeResourcesModification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withMemory() instead.
     *
     * @param string $memory
     *
     * @return $this
     */
    public function setMemory($memory)
    {
        return $this->withMemory($memory);
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
     * @deprecated deprecated since version 2.0, Use withCores() instead.
     *
     * @param string $cores
     *
     * @return $this
     */
    public function setCores($cores)
    {
        return $this->withCores($cores);
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
     * @deprecated deprecated since version 2.0, Use withMigrateAcrossZone() instead.
     *
     * @param string $migrateAcrossZone
     *
     * @return $this
     */
    public function setMigrateAcrossZone($migrateAcrossZone)
    {
        return $this->withMigrateAcrossZone($migrateAcrossZone);
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
     * @deprecated deprecated since version 2.0, Use withInstanceType() instead.
     *
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        return $this->withInstanceType($instanceType);
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
     * @deprecated deprecated since version 2.0, Use withResourceId() instead.
     *
     * @param string $resourceId
     *
     * @return $this
     */
    public function setResourceId($resourceId)
    {
        return $this->withResourceId($resourceId);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOperationType() instead.
     *
     * @param string $operationType
     *
     * @return $this
     */
    public function setOperationType($operationType)
    {
        return $this->withOperationType($operationType);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withDestinationResource() instead.
     *
     * @param string $destinationResource
     *
     * @return $this
     */
    public function setDestinationResource($destinationResource)
    {
        return $this->withDestinationResource($destinationResource);
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
