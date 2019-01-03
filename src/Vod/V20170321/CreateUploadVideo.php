<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateUploadVideo
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTranscodeMode()
 * @method string getIP()
 * @method string getDescription()
 * @method string getFileSize()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getTags()
 * @method string getStorageLocation()
 * @method string getCoverURL()
 * @method string getUserData()
 * @method string getFileName()
 * @method string getTemplateGroupId()
 * @method string getCateId()
 */
class CreateUploadVideo extends RpcRequest
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
    public $action = 'CreateUploadVideo';

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
     * @deprecated deprecated since version 2.0, Use withTranscodeMode() instead.
     *
     * @param string $transcodeMode
     *
     * @return $this
     */
    public function setTranscodeMode($transcodeMode)
    {
        return $this->withTranscodeMode($transcodeMode);
    }

    /**
     * @param string $transcodeMode
     *
     * @return $this
     */
    public function withTranscodeMode($transcodeMode)
    {
        $this->data['TranscodeMode'] = $transcodeMode;
        $this->options['query']['TranscodeMode'] = $transcodeMode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIP() instead.
     *
     * @param string $iP
     *
     * @return $this
     */
    public function setIP($iP)
    {
        return $this->withIP($iP);
    }

    /**
     * @param string $iP
     *
     * @return $this
     */
    public function withIP($iP)
    {
        $this->data['IP'] = $iP;
        $this->options['query']['IP'] = $iP;

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
     * @deprecated deprecated since version 2.0, Use withFileSize() instead.
     *
     * @param string $fileSize
     *
     * @return $this
     */
    public function setFileSize($fileSize)
    {
        return $this->withFileSize($fileSize);
    }

    /**
     * @param string $fileSize
     *
     * @return $this
     */
    public function withFileSize($fileSize)
    {
        $this->data['FileSize'] = $fileSize;
        $this->options['query']['FileSize'] = $fileSize;

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

    /**
     * @deprecated deprecated since version 2.0, Use withCoverURL() instead.
     *
     * @param string $coverURL
     *
     * @return $this
     */
    public function setCoverURL($coverURL)
    {
        return $this->withCoverURL($coverURL);
    }

    /**
     * @param string $coverURL
     *
     * @return $this
     */
    public function withCoverURL($coverURL)
    {
        $this->data['CoverURL'] = $coverURL;
        $this->options['query']['CoverURL'] = $coverURL;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserData() instead.
     *
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        return $this->withUserData($userData);
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData'] = $userData;
        $this->options['query']['UserData'] = $userData;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFileName() instead.
     *
     * @param string $fileName
     *
     * @return $this
     */
    public function setFileName($fileName)
    {
        return $this->withFileName($fileName);
    }

    /**
     * @param string $fileName
     *
     * @return $this
     */
    public function withFileName($fileName)
    {
        $this->data['FileName'] = $fileName;
        $this->options['query']['FileName'] = $fileName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTemplateGroupId() instead.
     *
     * @param string $templateGroupId
     *
     * @return $this
     */
    public function setTemplateGroupId($templateGroupId)
    {
        return $this->withTemplateGroupId($templateGroupId);
    }

    /**
     * @param string $templateGroupId
     *
     * @return $this
     */
    public function withTemplateGroupId($templateGroupId)
    {
        $this->data['TemplateGroupId'] = $templateGroupId;
        $this->options['query']['TemplateGroupId'] = $templateGroupId;

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
}
