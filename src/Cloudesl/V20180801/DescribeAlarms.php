<?php

namespace AlibabaCloud\Cloudesl\V20180801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeAlarms
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
class DescribeAlarms extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'cloudesl';

    /**
     * @var string
     */
    public $version = '2018-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeAlarms';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withErrorType() instead.
     *
     * @param string $errorType
     *
     * @return $this
     */
    public function setErrorType($errorType)
    {
        return $this->withErrorType($errorType);
    }

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
     * @deprecated deprecated since version 2.0, Use withToAlarmTime() instead.
     *
     * @param string $toAlarmTime
     *
     * @return $this
     */
    public function setToAlarmTime($toAlarmTime)
    {
        return $this->withToAlarmTime($toAlarmTime);
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
     * @deprecated deprecated since version 2.0, Use withAlarmType() instead.
     *
     * @param string $alarmType
     *
     * @return $this
     */
    public function setAlarmType($alarmType)
    {
        return $this->withAlarmType($alarmType);
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
     * @deprecated deprecated since version 2.0, Use withFromAlarmTime() instead.
     *
     * @param string $fromAlarmTime
     *
     * @return $this
     */
    public function setFromAlarmTime($fromAlarmTime)
    {
        return $this->withFromAlarmTime($fromAlarmTime);
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
     * @deprecated deprecated since version 2.0, Use withAlarmId() instead.
     *
     * @param string $alarmId
     *
     * @return $this
     */
    public function setAlarmId($alarmId)
    {
        return $this->withAlarmId($alarmId);
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
     * @deprecated deprecated since version 2.0, Use withStoreId() instead.
     *
     * @param string $storeId
     *
     * @return $this
     */
    public function setStoreId($storeId)
    {
        return $this->withStoreId($storeId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withAlarmStatus() instead.
     *
     * @param string $alarmStatus
     *
     * @return $this
     */
    public function setAlarmStatus($alarmStatus)
    {
        return $this->withAlarmStatus($alarmStatus);
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
