<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Rpc;

class V20181015Rpc extends Rpc
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
    public $method = 'POST';
}

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
class MetricQuery extends V20181015Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withFilters(array $value)
    {
        $this->data['Filters'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Filters.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Filters.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMeasures(array $value)
    {
        $this->data['Measures'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDimensions(array $value)
    {
        $this->data['Dimensions'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Dimensions.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getReduceTail()
 * @method $this withReduceTail($value)
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getOptionalDims()
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getIsDrillDown()
 * @method $this withIsDrillDown($value)
 * @method string getHungryMode()
 * @method $this withHungryMode($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOrderByKey()
 * @method $this withOrderByKey($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method array getRequiredDims()
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method array getDimensions()
 */
class ARMSQueryDataSet extends V20181015Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOptionalDims(array $value)
    {
        $this->data['OptionalDims'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OptionalDims.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['OptionalDims.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['OptionalDims.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withMeasures(array $value)
    {
        $this->data['Measures'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Measures.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRequiredDims(array $value)
    {
        $this->data['RequiredDims'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RequiredDims.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['RequiredDims.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['RequiredDims.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withDimensions(array $value)
    {
        $this->data['Dimensions'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Dimensions.' . ($i + 1) . '.Type'] = $value[$i]['Type'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}
