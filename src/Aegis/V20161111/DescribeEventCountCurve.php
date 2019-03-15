<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getTypes()
 * @method $this withTypes($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getVulEventLevels()
 * @method $this withVulEventLevels($value)
 * @method string getLastDays()
 * @method $this withLastDays($value)
 * @method string getHealthEventLevels()
 * @method $this withHealthEventLevels($value)
 * @method string getSuspiciousEventLevels()
 * @method $this withSuspiciousEventLevels($value)
 */
class DescribeEventCountCurve extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
