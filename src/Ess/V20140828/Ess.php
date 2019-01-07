<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ess based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ess\V20140828
 *
 * @method static AttachDBInstances attachDBInstances(array $options = [])
 * @method static AttachInstances attachInstances(array $options = [])
 * @method static AttachLoadBalancers attachLoadBalancers(array $options = [])
 * @method static AttachVServerGroups attachVServerGroups(array $options = [])
 * @method static CheckScalingGroupAvailability checkScalingGroupAvailability(array $options = [])
 * @method static CompleteLifecycleAction completeLifecycleAction(array $options = [])
 * @method static CountScalingActivitiesInWorker countScalingActivitiesInWorker(array $options = [])
 * @method static CreateAlarm createAlarm(array $options = [])
 * @method static CreateLifecycleHook createLifecycleHook(array $options = [])
 * @method static CreateNotificationConfiguration createNotificationConfiguration(array $options = [])
 * @method static CreateScalingConfiguration createScalingConfiguration(array $options = [])
 * @method static CreateScalingGroup createScalingGroup(array $options = [])
 * @method static CreateScalingRule createScalingRule(array $options = [])
 * @method static CreateScheduledTask createScheduledTask(array $options = [])
 * @method static DeactivateScalingConfiguration deactivateScalingConfiguration(array $options = [])
 * @method static DeleteAlarm deleteAlarm(array $options = [])
 * @method static DeleteLifecycleHook deleteLifecycleHook(array $options = [])
 * @method static DeleteNotificationConfiguration deleteNotificationConfiguration(array $options = [])
 * @method static DeleteScalingConfiguration deleteScalingConfiguration(array $options = [])
 * @method static DeleteScalingGroup deleteScalingGroup(array $options = [])
 * @method static DeleteScalingRule deleteScalingRule(array $options = [])
 * @method static DeleteScheduledTask deleteScheduledTask(array $options = [])
 * @method static DescribeAccountAttributes describeAccountAttributes(array $options = [])
 * @method static DescribeAlarms describeAlarms(array $options = [])
 * @method static DescribeAlertConfig describeAlertConfig(array $options = [])
 * @method static DescribeCapacityHistory describeCapacityHistory(array $options = [])
 * @method static DescribeLifecycleHooks describeLifecycleHooks(array $options = [])
 * @method static DescribeLimitation describeLimitation(array $options = [])
 * @method static DescribeLoadBalancers describeLoadBalancers(array $options = [])
 * @method static DescribeNotificationConfigurations describeNotificationConfigurations(array $options = [])
 * @method static DescribeNotificationTypes describeNotificationTypes(array $options = [])
 * @method static DescribeRegions describeRegions(array $options = [])
 * @method static DescribeScalingActivities describeScalingActivities(array $options = [])
 * @method static DescribeScalingActivityDetail describeScalingActivityDetail(array $options = [])
 * @method static DescribeScalingConfigurations describeScalingConfigurations(array $options = [])
 * @method static DescribeScalingGroups describeScalingGroups(array $options = [])
 * @method static DescribeScalingInstances describeScalingInstances(array $options = [])
 * @method static DescribeScalingRules describeScalingRules(array $options = [])
 * @method static DescribeScheduledTasks describeScheduledTasks(array $options = [])
 * @method static DetachDBInstances detachDBInstances(array $options = [])
 * @method static DetachInstances detachInstances(array $options = [])
 * @method static DetachLoadBalancers detachLoadBalancers(array $options = [])
 * @method static DetachVServerGroups detachVServerGroups(array $options = [])
 * @method static DisableAlarm disableAlarm(array $options = [])
 * @method static DisableScalingGroup disableScalingGroup(array $options = [])
 * @method static EnableAlarm enableAlarm(array $options = [])
 * @method static EnableScalingGroup enableScalingGroup(array $options = [])
 * @method static EnterStandby enterStandby(array $options = [])
 * @method static EssApiResolver essApiResolver(array $options = [])
 * @method static ExecuteScalingRule executeScalingRule(array $options = [])
 * @method static ExitStandby exitStandby(array $options = [])
 * @method static ModifyAlarm modifyAlarm(array $options = [])
 * @method static ModifyAlertConfig modifyAlertConfig(array $options = [])
 * @method static ModifyLifecycleHook modifyLifecycleHook(array $options = [])
 * @method static ModifyNotificationConfiguration modifyNotificationConfiguration(array $options = [])
 * @method static ModifyScalingConfiguration modifyScalingConfiguration(array $options = [])
 * @method static ModifyScalingGroup modifyScalingGroup(array $options = [])
 * @method static ModifyScalingRule modifyScalingRule(array $options = [])
 * @method static ModifyScheduledTask modifyScheduledTask(array $options = [])
 * @method static OrderSucceededCallback orderSucceededCallback(array $options = [])
 * @method static RebalanceInstances rebalanceInstances(array $options = [])
 * @method static RecordLifecycleActionHeartbeat recordLifecycleActionHeartbeat(array $options = [])
 * @method static RemoveInstances removeInstances(array $options = [])
 * @method static SetInstancesProtection setInstancesProtection(array $options = [])
 * @method static SpiCallExecuteScalingRule spiCallExecuteScalingRule(array $options = [])
 * @method static UserOperation userOperation(array $options = [])
 * @method static VerifyAuthentication verifyAuthentication(array $options = [])
 * @method static VerifyUser verifyUser(array $options = [])
 */
class Ess
{
    use ApiResolverTrait;
}
