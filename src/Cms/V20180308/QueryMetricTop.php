<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryMetricTop
 *
 * @method string getPeriod()
 * @method string getResourceOwnerId()
 * @method string getMetric()
 * @method string getLength()
 * @method string getProject()
 * @method string getEndTime()
 * @method string getOrderby()
 * @method string getExpress()
 * @method string getStartTime()
 * @method string getDimensions()
 * @method string getOrderDesc()
 */
class QueryMetricTop extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'QueryMetricTop';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withMetric() instead.
     *
     * @param string $metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        return $this->withMetric($metric);
    }

    /**
     * @param string $metric
     *
     * @return $this
     */
    public function withMetric($metric)
    {
        $this->data['Metric'] = $metric;
        $this->options['query']['Metric'] = $metric;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLength() instead.
     *
     * @param string $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        return $this->withLength($length);
    }

    /**
     * @param string $length
     *
     * @return $this
     */
    public function withLength($length)
    {
        $this->data['Length'] = $length;
        $this->options['query']['Length'] = $length;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withProject() instead.
     *
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        return $this->withProject($project);
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function withProject($project)
    {
        $this->data['Project'] = $project;
        $this->options['query']['Project'] = $project;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderby() instead.
     *
     * @param string $orderby
     *
     * @return $this
     */
    public function setOrderby($orderby)
    {
        return $this->withOrderby($orderby);
    }

    /**
     * @param string $orderby
     *
     * @return $this
     */
    public function withOrderby($orderby)
    {
        $this->data['Orderby'] = $orderby;
        $this->options['query']['Orderby'] = $orderby;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withExpress() instead.
     *
     * @param string $express
     *
     * @return $this
     */
    public function setExpress($express)
    {
        return $this->withExpress($express);
    }

    /**
     * @param string $express
     *
     * @return $this
     */
    public function withExpress($express)
    {
        $this->data['Express'] = $express;
        $this->options['query']['Express'] = $express;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDimensions() instead.
     *
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        return $this->withDimensions($dimensions);
    }

    /**
     * @param string $dimensions
     *
     * @return $this
     */
    public function withDimensions($dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        $this->options['query']['Dimensions'] = $dimensions;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOrderDesc() instead.
     *
     * @param string $orderDesc
     *
     * @return $this
     */
    public function setOrderDesc($orderDesc)
    {
        return $this->withOrderDesc($orderDesc);
    }

    /**
     * @param string $orderDesc
     *
     * @return $this
     */
    public function withOrderDesc($orderDesc)
    {
        $this->data['OrderDesc'] = $orderDesc;
        $this->options['query']['OrderDesc'] = $orderDesc;

        return $this;
    }
}
