<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * Api AddMedia
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
class AddMedia extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';

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
