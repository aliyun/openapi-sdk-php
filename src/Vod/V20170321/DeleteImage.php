<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api DeleteImage
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
class DeleteImage extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

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
