<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getSig()
 * @method $this withSig($value)
 * @method string getRemoteIp()
 * @method $this withRemoteIp($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getAppKey()
 * @method $this withAppKey($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getScene()
 * @method $this withScene($value)
 */
class AuthenticateSig extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}
