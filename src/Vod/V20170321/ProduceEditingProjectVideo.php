<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ProduceEditingProjectVideo
 *
 * @method string getResourceOwnerId()
 * @method string getMediaMetadata()
 * @method string getResourceOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getTitle()
 * @method string getCoverURL()
 * @method string getUserData()
 * @method string getTimeline()
 * @method string getProduceConfig()
 * @method string getProjectId()
 */
class ProduceEditingProjectVideo extends RpcRequest
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
    public $action = 'ProduceEditingProjectVideo';

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
     * @deprecated deprecated since version 2.0, Use withMediaMetadata() instead.
     *
     * @param string $mediaMetadata
     *
     * @return $this
     */
    public function setMediaMetadata($mediaMetadata)
    {
        return $this->withMediaMetadata($mediaMetadata);
    }

    /**
     * @param string $mediaMetadata
     *
     * @return $this
     */
    public function withMediaMetadata($mediaMetadata)
    {
        $this->data['MediaMetadata'] = $mediaMetadata;
        $this->options['query']['MediaMetadata'] = $mediaMetadata;

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
     * @deprecated deprecated since version 2.0, Use withTimeline() instead.
     *
     * @param string $timeline
     *
     * @return $this
     */
    public function setTimeline($timeline)
    {
        return $this->withTimeline($timeline);
    }

    /**
     * @param string $timeline
     *
     * @return $this
     */
    public function withTimeline($timeline)
    {
        $this->data['Timeline'] = $timeline;
        $this->options['query']['Timeline'] = $timeline;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProduceConfig() instead.
     *
     * @param string $produceConfig
     *
     * @return $this
     */
    public function setProduceConfig($produceConfig)
    {
        return $this->withProduceConfig($produceConfig);
    }

    /**
     * @param string $produceConfig
     *
     * @return $this
     */
    public function withProduceConfig($produceConfig)
    {
        $this->data['ProduceConfig'] = $produceConfig;
        $this->options['query']['ProduceConfig'] = $produceConfig;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProjectId() instead.
     *
     * @param string $projectId
     *
     * @return $this
     */
    public function setProjectId($projectId)
    {
        return $this->withProjectId($projectId);
    }

    /**
     * @param string $projectId
     *
     * @return $this
     */
    public function withProjectId($projectId)
    {
        $this->data['ProjectId'] = $projectId;
        $this->options['query']['ProjectId'] = $projectId;

        return $this;
    }
}
