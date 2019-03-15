<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Rpc;

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPercent()
 * @method $this withPercent($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class DescribeDomainTopUrlVisit extends Rpc
{
    public $product = 'Cdn';

    public $version = '2018-05-10';

    public $method = 'POST';
}
