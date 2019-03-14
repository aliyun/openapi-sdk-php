<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Rpc;

/**
 * Api QueryCustomerSaleInfo
 *
 * @method string getRegionName()
 */
class QueryCustomerSaleInfo extends Rpc
{
    public $product = 'TeslaMaxCompute';

    public $version = '2018-01-04';

    /**
     * @param string $regionName
     *
     * @return $this
     */
    public function withRegionName($regionName)
    {
        $this->data['RegionName'] = $regionName;
        $this->options['query']['RegionName'] = $regionName;

        return $this;
    }
}
