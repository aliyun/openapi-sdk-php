<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getMultiAZPolicy()
 * @method $this withMultiAZPolicy($value)
 * @method string getDBInstanceIds()
 * @method $this withDBInstanceIds($value)
 * @method string getLaunchTemplateId()
 * @method $this withLaunchTemplateId($value)
 * @method string getLoadBalancerIds()
 * @method $this withLoadBalancerIds($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupName()
 * @method $this withScalingGroupName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getVSwitchIds()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLaunchTemplateVersion()
 * @method $this withLaunchTemplateVersion($value)
 * @method string getScalingPolicy()
 * @method $this withScalingPolicy($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method array getLifecycleHook()
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
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
