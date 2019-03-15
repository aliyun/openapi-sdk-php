<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\Rpc;

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DeleteDomain extends Rpc
{
    public $product = 'Httpdns';

    public $version = '2016-02-01';

    public $method = 'POST';
}
