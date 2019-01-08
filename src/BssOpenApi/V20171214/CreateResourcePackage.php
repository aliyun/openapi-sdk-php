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
