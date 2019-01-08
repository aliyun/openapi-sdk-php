<?php

namespace AlibabaCloud\DmsEnterprise\V20181101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetOpLog
 *
 * @method string getModule()
 * @method string getPageSize()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getTid()
 * @method string getPageNumber()
 */
class GetOpLog extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'dms-enterprise';

    /**
     * @var string
     */
    public $version = '2018-11-01';

    /**
     * @var string
     */
    public $action = 'GetOpLog';

    /**
     * @var string
     */
    public $serviceCode = 'dmsenterprise';

    /**
     * @param string $module
     *
     * @return $this
     */
    public function withModule($module)
    {
        $this->data['Module'] = $module;
        $this->options['query']['Module'] = $module;

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
     * @param string $tid
     *
     * @return $this
     */
    public function withTid($tid)
    {
        $this->data['Tid'] = $tid;
        $this->options['query']['Tid'] = $tid;

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
