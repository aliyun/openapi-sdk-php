<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AssignIpv6Addresses
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getIpv6AddressCount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getNetworkInterfaceId()
 * @method array getIpv6Address()
 */
class AssignIpv6Addresses extends RpcRequest
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
    public $action = 'AssignIpv6Addresses';

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
     * @deprecated deprecated since version 2.0, Use withIpv6AddressCount() instead.
     *
     * @param string $ipv6AddressCount
     *
     * @return $this
     */
    public function setIpv6AddressCount($ipv6AddressCount)
    {
        return $this->withIpv6AddressCount($ipv6AddressCount);
    }

    /**
     * @param string $ipv6AddressCount
     *
     * @return $this
     */
    public function withIpv6AddressCount($ipv6AddressCount)
    {
        $this->data['Ipv6AddressCount'] = $ipv6AddressCount;
        $this->options['query']['Ipv6AddressCount'] = $ipv6AddressCount;

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

    /**
     * @deprecated deprecated since version 2.0, Use getIpv6Address() instead.
     *
     * @return array
     */
    public function getIpv6Addresss()
    {
        return $this->getIpv6Address();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIpv6Address() instead.
     *
     * @param array $ipv6Addresss
     *
     * @return $this
     */
    public function setIpv6Addresss(array $ipv6Addresss)
    {
        return $this->withIpv6Address($ipv6Addresss);
    }

    /**
     * @param array $ipv6Address
     *
     * @return $this
     */
    public function withIpv6Address(array $ipv6Address)
    {
        $this->data['Ipv6Address'] = $ipv6Address;
        foreach ($ipv6Address as $i => $iValue) {
            $this->options['query']['Ipv6Address.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
