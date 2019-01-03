<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UploadSystemImageAtOrigin
 *
 * @method string getMetaData()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOsTypeId()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getFromRegionNo()
 * @method string getOwnerId()
 * @method string getImageName()
 * @method string getImageUrl()
 * @method array getTag()
 * @method string getMD5()
 */
class UploadSystemImageAtOrigin extends RpcRequest
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
    public $action = 'UploadSystemImageAtOrigin';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withMetaData() instead.
     *
     * @param string $metaData
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        return $this->withMetaData($metaData);
    }

    /**
     * @param string $metaData
     *
     * @return $this
     */
    public function withMetaData($metaData)
    {
        $this->data['MetaData'] = $metaData;
        $this->options['query']['MetaData'] = $metaData;

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
     * @deprecated deprecated since version 2.0, Use withOsTypeId() instead.
     *
     * @param string $osTypeId
     *
     * @return $this
     */
    public function setOsTypeId($osTypeId)
    {
        return $this->withOsTypeId($osTypeId);
    }

    /**
     * @param string $osTypeId
     *
     * @return $this
     */
    public function withOsTypeId($osTypeId)
    {
        $this->data['OsTypeId'] = $osTypeId;
        $this->options['query']['OsTypeId'] = $osTypeId;

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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFromRegionNo() instead.
     *
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function setFromRegionNo($fromRegionNo)
    {
        return $this->withFromRegionNo($fromRegionNo);
    }

    /**
     * @param string $fromRegionNo
     *
     * @return $this
     */
    public function withFromRegionNo($fromRegionNo)
    {
        $this->data['FromRegionNo'] = $fromRegionNo;
        $this->options['query']['FromRegionNo'] = $fromRegionNo;

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
     * @deprecated deprecated since version 2.0, Use withImageName() instead.
     *
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        return $this->withImageName($imageName);
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function withImageName($imageName)
    {
        $this->data['ImageName'] = $imageName;
        $this->options['query']['ImageName'] = $imageName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageUrl() instead.
     *
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        return $this->withImageUrl($imageUrl);
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function withImageUrl($imageUrl)
    {
        $this->data['ImageUrl'] = $imageUrl;
        $this->options['query']['ImageUrl'] = $imageUrl;

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
     * @deprecated deprecated since version 2.0, Use withMD5() instead.
     *
     * @param string $mD5
     *
     * @return $this
     */
    public function setMD5($mD5)
    {
        return $this->withMD5($mD5);
    }

    /**
     * @param string $mD5
     *
     * @return $this
     */
    public function withMD5($mD5)
    {
        $this->data['MD5'] = $mD5;
        $this->options['query']['MD5'] = $mD5;

        return $this;
    }
}
