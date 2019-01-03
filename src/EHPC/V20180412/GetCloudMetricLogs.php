<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetCloudMetricLogs
 *
 * @method string getAggregationType()
 * @method string getFilter()
 * @method string getMetricCategories()
 * @method string getMetricScope()
 * @method string getFrom()
 * @method string getClusterId()
 * @method string getTo()
 * @method string getAggregationInterval()
 * @method string getReverse()
 */
class GetCloudMetricLogs extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'GetCloudMetricLogs';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withAggregationType() instead.
     *
     * @param string $aggregationType
     *
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        return $this->withAggregationType($aggregationType);
    }

    /**
     * @param string $aggregationType
     *
     * @return $this
     */
    public function withAggregationType($aggregationType)
    {
        $this->data['AggregationType'] = $aggregationType;
        $this->options['query']['AggregationType'] = $aggregationType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilter() instead.
     *
     * @param string $filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        return $this->withFilter($filter);
    }

    /**
     * @param string $filter
     *
     * @return $this
     */
    public function withFilter($filter)
    {
        $this->data['Filter'] = $filter;
        $this->options['query']['Filter'] = $filter;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMetricCategories() instead.
     *
     * @param string $metricCategories
     *
     * @return $this
     */
    public function setMetricCategories($metricCategories)
    {
        return $this->withMetricCategories($metricCategories);
    }

    /**
     * @param string $metricCategories
     *
     * @return $this
     */
    public function withMetricCategories($metricCategories)
    {
        $this->data['MetricCategories'] = $metricCategories;
        $this->options['query']['MetricCategories'] = $metricCategories;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMetricScope() instead.
     *
     * @param string $metricScope
     *
     * @return $this
     */
    public function setMetricScope($metricScope)
    {
        return $this->withMetricScope($metricScope);
    }

    /**
     * @param string $metricScope
     *
     * @return $this
     */
    public function withMetricScope($metricScope)
    {
        $this->data['MetricScope'] = $metricScope;
        $this->options['query']['MetricScope'] = $metricScope;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFrom() instead.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        return $this->withFrom($from);
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTo() instead.
     *
     * @param string $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        return $this->withTo($to);
    }

    /**
     * @param string $to
     *
     * @return $this
     */
    public function withTo($to)
    {
        $this->data['To'] = $to;
        $this->options['query']['To'] = $to;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAggregationInterval() instead.
     *
     * @param string $aggregationInterval
     *
     * @return $this
     */
    public function setAggregationInterval($aggregationInterval)
    {
        return $this->withAggregationInterval($aggregationInterval);
    }

    /**
     * @param string $aggregationInterval
     *
     * @return $this
     */
    public function withAggregationInterval($aggregationInterval)
    {
        $this->data['AggregationInterval'] = $aggregationInterval;
        $this->options['query']['AggregationInterval'] = $aggregationInterval;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withReverse() instead.
     *
     * @param string $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        return $this->withReverse($reverse);
    }

    /**
     * @param string $reverse
     *
     * @return $this
     */
    public function withReverse($reverse)
    {
        $this->data['Reverse'] = $reverse;
        $this->options['query']['Reverse'] = $reverse;

        return $this;
    }
}
