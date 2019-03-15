<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getRiskSubTypeName()
 * @method $this withRiskSubTypeName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCycleStartTime()
 * @method $this withCycleStartTime($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCycleDays()
 * @method $this withCycleDays($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyStrategy extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
