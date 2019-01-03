<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MetricQuery
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
class MetricQuery extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'ARMS';

    /**
     * @var string
     */
    public $version = '2018-10-15';

    /**
     * @var string
     */
    public $action = 'MetricQuery';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withOrderBy() instead.
     *
     * @param string $orderBy
     *
     * @return $this
     */
    public function setOrderBy($orderBy)
    {
        return $this->withOrderBy($orderBy);
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
     * @deprecated deprecated since version 2.0, Use getFilters() instead.
     *
     * @return array
     */
    public function getFilterss()
    {
        return $this->getFilters();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFilters() instead.
     *
     * @param array $filterss
     *
     * @return $this
     */
    public function setFilterss(array $filterss)
    {
        return $this->withFilters($filterss);
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
     * @deprecated deprecated since version 2.0, Use withIintervalInSec() instead.
     *
     * @param string $iintervalInSec
     *
     * @return $this
     */
    public function setIintervalInSec($iintervalInSec)
    {
        return $this->withIintervalInSec($iintervalInSec);
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
     * @deprecated deprecated since version 2.0, Use getMeasures() instead.
     *
     * @return array
     */
    public function getMeasuress()
    {
        return $this->getMeasures();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMeasures() instead.
     *
     * @param array $measuress
     *
     * @return $this
     */
    public function setMeasuress(array $measuress)
    {
        return $this->withMeasures($measuress);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
     * @deprecated deprecated since version 2.0, Use withLimit() instead.
     *
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        return $this->withLimit($limit);
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
     * @deprecated deprecated since version 2.0, Use getDimensions() instead.
     *
     * @return array
     */
    public function getDimensionss()
    {
        return $this->getDimensions();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDimensions() instead.
     *
     * @param array $dimensionss
     *
     * @return $this
     */
    public function setDimensionss(array $dimensionss)
    {
        return $this->withDimensions($dimensionss);
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
     * @deprecated deprecated since version 2.0, Use withOrder() instead.
     *
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        return $this->withOrder($order);
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
