<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getSerialNumber()
 * @method $this withSerialNumber($value)
 * @method string getAuthenticationCode2()
 * @method $this withAuthenticationCode2($value)
 * @method string getAuthenticationCode1()
 * @method $this withAuthenticationCode1($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class BindMFADevice extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
