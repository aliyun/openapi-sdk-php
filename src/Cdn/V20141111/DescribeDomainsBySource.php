<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getSources()
 * @method $this withSources($value)
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDomainsBySource extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';

    public $method = 'POST';
}
