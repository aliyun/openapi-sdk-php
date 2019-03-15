<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getTargetOperations()
 * @method $this withTargetOperations($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OperateSuspiciousTargetConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
