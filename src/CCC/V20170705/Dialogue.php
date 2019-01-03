<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of Dialogue
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
class Dialogue extends RpcRequest
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
    public $action = 'Dialogue';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withCallId() instead.
     *
     * @param string $callId
     *
     * @return $this
     */
    public function setCallId($callId)
    {
        return $this->withCallId($callId);
    }

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
     * @deprecated deprecated since version 2.0, Use withCallingNumber() instead.
     *
     * @param string $callingNumber
     *
     * @return $this
     */
    public function setCallingNumber($callingNumber)
    {
        return $this->withCallingNumber($callingNumber);
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
     * @deprecated deprecated since version 2.0, Use withCalledNumber() instead.
     *
     * @param string $calledNumber
     *
     * @return $this
     */
    public function setCalledNumber($calledNumber)
    {
        return $this->withCalledNumber($calledNumber);
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
     * @deprecated deprecated since version 2.0, Use withActionKey() instead.
     *
     * @param string $actionKey
     *
     * @return $this
     */
    public function setActionKey($actionKey)
    {
        return $this->withActionKey($actionKey);
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
     * @deprecated deprecated since version 2.0, Use withActionParams() instead.
     *
     * @param string $actionParams
     *
     * @return $this
     */
    public function setActionParams($actionParams)
    {
        return $this->withActionParams($actionParams);
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
     * @deprecated deprecated since version 2.0, Use withCallType() instead.
     *
     * @param string $callType
     *
     * @return $this
     */
    public function setCallType($callType)
    {
        return $this->withCallType($callType);
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
     * @deprecated deprecated since version 2.0, Use withTaskId() instead.
     *
     * @param string $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        return $this->withTaskId($taskId);
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
     * @deprecated deprecated since version 2.0, Use withUtterance() instead.
     *
     * @param string $utterance
     *
     * @return $this
     */
    public function setUtterance($utterance)
    {
        return $this->withUtterance($utterance);
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
