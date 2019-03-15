<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getVersionId()
 * @method $this withVersionId($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class GetPolicyVersion extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
