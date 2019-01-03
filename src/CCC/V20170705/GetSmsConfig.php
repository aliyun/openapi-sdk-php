<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetSmsConfig
 *
 * @method string getInstanceId()
 * @method array getScenario()
 */
class GetSmsConfig extends RpcRequest
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
    public $action = 'GetSmsConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

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
     * @deprecated deprecated since version 2.0, Use getScenario() instead.
     *
     * @return array
     */
    public function getScenarios()
    {
        return $this->getScenario();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScenario() instead.
     *
     * @param array $scenarios
     *
     * @return $this
     */
    public function setScenarios(array $scenarios)
    {
        return $this->withScenario($scenarios);
    }

    /**
     * @param array $scenario
     *
     * @return $this
     */
    public function withScenario(array $scenario)
    {
        $this->data['Scenario'] = $scenario;
        foreach ($scenario as $i => $iValue) {
            $this->options['query']['Scenario.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
