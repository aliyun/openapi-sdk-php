<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getIotId()
 * @method string getStreamType()
 * @method string getBeginTime()
 * @method string getEndTime()
 * @method string getRecordType()
 * @method string getCurrentPage()
 * @method string getPageSize()
 */
class QueryRecord extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryRecord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $iotId
     *
     * @return $this
     */
    public function withIotId($iotId)
    {
        $this->data['IotId']             = $iotId;
        $this->options['query']['IotId'] = $iotId;

        return $this;
    }

    /**
     * @param string $streamType
     *
     * @return $this
     */
    public function withStreamType($streamType)
    {
        $this->data['StreamType']             = $streamType;
        $this->options['query']['StreamType'] = $streamType;

        return $this;
    }

    /**
     * @param string $beginTime
     *
     * @return $this
     */
    public function withBeginTime($beginTime)
    {
        $this->data['BeginTime']             = $beginTime;
        $this->options['query']['BeginTime'] = $beginTime;

        return $this;
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime']             = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $recordType
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withRecordType() instead.
     *
     */
    public function setRecordType($recordType)
    {
        return $this->withRecordType($recordType);
    }

    /**
     * @param string $recordType
     *
     * @return $this
     */
    public function withRecordType($recordType)
    {
        $this->data['RecordType']             = $recordType;
        $this->options['query']['RecordType'] = $recordType;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage']             = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize']             = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }
}
