<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ImportSnapshot
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotName()
 * @method string getOssObject()
 * @method string getOssBucket()
 * @method string getResourceOwnerAccount()
 * @method string getRoleName()
 * @method string getOwnerId()
 */
class ImportSnapshot extends RpcRequest
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
    public $action = 'ImportSnapshot';

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
     * @deprecated deprecated since version 2.0, Use withSnapshotName() instead.
     *
     * @param string $snapshotName
     *
     * @return $this
     */
    public function setSnapshotName($snapshotName)
    {
        return $this->withSnapshotName($snapshotName);
    }

    /**
     * @param string $snapshotName
     *
     * @return $this
     */
    public function withSnapshotName($snapshotName)
    {
        $this->data['SnapshotName'] = $snapshotName;
        $this->options['query']['SnapshotName'] = $snapshotName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssObject() instead.
     *
     * @param string $ossObject
     *
     * @return $this
     */
    public function setOssObject($ossObject)
    {
        return $this->withOssObject($ossObject);
    }

    /**
     * @param string $ossObject
     *
     * @return $this
     */
    public function withOssObject($ossObject)
    {
        $this->data['OssObject'] = $ossObject;
        $this->options['query']['OssObject'] = $ossObject;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOssBucket() instead.
     *
     * @param string $ossBucket
     *
     * @return $this
     */
    public function setOssBucket($ossBucket)
    {
        return $this->withOssBucket($ossBucket);
    }

    /**
     * @param string $ossBucket
     *
     * @return $this
     */
    public function withOssBucket($ossBucket)
    {
        $this->data['OssBucket'] = $ossBucket;
        $this->options['query']['OssBucket'] = $ossBucket;

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
     * @deprecated deprecated since version 2.0, Use withRoleName() instead.
     *
     * @param string $roleName
     *
     * @return $this
     */
    public function setRoleName($roleName)
    {
        return $this->withRoleName($roleName);
    }

    /**
     * @param string $roleName
     *
     * @return $this
     */
    public function withRoleName($roleName)
    {
        $this->data['RoleName'] = $roleName;
        $this->options['query']['RoleName'] = $roleName;

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
