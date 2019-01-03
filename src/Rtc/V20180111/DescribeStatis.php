<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeStatis
 *
 * @method string getSortType()
 * @method string getStartTime()
 * @method string getDataType()
 * @method string getServiceArea()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getInterval()
 */
class DescribeStatis extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'rtc';

    /**
     * @var string
     */
    public $version = '2018-01-11';

    /**
     * @var string
     */
    public $action = 'DescribeStatis';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rtc';

    /**
     * @deprecated deprecated since version 2.0, Use withSortType() instead.
     *
     * @param string $sortType
     *
     * @return $this
     */
    public function setSortType($sortType)
    {
        return $this->withSortType($sortType);
    }

    /**
     * @param string $sortType
     *
     * @return $this
     */
    public function withSortType($sortType)
    {
        $this->data['SortType'] = $sortType;
        $this->options['query']['SortType'] = $sortType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDataType() instead.
     *
     * @param string $dataType
     *
     * @return $this
     */
    public function setDataType($dataType)
    {
        return $this->withDataType($dataType);
    }

    /**
     * @param string $dataType
     *
     * @return $this
     */
    public function withDataType($dataType)
    {
        $this->data['DataType'] = $dataType;
        $this->options['query']['DataType'] = $dataType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServiceArea() instead.
     *
     * @param string $serviceArea
     *
     * @return $this
     */
    public function setServiceArea($serviceArea)
    {
        return $this->withServiceArea($serviceArea);
    }

    /**
     * @param string $serviceArea
     *
     * @return $this
     */
    public function withServiceArea($serviceArea)
    {
        $this->data['ServiceArea'] = $serviceArea;
        $this->options['query']['ServiceArea'] = $serviceArea;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInterval() instead.
     *
     * @param string $interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        return $this->withInterval($interval);
    }

    /**
     * @param string $interval
     *
     * @return $this
     */
    public function withInterval($interval)
    {
        $this->data['Interval'] = $interval;
        $this->options['query']['Interval'] = $interval;

        return $this;
    }
}
