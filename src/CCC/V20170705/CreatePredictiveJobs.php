<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreatePredictiveJobs
 *
 * @method string getInstanceId()
 * @method string getSkillGroupId()
 * @method string getStrategyJson()
 * @method array getJobsJson()
 */
class CreatePredictiveJobs extends RpcRequest
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
    public $action = 'CreatePredictiveJobs';

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
     * @deprecated deprecated since version 2.0, Use withSkillGroupId() instead.
     *
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function setSkillGroupId($skillGroupId)
    {
        return $this->withSkillGroupId($skillGroupId);
    }

    /**
     * @param string $skillGroupId
     *
     * @return $this
     */
    public function withSkillGroupId($skillGroupId)
    {
        $this->data['SkillGroupId'] = $skillGroupId;
        $this->options['query']['SkillGroupId'] = $skillGroupId;

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
