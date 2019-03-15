<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getAccountPubKey()
 * @method $this withAccountPubKey($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 * @method string getAccountRecoverPubKey()
 * @method $this withAccountRecoverPubKey($value)
 */
class CreateAccount extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
