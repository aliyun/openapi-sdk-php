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
     * @deprecated deprecated since version 2.0, Use withRequestid() instead.
     *
     * @param string $requestid
     *
     * @return $this
     */
    public function setRequestid($requestid)
    {
        return $this->withRequestid($requestid);
    }

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
     * @deprecated deprecated since version 2.0, Use withBid() instead.
     *
     * @param string $bid
     *
     * @return $this
     */
    public function setBid($bid)
    {
        return $this->withBid($bid);
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
