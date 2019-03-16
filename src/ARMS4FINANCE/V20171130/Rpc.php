<?php

namespace AlibabaCloud\ARMS4FINANCE\V20171130;

use AlibabaCloud\Rpc;

class V20171130Rpc extends Rpc
{
    /**
     * @var string
     */
    public $product = 'ARMS4FINANCE';

    /**
     * @var string
     */
    public $version = '2017-11-30';

    /**
     * @var string
     */
    public $method = 'POST';
}

/**
 * @method string getWhereInKey()
 * @method $this withWhereInKey($value)
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getIsDrillDown()
 * @method $this withIsDrillDown($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method array getWhereInValues()
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getDimensions()
 */
class WhereInDimQuery extends V20171130Rpc
{

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
    public function withWhereInValues(array $value)
    {
        $this->data['WhereInValues'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['WhereInValues.' . ($i + 1)] = $iValue;
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
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}

/**
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method $this withIntervalInSec($value)
 * @method string getDateStr()
 * @method $this withDateStr($value)
 * @method string getIsDrillDown()
 * @method $this withIsDrillDown($value)
 * @method string getMinTime()
 * @method $this withMinTime($value)
 * @method string getDatasetId()
 * @method $this withDatasetId($value)
 * @method string getMaxTime()
 * @method $this withMaxTime($value)
 * @method array getDimensions()
 */
class ARMSQueryDataSet extends V20171130Rpc
{

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
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $value[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $value[$i]['Key'];
        }

        return $this;
    }
}
