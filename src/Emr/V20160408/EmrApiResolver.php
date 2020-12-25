<?php

namespace AlibabaCloud\Emr\V20160408;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddClusterService addClusterService(array $options = [])
 * @method AddScalingConfigItemV2 addScalingConfigItemV2(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method CancelOrder cancelOrder(array $options = [])
 * @method CleanupFlowEntitySnapshot cleanupFlowEntitySnapshot(array $options = [])
 * @method CloneFlow cloneFlow(array $options = [])
 * @method CloneFlowJob cloneFlowJob(array $options = [])
 * @method CommitFlowEntitySnapshot commitFlowEntitySnapshot(array $options = [])
 * @method CreateBackup createBackup(array $options = [])
 * @method CreateBackupPlan createBackupPlan(array $options = [])
 * @method CreateClusterBootstrapAction createClusterBootstrapAction(array $options = [])
 * @method CreateClusterTemplate createClusterTemplate(array $options = [])
 * @method CreateClusterV2 createClusterV2(array $options = [])
 * @method CreateClusterWithTemplate createClusterWithTemplate(array $options = [])
 * @method CreateDataSource createDataSource(array $options = [])
 * @method CreateExecutionPlan createExecutionPlan(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 * @method CreateFlowCategory createFlowCategory(array $options = [])
 * @method CreateFlowEditLock createFlowEditLock(array $options = [])
 * @method CreateFlowForWeb createFlowForWeb(array $options = [])
 * @method CreateFlowJob createFlowJob(array $options = [])
 * @method CreateFlowProject createFlowProject(array $options = [])
 * @method CreateFlowProjectClusterSetting createFlowProjectClusterSetting(array $options = [])
 * @method CreateFlowProjectUser createFlowProjectUser(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method CreateLibrary createLibrary(array $options = [])
 * @method CreateMetaTablePreviewTask createMetaTablePreviewTask(array $options = [])
 * @method CreateNote createNote(array $options = [])
 * @method CreateParagraph createParagraph(array $options = [])
 * @method CreateResourcePool createResourcePool(array $options = [])
 * @method CreateResourceQueue createResourceQueue(array $options = [])
 * @method CreateScalingGroupV2 createScalingGroupV2(array $options = [])
 * @method CreateScalingRule createScalingRule(array $options = [])
 * @method CreateTag createTag(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method CreateUsers createUsers(array $options = [])
 * @method DecommissionHostComponent decommissionHostComponent(array $options = [])
 * @method DeleteClusterTemplate deleteClusterTemplate(array $options = [])
 * @method DeleteExecutionPlan deleteExecutionPlan(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method DeleteFlowCategory deleteFlowCategory(array $options = [])
 * @method DeleteFlowEditLock deleteFlowEditLock(array $options = [])
 * @method DeleteFlowJob deleteFlowJob(array $options = [])
 * @method DeleteFlowProject deleteFlowProject(array $options = [])
 * @method DeleteFlowProjectClusterSetting deleteFlowProjectClusterSetting(array $options = [])
 * @method DeleteFlowProjectUser deleteFlowProjectUser(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteLibraries deleteLibraries(array $options = [])
 * @method DeleteNote deleteNote(array $options = [])
 * @method DeleteResourcePool deleteResourcePool(array $options = [])
 * @method DeleteResourceQueue deleteResourceQueue(array $options = [])
 * @method DeleteScalingRule deleteScalingRule(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DescribeClusterBasicInfo describeClusterBasicInfo(array $options = [])
 * @method DescribeClusterMetaCollect describeClusterMetaCollect(array $options = [])
 * @method DescribeClusterOperationHostTaskLog describeClusterOperationHostTaskLog(array $options = [])
 * @method DescribeClusterResourcePoolSchedulerType describeClusterResourcePoolSchedulerType(array $options = [])
 * @method DescribeClusterService describeClusterService(array $options = [])
 * @method DescribeClusterServiceConfig describeClusterServiceConfig(array $options = [])
 * @method DescribeClusterServiceConfigHistory describeClusterServiceConfigHistory(array $options = [])
 * @method DescribeClusterServiceConfigTag describeClusterServiceConfigTag(array $options = [])
 * @method DescribeClusterTemplate describeClusterTemplate(array $options = [])
 * @method DescribeClusterV2 describeClusterV2(array $options = [])
 * @method DescribeDataSource describeDataSource(array $options = [])
 * @method DescribeExecutionPlan describeExecutionPlan(array $options = [])
 * @method DescribeFlow describeFlow(array $options = [])
 * @method DescribeFlowAgentToken describeFlowAgentToken(array $options = [])
 * @method DescribeFlowAgentUser describeFlowAgentUser(array $options = [])
 * @method DescribeFlowCategory describeFlowCategory(array $options = [])
 * @method DescribeFlowCategoryTree describeFlowCategoryTree(array $options = [])
 * @method DescribeFlowEntitySnapshot describeFlowEntitySnapshot(array $options = [])
 * @method DescribeFlowInstance describeFlowInstance(array $options = [])
 * @method DescribeFlowJob describeFlowJob(array $options = [])
 * @method DescribeFlowNodeInstance describeFlowNodeInstance(array $options = [])
 * @method DescribeFlowNodeInstanceContainerLog describeFlowNodeInstanceContainerLog(array $options = [])
 * @method DescribeFlowNodeInstanceLauncherLog describeFlowNodeInstanceLauncherLog(array $options = [])
 * @method DescribeFlowProject describeFlowProject(array $options = [])
 * @method DescribeFlowProjectClusterSetting describeFlowProjectClusterSetting(array $options = [])
 * @method DescribeJob describeJob(array $options = [])
 * @method DescribeLibraryDetail describeLibraryDetail(array $options = [])
 * @method DescribeLibraryInstallTaskDetail describeLibraryInstallTaskDetail(array $options = [])
 * @method DescribeMetaTablePreviewTask describeMetaTablePreviewTask(array $options = [])
 * @method DescribeScalingActivity describeScalingActivity(array $options = [])
 * @method DescribeScalingCommonConfig describeScalingCommonConfig(array $options = [])
 * @method DescribeScalingConfigItemV2 describeScalingConfigItemV2(array $options = [])
 * @method DescribeScalingGroupInstanceV2 describeScalingGroupInstanceV2(array $options = [])
 * @method DescribeScalingGroupV2 describeScalingGroupV2(array $options = [])
 * @method DescribeScalingRule describeScalingRule(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method DetachAndReleaseClusterEni detachAndReleaseClusterEni(array $options = [])
 * @method DiffFlowEntitySnapshot diffFlowEntitySnapshot(array $options = [])
 * @method DumpMetaDataSourceForOuter dumpMetaDataSourceForOuter(array $options = [])
 * @method GetFlowEntityRelationGraph getFlowEntityRelationGraph(array $options = [])
 * @method GetHdfsCapacityStatisticInfo getHdfsCapacityStatisticInfo(array $options = [])
 * @method GetJobInputStatisticInfo getJobInputStatisticInfo(array $options = [])
 * @method GetJobOutputStatisticInfo getJobOutputStatisticInfo(array $options = [])
 * @method GetJobRunningTimeStatisticInfo getJobRunningTimeStatisticInfo(array $options = [])
 * @method GetQueueInputStatisticInfo getQueueInputStatisticInfo(array $options = [])
 * @method GetQueueOutputStatisticInfo getQueueOutputStatisticInfo(array $options = [])
 * @method GetQueueSubmissionStatisticInfo getQueueSubmissionStatisticInfo(array $options = [])
 * @method GetUserInputStatisticInfo getUserInputStatisticInfo(array $options = [])
 * @method GetUserOutputStatisticInfo getUserOutputStatisticInfo(array $options = [])
 * @method GetUserSubmissionStatisticInfo getUserSubmissionStatisticInfo(array $options = [])
 * @method InstallLibraries installLibraries(array $options = [])
 * @method JoinResourceGroup joinResourceGroup(array $options = [])
 * @method KillExecutionJobInstance killExecutionJobInstance(array $options = [])
 * @method KillFlowJob killFlowJob(array $options = [])
 * @method ListAdviceAction listAdviceAction(array $options = [])
 * @method ListApmApplication listApmApplication(array $options = [])
 * @method ListBackups listBackups(array $options = [])
 * @method ListClusterHost listClusterHost(array $options = [])
 * @method ListClusterHostComponent listClusterHostComponent(array $options = [])
 * @method ListClusterHostGroup listClusterHostGroup(array $options = [])
 * @method ListClusterInstalledService listClusterInstalledService(array $options = [])
 * @method ListClusterOperation listClusterOperation(array $options = [])
 * @method ListClusterOperationHost listClusterOperationHost(array $options = [])
 * @method ListClusterOperationHostTask listClusterOperationHostTask(array $options = [])
 * @method ListClusterOperationTask listClusterOperationTask(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListClusterService listClusterService(array $options = [])
 * @method ListClusterServiceComponent listClusterServiceComponent(array $options = [])
 * @method ListClusterServiceComponentHealthInfo listClusterServiceComponentHealthInfo(array $options = [])
 * @method ListClusterServiceConfigHistory listClusterServiceConfigHistory(array $options = [])
 * @method ListClusterServiceQuickLink listClusterServiceQuickLink(array $options = [])
 * @method ListClusterTemplates listClusterTemplates(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method ListEmrAvailableConfig listEmrAvailableConfig(array $options = [])
 * @method ListEmrAvailableResource listEmrAvailableResource(array $options = [])
 * @method ListEmrMainVersion listEmrMainVersion(array $options = [])
 * @method ListExecutionPlanInstances listExecutionPlanInstances(array $options = [])
 * @method ListExecutionPlans listExecutionPlans(array $options = [])
 * @method ListFlow listFlow(array $options = [])
 * @method ListFlowCategory listFlowCategory(array $options = [])
 * @method ListFlowCluster listFlowCluster(array $options = [])
 * @method ListFlowClusterAll listFlowClusterAll(array $options = [])
 * @method ListFlowClusterAllHosts listFlowClusterAllHosts(array $options = [])
 * @method ListFlowClusterHost listFlowClusterHost(array $options = [])
 * @method ListFlowEntitySnapshot listFlowEntitySnapshot(array $options = [])
 * @method ListFlowInstance listFlowInstance(array $options = [])
 * @method ListFlowJob listFlowJob(array $options = [])
 * @method ListFlowJobHistory listFlowJobHistory(array $options = [])
 * @method ListFlowNodeInstance listFlowNodeInstance(array $options = [])
 * @method ListFlowNodeInstanceContainerStatus listFlowNodeInstanceContainerStatus(array $options = [])
 * @method ListFlowNodeSqlResult listFlowNodeSqlResult(array $options = [])
 * @method ListFlowProject listFlowProject(array $options = [])
 * @method ListFlowProjectClusterSetting listFlowProjectClusterSetting(array $options = [])
 * @method ListFlowProjectUser listFlowProjectUser(array $options = [])
 * @method ListJobExecutionInstances listJobExecutionInstances(array $options = [])
 * @method ListJobInstanceWorkers listJobInstanceWorkers(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListLibraries listLibraries(array $options = [])
 * @method ListLibraryInstallTasks listLibraryInstallTasks(array $options = [])
 * @method ListLibraryStatus listLibraryStatus(array $options = [])
 * @method ListMetaCluster listMetaCluster(array $options = [])
 * @method ListMetaDataSourceClusterForOuter listMetaDataSourceClusterForOuter(array $options = [])
 * @method ListNotes listNotes(array $options = [])
 * @method ListResourcePool listResourcePool(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListScalingActivityV2 listScalingActivityV2(array $options = [])
 * @method ListScalingConfigItemV2 listScalingConfigItemV2(array $options = [])
 * @method ListScalingGroupV2 listScalingGroupV2(array $options = [])
 * @method ListSecurityGroup listSecurityGroup(array $options = [])
 * @method ListStack listStack(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListVswitch listVswitch(array $options = [])
 * @method ModifyClusterBootstrapAction modifyClusterBootstrapAction(array $options = [])
 * @method ModifyClusterHostGroup modifyClusterHostGroup(array $options = [])
 * @method ModifyClusterMetaCollect modifyClusterMetaCollect(array $options = [])
 * @method ModifyClusterName modifyClusterName(array $options = [])
 * @method ModifyClusterSecurityGroupRule modifyClusterSecurityGroupRule(array $options = [])
 * @method ModifyClusterServiceConfig modifyClusterServiceConfig(array $options = [])
 * @method ModifyClusterTemplate modifyClusterTemplate(array $options = [])
 * @method ModifyExecutionPlan modifyExecutionPlan(array $options = [])
 * @method ModifyFlow modifyFlow(array $options = [])
 * @method ModifyFlowCategory modifyFlowCategory(array $options = [])
 * @method ModifyFlowForWeb modifyFlowForWeb(array $options = [])
 * @method ModifyFlowJob modifyFlowJob(array $options = [])
 * @method ModifyFlowProject modifyFlowProject(array $options = [])
 * @method ModifyFlowProjectClusterSetting modifyFlowProjectClusterSetting(array $options = [])
 * @method ModifyJob modifyJob(array $options = [])
 * @method ModifyResourcePool modifyResourcePool(array $options = [])
 * @method ModifyResourcePoolSchedulerType modifyResourcePoolSchedulerType(array $options = [])
 * @method ModifyResourceQueue modifyResourceQueue(array $options = [])
 * @method ModifyScalingConfigItemV2 modifyScalingConfigItemV2(array $options = [])
 * @method ModifyScalingGroupV2 modifyScalingGroupV2(array $options = [])
 * @method ModifyScalingRule modifyScalingRule(array $options = [])
 * @method ModifyScalingTaskGroup modifyScalingTaskGroup(array $options = [])
 * @method QueryAlarmHistory queryAlarmHistory(array $options = [])
 * @method QueryEntity queryEntity(array $options = [])
 * @method QueryTableData queryTableData(array $options = [])
 * @method QueryTag queryTag(array $options = [])
 * @method QueryTrendData queryTrendData(array $options = [])
 * @method RefreshClusterResourcePool refreshClusterResourcePool(array $options = [])
 * @method ReleaseCluster releaseCluster(array $options = [])
 * @method ReleaseClusterByTemplateTagForInternal releaseClusterByTemplateTagForInternal(array $options = [])
 * @method ReleaseClusterHostGroup releaseClusterHostGroup(array $options = [])
 * @method RemoveScalingConfigItemV2 removeScalingConfigItemV2(array $options = [])
 * @method RerunFlow rerunFlow(array $options = [])
 * @method ResizeClusterV2 resizeClusterV2(array $options = [])
 * @method RestoreBackup restoreBackup(array $options = [])
 * @method RestoreFlowEntitySnapshot restoreFlowEntitySnapshot(array $options = [])
 * @method ResumeExecutionPlanScheduler resumeExecutionPlanScheduler(array $options = [])
 * @method ResumeFlow resumeFlow(array $options = [])
 * @method RetryOperation retryOperation(array $options = [])
 * @method RunClusterServiceAction runClusterServiceAction(array $options = [])
 * @method RunExecutionPlan runExecutionPlan(array $options = [])
 * @method RunScalingActionV2 runScalingActionV2(array $options = [])
 * @method SearchLog searchLog(array $options = [])
 * @method StartFlow startFlow(array $options = [])
 * @method SubmitFlow submitFlow(array $options = [])
 * @method SubmitFlowJob submitFlowJob(array $options = [])
 * @method SuspendExecutionPlanScheduler suspendExecutionPlanScheduler(array $options = [])
 * @method SuspendFlow suspendFlow(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TagResourcesSystemTags tagResourcesSystemTags(array $options = [])
 * @method UninstallLibraries uninstallLibraries(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UntagResourcesSystemTags untagResourcesSystemTags(array $options = [])
 * @method UpdateDataSource updateDataSource(array $options = [])
 * @method UpdateLibraryInstallTaskStatus updateLibraryInstallTaskStatus(array $options = [])
 * @method UpdateTag updateTag(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 */
class EmrApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Emr';

    /** @var string */
    public $version = '2016-04-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'emr';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getService()
 * @method string getComment()
 * @method $this withComment($value)
 */
class AddClusterService extends Rpc
{

    /**
     * @param array $service
     *
     * @return $this
     */
	public function withService(array $service)
	{
	    $this->data['Service'] = $service;
		foreach ($service as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServiceVersion'])){
				$this->options['query']['Service.' . ($depth1 + 1) . '.ServiceVersion'] = $depth1Value['ServiceVersion'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['Service.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getConfigItemType()
 * @method $this withConfigItemType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getConfigItemInformation()
 * @method $this withConfigItemInformation($value)
 */
class AddScalingConfigItemV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getBizContent()
 * @method $this withBizContent($value)
 */
class AuthorizeSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CancelOrder extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityIdList()
 * @method $this withEntityIdList($value)
 */
class CleanupFlowEntitySnapshot extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CloneFlow extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CloneFlowJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class CommitFlowEntitySnapshot extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getMetadataType()
 * @method $this withMetadataType($value)
 */
class CreateBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getRootPath()
 * @method $this withRootPath($value)
 */
class CreateBackupPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getBootstrapAction()
 */
class CreateClusterBootstrapAction extends Rpc
{

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getMasterPwd()
 * @method $this withMasterPwd($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getMetaStoreType()
 * @method $this withMetaStoreType($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getBootstrapAction()
 * @method string getMetaStoreConf()
 * @method $this withMetaStoreConf($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method array getTag()
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDb()
 * @method $this withUseCustomHiveMetaDb($value)
 * @method string getInitCustomHiveMetaDb()
 * @method $this withInitCustomHiveMetaDb($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method array getHostGroup()
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 */
class CreateClusterTemplate extends Rpc
{

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $optionSoftWareList
     *
     * @return $this
     */
	public function withOptionSoftWareList(array $optionSoftWareList)
	{
	    $this->data['OptionSoftWareList'] = $optionSoftWareList;
		foreach ($optionSoftWareList as $i => $iValue) {
			$this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
	public function withHostGroup(array $hostGroup)
	{
	    $this->data['HostGroup'] = $hostGroup;
		foreach ($hostGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['SysDiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
			}
			if(isset($depth1Value['DiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
			}
			if(isset($depth1Value['SysDiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
			}
			if(isset($depth1Value['ClusterId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
			if(isset($depth1Value['HostGroupName'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
			}
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['DiskCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
			}
			if(isset($depth1Value['AutoRenew'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
			}
			if(isset($depth1Value['HostGroupId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
			}
			if(isset($depth1Value['NodeCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ChargeType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
			}
			if(isset($depth1Value['MultiInstanceTypes'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.MultiInstanceTypes'] = $depth1Value['MultiInstanceTypes'];
			}
			if(isset($depth1Value['CreateType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
			}
			if(isset($depth1Value['HostGroupType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
			}
		}

		return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['FileName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['Encrypt'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
			}
			if(isset($depth1Value['Replace'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAutoPayOrder()
 * @method $this withAutoPayOrder($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getMasterPwd()
 * @method $this withMasterPwd($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getMetaStoreType()
 * @method $this withMetaStoreType($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getHostComponentInfo()
 * @method string getClickHouseConf()
 * @method $this withClickHouseConf($value)
 * @method array getBootstrapAction()
 * @method string getMetaStoreConf()
 * @method $this withMetaStoreConf($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method array getTag()
 * @method string getAuthorizeContent()
 * @method $this withAuthorizeContent($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getExtraAttributes()
 * @method $this withExtraAttributes($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method array getUserInfo()
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getRelatedClusterId()
 * @method $this withRelatedClusterId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method array getPromotionInfo()
 * @method array getHostGroup()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method array getServiceInfo()
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 */
class CreateClusterV2 extends Rpc
{

    /**
     * @param array $hostComponentInfo
     *
     * @return $this
     */
	public function withHostComponentInfo(array $hostComponentInfo)
	{
	    $this->data['HostComponentInfo'] = $hostComponentInfo;
		foreach ($hostComponentInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['HostName'])){
				$this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
			}
			foreach ($depth1Value['ComponentNameList'] as $i => $iValue) {
				$this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ComponentNameList.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $optionSoftWareList
     *
     * @return $this
     */
	public function withOptionSoftWareList(array $optionSoftWareList)
	{
	    $this->data['OptionSoftWareList'] = $optionSoftWareList;
		foreach ($optionSoftWareList as $i => $iValue) {
			$this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $userInfo
     *
     * @return $this
     */
	public function withUserInfo(array $userInfo)
	{
	    $this->data['UserInfo'] = $userInfo;
		foreach ($userInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['Password'])){
				$this->options['query']['UserInfo.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }

    /**
     * @param array $promotionInfo
     *
     * @return $this
     */
	public function withPromotionInfo(array $promotionInfo)
	{
	    $this->data['PromotionInfo'] = $promotionInfo;
		foreach ($promotionInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['PromotionOptionCode'])){
				$this->options['query']['PromotionInfo.' . ($depth1 + 1) . '.PromotionOptionCode'] = $depth1Value['PromotionOptionCode'];
			}
			if(isset($depth1Value['ProductCode'])){
				$this->options['query']['PromotionInfo.' . ($depth1 + 1) . '.ProductCode'] = $depth1Value['ProductCode'];
			}
			if(isset($depth1Value['PromotionOptionNo'])){
				$this->options['query']['PromotionInfo.' . ($depth1 + 1) . '.PromotionOptionNo'] = $depth1Value['PromotionOptionNo'];
			}
		}

		return $this;
    }

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
	public function withHostGroup(array $hostGroup)
	{
	    $this->data['HostGroup'] = $hostGroup;
		foreach ($hostGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['SysDiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
			}
			if(isset($depth1Value['DiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
			}
			if(isset($depth1Value['SysDiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
			}
			if(isset($depth1Value['ClusterId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
			if(isset($depth1Value['HostGroupName'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
			}
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['DiskCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
			}
			if(isset($depth1Value['AutoRenew'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
			}
			if(isset($depth1Value['GpuDriver'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.GpuDriver'] = $depth1Value['GpuDriver'];
			}
			if(isset($depth1Value['HostGroupId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
			}
			if(isset($depth1Value['NodeCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ChargeType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
			}
			if(isset($depth1Value['CreateType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
			}
			if(isset($depth1Value['HostGroupType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
			}
		}

		return $this;
    }

    /**
     * @param array $serviceInfo
     *
     * @return $this
     */
	public function withServiceInfo(array $serviceInfo)
	{
	    $this->data['ServiceInfo'] = $serviceInfo;
		foreach ($serviceInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServiceVersion'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceVersion'] = $depth1Value['ServiceVersion'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['FileName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['Encrypt'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
			}
			if(isset($depth1Value['Replace'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUniqueTag()
 * @method $this withUniqueTag($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTemplateBizId()
 * @method $this withTemplateBizId($value)
 */
class CreateClusterWithTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNavParentId()
 * @method $this withNavParentId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class CreateDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getBootstrapAction()
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getEcsOrder()
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method array getJobIdList()
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getWorkflowDefinition()
 * @method $this withWorkflowDefinition($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class CreateExecutionPlan extends Rpc
{

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

		return $this;
    }

    /**
     * @param array $optionSoftWareList
     *
     * @return $this
     */
	public function withOptionSoftWareList(array $optionSoftWareList)
	{
	    $this->data['OptionSoftWareList'] = $optionSoftWareList;
		foreach ($optionSoftWareList as $i => $iValue) {
			$this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ecsOrder
     *
     * @return $this
     */
	public function withEcsOrder(array $ecsOrder)
	{
	    $this->data['EcsOrder'] = $ecsOrder;
		foreach ($ecsOrder as $depth1 => $depth1Value) {
			if(isset($depth1Value['NodeType'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
			}
			if(isset($depth1Value['DiskCount'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
			}
			if(isset($depth1Value['NodeCount'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
			}
			if(isset($depth1Value['DiskCapacity'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
			}
			if(isset($depth1Value['Index'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
		}

		return $this;
    }

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['query']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['FileName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['Encrypt'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
			}
			if(isset($depth1Value['Replace'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getLifecycle()
 * @method $this withLifecycle($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getLogArchiveLocation()
 * @method $this withLogArchiveLocation($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlow extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateFlowCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class CreateFlowEditLock extends Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getLifecycle()
 * @method $this withLifecycle($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getLogArchiveLocation()
 * @method $this withLogArchiveLocation($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGraph()
 * @method $this withGraph($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlowForWeb extends Rpc
{
}

/**
 * @method string getRetryPolicy()
 * @method $this withRetryPolicy($value)
 * @method string getRunConf()
 * @method $this withRunConf($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getParamConf()
 * @method $this withParamConf($value)
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getEnvConf()
 * @method $this withEnvConf($value)
 * @method string getMaxRunningTimeSec()
 * @method $this withMaxRunningTimeSec($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getCustomVariables()
 * @method $this withCustomVariables($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAdhoc()
 * @method $this withAdhoc($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlowJob extends Rpc
{

    /**
     * @param array $resourceList
     *
     * @return $this
     */
	public function withResourceList(array $resourceList)
	{
	    $this->data['ResourceList'] = $resourceList;
		foreach ($resourceList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['ResourceList.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['Alias'])){
				$this->options['query']['ResourceList.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateFlowProject extends Rpc
{
}

/**
 * @method array getUserList()
 * @method array getHostList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultQueue()
 * @method $this withDefaultQueue($value)
 * @method string getDefaultUser()
 * @method $this withDefaultUser($value)
 * @method array getQueueList()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateFlowProjectClusterSetting extends Rpc
{

    /**
     * @param array $userList
     *
     * @return $this
     */
	public function withUserList(array $userList)
	{
	    $this->data['UserList'] = $userList;
		foreach ($userList as $i => $iValue) {
			$this->options['query']['UserList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hostList
     *
     * @return $this
     */
	public function withHostList(array $hostList)
	{
	    $this->data['HostList'] = $hostList;
		foreach ($hostList as $i => $iValue) {
			$this->options['query']['HostList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $queueList
     *
     * @return $this
     */
	public function withQueueList(array $queueList)
	{
	    $this->data['QueueList'] = $queueList;
		foreach ($queueList as $i => $iValue) {
			$this->options['query']['QueueList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method array getUser()
 */
class CreateFlowProjectUser extends Rpc
{

    /**
     * @param array $user
     *
     * @return $this
     */
	public function withUser(array $user)
	{
	    $this->data['User'] = $user;
		foreach ($user as $depth1 => $depth1Value) {
			if(isset($depth1Value['UserId'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getRunParameter()
 * @method $this withRunParameter($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 */
class CreateJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLibraryVersion()
 * @method $this withLibraryVersion($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getProperties()
 * @method $this withProperties($value)
 * @method string getSourceLocation()
 * @method $this withSourceLocation($value)
 */
class CreateLibrary extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getUser()
 * @method $this withUser($value)
 */
class CreateMetaTablePreviewTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateNote extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class CreateParagraph extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getYarnSiteConfig()
 * @method $this withYarnSiteConfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getConfig()
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class CreateResourcePool extends Rpc
{

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['Note'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
			}
			if(isset($depth1Value['ConfigType'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.configType'] = $depth1Value['ConfigType'];
			}
			if(isset($depth1Value['TargetId'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.TargetId'] = $depth1Value['TargetId'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLeaf()
 * @method $this withLeaf($value)
 * @method string getParentQueueId()
 * @method $this withParentQueueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getConfig()
 */
class CreateResourceQueue extends Rpc
{

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['Note'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateScalingGroupV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method array getCloudWatchTrigger()
 * @method string getTimeoutWithGrace()
 * @method $this withTimeoutWithGrace($value)
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getWithGrace()
 * @method $this withWithGrace($value)
 * @method string getRuleCategory()
 * @method $this withRuleCategory($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method array getSchedulerTrigger()
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class CreateScalingRule extends Rpc
{

    /**
     * @param array $cloudWatchTrigger
     *
     * @return $this
     */
	public function withCloudWatchTrigger(array $cloudWatchTrigger)
	{
	    $this->data['CloudWatchTrigger'] = $cloudWatchTrigger;
		foreach ($cloudWatchTrigger as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['EvaluationCount'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.EvaluationCount'] = $depth1Value['EvaluationCount'];
			}
			if(isset($depth1Value['Threshold'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['ComparisonOperator'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
			}
			if(isset($depth1Value['Statistics'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
			}
		}

		return $this;
    }

    /**
     * @param array $schedulerTrigger
     *
     * @return $this
     */
	public function withSchedulerTrigger(array $schedulerTrigger)
	{
	    $this->data['SchedulerTrigger'] = $schedulerTrigger;
		foreach ($schedulerTrigger as $depth1 => $depth1Value) {
			if(isset($depth1Value['LaunchTime'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchTime'] = $depth1Value['LaunchTime'];
			}
			if(isset($depth1Value['LaunchExpirationTime'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchExpirationTime'] = $depth1Value['LaunchExpirationTime'];
			}
			if(isset($depth1Value['RecurrenceValue'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceValue'] = $depth1Value['RecurrenceValue'];
			}
			if(isset($depth1Value['RecurrenceEndTime'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceEndTime'] = $depth1Value['RecurrenceEndTime'];
			}
			if(isset($depth1Value['RecurrenceType'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceType'] = $depth1Value['RecurrenceType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class CreateTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getUserAccountParamList()
 * @method array getGroupIdList()
 * @method array getRoleIdList()
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateUser extends Rpc
{

    /**
     * @param array $userAccountParamList
     *
     * @return $this
     */
	public function withUserAccountParamList(array $userAccountParamList)
	{
	    $this->data['UserAccountParamList'] = $userAccountParamList;
		foreach ($userAccountParamList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AccountType'])){
				$this->options['query']['UserAccountParamList.' . ($depth1 + 1) . '.AccountType'] = $depth1Value['AccountType'];
			}
			if(isset($depth1Value['AuthType'])){
				$this->options['query']['UserAccountParamList.' . ($depth1 + 1) . '.AuthType'] = $depth1Value['AuthType'];
			}
			if(isset($depth1Value['AccountPassword'])){
				$this->options['query']['UserAccountParamList.' . ($depth1 + 1) . '.AccountPassword'] = $depth1Value['AccountPassword'];
			}
		}

		return $this;
    }

    /**
     * @param array $groupIdList
     *
     * @return $this
     */
	public function withGroupIdList(array $groupIdList)
	{
	    $this->data['GroupIdList'] = $groupIdList;
		foreach ($groupIdList as $i => $iValue) {
			$this->options['query']['GroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $roleIdList
     *
     * @return $this
     */
	public function withRoleIdList(array $roleIdList)
	{
	    $this->data['RoleIdList'] = $roleIdList;
		foreach ($roleIdList as $i => $iValue) {
			$this->options['query']['RoleIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUserInfo()
 */
class CreateUsers extends Rpc
{

    /**
     * @param array $userInfo
     *
     * @return $this
     */
	public function withUserInfo(array $userInfo)
	{
	    $this->data['UserInfo'] = $userInfo;
		foreach ($userInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['UserInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeoutSeconds()
 * @method $this withTimeoutSeconds($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DecommissionHostComponent extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteClusterTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteExecutionPlan extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlow extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowCategory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class DeleteFlowEditLock extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowJob extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowProject extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowProjectClusterSetting extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DeleteFlowProjectUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getLibraryBizIdList()
 */
class DeleteLibraries extends Rpc
{

    /**
     * @param array $libraryBizIdList
     *
     * @return $this
     */
	public function withLibraryBizIdList(array $libraryBizIdList)
	{
	    $this->data['LibraryBizIdList'] = $libraryBizIdList;
		foreach ($libraryBizIdList as $i => $iValue) {
			$this->options['query']['LibraryBizIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteNote extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceQueueId()
 * @method $this withResourceQueueId($value)
 */
class DeleteResourceQueue extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 */
class DeleteScalingRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class DeleteTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterBasicInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterMetaCollect extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeClusterOperationHostTaskLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterResourcePoolSchedulerType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DescribeClusterService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DescribeClusterServiceConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DescribeClusterServiceConfigHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigTag()
 * @method $this withConfigTag($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class DescribeClusterServiceConfigTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeClusterTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeClusterV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeExecutionPlan extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getInnerIP()
 * @method $this withInnerIP($value)
 */
class DescribeFlowAgentToken extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DescribeFlowAgentUser extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowCategory extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DescribeFlowCategoryTree extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCommitterId()
 * @method $this withCommitterId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getEntityGroupId()
 * @method $this withEntityGroupId($value)
 * @method string getRevision()
 * @method $this withRevision($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class DescribeFlowEntitySnapshot extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowInstance extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowJob extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstance extends Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLogName()
 * @method $this withLogName($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstanceContainerLog extends Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getStart()
 * @method $this withStart($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstanceLauncherLog extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowProject extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowProjectClusterSetting extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLibraryBizId()
 * @method $this withLibraryBizId($value)
 */
class DescribeLibraryDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskBizId()
 * @method $this withTaskBizId($value)
 */
class DescribeLibraryInstallTaskDetail extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeMetaTablePreviewTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingActivityId()
 * @method $this withScalingActivityId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 */
class DescribeScalingActivity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class DescribeScalingCommonConfig extends Rpc
{
}

/**
 * @method string getConfigItemType()
 * @method $this withConfigItemType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getScalingConfigItemId()
 * @method $this withScalingConfigItemId($value)
 */
class DescribeScalingConfigItemV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostGroupBizId()
 * @method $this withHostGroupBizId($value)
 */
class DescribeScalingGroupInstanceV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getHostGroupBizId()
 * @method $this withHostGroupBizId($value)
 */
class DescribeScalingGroupV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 */
class DescribeScalingRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class DescribeSecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTargetClusterId()
 * @method $this withTargetClusterId($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 */
class DetachAndReleaseClusterEni extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSrcRevision()
 * @method $this withSrcRevision($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getDstRevision()
 * @method $this withDstRevision($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class DiffFlowEntitySnapshot extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDumpAllDatabase()
 * @method $this withDumpAllDatabase($value)
 * @method string getDumpLimit()
 * @method $this withDumpLimit($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDumpAllTable()
 * @method $this withDumpAllTable($value)
 * @method array getPartitionValues()
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getDumpAllPartition()
 * @method $this withDumpAllPartition($value)
 */
class DumpMetaDataSourceForOuter extends Rpc
{

    /**
     * @param array $partitionValues
     *
     * @return $this
     */
	public function withPartitionValues(array $partitionValues)
	{
	    $this->data['PartitionValues'] = $partitionValues;
		foreach ($partitionValues as $i => $iValue) {
			$this->options['query']['PartitionValues.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRelationship()
 * @method $this withRelationship($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getDirection()
 * @method $this withDirection($value)
 * @method string getEntityGroupId()
 * @method $this withEntityGroupId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class GetFlowEntityRelationGraph extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetHdfsCapacityStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetJobInputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetJobOutputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetJobRunningTimeStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetQueueInputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetQueueOutputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 */
class GetQueueSubmissionStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetUserInputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 */
class GetUserOutputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 */
class GetUserSubmissionStatisticInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLibraryBizId()
 * @method $this withLibraryBizId($value)
 * @method array getClusterBizIdList()
 */
class InstallLibraries extends Rpc
{

    /**
     * @param array $clusterBizIdList
     *
     * @return $this
     */
	public function withClusterBizIdList(array $clusterBizIdList)
	{
	    $this->data['ClusterBizIdList'] = $clusterBizIdList;
		foreach ($clusterBizIdList as $i => $iValue) {
			$this->options['query']['ClusterBizIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class JoinResourceGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class KillExecutionJobInstance extends Rpc
{
}

/**
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class KillFlowJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getComponent()
 * @method $this withComponent($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListAdviceAction extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getStartTimeTo()
 * @method $this withStartTimeTo($value)
 * @method string getDiagnoseResult()
 * @method $this withDiagnoseResult($value)
 * @method string getEndTimeFrom()
 * @method $this withEndTimeFrom($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getStartTimeFrom()
 * @method $this withStartTimeFrom($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getUser()
 * @method $this withUser($value)
 * @method string getEndTimeTo()
 * @method $this withEndTimeTo($value)
 * @method string getQueue()
 * @method $this withQueue($value)
 */
class ListApmApplication extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method array getBackupId()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMetadataType()
 * @method $this withMetadataType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListBackups extends Rpc
{

    /**
     * @param array $backupId
     *
     * @return $this
     */
	public function withBackupId(array $backupId)
	{
	    $this->data['BackupId'] = $backupId;
		foreach ($backupId as $i => $iValue) {
			$this->options['query']['BackupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method array getStatusList()
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPrivateIp()
 * @method $this withPrivateIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 */
class ListClusterHost extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getComponentStatus()
 * @method $this withComponentStatus($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostRole()
 * @method $this withHostRole($value)
 */
class ListClusterHostComponent extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHostGroupType()
 * @method $this withHostGroupType($value)
 */
class ListClusterHostGroup extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusterInstalledService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationHost extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationHostTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getCreateType()
 * @method $this withCreateType($value)
 * @method array getExpiredTagList()
 * @method string getDefaultStatus()
 * @method $this withDefaultStatus($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getClusterTypeList()
 */
class ListClusters extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $expiredTagList
     *
     * @return $this
     */
	public function withExpiredTagList(array $expiredTagList)
	{
	    $this->data['ExpiredTagList'] = $expiredTagList;
		foreach ($expiredTagList as $i => $iValue) {
			$this->options['query']['ExpiredTagList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $clusterTypeList
     *
     * @return $this
     */
	public function withClusterTypeList(array $clusterTypeList)
	{
	    $this->data['ClusterTypeList'] = $clusterTypeList;
		foreach ($clusterTypeList as $i => $iValue) {
			$this->options['query']['ClusterTypeList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusterService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPodName()
 * @method $this withPodName($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getComponentStatus()
 * @method $this withComponentStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListClusterServiceComponent extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListClusterServiceComponentHealthInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getAuthor()
 * @method $this withAuthor($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigFileName()
 * @method $this withConfigFileName($value)
 * @method string getConfigItemKey()
 * @method $this withConfigItemKey($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class ListClusterServiceConfigHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDirectType()
 * @method $this withDirectType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class ListClusterServiceQuickLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusterTemplates extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCreateFrom()
 * @method $this withCreateFrom($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class ListEmrAvailableConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getSystemDiskType()
 * @method $this withSystemDiskType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDataDiskType()
 * @method $this withDataDiskType($value)
 */
class ListEmrAvailableResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 */
class ListEmrMainVersion extends Rpc
{
}

/**
 * @method string getOnlyLastInstance()
 * @method $this withOnlyLastInstance($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getExecutionPlanIdList()
 * @method array getStatusList()
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListExecutionPlanInstances extends Rpc
{

    /**
     * @param array $executionPlanIdList
     *
     * @return $this
     */
	public function withExecutionPlanIdList(array $executionPlanIdList)
	{
	    $this->data['ExecutionPlanIdList'] = $executionPlanIdList;
		foreach ($executionPlanIdList as $i => $iValue) {
			$this->options['query']['ExecutionPlanIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class ListExecutionPlans extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListFlow extends Rpc
{
}

/**
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getRoot()
 * @method $this withRoot($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowCategory extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowCluster extends Rpc
{
}

/**
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class ListFlowClusterAll extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowClusterAllHosts extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowClusterHost extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCommitterId()
 * @method $this withCommitterId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getEntityGroupId()
 * @method $this withEntityGroupId($value)
 * @method string getRevision()
 * @method $this withRevision($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class ListFlowEntitySnapshot extends Rpc
{
}

/**
 * @method array getStatusList()
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListFlowInstance extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAdhoc()
 * @method $this withAdhoc($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowJob extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method array getStatusList()
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowJobHistory extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getStatusList()
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class ListFlowNodeInstance extends Rpc
{

    /**
     * @param array $statusList
     *
     * @return $this
     */
	public function withStatusList(array $statusList)
	{
	    $this->data['StatusList'] = $statusList;
		foreach ($statusList as $i => $iValue) {
			$this->options['query']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowNodeInstanceContainerStatus extends Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getSqlIndex()
 * @method $this withSqlIndex($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowNodeSqlResult extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowProject extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowProjectClusterSetting extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowProjectUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getExecutionPlanInstanceId()
 * @method $this withExecutionPlanInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListJobExecutionInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class ListJobInstanceWorkers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class ListJobs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 */
class ListLibraries extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getLibraryBizId()
 * @method $this withLibraryBizId($value)
 */
class ListLibraryInstallTasks extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getLibraryBizId()
 * @method $this withLibraryBizId($value)
 */
class ListLibraryStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class ListMetaCluster extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getClusterId()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getDataSourceId()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListMetaDataSourceClusterForOuter extends Rpc
{

    /**
     * @param array $clusterId
     *
     * @return $this
     */
	public function withClusterId(array $clusterId)
	{
	    $this->data['ClusterId'] = $clusterId;
		foreach ($clusterId as $i => $iValue) {
			$this->options['query']['ClusterId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $dataSourceId
     *
     * @return $this
     */
	public function withDataSourceId(array $dataSourceId)
	{
	    $this->data['DataSourceId'] = $dataSourceId;
		foreach ($dataSourceId as $i => $iValue) {
			$this->options['query']['DataSourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class ListNotes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class ListResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListRoles extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getScalingRuleName()
 * @method $this withScalingRuleName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListScalingActivityV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 * @method string getConfigItemType()
 * @method $this withConfigItemType($value)
 */
class ListScalingConfigItemV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageCount()
 * @method $this withPageCount($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 * @method string getOrderField()
 * @method $this withOrderField($value)
 */
class ListScalingGroupV2 extends Rpc
{
}

/**
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class ListSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 */
class ListStack extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getProductType()
 * @method $this withProductType($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class ListVswitch extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getBootstrapAction()
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyClusterBootstrapAction extends Rpc
{

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class ModifyClusterHostGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSwitchOn()
 * @method $this withSwitchOn($value)
 */
class ModifyClusterMetaCollect extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyClusterName extends Rpc
{
}

/**
 * @method string getNicType()
 * @method $this withNicType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPortRange()
 * @method $this withPortRange($value)
 * @method string getIpProtocol()
 * @method $this withIpProtocol($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getWhiteIp()
 * @method $this withWhiteIp($value)
 * @method string getModifyType()
 * @method $this withModifyType($value)
 */
class ModifyClusterSecurityGroupRule extends Rpc
{
}

/**
 * @method string getRefreshHostConfig()
 * @method $this withRefreshHostConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method array getGatewayClusterIdList()
 * @method string getConfigParams()
 * @method $this withConfigParams($value)
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCustomConfigParams()
 * @method $this withCustomConfigParams($value)
 * @method string getComment()
 * @method $this withComment($value)
 */
class ModifyClusterServiceConfig extends Rpc
{

    /**
     * @param array $gatewayClusterIdList
     *
     * @return $this
     */
	public function withGatewayClusterIdList(array $gatewayClusterIdList)
	{
	    $this->data['GatewayClusterIdList'] = $gatewayClusterIdList;
		foreach ($gatewayClusterIdList as $i => $iValue) {
			$this->options['query']['GatewayClusterIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getMasterPwd()
 * @method $this withMasterPwd($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getMetaStoreType()
 * @method $this withMetaStoreType($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getBootstrapAction()
 * @method string getMetaStoreConf()
 * @method $this withMetaStoreConf($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method array getTag()
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDb()
 * @method $this withUseCustomHiveMetaDb($value)
 * @method string getInitCustomHiveMetaDb()
 * @method $this withInitCustomHiveMetaDb($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getHostGroup()
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 */
class ModifyClusterTemplate extends Rpc
{

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $optionSoftWareList
     *
     * @return $this
     */
	public function withOptionSoftWareList(array $optionSoftWareList)
	{
	    $this->data['OptionSoftWareList'] = $optionSoftWareList;
		foreach ($optionSoftWareList as $i => $iValue) {
			$this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
	public function withHostGroup(array $hostGroup)
	{
	    $this->data['HostGroup'] = $hostGroup;
		foreach ($hostGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['SysDiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
			}
			if(isset($depth1Value['DiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
			}
			if(isset($depth1Value['SysDiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
			}
			if(isset($depth1Value['ClusterId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
			if(isset($depth1Value['HostGroupName'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
			}
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['DiskCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
			}
			if(isset($depth1Value['AutoRenew'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
			}
			if(isset($depth1Value['HostGroupId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
			}
			if(isset($depth1Value['NodeCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ChargeType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
			}
			if(isset($depth1Value['MultiInstanceTypes'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.MultiInstanceTypes'] = $depth1Value['MultiInstanceTypes'];
			}
			if(isset($depth1Value['CreateType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
			}
			if(isset($depth1Value['HostGroupType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
			}
		}

		return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['FileName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['Encrypt'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
			}
			if(isset($depth1Value['Replace'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getBootstrapAction()
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getExecutionPlanVersion()
 * @method $this withExecutionPlanVersion($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getEcsOrder()
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method array getJobIdList()
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getWorkflowDefinition()
 * @method $this withWorkflowDefinition($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class ModifyExecutionPlan extends Rpc
{

    /**
     * @param array $bootstrapAction
     *
     * @return $this
     */
	public function withBootstrapAction(array $bootstrapAction)
	{
	    $this->data['BootstrapAction'] = $bootstrapAction;
		foreach ($bootstrapAction as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['ExecutionTarget'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionTarget'] = $depth1Value['ExecutionTarget'];
			}
			if(isset($depth1Value['ExecutionMoment'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionMoment'] = $depth1Value['ExecutionMoment'];
			}
			if(isset($depth1Value['Arg'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['ExecutionFailStrategy'])){
				$this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.ExecutionFailStrategy'] = $depth1Value['ExecutionFailStrategy'];
			}
		}

		return $this;
    }

    /**
     * @param array $optionSoftWareList
     *
     * @return $this
     */
	public function withOptionSoftWareList(array $optionSoftWareList)
	{
	    $this->data['OptionSoftWareList'] = $optionSoftWareList;
		foreach ($optionSoftWareList as $i => $iValue) {
			$this->options['query']['OptionSoftWareList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $ecsOrder
     *
     * @return $this
     */
	public function withEcsOrder(array $ecsOrder)
	{
	    $this->data['EcsOrder'] = $ecsOrder;
		foreach ($ecsOrder as $depth1 => $depth1Value) {
			if(isset($depth1Value['NodeType'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
			}
			if(isset($depth1Value['DiskCount'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
			}
			if(isset($depth1Value['NodeCount'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
			}
			if(isset($depth1Value['DiskCapacity'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
			}
			if(isset($depth1Value['Index'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
		}

		return $this;
    }

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['query']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['FileName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
			}
			if(isset($depth1Value['Encrypt'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
			}
			if(isset($depth1Value['Replace'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getLifecycle()
 * @method $this withLifecycle($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getLogArchiveLocation()
 * @method $this withLogArchiveLocation($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class ModifyFlow extends Rpc
{
}

/**
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ModifyFlowCategory extends Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getLifecycle()
 * @method $this withLifecycle($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getLogArchiveLocation()
 * @method $this withLogArchiveLocation($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getGraph()
 * @method $this withGraph($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class ModifyFlowForWeb extends Rpc
{
}

/**
 * @method string getRetryPolicy()
 * @method $this withRetryPolicy($value)
 * @method string getRunConf()
 * @method $this withRunConf($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getParamConf()
 * @method $this withParamConf($value)
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getEnvConf()
 * @method $this withEnvConf($value)
 * @method string getMaxRunningTimeSec()
 * @method $this withMaxRunningTimeSec($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getCustomVariables()
 * @method $this withCustomVariables($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyFlowJob extends Rpc
{

    /**
     * @param array $resourceList
     *
     * @return $this
     */
	public function withResourceList(array $resourceList)
	{
	    $this->data['ResourceList'] = $resourceList;
		foreach ($resourceList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Path'])){
				$this->options['query']['ResourceList.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['Alias'])){
				$this->options['query']['ResourceList.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ModifyFlowProject extends Rpc
{
}

/**
 * @method array getUserList()
 * @method array getHostList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultQueue()
 * @method $this withDefaultQueue($value)
 * @method string getDefaultUser()
 * @method $this withDefaultUser($value)
 * @method array getQueueList()
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ModifyFlowProjectClusterSetting extends Rpc
{

    /**
     * @param array $userList
     *
     * @return $this
     */
	public function withUserList(array $userList)
	{
	    $this->data['UserList'] = $userList;
		foreach ($userList as $i => $iValue) {
			$this->options['query']['UserList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $hostList
     *
     * @return $this
     */
	public function withHostList(array $hostList)
	{
	    $this->data['HostList'] = $hostList;
		foreach ($hostList as $i => $iValue) {
			$this->options['query']['HostList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $queueList
     *
     * @return $this
     */
	public function withQueueList(array $queueList)
	{
	    $this->data['QueueList'] = $queueList;
		foreach ($queueList as $i => $iValue) {
			$this->options['query']['QueueList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getRunParameter()
 * @method $this withRunParameter($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 */
class ModifyJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getYarnsiteconfig()
 * @method $this withYarnsiteconfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method array getConfig()
 */
class ModifyResourcePool extends Rpc
{

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['Note'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 */
class ModifyResourcePoolSchedulerType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLeaf()
 * @method $this withLeaf($value)
 * @method string getParentQueueId()
 * @method $this withParentQueueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method array getConfig()
 */
class ModifyResourceQueue extends Rpc
{

    /**
     * @param array $config
     *
     * @return $this
     */
	public function withConfig(array $config)
	{
	    $this->data['Config'] = $config;
		foreach ($config as $depth1 => $depth1Value) {
			if(isset($depth1Value['ConfigKey'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
			}
			if(isset($depth1Value['Note'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
			}
			if(isset($depth1Value['ConfigValue'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
			}
			if(isset($depth1Value['Id'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Category'])){
				$this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
			}
		}

		return $this;
    }
}

/**
 * @method string getConfigItemBizId()
 * @method $this withConfigItemBizId($value)
 * @method string getConfigItemType()
 * @method $this withConfigItemType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getConfigItemInformation()
 * @method $this withConfigItemInformation($value)
 */
class ModifyScalingConfigItemV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyScalingGroupV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method array getCloudWatchTrigger()
 * @method string getTimeoutWithGrace()
 * @method $this withTimeoutWithGrace($value)
 * @method string getCooldown()
 * @method $this withCooldown($value)
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getWithGrace()
 * @method $this withWithGrace($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method array getSchedulerTrigger()
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class ModifyScalingRule extends Rpc
{

    /**
     * @param array $cloudWatchTrigger
     *
     * @return $this
     */
	public function withCloudWatchTrigger(array $cloudWatchTrigger)
	{
	    $this->data['CloudWatchTrigger'] = $cloudWatchTrigger;
		foreach ($cloudWatchTrigger as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['EvaluationCount'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.EvaluationCount'] = $depth1Value['EvaluationCount'];
			}
			if(isset($depth1Value['Threshold'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
			}
			if(isset($depth1Value['MetricName'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
			}
			if(isset($depth1Value['ComparisonOperator'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
			}
			if(isset($depth1Value['Statistics'])){
				$this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
			}
		}

		return $this;
    }

    /**
     * @param array $schedulerTrigger
     *
     * @return $this
     */
	public function withSchedulerTrigger(array $schedulerTrigger)
	{
	    $this->data['SchedulerTrigger'] = $schedulerTrigger;
		foreach ($schedulerTrigger as $depth1 => $depth1Value) {
			if(isset($depth1Value['LaunchTime'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchTime'] = $depth1Value['LaunchTime'];
			}
			if(isset($depth1Value['LaunchExpirationTime'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchExpirationTime'] = $depth1Value['LaunchExpirationTime'];
			}
			if(isset($depth1Value['RecurrenceValue'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceValue'] = $depth1Value['RecurrenceValue'];
			}
			if(isset($depth1Value['RecurrenceEndTime'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceEndTime'] = $depth1Value['RecurrenceEndTime'];
			}
			if(isset($depth1Value['RecurrenceType'])){
				$this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceType'] = $depth1Value['RecurrenceType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getWithGrace()
 * @method $this withWithGrace($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getTimeoutWithGrace()
 * @method $this withTimeoutWithGrace($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getActiveRuleCategory()
 * @method $this withActiveRuleCategory($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 */
class ModifyScalingTaskGroup extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 * @method string getSize()
 * @method $this withSize($value)
 */
class QueryAlarmHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class QueryEntity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPayload()
 * @method $this withPayload($value)
 */
class QueryTableData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTagId()
 * @method $this withTagId($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class QueryTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPayload()
 * @method $this withPayload($value)
 */
class QueryTrendData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RefreshClusterResourcePool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getForceRelease()
 * @method $this withForceRelease($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ReleaseCluster extends Rpc
{
}

/**
 * @method array getTemplateTagSet()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ReleaseClusterByTemplateTagForInternal extends Rpc
{

    /**
     * @param array $templateTagSet
     *
     * @return $this
     */
	public function withTemplateTagSet(array $templateTagSet)
	{
	    $this->data['TemplateTagSet'] = $templateTagSet;
		foreach ($templateTagSet as $i => $iValue) {
			$this->options['query']['TemplateTagSet.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 */
class ReleaseClusterHostGroup extends Rpc
{
}

/**
 * @method string getConfigItemType()
 * @method $this withConfigItemType($value)
 * @method string getConfigItemBizId()
 * @method $this withConfigItemBizId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class RemoveScalingConfigItemV2 extends Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getReRunFail()
 * @method $this withReRunFail($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class RerunFlow extends Rpc
{
}

/**
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getAutoPayOrder()
 * @method $this withAutoPayOrder($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method array getHostComponentInfo()
 * @method array getHostGroup()
 * @method array getPromotionInfo()
 */
class ResizeClusterV2 extends Rpc
{

    /**
     * @param array $hostComponentInfo
     *
     * @return $this
     */
	public function withHostComponentInfo(array $hostComponentInfo)
	{
	    $this->data['HostComponentInfo'] = $hostComponentInfo;
		foreach ($hostComponentInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['HostName'])){
				$this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
			}
			foreach ($depth1Value['ComponentNameList'] as $i => $iValue) {
				$this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ComponentNameList.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['ServiceName'])){
				$this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
			}
		}

		return $this;
    }

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
	public function withHostGroup(array $hostGroup)
	{
	    $this->data['HostGroup'] = $hostGroup;
		foreach ($hostGroup as $depth1 => $depth1Value) {
			if(isset($depth1Value['Period'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['SysDiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
			}
			if(isset($depth1Value['HostKeyPairName'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostKeyPairName'] = $depth1Value['HostKeyPairName'];
			}
			if(isset($depth1Value['DiskCapacity'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
			}
			if(isset($depth1Value['SysDiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
			}
			if(isset($depth1Value['ClusterId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
			}
			if(isset($depth1Value['DiskType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
			}
			if(isset($depth1Value['HostGroupName'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
			}
			if(isset($depth1Value['VswitchId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.VswitchId'] = $depth1Value['VswitchId'];
			}
			if(isset($depth1Value['DiskCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
			}
			if(isset($depth1Value['AutoRenew'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
			}
			if(isset($depth1Value['HostGroupId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
			}
			if(isset($depth1Value['NodeCount'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['Comment'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
			}
			if(isset($depth1Value['ChargeType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
			}
			if(isset($depth1Value['CreateType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
			}
			if(isset($depth1Value['HostPassword'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostPassword'] = $depth1Value['HostPassword'];
			}
			if(isset($depth1Value['HostGroupType'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
			}
		}

		return $this;
    }

    /**
     * @param array $promotionInfo
     *
     * @return $this
     */
	public function withPromotionInfo(array $promotionInfo)
	{
	    $this->data['PromotionInfo'] = $promotionInfo;
		foreach ($promotionInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['PromotionOptionCode'])){
				$this->options['query']['PromotionInfo.' . ($depth1 + 1) . '.PromotionOptionCode'] = $depth1Value['PromotionOptionCode'];
			}
			if(isset($depth1Value['ProductCode'])){
				$this->options['query']['PromotionInfo.' . ($depth1 + 1) . '.ProductCode'] = $depth1Value['ProductCode'];
			}
			if(isset($depth1Value['PromotionOptionNo'])){
				$this->options['query']['PromotionInfo.' . ($depth1 + 1) . '.PromotionOptionNo'] = $depth1Value['PromotionOptionNo'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackupPlanId()
 * @method $this withBackupPlanId($value)
 * @method string getBackupId()
 * @method $this withBackupId($value)
 */
class RestoreBackup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityId()
 * @method $this withEntityId($value)
 * @method string getRevision()
 * @method $this withRevision($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 */
class RestoreFlowEntitySnapshot extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ResumeExecutionPlanScheduler extends Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ResumeFlow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 */
class RetryOperation extends Rpc
{
}

/**
 * @method array getHostGroupIdList()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceActionName()
 * @method $this withServiceActionName($value)
 * @method string getIsRolling()
 * @method $this withIsRolling($value)
 * @method string getTotlerateFailCount()
 * @method $this withTotlerateFailCount($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getExecuteStrategy()
 * @method $this withExecuteStrategy($value)
 * @method string getOnlyRestartStaleConfigNodes()
 * @method $this withOnlyRestartStaleConfigNodes($value)
 * @method string getNodeCountPerBatch()
 * @method $this withNodeCountPerBatch($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCustomCommand()
 * @method $this withCustomCommand($value)
 * @method string getComponentNameList()
 * @method $this withComponentNameList($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getCustomParams()
 * @method $this withCustomParams($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getHostIdList()
 * @method $this withHostIdList($value)
 * @method string getTurnOnMaintenanceMode()
 * @method $this withTurnOnMaintenanceMode($value)
 */
class RunClusterServiceAction extends Rpc
{

    /**
     * @param array $hostGroupIdList
     *
     * @return $this
     */
	public function withHostGroupIdList(array $hostGroupIdList)
	{
	    $this->data['HostGroupIdList'] = $hostGroupIdList;
		foreach ($hostGroupIdList as $i => $iValue) {
			$this->options['query']['HostGroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getArguments()
 * @method $this withArguments($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RunExecutionPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingActionType()
 * @method $this withScalingActionType($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getActionParam()
 * @method $this withActionParam($value)
 */
class RunScalingActionV2 extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getFromTimestamp()
 * @method $this withFromTimestamp($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getHostInnerIp()
 * @method $this withHostInnerIp($value)
 * @method string getToTimestamp()
 * @method $this withToTimestamp($value)
 * @method string getSlsQueryString()
 * @method $this withSlsQueryString($value)
 */
class SearchLog extends Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class StartFlow extends Rpc
{
}

/**
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class SubmitFlow extends Rpc
{
}

/**
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SubmitFlowJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class SuspendExecutionPlanScheduler extends Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SuspendFlow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method array getTag()
 */
class TagResourcesSystemTags extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

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
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLibraryBizId()
 * @method $this withLibraryBizId($value)
 * @method array getClusterBizIdList()
 */
class UninstallLibraries extends Rpc
{

    /**
     * @param array $clusterBizIdList
     *
     * @return $this
     */
	public function withClusterBizIdList(array $clusterBizIdList)
	{
	    $this->data['ClusterBizIdList'] = $clusterBizIdList;
		foreach ($clusterBizIdList as $i => $iValue) {
			$this->options['query']['ClusterBizIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getResourceId()
 * @method string getTagOwnerUid()
 * @method $this withTagOwnerUid($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResourcesSystemTags extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskBizId()
 * @method $this withTaskBizId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateLibraryInstallTaskStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class UpdateTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getUserAccountParamList()
 * @method array getGroupIdList()
 * @method array getRoleIdList()
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateUser extends Rpc
{

    /**
     * @param array $userAccountParamList
     *
     * @return $this
     */
	public function withUserAccountParamList(array $userAccountParamList)
	{
	    $this->data['UserAccountParamList'] = $userAccountParamList;
		foreach ($userAccountParamList as $depth1 => $depth1Value) {
			if(isset($depth1Value['AccountType'])){
				$this->options['query']['UserAccountParamList.' . ($depth1 + 1) . '.AccountType'] = $depth1Value['AccountType'];
			}
			if(isset($depth1Value['AuthType'])){
				$this->options['query']['UserAccountParamList.' . ($depth1 + 1) . '.AuthType'] = $depth1Value['AuthType'];
			}
			if(isset($depth1Value['AccountPassword'])){
				$this->options['query']['UserAccountParamList.' . ($depth1 + 1) . '.AccountPassword'] = $depth1Value['AccountPassword'];
			}
		}

		return $this;
    }

    /**
     * @param array $groupIdList
     *
     * @return $this
     */
	public function withGroupIdList(array $groupIdList)
	{
	    $this->data['GroupIdList'] = $groupIdList;
		foreach ($groupIdList as $i => $iValue) {
			$this->options['query']['GroupIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $roleIdList
     *
     * @return $this
     */
	public function withRoleIdList(array $roleIdList)
	{
	    $this->data['RoleIdList'] = $roleIdList;
		foreach ($roleIdList as $i => $iValue) {
			$this->options['query']['RoleIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
