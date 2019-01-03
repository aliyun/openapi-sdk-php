<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CopySystemImageAtTarget
 *
 * @method string getImageCenterResourceId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getToImageName()
 * @method string getOwnerAccount()
 * @method string getToImageDesc()
 * @method array getTag()
 * @method string getOwnerId()
 * @method string getToRegionNo()
 * @method string getResourceTransitInBase64()
 */
class CopySystemImageAtTarget extends RpcRequest
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
    public $action = 'CopySystemImageAtTarget';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withImageCenterResourceId() instead.
     *
     * @param string $imageCenterResourceId
     *
     * @return $this
     */
    public function setImageCenterResourceId($imageCenterResourceId)
    {
        return $this->withImageCenterResourceId($imageCenterResourceId);
    }

    /**
     * @param string $imageCenterResourceId
     *
     * @return $this
     */
    public function withImageCenterResourceId($imageCenterResourceId)
    {
        $this->data['ImageCenterResourceId'] = $imageCenterResourceId;
        $this->options['query']['ImageCenterResourceId'] = $imageCenterResourceId;

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

    /**
     * @deprecated deprecated since version 2.0, Use withToRegionNo() instead.
     *
     * @param string $toRegionNo
     *
     * @return $this
     */
    public function setToRegionNo($toRegionNo)
    {
        return $this->withToRegionNo($toRegionNo);
    }

    /**
     * @param string $toRegionNo
     *
     * @return $this
     */
    public function withToRegionNo($toRegionNo)
    {
        $this->data['ToRegionNo'] = $toRegionNo;
        $this->options['query']['ToRegionNo'] = $toRegionNo;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceTransitInBase64() instead.
     *
     * @param string $resourceTransitInBase64
     *
     * @return $this
     */
    public function setResourceTransitInBase64($resourceTransitInBase64)
    {
        return $this->withResourceTransitInBase64($resourceTransitInBase64);
    }

    /**
     * @param string $resourceTransitInBase64
     *
     * @return $this
     */
    public function withResourceTransitInBase64($resourceTransitInBase64)
    {
        $this->data['ResourceTransitInBase64'] = $resourceTransitInBase64;
        $this->options['query']['ResourceTransitInBase64'] = $resourceTransitInBase64;

        return $this;
    }
}
