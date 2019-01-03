<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateInstance
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
 * @method string getUserData()
 * @method string getPasswordInherit()
 * @method string getInstanceType()
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
class CreateInstance extends RpcRequest
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
    public $action = 'CreateInstance';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withHpcClusterId() instead.
     *
     * @param string $hpcClusterId
     *
     * @return $this
     */
    public function setHpcClusterId($hpcClusterId)
    {
        return $this->withHpcClusterId($hpcClusterId);
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
     * @deprecated deprecated since version 2.0, Use withSecurityEnhancementStrategy() instead.
     *
     * @param string $securityEnhancementStrategy
     *
     * @return $this
     */
    public function setSecurityEnhancementStrategy($securityEnhancementStrategy)
    {
        return $this->withSecurityEnhancementStrategy($securityEnhancementStrategy);
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
     * @deprecated deprecated since version 2.0, Use withKeyPairName() instead.
     *
     * @param string $keyPairName
     *
     * @return $this
     */
    public function setKeyPairName($keyPairName)
    {
        return $this->withKeyPairName($keyPairName);
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
     * @deprecated deprecated since version 2.0, Use withSpotPriceLimit() instead.
     *
     * @param string $spotPriceLimit
     *
     * @return $this
     */
    public function setSpotPriceLimit($spotPriceLimit)
    {
        return $this->withSpotPriceLimit($spotPriceLimit);
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
     * @deprecated deprecated since version 2.0, Use withDeletionProtection() instead.
     *
     * @param string $deletionProtection
     *
     * @return $this
     */
    public function setDeletionProtection($deletionProtection)
    {
        return $this->withDeletionProtection($deletionProtection);
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
     * @deprecated deprecated since version 2.0, Use withResourceGroupId() instead.
     *
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        return $this->withResourceGroupId($resourceGroupId);
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
     * @deprecated deprecated since version 2.0, Use withHostName() instead.
     *
     * @param string $hostName
     *
     * @return $this
     */
    public function setHostName($hostName)
    {
        return $this->withHostName($hostName);
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
     * @deprecated deprecated since version 2.0, Use withPassword() instead.
     *
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        return $this->withPassword($password);
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
     * @deprecated deprecated since version 2.0, Use getTag() instead.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->getTag();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        return $this->withTag($tags);
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
     * @deprecated deprecated since version 2.0, Use withAutoRenewPeriod() instead.
     *
     * @param string $autoRenewPeriod
     *
     * @return $this
     */
    public function setAutoRenewPeriod($autoRenewPeriod)
    {
        return $this->withAutoRenewPeriod($autoRenewPeriod);
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
     * @deprecated deprecated since version 2.0, Use withNodeControllerId() instead.
     *
     * @param string $nodeControllerId
     *
     * @return $this
     */
    public function setNodeControllerId($nodeControllerId)
    {
        return $this->withNodeControllerId($nodeControllerId);
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
     * @deprecated deprecated since version 2.0, Use withDryRun() instead.
     *
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        return $this->withDryRun($dryRun);
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
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        return $this->withVSwitchId($vSwitchId);
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
     * @deprecated deprecated since version 2.0, Use withPrivateIpAddress() instead.
     *
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        return $this->withPrivateIpAddress($privateIpAddress);
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
     * @deprecated deprecated since version 2.0, Use withSpotStrategy() instead.
     *
     * @param string $spotStrategy
     *
     * @return $this
     */
    public function setSpotStrategy($spotStrategy)
    {
        return $this->withSpotStrategy($spotStrategy);
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
     * @deprecated deprecated since version 2.0, Use withPeriodUnit() instead.
     *
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        return $this->withPeriodUnit($periodUnit);
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
     * @deprecated deprecated since version 2.0, Use withInstanceName() instead.
     *
     * @param string $instanceName
     *
     * @return $this
     */
    public function setInstanceName($instanceName)
    {
        return $this->withInstanceName($instanceName);
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
     * @deprecated deprecated since version 2.0, Use withAutoRenew() instead.
     *
     * @param string $autoRenew
     *
     * @return $this
     */
    public function setAutoRenew($autoRenew)
    {
        return $this->withAutoRenew($autoRenew);
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
     * @deprecated deprecated since version 2.0, Use withZoneId() instead.
     *
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        return $this->withZoneId($zoneId);
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
     * @deprecated deprecated since version 2.0, Use withInternetMaxBandwidthIn() instead.
     *
     * @param string $internetMaxBandwidthIn
     *
     * @return $this
     */
    public function setInternetMaxBandwidthIn($internetMaxBandwidthIn)
    {
        return $this->withInternetMaxBandwidthIn($internetMaxBandwidthIn);
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
     * @deprecated deprecated since version 2.0, Use withUseAdditionalService() instead.
     *
     * @param string $useAdditionalService
     *
     * @return $this
     */
    public function setUseAdditionalService($useAdditionalService)
    {
        return $this->withUseAdditionalService($useAdditionalService);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withVlanId() instead.
     *
     * @param string $vlanId
     *
     * @return $this
     */
    public function setVlanId($vlanId)
    {
        return $this->withVlanId($vlanId);
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
     * @deprecated deprecated since version 2.0, Use withSpotInterruptionBehavior() instead.
     *
     * @param string $spotInterruptionBehavior
     *
     * @return $this
     */
    public function setSpotInterruptionBehavior($spotInterruptionBehavior)
    {
        return $this->withSpotInterruptionBehavior($spotInterruptionBehavior);
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
     * @deprecated deprecated since version 2.0, Use withSecurityGroupId() instead.
     *
     * @param string $securityGroupId
     *
     * @return $this
     */
    public function setSecurityGroupId($securityGroupId)
    {
        return $this->withSecurityGroupId($securityGroupId);
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
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
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
     * @deprecated deprecated since version 2.0, Use withUserData() instead.
     *
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        return $this->withUserData($userData);
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
     * @deprecated deprecated since version 2.0, Use withPasswordInherit() instead.
     *
     * @param string $passwordInherit
     *
     * @return $this
     */
    public function setPasswordInherit($passwordInherit)
    {
        return $this->withPasswordInherit($passwordInherit);
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
     * @deprecated deprecated since version 2.0, Use withInstanceChargeType() instead.
     *
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        return $this->withInstanceChargeType($instanceChargeType);
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
     * @deprecated deprecated since version 2.0, Use withDeploymentSetId() instead.
     *
     * @param string $deploymentSetId
     *
     * @return $this
     */
    public function setDeploymentSetId($deploymentSetId)
    {
        return $this->withDeploymentSetId($deploymentSetId);
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
     * @deprecated deprecated since version 2.0, Use withInnerIpAddress() instead.
     *
     * @param string $innerIpAddress
     *
     * @return $this
     */
    public function setInnerIpAddress($innerIpAddress)
    {
        return $this->withInnerIpAddress($innerIpAddress);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskDiskName() instead.
     *
     * @param string $systemDiskDiskName
     *
     * @return $this
     */
    public function setSystemDiskDiskName($systemDiskDiskName)
    {
        return $this->withSystemDiskDiskName($systemDiskDiskName);
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
     * @deprecated deprecated since version 2.0, Use withRamRoleName() instead.
     *
     * @param string $ramRoleName
     *
     * @return $this
     */
    public function setRamRoleName($ramRoleName)
    {
        return $this->withRamRoleName($ramRoleName);
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
     * @deprecated deprecated since version 2.0, Use withDedicatedHostId() instead.
     *
     * @param string $dedicatedHostId
     *
     * @return $this
     */
    public function setDedicatedHostId($dedicatedHostId)
    {
        return $this->withDedicatedHostId($dedicatedHostId);
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
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
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
     * @deprecated deprecated since version 2.0, Use withCreditSpecification() instead.
     *
     * @param string $creditSpecification
     *
     * @return $this
     */
    public function setCreditSpecification($creditSpecification)
    {
        return $this->withCreditSpecification($creditSpecification);
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
     * @deprecated deprecated since version 2.0, Use getDataDisk() instead.
     *
     * @return array
     */
    public function getDataDisks()
    {
        return $this->getDataDisk();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDataDisk() instead.
     *
     * @param array $dataDisks
     *
     * @return $this
     */
    public function setDataDisks(array $dataDisks)
    {
        return $this->withDataDisk($dataDisks);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskDescription() instead.
     *
     * @param string $systemDiskDescription
     *
     * @return $this
     */
    public function setSystemDiskDescription($systemDiskDescription)
    {
        return $this->withSystemDiskDescription($systemDiskDescription);
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
