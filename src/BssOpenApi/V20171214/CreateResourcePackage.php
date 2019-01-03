<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateResourcePackage
 *
 * @method string getDuration()
 * @method string getProductCode()
 * @method string getSpecification()
 * @method string getOwnerId()
 * @method string getPackageType()
 * @method string getEffectiveDate()
 * @method string getPricingCycle()
 */
class CreateResourcePackage extends RpcRequest
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
    public $action = 'CreateResourcePackage';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withPackageType() instead.
     *
     * @param string $packageType
     *
     * @return $this
     */
    public function setPackageType($packageType)
    {
        return $this->withPackageType($packageType);
    }

    /**
     * @param string $packageType
     *
     * @return $this
     */
    public function withPackageType($packageType)
    {
        $this->data['PackageType'] = $packageType;
        $this->options['query']['PackageType'] = $packageType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEffectiveDate() instead.
     *
     * @param string $effectiveDate
     *
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        return $this->withEffectiveDate($effectiveDate);
    }

    /**
     * @param string $effectiveDate
     *
     * @return $this
     */
    public function withEffectiveDate($effectiveDate)
    {
        $this->data['EffectiveDate'] = $effectiveDate;
        $this->options['query']['EffectiveDate'] = $effectiveDate;

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
