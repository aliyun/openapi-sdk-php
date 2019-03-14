<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Rpc;

/**
 * Api CreateDrdsInstance
 *
 * @method string getIsAutoRenew()
 * @method string getQuantity()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getSpecification()
 * @method string getType()
 * @method string getVswitchId()
 * @method string getDuration()
 * @method string getIsHa()
 * @method string getInstanceSeries()
 * @method string getVpcId()
 * @method string getZoneId()
 * @method string getPayType()
 * @method string getPricingCycle()
 */
class CreateDrdsInstance extends Rpc
{
    public $product = 'Drds';

    public $version = '2017-10-16';

    public $method = 'POST';

    /**
     * @param string $isAutoRenew
     *
     * @return $this
     */
    public function withIsAutoRenew($isAutoRenew)
    {
        $this->data['IsAutoRenew'] = $isAutoRenew;
        $this->options['query']['IsAutoRenew'] = $isAutoRenew;

        return $this;
    }

    /**
     * @param string $quantity
     *
     * @return $this
     */
    public function withQuantity($quantity)
    {
        $this->data['Quantity'] = $quantity;
        $this->options['query']['Quantity'] = $quantity;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $specification
     *
     * @return $this
     */
    public function withSpecification($specification)
    {
        $this->data['Specification'] = $specification;
        $this->options['query']['Specification'] = $specification;

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
     * @param string $vswitchId
     *
     * @return $this
     */
    public function withVswitchId($vswitchId)
    {
        $this->data['VswitchId'] = $vswitchId;
        $this->options['query']['VswitchId'] = $vswitchId;

        return $this;
    }

    /**
     * @param string $duration
     *
     * @return $this
     */
    public function withDuration($duration)
    {
        $this->data['Duration'] = $duration;
        $this->options['query']['Duration'] = $duration;

        return $this;
    }

    /**
     * @param string $isHa
     *
     * @return $this
     */
    public function withIsHa($isHa)
    {
        $this->data['IsHa'] = $isHa;
        $this->options['query']['IsHa'] = $isHa;

        return $this;
    }

    /**
     * @param string $instanceSeries
     *
     * @return $this
     */
    public function withInstanceSeries($instanceSeries)
    {
        $this->data['InstanceSeries'] = $instanceSeries;
        $this->options['query']['InstanceSeries'] = $instanceSeries;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function withVpcId($vpcId)
    {
        $this->data['VpcId'] = $vpcId;
        $this->options['query']['VpcId'] = $vpcId;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function withZoneId($zoneId)
    {
        $this->data['ZoneId'] = $zoneId;
        $this->options['query']['ZoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

        return $this;
    }

    /**
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function withPricingCycle($pricingCycle)
    {
        $this->data['PricingCycle'] = $pricingCycle;
        $this->options['query']['PricingCycle'] = $pricingCycle;

        return $this;
    }
}
