<?php

namespace AlibabaCloud\ARMS4FINANCE\V20171130;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method WhereInDimQuery whereInDimQuery(array $options = [])
 * @method ARMSQueryDataSet aRMSQueryDataSet(array $options = [])
 */
class ARMS4FINANCEApiResolver
{
    use ApiResolverTrait;
}

class V20171130Rpc extends Rpc
{
    /** @var string */
    public $product = 'ARMS4FINANCE';

    /** @var string */
    public $version = '2017-11-30';

    /** @var string */
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
     * @param array $whereInValues
     *
     * @return $this
     */
    public function withWhereInValues(array $whereInValues)
    {
        $this->data['WhereInValues'] = $whereInValues;
        foreach ($whereInValues as $i => $iValue) {
            $this->options['query']['WhereInValues.' . ($i + 1)] = $iValue;
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
        foreach ($dimensions as $depth1 => $depth1Value) {
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
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
        foreach ($dimensions as $depth1 => $depth1Value) {
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['Dimensions.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}
