<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribePrice
 *
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getDataDisk3Category()
 * @method string getIoOptimized()
 * @method string getInternetMaxBandwidthOut()
 * @method string getSystemDiskCategory()
 * @method string getDataDisk4Category()
 * @method string getDataDisk4Size()
 * @method string getPriceUnit()
 * @method string getInstanceType()
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getPeriod()
 * @method string getAmount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDataDisk2Size()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getDataDisk1Category()
 * @method string getSystemDiskSize()
 * @method string getInternetChargeType()
 * @method string getInstanceNetworkType()
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
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function withImageId($imageId)
    {
        $this->data['ImageId'] = $imageId;
        $this->options['query']['ImageId'] = $imageId;

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
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function withIoOptimized($ioOptimized)
    {
        $this->data['IoOptimized'] = $ioOptimized;
        $this->options['query']['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function withInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->data['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->options['query']['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

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
     * @param string $priceUnit
     *
     * @return $this
     */
    public function withPriceUnit($priceUnit)
    {
        $this->data['PriceUnit'] = $priceUnit;
        $this->options['query']['PriceUnit'] = $priceUnit;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function withInstanceType($instanceType)
    {
        $this->data['InstanceType'] = $instanceType;
        $this->options['query']['InstanceType'] = $instanceType;

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
     * @param string $amount
     *
     * @return $this
     */
    public function withAmount($amount)
    {
        $this->data['Amount'] = $amount;
        $this->options['query']['Amount'] = $amount;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

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

    /**
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function withInternetChargeType($internetChargeType)
    {
        $this->data['InternetChargeType'] = $internetChargeType;
        $this->options['query']['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function withInstanceNetworkType($instanceNetworkType)
    {
        $this->data['InstanceNetworkType'] = $instanceNetworkType;
        $this->options['query']['InstanceNetworkType'] = $instanceNetworkType;

        return $this;
    }
}
