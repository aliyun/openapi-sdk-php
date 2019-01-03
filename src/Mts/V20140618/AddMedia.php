<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddMedia
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOverrideParams()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getInputUnbind()
 * @method string getTags()
 * @method string getCoverURL()
 * @method string getCateId()
 * @method string getFileURL()
 * @method string getMediaWorkflowId()
 * @method string getMediaWorkflowUserData()
 */
class AddMedia extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Mts';

    /**
     * @var string
     */
    public $version = '2014-06-18';

    /**
     * @var string
     */
    public $action = 'AddMedia';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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
     * @deprecated deprecated since version 2.0, Use withOverrideParams() instead.
     *
     * @param string $overrideParams
     *
     * @return $this
     */
    public function setOverrideParams($overrideParams)
    {
        return $this->withOverrideParams($overrideParams);
    }

    /**
     * @param string $overrideParams
     *
     * @return $this
     */
    public function withOverrideParams($overrideParams)
    {
        $this->data['OverrideParams'] = $overrideParams;
        $this->options['query']['OverrideParams'] = $overrideParams;

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
     * @deprecated deprecated since version 2.0, Use withInputUnbind() instead.
     *
     * @param string $inputUnbind
     *
     * @return $this
     */
    public function setInputUnbind($inputUnbind)
    {
        return $this->withInputUnbind($inputUnbind);
    }

    /**
     * @param string $inputUnbind
     *
     * @return $this
     */
    public function withInputUnbind($inputUnbind)
    {
        $this->data['InputUnbind'] = $inputUnbind;
        $this->options['query']['InputUnbind'] = $inputUnbind;

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
     * @deprecated deprecated since version 2.0, Use withFileURL() instead.
     *
     * @param string $fileURL
     *
     * @return $this
     */
    public function setFileURL($fileURL)
    {
        return $this->withFileURL($fileURL);
    }

    /**
     * @param string $fileURL
     *
     * @return $this
     */
    public function withFileURL($fileURL)
    {
        $this->data['FileURL'] = $fileURL;
        $this->options['query']['FileURL'] = $fileURL;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMediaWorkflowId() instead.
     *
     * @param string $mediaWorkflowId
     *
     * @return $this
     */
    public function setMediaWorkflowId($mediaWorkflowId)
    {
        return $this->withMediaWorkflowId($mediaWorkflowId);
    }

    /**
     * @param string $mediaWorkflowId
     *
     * @return $this
     */
    public function withMediaWorkflowId($mediaWorkflowId)
    {
        $this->data['MediaWorkflowId'] = $mediaWorkflowId;
        $this->options['query']['MediaWorkflowId'] = $mediaWorkflowId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMediaWorkflowUserData() instead.
     *
     * @param string $mediaWorkflowUserData
     *
     * @return $this
     */
    public function setMediaWorkflowUserData($mediaWorkflowUserData)
    {
        return $this->withMediaWorkflowUserData($mediaWorkflowUserData);
    }

    /**
     * @param string $mediaWorkflowUserData
     *
     * @return $this
     */
    public function withMediaWorkflowUserData($mediaWorkflowUserData)
    {
        $this->data['MediaWorkflowUserData'] = $mediaWorkflowUserData;
        $this->options['query']['MediaWorkflowUserData'] = $mediaWorkflowUserData;

        return $this;
    }
}
