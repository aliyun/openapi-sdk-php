<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryInstanceGaapCost
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method string getPageSize()
 * @method string getBillingCycle()
 * @method string getPageNum()
 * @method string getProductType()
 */
class QueryInstanceGaapCost extends RpcRequest
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
    public $action = 'QueryInstanceGaapCost';

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
