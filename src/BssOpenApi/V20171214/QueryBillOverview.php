<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryBillOverview
 *
 * @method string getProductCode()
 * @method string getSubscriptionType()
 * @method string getBillingCycle()
 * @method string getProductType()
 */
class QueryBillOverview extends RpcRequest
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
    public $action = 'QueryBillOverview';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withProductCode() instead.
     *
     * @param string $productCode
     *
     * @return $this
     */
    public function setProductCode($productCode)
    {
        return $this->withProductCode($productCode);
    }

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
     * @deprecated deprecated since version 2.0, Use withSubscriptionType() instead.
     *
     * @param string $subscriptionType
     *
     * @return $this
     */
    public function setSubscriptionType($subscriptionType)
    {
        return $this->withSubscriptionType($subscriptionType);
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
     * @deprecated deprecated since version 2.0, Use withBillingCycle() instead.
     *
     * @param string $billingCycle
     *
     * @return $this
     */
    public function setBillingCycle($billingCycle)
    {
        return $this->withBillingCycle($billingCycle);
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
     * @deprecated deprecated since version 2.0, Use withProductType() instead.
     *
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        return $this->withProductType($productType);
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
