<?php

namespace AlibabaCloud\Jaq\V20161123;

use AlibabaCloud\Rpc;

/**
 * @method string getSig()
 * @method $this withSig($value)
 * @method string getSession()
 * @method $this withSession($value)
 * @method string getCallerName()
 * @method $this withCallerName($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class AfsCheck extends Rpc
{
    public $product = 'jaq';

    public $version = '2016-11-23';

    public $method = 'POST';
}
