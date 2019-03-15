<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getRiskIds()
 * @method $this withRiskIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getUuids()
 * @method $this withUuids($value)
 */
class ValidateHcWarnings extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
