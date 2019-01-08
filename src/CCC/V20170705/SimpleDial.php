<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SimpleDial
 *
 * @method string getCaller()
 * @method string getInstanceId()
 * @method string getContractFlowId()
 * @method string getCallee()
 */
class SimpleDial extends RpcRequest
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
    public $action = 'SimpleDial';

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
     * @param string $contractFlowId
     *
     * @return $this
     */
    public function withContractFlowId($contractFlowId)
    {
        $this->data['ContractFlowId'] = $contractFlowId;
        $this->options['query']['ContractFlowId'] = $contractFlowId;

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
}
