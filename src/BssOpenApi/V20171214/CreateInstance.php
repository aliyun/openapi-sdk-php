<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateInstance
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
class CreateInstance extends RpcRequest
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
    public $action = 'CreateInstance';

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
     * @deprecated deprecated since version 2.0, Use withRenewPeriod() instead.
     *
     * @param string $renewPeriod
     *
     * @return $this
     */
    public function setRenewPeriod($renewPeriod)
    {
        return $this->withRenewPeriod($renewPeriod);
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
     * @deprecated deprecated since version 2.0, Use getParameter() instead.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->getParameter();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withParameter() instead.
     *
     * @param array $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters)
    {
        return $this->withParameter($parameters);
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
     * @deprecated deprecated since version 2.0, Use withRenewalStatus() instead.
     *
     * @param string $renewalStatus
     *
     * @return $this
     */
    public function setRenewalStatus($renewalStatus)
    {
        return $this->withRenewalStatus($renewalStatus);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
