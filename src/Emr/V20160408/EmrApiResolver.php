<?php

namespace AlibabaCloud\Emr\V20160408;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateUserStatus updateUserStatus(array $options = [])
 * @method DeleteBatchResourceUsers deleteBatchResourceUsers(array $options = [])
 * @method QueryUserActionsPolicy queryUserActionsPolicy(array $options = [])
 * @method CreateBatchUsers createBatchUsers(array $options = [])
 * @method AddUserResourceRole addUserResourceRole(array $options = [])
 * @method DeleteUserResourceRole deleteUserResourceRole(array $options = [])
 * @method CreateUserGroup createUserGroup(array $options = [])
 * @method CreateUser createUser(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method DescribeUserGroup describeUserGroup(array $options = [])
 * @method UpdateUserGroup updateUserGroup(array $options = [])
 * @method DescribeUser describeUser(array $options = [])
 * @method AddResourceToUsers addResourceToUsers(array $options = [])
 * @method SaveBatchUserAccountInfo saveBatchUserAccountInfo(array $options = [])
 * @method ListUserGroups listUserGroups(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 * @method PageListUsers pageListUsers(array $options = [])
 * @method DeleteResourceUser deleteResourceUser(array $options = [])
 * @method ListUsersByCondition listUsersByCondition(array $options = [])
 * @method SaveUserAccountInfo saveUserAccountInfo(array $options = [])
 * @method QueryUserPolicies queryUserPolicies(array $options = [])
 * @method PageListUserGroups pageListUserGroups(array $options = [])
 * @method DeleteUserGroup deleteUserGroup(array $options = [])
 * @method PageListResourceUsers pageListResourceUsers(array $options = [])
 * @method ListHostPool listHostPool(array $options = [])
 * @method ListKafkaReassign listKafkaReassign(array $options = [])
 * @method DeleteHostPool deleteHostPool(array $options = [])
 * @method OfflineKafkaBroker offlineKafkaBroker(array $options = [])
 * @method CreateHostPool createHostPool(array $options = [])
 * @method ListKafkaReassignTopic listKafkaReassignTopic(array $options = [])
 * @method PlanComponentTopo planComponentTopo(array $options = [])
 * @method ListKafkaTopicStatistics listKafkaTopicStatistics(array $options = [])
 * @method StartKafkaPreferredReplicaElection startKafkaPreferredReplicaElection(array $options = [])
 * @method ListClusterSupportService listClusterSupportService(array $options = [])
 * @method DescribeKafkaReassign describeKafkaReassign(array $options = [])
 * @method ListStackService listStackService(array $options = [])
 * @method CreateClusterWithHostPool createClusterWithHostPool(array $options = [])
 * @method StartKafkaBrokerDiskBalancer startKafkaBrokerDiskBalancer(array $options = [])
 * @method ListHpHost listHpHost(array $options = [])
 * @method RemoveHpHost removeHpHost(array $options = [])
 * @method ListClusterInstalledService listClusterInstalledService(array $options = [])
 * @method ReassignKafka reassignKafka(array $options = [])
 * @method UpdateKafkaReassignParam updateKafkaReassignParam(array $options = [])
 * @method AddHpHost addHpHost(array $options = [])
 * @method ModifyHostPool modifyHostPool(array $options = [])
 * @method DescribeKafkaBroker describeKafkaBroker(array $options = [])
 * @method ListKafkaBroker listKafkaBroker(array $options = [])
 * @method ListStack listStack(array $options = [])
 * @method PlanHostName planHostName(array $options = [])
 * @method DescribeHostPool describeHostPool(array $options = [])
 * @method ListETLJobRelease listETLJobRelease(array $options = [])
 * @method DescribeDataSourceSchemaDatabase describeDataSourceSchemaDatabase(array $options = [])
 * @method UpdateProjectSetting updateProjectSetting(array $options = [])
 * @method DescribeETLJob describeETLJob(array $options = [])
 * @method DescribeETLJobInstance describeETLJobInstance(array $options = [])
 * @method DeleteETLJob deleteETLJob(array $options = [])
 * @method UpdateETLJobStage updateETLJobStage(array $options = [])
 * @method CreateNavNode createNavNode(array $options = [])
 * @method UpdateDataSource updateDataSource(array $options = [])
 * @method DeleteNavNode deleteNavNode(array $options = [])
 * @method UpdateNavNode updateNavNode(array $options = [])
 * @method ResolveETLJobSqlSchema resolveETLJobSqlSchema(array $options = [])
 * @method CheckDataSource checkDataSource(array $options = [])
 * @method CloneETLJob cloneETLJob(array $options = [])
 * @method ListETLJobTriggerEntity listETLJobTriggerEntity(array $options = [])
 * @method KillETLJobInstance killETLJobInstance(array $options = [])
 * @method DescribeETLJobStageOutputSchema describeETLJobStageOutputSchema(array $options = [])
 * @method DescribeETLJobSqlSchema describeETLJobSqlSchema(array $options = [])
 * @method DescribeDataSourceCommand describeDataSourceCommand(array $options = [])
 * @method ListDataSourceSchemaDatabase listDataSourceSchemaDatabase(array $options = [])
 * @method GetJobMigrateResult getJobMigrateResult(array $options = [])
 * @method ListDataSourceSchemaTable listDataSourceSchemaTable(array $options = [])
 * @method DescribeFlowVariableCollection describeFlowVariableCollection(array $options = [])
 * @method ReleaseETLJob releaseETLJob(array $options = [])
 * @method DescribeDataSource describeDataSource(array $options = [])
 * @method DescribeDataSourceSchemaTable describeDataSourceSchemaTable(array $options = [])
 * @method CancelETLJobRelease cancelETLJobRelease(array $options = [])
 * @method DeleteDataSource deleteDataSource(array $options = [])
 * @method ListClusterTag listClusterTag(array $options = [])
 * @method UpdateETLJob updateETLJob(array $options = [])
 * @method SyncDataSourceSchemaTable syncDataSourceSchemaTable(array $options = [])
 * @method SyncDataSourceSchemaDatabase syncDataSourceSchemaDatabase(array $options = [])
 * @method ListETLJobInstance listETLJobInstance(array $options = [])
 * @method ModifyFlowVariableCollection modifyFlowVariableCollection(array $options = [])
 * @method RunETLJob runETLJob(array $options = [])
 * @method ListDataSource listDataSource(array $options = [])
 * @method MigrateJobs migrateJobs(array $options = [])
 * @method CloneDataSource cloneDataSource(array $options = [])
 * @method ListNavSubTree listNavSubTree(array $options = [])
 * @method CreateETLJob createETLJob(array $options = [])
 * @method CreateDataSource createDataSource(array $options = [])
 * @method DeleteClusterHostGroup deleteClusterHostGroup(array $options = [])
 * @method CreateClusterHostGroup createClusterHostGroup(array $options = [])
 * @method RenderResourcePoolXml renderResourcePoolXml(array $options = [])
 * @method ModifyClusterHostGroup modifyClusterHostGroup(array $options = [])
 * @method ListResourceQueue listResourceQueue(array $options = [])
 * @method CommonApiWhiteList commonApiWhiteList(array $options = [])
 * @method ListClusterServiceCustomActionSupportConfig listClusterServiceCustomActionSupportConfig(array $options = [])
 * @method MigrateClusterHostGroupHost migrateClusterHostGroupHost(array $options = [])
 * @method ListSupportedServiceName listSupportedServiceName(array $options = [])
 * @method MetastoreUpdateKafkaTopicBatch metastoreUpdateKafkaTopicBatch(array $options = [])
 * @method MetastoreDescribeKafkaTopic metastoreDescribeKafkaTopic(array $options = [])
 * @method MetastoreListKafkaTopic metastoreListKafkaTopic(array $options = [])
 * @method MetastoreUpdateKafkaTopic metastoreUpdateKafkaTopic(array $options = [])
 * @method MetastoreListKafkaConsumerGroup metastoreListKafkaConsumerGroup(array $options = [])
 * @method MetastoreDescribeKafkaConsumerGroup metastoreDescribeKafkaConsumerGroup(array $options = [])
 * @method MetastoreCreateKafkaTopic metastoreCreateKafkaTopic(array $options = [])
 * @method AttachPubIp attachPubIp(array $options = [])
 * @method MetastoreListTablePartition metastoreListTablePartition(array $options = [])
 * @method ContextQueryLog contextQueryLog(array $options = [])
 * @method StartFlow startFlow(array $options = [])
 * @method MetastoreDeleteKafkaTopic metastoreDeleteKafkaTopic(array $options = [])
 * @method GetLogHistogram getLogHistogram(array $options = [])
 * @method RemoveClusterHosts removeClusterHosts(array $options = [])
 * @method ListFlowNodeInstance listFlowNodeInstance(array $options = [])
 * @method DescribeFlowJobStatistic describeFlowJobStatistic(array $options = [])
 * @method DescribeClusterStatistics describeClusterStatistics(array $options = [])
 * @method MetastoreUpdateTable metastoreUpdateTable(array $options = [])
 * @method MetastoreDescribeTask metastoreDescribeTask(array $options = [])
 * @method MetastoreRetryTask metastoreRetryTask(array $options = [])
 * @method MetastoreListTask metastoreListTask(array $options = [])
 * @method MetastoreDescribeDataSource metastoreDescribeDataSource(array $options = [])
 * @method MetastoreListDataSource metastoreListDataSource(array $options = [])
 * @method QuerySlsMetricData querySlsMetricData(array $options = [])
 * @method ListJobMigrateInfo listJobMigrateInfo(array $options = [])
 * @method ListExecutePlanMigrateInfo listExecutePlanMigrateInfo(array $options = [])
 * @method DescribeSecurityGroupAttribute describeSecurityGroupAttribute(array $options = [])
 * @method AuthorizeSecurityGroup authorizeSecurityGroup(array $options = [])
 * @method RetryCreateUserPassword retryCreateUserPassword(array $options = [])
 * @method ModifyUserStatistics modifyUserStatistics(array $options = [])
 * @method ModifyAlertUserGroup modifyAlertUserGroup(array $options = [])
 * @method ModifyAlertDingDingGroup modifyAlertDingDingGroup(array $options = [])
 * @method ModifyAlertContact modifyAlertContact(array $options = [])
 * @method ListUserStatistics listUserStatistics(array $options = [])
 * @method ListAlertUserGroup listAlertUserGroup(array $options = [])
 * @method ListAlertDingDingGroup listAlertDingDingGroup(array $options = [])
 * @method ListAlertContacts listAlertContacts(array $options = [])
 * @method DescribeUserStatistics describeUserStatistics(array $options = [])
 * @method DeleteAlertUserGroups deleteAlertUserGroups(array $options = [])
 * @method DeleteAlertDingDingGroups deleteAlertDingDingGroups(array $options = [])
 * @method DeleteAlertContacts deleteAlertContacts(array $options = [])
 * @method CreateVerificationCode createVerificationCode(array $options = [])
 * @method CreateUserStatistics createUserStatistics(array $options = [])
 * @method CreateAlertUserGroup createAlertUserGroup(array $options = [])
 * @method CreateAlertDingDingGroup createAlertDingDingGroup(array $options = [])
 * @method CreateAlertContact createAlertContact(array $options = [])
 * @method CloneFlowJob cloneFlowJob(array $options = [])
 * @method CloneFlow cloneFlow(array $options = [])
 * @method ModifyScalingTaskGroup modifyScalingTaskGroup(array $options = [])
 * @method ModifyScalingRule modifyScalingRule(array $options = [])
 * @method ListScalingTaskGroup listScalingTaskGroup(array $options = [])
 * @method ListScalingRule listScalingRule(array $options = [])
 * @method ListScalingActivity listScalingActivity(array $options = [])
 * @method ListFlow listFlow(array $options = [])
 * @method ListClusterServiceComponentHealthInfo listClusterServiceComponentHealthInfo(array $options = [])
 * @method DescribeScalingTaskGroup describeScalingTaskGroup(array $options = [])
 * @method DescribeScalingRule describeScalingRule(array $options = [])
 * @method DescribeScalingActivity describeScalingActivity(array $options = [])
 * @method DeleteScalingTaskGroup deleteScalingTaskGroup(array $options = [])
 * @method DeleteScalingRule deleteScalingRule(array $options = [])
 * @method CreateScalingTaskGroup createScalingTaskGroup(array $options = [])
 * @method CreateScalingRule createScalingRule(array $options = [])
 * @method ListFlowClusterAllHosts listFlowClusterAllHosts(array $options = [])
 * @method ListEmrMainVersion listEmrMainVersion(array $options = [])
 * @method DescribeEmrMainVersion describeEmrMainVersion(array $options = [])
 * @method DeleteFlowProjectById deleteFlowProjectById(array $options = [])
 * @method OperateExistsNodeCluster operateExistsNodeCluster(array $options = [])
 * @method MetastoreModifyDataResource metastoreModifyDataResource(array $options = [])
 * @method MetastoreListDataResources metastoreListDataResources(array $options = [])
 * @method MetastoreDeleteDataResource metastoreDeleteDataResource(array $options = [])
 * @method MetastoreCreateDataResource metastoreCreateDataResource(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListFlowNodeSqlResult listFlowNodeSqlResult(array $options = [])
 * @method ListFlowJob listFlowJob(array $options = [])
 * @method ListFlowClusterAll listFlowClusterAll(array $options = [])
 * @method ListEmrAvailableResource listEmrAvailableResource(array $options = [])
 * @method ListEmrAvailableConfig listEmrAvailableConfig(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method CreateUsers createUsers(array $options = [])
 * @method CreateUserPassword createUserPassword(array $options = [])
 * @method CreateClusterWithTemplate createClusterWithTemplate(array $options = [])
 * @method ModifyFlowForWeb modifyFlowForWeb(array $options = [])
 * @method KillFlowJob killFlowJob(array $options = [])
 * @method GetUserSubmissionStatisticInfo getUserSubmissionStatisticInfo(array $options = [])
 * @method GetUserOutputStatisticInfo getUserOutputStatisticInfo(array $options = [])
 * @method GetUserInputStatisticInfo getUserInputStatisticInfo(array $options = [])
 * @method GetQueueSubmissionStatisticInfo getQueueSubmissionStatisticInfo(array $options = [])
 * @method GetQueueOutputStatisticInfo getQueueOutputStatisticInfo(array $options = [])
 * @method GetQueueInputStatisticInfo getQueueInputStatisticInfo(array $options = [])
 * @method GetJobRunningTimeStatisticInfo getJobRunningTimeStatisticInfo(array $options = [])
 * @method GetJobOutputStatisticInfo getJobOutputStatisticInfo(array $options = [])
 * @method GetJobInputStatisticInfo getJobInputStatisticInfo(array $options = [])
 * @method GetHdfsCapacityStatisticInfo getHdfsCapacityStatisticInfo(array $options = [])
 * @method CreateFlowForWeb createFlowForWeb(array $options = [])
 * @method DescribeAvailableInstanceType describeAvailableInstanceType(array $options = [])
 * @method SuspendFlow suspendFlow(array $options = [])
 * @method SubmitFlowJob submitFlowJob(array $options = [])
 * @method SubmitFlow submitFlow(array $options = [])
 * @method ResumeFlow resumeFlow(array $options = [])
 * @method RerunFlow rerunFlow(array $options = [])
 * @method ModifyFlowProjectClusterSetting modifyFlowProjectClusterSetting(array $options = [])
 * @method ModifyFlowProject modifyFlowProject(array $options = [])
 * @method ModifyFlowJob modifyFlowJob(array $options = [])
 * @method ModifyFlowCategory modifyFlowCategory(array $options = [])
 * @method ModifyFlow modifyFlow(array $options = [])
 * @method ListFlowProjectUser listFlowProjectUser(array $options = [])
 * @method ListFlowProjectClusterSetting listFlowProjectClusterSetting(array $options = [])
 * @method ListFlowProject listFlowProject(array $options = [])
 * @method ListFlowNodeInstanceContainerStatus listFlowNodeInstanceContainerStatus(array $options = [])
 * @method ListFlowJobHistory listFlowJobHistory(array $options = [])
 * @method ListFlowInstance listFlowInstance(array $options = [])
 * @method ListFlowClusterHost listFlowClusterHost(array $options = [])
 * @method ListFlowCluster listFlowCluster(array $options = [])
 * @method ListFlowCategory listFlowCategory(array $options = [])
 * @method KillFlow killFlow(array $options = [])
 * @method DescribeFlowProjectClusterSetting describeFlowProjectClusterSetting(array $options = [])
 * @method DescribeFlowProject describeFlowProject(array $options = [])
 * @method DescribeFlowNodeInstanceLauncherLog describeFlowNodeInstanceLauncherLog(array $options = [])
 * @method DescribeFlowNodeInstanceContainerLog describeFlowNodeInstanceContainerLog(array $options = [])
 * @method DescribeFlowNodeInstance describeFlowNodeInstance(array $options = [])
 * @method DescribeFlowJob describeFlowJob(array $options = [])
 * @method DescribeFlowInstance describeFlowInstance(array $options = [])
 * @method DescribeFlowCategoryTree describeFlowCategoryTree(array $options = [])
 * @method DescribeFlowCategory describeFlowCategory(array $options = [])
 * @method DescribeFlow describeFlow(array $options = [])
 * @method DeleteFlowProjectUser deleteFlowProjectUser(array $options = [])
 * @method DeleteFlowProjectClusterSetting deleteFlowProjectClusterSetting(array $options = [])
 * @method DeleteFlowProject deleteFlowProject(array $options = [])
 * @method DeleteFlowJob deleteFlowJob(array $options = [])
 * @method DeleteFlowCategory deleteFlowCategory(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method CreateFlowProjectUser createFlowProjectUser(array $options = [])
 * @method CreateFlowProjectClusterSetting createFlowProjectClusterSetting(array $options = [])
 * @method CreateFlowProject createFlowProject(array $options = [])
 * @method CreateFlowJob createFlowJob(array $options = [])
 * @method CreateFlowCategory createFlowCategory(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 * @method RunOpsCommand runOpsCommand(array $options = [])
 * @method ListOpsOperationTask listOpsOperationTask(array $options = [])
 * @method ListOpsOperation listOpsOperation(array $options = [])
 * @method GetSupportedOpsCommand getSupportedOpsCommand(array $options = [])
 * @method GetOpsCommandResultOnce getOpsCommandResultOnce(array $options = [])
 * @method GetOpsCommandResult getOpsCommandResult(array $options = [])
 * @method GetOpsCommandDetail getOpsCommandDetail(array $options = [])
 * @method SearchLog searchLog(array $options = [])
 * @method ListSlsLogstoreInfo listSlsLogstoreInfo(array $options = [])
 * @method ListServiceLog listServiceLog(array $options = [])
 * @method GetLogDownloadUrl getLogDownloadUrl(array $options = [])
 * @method SuspendExecutionPlanInstance suspendExecutionPlanInstance(array $options = [])
 * @method RetryExecutionPlanInstance retryExecutionPlanInstance(array $options = [])
 * @method ResumeExecutionPlanInstance resumeExecutionPlanInstance(array $options = [])
 * @method RefreshClusterResourcePool refreshClusterResourcePool(array $options = [])
 * @method ModifyResourceQueue modifyResourceQueue(array $options = [])
 * @method ModifyResourcePool modifyResourcePool(array $options = [])
 * @method ModifyJobExecutionPlanParam modifyJobExecutionPlanParam(array $options = [])
 * @method ModifyJobExecutionPlanFolder modifyJobExecutionPlanFolder(array $options = [])
 * @method ModifyClusterTemplate modifyClusterTemplate(array $options = [])
 * @method ListJobExecutionPlanParams listJobExecutionPlanParams(array $options = [])
 * @method ListJobExecutionPlanHierarchy listJobExecutionPlanHierarchy(array $options = [])
 * @method ListClusterTemplates listClusterTemplates(array $options = [])
 * @method DescribeClusterTemplate describeClusterTemplate(array $options = [])
 * @method DeleteResourceQueue deleteResourceQueue(array $options = [])
 * @method DeleteClusterTemplate deleteClusterTemplate(array $options = [])
 * @method CreateResourceQueue createResourceQueue(array $options = [])
 * @method CreateClusterTemplate createClusterTemplate(array $options = [])
 * @method ModifyResourcePoolSchedulerType modifyResourcePoolSchedulerType(array $options = [])
 * @method ListResourcePool listResourcePool(array $options = [])
 * @method DescribeClusterResourcePoolSchedulerType describeClusterResourcePoolSchedulerType(array $options = [])
 * @method DeleteResourcePool deleteResourcePool(array $options = [])
 * @method CreateResourcePool createResourcePool(array $options = [])
 * @method QueryAlarmRules queryAlarmRules(array $options = [])
 * @method QueryAlarmHistory queryAlarmHistory(array $options = [])
 * @method ListClusterServiceQuickLink listClusterServiceQuickLink(array $options = [])
 * @method ListClusterServiceConfigHistory listClusterServiceConfigHistory(array $options = [])
 * @method ListClusterHostGroup listClusterHostGroup(array $options = [])
 * @method DescribeClusterServiceConfigTag describeClusterServiceConfigTag(array $options = [])
 * @method ResizeClusterV2 resizeClusterV2(array $options = [])
 * @method ReleaseClusterHostGroup releaseClusterHostGroup(array $options = [])
 * @method DescribeClusterV2 describeClusterV2(array $options = [])
 * @method CreateClusterV2 createClusterV2(array $options = [])
 * @method TerminateClusterOperation terminateClusterOperation(array $options = [])
 * @method DescribeClusterOpLog describeClusterOpLog(array $options = [])
 * @method ListDependedService listDependedService(array $options = [])
 * @method RunClusterServiceAction runClusterServiceAction(array $options = [])
 * @method ModifyClusterServiceConfig modifyClusterServiceConfig(array $options = [])
 * @method ListRequiredService listRequiredService(array $options = [])
 * @method ListClusterService listClusterService(array $options = [])
 * @method ListClusterOperationHostTask listClusterOperationHostTask(array $options = [])
 * @method ListClusterOperationHost listClusterOperationHost(array $options = [])
 * @method ListClusterOperation listClusterOperation(array $options = [])
 * @method ListClusterHostComponent listClusterHostComponent(array $options = [])
 * @method ListClusterHost listClusterHost(array $options = [])
 * @method DescribeClusterServiceConfigHistory describeClusterServiceConfigHistory(array $options = [])
 * @method DescribeClusterServiceConfig describeClusterServiceConfig(array $options = [])
 * @method DescribeClusterService describeClusterService(array $options = [])
 * @method DescribeClusterOperationHostTaskLog describeClusterOperationHostTaskLog(array $options = [])
 * @method DescribeClusterBasicInfo describeClusterBasicInfo(array $options = [])
 * @method AddClusterService addClusterService(array $options = [])
 * @method CancelOrder cancelOrder(array $options = [])
 * @method RunNoteParagraphs runNoteParagraphs(array $options = [])
 * @method MetastoreSearchTables metastoreSearchTables(array $options = [])
 * @method MetastoreListTables metastoreListTables(array $options = [])
 * @method MetastoreListDatabases metastoreListDatabases(array $options = [])
 * @method MetastoreDropTable metastoreDropTable(array $options = [])
 * @method MetastoreDropDatabase metastoreDropDatabase(array $options = [])
 * @method MetastoreDescribeTable metastoreDescribeTable(array $options = [])
 * @method MetastoreDescribeDatabase metastoreDescribeDatabase(array $options = [])
 * @method MetastoreDataPreview metastoreDataPreview(array $options = [])
 * @method MetastoreCreateTable metastoreCreateTable(array $options = [])
 * @method MetastoreCreateDatabase metastoreCreateDatabase(array $options = [])
 * @method StopParagraph stopParagraph(array $options = [])
 * @method RunParagraph runParagraph(array $options = [])
 * @method DescribeParagraph describeParagraph(array $options = [])
 * @method DeleteParagraph deleteParagraph(array $options = [])
 * @method DeleteNote deleteNote(array $options = [])
 * @method SaveParagraph saveParagraph(array $options = [])
 * @method RetryExecutionPlan retryExecutionPlan(array $options = [])
 * @method ListNotes listNotes(array $options = [])
 * @method DetachClusterForNote detachClusterForNote(array $options = [])
 * @method DescribeNote describeNote(array $options = [])
 * @method CreateParagraph createParagraph(array $options = [])
 * @method CreateNote createNote(array $options = [])
 * @method AttachClusterForNote attachClusterForNote(array $options = [])
 * @method ModifyExecutionPlanScheduleInfo modifyExecutionPlanScheduleInfo(array $options = [])
 * @method ModifyExecutionPlanJobInfo modifyExecutionPlanJobInfo(array $options = [])
 * @method ModifyExecutionPlanClusterInfo modifyExecutionPlanClusterInfo(array $options = [])
 * @method ModifyExecutionPlanBasicInfo modifyExecutionPlanBasicInfo(array $options = [])
 * @method ListJobExecutionInstanceTrend listJobExecutionInstanceTrend(array $options = [])
 * @method ListFailureJobExecutionInstances listFailureJobExecutionInstances(array $options = [])
 * @method ListExecutionPlanInstanceTrend listExecutionPlanInstanceTrend(array $options = [])
 * @method ListClusterScripts listClusterScripts(array $options = [])
 * @method DescribeClusterScript describeClusterScript(array $options = [])
 * @method DeleteClusterScript deleteClusterScript(array $options = [])
 * @method CreateClusterScript createClusterScript(array $options = [])
 * @method KillExecutionPlanInstance killExecutionPlanInstance(array $options = [])
 * @method SuspendExecutionPlanScheduler suspendExecutionPlanScheduler(array $options = [])
 * @method RunExecutionPlan runExecutionPlan(array $options = [])
 * @method ResumeExecutionPlanScheduler resumeExecutionPlanScheduler(array $options = [])
 * @method ReleaseCluster releaseCluster(array $options = [])
 * @method ModifyJob modifyJob(array $options = [])
 * @method ModifyExecutionPlan modifyExecutionPlan(array $options = [])
 * @method ModifyClusterName modifyClusterName(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListJobInstanceWorkers listJobInstanceWorkers(array $options = [])
 * @method ListJobExecutionInstances listJobExecutionInstances(array $options = [])
 * @method ListExecutionPlans listExecutionPlans(array $options = [])
 * @method ListExecutionPlanInstances listExecutionPlanInstances(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method KillExecutionJobInstance killExecutionJobInstance(array $options = [])
 * @method DescribeJob describeJob(array $options = [])
 * @method DescribeExecutionPlan describeExecutionPlan(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteExecutionPlan deleteExecutionPlan(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method CreateExecutionPlan createExecutionPlan(array $options = [])
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
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 * @method string getUpdateStatus()
 * @method $this withUpdateStatus($value)
 */
class UpdateUserStatus extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getUserId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class DeleteBatchResourceUsers extends Rpc
{

    /**
     * @param array $userId
     *
     * @return $this
     */
    public function withUserId(array $userId)
    {
        $this->data['UserId'] = $userId;
        foreach ($userId as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getActionName()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 */
class QueryUserActionsPolicy extends Rpc
{

    /**
     * @param array $actionName
     *
     * @return $this
     */
    public function withActionName(array $actionName)
    {
        $this->data['ActionName'] = $actionName;
        foreach ($actionName as $i => $iValue) {
            $this->options['query']['ActionName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getRoleId()
 * @method array getGroupId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getUserBaseParam()
 */
class CreateBatchUsers extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $groupId
     *
     * @return $this
     */
    public function withGroupId(array $groupId)
    {
        $this->data['GroupId'] = $groupId;
        foreach ($groupId as $i => $iValue) {
            $this->options['query']['GroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $userBaseParam
     *
     * @return $this
     */
    public function withUserBaseParam(array $userBaseParam)
    {
        $this->data['UserBaseParam'] = $userBaseParam;
        foreach ($userBaseParam as $depth1 => $depth1Value) {
            $this->options['query']['UserBaseParam.' . ($depth1 + 1) . '.AliyunUserId'] = $depth1Value['AliyunUserId'];
            $this->options['query']['UserBaseParam.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
            $this->options['query']['UserBaseParam.' . ($depth1 + 1) . '.UserType'] = $depth1Value['UserType'];
            $this->options['query']['UserBaseParam.' . ($depth1 + 1) . '.IsSuperAdmin'] = $depth1Value['IsSuperAdmin'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 */
class AddUserResourceRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getRoleId()
 * @method $this withRoleId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 */
class DeleteUserResourceRole extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getRoleId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateUserGroup extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getUserAccountParam()
 * @method array getRoleId()
 * @method array getGroupId()
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIsSuperAdmin()
 * @method $this withIsSuperAdmin($value)
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
     * @param array $userAccountParam
     *
     * @return $this
     */
    public function withUserAccountParam(array $userAccountParam)
    {
        $this->data['UserAccountParam'] = $userAccountParam;
        foreach ($userAccountParam as $depth1 => $depth1Value) {
            $this->options['query']['UserAccountParam.' . ($depth1 + 1) . '.AccountType'] = $depth1Value['AccountType'];
            $this->options['query']['UserAccountParam.' . ($depth1 + 1) . '.AuthType'] = $depth1Value['AuthType'];
            $this->options['query']['UserAccountParam.' . ($depth1 + 1) . '.AccountPassword'] = $depth1Value['AccountPassword'];
        }

        return $this;
    }

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $groupId
     *
     * @return $this
     */
    public function withGroupId(array $groupId)
    {
        $this->data['GroupId'] = $groupId;
        foreach ($groupId as $i => $iValue) {
            $this->options['query']['GroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
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
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DescribeUserGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getRoleId()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateUserGroup extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 */
class DescribeUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method array getRoleId()
 * @method array getUserId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class AddResourceToUsers extends Rpc
{

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $userId
     *
     * @return $this
     */
    public function withUserId(array $userId)
    {
        $this->data['UserId'] = $userId;
        foreach ($userId as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method array getUserId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 */
class SaveBatchUserAccountInfo extends Rpc
{

    /**
     * @param array $userId
     *
     * @return $this
     */
    public function withUserId(array $userId)
    {
        $this->data['UserId'] = $userId;
        foreach ($userId as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 */
class ListUserGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getUserAccountParam()
 * @method array getRoleId()
 * @method array getGroupId()
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getIsSuperAdmin()
 * @method $this withIsSuperAdmin($value)
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
     * @param array $userAccountParam
     *
     * @return $this
     */
    public function withUserAccountParam(array $userAccountParam)
    {
        $this->data['UserAccountParam'] = $userAccountParam;
        foreach ($userAccountParam as $depth1 => $depth1Value) {
            $this->options['query']['UserAccountParam.' . ($depth1 + 1) . '.AccountType'] = $depth1Value['AccountType'];
            $this->options['query']['UserAccountParam.' . ($depth1 + 1) . '.AuthType'] = $depth1Value['AuthType'];
            $this->options['query']['UserAccountParam.' . ($depth1 + 1) . '.AccountPassword'] = $depth1Value['AccountPassword'];
        }

        return $this;
    }

    /**
     * @param array $roleId
     *
     * @return $this
     */
    public function withRoleId(array $roleId)
    {
        $this->data['RoleId'] = $roleId;
        foreach ($roleId as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $groupId
     *
     * @return $this
     */
    public function withGroupId(array $groupId)
    {
        $this->data['GroupId'] = $groupId;
        foreach ($groupId as $i => $iValue) {
            $this->options['query']['GroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class PageListUsers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 */
class DeleteResourceUser extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 */
class ListUsersByCondition extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getAuthType()
 * @method $this withAuthType($value)
 * @method string getAccountPassword()
 * @method $this withAccountPassword($value)
 * @method string getAliyunUserId()
 * @method $this withAliyunUserId($value)
 */
class SaveUserAccountInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class QueryUserPolicies extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFuzzyName()
 * @method $this withFuzzyName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class PageListUserGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class DeleteUserGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getSearchKey()
 * @method $this withSearchKey($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class PageListResourceUsers extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListHostPool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKafkaReassign extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteHostPool extends Rpc
{
}

/**
 * @method string getThrottle()
 * @method $this withThrottle($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class OfflineKafkaBroker extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getKubeClusterInfo()
 * @method string getType()
 * @method $this withType($value)
 */
class CreateHostPool extends Rpc
{

    /**
     * @param array $kubeClusterInfo
     *
     * @return $this
     */
    public function withKubeClusterInfo(array $kubeClusterInfo)
    {
        $this->data['KubeClusterInfo'] = $kubeClusterInfo;
        foreach ($kubeClusterInfo as $depth1 => $depth1Value) {
            $this->options['query']['KubeClusterInfo.' . ($depth1 + 1) . '.ExternalKey'] = $depth1Value['ExternalKey'];
            $this->options['query']['KubeClusterInfo.' . ($depth1 + 1) . '.InternalConfig'] = $depth1Value['InternalConfig'];
            $this->options['query']['KubeClusterInfo.' . ($depth1 + 1) . '.PublicConfig'] = $depth1Value['PublicConfig'];
            $this->options['query']['KubeClusterInfo.' . ($depth1 + 1) . '.SshConfig'] = $depth1Value['SshConfig'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReassignId()
 * @method $this withReassignId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKafkaReassignTopic extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getHostGroup()
 * @method array getHostInfo()
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 * @method array getServiceInfo()
 */
class PlanComponentTopo extends Rpc
{

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
    public function withHostGroup(array $hostGroup)
    {
        $this->data['HostGroup'] = $hostGroup;
        foreach ($hostGroup as $depth1 => $depth1Value) {
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupType'] = $depth1Value['GroupType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupName'] = $depth1Value['GroupName'];
        }

        return $this;
    }

    /**
     * @param array $hostInfo
     *
     * @return $this
     */
    public function withHostInfo(array $hostInfo)
    {
        $this->data['HostInfo'] = $hostInfo;
        foreach ($hostInfo as $depth1 => $depth1Value) {
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HpHostBizId'] = $depth1Value['HpHostBizId'];
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
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
            $this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceEcmVersion'] = $depth1Value['ServiceEcmVersion'];
            $this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceVersion'] = $depth1Value['ServiceVersion'];
            $this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getActiveOnly()
 * @method $this withActiveOnly($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFuzzyTopicName()
 * @method $this withFuzzyTopicName($value)
 */
class ListKafkaTopicStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 */
class StartKafkaPreferredReplicaElection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterSupportService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReassignId()
 * @method $this withReassignId($value)
 */
class DescribeKafkaReassign extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 */
class ListStackService extends Rpc
{
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method array getHostGroup()
 * @method array getHostInfo()
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 * @method array getServiceInfo()
 * @method array getConfig()
 * @method string getRelatedClusterId()
 * @method $this withRelatedClusterId($value)
 */
class CreateClusterWithHostPool extends Rpc
{

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
    public function withHostGroup(array $hostGroup)
    {
        $this->data['HostGroup'] = $hostGroup;
        foreach ($hostGroup as $depth1 => $depth1Value) {
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupType'] = $depth1Value['GroupType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupName'] = $depth1Value['GroupName'];
        }

        return $this;
    }

    /**
     * @param array $hostInfo
     *
     * @return $this
     */
    public function withHostInfo(array $hostInfo)
    {
        $this->data['HostInfo'] = $hostInfo;
        foreach ($hostInfo as $depth1 => $depth1Value) {
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HpHostBizId'] = $depth1Value['HpHostBizId'];
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.Role'] = $depth1Value['Role'];
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.GroupId'] = $depth1Value['GroupId'];
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.PrivateIp'] = $depth1Value['PrivateIp'];
            foreach ($depth1Value['ServiceComponentInfo'] as $depth2 => $depth2Value) {
                $this->options['query']['HostInfo.' . ($depth1 + 1) . '.ServiceComponentInfo.' . ($depth2 + 1) . '.ComponentName'] = $depth2Value['ComponentName'];
                $this->options['query']['HostInfo.' . ($depth1 + 1) . '.ServiceComponentInfo.' . ($depth2 + 1) . '.ServiceName'] = $depth2Value['ServiceName'];
            }
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
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
            $this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceEcmVersion'] = $depth1Value['ServiceEcmVersion'];
            $this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceVersion'] = $depth1Value['ServiceVersion'];
            $this->options['query']['ServiceInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getThrottle()
 * @method $this withThrottle($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBrokerId()
 * @method $this withBrokerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getBalanceThreshold()
 * @method $this withBalanceThreshold($value)
 */
class StartKafkaBrokerDiskBalancer extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHpBizId()
 * @method $this withHpBizId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListHpHost extends Rpc
{
}

/**
 * @method string getHpHostBizId()
 * @method $this withHpHostBizId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class RemoveHpHost extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterInstalledService extends Rpc
{
}

/**
 * @method string getThrottle()
 * @method $this withThrottle($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method array getBrokerId()
 */
class ReassignKafka extends Rpc
{

    /**
     * @param array $brokerId
     *
     * @return $this
     */
    public function withBrokerId(array $brokerId)
    {
        $this->data['BrokerId'] = $brokerId;
        foreach ($brokerId as $i => $iValue) {
            $this->options['query']['BrokerId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getThrottle()
 * @method $this withThrottle($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReassignId()
 * @method $this withReassignId($value)
 */
class UpdateKafkaReassignParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getHpHost()
 * @method string getHpBizId()
 * @method $this withHpBizId($value)
 */
class AddHpHost extends Rpc
{

    /**
     * @param array $hpHost
     *
     * @return $this
     */
    public function withHpHost(array $hpHost)
    {
        $this->data['HpHost'] = $hpHost;
        foreach ($hpHost as $depth1 => $depth1Value) {
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.CpuCore'] = $depth1Value['CpuCore'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.MemSize'] = $depth1Value['MemSize'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.RackInfo'] = $depth1Value['RackInfo'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.Role'] = $depth1Value['Role'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.SerialNumber'] = $depth1Value['SerialNumber'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.HostType'] = $depth1Value['HostType'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.SecurityGroupId'] = $depth1Value['SecurityGroupId'];
            foreach ($depth1Value['HpHostDisk'] as $depth2 => $depth2Value) {
                $this->options['query']['HpHost.' . ($depth1 + 1) . '.HpHostDisk.' . ($depth2 + 1) . '.DiskSize'] = $depth2Value['DiskSize'];
                $this->options['query']['HpHost.' . ($depth1 + 1) . '.HpHostDisk.' . ($depth2 + 1) . '.MountPath'] = $depth2Value['MountPath'];
                $this->options['query']['HpHost.' . ($depth1 + 1) . '.HpHostDisk.' . ($depth2 + 1) . '.DiskDevice'] = $depth2Value['DiskDevice'];
            }
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.VswitchId'] = $depth1Value['VswitchId'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.ExternalKey'] = $depth1Value['ExternalKey'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.VpcId'] = $depth1Value['VpcId'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.InnerIp'] = $depth1Value['InnerIp'];
            $this->options['query']['HpHost.' . ($depth1 + 1) . '.ExternalIp'] = $depth1Value['ExternalIp'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ModifyHostPool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeKafkaBroker extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListKafkaBroker extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListStack extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getHostGroup()
 * @method array getHostInfo()
 */
class PlanHostName extends Rpc
{

    /**
     * @param array $hostGroup
     *
     * @return $this
     */
    public function withHostGroup(array $hostGroup)
    {
        $this->data['HostGroup'] = $hostGroup;
        foreach ($hostGroup as $depth1 => $depth1Value) {
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupType'] = $depth1Value['GroupType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GroupName'] = $depth1Value['GroupName'];
        }

        return $this;
    }

    /**
     * @param array $hostInfo
     *
     * @return $this
     */
    public function withHostInfo(array $hostInfo)
    {
        $this->data['HostInfo'] = $hostInfo;
        foreach ($hostInfo as $depth1 => $depth1Value) {
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HpHostBizId'] = $depth1Value['HpHostBizId'];
            $this->options['query']['HostInfo.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeHostPool extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getReleaseId()
 * @method $this withReleaseId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getReleaseVersion()
 * @method $this withReleaseVersion($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListETLJobRelease extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class DescribeDataSourceSchemaDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefaultOssPath()
 * @method $this withDefaultOssPath($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getOssConfig()
 * @method $this withOssConfig($value)
 */
class UpdateProjectSetting extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeETLJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeETLJobInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteETLJob extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getStageConf()
 * @method $this withStageConf($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStageType()
 * @method $this withStageType($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getStagePlugin()
 * @method $this withStagePlugin($value)
 */
class UpdateETLJobStage extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getCategoryType()
 * @method $this withCategoryType($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class CreateNavNode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteNavNode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class UpdateNavNode extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getSql()
 * @method $this withSql($value)
 */
class ResolveETLJobSqlSchema extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CheckDataSource extends Rpc
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
class CloneETLJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEntityType()
 * @method $this withEntityType($value)
 */
class ListETLJobTriggerEntity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class KillETLJobInstance extends Rpc
{
}

/**
 * @method string getStageName()
 * @method $this withStageName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 */
class DescribeETLJobStageOutputSchema extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResolveId()
 * @method $this withResolveId($value)
 */
class DescribeETLJobSqlSchema extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeDataSourceCommand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class ListDataSourceSchemaDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetJobMigrateResult extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class ListDataSourceSchemaTable extends Rpc
{
}

/**
 * @method string getEntityId()
 * @method $this withEntityId($value)
 */
class DescribeFlowVariableCollection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getReleaseId()
 * @method $this withReleaseId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ReleaseETLJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class DescribeDataSourceSchemaTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getReleaseId()
 * @method $this withReleaseId($value)
 */
class CancelETLJobRelease extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getClusterIdList()
 */
class ListClusterTag extends Rpc
{

    /**
     * @param array $clusterIdList
     *
     * @return $this
     */
    public function withClusterIdList(array $clusterIdList)
    {
        $this->data['ClusterIdList'] = $clusterIdList;
        foreach ($clusterIdList as $i => $iValue) {
            $this->options['query']['ClusterIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStageConnection()
 * @method string getClusterConfig()
 * @method $this withClusterConfig($value)
 * @method array getTriggerRule()
 * @method array getStage()
 * @method string getAlertConfig()
 * @method $this withAlertConfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCheck()
 * @method $this withCheck($value)
 */
class UpdateETLJob extends Rpc
{

    /**
     * @param array $stageConnection
     *
     * @return $this
     */
    public function withStageConnection(array $stageConnection)
    {
        $this->data['StageConnection'] = $stageConnection;
        foreach ($stageConnection as $depth1 => $depth1Value) {
            $this->options['query']['StageConnection.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
            $this->options['query']['StageConnection.' . ($depth1 + 1) . '.From'] = $depth1Value['From'];
            $this->options['query']['StageConnection.' . ($depth1 + 1) . '.To'] = $depth1Value['To'];
        }

        return $this;
    }

    /**
     * @param array $triggerRule
     *
     * @return $this
     */
    public function withTriggerRule(array $triggerRule)
    {
        $this->data['TriggerRule'] = $triggerRule;
        foreach ($triggerRule as $depth1 => $depth1Value) {
            $this->options['query']['TriggerRule.' . ($depth1 + 1) . '.CronExpr'] = $depth1Value['CronExpr'];
            $this->options['query']['TriggerRule.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
            $this->options['query']['TriggerRule.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
            $this->options['query']['TriggerRule.' . ($depth1 + 1) . '.Enabled'] = $depth1Value['Enabled'];
        }

        return $this;
    }

    /**
     * @param array $stage
     *
     * @return $this
     */
    public function withStage(array $stage)
    {
        $this->data['Stage'] = $stage;
        foreach ($stage as $depth1 => $depth1Value) {
            $this->options['query']['Stage.' . ($depth1 + 1) . '.StageName'] = $depth1Value['StageName'];
            $this->options['query']['Stage.' . ($depth1 + 1) . '.StageConf'] = $depth1Value['StageConf'];
            $this->options['query']['Stage.' . ($depth1 + 1) . '.StageType'] = $depth1Value['StageType'];
            $this->options['query']['Stage.' . ($depth1 + 1) . '.StagePlugin'] = $depth1Value['StagePlugin'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class SyncDataSourceSchemaTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class SyncDataSourceSchemaDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEtlJobId()
 * @method $this withEtlJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListETLJobInstance extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 */
class ModifyFlowVariableCollection extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceRunParam()
 * @method string getIsDebug()
 * @method $this withIsDebug($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RunETLJob extends Rpc
{

    /**
     * @param array $instanceRunParam
     *
     * @return $this
     */
    public function withInstanceRunParam(array $instanceRunParam)
    {
        $this->data['InstanceRunParam'] = $instanceRunParam;
        foreach ($instanceRunParam as $depth1 => $depth1Value) {
            $this->options['query']['InstanceRunParam.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['InstanceRunParam.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCreateFrom()
 * @method $this withCreateFrom($value)
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getProjectName()
 * @method $this withProjectName($value)
 */
class MigrateJobs extends Rpc
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
class CloneDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ListNavSubTree extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNavParentId()
 * @method $this withNavParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CreateETLJob extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNavParentId()
 * @method $this withNavParentId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterHostGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getHostGroupType()
 * @method $this withHostGroupType($value)
 */
class CreateClusterHostGroup extends Rpc
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
class RenderResourcePoolXml extends Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 */
class ModifyClusterHostGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPoolId()
 * @method $this withPoolId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class ListResourceQueue extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class CommonApiWhiteList extends Rpc
{
}

/**
 * @method string getServiceCustomActionName()
 * @method $this withServiceCustomActionName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterServiceCustomActionSupportConfig extends Rpc
{
}

/**
 * @method array getHostInstanceIdList()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class MigrateClusterHostGroupHost extends Rpc
{

    /**
     * @param array $hostInstanceIdList
     *
     * @return $this
     */
    public function withHostInstanceIdList(array $hostInstanceIdList)
    {
        $this->data['HostInstanceIdList'] = $hostInstanceIdList;
        foreach ($hostInstanceIdList as $i => $iValue) {
            $this->options['query']['HostInstanceIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListSupportedServiceName extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTopicParam()
 */
class MetastoreUpdateKafkaTopicBatch extends Rpc
{

    /**
     * @param array $topicParam
     *
     * @return $this
     */
    public function withTopicParam(array $topicParam)
    {
        $this->data['TopicParam'] = $topicParam;
        foreach ($topicParam as $depth1 => $depth1Value) {
            $this->options['query']['TopicParam.' . ($depth1 + 1) . '.TopicId'] = $depth1Value['TopicId'];
            $this->options['query']['TopicParam.' . ($depth1 + 1) . '.NumPartitions'] = $depth1Value['NumPartitions'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 */
class MetastoreDescribeKafkaTopic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getActiveOnly()
 * @method $this withActiveOnly($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListKafkaTopic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method array getAdvancedConfig()
 * @method string getNumPartitions()
 * @method $this withNumPartitions($value)
 */
class MetastoreUpdateKafkaTopic extends Rpc
{

    /**
     * @param array $advancedConfig
     *
     * @return $this
     */
    public function withAdvancedConfig(array $advancedConfig)
    {
        $this->data['AdvancedConfig'] = $advancedConfig;
        foreach ($advancedConfig as $depth1 => $depth1Value) {
            $this->options['query']['AdvancedConfig.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['AdvancedConfig.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListKafkaConsumerGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 * @method string getConsumerGroupId()
 * @method $this withConsumerGroupId($value)
 */
class MetastoreDescribeKafkaConsumerGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method array getAdvancedConfig()
 * @method string getNumPartitions()
 * @method $this withNumPartitions($value)
 * @method string getReplicationFactor()
 * @method $this withReplicationFactor($value)
 */
class MetastoreCreateKafkaTopic extends Rpc
{

    /**
     * @param array $advancedConfig
     *
     * @return $this
     */
    public function withAdvancedConfig(array $advancedConfig)
    {
        $this->data['AdvancedConfig'] = $advancedConfig;
        foreach ($advancedConfig as $depth1 => $depth1Value) {
            $this->options['query']['AdvancedConfig.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
            $this->options['query']['AdvancedConfig.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getInstanceIds()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachPubIp extends Rpc
{

    /**
     * @param array $instanceIds
     *
     * @return $this
     */
    public function withInstanceIds(array $instanceIds)
    {
        $this->data['InstanceIds'] = $instanceIds;
        foreach ($instanceIds as $i => $iValue) {
            $this->options['query']['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListTablePartition extends Rpc
{
}

/**
 * @method string getPackId()
 * @method $this withPackId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTotalOffset()
 * @method $this withTotalOffset($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getPackMeta()
 * @method $this withPackMeta($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTo()
 * @method $this withTo($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getLogStore()
 * @method $this withLogStore($value)
 */
class ContextQueryLog extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTopicId()
 * @method $this withTopicId($value)
 */
class MetastoreDeleteKafkaTopic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInnerIp()
 * @method $this withHostInnerIp($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getFromTimestamp()
 * @method $this withFromTimestamp($value)
 * @method string getToTimestamp()
 * @method $this withToTimestamp($value)
 * @method string getSlsQueryString()
 * @method $this withSlsQueryString($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetLogHistogram extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getHostIdList()
 */
class RemoveClusterHosts extends Rpc
{

    /**
     * @param array $hostIdList
     *
     * @return $this
     */
    public function withHostIdList(array $hostIdList)
    {
        $this->data['HostIdList'] = $hostIdList;
        foreach ($hostIdList as $i => $iValue) {
            $this->options['query']['HostIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowJobStatistic extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 */
class DescribeClusterStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getAddColumn()
 * @method array getAddPartition()
 * @method array getDeleteColumnName()
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method array getDeletePartitionName()
 */
class MetastoreUpdateTable extends Rpc
{

    /**
     * @param array $addColumn
     *
     * @return $this
     */
    public function withAddColumn(array $addColumn)
    {
        $this->data['AddColumn'] = $addColumn;
        foreach ($addColumn as $depth1 => $depth1Value) {
            $this->options['query']['AddColumn.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['AddColumn.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['AddColumn.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
        }

        return $this;
    }

    /**
     * @param array $addPartition
     *
     * @return $this
     */
    public function withAddPartition(array $addPartition)
    {
        $this->data['AddPartition'] = $addPartition;
        foreach ($addPartition as $depth1 => $depth1Value) {
            $this->options['query']['AddPartition.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['AddPartition.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['AddPartition.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
        }

        return $this;
    }

    /**
     * @param array $deleteColumnName
     *
     * @return $this
     */
    public function withDeleteColumnName(array $deleteColumnName)
    {
        $this->data['DeleteColumnName'] = $deleteColumnName;
        foreach ($deleteColumnName as $i => $iValue) {
            $this->options['query']['DeleteColumnName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $deletePartitionName
     *
     * @return $this
     */
    public function withDeletePartitionName(array $deletePartitionName)
    {
        $this->data['DeletePartitionName'] = $deletePartitionName;
        foreach ($deletePartitionName as $i => $iValue) {
            $this->options['query']['DeletePartitionName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class MetastoreDescribeTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class MetastoreRetryTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getTaskSourceType()
 * @method $this withTaskSourceType($value)
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class MetastoreListTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 */
class MetastoreDescribeDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterReleased()
 * @method $this withClusterReleased($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getDataSourceName()
 * @method $this withDataSourceName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListDataSource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getMetricName()
 * @method $this withMetricName($value)
 * @method string getHostRole()
 * @method $this withHostRole($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 */
class QuerySlsMetricData extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 */
class ListJobMigrateInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 */
class ListExecutePlanMigrateInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeSecurityGroupAttribute extends Rpc
{
}

/**
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizContent()
 * @method $this withBizContent($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AuthorizeSecurityGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUserInfo()
 */
class RetryCreateUserPassword extends Rpc
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
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.GroupName'] = $depth1Value['GroupName'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
        }

        return $this;
    }
}

/**
 * @method string getJobMigratedNum()
 * @method $this withJobMigratedNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutePlanNum()
 * @method $this withExecutePlanNum($value)
 * @method string getJobNum()
 * @method $this withJobNum($value)
 * @method string getExecutePlanMigratedNum()
 * @method $this withExecutePlanMigratedNum($value)
 * @method string getInteractionJobMigratedNum()
 * @method $this withInteractionJobMigratedNum($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getInteractionJobNum()
 * @method $this withInteractionJobNum($value)
 */
class ModifyUserStatistics extends Rpc
{
}

/**
 * @method string getUserList()
 * @method $this withUserList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class ModifyAlertUserGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getWebHookUrl()
 * @method $this withWebHookUrl($value)
 */
class ModifyAlertDingDingGroup extends Rpc
{
}

/**
 * @method string getEmailVerificationCode()
 * @method $this withEmailVerificationCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumberVerificationCode()
 * @method $this withPhoneNumberVerificationCode($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ModifyAlertContact extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOrderMode()
 * @method $this withOrderMode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrderFieldName()
 * @method $this withOrderFieldName($value)
 * @method string getCurrentSize()
 * @method $this withCurrentSize($value)
 */
class ListUserStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListAlertUserGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListAlertDingDingGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFromApp()
 * @method $this withFromApp($value)
 * @method string getIds()
 * @method $this withIds($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListAlertContacts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DescribeUserStatistics extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteAlertUserGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteAlertDingDingGroups extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIds()
 * @method $this withIds($value)
 */
class DeleteAlertContacts extends Rpc
{
}

/**
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 */
class CreateVerificationCode extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class CreateUserStatistics extends Rpc
{
}

/**
 * @method string getUserList()
 * @method $this withUserList($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateAlertUserGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getWebHookUrl()
 * @method $this withWebHookUrl($value)
 */
class CreateAlertDingDingGroup extends Rpc
{
}

/**
 * @method string getEmailVerificationCode()
 * @method $this withEmailVerificationCode($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPhoneNumberVerificationCode()
 * @method $this withPhoneNumberVerificationCode($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateAlertContact extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class CloneFlowJob extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getActiveRuleCategory()
 * @method $this withActiveRuleCategory($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 */
class ModifyScalingTaskGroup extends Rpc
{
}

/**
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method array getCloudWatchTrigger()
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method array getSchedulerTrigger()
 * @method string getCooldown()
 * @method $this withCooldown($value)
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
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.EvaluationCount'] = $depth1Value['EvaluationCount'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
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
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchTime'] = $depth1Value['LaunchTime'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchExpirationTime'] = $depth1Value['LaunchExpirationTime'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceValue'] = $depth1Value['RecurrenceValue'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceEndTime'] = $depth1Value['RecurrenceEndTime'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceType'] = $depth1Value['RecurrenceType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListScalingTaskGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListScalingRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListScalingActivity extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListFlow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterServiceComponentHealthInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeScalingTaskGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 */
class DescribeScalingRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingActivityId()
 * @method $this withScalingActivityId($value)
 */
class DescribeScalingActivity extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteScalingTaskGroup extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getScalingRuleId()
 * @method $this withScalingRuleId($value)
 */
class DeleteScalingRule extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDataDiskCategory()
 * @method $this withDataDiskCategory($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getMinSize()
 * @method $this withMinSize($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getDataDiskSize()
 * @method $this withDataDiskSize($value)
 * @method array getSpotPriceLimits()
 * @method array getScalingRule()
 * @method string getActiveRuleCategory()
 * @method $this withActiveRuleCategory($value)
 * @method string getMaxSize()
 * @method $this withMaxSize($value)
 * @method string getDataDiskCount()
 * @method $this withDataDiskCount($value)
 * @method string getDefaultCooldown()
 * @method $this withDefaultCooldown($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method array getInstanceTypeList()
 */
class CreateScalingTaskGroup extends Rpc
{

    /**
     * @param array $spotPriceLimits
     *
     * @return $this
     */
    public function withSpotPriceLimits(array $spotPriceLimits)
    {
        $this->data['SpotPriceLimits'] = $spotPriceLimits;
        foreach ($spotPriceLimits as $depth1 => $depth1Value) {
            $this->options['query']['SpotPriceLimits.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['SpotPriceLimits.' . ($depth1 + 1) . '.PriceLimit'] = $depth1Value['PriceLimit'];
        }

        return $this;
    }

    /**
     * @param array $scalingRule
     *
     * @return $this
     */
    public function withScalingRule(array $scalingRule)
    {
        $this->data['ScalingRule'] = $scalingRule;
        foreach ($scalingRule as $depth1 => $depth1Value) {
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.LaunchTime'] = $depth1Value['LaunchTime'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.RuleCategory'] = $depth1Value['RuleCategory'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.AdjustmentValue'] = $depth1Value['AdjustmentValue'];
            foreach ($depth1Value['SchedulerTrigger'] as $depth2 => $depth2Value) {
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.SchedulerTrigger.' . ($depth2 + 1) . '.LaunchTime'] = $depth2Value['LaunchTime'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.SchedulerTrigger.' . ($depth2 + 1) . '.LaunchExpirationTime'] = $depth2Value['LaunchExpirationTime'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.SchedulerTrigger.' . ($depth2 + 1) . '.RecurrenceValue'] = $depth2Value['RecurrenceValue'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.SchedulerTrigger.' . ($depth2 + 1) . '.RecurrenceEndTime'] = $depth2Value['RecurrenceEndTime'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.SchedulerTrigger.' . ($depth2 + 1) . '.RecurrenceType'] = $depth2Value['RecurrenceType'];
            }
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.AdjustmentType'] = $depth1Value['AdjustmentType'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.Cooldown'] = $depth1Value['Cooldown'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.RuleName'] = $depth1Value['RuleName'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.LaunchExpirationTime'] = $depth1Value['LaunchExpirationTime'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.RecurrenceValue'] = $depth1Value['RecurrenceValue'];
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.RecurrenceEndTime'] = $depth1Value['RecurrenceEndTime'];
            foreach ($depth1Value['CloudWatchTrigger'] as $depth2 => $depth2Value) {
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.CloudWatchTrigger.' . ($depth2 + 1) . '.Period'] = $depth2Value['Period'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.CloudWatchTrigger.' . ($depth2 + 1) . '.EvaluationCount'] = $depth2Value['EvaluationCount'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.CloudWatchTrigger.' . ($depth2 + 1) . '.Threshold'] = $depth2Value['Threshold'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.CloudWatchTrigger.' . ($depth2 + 1) . '.MetricName'] = $depth2Value['MetricName'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.CloudWatchTrigger.' . ($depth2 + 1) . '.ComparisonOperator'] = $depth2Value['ComparisonOperator'];
                $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.CloudWatchTrigger.' . ($depth2 + 1) . '.Statistics'] = $depth2Value['Statistics'];
            }
            $this->options['query']['ScalingRule.' . ($depth1 + 1) . '.RecurrenceType'] = $depth1Value['RecurrenceType'];
        }

        return $this;
    }

    /**
     * @param array $instanceTypeList
     *
     * @return $this
     */
    public function withInstanceTypeList(array $instanceTypeList)
    {
        $this->data['InstanceTypeList'] = $instanceTypeList;
        foreach ($instanceTypeList as $i => $iValue) {
            $this->options['query']['InstanceTypeList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleCategory()
 * @method $this withRuleCategory($value)
 * @method string getAdjustmentValue()
 * @method $this withAdjustmentValue($value)
 * @method string getAdjustmentType()
 * @method $this withAdjustmentType($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method array getCloudWatchTrigger()
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method array getSchedulerTrigger()
 * @method string getCooldown()
 * @method $this withCooldown($value)
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
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.EvaluationCount'] = $depth1Value['EvaluationCount'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Threshold'] = $depth1Value['Threshold'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.MetricName'] = $depth1Value['MetricName'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.ComparisonOperator'] = $depth1Value['ComparisonOperator'];
            $this->options['query']['CloudWatchTrigger.' . ($depth1 + 1) . '.Statistics'] = $depth1Value['Statistics'];
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
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchTime'] = $depth1Value['LaunchTime'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.LaunchExpirationTime'] = $depth1Value['LaunchExpirationTime'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceValue'] = $depth1Value['RecurrenceValue'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceEndTime'] = $depth1Value['RecurrenceEndTime'];
            $this->options['query']['SchedulerTrigger.' . ($depth1 + 1) . '.RecurrenceType'] = $depth1Value['RecurrenceType'];
        }

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowClusterAllHosts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getStackVersion()
 * @method $this withStackVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListEmrMainVersion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 */
class DescribeEmrMainVersion extends Rpc
{
}

/**
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowProjectById extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method array getMasterInstanceIdList()
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getIsResize()
 * @method $this withIsResize($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method array getOptionSoftWareList()
 * @method array getInstanceIdList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOperateType()
 * @method $this withOperateType($value)
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 */
class OperateExistsNodeCluster extends Rpc
{

    /**
     * @param array $masterInstanceIdList
     *
     * @return $this
     */
    public function withMasterInstanceIdList(array $masterInstanceIdList)
    {
        $this->data['MasterInstanceIdList'] = $masterInstanceIdList;
        foreach ($masterInstanceIdList as $i => $iValue) {
            $this->options['query']['MasterInstanceIdList.' . ($i + 1)] = $iValue;
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
     * @param array $instanceIdList
     *
     * @return $this
     */
    public function withInstanceIdList(array $instanceIdList)
    {
        $this->data['InstanceIdList'] = $instanceIdList;
        foreach ($instanceIdList as $i => $iValue) {
            $this->options['query']['InstanceIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefault()
 * @method $this withDefault($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class MetastoreModifyDataResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class MetastoreListDataResources extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class MetastoreDeleteDataResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDefault()
 * @method $this withDefault($value)
 * @method string getAccessType()
 * @method $this withAccessType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMetaType()
 * @method $this withMetaType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class MetastoreCreateDataResource extends Rpc
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAdhoc()
 * @method $this withAdhoc($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowJob extends Rpc
{
}

class ListFlowClusterAll extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getDestinationResource()
 * @method $this withDestinationResource($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getSystemDiskType()
 * @method $this withSystemDiskType($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getDataDiskType()
 * @method $this withDataDiskType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ListEmrAvailableResource extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListEmrAvailableConfig extends Rpc
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
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUserInfo()
 */
class CreateUserPassword extends Rpc
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
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.GroupName'] = $depth1Value['GroupName'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
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
 * @method string getTemplateBizId()
 * @method $this withTemplateBizId($value)
 */
class CreateClusterWithTemplate extends Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getGraph()
 * @method $this withGraph($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class ModifyFlowForWeb extends Rpc
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
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
 */
class GetUserSubmissionStatisticInfo extends Rpc
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
 * @method string getApplicationType()
 * @method $this withApplicationType($value)
 * @method string getFinalStatus()
 * @method $this withFinalStatus($value)
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
 */
class GetQueueInputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetJobRunningTimeStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetJobOutputStatisticInfo extends Rpc
{
}

/**
 * @method string getFromDatetime()
 * @method $this withFromDatetime($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getToDatetime()
 * @method $this withToDatetime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 */
class GetHdfsCapacityStatisticInfo extends Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getGraph()
 * @method $this withGraph($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlowForWeb extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeAvailableInstanceType extends Rpc
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
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getConf()
 * @method $this withConf($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class SubmitFlowJob extends Rpc
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
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ResumeFlow extends Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getReRunFail()
 * @method $this withReRunFail($value)
 */
class RerunFlow extends Rpc
{
}

/**
 * @method array getUserList()
 * @method array getQueueList()
 * @method array getHostList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultQueue()
 * @method $this withDefaultQueue($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getDefaultUser()
 * @method $this withDefaultUser($value)
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
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ModifyFlowProject extends Rpc
{
}

/**
 * @method string getRunConf()
 * @method $this withRunConf($value)
 * @method string getEnvConf()
 * @method $this withEnvConf($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getParamConf()
 * @method $this withParamConf($value)
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getCustomVariables()
 * @method $this withCustomVariables($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
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
            $this->options['query']['ResourceList.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['ResourceList.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
        }

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ModifyFlowCategory extends Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getPeriodic()
 * @method $this withPeriodic($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class ModifyFlow extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowProjectUser extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowProjectClusterSetting extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowProject extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowNodeInstanceContainerStatus extends Rpc
{
}

/**
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method array getStatusList()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getJobType()
 * @method $this withJobType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getTimeRange()
 * @method $this withTimeRange($value)
 * @method array getStatusList()
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ListFlowClusterHost extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowCluster extends Rpc
{
}

/**
 * @method string getRoot()
 * @method $this withRoot($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListFlowCategory extends Rpc
{
}

/**
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class KillFlow extends Rpc
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
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowProject extends Rpc
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
 * @method string getLines()
 * @method $this withLines($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstanceLauncherLog extends Rpc
{
}

/**
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLogName()
 * @method $this withLogName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getLength()
 * @method $this withLength($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 * @method string getNodeInstanceId()
 * @method $this withNodeInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowNodeInstanceContainerLog extends Rpc
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
class DescribeFlowInstance extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlowCategoryTree extends Rpc
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
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlow extends Rpc
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
 */
class DeleteFlowProject extends Rpc
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
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DeleteFlowCategory extends Rpc
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
            $this->options['query']['User.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->options['query']['User.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
        }

        return $this;
    }
}

/**
 * @method array getUserList()
 * @method array getQueueList()
 * @method array getHostList()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultQueue()
 * @method $this withDefaultQueue($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getDefaultUser()
 * @method $this withDefaultUser($value)
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
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateFlowProject extends Rpc
{
}

/**
 * @method string getRunConf()
 * @method $this withRunConf($value)
 * @method string getEnvConf()
 * @method $this withEnvConf($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getParams()
 * @method $this withParams($value)
 * @method string getParamConf()
 * @method $this withParamConf($value)
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getMonitorConf()
 * @method $this withMonitorConf($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAdhoc()
 * @method $this withAdhoc($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
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
            $this->options['query']['ResourceList.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['ResourceList.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
        }

        return $this;
    }
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class CreateFlowCategory extends Rpc
{
}

/**
 * @method string getCronExpr()
 * @method $this withCronExpr($value)
 * @method string getParentFlowList()
 * @method $this withParentFlowList($value)
 * @method string getAlertDingDingGroupBizId()
 * @method $this withAlertDingDingGroupBizId($value)
 * @method string getStartSchedule()
 * @method $this withStartSchedule($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAlertUserGroupBizId()
 * @method $this withAlertUserGroupBizId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 * @method string getCreateCluster()
 * @method $this withCreateCluster($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndSchedule()
 * @method $this withEndSchedule($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getParentCategory()
 * @method $this withParentCategory($value)
 */
class CreateFlow extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOpsCommandName()
 * @method $this withOpsCommandName($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getCustomParams()
 * @method $this withCustomParams($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getHostIdList()
 * @method string getDimension()
 * @method $this withDimension($value)
 */
class RunOpsCommand extends Rpc
{

    /** @var string */
    public $method = 'GET';

    /**
     * @param array $hostIdList
     *
     * @return $this
     */
    public function withHostIdList(array $hostIdList)
    {
        $this->data['HostIdList'] = $hostIdList;
        foreach ($hostIdList as $i => $iValue) {
            $this->options['query']['HostIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListOpsOperationTask extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListOpsOperation extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class GetSupportedOpsCommand extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOpsCommandResultOnce extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndCursor()
 * @method $this withEndCursor($value)
 * @method string getStartCursor()
 * @method $this withStartCursor($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetOpsCommandResult extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOpsCommandName()
 * @method $this withOpsCommandName($value)
 */
class GetOpsCommandDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getFromTimestamp()
 * @method $this withFromTimestamp($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getLine()
 * @method $this withLine($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getHostInnerIp()
 * @method $this withHostInnerIp($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getToTimestamp()
 * @method $this withToTimestamp($value)
 * @method string getSlsQueryString()
 * @method $this withSlsQueryString($value)
 */
class SearchLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListSlsLogstoreInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getMaxKeys()
 * @method $this withMaxKeys($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getMarker()
 * @method $this withMarker($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListServiceLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getLogstoreName()
 * @method $this withLogstoreName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLogFileName()
 * @method $this withLogFileName($value)
 */
class GetLogDownloadUrl extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class SuspendExecutionPlanInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getArguments()
 * @method $this withArguments($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getRerunFail()
 * @method $this withRerunFail($value)
 */
class RetryExecutionPlanInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ResumeExecutionPlanInstance extends Rpc
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
 * @method string getParentQueueId()
 * @method $this withParentQueueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLeaf()
 * @method $this withLeaf($value)
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getYarnsiteconfig()
 * @method $this withYarnsiteconfig($value)
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParamName()
 * @method $this withParamName($value)
 * @method string getParamValue()
 * @method $this withParamValue($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyJobExecutionPlanParam extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getParentId()
 * @method $this withParentId($value)
 */
class ModifyJobExecutionPlanFolder extends Rpc
{
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
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method array getHostGroup()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getUseCustomHiveMetaDb()
 * @method $this withUseCustomHiveMetaDb($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDb()
 * @method $this withInitCustomHiveMetaDb($value)
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
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
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
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.MultiInstanceTypes'] = $depth1Value['MultiInstanceTypes'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRelateId()
 * @method $this withRelateId($value)
 * @method string getParamBizType()
 * @method $this withParamBizType($value)
 */
class ListJobExecutionPlanParams extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCurrentId()
 * @method $this withCurrentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobExecutionPlanHierarchy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterTemplates extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DescribeClusterTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceQueueId()
 * @method $this withResourceQueueId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourceQueue extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteClusterTemplate extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getParentQueueId()
 * @method $this withParentQueueId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQualifiedName()
 * @method $this withQualifiedName($value)
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getLeaf()
 * @method $this withLeaf($value)
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
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
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getHostGroup()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDb()
 * @method $this withUseCustomHiveMetaDb($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDb()
 * @method $this withInitCustomHiveMetaDb($value)
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
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
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
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.MultiInstanceTypes'] = $depth1Value['MultiInstanceTypes'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyResourcePoolSchedulerType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPoolType()
 * @method $this withPoolType($value)
 */
class ListResourcePool extends Rpc
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
 * @method string getResourcePoolId()
 * @method $this withResourcePoolId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteResourcePool extends Rpc
{
}

/**
 * @method string getNote()
 * @method $this withNote($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getActive()
 * @method $this withActive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getYarnSiteConfig()
 * @method $this withYarnSiteConfig($value)
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Note'] = $depth1Value['Note'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.configType'] = $depth1Value['ConfigType'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.TargetId'] = $depth1Value['TargetId'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Category'] = $depth1Value['Category'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class QueryAlarmRules extends Rpc
{
}

/**
 * @method string getCursor()
 * @method $this withCursor($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSize()
 * @method $this withSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTimeStamp()
 * @method $this withStartTimeStamp($value)
 * @method string getEndTimeStamp()
 * @method $this withEndTimeStamp($value)
 */
class QueryAlarmHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterServiceQuickLink extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 */
class ListClusterServiceConfigHistory extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostGroupName()
 * @method $this withHostGroupName($value)
 * @method string getHostGroupType()
 * @method $this withHostGroupType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getConfigTag()
 * @method $this withConfigTag($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterServiceConfigTag extends Rpc
{
}

/**
 * @method string getVswitchId()
 * @method $this withVswitchId($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getAutoPayOrder()
 * @method $this withAutoPayOrder($value)
 * @method array getHostComponentInfo()
 * @method array getHostGroup()
 * @method string getClusterId()
 * @method $this withClusterId($value)
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
            $this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
            foreach ($depth1Value['ComponentNameList'] as $i => $iValue) {
                $this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ComponentNameList.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
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
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostKeyPairName'] = $depth1Value['HostKeyPairName'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.VswitchId'] = $depth1Value['VswitchId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostPassword'] = $depth1Value['HostPassword'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getInstanceIdList()
 * @method $this withInstanceIdList($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ReleaseClusterHostGroup extends Rpc
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
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getSshEnable()
 * @method $this withSshEnable($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
 * @method array getHostComponentInfo()
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method array getUserInfo()
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getAuthorizeContent()
 * @method $this withAuthorizeContent($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getRelatedClusterId()
 * @method $this withRelatedClusterId($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getHostGroup()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
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
            $this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
            foreach ($depth1Value['ComponentNameList'] as $i => $iValue) {
                $this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ComponentNameList.' . ($i + 1)] = $iValue;
            }
            $this->options['query']['HostComponentInfo.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
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
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
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
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
            $this->options['query']['UserInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
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
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskCapacity'] = $depth1Value['SysDiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.SysDiskType'] = $depth1Value['SysDiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ClusterId'] = $depth1Value['ClusterId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupName'] = $depth1Value['HostGroupName'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.AutoRenew'] = $depth1Value['AutoRenew'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.GpuDriver'] = $depth1Value['GpuDriver'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupId'] = $depth1Value['HostGroupId'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.ChargeType'] = $depth1Value['ChargeType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.CreateType'] = $depth1Value['CreateType'];
            $this->options['query']['HostGroup.' . ($depth1 + 1) . '.HostGroupType'] = $depth1Value['HostGroupType'];
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class TerminateClusterOperation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class DescribeClusterOpLog extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListDependedService extends Rpc
{
}

/**
 * @method string getExecuteStrategy()
 * @method $this withExecuteStrategy($value)
 * @method array getHostGroupIdList()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getServiceActionName()
 * @method $this withServiceActionName($value)
 * @method string getIsRolling()
 * @method $this withIsRolling($value)
 * @method string getTotlerateFailCount()
 * @method $this withTotlerateFailCount($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
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
 * @method string getRefreshHostConfig()
 * @method $this withRefreshHostConfig($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getConfigType()
 * @method $this withConfigType($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCustomConfigParams()
 * @method $this withCustomConfigParams($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method array getGatewayClusterIdList()
 * @method string getConfigParams()
 * @method $this withConfigParams($value)
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
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
 * @method string getServiceNameList()
 * @method $this withServiceNameList($value)
 */
class ListRequiredService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListClusterService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationHostTask extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperationHost extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListClusterOperation extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostRole()
 * @method $this withHostRole($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getComponentStatus()
 * @method $this withComponentStatus($value)
 */
class ListClusterHostComponent extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostInstanceId()
 * @method $this withHostInstanceId($value)
 * @method array getStatusList()
 * @method string getPrivateIp()
 * @method $this withPrivateIp($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getPublicIp()
 * @method $this withPublicIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method string getHostGroupId()
 * @method $this withHostGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 */
class DescribeClusterServiceConfigHistory extends Rpc
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
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getConfigVersion()
 * @method $this withConfigVersion($value)
 */
class DescribeClusterServiceConfig extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterService extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getOperationId()
 * @method $this withOperationId($value)
 * @method string getHostId()
 * @method $this withHostId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
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
class DescribeClusterBasicInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getService()
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
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
            $this->options['query']['Service.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
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
 * @method string getNoteId()
 * @method $this withNoteId($value)
 */
class RunNoteParagraphs extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class MetastoreSearchTables extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFuzzyTableName()
 * @method $this withFuzzyTableName($value)
 */
class MetastoreListTables extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFuzzyDatabaseName()
 * @method $this withFuzzyDatabaseName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class MetastoreListDatabases extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableId()
 * @method $this withTableId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreDropTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreDropDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreDescribeTable extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class MetastoreDescribeDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 */
class MetastoreDataPreview extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getFieldDelimiter()
 * @method $this withFieldDelimiter($value)
 * @method array getColumn()
 * @method string getCreateWith()
 * @method $this withCreateWith($value)
 * @method array getPartition()
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getCreateSql()
 * @method $this withCreateSql($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getLocationUri()
 * @method $this withLocationUri($value)
 * @method string getTableName()
 * @method $this withTableName($value)
 * @method string getDatabaseId()
 * @method $this withDatabaseId($value)
 */
class MetastoreCreateTable extends Rpc
{

    /**
     * @param array $column
     *
     * @return $this
     */
    public function withColumn(array $column)
    {
        $this->data['Column'] = $column;
        foreach ($column as $depth1 => $depth1Value) {
            $this->options['query']['Column.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Column.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['Column.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
        }

        return $this;
    }

    /**
     * @param array $partition
     *
     * @return $this
     */
    public function withPartition(array $partition)
    {
        $this->data['Partition'] = $partition;
        foreach ($partition as $depth1 => $depth1Value) {
            $this->options['query']['Partition.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->options['query']['Partition.' . ($depth1 + 1) . '.Comment'] = $depth1Value['Comment'];
            $this->options['query']['Partition.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
        }

        return $this;
    }
}

/**
 * @method string getDbSource()
 * @method $this withDbSource($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDbName()
 * @method $this withDbName($value)
 * @method string getDataSourceId()
 * @method $this withDataSourceId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getComment()
 * @method $this withComment($value)
 * @method string getLocationUri()
 * @method $this withLocationUri($value)
 * @method string getClusterBizId()
 * @method $this withClusterBizId($value)
 */
class MetastoreCreateDatabase extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class StopParagraph extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class RunParagraph extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeParagraph extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteParagraph extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteNote extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNoteId()
 * @method $this withNoteId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getText()
 * @method $this withText($value)
 */
class SaveParagraph extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutionPlanWorkNodeIds()
 * @method $this withExecutionPlanWorkNodeIds($value)
 * @method string getId()
 * @method $this withId($value)
 */
class RetryExecutionPlan extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListNotes extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DetachClusterForNote extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeNote extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateNote extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachClusterForNote extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTimeInterval()
 * @method $this withTimeInterval($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 */
class ModifyExecutionPlanScheduleInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 * @method array getJobIdList()
 */
class ModifyExecutionPlanJobInfo extends Rpc
{

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
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLogPath()
 * @method $this withLogPath($value)
 * @method string getClusterName()
 * @method $this withClusterName($value)
 * @method string getConfigurations()
 * @method $this withConfigurations($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getEcsOrder()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class ModifyExecutionPlanClusterInfo extends Rpc
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
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
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
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
        }

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyExecutionPlanBasicInfo extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListJobExecutionInstanceTrend extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCount()
 * @method $this withCount($value)
 */
class ListFailureJobExecutionInstances extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 */
class ListExecutionPlanInstanceTrend extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListClusterScripts extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeClusterScript extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteClusterScript extends Rpc
{
}

/**
 * @method string getArgs()
 * @method $this withArgs($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodeIdList()
 * @method $this withNodeIdList($value)
 */
class CreateClusterScript extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class KillExecutionPlanInstance extends Rpc
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
 * @method string getId()
 * @method $this withId($value)
 */
class ResumeExecutionPlanScheduler extends Rpc
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
 * @method string getRunParameter()
 * @method $this withRunParameter($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getFailAct()
 * @method $this withFailAct($value)
 */
class ModifyJob extends Rpc
{
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
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getJobIdList()
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getExecutionPlanVersion()
 * @method $this withExecutionPlanVersion($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method string getWorkflowDefinition()
 * @method $this withWorkflowDefinition($value)
 * @method array getEcsOrder()
 * @method string getName()
 * @method $this withName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class ModifyExecutionPlan extends Rpc
{

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
     * @param array $bootstrapAction
     *
     * @return $this
     */
    public function withBootstrapAction(array $bootstrapAction)
    {
        $this->data['BootstrapAction'] = $bootstrapAction;
        foreach ($bootstrapAction as $depth1 => $depth1Value) {
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
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
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 */
class ListJobs extends Rpc
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
 * @method string getExecutionPlanInstanceId()
 * @method $this withExecutionPlanInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobExecutionInstances extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryString()
 * @method $this withQueryString($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
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
 * @method string getOnlyLastInstance()
 * @method $this withOnlyLastInstance($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getExecutionPlanIdList()
 * @method array getStatusList()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getClusterTypeList()
 * @method string getIsDesc()
 * @method $this withIsDesc($value)
 * @method string getCreateType()
 * @method $this withCreateType($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getDefaultStatus()
 * @method $this withDefaultStatus($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getMachineType()
 * @method $this withMachineType($value)
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
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class KillExecutionJobInstance extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DescribeJob extends Rpc
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
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteJob extends Rpc
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
 * @method string getRunParameter()
 * @method $this withRunParameter($value)
 * @method string getRetryInterval()
 * @method $this withRetryInterval($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getFailAct()
 * @method $this withFailAct($value)
 */
class CreateJob extends Rpc
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
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getCreateClusterOnDemand()
 * @method $this withCreateClusterOnDemand($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getJobIdList()
 * @method string getDayOfMonth()
 * @method $this withDayOfMonth($value)
 * @method array getBootstrapAction()
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getEmrVer()
 * @method $this withEmrVer($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getIsOpenPublicIp()
 * @method $this withIsOpenPublicIp($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getInstanceGeneration()
 * @method $this withInstanceGeneration($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method array getOptionSoftWareList()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getNetType()
 * @method $this withNetType($value)
 * @method array getEcsOrder()
 * @method string getWorkflowDefinition()
 * @method $this withWorkflowDefinition($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDayOfWeek()
 * @method $this withDayOfWeek($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getUseCustomHiveMetaDB()
 * @method $this withUseCustomHiveMetaDB($value)
 * @method string getStrategy()
 * @method $this withStrategy($value)
 * @method array getConfig()
 * @method string getHighAvailabilityEnable()
 * @method $this withHighAvailabilityEnable($value)
 * @method string getInitCustomHiveMetaDB()
 * @method $this withInitCustomHiveMetaDB($value)
 * @method string getLogEnable()
 * @method $this withLogEnable($value)
 */
class CreateExecutionPlan extends Rpc
{

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
     * @param array $bootstrapAction
     *
     * @return $this
     */
    public function withBootstrapAction(array $bootstrapAction)
    {
        $this->data['BootstrapAction'] = $bootstrapAction;
        foreach ($bootstrapAction as $depth1 => $depth1Value) {
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Arg'] = $depth1Value['Arg'];
            $this->options['query']['BootstrapAction.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
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
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCount'] = $depth1Value['DiskCount'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.NodeCount'] = $depth1Value['NodeCount'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskCapacity'] = $depth1Value['DiskCapacity'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.Index'] = $depth1Value['Index'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
            $this->options['query']['EcsOrder.' . ($depth1 + 1) . '.DiskType'] = $depth1Value['DiskType'];
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
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigKey'] = $depth1Value['ConfigKey'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.FileName'] = $depth1Value['FileName'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Encrypt'] = $depth1Value['Encrypt'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.Replace'] = $depth1Value['Replace'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ConfigValue'] = $depth1Value['ConfigValue'];
            $this->options['query']['Config.' . ($depth1 + 1) . '.ServiceName'] = $depth1Value['ServiceName'];
        }

        return $this;
    }
}
