<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of NodeList
 *
 * @method string getHostName()
 * @method string getInstanceIds()
 * @method string getInstanceRegionId()
 * @method string getPageSize()
 * @method string getKeyWord()
 * @method string getUserId()
 * @method string getSerialNumbers()
 * @method string getPageNumber()
 * @method string getStatus()
 */
class NodeList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'NodeList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function withHostName($hostName)
    {
        $this->data['HostName'] = $hostName;
        $this->options['query']['HostName'] = $hostName;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds($instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        $this->options['query']['InstanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $instanceRegionId
     *
     * @return $this
     */
    public function withInstanceRegionId($instanceRegionId)
    {
        $this->data['InstanceRegionId'] = $instanceRegionId;
        $this->options['query']['InstanceRegionId'] = $instanceRegionId;

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
     * @param string $keyWord
     *
     * @return $this
     */
    public function withKeyWord($keyWord)
    {
        $this->data['KeyWord'] = $keyWord;
        $this->options['query']['KeyWord'] = $keyWord;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $serialNumbers
     *
     * @return $this
     */
    public function withSerialNumbers($serialNumbers)
    {
        $this->data['SerialNumbers'] = $serialNumbers;
        $this->options['query']['SerialNumbers'] = $serialNumbers;

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
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
