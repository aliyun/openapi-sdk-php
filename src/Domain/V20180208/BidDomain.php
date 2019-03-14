<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * Api BidDomain
 *
 * @method string getAuctionId()
 * @method string getMaxBid()
 * @method string getCurrency()
 */
class BidDomain extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';

    /**
     * @param string $auctionId
     *
     * @return $this
     */
    public function withAuctionId($auctionId)
    {
        $this->data['AuctionId'] = $auctionId;
        $this->options['query']['AuctionId'] = $auctionId;

        return $this;
    }

    /**
     * @param string $maxBid
     *
     * @return $this
     */
    public function withMaxBid($maxBid)
    {
        $this->data['MaxBid'] = $maxBid;
        $this->options['query']['MaxBid'] = $maxBid;

        return $this;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function withCurrency($currency)
    {
        $this->data['Currency'] = $currency;
        $this->options['query']['Currency'] = $currency;

        return $this;
    }
}
