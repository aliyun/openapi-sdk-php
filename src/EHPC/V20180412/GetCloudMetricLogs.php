<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api GetCloudMetricLogs
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
class GetCloudMetricLogs extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

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
