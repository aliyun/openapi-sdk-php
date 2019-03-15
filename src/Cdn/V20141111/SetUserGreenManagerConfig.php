<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getQuota()
 * @method $this withQuota($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class SetUserGreenManagerConfig extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
