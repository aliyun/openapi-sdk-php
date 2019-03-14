<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api StartJob
 *
 * @method string getJobJson()
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method string getGroupId()
 * @method string getSelfHostedCallCenter()
 * @method string getScenarioId()
 */
class StartJob extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $jobJson
     *
     * @return $this
     */
    public function withJobJson($jobJson)
    {
        $this->data['JobJson'] = $jobJson;
        $this->options['query']['JobJson'] = $jobJson;

        return $this;
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
     * @param string $selfHostedCallCenter
     *
     * @return $this
     */
    public function withSelfHostedCallCenter($selfHostedCallCenter)
    {
        $this->data['SelfHostedCallCenter'] = $selfHostedCallCenter;
        $this->options['query']['SelfHostedCallCenter'] = $selfHostedCallCenter;

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
