<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method array getDataDiskCategory()
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getNetworkCategory()
 * @method $this withNetworkCategory($value)
 * @method string getAliUid()
 * @method $this withAliUid($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getBid()
 * @method $this withBid($value)
 */
class DescribeResourceCreationCapacity extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
}
