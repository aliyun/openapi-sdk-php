<?php

namespace AlibabaCloud\Retailcloud\V20180313;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddClusterNode addClusterNode(array $options = [])
 * @method BatchAddServers batchAddServers(array $options = [])
 * @method BindNodeLabel bindNodeLabel(array $options = [])
 * @method CloseDeployOrder closeDeployOrder(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateAppResourceAlloc createAppResourceAlloc(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateDb createDb(array $options = [])
 * @method CreateDeployConfig createDeployConfig(array $options = [])
 * @method CreateEnvironment createEnvironment(array $options = [])
 * @method CreateNodeLabel createNodeLabel(array $options = [])
 * @method CreatePersistentVolume createPersistentVolume(array $options = [])
 * @method CreatePersistentVolumeClaim createPersistentVolumeClaim(array $options = [])
 * @method CreateService createService(array $options = [])
 * @method CreateSlbAP createSlbAP(array $options = [])
 * @method DeleteAppDetail deleteAppDetail(array $options = [])
 * @method DeleteAppEnvironment deleteAppEnvironment(array $options = [])
 * @method DeleteAppResourceAlloc deleteAppResourceAlloc(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteDatabase deleteDatabase(array $options = [])
 * @method DeleteDeployConfig deleteDeployConfig(array $options = [])
 * @method DeleteNodeLabel deleteNodeLabel(array $options = [])
 * @method DeletePersistentVolume deletePersistentVolume(array $options = [])
 * @method DeletePersistentVolumeClaim deletePersistentVolumeClaim(array $options = [])
 * @method DeleteRdsAccount deleteRdsAccount(array $options = [])
 * @method DeleteService deleteService(array $options = [])
 * @method DeleteSlbAP deleteSlbAP(array $options = [])
 * @method DeployApp deployApp(array $options = [])
 * @method DescribeAppDetail describeAppDetail(array $options = [])
 * @method DescribeAppEnvironmentDetail describeAppEnvironmentDetail(array $options = [])
 * @method DescribeAppResourceAlloc describeAppResourceAlloc(array $options = [])
 * @method DescribeDatabases describeDatabases(array $options = [])
 * @method DescribeDeployOrderDetail describeDeployOrderDetail(array $options = [])
 * @method DescribePodEvents describePodEvents(array $options = [])
 * @method DescribePodLog describePodLog(array $options = [])
 * @method DescribeRdsAccounts describeRdsAccounts(array $options = [])
 * @method DescribeServiceDetail describeServiceDetail(array $options = [])
 * @method DescribeSlbAPDetail describeSlbAPDetail(array $options = [])
 * @method GetInstTransInfo getInstTransInfo(array $options = [])
 * @method GetRdsBackUp getRdsBackUp(array $options = [])
 * @method GrantDbToAccount grantDbToAccount(array $options = [])
 * @method ListApp listApp(array $options = [])
 * @method ListAppCmsGroups listAppCmsGroups(array $options = [])
 * @method ListAppEnvironment listAppEnvironment(array $options = [])
 * @method ListAppInstance listAppInstance(array $options = [])
 * @method ListAppResourceAllocs listAppResourceAllocs(array $options = [])
 * @method ListAvailableClusterNode listAvailableClusterNode(array $options = [])
 * @method ListCluster listCluster(array $options = [])
 * @method ListClusterNode listClusterNode(array $options = [])
 * @method ListDeployConfig listDeployConfig(array $options = [])
 * @method ListDeployOrders listDeployOrders(array $options = [])
 * @method ListNodeLabelBindings listNodeLabelBindings(array $options = [])
 * @method ListNodeLabels listNodeLabels(array $options = [])
 * @method ListPersistentVolume listPersistentVolume(array $options = [])
 * @method ListPersistentVolumeClaim listPersistentVolumeClaim(array $options = [])
 * @method ListPods listPods(array $options = [])
 * @method ListServices listServices(array $options = [])
 * @method ListSlbAPs listSlbAPs(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method ModifyService modifyService(array $options = [])
 * @method ModifySlbAP modifySlbAP(array $options = [])
 * @method QueryClusterDetail queryClusterDetail(array $options = [])
 * @method RemoveClusterNode removeClusterNode(array $options = [])
 * @method ResourceStatusNotify resourceStatusNotify(array $options = [])
 * @method ResumeDeploy resumeDeploy(array $options = [])
 * @method ScaleApp scaleApp(array $options = [])
 * @method SetDeployPauseType setDeployPauseType(array $options = [])
 * @method UnbindNodeLabel unbindNodeLabel(array $options = [])
 * @method UpdateApp updateApp(array $options = [])
 * @method UpdateDeployConfig updateDeployConfig(array $options = [])
 * @method UpdateEnvironment updateEnvironment(array $options = [])
 */
class RetailcloudApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'retailcloud';

    /** @var string */
    public $version = '2018-03-13';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'retailcloud';
}

/**
 * @method array getEcsInstanceIdList()
 * @method string getClusterInstanceId()
 * @method $this withClusterInstanceId($value)
 */
class AddClusterNode extends Rpc
{

    /**
     * @param array $ecsInstanceIdList
     *
     * @return $this
     */
	public function withEcsInstanceIdList(array $ecsInstanceIdList)
	{
	    $this->data['EcsInstanceIdList'] = $ecsInstanceIdList;
		foreach ($ecsInstanceIdList as $i => $iValue) {
			$this->options['query']['EcsInstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getSign()
 * @method $this withSign($value)
 */
class BatchAddServers extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLabelKey()
 * @method $this withLabelKey($value)
 * @method string getLabelValue()
 * @method $this withLabelValue($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BindNodeLabel extends Rpc
{
}

/**
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 */
class CloseDeployOrder extends Rpc
{
}

/**
 * @method string getBizTitle()
 * @method string getOperatingSystem()
 * @method string getDescription()
 * @method string getLanguage()
 * @method string getTitle()
 * @method array getMiddleWareIdList()
 * @method string getStateType()
 * @method string getServiceType()
 * @method array getUserRoles()
 * @method string getBizCode()
 * @method string getNamespace()
 */
class CreateApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizTitle($value)
    {
        $this->data['BizTitle'] = $value;
        $this->options['form_params']['BizTitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatingSystem($value)
    {
        $this->data['OperatingSystem'] = $value;
        $this->options['form_params']['OperatingSystem'] = $value;

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
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTitle($value)
    {
        $this->data['Title'] = $value;
        $this->options['form_params']['Title'] = $value;

        return $this;
    }

    /**
     * @param array $middleWareIdList
     *
     * @return $this
     */
	public function withMiddleWareIdList(array $middleWareIdList)
	{
	    $this->data['MiddleWareIdList'] = $middleWareIdList;
		foreach ($middleWareIdList as $i => $iValue) {
			$this->options['form_params']['MiddleWareIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStateType($value)
    {
        $this->data['StateType'] = $value;
        $this->options['form_params']['StateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['form_params']['ServiceType'] = $value;

        return $this;
    }

    /**
     * @param array $userRoles
     *
     * @return $this
     */
	public function withUserRoles(array $userRoles)
	{
	    $this->data['UserRoles'] = $userRoles;
		foreach ($userRoles as $depth1 => $depth1Value) {
			$this->options['form_params']['UserRoles.' . ($depth1 + 1) . '.RoleName'] = $depth1Value['RoleName'];
			$this->options['form_params']['UserRoles.' . ($depth1 + 1) . '.UserType'] = $depth1Value['UserType'];
			$this->options['form_params']['UserRoles.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizCode($value)
    {
        $this->data['BizCode'] = $value;
        $this->options['form_params']['BizCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAppEnvId()
 * @method $this withAppEnvId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateAppResourceAlloc extends Rpc
{
}

/**
 * @method string getBusinessCode()
 * @method $this withBusinessCode($value)
 * @method string getCreateWithLogIntegration()
 * @method $this withCreateWithLogIntegration($value)
 * @method array getVswitchids()
 * @method string getCloudMonitorFlags()
 * @method $this withCloudMonitorFlags($value)
 * @method string getClusterEnvType()
 * @method $this withClusterEnvType($value)
 * @method string getCreateWithArmsIntegration()
 * @method $this withCreateWithArmsIntegration($value)
 * @method string getKeyPair()
 * @method $this withKeyPair($value)
 * @method string getClusterTitle()
 * @method $this withClusterTitle($value)
 * @method string getPodCIDR()
 * @method $this withPodCIDR($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterType()
 * @method $this withClusterType($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getSnatEntry()
 * @method $this withSnatEntry($value)
 * @method string getNetPlug()
 * @method $this withNetPlug($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getRegionName()
 * @method $this withRegionName($value)
 * @method string getPrivateZone()
 * @method $this withPrivateZone($value)
 * @method string getServiceCIDR()
 * @method $this withServiceCIDR($value)
 * @method string getPublicSlb()
 * @method $this withPublicSlb($value)
 */
class CreateCluster extends Rpc
{

    /**
     * @param array $vswitchids
     *
     * @return $this
     */
	public function withVswitchids(array $vswitchids)
	{
	    $this->data['Vswitchids'] = $vswitchids;
		foreach ($vswitchids as $i => $iValue) {
			$this->options['query']['Vswitchids.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDbName()
 * @method string getDbInstanceId()
 * @method string getDbDescription()
 * @method string getCharacterSetName()
 */
class CreateDb extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbDescription($value)
    {
        $this->data['DbDescription'] = $value;
        $this->options['form_params']['DbDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCharacterSetName($value)
    {
        $this->data['CharacterSetName'] = $value;
        $this->options['form_params']['CharacterSetName'] = $value;

        return $this;
    }
}

/**
 * @method string getCodePath()
 * @method $this withCodePath($value)
 * @method array getConfigMapList()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getConfigMap()
 * @method $this withConfigMap($value)
 * @method string getStatefulSet()
 * @method $this withStatefulSet($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getSecretList()
 * @method string getDeployment()
 * @method $this withDeployment($value)
 */
class CreateDeployConfig extends Rpc
{

    /**
     * @param array $configMapList
     *
     * @return $this
     */
	public function withConfigMapList(array $configMapList)
	{
	    $this->data['ConfigMapList'] = $configMapList;
		foreach ($configMapList as $i => $iValue) {
			$this->options['query']['ConfigMapList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $secretList
     *
     * @return $this
     */
	public function withSecretList(array $secretList)
	{
	    $this->data['SecretList'] = $secretList;
		foreach ($secretList as $i => $iValue) {
			$this->options['query']['SecretList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getEnvName()
 * @method $this withEnvName($value)
 * @method string getReplicas()
 * @method $this withReplicas($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getAppSchemaId()
 * @method $this withAppSchemaId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class CreateEnvironment extends Rpc
{
}

/**
 * @method string getLabelKey()
 * @method $this withLabelKey($value)
 * @method string getLabelValue()
 * @method $this withLabelValue($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateNodeLabel extends Rpc
{
}

/**
 * @method string getReclaimPolicy()
 * @method string getNFSVersion()
 * @method string getAccessModes()
 * @method string getName()
 * @method string getMountTargetDomain()
 * @method string getMountDir()
 * @method string getClusterInstanceId()
 * @method string getCapacity()
 * @method string getStorageClass()
 */
class CreatePersistentVolume extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReclaimPolicy($value)
    {
        $this->data['ReclaimPolicy'] = $value;
        $this->options['form_params']['ReclaimPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNFSVersion($value)
    {
        $this->data['NFSVersion'] = $value;
        $this->options['form_params']['NFSVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessModes($value)
    {
        $this->data['AccessModes'] = $value;
        $this->options['form_params']['AccessModes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountTargetDomain($value)
    {
        $this->data['MountTargetDomain'] = $value;
        $this->options['form_params']['MountTargetDomain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountDir($value)
    {
        $this->data['MountDir'] = $value;
        $this->options['form_params']['MountDir'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterInstanceId($value)
    {
        $this->data['ClusterInstanceId'] = $value;
        $this->options['form_params']['ClusterInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCapacity($value)
    {
        $this->data['Capacity'] = $value;
        $this->options['form_params']['Capacity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorageClass($value)
    {
        $this->data['StorageClass'] = $value;
        $this->options['form_params']['StorageClass'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessModes()
 * @method $this withAccessModes($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getStorageClass()
 * @method $this withStorageClass($value)
 * @method string getCapacity()
 * @method $this withCapacity($value)
 */
class CreatePersistentVolumeClaim extends Rpc
{
}

/**
 * @method string getHeadless()
 * @method $this withHeadless($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getK8sServiceId()
 * @method $this withK8sServiceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getPortMappings()
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class CreateService extends Rpc
{

    /**
     * @param array $portMappings
     *
     * @return $this
     */
	public function withPortMappings(array $portMappings)
	{
	    $this->data['PortMappings'] = $portMappings;
		foreach ($portMappings as $depth1 => $depth1Value) {
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.NodePort'] = $depth1Value['NodePort'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.TargetPort'] = $depth1Value['TargetPort'];
		}

		return $this;
    }
}

/**
 * @method string getSslCertId()
 * @method $this withSslCertId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getEstablishedTimeout()
 * @method $this withEstablishedTimeout($value)
 * @method string getSlbId()
 * @method $this withSlbId($value)
 * @method string getRealServerPort()
 * @method $this withRealServerPort($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class CreateSlbAP extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteAppDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class DeleteAppEnvironment extends Rpc
{
}

/**
 * @method string getAppEnvId()
 * @method $this withAppEnvId($value)
 */
class DeleteAppResourceAlloc extends Rpc
{
}

/**
 * @method string getClusterInstanceId()
 * @method $this withClusterInstanceId($value)
 */
class DeleteCluster extends Rpc
{
}

/**
 * @method string getDBName()
 * @method string getDBInstanceId()
 */
class DeleteDatabase extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBName($value)
    {
        $this->data['DBName'] = $value;
        $this->options['form_params']['DBName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDBInstanceId($value)
    {
        $this->data['DBInstanceId'] = $value;
        $this->options['form_params']['DBInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getSchemaId()
 * @method $this withSchemaId($value)
 */
class DeleteDeployConfig extends Rpc
{
}

/**
 * @method string getLabelKey()
 * @method $this withLabelKey($value)
 * @method string getLabelValue()
 * @method $this withLabelValue($value)
 * @method string getForce()
 * @method $this withForce($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteNodeLabel extends Rpc
{
}

/**
 * @method string getPersistentVolumeName()
 * @method string getClusterInstanceId()
 */
class DeletePersistentVolume extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersistentVolumeName($value)
    {
        $this->data['PersistentVolumeName'] = $value;
        $this->options['form_params']['PersistentVolumeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterInstanceId($value)
    {
        $this->data['ClusterInstanceId'] = $value;
        $this->options['form_params']['ClusterInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPersistentVolumeClaimName()
 * @method $this withPersistentVolumeClaimName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class DeletePersistentVolumeClaim extends Rpc
{
}

/**
 * @method string getAccountName()
 * @method string getDbInstanceId()
 */
class DeleteRdsAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteService extends Rpc
{
}

/**
 * @method string getSlbAPId()
 * @method $this withSlbAPId($value)
 */
class DeleteSlbAP extends Rpc
{
}

/**
 * @method string getDeployPacketId()
 * @method $this withDeployPacketId($value)
 * @method string getDeployPacketUrl()
 * @method $this withDeployPacketUrl($value)
 * @method string getTotalPartitions()
 * @method $this withTotalPartitions($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getPauseType()
 * @method $this withPauseType($value)
 * @method string getArmsFlag()
 * @method $this withArmsFlag($value)
 */
class DeployApp extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeAppDetail extends Rpc
{
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class DescribeAppEnvironmentDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppEnvId()
 * @method $this withAppEnvId($value)
 */
class DescribeAppResourceAlloc extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeDatabases extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 */
class DescribeDeployOrderDetail extends Rpc
{
}

/**
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 * @method string getAppInstId()
 * @method $this withAppInstId($value)
 */
class DescribePodEvents extends Rpc
{
}

/**
 * @method string getDeployOrderId()
 * @method string getAppInstId()
 */
class DescribePodLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployOrderId($value)
    {
        $this->data['DeployOrderId'] = $value;
        $this->options['form_params']['DeployOrderId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppInstId($value)
    {
        $this->data['AppInstId'] = $value;
        $this->options['form_params']['AppInstId'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method $this withAccountName($value)
 * @method string getDbInstanceId()
 * @method $this withDbInstanceId($value)
 */
class DescribeRdsAccounts extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DescribeServiceDetail extends Rpc
{
}

/**
 * @method string getSlbAPId()
 * @method $this withSlbAPId($value)
 */
class DescribeSlbAPDetail extends Rpc
{
}

/**
 * @method string getAliyunUid()
 * @method string getAliyunEquipId()
 * @method string getAliyunCommodityCode()
 */
class GetInstTransInfo extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunUid($value)
    {
        $this->data['AliyunUid'] = $value;
        $this->options['form_params']['aliyunUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunEquipId($value)
    {
        $this->data['AliyunEquipId'] = $value;
        $this->options['form_params']['aliyunEquipId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAliyunCommodityCode($value)
    {
        $this->data['AliyunCommodityCode'] = $value;
        $this->options['form_params']['aliyunCommodityCode'] = $value;

        return $this;
    }
}

/**
 * @method string getBackupId()
 * @method string getPageSize()
 * @method string getDbInstanceId()
 * @method string getBackupType()
 * @method string getPageNumber()
 */
class GetRdsBackUp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupId($value)
    {
        $this->data['BackupId'] = $value;
        $this->options['form_params']['BackupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackupType($value)
    {
        $this->data['BackupType'] = $value;
        $this->options['form_params']['BackupType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAccountName()
 * @method string getDbName()
 * @method string getDbInstanceId()
 * @method string getAccountPrivilege()
 */
class GrantDbToAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountName($value)
    {
        $this->data['AccountName'] = $value;
        $this->options['form_params']['AccountName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbName($value)
    {
        $this->data['DbName'] = $value;
        $this->options['form_params']['DbName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDbInstanceId($value)
    {
        $this->data['DbInstanceId'] = $value;
        $this->options['form_params']['DbInstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccountPrivilege($value)
    {
        $this->data['AccountPrivilege'] = $value;
        $this->options['form_params']['AccountPrivilege'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListApp extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAppCmsGroups extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getEnvName()
 * @method $this withEnvName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAppEnvironment extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getEnvId()
 * @method string getPageNumber()
 */
class ListAppInstance extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvId($value)
    {
        $this->data['EnvId'] = $value;
        $this->options['form_params']['EnvId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAppEnvId()
 * @method $this withAppEnvId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAppResourceAllocs extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getClusterInstanceId()
 * @method $this withClusterInstanceId($value)
 */
class ListAvailableClusterNode extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBusinessCode()
 * @method $this withBusinessCode($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 */
class ListCluster extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getClusterInstanceId()
 * @method $this withClusterInstanceId($value)
 */
class ListClusterNode extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class ListDeployConfig extends Rpc
{
}

/**
 * @method string getStartTimeGreaterThanOrEqualTo()
 * @method $this withStartTimeGreaterThanOrEqualTo($value)
 * @method array getStatusList()
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getEndTimeGreaterThan()
 * @method $this withEndTimeGreaterThan($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPauseType()
 * @method $this withPauseType($value)
 * @method array getResultList()
 * @method string getStartTimeGreaterThan()
 * @method $this withStartTimeGreaterThan($value)
 * @method string getStartTimeLessThan()
 * @method $this withStartTimeLessThan($value)
 * @method string getStartTimeLessThanOrEqualTo()
 * @method $this withStartTimeLessThanOrEqualTo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getEnvType()
 * @method $this withEnvType($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTimeGreaterThanOrEqualTo()
 * @method $this withEndTimeGreaterThanOrEqualTo($value)
 * @method string getEndTimeLessThan()
 * @method $this withEndTimeLessThan($value)
 * @method string getEndTimeLessThanOrEqualTo()
 * @method $this withEndTimeLessThanOrEqualTo($value)
 * @method string getPartitionType()
 * @method $this withPartitionType($value)
 * @method string getDeployCategory()
 * @method $this withDeployCategory($value)
 * @method string getDeployType()
 * @method $this withDeployType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListDeployOrders extends Rpc
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
			$this->options['form_params']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resultList
     *
     * @return $this
     */
	public function withResultList(array $resultList)
	{
	    $this->data['ResultList'] = $resultList;
		foreach ($resultList as $i => $iValue) {
			$this->options['form_params']['ResultList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLabelKey()
 * @method $this withLabelKey($value)
 * @method string getLabelValue()
 * @method $this withLabelValue($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListNodeLabelBindings extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getLabelKey()
 * @method $this withLabelKey($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListNodeLabels extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getClusterInstanceId()
 */
class ListPersistentVolume extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterInstanceId($value)
    {
        $this->data['ClusterInstanceId'] = $value;
        $this->options['form_params']['ClusterInstanceId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPersistentVolumeClaim extends Rpc
{
}

/**
 * @method array getStatusList()
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getResultList()
 */
class ListPods extends Rpc
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
			$this->options['form_params']['StatusList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resultList
     *
     * @return $this
     */
	public function withResultList(array $resultList)
	{
	    $this->data['ResultList'] = $resultList;
		foreach ($resultList as $i => $iValue) {
			$this->options['form_params']['ResultList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListServices extends Rpc
{
}

/**
 * @method array getProtocolList()
 * @method string getSlbId()
 * @method $this withSlbId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 * @method string getNetworkMode()
 * @method $this withNetworkMode($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSlbAPs extends Rpc
{

    /**
     * @param array $protocolList
     *
     * @return $this
     */
	public function withProtocolList(array $protocolList)
	{
	    $this->data['ProtocolList'] = $protocolList;
		foreach ($protocolList as $i => $iValue) {
			$this->options['form_params']['ProtocolList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsers extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getName()
 * @method $this withName($value)
 * @method array getPortMappings()
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ModifyService extends Rpc
{

    /**
     * @param array $portMappings
     *
     * @return $this
     */
	public function withPortMappings(array $portMappings)
	{
	    $this->data['PortMappings'] = $portMappings;
		foreach ($portMappings as $depth1 => $depth1Value) {
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.Protocol'] = $depth1Value['Protocol'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.NodePort'] = $depth1Value['NodePort'];
			$this->options['form_params']['PortMappings.' . ($depth1 + 1) . '.TargetPort'] = $depth1Value['TargetPort'];
		}

		return $this;
    }
}

/**
 * @method string getSslCertId()
 * @method $this withSslCertId($value)
 * @method string getEstablishedTimeout()
 * @method $this withEstablishedTimeout($value)
 * @method string getRealServerPort()
 * @method $this withRealServerPort($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getSlbAPId()
 * @method $this withSlbAPId($value)
 */
class ModifySlbAP extends Rpc
{
}

/**
 * @method string getClusterInstanceId()
 * @method $this withClusterInstanceId($value)
 */
class QueryClusterDetail extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method array getEcsInstanceIdList()
 * @method string getClusterInstanceId()
 * @method $this withClusterInstanceId($value)
 */
class RemoveClusterNode extends Rpc
{

    /**
     * @param array $ecsInstanceIdList
     *
     * @return $this
     */
	public function withEcsInstanceIdList(array $ecsInstanceIdList)
	{
	    $this->data['EcsInstanceIdList'] = $ecsInstanceIdList;
		foreach ($ecsInstanceIdList as $i => $iValue) {
			$this->options['query']['EcsInstanceIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getData()
 */
class ResourceStatusNotify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['data'] = $value;

        return $this;
    }
}

/**
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 */
class ResumeDeploy extends Rpc
{
}

/**
 * @method string getReplicas()
 * @method $this withReplicas($value)
 * @method string getEnvId()
 * @method $this withEnvId($value)
 */
class ScaleApp extends Rpc
{
}

/**
 * @method string getDeployPauseType()
 * @method $this withDeployPauseType($value)
 * @method string getDeployOrderId()
 * @method $this withDeployOrderId($value)
 */
class SetDeployPauseType extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLabelKey()
 * @method $this withLabelKey($value)
 * @method string getLabelValue()
 * @method $this withLabelValue($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UnbindNodeLabel extends Rpc
{
}

/**
 * @method string getBizTitle()
 * @method string getServiceType()
 * @method array getUserRoles()
 * @method string getAppId()
 * @method string getOperatingSystem()
 * @method string getDescription()
 * @method string getLanguage()
 * @method array getMiddleWareIdList()
 */
class UpdateApp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizTitle($value)
    {
        $this->data['BizTitle'] = $value;
        $this->options['form_params']['BizTitle'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['form_params']['ServiceType'] = $value;

        return $this;
    }

    /**
     * @param array $userRoles
     *
     * @return $this
     */
	public function withUserRoles(array $userRoles)
	{
	    $this->data['UserRoles'] = $userRoles;
		foreach ($userRoles as $depth1 => $depth1Value) {
			$this->options['form_params']['UserRoles.' . ($depth1 + 1) . '.RoleName'] = $depth1Value['RoleName'];
			$this->options['form_params']['UserRoles.' . ($depth1 + 1) . '.UserType'] = $depth1Value['UserType'];
			$this->options['form_params']['UserRoles.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['form_params']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperatingSystem($value)
    {
        $this->data['OperatingSystem'] = $value;
        $this->options['form_params']['OperatingSystem'] = $value;

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
    public function withLanguage($value)
    {
        $this->data['Language'] = $value;
        $this->options['form_params']['Language'] = $value;

        return $this;
    }

    /**
     * @param array $middleWareIdList
     *
     * @return $this
     */
	public function withMiddleWareIdList(array $middleWareIdList)
	{
	    $this->data['MiddleWareIdList'] = $middleWareIdList;
		foreach ($middleWareIdList as $i => $iValue) {
			$this->options['form_params']['MiddleWareIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCodePath()
 * @method $this withCodePath($value)
 * @method array getConfigMapList()
 * @method string getConfigMap()
 * @method $this withConfigMap($value)
 * @method string getStatefulSet()
 * @method $this withStatefulSet($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getSecretList()
 * @method string getId()
 * @method $this withId($value)
 * @method string getDeployment()
 * @method $this withDeployment($value)
 */
class UpdateDeployConfig extends Rpc
{

    /**
     * @param array $configMapList
     *
     * @return $this
     */
	public function withConfigMapList(array $configMapList)
	{
	    $this->data['ConfigMapList'] = $configMapList;
		foreach ($configMapList as $i => $iValue) {
			$this->options['query']['ConfigMapList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $secretList
     *
     * @return $this
     */
	public function withSecretList(array $secretList)
	{
	    $this->data['SecretList'] = $secretList;
		foreach ($secretList as $i => $iValue) {
			$this->options['query']['SecretList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getReplicas()
 * @method $this withReplicas($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAppSchemaId()
 * @method $this withAppSchemaId($value)
 * @method string getAppEnvId()
 * @method $this withAppEnvId($value)
 */
class UpdateEnvironment extends Rpc
{
}
