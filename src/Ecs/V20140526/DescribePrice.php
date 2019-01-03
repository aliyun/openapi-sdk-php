<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePrice
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
class DescribePrice extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribePrice';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDataDisk3Size() instead.
     *
     * @param string $dataDisk3Size
     *
     * @return $this
     */
    public function setDataDisk3Size($dataDisk3Size)
    {
        return $this->withDataDisk3Size($dataDisk3Size);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withImageId() instead.
     *
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        return $this->withImageId($imageId);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk3Category() instead.
     *
     * @param string $dataDisk3Category
     *
     * @return $this
     */
    public function setDataDisk3Category($dataDisk3Category)
    {
        return $this->withDataDisk3Category($dataDisk3Category);
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
     * @deprecated deprecated since version 2.0, Use withIoOptimized() instead.
     *
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        return $this->withIoOptimized($ioOptimized);
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
     * @deprecated deprecated since version 2.0, Use withInternetMaxBandwidthOut() instead.
     *
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        return $this->withInternetMaxBandwidthOut($internetMaxBandwidthOut);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskCategory() instead.
     *
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        return $this->withSystemDiskCategory($systemDiskCategory);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk4Category() instead.
     *
     * @param string $dataDisk4Category
     *
     * @return $this
     */
    public function setDataDisk4Category($dataDisk4Category)
    {
        return $this->withDataDisk4Category($dataDisk4Category);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk4Size() instead.
     *
     * @param string $dataDisk4Size
     *
     * @return $this
     */
    public function setDataDisk4Size($dataDisk4Size)
    {
        return $this->withDataDisk4Size($dataDisk4Size);
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
     * @deprecated deprecated since version 2.0, Use withPriceUnit() instead.
     *
     * @param string $priceUnit
     *
     * @return $this
     */
    public function setPriceUnit($priceUnit)
    {
        return $this->withPriceUnit($priceUnit);
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
     * @deprecated deprecated since version 2.0, Use withInstanceType() instead.
     *
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        return $this->withInstanceType($instanceType);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk2Category() instead.
     *
     * @param string $dataDisk2Category
     *
     * @return $this
     */
    public function setDataDisk2Category($dataDisk2Category)
    {
        return $this->withDataDisk2Category($dataDisk2Category);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk1Size() instead.
     *
     * @param string $dataDisk1Size
     *
     * @return $this
     */
    public function setDataDisk1Size($dataDisk1Size)
    {
        return $this->withDataDisk1Size($dataDisk1Size);
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
     * @deprecated deprecated since version 2.0, Use withAmount() instead.
     *
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        return $this->withAmount($amount);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk2Size() instead.
     *
     * @param string $dataDisk2Size
     *
     * @return $this
     */
    public function setDataDisk2Size($dataDisk2Size)
    {
        return $this->withDataDisk2Size($dataDisk2Size);
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
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
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
     * @deprecated deprecated since version 2.0, Use withDataDisk1Category() instead.
     *
     * @param string $dataDisk1Category
     *
     * @return $this
     */
    public function setDataDisk1Category($dataDisk1Category)
    {
        return $this->withDataDisk1Category($dataDisk1Category);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskSize() instead.
     *
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        return $this->withSystemDiskSize($systemDiskSize);
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
     * @deprecated deprecated since version 2.0, Use withInternetChargeType() instead.
     *
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        return $this->withInternetChargeType($internetChargeType);
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
     * @deprecated deprecated since version 2.0, Use withInstanceNetworkType() instead.
     *
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        return $this->withInstanceNetworkType($instanceNetworkType);
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
