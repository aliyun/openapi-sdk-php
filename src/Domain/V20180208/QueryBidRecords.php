<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryBidRecords
 *
 * @method string getAuctionId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryBidRecords extends RpcRequest
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
    public $action = 'QueryBidRecords';

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

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }
}
