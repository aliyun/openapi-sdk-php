<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getTopicFilter()
 * @method string getSourceData()
 * @method string getInstanceId()
 * @method string getTargetData()
 * @method string getTargetType()
 * @method string getSourceType()
 * @method string getTargetIotHubQos()
 */
class CreateEdgeInstanceMessageRoute extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'CreateEdgeInstanceMessageRoute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $topicFilter
     *
     * @return $this
     */
    public function withTopicFilter($topicFilter)
    {
        $this->data['TopicFilter']             = $topicFilter;
        $this->options['query']['TopicFilter'] = $topicFilter;

        return $this;
    }

    /**
     * @param string $sourceData
     *
     * @return $this
     */
    public function withSourceData($sourceData)
    {
        $this->data['SourceData']             = $sourceData;
        $this->options['query']['SourceData'] = $sourceData;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId']             = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $targetData
     *
     * @return $this
     */
    public function withTargetData($targetData)
    {
        $this->data['TargetData']             = $targetData;
        $this->options['query']['TargetData'] = $targetData;

        return $this;
    }

    /**
     * @param string $targetType
     *
     * @return $this
     */
    public function withTargetType($targetType)
    {
        $this->data['TargetType']             = $targetType;
        $this->options['query']['TargetType'] = $targetType;

        return $this;
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function withSourceType($sourceType)
    {
        $this->data['SourceType']             = $sourceType;
        $this->options['query']['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @param string $targetIotHubQos
     *
     * @return $this
     */
    public function withTargetIotHubQos($targetIotHubQos)
    {
        $this->data['TargetIotHubQos']             = $targetIotHubQos;
        $this->options['query']['TargetIotHubQos'] = $targetIotHubQos;

        return $this;
    }
}
