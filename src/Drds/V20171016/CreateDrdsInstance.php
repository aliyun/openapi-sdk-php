<?php

namespace AlibabaCloud\Drds\V20171016;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDrdsInstance
 *
 * @method string getIsAutoRenew()
 * @method string getQuantity()
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
class CreateDrdsInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Drds';

    /**
     * @var string
     */
    public $version = '2017-10-16';

    /**
     * @var string
     */
    public $action = 'CreateDrdsInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withIsAutoRenew() instead.
     *
     * @param string $isAutoRenew
     *
     * @return $this
     */
    public function setIsAutoRenew($isAutoRenew)
    {
        return $this->withIsAutoRenew($isAutoRenew);
    }

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
     * @deprecated deprecated since version 2.0, Use withQuantity() instead.
     *
     * @param string $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        return $this->withQuantity($quantity);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withSpecification() instead.
     *
     * @param string $specification
     *
     * @return $this
     */
    public function setSpecification($specification)
    {
        return $this->withSpecification($specification);
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
     * @deprecated deprecated since version 2.0, Use withType() instead.
     *
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        return $this->withType($type);
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
     * @deprecated deprecated since version 2.0, Use withVswitchId() instead.
     *
     * @param string $vswitchId
     *
     * @return $this
     */
    public function setVswitchId($vswitchId)
    {
        return $this->withVswitchId($vswitchId);
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
     * @deprecated deprecated since version 2.0, Use withDuration() instead.
     *
     * @param string $duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        return $this->withDuration($duration);
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
     * @deprecated deprecated since version 2.0, Use withIsHa() instead.
     *
     * @param string $isHa
     *
     * @return $this
     */
    public function setisHa($isHa)
    {
        return $this->withIsHa($isHa);
    }

    /**
     * @param string $isHa
     *
     * @return $this
     */
    public function withIsHa($isHa)
    {
        $this->data['IsHa'] = $isHa;
        $this->options['query']['isHa'] = $isHa;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceSeries() instead.
     *
     * @param string $instanceSeries
     *
     * @return $this
     */
    public function setinstanceSeries($instanceSeries)
    {
        return $this->withInstanceSeries($instanceSeries);
    }

    /**
     * @param string $instanceSeries
     *
     * @return $this
     */
    public function withInstanceSeries($instanceSeries)
    {
        $this->data['InstanceSeries'] = $instanceSeries;
        $this->options['query']['instanceSeries'] = $instanceSeries;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVpcId() instead.
     *
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        return $this->withVpcId($vpcId);
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
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
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
     * @deprecated deprecated since version 2.0, Use withPayType() instead.
     *
     * @param string $payType
     *
     * @return $this
     */
    public function setPayType($payType)
    {
        return $this->withPayType($payType);
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
     * @deprecated deprecated since version 2.0, Use withPricingCycle() instead.
     *
     * @param string $pricingCycle
     *
     * @return $this
     */
    public function setPricingCycle($pricingCycle)
    {
        return $this->withPricingCycle($pricingCycle);
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
