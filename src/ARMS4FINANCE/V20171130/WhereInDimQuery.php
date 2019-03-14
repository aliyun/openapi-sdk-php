<?php

namespace AlibabaCloud\ARMS4FINANCE\V20171130;

use AlibabaCloud\Rpc;

/**
 * Api WhereInDimQuery
 *
 * @method string getWhereInKey()
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method string getDateStr()
 * @method string getIsDrillDown()
 * @method string getMinTime()
 * @method string getDatasetId()
 * @method array getWhereInValues()
 * @method string getMaxTime()
 * @method array getDimensions()
 */
class WhereInDimQuery extends Rpc
{
    public $product = 'ARMS4FINANCE';

    public $version = '2017-11-30';

    public $method = 'POST';

    /**
     * @param string $whereInKey
     *
     * @return $this
     */
    public function withWhereInKey($whereInKey)
    {
        $this->data['WhereInKey'] = $whereInKey;
        $this->options['query']['WhereInKey'] = $whereInKey;

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
     * @param string $intervalInSec
     *
     * @return $this
     */
    public function withIntervalInSec($intervalInSec)
    {
        $this->data['IntervalInSec'] = $intervalInSec;
        $this->options['query']['IntervalInSec'] = $intervalInSec;

        return $this;
    }

    /**
     * @param string $dateStr
     *
     * @return $this
     */
    public function withDateStr($dateStr)
    {
        $this->data['DateStr'] = $dateStr;
        $this->options['query']['DateStr'] = $dateStr;

        return $this;
    }

    /**
     * @param string $isDrillDown
     *
     * @return $this
     */
    public function withIsDrillDown($isDrillDown)
    {
        $this->data['IsDrillDown'] = $isDrillDown;
        $this->options['query']['IsDrillDown'] = $isDrillDown;

        return $this;
    }

    /**
     * @param string $minTime
     *
     * @return $this
     */
    public function withMinTime($minTime)
    {
        $this->data['MinTime'] = $minTime;
        $this->options['query']['MinTime'] = $minTime;

        return $this;
    }

    /**
     * @param string $datasetId
     *
     * @return $this
     */
    public function withDatasetId($datasetId)
    {
        $this->data['DatasetId'] = $datasetId;
        $this->options['query']['DatasetId'] = $datasetId;

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
     * @param string $maxTime
     *
     * @return $this
     */
    public function withMaxTime($maxTime)
    {
        $this->data['MaxTime'] = $maxTime;
        $this->options['query']['MaxTime'] = $maxTime;

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
