<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeRouteTables
 *
 * @method string getResourceOwnerId()
 * @method string getVRouterId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getRouterType()
 * @method string getRouteTableName()
 * @method string getRouterId()
 * @method string getPageSize()
 * @method string getRouteTableId()
 */
class DescribeRouteTables extends RpcRequest
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
    public $action = 'DescribeRouteTables';

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
     * @deprecated deprecated since version 2.0, Use withVRouterId() instead.
     *
     * @param string $vRouterId
     *
     * @return $this
     */
    public function setVRouterId($vRouterId)
    {
        return $this->withVRouterId($vRouterId);
    }

    /**
     * @param string $vRouterId
     *
     * @return $this
     */
    public function withVRouterId($vRouterId)
    {
        $this->data['VRouterId'] = $vRouterId;
        $this->options['query']['VRouterId'] = $vRouterId;

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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRouterType() instead.
     *
     * @param string $routerType
     *
     * @return $this
     */
    public function setRouterType($routerType)
    {
        return $this->withRouterType($routerType);
    }

    /**
     * @param string $routerType
     *
     * @return $this
     */
    public function withRouterType($routerType)
    {
        $this->data['RouterType'] = $routerType;
        $this->options['query']['RouterType'] = $routerType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRouteTableName() instead.
     *
     * @param string $routeTableName
     *
     * @return $this
     */
    public function setRouteTableName($routeTableName)
    {
        return $this->withRouteTableName($routeTableName);
    }

    /**
     * @param string $routeTableName
     *
     * @return $this
     */
    public function withRouteTableName($routeTableName)
    {
        $this->data['RouteTableName'] = $routeTableName;
        $this->options['query']['RouteTableName'] = $routeTableName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRouterId() instead.
     *
     * @param string $routerId
     *
     * @return $this
     */
    public function setRouterId($routerId)
    {
        return $this->withRouterId($routerId);
    }

    /**
     * @param string $routerId
     *
     * @return $this
     */
    public function withRouterId($routerId)
    {
        $this->data['RouterId'] = $routerId;
        $this->options['query']['RouterId'] = $routerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
}
