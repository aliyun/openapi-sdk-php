<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUploadImage
 *
 * @method string getResourceOwnerId()
 * @method string getImageType()
 * @method string getOriginalFileName()
 * @method string getResourceOwnerAccount()
 * @method string getImageExt()
 * @method string getCateId()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getTags()
 * @method string getStorageLocation()
 */
class CreateUploadImage extends RpcRequest
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
    public $action = 'CreateUploadImage';

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
     * @deprecated deprecated since version 2.0, Use withOriginalFileName() instead.
     *
     * @param string $originalFileName
     *
     * @return $this
     */
    public function setOriginalFileName($originalFileName)
    {
        return $this->withOriginalFileName($originalFileName);
    }

    /**
     * @param string $originalFileName
     *
     * @return $this
     */
    public function withOriginalFileName($originalFileName)
    {
        $this->data['OriginalFileName'] = $originalFileName;
        $this->options['query']['OriginalFileName'] = $originalFileName;

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
     * @deprecated deprecated since version 2.0, Use withImageExt() instead.
     *
     * @param string $imageExt
     *
     * @return $this
     */
    public function setImageExt($imageExt)
    {
        return $this->withImageExt($imageExt);
    }

    /**
     * @param string $imageExt
     *
     * @return $this
     */
    public function withImageExt($imageExt)
    {
        $this->data['ImageExt'] = $imageExt;
        $this->options['query']['ImageExt'] = $imageExt;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCateId() instead.
     *
     * @param string $cateId
     *
     * @return $this
     */
    public function setCateId($cateId)
    {
        return $this->withCateId($cateId);
    }

    /**
     * @param string $cateId
     *
     * @return $this
     */
    public function withCateId($cateId)
    {
        $this->data['CateId'] = $cateId;
        $this->options['query']['CateId'] = $cateId;

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
     * @deprecated deprecated since version 2.0, Use withTitle() instead.
     *
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        return $this->withTitle($title);
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function withTitle($title)
    {
        $this->data['Title'] = $title;
        $this->options['query']['Title'] = $title;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTags() instead.
     *
     * @param string $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        return $this->withTags($tags);
    }

    /**
     * @param string $tags
     *
     * @return $this
     */
    public function withTags($tags)
    {
        $this->data['Tags'] = $tags;
        $this->options['query']['Tags'] = $tags;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStorageLocation() instead.
     *
     * @param string $storageLocation
     *
     * @return $this
     */
    public function setStorageLocation($storageLocation)
    {
        return $this->withStorageLocation($storageLocation);
    }

    /**
     * @param string $storageLocation
     *
     * @return $this
     */
    public function withStorageLocation($storageLocation)
    {
        $this->data['StorageLocation'] = $storageLocation;
        $this->options['query']['StorageLocation'] = $storageLocation;

        return $this;
    }
}
