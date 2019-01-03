<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyScalingGroup
 *
 * @method string getResourceOwnerId()
 * @method string getHealthCheckType()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
 * @method string getScalingGroupId()
 * @method array getVSwitchIds()
 * @method string getOwnerAccount()
 * @method string getActiveScalingConfigurationId()
 * @method string getMinSize()
 * @method string getOwnerId()
 * @method string getLaunchTemplateVersion()
 * @method string getMaxSize()
 * @method string getDefaultCooldown()
 * @method string getRemovalPolicy1()
 * @method string getRemovalPolicy2()
 */
class ModifyScalingGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'ModifyScalingGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @deprecated deprecated since version 2.0, Use withHealthCheckType() instead.
     *
     * @param string $healthCheckType
     *
     * @return $this
     */
    public function setHealthCheckType($healthCheckType)
    {
        return $this->withHealthCheckType($healthCheckType);
    }

    /**
     * @param string $healthCheckType
     *
     * @return $this
     */
    public function withHealthCheckType($healthCheckType)
    {
        $this->data['HealthCheckType'] = $healthCheckType;
        $this->options['query']['HealthCheckType'] = $healthCheckType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateId() instead.
     *
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        return $this->withLaunchTemplateId($launchTemplateId);
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
     * @deprecated deprecated since version 2.0, Use withScalingGroupName() instead.
     *
     * @param string $scalingGroupName
     *
     * @return $this
     */
    public function setScalingGroupName($scalingGroupName)
    {
        return $this->withScalingGroupName($scalingGroupName);
    }

    /**
     * @param string $scalingGroupName
     *
     * @return $this
     */
    public function withScalingGroupName($scalingGroupName)
    {
        $this->data['ScalingGroupName'] = $scalingGroupName;
        $this->options['query']['ScalingGroupName'] = $scalingGroupName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getVSwitchIds() instead.
     *
     * @return array
     */
    public function getVSwitchIdss()
    {
        return $this->getVSwitchIds();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchIds() instead.
     *
     * @param array $vSwitchIdss
     *
     * @return $this
     */
    public function setVSwitchIdss(array $vSwitchIdss)
    {
        return $this->withVSwitchIds($vSwitchIdss);
    }

    /**
     * @param array $vSwitchIds
     *
     * @return $this
     */
    public function withVSwitchIds(array $vSwitchIds)
    {
        $this->data['VSwitchIds'] = $vSwitchIds;
        foreach ($vSwitchIds as $i => $iValue) {
            $this->options['query']['VSwitchIds.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use withActiveScalingConfigurationId() instead.
     *
     * @param string $activeScalingConfigurationId
     *
     * @return $this
     */
    public function setActiveScalingConfigurationId($activeScalingConfigurationId)
    {
        return $this->withActiveScalingConfigurationId($activeScalingConfigurationId);
    }

    /**
     * @param string $activeScalingConfigurationId
     *
     * @return $this
     */
    public function withActiveScalingConfigurationId($activeScalingConfigurationId)
    {
        $this->data['ActiveScalingConfigurationId'] = $activeScalingConfigurationId;
        $this->options['query']['ActiveScalingConfigurationId'] = $activeScalingConfigurationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMinSize() instead.
     *
     * @param string $minSize
     *
     * @return $this
     */
    public function setMinSize($minSize)
    {
        return $this->withMinSize($minSize);
    }

    /**
     * @param string $minSize
     *
     * @return $this
     */
    public function withMinSize($minSize)
    {
        $this->data['MinSize'] = $minSize;
        $this->options['query']['MinSize'] = $minSize;

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
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateVersion() instead.
     *
     * @param string $launchTemplateVersion
     *
     * @return $this
     */
    public function setLaunchTemplateVersion($launchTemplateVersion)
    {
        return $this->withLaunchTemplateVersion($launchTemplateVersion);
    }

    /**
     * @param string $launchTemplateVersion
     *
     * @return $this
     */
    public function withLaunchTemplateVersion($launchTemplateVersion)
    {
        $this->data['LaunchTemplateVersion'] = $launchTemplateVersion;
        $this->options['query']['LaunchTemplateVersion'] = $launchTemplateVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withMaxSize() instead.
     *
     * @param string $maxSize
     *
     * @return $this
     */
    public function setMaxSize($maxSize)
    {
        return $this->withMaxSize($maxSize);
    }

    /**
     * @param string $maxSize
     *
     * @return $this
     */
    public function withMaxSize($maxSize)
    {
        $this->data['MaxSize'] = $maxSize;
        $this->options['query']['MaxSize'] = $maxSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDefaultCooldown() instead.
     *
     * @param string $defaultCooldown
     *
     * @return $this
     */
    public function setDefaultCooldown($defaultCooldown)
    {
        return $this->withDefaultCooldown($defaultCooldown);
    }

    /**
     * @param string $defaultCooldown
     *
     * @return $this
     */
    public function withDefaultCooldown($defaultCooldown)
    {
        $this->data['DefaultCooldown'] = $defaultCooldown;
        $this->options['query']['DefaultCooldown'] = $defaultCooldown;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemovalPolicy1() instead.
     *
     * @param string $removalPolicy1
     *
     * @return $this
     */
    public function setRemovalPolicy1($removalPolicy1)
    {
        return $this->withRemovalPolicy1($removalPolicy1);
    }

    /**
     * @param string $removalPolicy1
     *
     * @return $this
     */
    public function withRemovalPolicy1($removalPolicy1)
    {
        $this->data['RemovalPolicy1'] = $removalPolicy1;
        $this->options['query']['RemovalPolicy.1'] = $removalPolicy1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemovalPolicy2() instead.
     *
     * @param string $removalPolicy2
     *
     * @return $this
     */
    public function setRemovalPolicy2($removalPolicy2)
    {
        return $this->withRemovalPolicy2($removalPolicy2);
    }

    /**
     * @param string $removalPolicy2
     *
     * @return $this
     */
    public function withRemovalPolicy2($removalPolicy2)
    {
        $this->data['RemovalPolicy2'] = $removalPolicy2;
        $this->options['query']['RemovalPolicy.2'] = $removalPolicy2;

        return $this;
    }
}
