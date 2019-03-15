<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getEventLevels()
 * @method $this withEventLevels($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLastDays()
 * @method $this withLastDays($value)
 * @method string getEventTypes()
 * @method $this withEventTypes($value)
 */
class DescribeHostTotalCount extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
