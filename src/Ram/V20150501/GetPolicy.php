<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicy extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
