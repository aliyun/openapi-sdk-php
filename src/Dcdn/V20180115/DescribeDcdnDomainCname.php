<?php

namespace AlibabaCloud\Dcdn\V20180115;

use AlibabaCloud\Rpc;

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeDcdnDomainCname extends Rpc
{
    public $product = 'dcdn';

    public $version = '2018-01-15';

    public $serviceCode = 'dcdn';
}
