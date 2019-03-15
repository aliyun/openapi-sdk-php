<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Rpc;

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method array getFilters()
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getIintervalInSec()
 * @method $this withIintervalInSec($value)
 * @method array getMeasures()
 * @method string getMetric()
 * @method $this withMetric($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getDimensions()
 * @method string getOrder()
 * @method $this withOrder($value)
 */
class MetricQuery extends Rpc
{
    public $product = 'ARMS';

    public $version = '2018-10-15';

    public $method = 'POST';

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
}
