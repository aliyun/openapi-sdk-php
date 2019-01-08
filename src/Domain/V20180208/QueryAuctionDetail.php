<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryAuctionDetail
 *
 * @method string getAuctionId()
 */
class QueryAuctionDetail extends RpcRequest
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
    public $action = 'QueryAuctionDetail';

    /**
     * @var string
     */
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
}
