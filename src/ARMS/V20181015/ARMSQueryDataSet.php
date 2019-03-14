<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Rpc;

/**
 * Api ARMSQueryDataSet
 *
 * @method string getDateStr()
 * @method string getMinTime()
 * @method string getReduceTail()
 * @method string getMaxTime()
 * @method array getOptionalDims()
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method string getIsDrillDown()
 * @method string getHungryMode()
 * @method string getSecurityToken()
 * @method string getOrderByKey()
 * @method string getLimit()
 * @method array getRequiredDims()
 * @method string getDatasetId()
 * @method array getDimensions()
 */
class ARMSQueryDataSet extends Rpc
{
    public $product = 'ARMS';

    public $version = '2018-10-15';

    public $method = 'POST';

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
     * @param string $reduceTail
     *
     * @return $this
     */
    public function withReduceTail($reduceTail)
    {
        $this->data['ReduceTail'] = $reduceTail;
        $this->options['query']['ReduceTail'] = $reduceTail;

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
     * @param string $hungryMode
     *
     * @return $this
     */
    public function withHungryMode($hungryMode)
    {
        $this->data['HungryMode'] = $hungryMode;
        $this->options['query']['HungryMode'] = $hungryMode;

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
     * @param string $orderByKey
     *
     * @return $this
     */
    public function withOrderByKey($orderByKey)
    {
        $this->data['OrderByKey'] = $orderByKey;
        $this->options['query']['OrderByKey'] = $orderByKey;

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
