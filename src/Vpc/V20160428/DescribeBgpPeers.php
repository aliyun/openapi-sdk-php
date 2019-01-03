<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeBgpPeers
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
class DescribeBgpPeers extends RpcRequest
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
    public $action = 'DescribeBgpPeers';

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
     * @deprecated deprecated since version 2.0, Use withBgpGroupId() instead.
     *
     * @param string $bgpGroupId
     *
     * @return $this
     */
    public function setBgpGroupId($bgpGroupId)
    {
        return $this->withBgpGroupId($bgpGroupId);
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
     * @deprecated deprecated since version 2.0, Use withBgpPeerId() instead.
     *
     * @param string $bgpPeerId
     *
     * @return $this
     */
    public function setBgpPeerId($bgpPeerId)
    {
        return $this->withBgpPeerId($bgpPeerId);
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
     * @deprecated deprecated since version 2.0, Use withIsDefault() instead.
     *
     * @param string $isDefault
     *
     * @return $this
     */
    public function setIsDefault($isDefault)
    {
        return $this->withIsDefault($isDefault);
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
}
