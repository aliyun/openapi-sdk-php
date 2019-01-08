<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetAgentState
 *
 * @method string getAgentId()
 * @method string getInstanceId()
 * @method string getDn()
 */
class GetAgentState extends RpcRequest
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
    public $action = 'GetAgentState';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function withAgentId($agentId)
    {
        $this->data['AgentId'] = $agentId;
        $this->options['query']['AgentId'] = $agentId;

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
     * @param string $dn
     *
     * @return $this
     */
    public function withDn($dn)
    {
        $this->data['Dn'] = $dn;
        $this->options['query']['Dn'] = $dn;

        return $this;
    }
}
