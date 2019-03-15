<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getIsAccepted()
 * @method $this withIsAccepted($value)
 */
class AcceptInvitation extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';
}
