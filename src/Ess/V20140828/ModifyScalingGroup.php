<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api ModifyScalingGroup
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
class ModifyScalingGroup extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
