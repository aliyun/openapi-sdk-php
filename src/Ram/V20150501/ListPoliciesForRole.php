<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class ListPoliciesForRole extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
