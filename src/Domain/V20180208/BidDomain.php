<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * @method string getAuctionId()
 * @method $this withAuctionId($value)
 * @method string getMaxBid()
 * @method $this withMaxBid($value)
 * @method string getCurrency()
 * @method $this withCurrency($value)
 */
class BidDomain extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';
}
