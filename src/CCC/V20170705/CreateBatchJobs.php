<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateBatchJobs
 *
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method string getSubmitted()
 * @method string getStrategyJson()
 * @method string getName()
 * @method string getDescription()
 * @method string getScenarioId()
 * @method string getJobFilePath()
 */
class CreateBatchJobs extends RpcRequest
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
    public $action = 'CreateBatchJobs';

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
     * @deprecated deprecated since version 2.0, Use withSubmitted() instead.
     *
     * @param string $submitted
     *
     * @return $this
     */
    public function setSubmitted($submitted)
    {
        return $this->withSubmitted($submitted);
    }

    /**
     * @param string $submitted
     *
     * @return $this
     */
    public function withSubmitted($submitted)
    {
        $this->data['Submitted'] = $submitted;
        $this->options['query']['Submitted'] = $submitted;

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
     * @deprecated deprecated since version 2.0, Use withName() instead.
     *
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->withName($name);
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

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
     * @deprecated deprecated since version 2.0, Use withJobFilePath() instead.
     *
     * @param string $jobFilePath
     *
     * @return $this
     */
    public function setJobFilePath($jobFilePath)
    {
        return $this->withJobFilePath($jobFilePath);
    }

    /**
     * @param string $jobFilePath
     *
     * @return $this
     */
    public function withJobFilePath($jobFilePath)
    {
        $this->data['JobFilePath'] = $jobFilePath;
        $this->options['query']['JobFilePath'] = $jobFilePath;

        return $this;
    }
}
