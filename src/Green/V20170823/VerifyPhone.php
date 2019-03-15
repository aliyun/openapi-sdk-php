<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getVerifyCode()
 * @method $this withVerifyCode($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class VerifyPhone extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
