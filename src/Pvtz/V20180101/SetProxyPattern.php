<?php

namespace AlibabaCloud\Pvtz\V20180101;

use AlibabaCloud\Rpc;

/**
 * @method string getProxyPattern()
 * @method $this withProxyPattern($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SetProxyPattern extends Rpc
{
    public $product = 'pvtz';

    public $version = '2018-01-01';

    public $method = 'POST';

    public $serviceCode = 'pvtz';
}
