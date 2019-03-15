<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeL2VipsByDynamicDomain extends Rpc
{
    public $product = 'Cdn';

    public $version = '2014-11-11';
}
