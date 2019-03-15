<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getPolicyDocument()
 * @method $this withPolicyDocument($value)
 */
class CreatePolicy extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
