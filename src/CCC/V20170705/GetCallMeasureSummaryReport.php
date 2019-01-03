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
     * @deprecated deprecated since version 2.0, Use withIntervalType() instead.
     *
     * @param string $intervalType
     *
     * @return $this
     */
    public function setIntervalType($intervalType)
    {
        return $this->withIntervalType($intervalType);
    }

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
     * @deprecated deprecated since version 2.0, Use withMonth() instead.
     *
     * @param string $month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        return $this->withMonth($month);
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
     * @deprecated deprecated since version 2.0, Use withYear() instead.
     *
     * @param string $year
     *
     * @return $this
     */
    public function setYear($year)
    {
        return $this->withYear($year);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withDay() instead.
     *
     * @param string $day
     *
     * @return $this
     */
    public function setDay($day)
    {
        return $this->withDay($day);
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
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
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
