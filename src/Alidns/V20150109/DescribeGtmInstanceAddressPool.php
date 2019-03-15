<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getAddrPoolId()
 * @method $this withAddrPoolId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeGtmInstanceAddressPool extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';
}
