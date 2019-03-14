<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Rpc;

/**
 * Api DescribeAlarms
 *
 * @method string getErrorType()
 * @method string getToAlarmTime()
 * @method string getAlarmType()
 * @method string getFromAlarmTime()
 * @method string getAlarmId()
 * @method string getPageSize()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getAlarmStatus()
 */
class DescribeAlarms extends Rpc
{
    public $product = 'cloudesl';

    public $version = '2018-08-01';

    public $method = 'POST';

    /**
     * @param string $errorType
     *
     * @return $this
     */
    public function withErrorType($errorType)
    {
        $this->data['ErrorType'] = $errorType;
        $this->options['query']['ErrorType'] = $errorType;

        return $this;
    }

    /**
     * @param string $toAlarmTime
     *
     * @return $this
     */
    public function withToAlarmTime($toAlarmTime)
    {
        $this->data['ToAlarmTime'] = $toAlarmTime;
        $this->options['query']['ToAlarmTime'] = $toAlarmTime;

        return $this;
    }

    /**
     * @param string $alarmType
     *
     * @return $this
     */
    public function withAlarmType($alarmType)
    {
        $this->data['AlarmType'] = $alarmType;
        $this->options['query']['AlarmType'] = $alarmType;

        return $this;
    }

    /**
     * @param string $fromAlarmTime
     *
     * @return $this
     */
    public function withFromAlarmTime($fromAlarmTime)
    {
        $this->data['FromAlarmTime'] = $fromAlarmTime;
        $this->options['query']['FromAlarmTime'] = $fromAlarmTime;

        return $this;
    }

    /**
     * @param string $alarmId
     *
     * @return $this
     */
    public function withAlarmId($alarmId)
    {
        $this->data['AlarmId'] = $alarmId;
        $this->options['query']['AlarmId'] = $alarmId;

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
     * @param string $storeId
     *
     * @return $this
     */
    public function withStoreId($storeId)
    {
        $this->data['StoreId'] = $storeId;
        $this->options['query']['StoreId'] = $storeId;

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

    /**
     * @param string $alarmStatus
     *
     * @return $this
     */
    public function withAlarmStatus($alarmStatus)
    {
        $this->data['AlarmStatus'] = $alarmStatus;
        $this->options['query']['AlarmStatus'] = $alarmStatus;

        return $this;
    }
}
