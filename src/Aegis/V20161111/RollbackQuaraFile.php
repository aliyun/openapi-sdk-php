<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getEventName()
 * @method $this withEventName($value)
 */
class RollbackQuaraFile extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
