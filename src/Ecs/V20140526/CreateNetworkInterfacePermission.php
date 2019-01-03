<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateNetworkInterfacePermission
 *
 * @method string getResourceOwnerId()
 * @method string getAccountId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getPermission()
 * @method string getOwnerId()
 * @method string getNetworkInterfaceId()
 */
class CreateNetworkInterfacePermission extends RpcRequest
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
    public $action = 'CreateNetworkInterfacePermission';

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
     * @deprecated deprecated since version 2.0, Use withAccountId() instead.
     *
     * @param string $accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        return $this->withAccountId($accountId);
    }

    /**
     * @param string $accountId
     *
     * @return $this
     */
    public function withAccountId($accountId)
    {
        $this->data['AccountId'] = $accountId;
        $this->options['query']['AccountId'] = $accountId;

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
     * @deprecated deprecated since version 2.0, Use withPermission() instead.
     *
     * @param string $permission
     *
     * @return $this
     */
    public function setPermission($permission)
    {
        return $this->withPermission($permission);
    }

    /**
     * @param string $permission
     *
     * @return $this
     */
    public function withPermission($permission)
    {
        $this->data['Permission'] = $permission;
        $this->options['query']['Permission'] = $permission;

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
     * @deprecated deprecated since version 2.0, Use withNetworkInterfaceId() instead.
     *
     * @param string $networkInterfaceId
     *
     * @return $this
     */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        return $this->withNetworkInterfaceId($networkInterfaceId);
    }

    /**
     * @param string $networkInterfaceId
     *
     * @return $this
     */
    public function withNetworkInterfaceId($networkInterfaceId)
    {
        $this->data['NetworkInterfaceId'] = $networkInterfaceId;
        $this->options['query']['NetworkInterfaceId'] = $networkInterfaceId;

        return $this;
    }
}
