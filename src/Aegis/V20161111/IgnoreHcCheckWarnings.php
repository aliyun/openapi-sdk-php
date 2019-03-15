<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getReason()
 * @method $this withReason($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getCheckWarningIds()
 * @method $this withCheckWarningIds($value)
 * @method string getRiskId()
 * @method $this withRiskId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class IgnoreHcCheckWarnings extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
