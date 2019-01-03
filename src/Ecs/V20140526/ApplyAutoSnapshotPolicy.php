<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ApplyAutoSnapshotPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAutoSnapshotPolicyId()
 * @method string getDiskIds()
 * @method string getOwnerId()
 */
class ApplyAutoSnapshotPolicy extends RpcRequest
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
    public $action = 'ApplyAutoSnapshotPolicy';

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
     * @deprecated deprecated since version 2.0, Use withAutoSnapshotPolicyId() instead.
     *
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function setautoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        return $this->withAutoSnapshotPolicyId($autoSnapshotPolicyId);
    }

    /**
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->data['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->options['query']['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDiskIds() instead.
     *
     * @param string $diskIds
     *
     * @return $this
     */
    public function setdiskIds($diskIds)
    {
        return $this->withDiskIds($diskIds);
    }

    /**
     * @param string $diskIds
     *
     * @return $this
     */
    public function withDiskIds($diskIds)
    {
        $this->data['DiskIds'] = $diskIds;
        $this->options['query']['diskIds'] = $diskIds;

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
