<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getBlockchain()
 * @method $this withBlockchain($value)
 * @method string getAccountPubKey()
 * @method $this withAccountPubKey($value)
 * @method string getUploadReq()
 * @method $this withUploadReq($value)
 * @method string getAccountRecoverPubKey()
 * @method $this withAccountRecoverPubKey($value)
 * @method string getAccount()
 * @method $this withAccount($value)
 */
class ApplyBlockchain extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
