<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Rpc;

/**
 * Api MetricQuery
 *
 * @method string getEndTime()
 * @method string getOrderBy()
 * @method array getFilters()
 * @method string getStartTime()
 * @method string getIintervalInSec()
 * @method array getMeasures()
 * @method string getMetric()
 * @method string getSecurityToken()
 * @method string getLimit()
 * @method array getDimensions()
 * @method string getOrder()
 */
class MetricQuery extends Rpc
{
    public $product = 'ARMS';

    public $version = '2018-10-15';

    public $method = 'POST';

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
     * @param string $orderBy
     *
     * @return $this
     */
    public function withOrderBy($orderBy)
    {
        $this->data['OrderBy'] = $orderBy;
        $this->options['query']['OrderBy'] = $orderBy;

        return $this;
    }

    /**
     * @param array $filters
     *
     * @return $this
     */
    public function withFilters(array $filters)
    {
        $this->data['Filters'] = $filters;
        foreach ($filters as $i => $iValue) {
            $this->options['query']['Filters.' . ($i + 1) . '.Value'] = $filters[$i]['Value'];
            $this->options['query']['Filters.' . ($i + 1) . '.Key'] = $filters[$i]['Key'];
        }

        return $this;
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
     * @param string $iintervalInSec
     *
     * @return $this
     */
    public function withIintervalInSec($iintervalInSec)
    {
        $this->data['IintervalInSec'] = $iintervalInSec;
        $this->options['query']['IintervalInSec'] = $iintervalInSec;

        return $this;
    }

    /**
     * @param array $measures
     *
     * @return $this
     */
    public function withMeasures(array $measures)
    {
        $this->data['Measures'] = $measures;
        foreach ($measures as $i => $iValue) {
            $this->options['query']['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
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
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

        return $this;
    }

    /**
     * @param array $dimensions
     *
     * @return $this
     */
    public function withDimensions(array $dimensions)
    {
        $this->data['Dimensions'] = $dimensions;
        foreach ($dimensions as $i => $iValue) {
            $this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $order
     *
     * @return $this
     */
    public function withOrder($order)
    {
        $this->data['Order'] = $order;
        $this->options['query']['Order'] = $order;

        return $this;
    }
}
