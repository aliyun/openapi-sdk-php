<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api CreateLaunchTemplateVersion
 *
 * @method string getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method string getSecurityEnhancementStrategy()
 * @method string getNetworkType()
 * @method string getKeyPairName()
 * @method string getSpotPriceLimit()
 * @method string getImageOwnerAlias()
 * @method string getResourceGroupId()
 * @method string getHostName()
 * @method string getSystemDiskIops()
 * @method array getTag()
 * @method string getPeriod()
 * @method string getLaunchTemplateId()
 * @method string getOwnerId()
 * @method string getVSwitchId()
 * @method string getSpotStrategy()
 * @method string getInstanceName()
 * @method string getInternetChargeType()
 * @method string getZoneId()
 * @method string getInternetMaxBandwidthIn()
 * @method string getVersionDescription()
 * @method string getImageId()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getDescription()
 * @method string getSystemDiskCategory()
 * @method string getUserData()
 * @method string getPasswordInherit()
 * @method string getInstanceType()
 * @method string getInstanceChargeType()
 * @method string getEnableVmOsConfig()
 * @method array getNetworkInterface()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method string getAutoReleaseTime()
 * @method string getSpotDuration()
 * @method array getDataDisk()
 * @method string getSystemDiskSize()
 * @method string getVpcId()
 * @method string getSystemDiskDescription()
 */
class CreateLaunchTemplateVersion extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function withLaunchTemplateName($launchTemplateName)
    {
        $this->data['LaunchTemplateName'] = $launchTemplateName;
        $this->options['query']['LaunchTemplateName'] = $launchTemplateName;

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
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function withSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        $this->data['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;
        $this->options['query']['SecurityEnhancementStrategy'] = $securityEnhancementStrategy;

        return $this;
    }

    /**
     * @param string $networkType
     *
     * @return $this
     */
    public function withNetworkType($networkType)
    {
        $this->data['NetworkType'] = $networkType;
        $this->options['query']['NetworkType'] = $networkType;

        return $this;
    }

    /**
     * @param string $keyPairName
     *
     * @return $this
     */
    public function withKeyPairName($keyPairName)
    {
        $this->data['KeyPairName'] = $keyPairName;
        $this->options['query']['KeyPairName'] = $keyPairName;

        return $this;
    }

    /**
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function withSpotPriceLimit($spotPriceLimit)
    {
        $this->data['SpotPriceLimit'] = $spotPriceLimit;
        $this->options['query']['SpotPriceLimit'] = $spotPriceLimit;

        return $this;
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $hostName
     *
     * @return $this
     */
    public function withHostName($hostName)
    {
        $this->data['HostName'] = $hostName;
        $this->options['query']['HostName'] = $hostName;

        return $this;
    }

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
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function withLaunchTemplateId($launchTemplateId)
    {
        $this->data['LaunchTemplateId'] = $launchTemplateId;
        $this->options['query']['LaunchTemplateId'] = $launchTemplateId;

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
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId($vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        $this->options['query']['VSwitchId'] = $vSwitchId;

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
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

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
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function withInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        $this->data['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;
        $this->options['query']['InternetMaxBandwidthIn'] = $internetMaxBandwidthIn;

        return $this;
    }

    /**
     * @param string $versionDescription
     *
     * @return $this
     */
    public function withVersionDescription($versionDescription)
    {
        $this->data['VersionDescription'] = $versionDescription;
        $this->options['query']['VersionDescription'] = $versionDescription;

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
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function withSecurityGroupId($securityGroupId)
    {
        $this->data['SecurityGroupId'] = $securityGroupId;
        $this->options['query']['SecurityGroupId'] = $securityGroupId;

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
     * @param string $userData
     *
     * @return $this
     */
    public function withUserData($userData)
    {
        $this->data['UserData'] = $userData;
        $this->options['query']['UserData'] = $userData;

        return $this;
    }

    /**
     * @param string $passwordInherit
     *
     * @return $this
     */
    public function withPasswordInherit($passwordInherit)
    {
        $this->data['PasswordInherit'] = $passwordInherit;
        $this->options['query']['PasswordInherit'] = $passwordInherit;

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
     * @param string $enableVmOsConfig
     *
     * @return $this
     */
    public function withEnableVmOsConfig($enableVmOsConfig)
    {
        $this->data['EnableVmOsConfig'] = $enableVmOsConfig;
        $this->options['query']['EnableVmOsConfig'] = $enableVmOsConfig;

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
     * @param string $ramRoleName
     *
     * @return $this
     */
    public function withRamRoleName($ramRoleName)
    {
        $this->data['RamRoleName'] = $ramRoleName;
        $this->options['query']['RamRoleName'] = $ramRoleName;

        return $this;
    }

    /**
     * @param string $autoReleaseTime
     *
     * @return $this
     */
    public function withAutoReleaseTime($autoReleaseTime)
    {
        $this->data['AutoReleaseTime'] = $autoReleaseTime;
        $this->options['query']['AutoReleaseTime'] = $autoReleaseTime;

        return $this;
    }

    /**
     * @param string $spotDuration
     *
     * @return $this
     */
    public function withSpotDuration($spotDuration)
    {
        $this->data['SpotDuration'] = $spotDuration;
        $this->options['query']['SpotDuration'] = $spotDuration;

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
