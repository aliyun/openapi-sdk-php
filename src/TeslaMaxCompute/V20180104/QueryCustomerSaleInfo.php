<?php

namespace AlibabaCloud\TeslaMaxCompute\V20180104;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryCustomerSaleInfo
 *
 * @method string getRegionName()
 */
class QueryCustomerSaleInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'TeslaMaxCompute';

    /**
     * @var string
     */
    public $version = '2018-01-04';

    /**
     * @var string
     */
    public $action = 'QueryCustomerSaleInfo';

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
