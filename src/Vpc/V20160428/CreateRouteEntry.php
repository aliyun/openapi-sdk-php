<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRouteEntry
 *
 * @method string getResourceOwnerId()
 * @method string getRouteEntryName()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getDestinationCidrBlock()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPrivateIpAddress()
 * @method string getNextHopId()
 * @method string getNextHopType()
 * @method array getNextHopList()
 * @method string getRouteTableId()
 */
class CreateRouteEntry extends RpcRequest
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
    public $action = 'CreateRouteEntry';

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
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
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
        $this->data['RouteEntryName'] = $routeEntryName;
        $this->options['query']['RouteEntryName'] = $routeEntryName;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
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
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress($privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        $this->options['query']['PrivateIpAddress'] = $privateIpAddress;

        return $this;
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
     * @param array $nextHopList
     *
     * @return $this
     */
    public function withNextHopList(array $nextHopList)
    {
        $this->data['NextHopList'] = $nextHopList;
        foreach ($nextHopList as $i => $iValue) {
            $this->options['query']['NextHopList.' . ($i + 1) . '.Weight'] = $nextHopList[$i]['Weight'];
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopId'] = $nextHopList[$i]['NextHopId'];
            $this->options['query']['NextHopList.' . ($i + 1) . '.NextHopType'] = $nextHopList[$i]['NextHopType'];
        }

        return $this;
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
}
