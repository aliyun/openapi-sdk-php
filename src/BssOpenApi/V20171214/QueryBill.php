<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryBill
 *
 * @method string getProductCode()
 * @method string getIsHideZeroCharge()
 * @method string getIsDisplayLocalCurrency()
 * @method string getSubscriptionType()
 * @method string getPageSize()
 * @method string getBillingCycle()
 * @method string getType()
 * @method string getOwnerId()
 * @method string getPageNum()
 * @method string getProductType()
 */
class QueryBill extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'QueryBill';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $productCode
     *
     * @return $this
     */
    public function withProductCode($productCode)
    {
        $this->data['ProductCode'] = $productCode;
        $this->options['query']['ProductCode'] = $productCode;

        return $this;
    }

    /**
     * @param string $isHideZeroCharge
     *
     * @return $this
     */
    public function withIsHideZeroCharge($isHideZeroCharge)
    {
        $this->data['IsHideZeroCharge'] = $isHideZeroCharge;
        $this->options['query']['IsHideZeroCharge'] = $isHideZeroCharge;

        return $this;
    }

    /**
     * @param string $isDisplayLocalCurrency
     *
     * @return $this
     */
    public function withIsDisplayLocalCurrency($isDisplayLocalCurrency)
    {
        $this->data['IsDisplayLocalCurrency'] = $isDisplayLocalCurrency;
        $this->options['query']['IsDisplayLocalCurrency'] = $isDisplayLocalCurrency;

        return $this;
    }

    /**
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function withSubscriptionType($subscriptionType)
    {
        $this->data['SubscriptionType'] = $subscriptionType;
        $this->options['query']['SubscriptionType'] = $subscriptionType;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $billingCycle
     *
     * @return $this
     */
    public function withBillingCycle($billingCycle)
    {
        $this->data['BillingCycle'] = $billingCycle;
        $this->options['query']['BillingCycle'] = $billingCycle;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function withType($type)
    {
        $this->data['Type'] = $type;
        $this->options['query']['Type'] = $type;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function withProductType($productType)
    {
        $this->data['ProductType'] = $productType;
        $this->options['query']['ProductType'] = $productType;

        return $this;
    }
}
