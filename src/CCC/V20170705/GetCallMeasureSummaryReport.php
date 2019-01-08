<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetCallMeasureSummaryReport
 *
 * @method string getIntervalType()
 * @method string getMonth()
 * @method string getYear()
 * @method string getPageSize()
 * @method string getDay()
 * @method string getPageNumber()
 */
class GetCallMeasureSummaryReport extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'GetCallMeasureSummaryReport';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $intervalType
     *
     * @return $this
     */
    public function withIntervalType($intervalType)
    {
        $this->data['IntervalType'] = $intervalType;
        $this->options['query']['IntervalType'] = $intervalType;

        return $this;
    }

    /**
     * @param string $month
     *
     * @return $this
     */
    public function withMonth($month)
    {
        $this->data['Month'] = $month;
        $this->options['query']['Month'] = $month;

        return $this;
    }

    /**
     * @param string $year
     *
     * @return $this
     */
    public function withYear($year)
    {
        $this->data['Year'] = $year;
        $this->options['query']['Year'] = $year;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $day
     *
     * @return $this
     */
    public function withDay($day)
    {
        $this->data['Day'] = $day;
        $this->options['query']['Day'] = $day;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }
}
