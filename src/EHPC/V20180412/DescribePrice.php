<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method array getCommodities()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param array $commodities
     *
     * @return $this
     */
    public function withCommodities(array $commodities)
    {
        $this->data['Commodities'] = $commodities;
        foreach ($commodities as $i => $iValue) {
            $this->options['query']['Commodities.' . ($i + 1) . '.Amount'] = $commodities[$i]['Amount'];
            $this->options['query']['Commodities.' . ($i + 1) . '.Period'] = $commodities[$i]['Period'];
            $this->options['query']['Commodities.' . ($i + 1) . '.NodeType'] = $commodities[$i]['NodeType'];
            $this->options['query']['Commodities.' . ($i + 1) . '.SystemDiskCategory'] = $commodities[$i]['SystemDiskCategory'];
            $this->options['query']['Commodities.' . ($i + 1) . '.SystemDiskSize'] = $commodities[$i]['SystemDiskSize'];
            $this->options['query']['Commodities.' . ($i + 1) . '.InstanceType'] = $commodities[$i]['InstanceType'];
            $this->options['query']['Commodities.' . ($i + 1) . '.NetworkType'] = $commodities[$i]['NetworkType'];
        }

        return $this;
    }
}
