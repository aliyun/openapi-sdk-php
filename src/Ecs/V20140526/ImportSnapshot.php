<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ImportSnapshot
 *
 * @method string getResourceOwnerId()
 * @method string getSnapshotName()
 * @method string getOssObject()
 * @method string getOssBucket()
 * @method string getResourceOwnerAccount()
 * @method string getRoleName()
 * @method string getOwnerId()
 */
class ImportSnapshot extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

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
