<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainCode()
 * @method $this withDomainCode($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CheckOrganizationDomain extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'PUT';
}
