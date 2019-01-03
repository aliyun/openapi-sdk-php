<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListJobsByGroup
 *
 * @method string getInstanceId()
 * @method string getJobFailureReason()
 * @method string getJobStatus()
 * @method string getJobGroupId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListJobsByGroup extends RpcRequest
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
    public $action = 'ListJobsByGroup';

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
     * @deprecated deprecated since version 2.0, Use withJobFailureReason() instead.
     *
     * @param string $jobFailureReason
     *
     * @return $this
     */
    public function setJobFailureReason($jobFailureReason)
    {
        return $this->withJobFailureReason($jobFailureReason);
    }

    /**
     * @param string $jobFailureReason
     *
     * @return $this
     */
    public function withJobFailureReason($jobFailureReason)
    {
        $this->data['JobFailureReason'] = $jobFailureReason;
        $this->options['query']['JobFailureReason'] = $jobFailureReason;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withJobStatus() instead.
     *
     * @param string $jobStatus
     *
     * @return $this
     */
    public function setJobStatus($jobStatus)
    {
        return $this->withJobStatus($jobStatus);
    }

    /**
     * @param string $jobStatus
     *
     * @return $this
     */
    public function withJobStatus($jobStatus)
    {
        $this->data['JobStatus'] = $jobStatus;
        $this->options['query']['JobStatus'] = $jobStatus;

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
}
