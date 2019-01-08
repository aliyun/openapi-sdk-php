<?php

namespace AlibabaCloud\Ess;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ess based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ess
 *
 * @method V20140828\AttachDBInstances attachDBInstances(array $options = [])
 * @method V20140828\AttachInstances attachInstances(array $options = [])
 * @method V20140828\AttachLoadBalancers attachLoadBalancers(array $options = [])
 * @method V20140828\AttachVServerGroups attachVServerGroups(array $options = [])
 * @method V20140828\CheckScalingGroupAvailability checkScalingGroupAvailability(array $options = [])
 * @method V20140828\CompleteLifecycleAction completeLifecycleAction(array $options = [])
 * @method V20140828\CountScalingActivitiesInWorker countScalingActivitiesInWorker(array $options = [])
 * @method V20140828\CreateAlarm createAlarm(array $options = [])
 * @method V20140828\CreateLifecycleHook createLifecycleHook(array $options = [])
 * @method V20140828\CreateNotificationConfiguration createNotificationConfiguration(array $options = [])
 * @method V20140828\CreateScalingConfiguration createScalingConfiguration(array $options = [])
 * @method V20140828\CreateScalingGroup createScalingGroup(array $options = [])
 * @method V20140828\CreateScalingRule createScalingRule(array $options = [])
 * @method V20140828\CreateScheduledTask createScheduledTask(array $options = [])
 * @method V20140828\DeactivateScalingConfiguration deactivateScalingConfiguration(array $options = [])
 * @method V20140828\DeleteAlarm deleteAlarm(array $options = [])
 * @method V20140828\DeleteLifecycleHook deleteLifecycleHook(array $options = [])
 * @method V20140828\DeleteNotificationConfiguration deleteNotificationConfiguration(array $options = [])
 * @method V20140828\DeleteScalingConfiguration deleteScalingConfiguration(array $options = [])
 * @method V20140828\DeleteScalingGroup deleteScalingGroup(array $options = [])
 * @method V20140828\DeleteScalingRule deleteScalingRule(array $options = [])
 * @method V20140828\DeleteScheduledTask deleteScheduledTask(array $options = [])
 * @method V20140828\DescribeAccountAttributes describeAccountAttributes(array $options = [])
 * @method V20140828\DescribeAlarms describeAlarms(array $options = [])
 * @method V20140828\DescribeAlertConfig describeAlertConfig(array $options = [])
 * @method V20140828\DescribeCapacityHistory describeCapacityHistory(array $options = [])
 * @method V20140828\DescribeLifecycleHooks describeLifecycleHooks(array $options = [])
 * @method V20140828\DescribeLimitation describeLimitation(array $options = [])
 * @method V20140828\DescribeLoadBalancers describeLoadBalancers(array $options = [])
 * @method V20140828\DescribeNotificationConfigurations describeNotificationConfigurations(array $options = [])
 * @method V20140828\DescribeNotificationTypes describeNotificationTypes(array $options = [])
 * @method V20140828\DescribeRegions describeRegions(array $options = [])
 * @method V20140828\DescribeScalingActivities describeScalingActivities(array $options = [])
 * @method V20140828\DescribeScalingActivityDetail describeScalingActivityDetail(array $options = [])
 * @method V20140828\DescribeScalingConfigurations describeScalingConfigurations(array $options = [])
 * @method V20140828\DescribeScalingGroups describeScalingGroups(array $options = [])
 * @method V20140828\DescribeScalingInstances describeScalingInstances(array $options = [])
 * @method V20140828\DescribeScalingRules describeScalingRules(array $options = [])
 * @method V20140828\DescribeScheduledTasks describeScheduledTasks(array $options = [])
 * @method V20140828\DetachDBInstances detachDBInstances(array $options = [])
 * @method V20140828\DetachInstances detachInstances(array $options = [])
 * @method V20140828\DetachLoadBalancers detachLoadBalancers(array $options = [])
 * @method V20140828\DetachVServerGroups detachVServerGroups(array $options = [])
 * @method V20140828\DisableAlarm disableAlarm(array $options = [])
 * @method V20140828\DisableScalingGroup disableScalingGroup(array $options = [])
 * @method V20140828\EnableAlarm enableAlarm(array $options = [])
 * @method V20140828\EnableScalingGroup enableScalingGroup(array $options = [])
 * @method V20140828\EnterStandby enterStandby(array $options = [])
 * @method V20140828\ExecuteScalingRule executeScalingRule(array $options = [])
 * @method V20140828\ExitStandby exitStandby(array $options = [])
 * @method V20140828\ModifyAlarm modifyAlarm(array $options = [])
 * @method V20140828\ModifyAlertConfig modifyAlertConfig(array $options = [])
 * @method V20140828\ModifyLifecycleHook modifyLifecycleHook(array $options = [])
 * @method V20140828\ModifyNotificationConfiguration modifyNotificationConfiguration(array $options = [])
 * @method V20140828\ModifyScalingConfiguration modifyScalingConfiguration(array $options = [])
 * @method V20140828\ModifyScalingGroup modifyScalingGroup(array $options = [])
 * @method V20140828\ModifyScalingRule modifyScalingRule(array $options = [])
 * @method V20140828\ModifyScheduledTask modifyScheduledTask(array $options = [])
 * @method V20140828\OrderSucceededCallback orderSucceededCallback(array $options = [])
 * @method V20140828\RebalanceInstances rebalanceInstances(array $options = [])
 * @method V20140828\RecordLifecycleActionHeartbeat recordLifecycleActionHeartbeat(array $options = [])
 * @method V20140828\RemoveInstances removeInstances(array $options = [])
 * @method V20140828\SetInstancesProtection setInstancesProtection(array $options = [])
 * @method V20140828\SpiCallExecuteScalingRule spiCallExecuteScalingRule(array $options = [])
 * @method V20140828\UserOperation userOperation(array $options = [])
 * @method V20140828\VerifyAuthentication verifyAuthentication(array $options = [])
 * @method V20140828\VerifyUser verifyUser(array $options = [])
 */
class EssV20140828ApiResolver
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Ess\\V20140828';
}
