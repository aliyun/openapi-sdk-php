<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetRenewal
 *
 * @method string getProductCode()
 * @method string getInstanceIDs()
 * @method string getSubscriptionType()
 * @method string getRenewalStatus()
 * @method string getRenewalPeriodUnit()
 * @method string getRenewalPeriod()
 * @method string getOwnerId()
 * @method string getProductType()
 */
class SetRenewal extends RpcRequest
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
    public $action = 'SetRenewal';

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
     * @deprecated deprecated since version 2.0, Use withInstanceIDs() instead.
     *
     * @param string $instanceIDs
     *
     * @return $this
     */
    public function setInstanceIDs($instanceIDs)
    {
        return $this->withInstanceIDs($instanceIDs);
    }

    /**
     * @param string $instanceIDs
     *
     * @return $this
     */
    public function withInstanceIDs($instanceIDs)
    {
        $this->data['InstanceIDs'] = $instanceIDs;
        $this->options['query']['InstanceIDs'] = $instanceIDs;

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
     * @deprecated deprecated since version 2.0, Use withRenewalPeriodUnit() instead.
     *
     * @param string $renewalPeriodUnit
     *
     * @return $this
     */
    public function setRenewalPeriodUnit($renewalPeriodUnit)
    {
        return $this->withRenewalPeriodUnit($renewalPeriodUnit);
    }

    /**
     * @param string $renewalPeriodUnit
     *
     * @return $this
     */
    public function withRenewalPeriodUnit($renewalPeriodUnit)
    {
        $this->data['RenewalPeriodUnit'] = $renewalPeriodUnit;
        $this->options['query']['RenewalPeriodUnit'] = $renewalPeriodUnit;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRenewalPeriod() instead.
     *
     * @param string $renewalPeriod
     *
     * @return $this
     */
    public function setRenewalPeriod($renewalPeriod)
    {
        return $this->withRenewalPeriod($renewalPeriod);
    }

    /**
     * @param string $renewalPeriod
     *
     * @return $this
     */
    public function withRenewalPeriod($renewalPeriod)
    {
        $this->data['RenewalPeriod'] = $renewalPeriod;
        $this->options['query']['RenewalPeriod'] = $renewalPeriod;

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
