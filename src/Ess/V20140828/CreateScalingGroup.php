<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateScalingGroup
 *
 * @method string getMultiAZPolicy()
 * @method string getDBInstanceIds()
 * @method string getLaunchTemplateId()
 * @method string getLoadBalancerIds()
 * @method string getHealthCheckType()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
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
class CreateScalingGroup extends RpcRequest
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
    public $action = 'CreateScalingGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withMultiAZPolicy() instead.
     *
     * @param string $multiAZPolicy
     *
     * @return $this
     */
    public function setMultiAZPolicy($multiAZPolicy)
    {
        return $this->withMultiAZPolicy($multiAZPolicy);
    }

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
     * @deprecated deprecated since version 2.0, Use withDBInstanceIds() instead.
     *
     * @param string $dBInstanceIds
     *
     * @return $this
     */
    public function setDBInstanceIds($dBInstanceIds)
    {
        return $this->withDBInstanceIds($dBInstanceIds);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerIds() instead.
     *
     * @param string $loadBalancerIds
     *
     * @return $this
     */
    public function setLoadBalancerIds($loadBalancerIds)
    {
        return $this->withLoadBalancerIds($loadBalancerIds);
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
     * @deprecated deprecated since version 2.0, Use withScalingPolicy() instead.
     *
     * @param string $scalingPolicy
     *
     * @return $this
     */
    public function setScalingPolicy($scalingPolicy)
    {
        return $this->withScalingPolicy($scalingPolicy);
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
     * @deprecated deprecated since version 2.0, Use getLifecycleHook() instead.
     *
     * @return array
     */
    public function getLifecycleHooks()
    {
        return $this->getLifecycleHook();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLifecycleHook() instead.
     *
     * @param array $lifecycleHooks
     *
     * @return $this
     */
    public function setLifecycleHooks(array $lifecycleHooks)
    {
        return $this->withLifecycleHook($lifecycleHooks);
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
     * @deprecated deprecated since version 2.0, Use getVServerGroup() instead.
     *
     * @return array
     */
    public function getVServerGroups()
    {
        return $this->getVServerGroup();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVServerGroup() instead.
     *
     * @param array $vServerGroups
     *
     * @return $this
     */
    public function setVServerGroups(array $vServerGroups)
    {
        return $this->withVServerGroup($vServerGroups);
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
