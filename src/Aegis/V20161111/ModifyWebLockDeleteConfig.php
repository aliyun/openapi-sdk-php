<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 */
class ModifyWebLockDeleteConfig extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
