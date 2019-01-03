<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetJobList
 *
 * @method string getInstanceId()
 * @method string getJobGroupId()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getStatus()
 * @method string getQueryAll()
 */
class GetJobList extends RpcRequest
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
    public $action = 'GetJobList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withJobGroupId() instead.
     *
     * @param string $jobGroupId
     *
     * @return $this
     */
    public function setJobGroupId($jobGroupId)
    {
        return $this->withJobGroupId($jobGroupId);
    }

    /**
     * @param string $jobGroupId
     *
     * @return $this
     */
    public function withJobGroupId($jobGroupId)
    {
        $this->data['JobGroupId'] = $jobGroupId;
        $this->options['query']['JobGroupId'] = $jobGroupId;

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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
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

    /**
     * @deprecated deprecated since version 2.0, Use withQueryAll() instead.
     *
     * @param string $queryAll
     *
     * @return $this
     */
    public function setQueryAll($queryAll)
    {
        return $this->withQueryAll($queryAll);
    }

    /**
     * @param string $queryAll
     *
     * @return $this
     */
    public function withQueryAll($queryAll)
    {
        $this->data['QueryAll'] = $queryAll;
        $this->options['query']['QueryAll'] = $queryAll;

        return $this;
    }
}
