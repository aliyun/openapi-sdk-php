<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateEdgeInstanceMessageRoute
 *
 * @method string getTopicFilter()
 * @method string getSourceData()
 * @method string getInstanceId()
 * @method string getRouteId()
 * @method string getTargetData()
 * @method string getTargetType()
 * @method string getSourceType()
 * @method string getTargetIotHubQos()
 */
class UpdateEdgeInstanceMessageRoute extends RpcRequest
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
    public $action = 'UpdateEdgeInstanceMessageRoute';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTopicFilter() instead.
     *
     * @param string $topicFilter
     *
     * @return $this
     */
    public function setTopicFilter($topicFilter)
    {
        return $this->withTopicFilter($topicFilter);
    }

    /**
     * @param string $topicFilter
     *
     * @return $this
     */
    public function withTopicFilter($topicFilter)
    {
        $this->data['TopicFilter'] = $topicFilter;
        $this->options['query']['TopicFilter'] = $topicFilter;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceData() instead.
     *
     * @param string $sourceData
     *
     * @return $this
     */
    public function setSourceData($sourceData)
    {
        return $this->withSourceData($sourceData);
    }

    /**
     * @param string $sourceData
     *
     * @return $this
     */
    public function withSourceData($sourceData)
    {
        $this->data['SourceData'] = $sourceData;
        $this->options['query']['SourceData'] = $sourceData;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRouteId() instead.
     *
     * @param string $routeId
     *
     * @return $this
     */
    public function setRouteId($routeId)
    {
        return $this->withRouteId($routeId);
    }

    /**
     * @param string $routeId
     *
     * @return $this
     */
    public function withRouteId($routeId)
    {
        $this->data['RouteId'] = $routeId;
        $this->options['query']['RouteId'] = $routeId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetData() instead.
     *
     * @param string $targetData
     *
     * @return $this
     */
    public function setTargetData($targetData)
    {
        return $this->withTargetData($targetData);
    }

    /**
     * @param string $targetData
     *
     * @return $this
     */
    public function withTargetData($targetData)
    {
        $this->data['TargetData'] = $targetData;
        $this->options['query']['TargetData'] = $targetData;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetType() instead.
     *
     * @param string $targetType
     *
     * @return $this
     */
    public function setTargetType($targetType)
    {
        return $this->withTargetType($targetType);
    }

    /**
     * @param string $targetType
     *
     * @return $this
     */
    public function withTargetType($targetType)
    {
        $this->data['TargetType'] = $targetType;
        $this->options['query']['TargetType'] = $targetType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceType() instead.
     *
     * @param string $sourceType
     *
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        return $this->withSourceType($sourceType);
    }

    /**
     * @param string $sourceType
     *
     * @return $this
     */
    public function withSourceType($sourceType)
    {
        $this->data['SourceType'] = $sourceType;
        $this->options['query']['SourceType'] = $sourceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTargetIotHubQos() instead.
     *
     * @param string $targetIotHubQos
     *
     * @return $this
     */
    public function setTargetIotHubQos($targetIotHubQos)
    {
        return $this->withTargetIotHubQos($targetIotHubQos);
    }

    /**
     * @param string $targetIotHubQos
     *
     * @return $this
     */
    public function withTargetIotHubQos($targetIotHubQos)
    {
        $this->data['TargetIotHubQos'] = $targetIotHubQos;
        $this->options['query']['TargetIotHubQos'] = $targetIotHubQos;

        return $this;
    }
}
