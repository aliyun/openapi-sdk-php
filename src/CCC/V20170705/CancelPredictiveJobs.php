<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CancelPredictiveJobs
 *
 * @method string getAll()
 * @method array getJobId()
 * @method string getInstanceId()
 * @method string getJobGroupId()
 */
class CancelPredictiveJobs extends RpcRequest
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
    public $action = 'CancelPredictiveJobs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withAll() instead.
     *
     * @param string $all
     *
     * @return $this
     */
    public function setAll($all)
    {
        return $this->withAll($all);
    }

    /**
     * @param string $all
     *
     * @return $this
     */
    public function withAll($all)
    {
        $this->data['All'] = $all;
        $this->options['query']['All'] = $all;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getJobId() instead.
     *
     * @return array
     */
    public function getJobIds()
    {
        return $this->getJobId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withJobId() instead.
     *
     * @param array $jobIds
     *
     * @return $this
     */
    public function setJobIds(array $jobIds)
    {
        return $this->withJobId($jobIds);
    }

    /**
     * @param array $jobId
     *
     * @return $this
     */
    public function withJobId(array $jobId)
    {
        $this->data['JobId'] = $jobId;
        foreach ($jobId as $i => $iValue) {
            $this->options['query']['JobId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

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
}
