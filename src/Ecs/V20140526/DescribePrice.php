<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDataDisk3Category()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method string getDataDisk4Category()
 * @method string getDataDisk4Size()
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDataDisk2Size()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getDataDisk1Category()
 * @method string getSystemDiskSize()
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInstanceNetworkType()
 * @method $this withInstanceNetworkType($value)
 */
class DescribePrice extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $dataDisk3Size
     *
     * @return $this
     */
    public function withDataDisk3Size($dataDisk3Size)
    {
        $this->data['DataDisk3Size'] = $dataDisk3Size;
        $this->options['query']['DataDisk.3.Size'] = $dataDisk3Size;

        return $this;
    }

    /**
     * @param string $dataDisk3Category
     *
     * @return $this
     */
    public function withDataDisk3Category($dataDisk3Category)
    {
        $this->data['DataDisk3Category'] = $dataDisk3Category;
        $this->options['query']['DataDisk.3.Category'] = $dataDisk3Category;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function withSystemDiskCategory($systemDiskCategory)
    {
        $this->data['SystemDiskCategory'] = $systemDiskCategory;
        $this->options['query']['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param string $dataDisk4Category
     *
     * @return $this
     */
    public function withDataDisk4Category($dataDisk4Category)
    {
        $this->data['DataDisk4Category'] = $dataDisk4Category;
        $this->options['query']['DataDisk.4.Category'] = $dataDisk4Category;

        return $this;
    }

    /**
     * @param string $dataDisk4Size
     *
     * @return $this
     */
    public function withDataDisk4Size($dataDisk4Size)
    {
        $this->data['DataDisk4Size'] = $dataDisk4Size;
        $this->options['query']['DataDisk.4.Size'] = $dataDisk4Size;

        return $this;
    }

    /**
     * @param string $dataDisk2Category
     *
     * @return $this
     */
    public function withDataDisk2Category($dataDisk2Category)
    {
        $this->data['DataDisk2Category'] = $dataDisk2Category;
        $this->options['query']['DataDisk.2.Category'] = $dataDisk2Category;

        return $this;
    }

    /**
     * @param string $dataDisk1Size
     *
     * @return $this
     */
    public function withDataDisk1Size($dataDisk1Size)
    {
        $this->data['DataDisk1Size'] = $dataDisk1Size;
        $this->options['query']['DataDisk.1.Size'] = $dataDisk1Size;

        return $this;
    }

    /**
     * @param string $dataDisk2Size
     *
     * @return $this
     */
    public function withDataDisk2Size($dataDisk2Size)
    {
        $this->data['DataDisk2Size'] = $dataDisk2Size;
        $this->options['query']['DataDisk.2.Size'] = $dataDisk2Size;

        return $this;
    }

    /**
     * @param string $dataDisk1Category
     *
     * @return $this
     */
    public function withDataDisk1Category($dataDisk1Category)
    {
        $this->data['DataDisk1Category'] = $dataDisk1Category;
        $this->options['query']['DataDisk.1.Category'] = $dataDisk1Category;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function withSystemDiskSize($systemDiskSize)
    {
        $this->data['SystemDiskSize'] = $systemDiskSize;
        $this->options['query']['SystemDisk.Size'] = $systemDiskSize;

        return $this;
    }
}
