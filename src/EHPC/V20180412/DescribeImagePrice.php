<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeImagePrice
 *
 * @method string getPeriod()
 * @method string getAmount()
 * @method string getImageId()
 * @method string getPriceUnit()
 * @method string getSkuCode()
 * @method string getOrderType()
 */
class DescribeImagePrice extends RpcRequest
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
    public $action = 'DescribeImagePrice';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withPeriod() instead.
     *
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        return $this->withPeriod($period);
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function withPeriod($period)
    {
        $this->data['Period'] = $period;
        $this->options['query']['Period'] = $period;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withAmount() instead.
     *
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->withAmount($amount);
    }

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function withAmount($amount)
    {
        $this->data['Amount'] = $amount;
        $this->options['query']['Amount'] = $amount;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withSkuCode() instead.
     *
     * @param string $skuCode
     *
     * @return $this
     */
    public function setSkuCode($skuCode)
    {
        return $this->withSkuCode($skuCode);
    }

    /**
     * @param string $skuCode
     *
     * @return $this
     */
    public function withSkuCode($skuCode)
    {
        $this->data['SkuCode'] = $skuCode;
        $this->options['query']['SkuCode'] = $skuCode;

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
