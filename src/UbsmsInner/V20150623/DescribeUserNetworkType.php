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
     * @deprecated deprecated since version 2.0, Use withUid() instead.
     *
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        return $this->withUid($uid);
    }

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
     * @deprecated deprecated since version 2.0, Use withServiceCode() instead.
     *
     * @param string $serviceCode
     *
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        return $this->withServiceCode($serviceCode);
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
