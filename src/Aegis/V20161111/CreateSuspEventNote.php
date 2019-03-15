<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 */
class CreateSuspEventNote extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
