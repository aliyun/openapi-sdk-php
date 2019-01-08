<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteRouteEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getRouteEntryId()
 * @method string getDestinationCidrBlock()
 * @method string getOwnerAccount()
 * @method string getNextHopId()
 * @method string getOwnerId()
 * @method array getNextHopList()
 * @method string getRouteTableId()
 */
class DeleteRouteEntry extends RpcRequest
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
    public $action = 'DeleteRouteEntry';

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
     * @param array $nextHopList
     *
     * @return $this
     */
    public function withNextHopList(array $nextHopList)
    {
        $this->data['NextHopList'] = $nextHopList;
        foreach ($nextHopList as $i => $iValue) {
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
