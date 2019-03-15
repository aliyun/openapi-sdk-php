<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getInstanceVersion()
 * @method $this withInstanceVersion($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryCreateInstancePrice extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';
}
