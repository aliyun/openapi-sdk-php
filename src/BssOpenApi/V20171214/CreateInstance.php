<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * Api CreateInstance
 *
 * @method string getProductCode()
 * @method string getPeriod()
 * @method string getSubscriptionType()
 * @method string getRenewPeriod()
 * @method array getParameter()
 * @method string getRenewalStatus()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class CreateInstance extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

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
     * @param string $renewPeriod
     *
     * @return $this
     */
    public function withRenewPeriod($renewPeriod)
    {
        $this->data['RenewPeriod'] = $renewPeriod;
        $this->options['query']['RenewPeriod'] = $renewPeriod;

        return $this;
    }

    /**
     * @param array $parameter
     *
     * @return $this
     */
    public function withParameter(array $parameter)
    {
        $this->data['Parameter'] = $parameter;
        foreach ($parameter as $i => $iValue) {
            $this->options['query']['Parameter.' . ($i + 1) . '.Code'] = $parameter[$i]['Code'];
            $this->options['query']['Parameter.' . ($i + 1) . '.Value'] = $parameter[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param string $renewalStatus
     *
     * @return $this
     */
    public function withRenewalStatus($renewalStatus)
    {
        $this->data['RenewalStatus'] = $renewalStatus;
        $this->options['query']['RenewalStatus'] = $renewalStatus;

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
