<?php

namespace AlibabaCloud\ARMS4FINANCE\V20171130;

use AlibabaCloud\Rpc;

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
class ARMSQueryDataSet extends Rpc
{
    public $product = 'ARMS4FINANCE';

    public $version = '2017-11-30';

    public $method = 'POST';

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
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $dimensions[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $dimensions[$i]['Key'];
        }

        return $this;
    }
}
