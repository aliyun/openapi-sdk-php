<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TwoPartiesCall
 *
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getCalleeCustomer()
 * @method string getCalleeAgent()
 */
class TwoPartiesCall extends RpcRequest
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
    public $action = 'TwoPartiesCall';

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
     * @deprecated deprecated since version 2.0, Use withCalleeCustomer() instead.
     *
     * @param string $calleeCustomer
     *
     * @return $this
     */
    public function setCalleeCustomer($calleeCustomer)
    {
        return $this->withCalleeCustomer($calleeCustomer);
    }

    /**
     * @param string $calleeCustomer
     *
     * @return $this
     */
    public function withCalleeCustomer($calleeCustomer)
    {
        $this->data['CalleeCustomer'] = $calleeCustomer;
        $this->options['query']['CalleeCustomer'] = $calleeCustomer;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCalleeAgent() instead.
     *
     * @param string $calleeAgent
     *
     * @return $this
     */
    public function setCalleeAgent($calleeAgent)
    {
        return $this->withCalleeAgent($calleeAgent);
    }

    /**
     * @param string $calleeAgent
     *
     * @return $this
     */
    public function withCalleeAgent($calleeAgent)
    {
        $this->data['CalleeAgent'] = $calleeAgent;
        $this->options['query']['CalleeAgent'] = $calleeAgent;

        return $this;
    }
}
