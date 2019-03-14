<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api TwoPartiesCall
 *
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getCalleeCustomer()
 * @method string getCalleeAgent()
 */
class TwoPartiesCall extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
