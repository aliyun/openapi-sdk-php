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
