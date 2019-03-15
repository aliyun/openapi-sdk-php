<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ModifyScenario extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';
}
