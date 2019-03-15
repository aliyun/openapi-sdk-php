<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeVerifySDK extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';
}
