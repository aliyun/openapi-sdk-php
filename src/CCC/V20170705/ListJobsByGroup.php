<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ListJobsByGroup
 *
 * @method string getInstanceId()
 * @method string getJobFailureReason()
 * @method string getJobStatus()
 * @method string getJobGroupId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListJobsByGroup extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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
