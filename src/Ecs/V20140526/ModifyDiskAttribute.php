<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDiskAttribute
 *
 * @method string getDiskName()
 * @method string getDeleteAutoSnapshot()
 * @method string getResourceOwnerId()
 * @method string getEnableAutoSnapshot()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getDiskId()
 * @method string getOwnerId()
 * @method string getDeleteWithInstance()
 */
class ModifyDiskAttribute extends RpcRequest
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
    public $action = 'ModifyDiskAttribute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDiskName() instead.
     *
     * @param string $diskName
     *
     * @return $this
     */
    public function setDiskName($diskName)
    {
        return $this->withDiskName($diskName);
    }

    /**
     * @param string $diskName
     *
     * @return $this
     */
    public function withDiskName($diskName)
    {
        $this->data['DiskName'] = $diskName;
        $this->options['query']['DiskName'] = $diskName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDeleteAutoSnapshot() instead.
     *
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function setDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        return $this->withDeleteAutoSnapshot($deleteAutoSnapshot);
    }

    /**
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function withDeleteAutoSnapshot($deleteAutoSnapshot)
    {
        $this->data['DeleteAutoSnapshot'] = $deleteAutoSnapshot;
        $this->options['query']['DeleteAutoSnapshot'] = $deleteAutoSnapshot;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withEnableAutoSnapshot() instead.
     *
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function setEnableAutoSnapshot($enableAutoSnapshot)
    {
        return $this->withEnableAutoSnapshot($enableAutoSnapshot);
    }

    /**
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function withEnableAutoSnapshot($enableAutoSnapshot)
    {
        $this->data['EnableAutoSnapshot'] = $enableAutoSnapshot;
        $this->options['query']['EnableAutoSnapshot'] = $enableAutoSnapshot;

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDiskId() instead.
     *
     * @param string $diskId
     *
     * @return $this
     */
    public function setDiskId($diskId)
    {
        return $this->withDiskId($diskId);
    }

    /**
     * @param string $diskId
     *
     * @return $this
     */
    public function withDiskId($diskId)
    {
        $this->data['DiskId'] = $diskId;
        $this->options['query']['DiskId'] = $diskId;

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
     * @deprecated deprecated since version 2.0, Use withDeleteWithInstance() instead.
     *
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function setDeleteWithInstance($deleteWithInstance)
    {
        return $this->withDeleteWithInstance($deleteWithInstance);
    }

    /**
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function withDeleteWithInstance($deleteWithInstance)
    {
        $this->data['DeleteWithInstance'] = $deleteWithInstance;
        $this->options['query']['DeleteWithInstance'] = $deleteWithInstance;

        return $this;
    }
}
