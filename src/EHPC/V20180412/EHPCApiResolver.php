<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddContainerApp addContainerApp(array $options = [])
 * @method AddExistedNodes addExistedNodes(array $options = [])
 * @method AddLocalNodes addLocalNodes(array $options = [])
 * @method AddNodes addNodes(array $options = [])
 * @method AddQueue addQueue(array $options = [])
 * @method AddSecurityGroup addSecurityGroup(array $options = [])
 * @method AddUsers addUsers(array $options = [])
 * @method ApplyNodes applyNodes(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateGWSCluster createGWSCluster(array $options = [])
 * @method CreateGWSImage createGWSImage(array $options = [])
 * @method CreateGWSInstance createGWSInstance(array $options = [])
 * @method CreateHybridCluster createHybridCluster(array $options = [])
 * @method CreateJobFile createJobFile(array $options = [])
 * @method CreateJobTemplate createJobTemplate(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteContainerApps deleteContainerApps(array $options = [])
 * @method DeleteGWSCluster deleteGWSCluster(array $options = [])
 * @method DeleteGWSInstance deleteGWSInstance(array $options = [])
 * @method DeleteImage deleteImage(array $options = [])
 * @method DeleteJobs deleteJobs(array $options = [])
 * @method DeleteJobTemplates deleteJobTemplates(array $options = [])
 * @method DeleteNodes deleteNodes(array $options = [])
 * @method DeleteQueue deleteQueue(array $options = [])
 * @method DeleteSecurityGroup deleteSecurityGroup(array $options = [])
 * @method DeleteUsers deleteUsers(array $options = [])
 * @method DescribeAutoScaleConfig describeAutoScaleConfig(array $options = [])
 * @method DescribeCluster describeCluster(array $options = [])
 * @method DescribeContainerApp describeContainerApp(array $options = [])
 * @method DescribeGWSClusterPolicy describeGWSClusterPolicy(array $options = [])
 * @method DescribeGWSClusters describeGWSClusters(array $options = [])
 * @method DescribeGWSImages describeGWSImages(array $options = [])
 * @method DescribeGWSInstances describeGWSInstances(array $options = [])
 * @method DescribeImage describeImage(array $options = [])
 * @method DescribeImageGatewayConfig describeImageGatewayConfig(array $options = [])
 * @method DescribeImagePrice describeImagePrice(array $options = [])
 * @method DescribeJob describeJob(array $options = [])
 * @method DescribeNFSClientStatus describeNFSClientStatus(array $options = [])
 * @method DescribePrice describePrice(array $options = [])
 * @method EcdDeleteDesktops ecdDeleteDesktops(array $options = [])
 * @method EditJobTemplate editJobTemplate(array $options = [])
 * @method GetAccountingReport getAccountingReport(array $options = [])
 * @method GetAutoScaleConfig getAutoScaleConfig(array $options = [])
 * @method GetCloudMetricLogs getCloudMetricLogs(array $options = [])
 * @method GetCloudMetricProfiling getCloudMetricProfiling(array $options = [])
 * @method GetClusterVolumes getClusterVolumes(array $options = [])
 * @method GetGWSConnectTicket getGWSConnectTicket(array $options = [])
 * @method GetHealthMonitorLogs getHealthMonitorLogs(array $options = [])
 * @method GetHybridClusterConfig getHybridClusterConfig(array $options = [])
 * @method GetIfEcsTypeSupportHtConfig getIfEcsTypeSupportHtConfig(array $options = [])
 * @method GetSchedulerInfo getSchedulerInfo(array $options = [])
 * @method GetVisualServiceStatus getVisualServiceStatus(array $options = [])
 * @method GetWorkbenchToken getWorkbenchToken(array $options = [])
 * @method InitializeEHPC initializeEHPC(array $options = [])
 * @method InstallSoftware installSoftware(array $options = [])
 * @method InvokeShellCommand invokeShellCommand(array $options = [])
 * @method ListAvailableEcsTypes listAvailableEcsTypes(array $options = [])
 * @method ListCloudMetricProfilings listCloudMetricProfilings(array $options = [])
 * @method ListClusterLogs listClusterLogs(array $options = [])
 * @method ListClusters listClusters(array $options = [])
 * @method ListClustersMeta listClustersMeta(array $options = [])
 * @method ListCommands listCommands(array $options = [])
 * @method ListContainerApps listContainerApps(array $options = [])
 * @method ListContainerImages listContainerImages(array $options = [])
 * @method ListCpfsFileSystems listCpfsFileSystems(array $options = [])
 * @method ListCurrentClientVersion listCurrentClientVersion(array $options = [])
 * @method ListCustomImages listCustomImages(array $options = [])
 * @method ListFileSystemWithMountTargets listFileSystemWithMountTargets(array $options = [])
 * @method ListImages listImages(array $options = [])
 * @method ListInstalledSoftware listInstalledSoftware(array $options = [])
 * @method ListInvocationResults listInvocationResults(array $options = [])
 * @method ListInvocationStatus listInvocationStatus(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListJobTemplates listJobTemplates(array $options = [])
 * @method ListNodes listNodes(array $options = [])
 * @method ListNodesByQueue listNodesByQueue(array $options = [])
 * @method ListNodesNoPaging listNodesNoPaging(array $options = [])
 * @method ListPreferredEcsTypes listPreferredEcsTypes(array $options = [])
 * @method ListQueues listQueues(array $options = [])
 * @method ListRegions listRegions(array $options = [])
 * @method ListSecurityGroups listSecurityGroups(array $options = [])
 * @method ListSoftwares listSoftwares(array $options = [])
 * @method ListTasks listTasks(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ListVolumes listVolumes(array $options = [])
 * @method ModifyClusterAttributes modifyClusterAttributes(array $options = [])
 * @method ModifyContainerAppAttributes modifyContainerAppAttributes(array $options = [])
 * @method ModifyImageGatewayConfig modifyImageGatewayConfig(array $options = [])
 * @method ModifyUserGroups modifyUserGroups(array $options = [])
 * @method ModifyUserPasswords modifyUserPasswords(array $options = [])
 * @method ModifyVisualServicePasswd modifyVisualServicePasswd(array $options = [])
 * @method MountNFS mountNFS(array $options = [])
 * @method PullImage pullImage(array $options = [])
 * @method QueryServicePackAndPrice queryServicePackAndPrice(array $options = [])
 * @method RecoverCluster recoverCluster(array $options = [])
 * @method RerunJobs rerunJobs(array $options = [])
 * @method ResetNodes resetNodes(array $options = [])
 * @method RunCloudMetricProfiling runCloudMetricProfiling(array $options = [])
 * @method SetAutoScaleConfig setAutoScaleConfig(array $options = [])
 * @method SetGWSClusterPolicy setGWSClusterPolicy(array $options = [])
 * @method SetGWSInstanceName setGWSInstanceName(array $options = [])
 * @method SetGWSInstanceUser setGWSInstanceUser(array $options = [])
 * @method SetQueue setQueue(array $options = [])
 * @method SetSchedulerInfo setSchedulerInfo(array $options = [])
 * @method StartCluster startCluster(array $options = [])
 * @method StartGWSInstance startGWSInstance(array $options = [])
 * @method StartNodes startNodes(array $options = [])
 * @method StartVisualService startVisualService(array $options = [])
 * @method StopCluster stopCluster(array $options = [])
 * @method StopGWSInstance stopGWSInstance(array $options = [])
 * @method StopJobs stopJobs(array $options = [])
 * @method StopNodes stopNodes(array $options = [])
 * @method StopVisualService stopVisualService(array $options = [])
 * @method SubmitJob submitJob(array $options = [])
 * @method UninstallSoftware uninstallSoftware(array $options = [])
 * @method UpdateClusterVolumes updateClusterVolumes(array $options = [])
 * @method UpdateQueueConfig updateQueueConfig(array $options = [])
 * @method UpgradeClient upgradeClient(array $options = [])
 */
class EHPCApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'EHPC';

    /** @var string */
    public $version = '2018-04-12';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class AddContainerApp extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method array getInstance()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 */
class AddExistedNodes extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodes()
 * @method $this withNodes($value)
 */
class AddLocalNodes extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSystemDiskLevel()
 * @method $this withSystemDiskLevel($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAllocatePublicAddress()
 * @method $this withAllocatePublicAddress($value)
 * @method string getInternetMaxBandWidthOut()
 * @method $this withInternetMaxBandWidthOut($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getSystemDiskType()
 * @method $this withSystemDiskType($value)
 * @method string getMinCount()
 * @method $this withMinCount($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getHostNamePrefix()
 * @method $this withHostNamePrefix($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method string getHostNameSuffix()
 * @method $this withHostNameSuffix($value)
 * @method string getSync()
 * @method $this withSync($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getComputeEnableHt()
 * @method $this withComputeEnableHt($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getEcsChargeType()
 * @method $this withEcsChargeType($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getCreateMode()
 * @method $this withCreateMode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInternetMaxBandWidthIn()
 * @method $this withInternetMaxBandWidthIn($value)
 */
class AddNodes extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddQueue extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AddSecurityGroup extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class AddUsers extends Rpc
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
			if(isset($depth1Value['Password'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Group'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Group'] = $depth1Value['Group'];
			}
		}

		return $this;
    }
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getMemory()
 * @method $this withMemory($value)
 * @method string getSystemDiskLevel()
 * @method $this withSystemDiskLevel($value)
 * @method string getAllocatePublicAddress()
 * @method $this withAllocatePublicAddress($value)
 * @method string getInternetMaxBandWidthOut()
 * @method $this withInternetMaxBandWidthOut($value)
 * @method string getResourceAmountType()
 * @method $this withResourceAmountType($value)
 * @method string getStrictResourceProvision()
 * @method $this withStrictResourceProvision($value)
 * @method string getSystemDiskType()
 * @method $this withSystemDiskType($value)
 * @method string getCores()
 * @method $this withCores($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method array getZoneInfos()
 * @method string getHostNamePrefix()
 * @method $this withHostNamePrefix($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method string getHostNameSuffix()
 * @method $this withHostNameSuffix($value)
 * @method string getPriorityStrategy()
 * @method $this withPriorityStrategy($value)
 * @method string getInstanceFamilyLevel()
 * @method $this withInstanceFamilyLevel($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method array getInstanceTypeModel()
 * @method string getInternetMaxBandWidthIn()
 * @method $this withInternetMaxBandWidthIn($value)
 * @method string getTargetCapacity()
 * @method $this withTargetCapacity($value)
 * @method string getStrictSatisfiedTargetCapacity()
 * @method $this withStrictSatisfiedTargetCapacity($value)
 */
class ApplyNodes extends Rpc
{

    /**
     * @param array $zoneInfos
     *
     * @return $this
     */
	public function withZoneInfos(array $zoneInfos)
	{
	    $this->data['ZoneInfos'] = $zoneInfos;
		foreach ($zoneInfos as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['ZoneInfos.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['ZoneInfos.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $instanceTypeModel
     *
     * @return $this
     */
	public function withInstanceTypeModel(array $instanceTypeModel)
	{
	    $this->data['InstanceTypeModel'] = $instanceTypeModel;
		foreach ($instanceTypeModel as $depth1 => $depth1Value) {
			if(isset($depth1Value['MaxPrice'])){
				$this->options['query']['InstanceTypeModel.' . ($depth1 + 1) . '.MaxPrice'] = $depth1Value['MaxPrice'];
			}
			if(isset($depth1Value['TargetImageId'])){
				$this->options['query']['InstanceTypeModel.' . ($depth1 + 1) . '.TargetImageId'] = $depth1Value['TargetImageId'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['InstanceTypeModel.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
		}

		return $this;
    }
}

/**
 * @method array getAdditionalVolumes()
 * @method string getEcsOrderManagerInstanceType()
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getDeployMode()
 * @method $this withDeployMode($value)
 * @method string getEcsOrderManagerCount()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getEcsOrderLoginCount()
 * @method string getWithoutElasticIp()
 * @method $this withWithoutElasticIp($value)
 * @method string getRemoteVisEnable()
 * @method $this withRemoteVisEnable($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 * @method string getAutoRenewPeriod()
 * @method $this withAutoRenewPeriod($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getRemoteDirectory()
 * @method $this withRemoteDirectory($value)
 * @method string getEcsOrderComputeCount()
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method array getPostInstallScript()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getComputeEnableHt()
 * @method $this withComputeEnableHt($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVolumeId()
 * @method $this withVolumeId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getSccClusterId()
 * @method $this withSccClusterId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSystemDiskLevel()
 * @method $this withSystemDiskLevel($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEhpcVersion()
 * @method $this withEhpcVersion($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEcsOrderComputeInstanceType()
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getVolumeType()
 * @method $this withVolumeType($value)
 * @method string getSystemDiskType()
 * @method $this withSystemDiskType($value)
 * @method string getVolumeProtocol()
 * @method $this withVolumeProtocol($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getClusterVersion()
 * @method $this withClusterVersion($value)
 * @method string getIsComputeEss()
 * @method $this withIsComputeEss($value)
 * @method array getApplication()
 * @method string getEcsChargeType()
 * @method $this withEcsChargeType($value)
 * @method string getInputFileUrl()
 * @method $this withInputFileUrl($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getHaEnable()
 * @method $this withHaEnable($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 * @method string getVolumeMountpoint()
 * @method $this withVolumeMountpoint($value)
 * @method string getEcsOrderLoginInstanceType()
 */
class CreateCluster extends Rpc
{

    /**
     * @param array $additionalVolumes
     *
     * @return $this
     */
	public function withAdditionalVolumes(array $additionalVolumes)
	{
	    $this->data['AdditionalVolumes'] = $additionalVolumes;
		foreach ($additionalVolumes as $depth1 => $depth1Value) {
			if(isset($depth1Value['VolumeType'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeType'] = $depth1Value['VolumeType'];
			}
			if(isset($depth1Value['VolumeProtocol'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeProtocol'] = $depth1Value['VolumeProtocol'];
			}
			if(isset($depth1Value['LocalDirectory'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.LocalDirectory'] = $depth1Value['LocalDirectory'];
			}
			if(isset($depth1Value['RemoteDirectory'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.RemoteDirectory'] = $depth1Value['RemoteDirectory'];
			}
			foreach ($depth1Value['Roles'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Name'])){
					$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.Roles.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
			}
			if(isset($depth1Value['VolumeId'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeId'] = $depth1Value['VolumeId'];
			}
			if(isset($depth1Value['VolumeMountpoint'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeMountpoint'] = $depth1Value['VolumeMountpoint'];
			}
			if(isset($depth1Value['Location'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.Location'] = $depth1Value['Location'];
			}
			if(isset($depth1Value['JobQueue'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.JobQueue'] = $depth1Value['JobQueue'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderManagerInstanceType($value)
    {
        $this->data['EcsOrderManagerInstanceType'] = $value;
        $this->options['query']['EcsOrder.Manager.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderManagerCount($value)
    {
        $this->data['EcsOrderManagerCount'] = $value;
        $this->options['query']['EcsOrder.Manager.Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderLoginCount($value)
    {
        $this->data['EcsOrderLoginCount'] = $value;
        $this->options['query']['EcsOrder.Login.Count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderComputeCount($value)
    {
        $this->data['EcsOrderComputeCount'] = $value;
        $this->options['query']['EcsOrder.Compute.Count'] = $value;

        return $this;
    }

    /**
     * @param array $postInstallScript
     *
     * @return $this
     */
	public function withPostInstallScript(array $postInstallScript)
	{
	    $this->data['PostInstallScript'] = $postInstallScript;
		foreach ($postInstallScript as $depth1 => $depth1Value) {
			if(isset($depth1Value['Args'])){
				$this->options['query']['PostInstallScript.' . ($depth1 + 1) . '.Args'] = $depth1Value['Args'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['PostInstallScript.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderComputeInstanceType($value)
    {
        $this->data['EcsOrderComputeInstanceType'] = $value;
        $this->options['query']['EcsOrder.Compute.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param array $application
     *
     * @return $this
     */
	public function withApplication(array $application)
	{
	    $this->data['Application'] = $application;
		foreach ($application as $depth1 => $depth1Value) {
			if(isset($depth1Value['Tag'])){
				$this->options['query']['Application.' . ($depth1 + 1) . '.Tag'] = $depth1Value['Tag'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderLoginInstanceType($value)
    {
        $this->data['EcsOrderLoginInstanceType'] = $value;
        $this->options['query']['EcsOrder.Login.InstanceType'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateGWSCluster extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateGWSImage extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getAllocatePublicAddress()
 * @method $this withAllocatePublicAddress($value)
 * @method string getAppList()
 * @method $this withAppList($value)
 * @method string getInternetMaxBandwidthOut()
 * @method $this withInternetMaxBandwidthOut($value)
 * @method string getSystemDiskCategory()
 * @method $this withSystemDiskCategory($value)
 * @method string getSystemDiskSize()
 * @method $this withSystemDiskSize($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getWorkMode()
 * @method $this withWorkMode($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getPeriodUnit()
 * @method $this withPeriodUnit($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInternetMaxBandwidthIn()
 * @method $this withInternetMaxBandwidthIn($value)
 */
class CreateGWSInstance extends Rpc
{
}

/**
 * @method string getKeyPairName()
 * @method $this withKeyPairName($value)
 * @method string getMultiOs()
 * @method $this withMultiOs($value)
 * @method string getSecurityGroupName()
 * @method $this withSecurityGroupName($value)
 * @method string getOnPremiseVolumeRemotePath()
 * @method $this withOnPremiseVolumeRemotePath($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getComputeSpotPriceLimit()
 * @method $this withComputeSpotPriceLimit($value)
 * @method string getOnPremiseVolumeLocalPath()
 * @method $this withOnPremiseVolumeLocalPath($value)
 * @method string getRemoteDirectory()
 * @method $this withRemoteDirectory($value)
 * @method string getComputeSpotStrategy()
 * @method $this withComputeSpotStrategy($value)
 * @method array getPostInstallScript()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVolumeId()
 * @method $this withVolumeId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEhpcVersion()
 * @method $this withEhpcVersion($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEcsOrderComputeInstanceType()
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getVolumeType()
 * @method $this withVolumeType($value)
 * @method string getOnPremiseVolumeMountPoint()
 * @method $this withOnPremiseVolumeMountPoint($value)
 * @method string getOnPremiseVolumeProtocol()
 * @method $this withOnPremiseVolumeProtocol($value)
 * @method string getVolumeProtocol()
 * @method $this withVolumeProtocol($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method array getNodes()
 * @method array getApplication()
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getVolumeMountpoint()
 * @method $this withVolumeMountpoint($value)
 * @method string getSchedulerPreInstall()
 * @method $this withSchedulerPreInstall($value)
 * @method string getLocation()
 * @method $this withLocation($value)
 */
class CreateHybridCluster extends Rpc
{

    /**
     * @param array $postInstallScript
     *
     * @return $this
     */
	public function withPostInstallScript(array $postInstallScript)
	{
	    $this->data['PostInstallScript'] = $postInstallScript;
		foreach ($postInstallScript as $depth1 => $depth1Value) {
			if(isset($depth1Value['Args'])){
				$this->options['query']['PostInstallScript.' . ($depth1 + 1) . '.Args'] = $depth1Value['Args'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['PostInstallScript.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcsOrderComputeInstanceType($value)
    {
        $this->data['EcsOrderComputeInstanceType'] = $value;
        $this->options['query']['EcsOrder.Compute.InstanceType'] = $value;

        return $this;
    }

    /**
     * @param array $nodes
     *
     * @return $this
     */
	public function withNodes(array $nodes)
	{
	    $this->data['Nodes'] = $nodes;
		foreach ($nodes as $depth1 => $depth1Value) {
			if(isset($depth1Value['IpAddress'])){
				$this->options['query']['Nodes.' . ($depth1 + 1) . '.IpAddress'] = $depth1Value['IpAddress'];
			}
			if(isset($depth1Value['HostName'])){
				$this->options['query']['Nodes.' . ($depth1 + 1) . '.HostName'] = $depth1Value['HostName'];
			}
			if(isset($depth1Value['Role'])){
				$this->options['query']['Nodes.' . ($depth1 + 1) . '.Role'] = $depth1Value['Role'];
			}
			if(isset($depth1Value['AccountType'])){
				$this->options['query']['Nodes.' . ($depth1 + 1) . '.AccountType'] = $depth1Value['AccountType'];
			}
			if(isset($depth1Value['SchedulerType'])){
				$this->options['query']['Nodes.' . ($depth1 + 1) . '.SchedulerType'] = $depth1Value['SchedulerType'];
			}
		}

		return $this;
    }

    /**
     * @param array $application
     *
     * @return $this
     */
	public function withApplication(array $application)
	{
	    $this->data['Application'] = $application;
		foreach ($application as $depth1 => $depth1Value) {
			if(isset($depth1Value['Tag'])){
				$this->options['query']['Application.' . ($depth1 + 1) . '.Tag'] = $depth1Value['Tag'];
			}
		}

		return $this;
    }
}

/**
 * @method string getTargetFile()
 * @method $this withTargetFile($value)
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class CreateJobFile extends Rpc
{
}

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getClockTime()
 * @method $this withClockTime($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getMem()
 * @method $this withMem($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getThread()
 * @method $this withThread($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getGpu()
 * @method $this withGpu($value)
 * @method string getNode()
 * @method $this withNode($value)
 * @method string getTask()
 * @method $this withTask($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQueue()
 * @method $this withQueue($value)
 */
class CreateJobTemplate extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReleaseInstance()
 * @method $this withReleaseInstance($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method array getContainerApp()
 */
class DeleteContainerApps extends Rpc
{

    /**
     * @param array $containerApp
     *
     * @return $this
     */
	public function withContainerApp(array $containerApp)
	{
	    $this->data['ContainerApp'] = $containerApp;
		foreach ($containerApp as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['ContainerApp.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteGWSCluster extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteGWSInstance extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class DeleteImage extends Rpc
{
}

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteJobs extends Rpc
{
}

/**
 * @method string getTemplates()
 * @method $this withTemplates($value)
 */
class DeleteJobTemplates extends Rpc
{
}

/**
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSync()
 * @method $this withSync($value)
 * @method string getReleaseInstance()
 * @method $this withReleaseInstance($value)
 */
class DeleteNodes extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteQueue extends Rpc
{
}

/**
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteSecurityGroup extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class DeleteUsers extends Rpc
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
			if(isset($depth1Value['Name'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeAutoScaleConfig extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeCluster extends Rpc
{
}

/**
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class DescribeContainerApp extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAsyncMode()
 * @method $this withAsyncMode($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeGWSClusterPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeGWSClusters extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class DescribeGWSImages extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserUid()
 * @method $this withUserUid($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class DescribeGWSInstances extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class DescribeImage extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeImageGatewayConfig extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSkuCode()
 * @method $this withSkuCode($value)
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeImagePrice extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class DescribeJob extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeNFSClientStatus extends Rpc
{
}

/**
 * @method array getCommodities()
 * @method string getPriceUnit()
 * @method $this withPriceUnit($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribePrice extends Rpc
{

    /**
     * @param array $commodities
     *
     * @return $this
     */
	public function withCommodities(array $commodities)
	{
	    $this->data['Commodities'] = $commodities;
		foreach ($commodities as $depth1 => $depth1Value) {
			if(isset($depth1Value['Amount'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.Amount'] = $depth1Value['Amount'];
			}
			if(isset($depth1Value['Period'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.Period'] = $depth1Value['Period'];
			}
			if(isset($depth1Value['NodeType'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.NodeType'] = $depth1Value['NodeType'];
			}
			if(isset($depth1Value['SystemDiskCategory'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.SystemDiskCategory'] = $depth1Value['SystemDiskCategory'];
			}
			if(isset($depth1Value['InternetChargeType'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.InternetChargeType'] = $depth1Value['InternetChargeType'];
			}
			if(isset($depth1Value['SystemDiskPerformanceLevel'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.SystemDiskPerformanceLevel'] = $depth1Value['SystemDiskPerformanceLevel'];
			}
			if(isset($depth1Value['SystemDiskSize'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.SystemDiskSize'] = $depth1Value['SystemDiskSize'];
			}
			if(isset($depth1Value['InternetMaxBandWidthOut'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.InternetMaxBandWidthOut'] = $depth1Value['InternetMaxBandWidthOut'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['NetworkType'])){
				$this->options['query']['Commodities.' . ($depth1 + 1) . '.NetworkType'] = $depth1Value['NetworkType'];
			}
		}

		return $this;
    }
}

/**
 * @method array getDesktopId()
 */
class EcdDeleteDesktops extends Rpc
{

    /**
     * @param array $desktopId
     *
     * @return $this
     */
	public function withDesktopId(array $desktopId)
	{
	    $this->data['DesktopId'] = $desktopId;
		foreach ($desktopId as $i => $iValue) {
			$this->options['query']['DesktopId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getClockTime()
 * @method $this withClockTime($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getMem()
 * @method $this withMem($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getThread()
 * @method $this withThread($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getGpu()
 * @method $this withGpu($value)
 * @method string getNode()
 * @method $this withNode($value)
 * @method string getTask()
 * @method $this withTask($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getQueue()
 * @method $this withQueue($value)
 */
class EditJobTemplate extends Rpc
{
}

/**
 * @method string getReportType()
 * @method $this withReportType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getFilterValue()
 * @method $this withFilterValue($value)
 * @method string getDim()
 * @method $this withDim($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class GetAccountingReport extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetAutoScaleConfig extends Rpc
{
}

/**
 * @method string getMetricScope()
 * @method $this withMetricScope($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getAggregationInterval()
 * @method $this withAggregationInterval($value)
 * @method string getReverse()
 * @method $this withReverse($value)
 * @method string getAggregationType()
 * @method $this withAggregationType($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getMetricCategories()
 * @method $this withMetricCategories($value)
 * @method string getFrom()
 * @method $this withFrom($value)
 * @method string getTo()
 * @method $this withTo($value)
 */
class GetCloudMetricLogs extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProfilingId()
 * @method $this withProfilingId($value)
 */
class GetCloudMetricProfiling extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetClusterVolumes extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 */
class GetGWSConnectTicket extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEnableReverse()
 * @method $this withEnableReverse($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 */
class GetHealthMonitorLogs extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNode()
 * @method $this withNode($value)
 */
class GetHybridClusterConfig extends Rpc
{
}

/**
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class GetIfEcsTypeSupportHtConfig extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getScheduler()
 */
class GetSchedulerInfo extends Rpc
{

    /**
     * @param array $scheduler
     *
     * @return $this
     */
	public function withScheduler(array $scheduler)
	{
	    $this->data['Scheduler'] = $scheduler;
		foreach ($scheduler as $depth1 => $depth1Value) {
			if(isset($depth1Value['SchedName'])){
				$this->options['query']['Scheduler.' . ($depth1 + 1) . '.SchedName'] = $depth1Value['SchedName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetVisualServiceStatus extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getUserPassword()
 * @method $this withUserPassword($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getAccountSessionTicket()
 * @method $this withAccountSessionTicket($value)
 * @method string getAccountUid()
 * @method $this withAccountUid($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GetWorkbenchToken extends Rpc
{
}

class InitializeEHPC extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 */
class InstallSoftware extends Rpc
{
}

/**
 * @method array getInstance()
 * @method string getWorkingDir()
 * @method $this withWorkingDir($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommand()
 * @method $this withCommand($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 */
class InvokeShellCommand extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getShowSoldOut()
 * @method $this withShowSoldOut($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ListAvailableEcsTypes extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListCloudMetricProfilings extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusterLogs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClusters extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListClustersMeta extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListCommands extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListContainerApps extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListContainerImages extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getFileSystemId()
 * @method $this withFileSystemId($value)
 */
class ListCpfsFileSystems extends Rpc
{
}

class ListCurrentClientVersion extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getBaseOsTag()
 * @method $this withBaseOsTag($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class ListCustomImages extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListFileSystemWithMountTargets extends Rpc
{
}

/**
 * @method string getBaseOsTag()
 * @method $this withBaseOsTag($value)
 * @method string getInstanceType()
 * @method $this withInstanceType($value)
 */
class ListImages extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListInstalledSoftware extends Rpc
{
}

/**
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInvokeRecordStatus()
 * @method $this withInvokeRecordStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInvocationResults extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getCommandId()
 * @method $this withCommandId($value)
 */
class ListInvocationStatus extends Rpc
{
}

/**
 * @method string getOwner()
 * @method $this withOwner($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRerunable()
 * @method $this withRerunable($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 */
class ListJobs extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListJobTemplates extends Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getHostNamePrefix()
 * @method $this withHostNamePrefix($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getHostNameSuffix()
 * @method $this withHostNameSuffix($value)
 * @method string getFilter()
 * @method $this withFilter($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getSequence()
 * @method $this withSequence($value)
 * @method string getSortBy()
 * @method $this withSortBy($value)
 */
class ListNodes extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListNodesByQueue extends Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getSequence()
 * @method $this withSequence($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getOnlyDetached()
 * @method $this withOnlyDetached($value)
 */
class ListNodesNoPaging extends Rpc
{
}

/**
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class ListPreferredEcsTypes extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListQueues extends Rpc
{
}

class ListRegions extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ListSecurityGroups extends Rpc
{
}

/**
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getEhpcVersion()
 * @method $this withEhpcVersion($value)
 */
class ListSoftwares extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getArchived()
 * @method $this withArchived($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ListTasks extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListVolumes extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyClusterAttributes extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class ModifyContainerAppAttributes extends Rpc
{
}

/**
 * @method array getRepo()
 * @method string getDBServerInfo()
 * @method $this withDBServerInfo($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDefaultRepoLocation()
 * @method $this withDefaultRepoLocation($value)
 * @method string getDBPassword()
 * @method $this withDBPassword($value)
 * @method string getDBType()
 * @method $this withDBType($value)
 * @method string getDBUsername()
 * @method $this withDBUsername($value)
 * @method string getPullUpdateTimeout()
 * @method $this withPullUpdateTimeout($value)
 * @method string getImageExpirationTimeout()
 * @method $this withImageExpirationTimeout($value)
 */
class ModifyImageGatewayConfig extends Rpc
{

    /**
     * @param array $repo
     *
     * @return $this
     */
	public function withRepo(array $repo)
	{
	    $this->data['Repo'] = $repo;
		foreach ($repo as $depth1 => $depth1Value) {
			if(isset($depth1Value['Auth'])){
				$this->options['query']['Repo.' . ($depth1 + 1) . '.Auth'] = $depth1Value['Auth'];
			}
			if(isset($depth1Value['Location'])){
				$this->options['query']['Repo.' . ($depth1 + 1) . '.Location'] = $depth1Value['Location'];
			}
			if(isset($depth1Value['URL'])){
				$this->options['query']['Repo.' . ($depth1 + 1) . '.URL'] = $depth1Value['URL'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class ModifyUserGroups extends Rpc
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
			if(isset($depth1Value['Name'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Group'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Group'] = $depth1Value['Group'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getUser()
 */
class ModifyUserPasswords extends Rpc
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
			if(isset($depth1Value['Password'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Password'] = $depth1Value['Password'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['User.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
		}

		return $this;
    }
}

/**
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPasswd()
 * @method $this withPasswd($value)
 */
class ModifyVisualServicePasswd extends Rpc
{
}

/**
 * @method string getMountDir()
 * @method $this withMountDir($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRemoteDir()
 * @method $this withRemoteDir($value)
 * @method string getNfsDir()
 * @method $this withNfsDir($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 */
class MountNFS extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getRepository()
 * @method $this withRepository($value)
 * @method string getContainerType()
 * @method $this withContainerType($value)
 * @method string getImageTag()
 * @method $this withImageTag($value)
 */
class PullImage extends Rpc
{
}

class QueryServicePackAndPrice extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getOsTag()
 * @method $this withOsTag($value)
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getAccountType()
 * @method $this withAccountType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getImageOwnerAlias()
 * @method $this withImageOwnerAlias($value)
 * @method string getSchedulerType()
 * @method $this withSchedulerType($value)
 */
class RecoverCluster extends Rpc
{
}

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RerunJobs extends Rpc
{
}

/**
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResetNodes extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFreq()
 * @method $this withFreq($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getProcessId()
 * @method $this withProcessId($value)
 */
class RunCloudMetricProfiling extends Rpc
{
}

/**
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getSpotPriceLimit()
 * @method $this withSpotPriceLimit($value)
 * @method string getExcludeNodes()
 * @method $this withExcludeNodes($value)
 * @method string getExtraNodesGrowRatio()
 * @method $this withExtraNodesGrowRatio($value)
 * @method string getShrinkIdleTimes()
 * @method $this withShrinkIdleTimes($value)
 * @method string getGrowTimeoutInMinutes()
 * @method $this withGrowTimeoutInMinutes($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getEnableAutoGrow()
 * @method $this withEnableAutoGrow($value)
 * @method string getEnableAutoShrink()
 * @method $this withEnableAutoShrink($value)
 * @method string getSpotStrategy()
 * @method $this withSpotStrategy($value)
 * @method string getMaxNodesInCluster()
 * @method $this withMaxNodesInCluster($value)
 * @method string getShrinkIntervalInMinutes()
 * @method $this withShrinkIntervalInMinutes($value)
 * @method array getQueues()
 * @method string getGrowIntervalInMinutes()
 * @method $this withGrowIntervalInMinutes($value)
 * @method string getGrowRatio()
 * @method $this withGrowRatio($value)
 */
class SetAutoScaleConfig extends Rpc
{

    /**
     * @param array $queues
     *
     * @return $this
     */
	public function withQueues(array $queues)
	{
	    $this->data['Queues'] = $queues;
		foreach ($queues as $depth1 => $depth1Value) {
			if(isset($depth1Value['QueueName'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.QueueName'] = $depth1Value['QueueName'];
			}
			if(isset($depth1Value['SystemDiskLevel'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.SystemDiskLevel'] = $depth1Value['SystemDiskLevel'];
			}
			foreach ($depth1Value['InstanceTypes'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['SpotStrategy'])){
					$this->options['query']['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.SpotStrategy'] = $depth2Value['SpotStrategy'];
				}
				if(isset($depth2Value['VSwitchId'])){
					$this->options['query']['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.VSwitchId'] = $depth2Value['VSwitchId'];
				}
				if(isset($depth2Value['InstanceType'])){
					$this->options['query']['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.InstanceType'] = $depth2Value['InstanceType'];
				}
				if(isset($depth2Value['ZoneId'])){
					$this->options['query']['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.ZoneId'] = $depth2Value['ZoneId'];
				}
				if(isset($depth2Value['SpotPriceLimit'])){
					$this->options['query']['Queues.' . ($depth1 + 1) . '.InstanceTypes.' . ($depth2 + 1) . '.SpotPriceLimit'] = $depth2Value['SpotPriceLimit'];
				}
			}
			if(isset($depth1Value['EnableAutoGrow'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.EnableAutoGrow'] = $depth1Value['EnableAutoGrow'];
			}
			if(isset($depth1Value['SpotPriceLimit'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.SpotPriceLimit'] = $depth1Value['SpotPriceLimit'];
			}
			if(isset($depth1Value['HostNameSuffix'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.HostNameSuffix'] = $depth1Value['HostNameSuffix'];
			}
			if(isset($depth1Value['EnableAutoShrink'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.EnableAutoShrink'] = $depth1Value['EnableAutoShrink'];
			}
			if(isset($depth1Value['SpotStrategy'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.SpotStrategy'] = $depth1Value['SpotStrategy'];
			}
			if(isset($depth1Value['MinNodesInQueue'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.MinNodesInQueue'] = $depth1Value['MinNodesInQueue'];
			}
			if(isset($depth1Value['SystemDiskCategory'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.SystemDiskCategory'] = $depth1Value['SystemDiskCategory'];
			}
			if(isset($depth1Value['MaxNodesInQueue'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.MaxNodesInQueue'] = $depth1Value['MaxNodesInQueue'];
			}
			if(isset($depth1Value['SystemDiskSize'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.SystemDiskSize'] = $depth1Value['SystemDiskSize'];
			}
			if(isset($depth1Value['InstanceType'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.InstanceType'] = $depth1Value['InstanceType'];
			}
			if(isset($depth1Value['QueueImageId'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.QueueImageId'] = $depth1Value['QueueImageId'];
			}
			if(isset($depth1Value['HostNamePrefix'])){
				$this->options['query']['Queues.' . ($depth1 + 1) . '.HostNamePrefix'] = $depth1Value['HostNamePrefix'];
			}
		}

		return $this;
    }
}

/**
 * @method string getWatermark()
 * @method $this withWatermark($value)
 * @method string getLocalDrive()
 * @method $this withLocalDrive($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClipboard()
 * @method $this withClipboard($value)
 * @method string getUsbRedirect()
 * @method $this withUsbRedirect($value)
 * @method string getAsyncMode()
 * @method $this withAsyncMode($value)
 * @method string getUdpPort()
 * @method $this withUdpPort($value)
 */
class SetGWSClusterPolicy extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SetGWSInstanceName extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserUid()
 * @method $this withUserUid($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class SetGWSInstanceUser extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getNode()
 */
class SetQueue extends Rpc
{

    /**
     * @param array $node
     *
     * @return $this
     */
	public function withNode(array $node)
	{
	    $this->data['Node'] = $node;
		foreach ($node as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['Node.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
		}

		return $this;
    }
}

/**
 * @method array getSlurmInfo()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method array getScheduler()
 * @method array getPbsInfo()
 */
class SetSchedulerInfo extends Rpc
{

    /**
     * @param array $slurmInfo
     *
     * @return $this
     */
	public function withSlurmInfo(array $slurmInfo)
	{
	    $this->data['SlurmInfo'] = $slurmInfo;
		foreach ($slurmInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['SchedInterval'])){
				$this->options['query']['SlurmInfo.' . ($depth1 + 1) . '.SchedInterval'] = $depth1Value['SchedInterval'];
			}
			if(isset($depth1Value['BackfillInterval'])){
				$this->options['query']['SlurmInfo.' . ($depth1 + 1) . '.BackfillInterval'] = $depth1Value['BackfillInterval'];
			}
		}

		return $this;
    }

    /**
     * @param array $scheduler
     *
     * @return $this
     */
	public function withScheduler(array $scheduler)
	{
	    $this->data['Scheduler'] = $scheduler;
		foreach ($scheduler as $depth1 => $depth1Value) {
			if(isset($depth1Value['SchedName'])){
				$this->options['query']['Scheduler.' . ($depth1 + 1) . '.SchedName'] = $depth1Value['SchedName'];
			}
		}

		return $this;
    }

    /**
     * @param array $pbsInfo
     *
     * @return $this
     */
	public function withPbsInfo(array $pbsInfo)
	{
	    $this->data['PbsInfo'] = $pbsInfo;
		foreach ($pbsInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['SchedInterval'])){
				$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.SchedInterval'] = $depth1Value['SchedInterval'];
			}
			foreach ($depth1Value['ResourceLimit'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Nodes'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.ResourceLimit.' . ($depth2 + 1) . '.Nodes'] = $depth2Value['Nodes'];
				}
				if(isset($depth2Value['Mem'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.ResourceLimit.' . ($depth2 + 1) . '.Mem'] = $depth2Value['Mem'];
				}
				if(isset($depth2Value['Cpus'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.ResourceLimit.' . ($depth2 + 1) . '.Cpus'] = $depth2Value['Cpus'];
				}
				if(isset($depth2Value['User'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.ResourceLimit.' . ($depth2 + 1) . '.User'] = $depth2Value['User'];
				}
				if(isset($depth2Value['Queue'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.ResourceLimit.' . ($depth2 + 1) . '.Queue'] = $depth2Value['Queue'];
				}
			}
			foreach ($depth1Value['AclLimit'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['AclUsers'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.AclLimit.' . ($depth2 + 1) . '.AclUsers'] = $depth2Value['AclUsers'];
				}
				if(isset($depth2Value['Queue'])){
					$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.AclLimit.' . ($depth2 + 1) . '.Queue'] = $depth2Value['Queue'];
				}
			}
			if(isset($depth1Value['JobHistoryDuration'])){
				$this->options['query']['PbsInfo.' . ($depth1 + 1) . '.JobHistoryDuration'] = $depth1Value['JobHistoryDuration'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StartCluster extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StartGWSInstance extends Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StartNodes extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getCidrIp()
 * @method $this withCidrIp($value)
 */
class StartVisualService extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopCluster extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class StopGWSInstance extends Rpc
{
}

/**
 * @method string getJobs()
 * @method $this withJobs($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopJobs extends Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method array getInstance()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class StopNodes extends Rpc
{

    /**
     * @param array $instance
     *
     * @return $this
     */
	public function withInstance(array $instance)
	{
	    $this->data['Instance'] = $instance;
		foreach ($instance as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Instance.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPort()
 * @method $this withPort($value)
 * @method string getCidrIp()
 * @method $this withCidrIp($value)
 */
class StopVisualService extends Rpc
{
}

/**
 * @method string getStderrRedirectPath()
 * @method $this withStderrRedirectPath($value)
 * @method string getRunasUserPassword()
 * @method $this withRunasUserPassword($value)
 * @method string getClockTime()
 * @method $this withClockTime($value)
 * @method string getCommandLine()
 * @method $this withCommandLine($value)
 * @method string getJobQueue()
 * @method $this withJobQueue($value)
 * @method string getArrayRequest()
 * @method $this withArrayRequest($value)
 * @method string getUnzipCmd()
 * @method $this withUnzipCmd($value)
 * @method string getPackagePath()
 * @method $this withPackagePath($value)
 * @method string getMem()
 * @method $this withMem($value)
 * @method string getStdoutRedirectPath()
 * @method $this withStdoutRedirectPath($value)
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getPostCmdLine()
 * @method $this withPostCmdLine($value)
 * @method string getRunasUser()
 * @method $this withRunasUser($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getReRunable()
 * @method $this withReRunable($value)
 * @method string getThread()
 * @method $this withThread($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getGpu()
 * @method $this withGpu($value)
 * @method string getNode()
 * @method $this withNode($value)
 * @method string getTask()
 * @method $this withTask($value)
 * @method string getInputFileUrl()
 * @method $this withInputFileUrl($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getContainerId()
 * @method $this withContainerId($value)
 */
class SubmitJob extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplication()
 * @method $this withApplication($value)
 */
class UninstallSoftware extends Rpc
{
}

/**
 * @method array getAdditionalVolumes()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateClusterVolumes extends Rpc
{

    /**
     * @param array $additionalVolumes
     *
     * @return $this
     */
	public function withAdditionalVolumes(array $additionalVolumes)
	{
	    $this->data['AdditionalVolumes'] = $additionalVolumes;
		foreach ($additionalVolumes as $depth1 => $depth1Value) {
			if(isset($depth1Value['VolumeType'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeType'] = $depth1Value['VolumeType'];
			}
			if(isset($depth1Value['VolumeProtocol'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeProtocol'] = $depth1Value['VolumeProtocol'];
			}
			if(isset($depth1Value['LocalDirectory'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.LocalDirectory'] = $depth1Value['LocalDirectory'];
			}
			if(isset($depth1Value['RemoteDirectory'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.RemoteDirectory'] = $depth1Value['RemoteDirectory'];
			}
			foreach ($depth1Value['Roles'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Name'])){
					$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.Roles.' . ($depth2 + 1) . '.Name'] = $depth2Value['Name'];
				}
			}
			if(isset($depth1Value['VolumeId'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeId'] = $depth1Value['VolumeId'];
			}
			if(isset($depth1Value['VolumeMountpoint'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.VolumeMountpoint'] = $depth1Value['VolumeMountpoint'];
			}
			if(isset($depth1Value['Location'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.Location'] = $depth1Value['Location'];
			}
			if(isset($depth1Value['JobQueue'])){
				$this->options['query']['AdditionalVolumes.' . ($depth1 + 1) . '.JobQueue'] = $depth1Value['JobQueue'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getComputeInstanceType()
 * @method $this withComputeInstanceType($value)
 */
class UpdateQueueConfig extends Rpc
{
}

/**
 * @method string getClientVersion()
 * @method $this withClientVersion($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClient extends Rpc
{
}
