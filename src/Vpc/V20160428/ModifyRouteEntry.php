<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyRouteEntry
 *
 * @method string getRouteEntryName()
 * @method string getRouteEntryId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyRouteEntry extends RpcRequest
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
    public $action = 'ModifyRouteEntry';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
}
