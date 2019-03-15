<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * @method string getAuctionId()
 * @method $this withAuctionId($value)
 */
class QueryAuctionDetail extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';
}
