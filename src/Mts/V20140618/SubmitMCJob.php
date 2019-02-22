<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitMCJob
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getImages()
 * @method string getTexts()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getVideo()
 * @method string getOwnerId()
 * @method string getCensorConfig()
 * @method string getPipelineId()
 */
class SubmitMCJob extends RpcRequest
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
    public $action = 'SubmitMCJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'mts';

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
     * @param string $images
     *
     * @return $this
     */
    public function withImages($images)
    {
        $this->data['Images'] = $images;
        $this->options['query']['Images'] = $images;

        return $this;
    }

    /**
     * @param string $texts
     *
     * @return $this
     */
    public function withTexts($texts)
    {
        $this->data['Texts'] = $texts;
        $this->options['query']['Texts'] = $texts;

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
     * @param string $video
     *
     * @return $this
     */
    public function withVideo($video)
    {
        $this->data['Video'] = $video;
        $this->options['query']['Video'] = $video;

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
     * @param string $censorConfig
     *
     * @return $this
     */
    public function withCensorConfig($censorConfig)
    {
        $this->data['CensorConfig'] = $censorConfig;
        $this->options['query']['CensorConfig'] = $censorConfig;

        return $this;
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
}
