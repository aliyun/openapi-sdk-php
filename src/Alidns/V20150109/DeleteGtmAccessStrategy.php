<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStrategyId()
 * @method $this withStrategyId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteGtmAccessStrategy extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';
}
