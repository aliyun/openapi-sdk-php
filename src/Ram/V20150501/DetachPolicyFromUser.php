<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DetachPolicyFromUser extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
