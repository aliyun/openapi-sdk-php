<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api CreateInstance
 *
 * @method string getResourceOwnerId()
 * @method string getHpcClusterId()
 * @method string getSecurityEnhancementStrategy()
 * @method string getKeyPairName()
 * @method string getSpotPriceLimit()
 * @method string getDeletionProtection()
 * @method string getResourceGroupId()
 * @method string getHostName()
 * @method string getPassword()
 * @method array getTag()
 * @method string getAutoRenewPeriod()
 * @method string getNodeControllerId()
 * @method string getPeriod()
 * @method string getDryRun()
 * @method string getOwnerId()
 * @method string getCapacityReservationPreference()
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getSpotStrategy()
 * @method string getPeriodUnit()
 * @method string getInstanceName()
 * @method string getAutoRenew()
 * @method string getInternetChargeType()
 * @method string getZoneId()
 * @method string getInternetMaxBandwidthIn()
 * @method string getUseAdditionalService()
 * @method string getImageId()
 * @method string getClientToken()
 * @method string getVlanId()
 * @method string getSpotInterruptionBehavior()
 * @method string getIoOptimized()
 * @method string getSecurityGroupId()
 * @method string getInternetMaxBandwidthOut()
 * @method string getDescription()
 * @method string getSystemDiskCategory()
 * @method string getCapacityReservationId()
 * @method string getUserData()
 * @method string getPasswordInherit()
 * @method string getInstanceType()
 * @method string getHibernationConfigured()
 * @method array getArn()
 * @method string getInstanceChargeType()
 * @method string getDeploymentSetId()
 * @method string getInnerIpAddress()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSystemDiskDiskName()
 * @method string getRamRoleName()
 * @method string getDedicatedHostId()
 * @method string getClusterId()
 * @method string getCreditSpecification()
 * @method array getDataDisk()
 * @method string getSystemDiskSize()
 * @method string getSystemDiskDescription()
 */
