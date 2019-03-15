<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenCdnService extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
