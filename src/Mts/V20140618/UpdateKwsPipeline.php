<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateKwsPipeline
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getName()
 * @method string getState()
 * @method string getNotifyConfig()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getPipelineId()
 */
class UpdateKwsPipeline extends RpcRequest
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
    public $action = 'UpdateKwsPipeline';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function withState($state)
    {
        $this->data['State'] = $state;
        $this->options['query']['State'] = $state;

        return $this;
    }

    /**
     * @param string $notifyConfig
     *
     * @return $this
     */
    public function withNotifyConfig($notifyConfig)
    {
        $this->data['NotifyConfig'] = $notifyConfig;
        $this->options['query']['NotifyConfig'] = $notifyConfig;

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
