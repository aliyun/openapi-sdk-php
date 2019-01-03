<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryUsableSnapshots
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotNickName()
 * @method string getSnapshotId()
 * @method string getOffset()
 * @method string getResourceOwnerAccount()
 * @method string getCreationStartTime()
 * @method string getCreationEndTime()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getOwnerId()
 */
class QueryUsableSnapshots extends RpcRequest
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
    public $action = 'QueryUsableSnapshots';

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
     * @deprecated deprecated since version 2.0, Use withSnapshotNickName() instead.
     *
     * @param string $snapshotNickName
     *
     * @return $this
     */
    public function setSnapshotNickName($snapshotNickName)
    {
        return $this->withSnapshotNickName($snapshotNickName);
    }

    /**
     * @param string $snapshotNickName
     *
     * @return $this
     */
    public function withSnapshotNickName($snapshotNickName)
    {
        $this->data['SnapshotNickName'] = $snapshotNickName;
        $this->options['query']['SnapshotNickName'] = $snapshotNickName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSnapshotId() instead.
     *
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setSnapshotId($snapshotId)
    {
        return $this->withSnapshotId($snapshotId);
    }

    /**
     * @param string $snapshotId
     *
     * @return $this
     */
    public function withSnapshotId($snapshotId)
    {
        $this->data['SnapshotId'] = $snapshotId;
        $this->options['query']['SnapshotId'] = $snapshotId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOffset() instead.
     *
     * @param string $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        return $this->withOffset($offset);
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function withOffset($offset)
    {
        $this->data['Offset'] = $offset;
        $this->options['query']['Offset'] = $offset;

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
     * @deprecated deprecated since version 2.0, Use withCreationStartTime() instead.
     *
     * @param string $creationStartTime
     *
     * @return $this
     */
    public function setCreationStartTime($creationStartTime)
    {
        return $this->withCreationStartTime($creationStartTime);
    }

    /**
     * @param string $creationStartTime
     *
     * @return $this
     */
    public function withCreationStartTime($creationStartTime)
    {
        $this->data['CreationStartTime'] = $creationStartTime;
        $this->options['query']['CreationStartTime'] = $creationStartTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCreationEndTime() instead.
     *
     * @param string $creationEndTime
     *
     * @return $this
     */
    public function setCreationEndTime($creationEndTime)
    {
        return $this->withCreationEndTime($creationEndTime);
    }

    /**
     * @param string $creationEndTime
     *
     * @return $this
     */
    public function withCreationEndTime($creationEndTime)
    {
        $this->data['CreationEndTime'] = $creationEndTime;
        $this->options['query']['CreationEndTime'] = $creationEndTime;

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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
}
