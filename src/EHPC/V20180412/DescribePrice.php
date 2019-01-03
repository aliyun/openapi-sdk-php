<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePrice
 *
 * @method string getPriceUnit()
 * @method array getCommodities()
 * @method string getChargeType()
 * @method string getOrderType()
 */
class DescribePrice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'DescribePrice';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withPriceUnit() instead.
     *
     * @param string $priceUnit
     *
     * @return $this
     */
    public function setPriceUnit($priceUnit)
    {
        return $this->withPriceUnit($priceUnit);
    }

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
     * @deprecated deprecated since version 2.0, Use getCommodities() instead.
     *
     * @return array
     */
    public function getCommoditiess()
    {
        return $this->getCommodities();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCommodities() instead.
     *
     * @param array $commoditiess
     *
     * @return $this
     */
    public function setCommoditiess(array $commoditiess)
    {
        return $this->withCommodities($commoditiess);
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
     * @deprecated deprecated since version 2.0, Use withChargeType() instead.
     *
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        return $this->withChargeType($chargeType);
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
     * @deprecated deprecated since version 2.0, Use withOrderType() instead.
     *
     * @param string $orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        return $this->withOrderType($orderType);
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
