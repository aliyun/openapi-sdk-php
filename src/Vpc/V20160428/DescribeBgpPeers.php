<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api DescribeBgpPeers
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getRouterId()
 * @method string getOwnerAccount()
 * @method string getPageSize()
 * @method string getBgpGroupId()
 * @method string getBgpPeerId()
 * @method string getIsDefault()
 * @method string getOwnerId()
 * @method string getPageNumber()
 */
class DescribeBgpPeers extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

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
     * @param string $bgpGroupId
     *
     * @return $this
     */
    public function withBgpGroupId($bgpGroupId)
    {
        $this->data['BgpGroupId'] = $bgpGroupId;
        $this->options['query']['BgpGroupId'] = $bgpGroupId;

        return $this;
    }

    /**
     * @param string $bgpPeerId
     *
     * @return $this
     */
    public function withBgpPeerId($bgpPeerId)
    {
        $this->data['BgpPeerId'] = $bgpPeerId;
        $this->options['query']['BgpPeerId'] = $bgpPeerId;

        return $this;
    }

    /**
     * @param string $isDefault
     *
     * @return $this
     */
    public function withIsDefault($isDefault)
    {
        $this->data['IsDefault'] = $isDefault;
        $this->options['query']['IsDefault'] = $isDefault;

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
}
