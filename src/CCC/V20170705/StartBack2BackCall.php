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
