<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getLaunchTemplateName()
 * @method $this withLaunchTemplateName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityEnhancementStrategy()
 * @method $this withSecurityEnhancementStrategy($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getSystemDiskIops()
 * @method array getTemplateTag()
 * @method array getTag()
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getTemplateResourceGroupId()
 * @method $this withTemplateResourceGroupId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 * @method string getVersionDescription()
 * @method $this withVersionDescription($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method $this withUserData($value)
 * @method string getPasswordInherit()
 * @method $this withPasswordInherit($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getEnableVmOsConfig()
 * @method $this withEnableVmOsConfig($value)
 * @method array getNetworkInterface()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method $this withRamRoleName($value)
 * @method string getAutoReleaseTime()
 * @method $this withAutoReleaseTime($value)
 * @method string getSpotDuration()
 * @method $this withSpotDuration($value)
 * @method array getDataDisk()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSystemDiskDescription()
 */
class CreateLaunchTemplate extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $systemDiskIops
     *
     * @return $this
     */
    public function withSystemDiskIops($systemDiskIops)
    {
        $this->data['SystemDiskIops'] = $systemDiskIops;
        $this->options['query']['SystemDisk.Iops'] = $systemDiskIops;

        return $this;
    }

    /**
     * @param array $templateTag
     *
     * @return $this
     */
    public function withTemplateTag(array $templateTag)
    {
        $this->data['TemplateTag'] = $templateTag;
        foreach ($templateTag as $i => $iValue) {
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Key'] = $templateTag[$i]['Key'];
            $this->options['query']['TemplateTag.' . ($i + 1) . '.Value'] = $templateTag[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
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
     * @param array $networkInterface
     *
     * @return $this
     */
    public function withNetworkInterface(array $networkInterface)
    {
        $this->data['NetworkInterface'] = $networkInterface;
        foreach ($networkInterface as $i => $iValue) {
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.PrimaryIpAddress'] = $networkInterface[$i]['PrimaryIpAddress'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.VSwitchId'] = $networkInterface[$i]['VSwitchId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.SecurityGroupId'] = $networkInterface[$i]['SecurityGroupId'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.NetworkInterfaceName'] = $networkInterface[$i]['NetworkInterfaceName'];
            $this->options['query']['NetworkInterface.' . ($i + 1) . '.Description'] = $networkInterface[$i]['Description'];
        }

        return $this;
    }

    /**
     * @param string $systemDiskDiskName
     *
     * @return $this
     */
    public function withSystemDiskDiskName($systemDiskDiskName)
    {
        $this->data['SystemDiskDiskName'] = $systemDiskDiskName;
        $this->options['query']['SystemDisk.DiskName'] = $systemDiskDiskName;

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
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $dataDisk[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $dataDisk[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $dataDisk[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Encrypted'] = $dataDisk[$i]['Encrypted'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DiskName'] = $dataDisk[$i]['DiskName'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Description'] = $dataDisk[$i]['Description'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.DeleteWithInstance'] = $dataDisk[$i]['DeleteWithInstance'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Device'] = $dataDisk[$i]['Device'];
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

    /**
     * @param string $systemDiskDescription
     *
     * @return $this
     */
    public function withSystemDiskDescription($systemDiskDescription)
    {
        $this->data['SystemDiskDescription'] = $systemDiskDescription;
        $this->options['query']['SystemDisk.Description'] = $systemDiskDescription;

        return $this;
    }
}
