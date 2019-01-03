<?php

namespace AlibabaCloud\ARMS\V20181015;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ARMSQueryDataSet
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
class ARMSQueryDataSet extends RpcRequest
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
    public $action = 'ARMSQueryDataSet';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDateStr() instead.
     *
     * @param string $dateStr
     *
     * @return $this
     */
    public function setDateStr($dateStr)
    {
        return $this->withDateStr($dateStr);
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
     * @deprecated deprecated since version 2.0, Use withMinTime() instead.
     *
     * @param string $minTime
     *
     * @return $this
     */
    public function setMinTime($minTime)
    {
        return $this->withMinTime($minTime);
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
     * @deprecated deprecated since version 2.0, Use withReduceTail() instead.
     *
     * @param string $reduceTail
     *
     * @return $this
     */
    public function setReduceTail($reduceTail)
    {
        return $this->withReduceTail($reduceTail);
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
     * @deprecated deprecated since version 2.0, Use withMaxTime() instead.
     *
     * @param string $maxTime
     *
     * @return $this
     */
    public function setMaxTime($maxTime)
    {
        return $this->withMaxTime($maxTime);
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
     * @deprecated deprecated since version 2.0, Use getOptionalDims() instead.
     *
     * @return array
     */
    public function getOptionalDimss()
    {
        return $this->getOptionalDims();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOptionalDims() instead.
     *
     * @param array $optionalDimss
     *
     * @return $this
     */
    public function setOptionalDimss(array $optionalDimss)
    {
        return $this->withOptionalDims($optionalDimss);
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
     * @deprecated deprecated since version 2.0, Use withIntervalInSec() instead.
     *
     * @param string $intervalInSec
     *
     * @return $this
     */
    public function setIntervalInSec($intervalInSec)
    {
        return $this->withIntervalInSec($intervalInSec);
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
     * @deprecated deprecated since version 2.0, Use withIsDrillDown() instead.
     *
     * @param string $isDrillDown
     *
     * @return $this
     */
    public function setIsDrillDown($isDrillDown)
    {
        return $this->withIsDrillDown($isDrillDown);
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
     * @deprecated deprecated since version 2.0, Use withHungryMode() instead.
     *
     * @param string $hungryMode
     *
     * @return $this
     */
    public function setHungryMode($hungryMode)
    {
        return $this->withHungryMode($hungryMode);
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
     * @deprecated deprecated since version 2.0, Use withOrderByKey() instead.
     *
     * @param string $orderByKey
     *
     * @return $this
     */
    public function setOrderByKey($orderByKey)
    {
        return $this->withOrderByKey($orderByKey);
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
     * @deprecated deprecated since version 2.0, Use getRequiredDims() instead.
     *
     * @return array
     */
    public function getRequiredDimss()
    {
        return $this->getRequiredDims();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRequiredDims() instead.
     *
     * @param array $requiredDimss
     *
     * @return $this
     */
    public function setRequiredDimss(array $requiredDimss)
    {
        return $this->withRequiredDims($requiredDimss);
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
     * @deprecated deprecated since version 2.0, Use withDatasetId() instead.
     *
     * @param string $datasetId
     *
     * @return $this
     */
    public function setDatasetId($datasetId)
    {
        return $this->withDatasetId($datasetId);
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
            $this->options['query']['Dimensions.' . ($i + 1) . '.Type'] = $dimensions[$i]['Type'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $dimensions[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $dimensions[$i]['Key'];
        }

        return $this;
    }
}
