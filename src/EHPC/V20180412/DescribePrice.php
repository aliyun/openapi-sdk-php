<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * Api DescribePrice
 *
 * @method string getPriceUnit()
 * @method array getCommodities()
 * @method string getChargeType()
 * @method string getOrderType()
 */
class DescribePrice extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

    public $serviceCode = 'ehs';

    /**
     * @param string $priceUnit
     *
     * @return $this
     */
    public function withPriceUnit($priceUnit)
    {
        $this->data['PriceUnit'] = $priceUnit;
        $this->options['query']['PriceUnit'] = $priceUnit;

        return $this;
    }

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

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function withChargeType($chargeType)
    {
        $this->data['ChargeType'] = $chargeType;
        $this->options['query']['ChargeType'] = $chargeType;

        return $this;
    }

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function withOrderType($orderType)
    {
        $this->data['OrderType'] = $orderType;
        $this->options['query']['OrderType'] = $orderType;

        return $this;
    }
}
