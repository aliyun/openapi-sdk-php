<?php

namespace AlibabaCloud\UbsmsInner\V20150623;

use AlibabaCloud\Rpc;

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method array getRegionIds()
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeUserNetworkTypes extends Rpc
{
    public $product = 'Ubsms-inner';

    public $version = '2015-06-23';

    public $method = 'POST';

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
}
