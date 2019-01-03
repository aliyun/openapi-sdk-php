<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRouteEntryList
 *
 * @method string getResourceOwnerId()
 * @method string getRouteEntryName()
 * @method string getNetworkType()
 * @method string getRouteEntryType()
 * @method string getIpVersion()
 * @method string getNextHopId()
 * @method string getNextHopType()
 * @method string getRouteTableId()
 * @method string getResourceOwnerAccount()
 * @method string getDestinationCidrBlock()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getRouteEntryId()
 */
class DescribeRouteEntryList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'DescribeRouteEntryList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @deprecated deprecated since version 2.0, Use withRouteEntryName() instead.
     *
     * @param string $routeEntryName
     *
     * @return $this
     */
    public function setRouteEntryName($routeEntryName)
    {
        return $this->withRouteEntryName($routeEntryName);
    }

    /**
     * @param string $routeEntryName
     *
     * @return $this
     */
    public function withRouteEntryName($routeEntryName)
    {
        $this->data['RouteEntryName'] = $routeEntryName;
        $this->options['query']['RouteEntryName'] = $routeEntryName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNetworkType() instead.
     *
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        return $this->withNetworkType($networkType);
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRouteEntryType() instead.
     *
     * @param string $routeEntryType
     *
     * @return $this
     */
    public function setRouteEntryType($routeEntryType)
    {
        return $this->withRouteEntryType($routeEntryType);
    }

    /**
     * @param string $routeEntryType
     *
     * @return $this
     */
    public function withRouteEntryType($routeEntryType)
    {
        $this->data['RouteEntryType'] = $routeEntryType;
        $this->options['query']['RouteEntryType'] = $routeEntryType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIpVersion() instead.
     *
     * @param string $ipVersion
     *
     * @return $this
     */
    public function setIpVersion($ipVersion)
    {
        return $this->withIpVersion($ipVersion);
    }

    /**
     * @param string $ipVersion
     *
     * @return $this
     */
    public function withIpVersion($ipVersion)
    {
        $this->data['IpVersion'] = $ipVersion;
        $this->options['query']['IpVersion'] = $ipVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNextHopId() instead.
     *
     * @param string $nextHopId
     *
     * @return $this
     */
    public function setNextHopId($nextHopId)
    {
        return $this->withNextHopId($nextHopId);
    }

    /**
     * @param string $nextHopId
     *
     * @return $this
     */
    public function withNextHopId($nextHopId)
    {
        $this->data['NextHopId'] = $nextHopId;
        $this->options['query']['NextHopId'] = $nextHopId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNextHopType() instead.
     *
     * @param string $nextHopType
     *
     * @return $this
     */
    public function setNextHopType($nextHopType)
    {
        return $this->withNextHopType($nextHopType);
    }

    /**
     * @param string $nextHopType
     *
     * @return $this
     */
    public function withNextHopType($nextHopType)
    {
        $this->data['NextHopType'] = $nextHopType;
        $this->options['query']['NextHopType'] = $nextHopType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRouteTableId() instead.
     *
     * @param string $routeTableId
     *
     * @return $this
     */
    public function setRouteTableId($routeTableId)
    {
        return $this->withRouteTableId($routeTableId);
    }

    /**
     * @param string $routeTableId
     *
     * @return $this
     */
    public function withRouteTableId($routeTableId)
    {
        $this->data['RouteTableId'] = $routeTableId;
        $this->options['query']['RouteTableId'] = $routeTableId;

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
     * @deprecated deprecated since version 2.0, Use withDestinationCidrBlock() instead.
     *
     * @param string $destinationCidrBlock
     *
     * @return $this
     */
    public function setDestinationCidrBlock($destinationCidrBlock)
    {
        return $this->withDestinationCidrBlock($destinationCidrBlock);
    }

    /**
     * @param string $destinationCidrBlock
     *
     * @return $this
     */
    public function withDestinationCidrBlock($destinationCidrBlock)
    {
        $this->data['DestinationCidrBlock'] = $destinationCidrBlock;
        $this->options['query']['DestinationCidrBlock'] = $destinationCidrBlock;

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
     * @deprecated deprecated since version 2.0, Use withRouteEntryId() instead.
     *
     * @param string $routeEntryId
     *
     * @return $this
     */
    public function setRouteEntryId($routeEntryId)
    {
        return $this->withRouteEntryId($routeEntryId);
    }

    /**
     * @param string $routeEntryId
     *
     * @return $this
     */
    public function withRouteEntryId($routeEntryId)
    {
        $this->data['RouteEntryId'] = $routeEntryId;
        $this->options['query']['RouteEntryId'] = $routeEntryId;

        return $this;
    }
}
