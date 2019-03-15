<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getScenario()
 */
class GetSmsConfig extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

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
