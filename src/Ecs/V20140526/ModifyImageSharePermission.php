<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyImageSharePermission
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method array getAddAccount()
 * @method string getResourceOwnerAccount()
 * @method array getRemoveAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyImageSharePermission extends RpcRequest
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
    public $action = 'ModifyImageSharePermission';

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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
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
     * @deprecated deprecated since version 2.0, Use getAddAccount() instead.
     *
     * @return array
     */
    public function getAddAccounts()
    {
        return $this->getAddAccount();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAddAccount() instead.
     *
     * @param array $addAccounts
     *
     * @return $this
     */
    public function setAddAccounts(array $addAccounts)
    {
        return $this->withAddAccount($addAccounts);
    }

    /**
     * @param array $addAccount
     *
     * @return $this
     */
    public function withAddAccount(array $addAccount)
    {
        $this->data['AddAccount'] = $addAccount;
        foreach ($addAccount as $i => $iValue) {
            $this->options['query']['AddAccount.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use getRemoveAccount() instead.
     *
     * @return array
     */
    public function getRemoveAccounts()
    {
        return $this->getRemoveAccount();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemoveAccount() instead.
     *
     * @param array $removeAccounts
     *
     * @return $this
     */
    public function setRemoveAccounts(array $removeAccounts)
    {
        return $this->withRemoveAccount($removeAccounts);
    }

    /**
     * @param array $removeAccount
     *
     * @return $this
     */
    public function withRemoveAccount(array $removeAccount)
    {
        $this->data['RemoveAccount'] = $removeAccount;
        foreach ($removeAccount as $i => $iValue) {
            $this->options['query']['RemoveAccount.' . ($i + 1)] = $iValue;
        }

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
}
