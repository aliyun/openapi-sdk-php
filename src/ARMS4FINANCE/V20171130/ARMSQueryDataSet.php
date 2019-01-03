<?php

namespace AlibabaCloud\ARMS4FINANCE\V20171130;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ARMSQueryDataSet
 *
 * @method array getMeasures()
 * @method string getIntervalInSec()
 * @method string getDateStr()
 * @method string getIsDrillDown()
 * @method string getMinTime()
 * @method string getDatasetId()
 * @method string getMaxTime()
 * @method array getDimensions()
 */
class ARMSQueryDataSet extends RpcRequest
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
    public $action = 'ARMSQueryDataSet';

    /**
     * @var string
     */
    public $method = 'POST';

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
            $this->options['query']['Dimensions.' . ($i + 1) . '.Value'] = $dimensions[$i]['Value'];
            $this->options['query']['Dimensions.' . ($i + 1) . '.Key'] = $dimensions[$i]['Key'];
        }

        return $this;
    }
}
