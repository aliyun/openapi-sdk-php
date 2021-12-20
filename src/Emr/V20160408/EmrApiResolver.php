<?php

namespace AlibabaCloud\Emr\V20160408;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddClusterService addClusterService(array $options = [])
 * @method AddScalingConfigItemV2 addScalingConfigItemV2(array $options = [])
 * @method CloneFlow cloneFlow(array $options = [])
 * @method CloneFlowJob cloneFlowJob(array $options = [])
 * @method CreateClusterTemplate createClusterTemplate(array $options = [])
 * @method CreateClusterV2 createClusterV2(array $options = [])
 * @method CreateClusterWithTemplate createClusterWithTemplate(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 * @method CreateFlowCategory createFlowCategory(array $options = [])
 * @method CreateFlowForWeb createFlowForWeb(array $options = [])
 * @method CreateFlowJob createFlowJob(array $options = [])
 * @method CreateFlowProject createFlowProject(array $options = [])
 * @method CreateFlowProjectClusterSetting createFlowProjectClusterSetting(array $options = [])
 * @method CreateFlowProjectUser createFlowProjectUser(array $options = [])
 * @method CreateResourcePool createResourcePool(array $options = [])
 * @method CreateResourceQueue createResourceQueue(array $options = [])
 * @method CreateScalingGroupV2 createScalingGroupV2(array $options = [])
 * @method DeleteClusterTemplate deleteClusterTemplate(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method DeleteFlowCategory deleteFlowCategory(array $options = [])
 * @method DeleteFlowJob deleteFlowJob(array $options = [])
 * @method DeleteFlowProject deleteFlowProject(array $options = [])
 * @method DeleteFlowProjectClusterSetting deleteFlowProjectClusterSetting(array $options = [])
 * @method DeleteFlowProjectUser deleteFlowProjectUser(array $options = [])
 * @method DeleteResourcePool deleteResourcePool(array $options = [])
 * @method DeleteResourceQueue deleteResourceQueue(array $options = [])
 * @method DescribeClusterBasicInfo describeClusterBasicInfo(array $options = [])
 * @method DescribeClusterOperationHostTaskLog describeClusterOperationHostTaskLog(array $options = [])
 * @method DescribeClusterResourcePoolSchedulerType describeClusterResourcePoolSchedulerType(array $options = [])
 * @method DescribeClusterService describeClusterService(array $options = [])
 * @method DescribeClusterServiceConfig describeClusterServiceConfig(array $options = [])
 * @method DescribeClusterServiceConfigTag describeClusterServiceConfigTag(array $options = [])
 * @method DescribeClusterTemplate describeClusterTemplate(array $options = [])
 * @method DescribeClusterV2 describeClusterV2(array $options = [])
 * @method DescribeFlow describeFlow(array $options = [])
 * @method DescribeFlowCategory describeFlowCategory(array $options = [])
 * @method DescribeFlowCategoryTree describeFlowCategoryTree(array $options = [])
 * @method DescribeFlowInstance describeFlowInstance(array $options = [])
 * @method DescribeFlowJob describeFlowJob(array $options = [])
 * @method DescribeFlowNodeInstance describeFlowNodeInstance(array $options = [])
 * @method DescribeFlowNodeInstanceContainerLog describeFlowNodeInstanceContainerLog(array $options = [])
 * @method DescribeFlowNodeInstanceLauncherLog describeFlowNodeInstanceLauncherLog(array $options = [])
 * @method DescribeFlowProject describeFlowProject(array $options = [])
 * @method DescribeFlowProjectClusterSetting describeFlowProjectClusterSetting(array $options = [])
 * @method DescribeScalingCommonConfig describeScalingCommonConfig(array $options = [])
 * @method DescribeScalingConfigItemV2 describeScalingConfigItemV2(array $options = [])
 * @method DescribeScalingGroupInstanceV2 describeScalingGroupInstanceV2(array $options = [])
 * @method DescribeScalingGroupV2 describeScalingGroupV2(array $options = [])
 * @method JoinResourceGroup joinResourceGroup(array $options = [])
 * @method KillFlowJob killFlowJob(array $options = [])
 * @method ListApmApplication listApmApplication(array $options = [])
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
 * @method ListEmrAvailableConfig listEmrAvailableConfig(array $options = [])
 * @method ListEmrAvailableResource listEmrAvailableResource(array $options = [])
 * @method ListEmrMainVersion listEmrMainVersion(array $options = [])
 * @method ListFlow listFlow(array $options = [])
 * @method ListFlowCategory listFlowCategory(array $options = [])
 * @method ListFlowCluster listFlowCluster(array $options = [])
 * @method ListFlowClusterAll listFlowClusterAll(array $options = [])
 * @method ListFlowClusterAllHosts listFlowClusterAllHosts(array $options = [])
 * @method ListFlowClusterHost listFlowClusterHost(array $options = [])
 * @method ListFlowInstance listFlowInstance(array $options = [])
 * @method ListFlowJob listFlowJob(array $options = [])
 * @method ListFlowJobHistory listFlowJobHistory(array $options = [])
 * @method ListFlowNodeInstance listFlowNodeInstance(array $options = [])
 * @method ListFlowNodeInstanceContainerStatus listFlowNodeInstanceContainerStatus(array $options = [])
 * @method ListFlowNodeSqlResult listFlowNodeSqlResult(array $options = [])
 * @method ListFlowProject listFlowProject(array $options = [])
 * @method ListFlowProjectClusterSetting listFlowProjectClusterSetting(array $options = [])
 * @method ListFlowProjectUser listFlowProjectUser(array $options = [])
 * @method ListResourcePool listResourcePool(array $options = [])
 * @method ListScalingActivityV2 listScalingActivityV2(array $options = [])
 * @method ListScalingConfigItemV2 listScalingConfigItemV2(array $options = [])
 * @method ListScalingGroupV2 listScalingGroupV2(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyClusterName modifyClusterName(array $options = [])
 * @method ModifyClusterServiceConfig modifyClusterServiceConfig(array $options = [])
 * @method ModifyClusterTemplate modifyClusterTemplate(array $options = [])
 * @method ModifyFlowCategory modifyFlowCategory(array $options = [])
 * @method ModifyFlowForWeb modifyFlowForWeb(array $options = [])
 * @method ModifyFlowProject modifyFlowProject(array $options = [])
 * @method ModifyFlowProjectClusterSetting modifyFlowProjectClusterSetting(array $options = [])
 * @method ModifyResourcePool modifyResourcePool(array $options = [])
 * @method ModifyResourcePoolSchedulerType modifyResourcePoolSchedulerType(array $options = [])
 * @method ModifyResourceQueue modifyResourceQueue(array $options = [])
 * @method ModifyScalingConfigItemV2 modifyScalingConfigItemV2(array $options = [])
 * @method ModifyScalingGroupV2 modifyScalingGroupV2(array $options = [])
 * @method RefreshClusterResourcePool refreshClusterResourcePool(array $options = [])
 * @method ReleaseCluster releaseCluster(array $options = [])
 * @method ReleaseClusterHostGroup releaseClusterHostGroup(array $options = [])
 * @method RemoveScalingConfigItemV2 removeScalingConfigItemV2(array $options = [])
 * @method RerunFlow rerunFlow(array $options = [])
 * @method ResizeClusterV2 resizeClusterV2(array $options = [])
 * @method ResumeFlow resumeFlow(array $options = [])
 * @method RunClusterServiceAction runClusterServiceAction(array $options = [])
 * @method RunScalingActionV2 runScalingActionV2(array $options = [])
 * @method StartFlow startFlow(array $options = [])
 * @method SubmitFlow submitFlow(array $options = [])
 * @method SubmitFlowJob submitFlowJob(array $options = [])
 * @method SuspendFlow suspendFlow(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getDataDiskKMSKeyId()
 * @method $this withDataDiskKMSKeyId($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getDataDiskEncrypted()
 * @method $this withDataDiskEncrypted($value)
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
			if(isset($depth1Value['PrivatePoolOptionsId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.PrivatePoolOptionsId'] = $depth1Value['PrivatePoolOptionsId'];
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
			if(isset($depth1Value['PrivatePoolOptionsMatchCriteria'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.PrivatePoolOptionsMatchCriteria'] = $depth1Value['PrivatePoolOptionsMatchCriteria'];
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
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIoOptimized()
 * @method $this withIoOptimized($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getEasEnable()
 * @method $this withEasEnable($value)
 * @method string getDepositType()
 * @method $this withDepositType($value)
 * @method string getDataDiskKMSKeyId()
 * @method $this withDataDiskKMSKeyId($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method array getUserInfo()
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getDataDiskEncrypted()
 * @method $this withDataDiskEncrypted($value)
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
			if(isset($depth1Value['PrivatePoolOptionsId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.PrivatePoolOptionsId'] = $depth1Value['PrivatePoolOptionsId'];
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
			if(isset($depth1Value['PrivatePoolOptionsMatchCriteria'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.PrivatePoolOptionsMatchCriteria'] = $depth1Value['PrivatePoolOptionsMatchCriteria'];
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
 * @method string getDescription()
 * @method string getType()
 * @method $this withType($value)
 * @method string getParamConf()
 * @method array getResourceList()
 * @method string getFailAct()
 * @method $this withFailAct($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getMonitorConf()
 * @method string getMaxRetry()
 * @method $this withMaxRetry($value)
 * @method string getAlertConf()
 * @method $this withAlertConf($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getEnvConf()
 * @method string getMaxRunningTimeSec()
 * @method $this withMaxRunningTimeSec($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getParams()
 * @method string getCustomVariables()
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
     * @param string $value
     *
     * @return $this
     */
    public function withRunConf($value)
    {
        $this->data['RunConf'] = $value;
        $this->options['form_params']['RunConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParamConf($value)
    {
        $this->data['ParamConf'] = $value;
        $this->options['form_params']['ParamConf'] = $value;

        return $this;
    }

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
				$this->options['form_params']['ResourceList.' . ($depth1 + 1) . '.Path'] = $depth1Value['Path'];
			}
			if(isset($depth1Value['Alias'])){
				$this->options['form_params']['ResourceList.' . ($depth1 + 1) . '.Alias'] = $depth1Value['Alias'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMonitorConf($value)
    {
        $this->data['MonitorConf'] = $value;
        $this->options['form_params']['MonitorConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvConf($value)
    {
        $this->data['EnvConf'] = $value;
        $this->options['form_params']['EnvConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomVariables($value)
    {
        $this->data['CustomVariables'] = $value;
        $this->options['form_params']['CustomVariables'] = $value;

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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class DeleteClusterTemplate extends Rpc
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
 */
class DescribeClusterBasicInfo extends Rpc
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
 * @method string getId()
 * @method $this withId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class DescribeFlow extends Rpc
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
 * @method string getOperationId()
 * @method $this withOperationId($value)
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
 * @method string getVpcId()
 * @method $this withVpcId($value)
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
 * @method string getComponentName()
 * @method $this withComponentName($value)
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
 * @method string getEmrVersion()
 * @method $this withEmrVersion($value)
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
 * @method string getConfigItemType()
 * @method $this withConfigItemType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScalingGroupBizId()
 * @method $this withScalingGroupBizId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ModifyClusterName extends Rpc
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
 * @method string getDataDiskKMSKeyId()
 * @method $this withDataDiskKMSKeyId($value)
 * @method string getUseLocalMetaDb()
 * @method $this withUseLocalMetaDb($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getUserDefinedEmrEcsRole()
 * @method $this withUserDefinedEmrEcsRole($value)
 * @method string getDataDiskEncrypted()
 * @method $this withDataDiskEncrypted($value)
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
 * @method string getClickhouseConf()
 * @method $this withClickhouseConf($value)
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
			if(isset($depth1Value['PrivatePoolOptionsId'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.PrivatePoolOptionsId'] = $depth1Value['PrivatePoolOptionsId'];
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
			if(isset($depth1Value['PrivatePoolOptionsMatchCriteria'])){
				$this->options['query']['HostGroup.' . ($depth1 + 1) . '.PrivatePoolOptionsMatchCriteria'] = $depth1Value['PrivatePoolOptionsMatchCriteria'];
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
 * @method string getFlowInstanceId()
 * @method $this withFlowInstanceId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class ResumeFlow extends Rpc
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
