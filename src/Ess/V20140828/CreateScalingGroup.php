<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api CreateScalingGroup
 *
 * @method string getMultiAZPolicy()
 * @method string getDBInstanceIds()
 * @method string getLaunchTemplateId()
 * @method string getLoadBalancerIds()
 * @method string getHealthCheckType()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
 * @method string getClientToken()
 * @method array getVSwitchIds()
 * @method string getOwnerAccount()
 * @method string getMinSize()
 * @method string getOwnerId()
 * @method string getLaunchTemplateVersion()
 * @method string getScalingPolicy()
 * @method string getVSwitchId()
 * @method string getMaxSize()
 * @method array getLifecycleHook()
 * @method string getDefaultCooldown()
 * @method string getRemovalPolicy1()
 * @method array getVServerGroup()
 * @method string getRemovalPolicy2()
 */
class CreateScalingGroup extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $multiAZPolicy
     *
     * @return $this
     */
    public function withMultiAZPolicy($multiAZPolicy)
    {
        $this->data['MultiAZPolicy'] = $multiAZPolicy;
        $this->options['query']['MultiAZPolicy'] = $multiAZPolicy;

        return $this;
    }

    /**
     * @param string $dBInstanceIds
     *
     * @return $this
     */
    public function withDBInstanceIds($dBInstanceIds)
    {
        $this->data['DBInstanceIds'] = $dBInstanceIds;
        $this->options['query']['DBInstanceIds'] = $dBInstanceIds;

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
     * @param string $loadBalancerIds
     *
     * @return $this
     */
    public function withLoadBalancerIds($loadBalancerIds)
    {
        $this->data['LoadBalancerIds'] = $loadBalancerIds;
        $this->options['query']['LoadBalancerIds'] = $loadBalancerIds;

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
     * @param string $scalingPolicy
     *
     * @return $this
     */
    public function withScalingPolicy($scalingPolicy)
    {
        $this->data['ScalingPolicy'] = $scalingPolicy;
        $this->options['query']['ScalingPolicy'] = $scalingPolicy;

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
     * @param array $lifecycleHook
     *
     * @return $this
     */
    public function withLifecycleHook(array $lifecycleHook)
    {
        $this->data['LifecycleHook'] = $lifecycleHook;
        foreach ($lifecycleHook as $i => $iValue) {
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.DefaultResult'] = $lifecycleHook[$i]['DefaultResult'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.LifecycleHookName'] = $lifecycleHook[$i]['LifecycleHookName'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.HeartbeatTimeout'] = $lifecycleHook[$i]['HeartbeatTimeout'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.NotificationArn'] = $lifecycleHook[$i]['NotificationArn'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.NotificationMetadata'] = $lifecycleHook[$i]['NotificationMetadata'];
            $this->options['query']['LifecycleHook.' . ($i + 1) . '.LifecycleTransition'] = $lifecycleHook[$i]['LifecycleTransition'];
        }

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
     * @param array $vServerGroup
     *
     * @return $this
     */
    public function withVServerGroup(array $vServerGroup)
    {
        $this->data['VServerGroup'] = $vServerGroup;
        foreach ($vServerGroup as $i => $iValue) {
            $this->options['query']['VServerGroup.' . ($i + 1) . '.LoadBalancerId'] = $vServerGroup[$i]['LoadBalancerId'];
            foreach ($vServerGroup[$i]['VServerGroupAttributes'] as $j => $jValue) {
                $this->options['query']['VServerGroup.' . ($i + 1) . '.VServerGroupAttribute.' . ($j + 1)] = $jValue;
            }
        }

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
