<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Rpc;

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getPasswordHash()
 * @method $this withPasswordHash($value)
 * @method string getCallerName()
 * @method $this withCallerName($value)
 */
class CheckAccountAndPasswordRisk extends Rpc
{
    public $product = 'jaq';

    public $version = '2016-11-23';

    public $method = 'POST';
}
