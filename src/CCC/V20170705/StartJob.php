<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartJob
 *
 * @method string getJobJson()
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method string getGroupId()
 * @method string getSelfHostedCallCenter()
 * @method string getScenarioId()
 */
class StartJob extends RpcRequest
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
    public $action = 'StartJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withJobJson() instead.
     *
     * @param string $jobJson
     *
     * @return $this
     */
    public function setJobJson($jobJson)
    {
        return $this->withJobJson($jobJson);
    }

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
     * @deprecated deprecated since version 2.0, Use withSelfHostedCallCenter() instead.
     *
     * @param string $selfHostedCallCenter
     *
     * @return $this
     */
    public function setSelfHostedCallCenter($selfHostedCallCenter)
    {
        return $this->withSelfHostedCallCenter($selfHostedCallCenter);
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
