<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Rpc;

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
class ARMSQueryDataSet extends Rpc
{
    public $product = 'ARMS';

    public $version = '2018-10-15';

    public $method = 'POST';

    /**
     * @param array $optionalDims
     *
     * @return $this
     */
    public function withOptionalDims(array $optionalDims)
    {
        $this->data['OptionalDims'] = $optionalDims;
        foreach ($optionalDims as $i => $iValue) {
            $this->options['query']['OptionalDims.' . ($i + 1) . '.Type'] = $optionalDims[$i]['Type'];
            $this->options['query']['OptionalDims.' . ($i + 1) . '.Value'] = $optionalDims[$i]['Value'];
            $this->options['query']['OptionalDims.' . ($i + 1) . '.Key'] = $optionalDims[$i]['Key'];
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
     * @param array $requiredDims
     *
     * @return $this
     */
    public function withRequiredDims(array $requiredDims)
    {
        $this->data['RequiredDims'] = $requiredDims;
        foreach ($requiredDims as $i => $iValue) {
            $this->options['query']['RequiredDims.' . ($i + 1) . '.Type'] = $requiredDims[$i]['Type'];
            $this->options['query']['RequiredDims.' . ($i + 1) . '.Value'] = $requiredDims[$i]['Value'];
            $this->options['query']['RequiredDims.' . ($i + 1) . '.Key'] = $requiredDims[$i]['Key'];
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
            $this->options['query']['Dimensions.' . ($i + 1) . '.Type'] = $dimensions[$i]['Type'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $dimensions[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $dimensions[$i]['Key'];
        }

        return $this;
    }
}
