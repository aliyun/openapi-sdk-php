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
