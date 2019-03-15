<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getStrategyName()
 * @method $this withStrategyName($value)
 * @method string getDefaultAddrPoolId()
 * @method $this withDefaultAddrPoolId($value)
 * @method string getAccessLines()
 * @method $this withAccessLines($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFailoverAddrPoolId()
 * @method $this withFailoverAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AddGtmAccessStrategy extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';
}
