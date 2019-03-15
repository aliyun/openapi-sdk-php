<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWarnType()
 * @method $this withWarnType($value)
 * @method string getSuspiciousEventIds()
 * @method $this withSuspiciousEventIds($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getSubOperation()
 * @method $this withSubOperation($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class OperationSuspEvents extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
