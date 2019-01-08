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
