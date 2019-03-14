<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

/**
 * Api DescribeUserNetworkTypes
 *
 * @method string getUid()
 * @method string getServiceCode()
 * @method array getRegionIds()
 * @method string getBid()
 */
class DescribeUserNetworkTypes extends Rpc
{
    public $product = 'Ubsms-inner';

    public $version = '2015-06-23';

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
     * @param array $regionIds
     *
     * @return $this
     */
    public function withRegionIds(array $regionIds)
    {
        $this->data['RegionIds'] = $regionIds;
        foreach ($regionIds as $i => $iValue) {
            $this->options['query']['RegionIds.' . ($i + 1)] = $iValue;
        }

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
