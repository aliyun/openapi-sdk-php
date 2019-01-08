<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetScenario
 *
 * @method string getInstanceId()
 * @method string getScenarioId()
 */
class GetScenario extends RpcRequest
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
    public $action = 'GetScenario';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

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
