<?php

namespace AlibabaCloud\Imm\V20170906;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getChain()
 * @method string getSrcUris()
 * @method string getNotifyTopicName()
 * @method string getNotifyEndpoint()
 * @method string getProject()
 * @method string getSetId()
 * @method string getForce()
 */
class CreateIndexFaceJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'imm';

    /**
     * @var string
     */
    public $version = '2017-09-06';

    /**
     * @var string
     */
    public $action = 'CreateIndexFaceJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'imm';

    /**
     * @param string $chain
     *
     * @return $this
     */
    public function withChain($chain)
    {
        $this->data['Chain']             = $chain;
        $this->options['query']['Chain'] = $chain;

        return $this;
    }

    /**
     * @param string $srcUris
     *
     * @return $this
     */
    public function withSrcUris($srcUris)
    {
        $this->data['SrcUris']             = $srcUris;
        $this->options['query']['SrcUris'] = $srcUris;

        return $this;
    }

    /**
     * @param string $notifyTopicName
     *
     * @return $this
     */
    public function withNotifyTopicName($notifyTopicName)
    {
        $this->data['NotifyTopicName']             = $notifyTopicName;
        $this->options['query']['NotifyTopicName'] = $notifyTopicName;

        return $this;
    }

    /**
     * @param string $notifyEndpoint
     *
     * @return $this
     */
    public function withNotifyEndpoint($notifyEndpoint)
    {
        $this->data['NotifyEndpoint']             = $notifyEndpoint;
        $this->options['query']['NotifyEndpoint'] = $notifyEndpoint;

        return $this;
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project']             = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @param string $setId
     *
     * @return $this
     */
    public function withSetId($setId)
    {
        $this->data['SetId']             = $setId;
        $this->options['query']['SetId'] = $setId;

        return $this;
    }

    /**
     * @param string $force
     *
     * @return $this
     */
    public function withForce($force)
    {
        $this->data['Force']             = $force;
        $this->options['query']['Force'] = $force;

        return $this;
    }
}
