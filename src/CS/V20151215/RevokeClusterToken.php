<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class RevokeClusterToken extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/token/[Token]/revoke';

    public $method = 'DELETE';

    public $serviceCode = 'cs';
}
