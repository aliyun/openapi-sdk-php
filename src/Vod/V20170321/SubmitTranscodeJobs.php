<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubmitTranscodeJobs
 *
 * @method string getResourceOwnerId()
 * @method string getTemplateGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getVideoId()
 * @method string getOverrideParams()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getEncryptConfig()
 * @method string getPipelineId()
 */
class SubmitTranscodeJobs extends RpcRequest
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
    public $action = 'SubmitTranscodeJobs';

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
     * @param string $priority
     *
     * @return $this
     */
    public function withPriority($priority)
    {
        $this->data['Priority'] = $priority;
        $this->options['query']['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $encryptConfig
     *
     * @return $this
     */
    public function withEncryptConfig($encryptConfig)
    {
        $this->data['EncryptConfig'] = $encryptConfig;
        $this->options['query']['EncryptConfig'] = $encryptConfig;

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
