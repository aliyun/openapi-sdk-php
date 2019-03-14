<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api SuspendJobs
 *
 * @method string getAll()
 * @method array getJobId()
 * @method string getInstanceId()
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method string getScenarioId()
 */
class SuspendJobs extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
     * @param array $jobReferenceId
     *
     * @return $this
     */
    public function withJobReferenceId(array $jobReferenceId)
    {
        $this->data['JobReferenceId'] = $jobReferenceId;
        foreach ($jobReferenceId as $i => $iValue) {
            $this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $scenarioId
     *
     * @return $this
     */
    public function withScenarioId($scenarioId)
    {
        $this->data['ScenarioId'] = $scenarioId;
        $this->options['query']['ScenarioId'] = $scenarioId;

        return $this;
    }
}
