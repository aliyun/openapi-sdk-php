<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeUserNetworkType
 *
 * @method string getUid()
 * @method string getServiceCode()
 * @method string getBid()
 */
class DescribeUserNetworkType extends RpcRequest
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
    public $action = 'DescribeUserNetworkType';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function withUid($uid)
    {
        $this->data['Uid'] = $uid;
        $this->options['query']['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $serviceCode
     *
     * @return $this
     */
    public function withServiceCode($serviceCode)
    {
        $this->data['ServiceCode'] = $serviceCode;
        $this->options['query']['ServiceCode'] = $serviceCode;

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
