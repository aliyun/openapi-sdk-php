<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeBidRelationByBid
 *
 * @method string getRequestid()
 * @method string getBid()
 */
class DescribeBidRelationByBid extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ubsms-inner';

    /**
     * @var string
     */
    public $version = '2015-06-23';

    /**
     * @var string
     */
    public $action = 'DescribeBidRelationByBid';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $requestid
     *
     * @return $this
     */
    public function withRequestid($requestid)
    {
        $this->data['Requestid'] = $requestid;
        $this->options['query']['Requestid'] = $requestid;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['Bid'] = $bid;

        return $this;
    }
}
