<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitMediaCensorJob
 *
 * @method string getResourceOwnerId()
 * @method string getCoverImages()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getPipelineId()
 * @method string getVideoCensorConfig()
 * @method string getInput()
 * @method string getUserData()
 * @method string getBarrages()
 */
class SubmitMediaCensorJob extends RpcRequest
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
    public $action = 'SubmitMediaCensorJob';

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
     * @deprecated deprecated since version 2.0, Use withCoverImages() instead.
     *
     * @param string $coverImages
     *
     * @return $this
     */
    public function setCoverImages($coverImages)
    {
        return $this->withCoverImages($coverImages);
    }

    /**
     * @param string $coverImages
     *
     * @return $this
     */
    public function withCoverImages($coverImages)
    {
        $this->data['CoverImages'] = $coverImages;
        $this->options['query']['CoverImages'] = $coverImages;

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
     * @deprecated deprecated since version 2.0, Use withPipelineId() instead.
     *
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        return $this->withPipelineId($pipelineId);
    }

    /**
     * @param string $pipelineId
     *
     * @return $this
     */
    public function withPipelineId($pipelineId)
    {
        $this->data['PipelineId'] = $pipelineId;
        $this->options['query']['PipelineId'] = $pipelineId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVideoCensorConfig() instead.
     *
     * @param string $videoCensorConfig
     *
     * @return $this
     */
    public function setVideoCensorConfig($videoCensorConfig)
    {
        return $this->withVideoCensorConfig($videoCensorConfig);
    }

    /**
     * @param string $videoCensorConfig
     *
     * @return $this
     */
    public function withVideoCensorConfig($videoCensorConfig)
    {
        $this->data['VideoCensorConfig'] = $videoCensorConfig;
        $this->options['query']['VideoCensorConfig'] = $videoCensorConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInput() instead.
     *
     * @param string $input
     *
     * @return $this
     */
    public function setInput($input)
    {
        return $this->withInput($input);
    }

    /**
     * @param string $input
     *
     * @return $this
     */
    public function withInput($input)
    {
        $this->data['Input'] = $input;
        $this->options['query']['Input'] = $input;

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
     * @deprecated deprecated since version 2.0, Use withBarrages() instead.
     *
     * @param string $barrages
     *
     * @return $this
     */
    public function setBarrages($barrages)
    {
        return $this->withBarrages($barrages);
    }

    /**
     * @param string $barrages
     *
     * @return $this
     */
    public function withBarrages($barrages)
    {
        $this->data['Barrages'] = $barrages;
        $this->options['query']['Barrages'] = $barrages;

        return $this;
    }
}
