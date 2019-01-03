<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnassignPrivateIpAddresses
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getPrivateIpAddress()
 * @method string getNetworkInterfaceId()
 */
class UnassignPrivateIpAddresses extends RpcRequest
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
    public $action = 'UnassignPrivateIpAddresses';

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
     * @deprecated deprecated since version 2.0, Use getPrivateIpAddress() instead.
     *
     * @return array
     */
    public function getPrivateIpAddresss()
    {
        return $this->getPrivateIpAddress();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPrivateIpAddress() instead.
     *
     * @param array $privateIpAddresss
     *
     * @return $this
     */
    public function setPrivateIpAddresss(array $privateIpAddresss)
    {
        return $this->withPrivateIpAddress($privateIpAddresss);
    }

    /**
     * @param array $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress(array $privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        foreach ($privateIpAddress as $i => $iValue) {
            $this->options['query']['PrivateIpAddress.' . ($i + 1)] = $iValue;
        }

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
