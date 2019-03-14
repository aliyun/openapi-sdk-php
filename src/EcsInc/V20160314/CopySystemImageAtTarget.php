<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api CopySystemImageAtTarget
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
class CopySystemImageAtTarget extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
