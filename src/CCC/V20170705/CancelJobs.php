<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CancelJobs
 *
 * @method string getAll()
 * @method array getJobId()
 * @method string getInstanceId()
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method string getScenarioId()
 */
class CancelJobs extends RpcRequest
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
    public $action = 'CancelJobs';

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
     * @deprecated deprecated since version 2.0, Use getJobReferenceId() instead.
     *
     * @return array
     */
    public function getJobReferenceIds()
    {
        return $this->getJobReferenceId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withJobReferenceId() instead.
     *
     * @param array $jobReferenceIds
     *
     * @return $this
     */
    public function setJobReferenceIds(array $jobReferenceIds)
    {
        return $this->withJobReferenceId($jobReferenceIds);
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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
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
     * @deprecated deprecated since version 2.0, Use withScenarioId() instead.
     *
     * @param string $scenarioId
     *
     * @return $this
     */
    public function setScenarioId($scenarioId)
    {
        return $this->withScenarioId($scenarioId);
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
