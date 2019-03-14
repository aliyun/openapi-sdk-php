<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

/**
 * Api DescribeBidRelationByBid
 *
 * @method string getRequestid()
 * @method string getBid()
 */
class DescribeBidRelationByBid extends Rpc
{
    public $product = 'Ubsms-inner';

    public $version = '2015-06-23';

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