class CreateInstance extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

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
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function withHpcClusterId($hpcClusterId)
    {
        $this->data['HpcClusterId'] = $hpcClusterId;
        $this->options['query']['HpcClusterId'] = $hpcClusterId;

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
     * @param string $deletionProtection
     *
     * @return $this
     */
    public function withDeletionProtection($deletionProtection)
    {
        $this->data['DeletionProtection'] = $deletionProtection;
        $this->options['query']['DeletionProtection'] = $deletionProtection;

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
     * @param string $password
     *
     * @return $this
     */
    public function withPassword($password)
    {
        $this->data['Password'] = $password;
        $this->options['query']['Password'] = $password;

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
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function withAutoRenewPeriod($autoRenewPeriod)
    {
        $this->data['AutoRenewPeriod'] = $autoRenewPeriod;
        $this->options['query']['AutoRenewPeriod'] = $autoRenewPeriod;

        return $this;
    }

    /**
     * @param string $nodeControllerId
     *
     * @return $this
     */
    public function withNodeControllerId($nodeControllerId)
    {
        $this->data['NodeControllerId'] = $nodeControllerId;
        $this->options['query']['NodeControllerId'] = $nodeControllerId;

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
     * @param string $dryRun
     *
     * @return $this
     */
    public function withDryRun($dryRun)
    {
        $this->data['DryRun'] = $dryRun;
        $this->options['query']['DryRun'] = $dryRun;

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
     * @param string $capacityReservationPreference
     *
     * @return $this
     */
    public function withCapacityReservationPreference($capacityReservationPreference)
    {
        $this->data['CapacityReservationPreference'] = $capacityReservationPreference;
        $this->options['query']['CapacityReservationPreference'] = $capacityReservationPreference;

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
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function withPrivateIpAddress($privateIpAddress)
    {
        $this->data['PrivateIpAddress'] = $privateIpAddress;
        $this->options['query']['PrivateIpAddress'] = $privateIpAddress;

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
     * @param string $periodUnit
     *
     * @return $this
     */
    public function withPeriodUnit($periodUnit)
    {
        $this->data['PeriodUnit'] = $periodUnit;
        $this->options['query']['PeriodUnit'] = $periodUnit;

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
     * @param string $autoRenew
     *
     * @return $this
     */
    public function withAutoRenew($autoRenew)
    {
        $this->data['AutoRenew'] = $autoRenew;
        $this->options['query']['AutoRenew'] = $autoRenew;

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
     * @param string $useAdditionalService
     *
     * @return $this
     */
    public function withUseAdditionalService($useAdditionalService)
    {
        $this->data['UseAdditionalService'] = $useAdditionalService;
        $this->options['query']['UseAdditionalService'] = $useAdditionalService;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $vlanId
     *
     * @return $this
     */
    public function withVlanId($vlanId)
    {
        $this->data['VlanId'] = $vlanId;
        $this->options['query']['VlanId'] = $vlanId;

        return $this;
    }

    /**
     * @param string $spotInterruptionBehavior
     *
     * @return $this
     */
    public function withSpotInterruptionBehavior($spotInterruptionBehavior)
    {
        $this->data['SpotInterruptionBehavior'] = $spotInterruptionBehavior;
        $this->options['query']['SpotInterruptionBehavior'] = $spotInterruptionBehavior;

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
     * @param string $capacityReservationId
     *
     * @return $this
     */
    public function withCapacityReservationId($capacityReservationId)
    {
        $this->data['CapacityReservationId'] = $capacityReservationId;
        $this->options['query']['CapacityReservationId'] = $capacityReservationId;

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
     * @param string $hibernationConfigured
     *
     * @return $this
     */
    public function withHibernationConfigured($hibernationConfigured)
    {
        $this->data['HibernationConfigured'] = $hibernationConfigured;
        $this->options['query']['HibernationConfigured'] = $hibernationConfigured;

        return $this;
    }

    /**
     * @param array $arn
     *
     * @return $this
     */
    public function withArn(array $arn)
    {
        $this->data['Arn'] = $arn;
        foreach ($arn as $i => $iValue) {
            $this->options['query']['Arn.' . ($i + 1) . '.Rolearn'] = $arn[$i]['Rolearn'];
            $this->options['query']['Arn.' . ($i + 1) . '.RoleType'] = $arn[$i]['RoleType'];
            $this->options['query']['Arn.' . ($i + 1) . '.AssumeRoleFor'] = $arn[$i]['AssumeRoleFor'];
        }

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
     * @param string $deploymentSetId
     *
     * @return $this
     */
    public function withDeploymentSetId($deploymentSetId)
    {
        $this->data['DeploymentSetId'] = $deploymentSetId;
        $this->options['query']['DeploymentSetId'] = $deploymentSetId;

        return $this;
    }

    /**
     * @param string $innerIpAddress
     *
     * @return $this
     */
    public function withInnerIpAddress($innerIpAddress)
    {
        $this->data['InnerIpAddress'] = $innerIpAddress;
        $this->options['query']['InnerIpAddress'] = $innerIpAddress;

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
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function withDedicatedHostId($dedicatedHostId)
    {
        $this->data['DedicatedHostId'] = $dedicatedHostId;
        $this->options['query']['DedicatedHostId'] = $dedicatedHostId;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $creditSpecification
     *
     * @return $this
     */
    public function withCreditSpecification($creditSpecification)
    {
        $this->data['CreditSpecification'] = $creditSpecification;
        $this->options['query']['CreditSpecification'] = $creditSpecification;

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
            $this->options['query']['DataDisk.' . ($i + 1) . '.DiskName'] = $dataDisk[$i]['DiskName'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.SnapshotId'] = $dataDisk[$i]['SnapshotId'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Size'] = $dataDisk[$i]['Size'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Encrypted'] = $dataDisk[$i]['Encrypted'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Description'] = $dataDisk[$i]['Description'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.Category'] = $dataDisk[$i]['Category'];
            $this->options['query']['DataDisk.' . ($i + 1) . '.KMSKeyId'] = $dataDisk[$i]['KMSKeyId'];
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
