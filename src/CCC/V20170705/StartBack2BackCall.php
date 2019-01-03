<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StartBack2BackCall
 *
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getCallCenterNumber()
 * @method string getCallee()
 * @method string getWorkflowId()
 */
class StartBack2BackCall extends RpcRequest
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
    public $action = 'StartBack2BackCall';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withCaller() instead.
     *
     * @param string $caller
     *
     * @return $this
     */
    public function setCaller($caller)
    {
        return $this->withCaller($caller);
    }

    /**
     * @param string $caller
     *
     * @return $this
     */
    public function withCaller($caller)
    {
        $this->data['Caller'] = $caller;
        $this->options['query']['Caller'] = $caller;

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
     * @deprecated deprecated since version 2.0, Use withCallCenterNumber() instead.
     *
     * @param string $callCenterNumber
     *
     * @return $this
     */
    public function setCallCenterNumber($callCenterNumber)
    {
        return $this->withCallCenterNumber($callCenterNumber);
    }

    /**
     * @param string $callCenterNumber
     *
     * @return $this
     */
    public function withCallCenterNumber($callCenterNumber)
    {
        $this->data['CallCenterNumber'] = $callCenterNumber;
        $this->options['query']['CallCenterNumber'] = $callCenterNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCallee() instead.
     *
     * @param string $callee
     *
     * @return $this
     */
    public function setCallee($callee)
    {
        return $this->withCallee($callee);
    }

    /**
     * @param string $callee
     *
     * @return $this
     */
    public function withCallee($callee)
    {
        $this->data['Callee'] = $callee;
        $this->options['query']['Callee'] = $callee;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWorkflowId() instead.
     *
     * @param string $workflowId
     *
     * @return $this
     */
    public function setWorkflowId($workflowId)
    {
        return $this->withWorkflowId($workflowId);
    }

    /**
     * @param string $workflowId
     *
     * @return $this
     */
    public function withWorkflowId($workflowId)
    {
        $this->data['WorkflowId'] = $workflowId;
        $this->options['query']['WorkflowId'] = $workflowId;

        return $this;
    }
}
