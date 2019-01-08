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
