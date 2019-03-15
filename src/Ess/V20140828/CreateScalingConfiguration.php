<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method array getInstanceTypes()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method array getSpotPriceLimit()
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getImageName()
 * @method $this withImageName($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDeploymentSetId()
 * @method $this withDeploymentSetId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getDataDisk()
 * @method string getScalingConfigurationName()
 * @method $this withScalingConfigurationName($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getLoadBalancerWeight()
 * @method $this withLoadBalancerWeight($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getSystemDiskSize()
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 */
class CreateScalingConfiguration extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param array $instanceTypes
     *
     * @return $this
     */
    public function withInstanceTypes(array $instanceTypes)
    {
        $this->data['InstanceTypes'] = $instanceTypes;
        foreach ($instanceTypes as $i => $iValue) {
            $this->options['query']['InstanceTypes.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $spotPriceLimit
     *
     * @return $this
     */
    public function withSpotPriceLimit(array $spotPriceLimit)
    {
        $this->data['SpotPriceLimit'] = $spotPriceLimit;
        foreach ($spotPriceLimit as $i => $iValue) {
            $this->options['query']['SpotPriceLimit.' . ($i + 1) . '.InstanceType'] = $spotPriceLimit[$i]['InstanceType'];
            $this->options['query']['SpotPriceLimit.' . ($i + 1) . '.PriceLimit'] = $spotPriceLimit[$i]['PriceLimit'];
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
        $this->options['query']['SystemDisk.Category'] = $systemDiskCategory;

        return $this;
    }

    /**
     * @param array $dataDisk
     *
     * @return $this
     */
    public function withDataDisk(array $dataDisk)
    {
        $this->data['DataDisk'] = $dataDisk;
        foreach ($dataDisk as $i => $iValue) {
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $dataDisk[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $dataDisk[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $dataDisk[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Device'] = $dataDisk[$i]['Device'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $dataDisk[$i]['DeleteWithInstance'];
        }

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
