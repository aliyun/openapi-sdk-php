<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageType()
 * @method string getResourceOwnerAccount()
 * @method string getImageURLs()
 * @method string getVideoId()
 * @method string getOwnerId()
 * @method string getDeleteImageType()
 * @method string getImageIds()
 */
class DeleteImage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'DeleteImage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @deprecated deprecated since version 2.0, Use withImageType() instead.
     *
     * @param string $imageType
     *
     * @return $this
     */
    public function setImageType($imageType)
    {
        return $this->withImageType($imageType);
    }

    /**
     * @param string $imageType
     *
     * @return $this
     */
    public function withImageType($imageType)
    {
        $this->data['ImageType'] = $imageType;
        $this->options['query']['ImageType'] = $imageType;

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
     * @deprecated deprecated since version 2.0, Use withImageURLs() instead.
     *
     * @param string $imageURLs
     *
     * @return $this
     */
    public function setImageURLs($imageURLs)
    {
        return $this->withImageURLs($imageURLs);
    }

    /**
     * @param string $imageURLs
     *
     * @return $this
     */
    public function withImageURLs($imageURLs)
    {
        $this->data['ImageURLs'] = $imageURLs;
        $this->options['query']['ImageURLs'] = $imageURLs;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVideoId() instead.
     *
     * @param string $videoId
     *
     * @return $this
     */
    public function setVideoId($videoId)
    {
        return $this->withVideoId($videoId);
    }

    /**
     * @param string $videoId
     *
     * @return $this
     */
    public function withVideoId($videoId)
    {
        $this->data['VideoId'] = $videoId;
        $this->options['query']['VideoId'] = $videoId;

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
     * @deprecated deprecated since version 2.0, Use withDeleteImageType() instead.
     *
     * @param string $deleteImageType
     *
     * @return $this
     */
    public function setDeleteImageType($deleteImageType)
    {
        return $this->withDeleteImageType($deleteImageType);
    }

    /**
     * @param string $deleteImageType
     *
     * @return $this
     */
    public function withDeleteImageType($deleteImageType)
    {
        $this->data['DeleteImageType'] = $deleteImageType;
        $this->options['query']['DeleteImageType'] = $deleteImageType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageIds() instead.
     *
     * @param string $imageIds
     *
     * @return $this
     */
    public function setImageIds($imageIds)
    {
        return $this->withImageIds($imageIds);
    }

    /**
     * @param string $imageIds
     *
     * @return $this
     */
    public function withImageIds($imageIds)
    {
        $this->data['ImageIds'] = $imageIds;
        $this->options['query']['ImageIds'] = $imageIds;

        return $this;
    }
}
