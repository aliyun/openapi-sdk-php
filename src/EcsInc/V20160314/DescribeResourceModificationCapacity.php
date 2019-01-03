<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeResourceModificationCapacity
 *
 * @method string getResourceOwnerId()
 * @method string getTargetInstanceType()
 * @method string getMigrateAcrossZone()
 * @method string getTargetSystemDiskCategory()
 * @method string getAliUid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getInstanceId()
 * @method string getBid()
 */
class DescribeResourceModificationCapacity extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'DescribeResourceModificationCapacity';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @deprecated deprecated since version 2.0, Use withTargetInstanceType() instead.
     *
     * @param string $targetInstanceType
     *
     * @return $this
     */
    public function setTargetInstanceType($targetInstanceType)
    {
        return $this->withTargetInstanceType($targetInstanceType);
    }

    /**
     * @param string $targetInstanceType
     *
     * @return $this
     */
    public function withTargetInstanceType($targetInstanceType)
    {
        $this->data['TargetInstanceType'] = $targetInstanceType;
        $this->options['query']['TargetInstanceType'] = $targetInstanceType;

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
     * @deprecated deprecated since version 2.0, Use withTargetSystemDiskCategory() instead.
     *
     * @param string $targetSystemDiskCategory
     *
     * @return $this
     */
    public function setTargetSystemDiskCategory($targetSystemDiskCategory)
    {
        return $this->withTargetSystemDiskCategory($targetSystemDiskCategory);
    }

    /**
     * @param string $targetSystemDiskCategory
     *
     * @return $this
     */
    public function withTargetSystemDiskCategory($targetSystemDiskCategory)
    {
        $this->data['TargetSystemDiskCategory'] = $targetSystemDiskCategory;
        $this->options['query']['TargetSystemDiskCategory'] = $targetSystemDiskCategory;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAliUid() instead.
     *
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        return $this->withAliUid($aliUid);
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['AliUid'] = $aliUid;

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
     * @deprecated deprecated since version 2.0, Use getInstanceId() instead.
     *
     * @return array
     */
    public function getInstanceIds()
    {
        return $this->getInstanceId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param array $instanceIds
     *
     * @return $this
     */
    public function setInstanceIds(array $instanceIds)
    {
        return $this->withInstanceId($instanceIds);
    }

    /**
     * @param array $instanceId
     *
     * @return $this
     */
    public function withInstanceId(array $instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        foreach ($instanceId as $i => $iValue) {
            $this->options['query']['InstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBid() instead.
     *
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        return $this->withBid($bid);
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['Bid'] = $bid;

        return $this;
    }
}
