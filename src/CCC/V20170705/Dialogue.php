<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api Dialogue
 *
 * @method string getCallId()
 * @method string getCallingNumber()
 * @method string getInstanceId()
 * @method string getCalledNumber()
 * @method string getActionKey()
 * @method string getActionParams()
 * @method string getCallType()
 * @method string getScenarioId()
 * @method string getTaskId()
 * @method string getUtterance()
 */
class Dialogue extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $callId
     *
     * @return $this
     */
    public function withCallId($callId)
    {
        $this->data['CallId'] = $callId;
        $this->options['query']['CallId'] = $callId;

        return $this;
    }

    /**
     * @param string $callingNumber
     *
     * @return $this
     */
    public function withCallingNumber($callingNumber)
    {
        $this->data['CallingNumber'] = $callingNumber;
        $this->options['query']['CallingNumber'] = $callingNumber;

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
     * @param string $calledNumber
     *
     * @return $this
     */
    public function withCalledNumber($calledNumber)
    {
        $this->data['CalledNumber'] = $calledNumber;
        $this->options['query']['CalledNumber'] = $calledNumber;

        return $this;
    }

    /**
     * @param string $actionKey
     *
     * @return $this
     */
    public function withActionKey($actionKey)
    {
        $this->data['ActionKey'] = $actionKey;
        $this->options['query']['ActionKey'] = $actionKey;

        return $this;
    }

    /**
     * @param string $actionParams
     *
     * @return $this
     */
    public function withActionParams($actionParams)
    {
        $this->data['ActionParams'] = $actionParams;
        $this->options['query']['ActionParams'] = $actionParams;

        return $this;
    }

    /**
     * @param string $callType
     *
     * @return $this
     */
    public function withCallType($callType)
    {
        $this->data['CallType'] = $callType;
        $this->options['query']['CallType'] = $callType;

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
     * @param string $taskId
     *
     * @return $this
     */
    public function withTaskId($taskId)
    {
        $this->data['TaskId'] = $taskId;
        $this->options['query']['TaskId'] = $taskId;

        return $this;
    }

    /**
     * @param string $utterance
     *
     * @return $this
     */
    public function withUtterance($utterance)
    {
        $this->data['Utterance'] = $utterance;
        $this->options['query']['Utterance'] = $utterance;

        return $this;
    }
}
