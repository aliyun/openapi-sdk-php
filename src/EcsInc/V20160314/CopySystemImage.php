<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CopySystemImage
 *
 * @method string getTransitId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getToImageName()
 * @method string getOwnerAccount()
 * @method array getToRegionNoList()
 * @method string getToImageDesc()
 * @method array getTag()
 * @method string getOwnerId()
 */
class CopySystemImage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'CopySystemImage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withTransitId() instead.
     *
     * @param string $transitId
     *
     * @return $this
     */
    public function setTransitId($transitId)
    {
        return $this->withTransitId($transitId);
    }

    /**
     * @param string $transitId
     *
     * @return $this
     */
    public function withTransitId($transitId)
    {
        $this->data['TransitId'] = $transitId;
        $this->options['query']['TransitId'] = $transitId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withToImageName() instead.
     *
     * @param string $toImageName
     *
     * @return $this
     */
    public function setToImageName($toImageName)
    {
        return $this->withToImageName($toImageName);
    }

    /**
     * @param string $toImageName
     *
     * @return $this
     */
    public function withToImageName($toImageName)
    {
        $this->data['ToImageName'] = $toImageName;
        $this->options['query']['ToImageName'] = $toImageName;

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
     * @deprecated deprecated since version 2.0, Use getToRegionNoList() instead.
     *
     * @return array
     */
    public function getToRegionNoLists()
    {
        return $this->getToRegionNoList();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withToRegionNoList() instead.
     *
     * @param array $toRegionNoLists
     *
     * @return $this
     */
    public function setToRegionNoLists(array $toRegionNoLists)
    {
        return $this->withToRegionNoList($toRegionNoLists);
    }

    /**
     * @param array $toRegionNoList
     *
     * @return $this
     */
    public function withToRegionNoList(array $toRegionNoList)
    {
        $this->data['ToRegionNoList'] = $toRegionNoList;
        foreach ($toRegionNoList as $i => $iValue) {
            $this->options['query']['ToRegionNoList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withToImageDesc() instead.
     *
     * @param string $toImageDesc
     *
     * @return $this
     */
    public function setToImageDesc($toImageDesc)
    {
        return $this->withToImageDesc($toImageDesc);
    }

    /**
     * @param string $toImageDesc
     *
     * @return $this
     */
    public function withToImageDesc($toImageDesc)
    {
        $this->data['ToImageDesc'] = $toImageDesc;
        $this->options['query']['ToImageDesc'] = $toImageDesc;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getTag() instead.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        return $this->withTag($tags);
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

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
