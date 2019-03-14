<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api ModifyRouteEntry
 *
 * @method string getRouteEntryName()
 * @method string getRouteEntryId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyRouteEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

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
}
