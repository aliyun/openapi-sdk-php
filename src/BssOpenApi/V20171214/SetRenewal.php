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
