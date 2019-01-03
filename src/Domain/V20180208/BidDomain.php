<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BidDomain
 *
 * @method string getAuctionId()
 * @method string getMaxBid()
 * @method string getCurrency()
 */
class BidDomain extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-02-08';

    /**
     * @var string
     */
    public $action = 'BidDomain';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withAuctionId() instead.
     *
     * @param string $auctionId
     *
     * @return $this
     */
    public function setAuctionId($auctionId)
    {
        return $this->withAuctionId($auctionId);
    }

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
     * @deprecated deprecated since version 2.0, Use withMaxBid() instead.
     *
     * @param string $maxBid
     *
     * @return $this
     */
    public function setMaxBid($maxBid)
    {
        return $this->withMaxBid($maxBid);
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
     * @deprecated deprecated since version 2.0, Use withCurrency() instead.
     *
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        return $this->withCurrency($currency);
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
