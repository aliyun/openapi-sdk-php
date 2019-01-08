<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeResourceCreationCapacity
 *
 * @method string getResourceOwnerId()
 * @method string getIoOptimized()
 * @method array getDataDiskCategory()
 * @method string getSystemDiskCategory()
 * @method string getInstanceType()
 * @method string getNetworkCategory()
 * @method string getAliUid()
 * @method string getInstanceChargeType()
 * @method string getAmount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSpotStrategy()
 * @method string getZoneId()
 * @method string getBid()
 */
class DescribeResourceCreationCapacity extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'DescribeResourceCreationCapacity';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

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
     * @param array $dataDiskCategory
     *
     * @return $this
     */
    public function withDataDiskCategory(array $dataDiskCategory)
    {
        $this->data['DataDiskCategory'] = $dataDiskCategory;
        foreach ($dataDiskCategory as $i => $iValue) {
            $this->options['query']['DataDiskCategory.' . ($i + 1)] = $iValue;
        }

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
        $this->options['query']['SystemDiskCategory'] = $systemDiskCategory;

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
     * @param string $networkCategory
     *
     * @return $this
     */
    public function withNetworkCategory($networkCategory)
    {
        $this->data['NetworkCategory'] = $networkCategory;
        $this->options['query']['NetworkCategory'] = $networkCategory;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['AliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function withInstanceChargeType($instanceChargeType)
    {
        $this->data['InstanceChargeType'] = $instanceChargeType;
        $this->options['query']['InstanceChargeType'] = $instanceChargeType;

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
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function withSpotStrategy($spotStrategy)
    {
        $this->data['SpotStrategy'] = $spotStrategy;
        $this->options['query']['SpotStrategy'] = $spotStrategy;

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
     * @param string $bid
     *
     * @return $this
     */
    public function withBid($bid)
    {
        $this->data['Bid'] = $bid;
        $this->options['query']['Bid'] = $bid;

        return $this;
    }
}
