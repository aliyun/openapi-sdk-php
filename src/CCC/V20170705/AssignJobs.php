<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AssignJobs
 *
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method string getGroupId()
 * @method string getStrategyJson()
 * @method string getScenarioId()
 * @method array getJobsJson()
 */
class AssignJobs extends RpcRequest
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
    public $action = 'AssignJobs';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use getCallingNumber() instead.
     *
     * @return array
     */
    public function getCallingNumbers()
    {
        return $this->getCallingNumber();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallingNumber() instead.
     *
     * @param array $callingNumbers
     *
     * @return $this
     */
    public function setCallingNumbers(array $callingNumbers)
    {
        return $this->withCallingNumber($callingNumbers);
    }

    /**
     * @param array $callingNumber
     *
     * @return $this
     */
    public function withCallingNumber(array $callingNumber)
    {
        $this->data['CallingNumber'] = $callingNumber;
        foreach ($callingNumber as $i => $iValue) {
            $this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
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
     * @deprecated deprecated since version 2.0, Use withStrategyJson() instead.
     *
     * @param string $strategyJson
     *
     * @return $this
     */
    public function setStrategyJson($strategyJson)
    {
        return $this->withStrategyJson($strategyJson);
    }

    /**
     * @param string $strategyJson
     *
     * @return $this
     */
    public function withStrategyJson($strategyJson)
    {
        $this->data['StrategyJson'] = $strategyJson;
        $this->options['query']['StrategyJson'] = $strategyJson;

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

    /**
     * @deprecated deprecated since version 2.0, Use getJobsJson() instead.
     *
     * @return array
     */
    public function getJobsJsons()
    {
        return $this->getJobsJson();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withJobsJson() instead.
     *
     * @param array $jobsJsons
     *
     * @return $this
     */
    public function setJobsJsons(array $jobsJsons)
    {
        return $this->withJobsJson($jobsJsons);
    }

    /**
     * @param array $jobsJson
     *
     * @return $this
     */
    public function withJobsJson(array $jobsJson)
    {
        $this->data['JobsJson'] = $jobsJson;
        foreach ($jobsJson as $i => $iValue) {
            $this->options['query']['JobsJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
