<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api CreateBatchJobs
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
class CreateBatchJobs extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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
