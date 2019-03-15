<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getBizid()
 * @method $this withBizid($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class UpdateMemberRole extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
