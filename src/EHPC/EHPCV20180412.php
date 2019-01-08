<?php

namespace AlibabaCloud\EHPC;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the EHPC based on the method name as the Api name.
 *
 * @package   AlibabaCloud\EHPC
 *
 * @method static V20180412\AddContainerApp addContainerApp(array $options = [])
 * @method static V20180412\AddLocalNodes addLocalNodes(array $options = [])
 * @method static V20180412\AddNodes addNodes(array $options = [])
 * @method static V20180412\AddUsers addUsers(array $options = [])
 * @method static V20180412\CreateCluster createCluster(array $options = [])
 * @method static V20180412\CreateHybridCluster createHybridCluster(array $options = [])
 * @method static V20180412\CreateJobFile createJobFile(array $options = [])
 * @method static V20180412\CreateJobTemplate createJobTemplate(array $options = [])
 * @method static V20180412\DeleteCluster deleteCluster(array $options = [])
 * @method static V20180412\DeleteContainerApps deleteContainerApps(array $options = [])
 * @method static V20180412\DeleteImage deleteImage(array $options = [])
 * @method static V20180412\DeleteJobTemplates deleteJobTemplates(array $options = [])
 * @method static V20180412\DeleteJobs deleteJobs(array $options = [])
 * @method static V20180412\DeleteNodes deleteNodes(array $options = [])
 * @method static V20180412\DeleteUsers deleteUsers(array $options = [])
 * @method static V20180412\DescribeAutoScaleConfig describeAutoScaleConfig(array $options = [])
 * @method static V20180412\DescribeCluster describeCluster(array $options = [])
 * @method static V20180412\DescribeContainerApp describeContainerApp(array $options = [])
 * @method static V20180412\DescribeImage describeImage(array $options = [])
 * @method static V20180412\DescribeImageGatewayConfig describeImageGatewayConfig(array $options = [])
 * @method static V20180412\DescribeImagePrice describeImagePrice(array $options = [])
 * @method static V20180412\DescribePrice describePrice(array $options = [])
 * @method static V20180412\EditJobTemplate editJobTemplate(array $options = [])
 * @method static V20180412\GetAutoScaleConfig getAutoScaleConfig(array $options = [])
 * @method static V20180412\GetCloudMetricLogs getCloudMetricLogs(array $options = [])
 * @method static V20180412\GetCloudMetricProfiling getCloudMetricProfiling(array $options = [])
 * @method static V20180412\GetHybridClusterConfig getHybridClusterConfig(array $options = [])
 * @method static V20180412\GetVisualServiceStatus getVisualServiceStatus(array $options = [])
 * @method static V20180412\InvokeShellCommand invokeShellCommand(array $options = [])
 * @method static V20180412\ListAvailableEcsTypes listAvailableEcsTypes(array $options = [])
 * @method static V20180412\ListAvailableFileSystemTypes listAvailableFileSystemTypes(array $options = [])
 * @method static V20180412\ListCloudMetricProfilings listCloudMetricProfilings(array $options = [])
 * @method static V20180412\ListClusterLogs listClusterLogs(array $options = [])
 * @method static V20180412\ListClusters listClusters(array $options = [])
 * @method static V20180412\ListClustersMeta listClustersMeta(array $options = [])
 * @method static V20180412\ListCommands listCommands(array $options = [])
 * @method static V20180412\ListContainerApps listContainerApps(array $options = [])
 * @method static V20180412\ListContainerImages listContainerImages(array $options = [])
 * @method static V20180412\ListCpfsFileSystems listCpfsFileSystems(array $options = [])
 * @method static V20180412\ListCurrentClientVersion listCurrentClientVersion(array $options = [])
 * @method static V20180412\ListCustomImages listCustomImages(array $options = [])
 * @method static V20180412\ListFileSystemWithMountTargets listFileSystemWithMountTargets(array $options = [])
 * @method static V20180412\ListImages listImages(array $options = [])
 * @method static V20180412\ListInvocationResults listInvocationResults(array $options = [])
 * @method static V20180412\ListInvocationStatus listInvocationStatus(array $options = [])
 * @method static V20180412\ListJobTemplates listJobTemplates(array $options = [])
 * @method static V20180412\ListJobs listJobs(array $options = [])
 * @method static V20180412\ListNodes listNodes(array $options = [])
 * @method static V20180412\ListNodesNoPaging listNodesNoPaging(array $options = [])
 * @method static V20180412\ListPreferredEcsTypes listPreferredEcsTypes(array $options = [])
 * @method static V20180412\ListQueues listQueues(array $options = [])
 * @method static V20180412\ListRegions listRegions(array $options = [])
 * @method static V20180412\ListSoftwares listSoftwares(array $options = [])
 * @method static V20180412\ListUsers listUsers(array $options = [])
 * @method static V20180412\ListVolumes listVolumes(array $options = [])
 * @method static V20180412\ModifyClusterAttributes modifyClusterAttributes(array $options = [])
 * @method static V20180412\ModifyContainerAppAttributes modifyContainerAppAttributes(array $options = [])
 * @method static V20180412\ModifyImageGatewayConfig modifyImageGatewayConfig(array $options = [])
 * @method static V20180412\ModifyUserGroups modifyUserGroups(array $options = [])
 * @method static V20180412\ModifyUserPasswords modifyUserPasswords(array $options = [])
 * @method static V20180412\ModifyVisualServicePasswd modifyVisualServicePasswd(array $options = [])
 * @method static V20180412\PullImage pullImage(array $options = [])
 * @method static V20180412\RecoverCluster recoverCluster(array $options = [])
 * @method static V20180412\RerunJobs rerunJobs(array $options = [])
 * @method static V20180412\ResetNodes resetNodes(array $options = [])
 * @method static V20180412\RunCloudMetricProfiling runCloudMetricProfiling(array $options = [])
 * @method static V20180412\SetAutoScaleConfig setAutoScaleConfig(array $options = [])
 * @method static V20180412\SetJobUser setJobUser(array $options = [])
 * @method static V20180412\StartCluster startCluster(array $options = [])
 * @method static V20180412\StartNodes startNodes(array $options = [])
 * @method static V20180412\StartVisualService startVisualService(array $options = [])
 * @method static V20180412\StopCluster stopCluster(array $options = [])
 * @method static V20180412\StopJobs stopJobs(array $options = [])
 * @method static V20180412\StopNodes stopNodes(array $options = [])
 * @method static V20180412\StopVisualService stopVisualService(array $options = [])
 * @method static V20180412\SubmitJob submitJob(array $options = [])
 * @method static V20180412\UpgradeClient upgradeClient(array $options = [])
 */
class EHPCV20180412
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\EHPC\\V20180412';
}
