<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyImageShareGroupPermission
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getAddGroup1()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getRemoveGroup1()
 * @method string getOwnerId()
 */
class ModifyImageShareGroupPermission extends Rpc
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
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $addGroup1
     *
     * @return $this
     */
    public function withAddGroup1($addGroup1)
    {
        $this->data['AddGroup1'] = $addGroup1;
        $this->options['query']['AddGroup.1'] = $addGroup1;

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
     * @param string $removeGroup1
     *
     * @return $this
     */
    public function withRemoveGroup1($removeGroup1)
    {
        $this->data['RemoveGroup1'] = $removeGroup1;
        $this->options['query']['RemoveGroup.1'] = $removeGroup1;

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
