<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
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
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId']             = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $routeEntryName
     *
     * @return $this
     */
    public function withRouteEntryName($routeEntryName)
    {
        $this->data['RouteEntryName']             = $routeEntryName;
        $this->options['query']['RouteEntryName'] = $routeEntryName;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType']             = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $routeEntryType
     *
     * @return $this
     */
    public function withRouteEntryType($routeEntryType)
    {
        $this->data['RouteEntryType']             = $routeEntryType;
        $this->options['query']['RouteEntryType'] = $routeEntryType;

        return $this;
    }

    /**
     * @param string $ipVersion
     *
     * @return $this
     */
    public function withIpVersion($ipVersion)
    {
        $this->data['IpVersion']             = $ipVersion;
        $this->options['query']['IpVersion'] = $ipVersion;

        return $this;
    }

    /**
     * @param string $nextHopId
     *
     * @return $this
     */
    public function withNextHopId($nextHopId)
    {
        $this->data['NextHopId']             = $nextHopId;
        $this->options['query']['NextHopId'] = $nextHopId;

        return $this;
    }

    /**
     * @param string $nextHopType
     *
     * @return $this
     */
    public function withNextHopType($nextHopType)
    {
        $this->data['NextHopType']             = $nextHopType;
        $this->options['query']['NextHopType'] = $nextHopType;

        return $this;
    }

    /**
     * @param string $routeTableId
     *
     * @return $this
     */
    public function withRouteTableId($routeTableId)
    {
        $this->data['RouteTableId']             = $routeTableId;
        $this->options['query']['RouteTableId'] = $routeTableId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount']             = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $destinationCidrBlock
     *
     * @return $this
     */
    public function withDestinationCidrBlock($destinationCidrBlock)
    {
        $this->data['DestinationCidrBlock']             = $destinationCidrBlock;
        $this->options['query']['DestinationCidrBlock'] = $destinationCidrBlock;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount']             = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $routeEntryId
     *
     * @return $this
     */
    public function withRouteEntryId($routeEntryId)
    {
        $this->data['RouteEntryId']             = $routeEntryId;
        $this->options['query']['RouteEntryId'] = $routeEntryId;

        return $this;
    }
}
