<?php

namespace AlibabaCloud\Edas\V20170801;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method GetCluster getCluster(array $options = [])
 * @method QueryRegionConfig queryRegionConfig(array $options = [])
 * @method CsbListRegions csbListRegions(array $options = [])
 * @method CreateServerlessApplication createServerlessApplication(array $options = [])
 * @method BindServerlessSlb bindServerlessSlb(array $options = [])
 * @method DeleteServerlessApplication deleteServerlessApplication(array $options = [])
 * @method DeployServerlessApplication deployServerlessApplication(array $options = [])
 * @method GetServerlessAppConfigDetail getServerlessAppConfigDetail(array $options = [])
 * @method InsertServerlessApplication insertServerlessApplication(array $options = [])
 * @method ScaleServerlessApplication scaleServerlessApplication(array $options = [])
 * @method UnbindServerlessSlb unbindServerlessSlb(array $options = [])
 * @method InstallAgent installAgent(array $options = [])
 * @method ListComponents listComponents(array $options = [])
 * @method GetPackageStorageCredential getPackageStorageCredential(array $options = [])
 * @method ListEcsNotInCluster listEcsNotInCluster(array $options = [])
 * @method UpdateK8sSlb updateK8sSlb(array $options = [])
 * @method BindK8sSlb bindK8sSlb(array $options = [])
 * @method ListScalingRecords listScalingRecords(array $options = [])
 * @method UnbindK8sSlb unbindK8sSlb(array $options = [])
 * @method UpdateK8sApplicationConfig updateK8sApplicationConfig(array $options = [])
 * @method ImportK8sCluster importK8sCluster(array $options = [])
 * @method InsertK8sApplication insertK8sApplication(array $options = [])
 * @method DeployK8sApplication deployK8sApplication(array $options = [])
 * @method ScaleK8sApplication scaleK8sApplication(array $options = [])
 * @method DeleteK8sApplication deleteK8sApplication(array $options = [])
 * @method ListScalingRules listScalingRules(array $options = [])
 * @method InsertScalingRule insertScalingRule(array $options = [])
 * @method DeleteResourceGroup deleteResourceGroup(array $options = [])
 * @method InsertResourceGroup insertResourceGroup(array $options = [])
 * @method GetSecureToken getSecureToken(array $options = [])
 * @method TransformClusterMember transformClusterMember(array $options = [])
 * @method ListConvertableEcu listConvertableEcu(array $options = [])
 * @method InsertClusterMember insertClusterMember(array $options = [])
 * @method ListScaleOutEcu listScaleOutEcu(array $options = [])
 * @method ListEcuByRegion listEcuByRegion(array $options = [])
 * @method QueryMigrateEcuList queryMigrateEcuList(array $options = [])
 * @method QueryMigrateRegionList queryMigrateRegionList(array $options = [])
 * @method MigrateEcu migrateEcu(array $options = [])
 * @method MigrateToRegion migrateToRegion(array $options = [])
 * @method ListUserDefineRegion listUserDefineRegion(array $options = [])
 * @method ListAliyunRegion listAliyunRegion(array $options = [])
 * @method InsertOrUpdateRegion insertOrUpdateRegion(array $options = [])
 * @method DeleteUserDefineRegion deleteUserDefineRegion(array $options = [])
 * @method QueryMonitorInfo queryMonitorInfo(array $options = [])
 * @method ListVpc listVpc(array $options = [])
 * @method UpdateHealthCheckUrl updateHealthCheckUrl(array $options = [])
 * @method UpdateJvmConfiguration updateJvmConfiguration(array $options = [])
 * @method UpdateContainerConfiguration updateContainerConfiguration(array $options = [])
 * @method UpdateApplicationBaseInfo updateApplicationBaseInfo(array $options = [])
 * @method GetContainerConfiguration getContainerConfiguration(array $options = [])
 * @method GetJvmConfiguration getJvmConfiguration(array $options = [])
 * @method InsertDeployGroup insertDeployGroup(array $options = [])
 * @method GetApplication getApplication(array $options = [])
 * @method DeleteDeployGroup deleteDeployGroup(array $options = [])
 * @method QueryApplicationStatus queryApplicationStatus(array $options = [])
 * @method SynchronizeResource synchronizeResource(array $options = [])
 * @method ListRecentChangeOrder listRecentChangeOrder(array $options = [])
 * @method DeleteEcu deleteEcu(array $options = [])
 * @method ListSlb listSlb(array $options = [])
 * @method ListHistoryDeployVersion listHistoryDeployVersion(array $options = [])
 * @method ListResourceGroup listResourceGroup(array $options = [])
 * @method UpdateAccountInfo updateAccountInfo(array $options = [])
 * @method UpdateRole updateRole(array $options = [])
 * @method UnbindSlb unbindSlb(array $options = [])
 * @method UnbindSubAccount unbindSubAccount(array $options = [])
 * @method ListRole listRole(array $options = [])
 * @method ListSubAccount listSubAccount(array $options = [])
 * @method ListClusterMembers listClusterMembers(array $options = [])
 * @method ListAuthority listAuthority(array $options = [])
 * @method InsertCluster insertCluster(array $options = [])
 * @method InsertRole insertRole(array $options = [])
 * @method EnableDegradeControl enableDegradeControl(array $options = [])
 * @method DeleteClusterMember deleteClusterMember(array $options = [])
 * @method DeleteRole deleteRole(array $options = [])
 * @method AuthorizeRole authorizeRole(array $options = [])
 * @method BindSlb bindSlb(array $options = [])
 * @method BindSubAccount bindSubAccount(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method AuthorizeApplication authorizeApplication(array $options = [])
 * @method AuthorizeResourceGroup authorizeResourceGroup(array $options = [])
 * @method GetChangeOrderInfo getChangeOrderInfo(array $options = [])
 * @method ListCluster listCluster(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method RollbackApplication rollbackApplication(array $options = [])
 * @method ScaleInApplication scaleInApplication(array $options = [])
 * @method ScaleOutApplication scaleOutApplication(array $options = [])
 * @method StartApplication startApplication(array $options = [])
 * @method StopApplication stopApplication(array $options = [])
 * @method ResetApplication resetApplication(array $options = [])
 * @method InsertApplication insertApplication(array $options = [])
 * @method ChangeApplicationGroup changeApplicationGroup(array $options = [])
 * @method DeployApplication deployApplication(array $options = [])
 * @method UpdateContainer updateContainer(array $options = [])
 * @method ListApplicationEcu listApplicationEcu(array $options = [])
 * @method ListBuildPack listBuildPack(array $options = [])
 * @method ListDeployGroup listDeployGroup(array $options = [])
 * @method QueryConfigCenter queryConfigCenter(array $options = [])
 * @method UpdateDegradeControl updateDegradeControl(array $options = [])
 * @method UpdateFlowControl updateFlowControl(array $options = [])
 * @method ListFlowControls listFlowControls(array $options = [])
 * @method ListPublishedServices listPublishedServices(array $options = [])
 * @method ListServiceGroups listServiceGroups(array $options = [])
 * @method InsertFlowControl insertFlowControl(array $options = [])
 * @method InsertServiceGroup insertServiceGroup(array $options = [])
 * @method ListConfigCenters listConfigCenters(array $options = [])
 * @method ListConsumedServices listConsumedServices(array $options = [])
 * @method ListDegradeControls listDegradeControls(array $options = [])
 * @method DisableDegradeControl disableDegradeControl(array $options = [])
 * @method DisableFlowControl disableFlowControl(array $options = [])
 * @method EnableFlowControl enableFlowControl(array $options = [])
 * @method InsertConfigCenter insertConfigCenter(array $options = [])
 * @method InsertDegradeControl insertDegradeControl(array $options = [])
 * @method DeleteConfigCenter deleteConfigCenter(array $options = [])
 * @method DeleteDegradeControl deleteDegradeControl(array $options = [])
 * @method DeleteFlowControl deleteFlowControl(array $options = [])
 * @method DeleteServiceGroup deleteServiceGroup(array $options = [])
 * @method ListApplication listApplication(array $options = [])
 */
class EdasApiResolver
{
    use ApiResolverTrait;
}

class V20170801Roa extends Roa
{
    /** @var string */
    public $product = 'Edas';

    /** @var string */
    public $version = '2017-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'edas';
}

/**
 * @method string getClusterId()
 */
class GetCluster extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

class QueryRegionConfig extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/region_config';

    /** @var string */
    public $method = 'GET';
}

class CsbListRegions extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/authgw/csb/api/edas/list_regions';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getWebContainer()
 * @method string getJarStartArgs()
 * @method string getMemory()
 * @method string getCommandArgs()
 * @method string getReplicas()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getCpu()
 * @method string getEnvs()
 * @method string getPackageVersion()
 * @method string getCommand()
 * @method string getCustomHostAlias()
 * @method string getDeploy()
 * @method string getVSwitchId()
 * @method string getJdk()
 * @method string getAppDescription()
 * @method string getJarStartOptions()
 * @method string getEdasContainerVersion()
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getPackageUrl()
 * @method string getVpcId()
 * @method string getImageUrl()
 * @method string getPackageType()
 */
class CreateServerlessApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/pop/pop_serverless_app_create_without_deploy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarStartArgs($value)
    {
        $this->data['JarStartArgs'] = $value;
        $this->options['query']['JarStartArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['query']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommandArgs($value)
    {
        $this->data['CommandArgs'] = $value;
        $this->options['query']['CommandArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomHostAlias($value)
    {
        $this->data['CustomHostAlias'] = $value;
        $this->options['query']['CustomHostAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploy($value)
    {
        $this->data['Deploy'] = $value;
        $this->options['query']['Deploy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['query']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJdk($value)
    {
        $this->data['Jdk'] = $value;
        $this->options['query']['Jdk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppDescription($value)
    {
        $this->data['AppDescription'] = $value;
        $this->options['query']['AppDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarStartOptions($value)
    {
        $this->data['JarStartOptions'] = $value;
        $this->options['query']['JarStartOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdasContainerVersion($value)
    {
        $this->data['EdasContainerVersion'] = $value;
        $this->options['query']['EdasContainerVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['query']['PackageType'] = $value;

        return $this;
    }
}

/**
 * @method string getIntranet()
 * @method string getAppId()
 * @method string getInternet()
 */
class BindServerlessSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/serverless_slb_binding';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranet($value)
    {
        $this->data['Intranet'] = $value;
        $this->options['query']['Intranet'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternet($value)
    {
        $this->data['Internet'] = $value;
        $this->options['query']['Internet'] = $value;

        return $this;
    }
}

/**
 * @method string getAct()
 * @method string getAppId()
 */
class DeleteServerlessApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/pop/pop_serverless_app_delete';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAct($value)
    {
        $this->data['Act'] = $value;
        $this->options['query']['Act'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getWebContainer()
 * @method string getJarStartArgs()
 * @method string getCommandArgs()
 * @method string getReadiness()
 * @method string getBatchWaitTime()
 * @method string getLiveness()
 * @method string getEnvs()
 * @method string getPackageVersion()
 * @method string getCommand()
 * @method string getCustomHostAlias()
 * @method string getJdk()
 * @method string getJarStartOptions()
 * @method string getMinReadyInstances()
 * @method string getEdasContainerVersion()
 * @method string getPackageUrl()
 * @method string getAppId()
 * @method string getImageUrl()
 */
class DeployServerlessApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/pop/pop_serverless_app_deploy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarStartArgs($value)
    {
        $this->data['JarStartArgs'] = $value;
        $this->options['query']['JarStartArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommandArgs($value)
    {
        $this->data['CommandArgs'] = $value;
        $this->options['query']['CommandArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomHostAlias($value)
    {
        $this->data['CustomHostAlias'] = $value;
        $this->options['query']['CustomHostAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJdk($value)
    {
        $this->data['Jdk'] = $value;
        $this->options['query']['Jdk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarStartOptions($value)
    {
        $this->data['JarStartOptions'] = $value;
        $this->options['query']['JarStartOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinReadyInstances($value)
    {
        $this->data['MinReadyInstances'] = $value;
        $this->options['query']['MinReadyInstances'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdasContainerVersion($value)
    {
        $this->data['EdasContainerVersion'] = $value;
        $this->options['query']['EdasContainerVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetServerlessAppConfigDetail extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/pop/pop_serverless_app_config_detail';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getWebContainer()
 * @method string getJarStartArgs()
 * @method string getMemory()
 * @method string getBuildPackId()
 * @method string getCommandArgs()
 * @method string getReplicas()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getCpu()
 * @method string getEnvs()
 * @method string getPackageVersion()
 * @method string getCommand()
 * @method string getCustomHostAlias()
 * @method string getDeploy()
 * @method string getVSwitchId()
 * @method string getJdk()
 * @method string getAppDescription()
 * @method string getJarStartOptions()
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getPackageUrl()
 * @method string getVpcId()
 * @method string getImageUrl()
 * @method string getPackageType()
 */
class InsertServerlessApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/pop/pop_serverless_app_create_without_deploy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarStartArgs($value)
    {
        $this->data['JarStartArgs'] = $value;
        $this->options['query']['JarStartArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemory($value)
    {
        $this->data['Memory'] = $value;
        $this->options['query']['Memory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommandArgs($value)
    {
        $this->data['CommandArgs'] = $value;
        $this->options['query']['CommandArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomHostAlias($value)
    {
        $this->data['CustomHostAlias'] = $value;
        $this->options['query']['CustomHostAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeploy($value)
    {
        $this->data['Deploy'] = $value;
        $this->options['query']['Deploy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitchId($value)
    {
        $this->data['VSwitchId'] = $value;
        $this->options['query']['VSwitchId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJdk($value)
    {
        $this->data['Jdk'] = $value;
        $this->options['query']['Jdk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppDescription($value)
    {
        $this->data['AppDescription'] = $value;
        $this->options['query']['AppDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarStartOptions($value)
    {
        $this->data['JarStartOptions'] = $value;
        $this->options['query']['JarStartOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['query']['PackageType'] = $value;

        return $this;
    }
}

/**
 * @method string getReplicas()
 * @method string getAppId()
 */
class ScaleServerlessApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/pop/pop_serverless_app_rescale';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getIntranet()
 * @method string getAppId()
 * @method string getInternet()
 */
class UnbindServerlessSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/serverless_slb_binding';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranet($value)
    {
        $this->data['Intranet'] = $value;
        $this->options['query']['Intranet'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternet($value)
    {
        $this->data['Internet'] = $value;
        $this->options['query']['Internet'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method string getDoAsync()
 * @method string getClusterId()
 */
class InstallAgent extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/ecss/install_agent';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['InstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDoAsync($value)
    {
        $this->data['DoAsync'] = $value;
        $this->options['query']['DoAsync'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

class ListComponents extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/components';

    /** @var string */
    public $method = 'GET';
}

class GetPackageStorageCredential extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/package_storage_credential';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getVpcId()
 * @method string getNetworkMode()
 */
class ListEcsNotInCluster extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/ecs_not_in_cluster';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkMode($value)
    {
        $this->data['NetworkMode'] = $value;
        $this->options['query']['NetworkMode'] = $value;

        return $this;
    }
}

/**
 * @method string getSlbProtocol()
 * @method string getPort()
 * @method string getAppId()
 * @method string getClusterId()
 * @method string getType()
 * @method string getTargetPort()
 */
class UpdateK8sSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbProtocol($value)
    {
        $this->data['SlbProtocol'] = $value;
        $this->options['query']['SlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['query']['Port'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetPort($value)
    {
        $this->data['TargetPort'] = $value;
        $this->options['query']['TargetPort'] = $value;

        return $this;
    }
}

/**
 * @method string getSlbId()
 * @method string getSlbProtocol()
 * @method string getPort()
 * @method string getAppId()
 * @method string getClusterId()
 * @method string getType()
 * @method string getTargetPort()
 */
class BindK8sSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbProtocol($value)
    {
        $this->data['SlbProtocol'] = $value;
        $this->options['query']['SlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPort($value)
    {
        $this->data['Port'] = $value;
        $this->options['query']['Port'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetPort($value)
    {
        $this->data['TargetPort'] = $value;
        $this->options['query']['TargetPort'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 */
class ListScalingRecords extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/scaling_records';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getClusterId()
 * @method string getType()
 */
class UnbindK8sSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_slb_binding';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getMemoryLimit()
 * @method string getClusterId()
 * @method string getCpuLimit()
 */
class UpdateK8sApplicationConfig extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_app_configuration';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryLimit($value)
    {
        $this->data['MemoryLimit'] = $value;
        $this->options['query']['MemoryLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuLimit($value)
    {
        $this->data['CpuLimit'] = $value;
        $this->options['query']['CpuLimit'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 * @method string getClusterId()
 */
class ImportK8sCluster extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/import_k8s_cluster';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getNasId()
 * @method string getRepoId()
 * @method string getInternetTargetPort()
 * @method string getWebContainer()
 * @method string getIntranetSlbId()
 * @method string getCommandArgs()
 * @method string getReadiness()
 * @method string getLiveness()
 * @method string getInternetSlbPort()
 * @method string getEnvs()
 * @method string getRequestsMem()
 * @method string getPackageVersion()
 * @method string getStorageType()
 * @method string getLimitMem()
 * @method string getEdasContainerVersion()
 * @method string getAppName()
 * @method string getInternetSlbId()
 * @method string getLogicalRegionId()
 * @method string getPackageUrl()
 * @method string getInternetSlbProtocol()
 * @method string getIntranetSlbPort()
 * @method string getPreStop()
 * @method string getMountDescs()
 * @method string getReplicas()
 * @method string getLimitCpu()
 * @method string getClusterId()
 * @method string getIntranetTargetPort()
 * @method string getLocalVolume()
 * @method string getCommand()
 * @method string getJDK()
 * @method string getIntranetSlbProtocol()
 * @method string getImageUrl()
 * @method string getNamespace()
 * @method string getApplicationDescription()
 * @method string getPackageType()
 * @method string getRequestsCpu()
 * @method string getPostStart()
 */
class InsertK8sApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/create_k8s_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasId($value)
    {
        $this->data['NasId'] = $value;
        $this->options['query']['NasId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRepoId($value)
    {
        $this->data['RepoId'] = $value;
        $this->options['query']['RepoId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetTargetPort($value)
    {
        $this->data['InternetTargetPort'] = $value;
        $this->options['query']['InternetTargetPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetSlbId($value)
    {
        $this->data['IntranetSlbId'] = $value;
        $this->options['query']['IntranetSlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommandArgs($value)
    {
        $this->data['CommandArgs'] = $value;
        $this->options['query']['CommandArgs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetSlbPort($value)
    {
        $this->data['InternetSlbPort'] = $value;
        $this->options['query']['InternetSlbPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestsMem($value)
    {
        $this->data['RequestsMem'] = $value;
        $this->options['query']['RequestsMem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorageType($value)
    {
        $this->data['StorageType'] = $value;
        $this->options['query']['StorageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitMem($value)
    {
        $this->data['LimitMem'] = $value;
        $this->options['query']['LimitMem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdasContainerVersion($value)
    {
        $this->data['EdasContainerVersion'] = $value;
        $this->options['query']['EdasContainerVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetSlbId($value)
    {
        $this->data['InternetSlbId'] = $value;
        $this->options['query']['InternetSlbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternetSlbProtocol($value)
    {
        $this->data['InternetSlbProtocol'] = $value;
        $this->options['query']['InternetSlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetSlbPort($value)
    {
        $this->data['IntranetSlbPort'] = $value;
        $this->options['query']['IntranetSlbPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreStop($value)
    {
        $this->data['PreStop'] = $value;
        $this->options['query']['PreStop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountDescs($value)
    {
        $this->data['MountDescs'] = $value;
        $this->options['query']['MountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimitCpu($value)
    {
        $this->data['LimitCpu'] = $value;
        $this->options['query']['LimitCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetTargetPort($value)
    {
        $this->data['IntranetTargetPort'] = $value;
        $this->options['query']['IntranetTargetPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalVolume($value)
    {
        $this->data['LocalVolume'] = $value;
        $this->options['query']['LocalVolume'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJDK($value)
    {
        $this->data['JDK'] = $value;
        $this->options['query']['JDK'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntranetSlbProtocol($value)
    {
        $this->data['IntranetSlbProtocol'] = $value;
        $this->options['query']['IntranetSlbProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

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
        $this->options['query']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationDescription($value)
    {
        $this->data['ApplicationDescription'] = $value;
        $this->options['query']['ApplicationDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['query']['PackageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestsCpu($value)
    {
        $this->data['RequestsCpu'] = $value;
        $this->options['query']['RequestsCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostStart($value)
    {
        $this->data['PostStart'] = $value;
        $this->options['query']['PostStart'] = $value;

        return $this;
    }
}

/**
 * @method string getNasId()
 * @method string getWebContainer()
 * @method string getReadiness()
 * @method string getBatchWaitTime()
 * @method string getLiveness()
 * @method string getEnvs()
 * @method string getCpuLimit()
 * @method string getPackageVersion()
 * @method string getStorageType()
 * @method string getEdasContainerVersion()
 * @method string getPackageUrl()
 * @method string getMemoryLimit()
 * @method string getImageTag()
 * @method string getMemoryRequest()
 * @method string getImage()
 * @method string getPreStop()
 * @method string getMountDescs()
 * @method string getReplicas()
 * @method string getCpuRequest()
 * @method string getLocalVolume()
 * @method string getCommand()
 * @method string getArgs()
 * @method string getJDK()
 * @method string getAppId()
 * @method string getPostStart()
 */
class DeployK8sApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_apps';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNasId($value)
    {
        $this->data['NasId'] = $value;
        $this->options['query']['NasId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReadiness($value)
    {
        $this->data['Readiness'] = $value;
        $this->options['query']['Readiness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLiveness($value)
    {
        $this->data['Liveness'] = $value;
        $this->options['query']['Liveness'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvs($value)
    {
        $this->data['Envs'] = $value;
        $this->options['query']['Envs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuLimit($value)
    {
        $this->data['CpuLimit'] = $value;
        $this->options['query']['CpuLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStorageType($value)
    {
        $this->data['StorageType'] = $value;
        $this->options['query']['StorageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEdasContainerVersion($value)
    {
        $this->data['EdasContainerVersion'] = $value;
        $this->options['query']['EdasContainerVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageUrl($value)
    {
        $this->data['PackageUrl'] = $value;
        $this->options['query']['PackageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryLimit($value)
    {
        $this->data['MemoryLimit'] = $value;
        $this->options['query']['MemoryLimit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageTag($value)
    {
        $this->data['ImageTag'] = $value;
        $this->options['query']['ImageTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMemoryRequest($value)
    {
        $this->data['MemoryRequest'] = $value;
        $this->options['query']['MemoryRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImage($value)
    {
        $this->data['Image'] = $value;
        $this->options['query']['Image'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreStop($value)
    {
        $this->data['PreStop'] = $value;
        $this->options['query']['PreStop'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountDescs($value)
    {
        $this->data['MountDescs'] = $value;
        $this->options['query']['MountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuRequest($value)
    {
        $this->data['CpuRequest'] = $value;
        $this->options['query']['CpuRequest'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalVolume($value)
    {
        $this->data['LocalVolume'] = $value;
        $this->options['query']['LocalVolume'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommand($value)
    {
        $this->data['Command'] = $value;
        $this->options['query']['Command'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArgs($value)
    {
        $this->data['Args'] = $value;
        $this->options['query']['Args'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJDK($value)
    {
        $this->data['JDK'] = $value;
        $this->options['query']['JDK'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPostStart($value)
    {
        $this->data['PostStart'] = $value;
        $this->options['query']['PostStart'] = $value;

        return $this;
    }
}

/**
 * @method string getReplicas()
 * @method string getAppId()
 */
class ScaleK8sApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_apps';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReplicas($value)
    {
        $this->data['Replicas'] = $value;
        $this->options['query']['Replicas'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class DeleteK8sApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/k8s/acs/k8s_apps';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 */
class ListScalingRules extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/scaling_records';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getInStep()
 * @method string getOutDuration()
 * @method string getOutInstanceNum()
 * @method string getOutRt()
 * @method string getOutLoad()
 * @method string getInInstanceNum()
 * @method string getInLoad()
 * @method string getGroupId()
 * @method string getOutStep()
 * @method string getOutCpu()
 * @method string getOutEnable()
 * @method string getOutCondition()
 * @method string getInDuration()
 * @method string getInCondition()
 * @method string getInEnable()
 * @method string getInRt()
 * @method string getAppId()
 * @method string getInCpu()
 */
class InsertScalingRule extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/scaling_rules';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInStep($value)
    {
        $this->data['InStep'] = $value;
        $this->options['query']['InStep'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutDuration($value)
    {
        $this->data['OutDuration'] = $value;
        $this->options['query']['OutDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutInstanceNum($value)
    {
        $this->data['OutInstanceNum'] = $value;
        $this->options['query']['OutInstanceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutRt($value)
    {
        $this->data['OutRt'] = $value;
        $this->options['query']['OutRt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutLoad($value)
    {
        $this->data['OutLoad'] = $value;
        $this->options['query']['OutLoad'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInInstanceNum($value)
    {
        $this->data['InInstanceNum'] = $value;
        $this->options['query']['InInstanceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInLoad($value)
    {
        $this->data['InLoad'] = $value;
        $this->options['query']['InLoad'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutStep($value)
    {
        $this->data['OutStep'] = $value;
        $this->options['query']['OutStep'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutCpu($value)
    {
        $this->data['OutCpu'] = $value;
        $this->options['query']['OutCpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutEnable($value)
    {
        $this->data['OutEnable'] = $value;
        $this->options['query']['OutEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutCondition($value)
    {
        $this->data['OutCondition'] = $value;
        $this->options['query']['OutCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInDuration($value)
    {
        $this->data['InDuration'] = $value;
        $this->options['query']['InDuration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInCondition($value)
    {
        $this->data['InCondition'] = $value;
        $this->options['query']['InCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInEnable($value)
    {
        $this->data['InEnable'] = $value;
        $this->options['query']['InEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInRt($value)
    {
        $this->data['InRt'] = $value;
        $this->options['query']['InRt'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInCpu($value)
    {
        $this->data['InCpu'] = $value;
        $this->options['query']['InCpu'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 */
class DeleteResourceGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/res_group';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getName()
 * @method string getDescription()
 */
class InsertResourceGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/res_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

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
        $this->options['query']['Description'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class GetSecureToken extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/secure_token';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getInstanceIds()
 * @method string getTargetClusterId()
 */
class TransformClusterMember extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/transform_cluster_member';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['query']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['InstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetClusterId($value)
    {
        $this->data['TargetClusterId'] = $value;
        $this->options['query']['TargetClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class ListConvertableEcu extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/convertable_ecu_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getInstanceIds()
 * @method string getClusterId()
 */
class InsertClusterMember extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_member';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['query']['password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['instanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['clusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getMem()
 * @method string getLogicalRegionId()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getInstanceNum()
 * @method string getCpu()
 * @method string getClusterId()
 */
class ListScaleOutEcu extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/scale_out_ecu_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['Mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceNum($value)
    {
        $this->data['InstanceNum'] = $value;
        $this->options['query']['InstanceNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getAct()
 * @method string getLogicalRegionId()
 */
class ListEcuByRegion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/ecu_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAct($value)
    {
        $this->data['Act'] = $value;
        $this->options['query']['Act'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class QueryMigrateEcuList extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/migrate_ecu_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class QueryMigrateRegionList extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/migrate_region_select';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method string getLogicalRegionId()
 */
class MigrateEcu extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/migrate_ecu';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceIds($value)
    {
        $this->data['InstanceIds'] = $value;
        $this->options['query']['InstanceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getPassword()
 * @method string getInstanceId()
 * @method string getAct()
 * @method string getClusterId()
 */
class MigrateToRegion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/ecus';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['query']['Password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['query']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAct($value)
    {
        $this->data['Act'] = $value;
        $this->options['query']['Act'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getDebugEnable()
 */
class ListUserDefineRegion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/user_region_defs';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugEnable($value)
    {
        $this->data['DebugEnable'] = $value;
        $this->options['query']['DebugEnable'] = $value;

        return $this;
    }
}

class ListAliyunRegion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/region_list';
}

/**
 * @method string getDebugEnable()
 * @method string getRegionTag()
 * @method string getRegionName()
 * @method string getDescription()
 * @method string getId()
 */
class InsertOrUpdateRegion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/user_region_def';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDebugEnable($value)
    {
        $this->data['DebugEnable'] = $value;
        $this->options['query']['DebugEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionTag($value)
    {
        $this->data['RegionTag'] = $value;
        $this->options['query']['RegionTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionName($value)
    {
        $this->data['RegionName'] = $value;
        $this->options['query']['RegionName'] = $value;

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
        $this->options['query']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getRegionTag()
 * @method string getId()
 */
class DeleteUserDefineRegion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/user_region_def';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionTag($value)
    {
        $this->data['RegionTag'] = $value;
        $this->options['query']['RegionTag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withId($value)
    {
        $this->data['Id'] = $value;
        $this->options['query']['Id'] = $value;

        return $this;
    }
}

/**
 * @method string getMetric()
 * @method string getAggregator()
 * @method string getStart()
 * @method string getEnd()
 * @method string getInterval()
 * @method string getTags()
 */
class QueryMonitorInfo extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/monitor/queryMonitorInfo';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetric($value)
    {
        $this->data['Metric'] = $value;
        $this->options['query']['Metric'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregator($value)
    {
        $this->data['Aggregator'] = $value;
        $this->options['query']['Aggregator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStart($value)
    {
        $this->data['Start'] = $value;
        $this->options['query']['Start'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnd($value)
    {
        $this->data['End'] = $value;
        $this->options['query']['End'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInterval($value)
    {
        $this->data['Interval'] = $value;
        $this->options['query']['Interval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTags($value)
    {
        $this->data['Tags'] = $value;
        $this->options['query']['Tags'] = $value;

        return $this;
    }
}

class ListVpc extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/vpc_list';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 * @method string getHcURL()
 */
class UpdateHealthCheckUrl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/modify_hc_url';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHcURL($value)
    {
        $this->data['HcURL'] = $value;
        $this->options['query']['hcURL'] = $value;

        return $this;
    }
}

/**
 * @method string getMinHeapSize()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getOptions()
 * @method string getMaxPermSize()
 * @method string getMaxHeapSize()
 */
class UpdateJvmConfiguration extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_jvm_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinHeapSize($value)
    {
        $this->data['MinHeapSize'] = $value;
        $this->options['query']['MinHeapSize'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptions($value)
    {
        $this->data['Options'] = $value;
        $this->options['query']['Options'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxPermSize($value)
    {
        $this->data['MaxPermSize'] = $value;
        $this->options['query']['MaxPermSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxHeapSize($value)
    {
        $this->data['MaxHeapSize'] = $value;
        $this->options['query']['MaxHeapSize'] = $value;

        return $this;
    }
}

/**
 * @method string getUseBodyEncoding()
 * @method string getMaxThreads()
 * @method string getURIEncoding()
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getHttpPort()
 * @method string getContextPath()
 */
class UpdateContainerConfiguration extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/container_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUseBodyEncoding($value)
    {
        $this->data['UseBodyEncoding'] = $value;
        $this->options['query']['UseBodyEncoding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxThreads($value)
    {
        $this->data['MaxThreads'] = $value;
        $this->options['query']['MaxThreads'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withURIEncoding($value)
    {
        $this->data['URIEncoding'] = $value;
        $this->options['query']['URIEncoding'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHttpPort($value)
    {
        $this->data['HttpPort'] = $value;
        $this->options['query']['HttpPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContextPath($value)
    {
        $this->data['ContextPath'] = $value;
        $this->options['query']['ContextPath'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getAppId()
 * @method string getDesc()
 */
class UpdateApplicationBaseInfo extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/update_app_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['query']['desc'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 */
class GetContainerConfiguration extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/container_config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 */
class GetJvmConfiguration extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_jvm_config';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupName()
 */
class InsertDeployGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/deploy_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class GetApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupName()
 */
class DeleteDeployGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/deploy_group';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class QueryApplicationStatus extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_status';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getType()
 */
class SynchronizeResource extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/pop_sync_resource';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListRecentChangeOrder extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/change_order_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getEcuId()
 */
class DeleteEcu extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/delete_ecu';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcuId($value)
    {
        $this->data['EcuId'] = $value;
        $this->options['query']['EcuId'] = $value;

        return $this;
    }
}

class ListSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/slb_list';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAppId()
 */
class ListHistoryDeployVersion extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/deploy_history_version_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

class ListResourceGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/reg_group_list';
}

/**
 * @method string getName()
 * @method string getTelephone()
 * @method string getEmail()
 */
class UpdateAccountInfo extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/edit_account_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTelephone($value)
    {
        $this->data['Telephone'] = $value;
        $this->options['query']['Telephone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmail($value)
    {
        $this->data['Email'] = $value;
        $this->options['query']['Email'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleId()
 * @method string getActionData()
 */
class UpdateRole extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/edit_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['query']['RoleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionData($value)
    {
        $this->data['ActionData'] = $value;
        $this->options['query']['ActionData'] = $value;

        return $this;
    }
}

/**
 * @method string getSlbId()
 * @method string getAppId()
 * @method string getType()
 */
class UnbindSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/app/unbind_slb_json';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetUserIds()
 */
class UnbindSubAccount extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/unbindSubAccount';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserIds($value)
    {
        $this->data['TargetUserIds'] = $value;
        $this->options['query']['TargetUserIds'] = $value;

        return $this;
    }
}

class ListRole extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/role_list';
}

class ListSubAccount extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/sub_account_list';
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getClusterId()
 */
class ListClusterMembers extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_member_list';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['query']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

class ListAuthority extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authority_list';
}

/**
 * @method string getClusterType()
 * @method string getIaasProvider()
 * @method string getLogicalRegionId()
 * @method string getClusterName()
 * @method string getVpcId()
 * @method string getNetworkMode()
 * @method string getOversoldFactor()
 */
class InsertCluster extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['ClusterType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIaasProvider($value)
    {
        $this->data['IaasProvider'] = $value;
        $this->options['query']['IaasProvider'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterName($value)
    {
        $this->data['ClusterName'] = $value;
        $this->options['query']['ClusterName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkMode($value)
    {
        $this->data['NetworkMode'] = $value;
        $this->options['query']['NetworkMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOversoldFactor($value)
    {
        $this->data['OversoldFactor'] = $value;
        $this->options['query']['OversoldFactor'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleName()
 * @method string getActionData()
 */
class InsertRole extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/create_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleName($value)
    {
        $this->data['RoleName'] = $value;
        $this->options['query']['RoleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withActionData($value)
    {
        $this->data['ActionData'] = $value;
        $this->options['query']['ActionData'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class EnableDegradeControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradecontrol/enable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterMemberId()
 * @method string getClusterId()
 */
class DeleteClusterMember extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_member';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterMemberId($value)
    {
        $this->data['ClusterMemberId'] = $value;
        $this->options['query']['ClusterMemberId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleId()
 */
class DeleteRole extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/delete_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleId($value)
    {
        $this->data['RoleId'] = $value;
        $this->options['query']['RoleId'] = $value;

        return $this;
    }
}

/**
 * @method string getRoleIds()
 * @method string getTargetUserId()
 */
class AuthorizeRole extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authorize_role';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleIds($value)
    {
        $this->data['RoleIds'] = $value;
        $this->options['query']['RoleIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getVServerGroupId()
 * @method string getListenerPort()
 * @method string getSlbId()
 * @method string getAppId()
 * @method string getSlbIp()
 * @method string getType()
 */
class BindSlb extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/app/bind_slb_json';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVServerGroupId($value)
    {
        $this->data['VServerGroupId'] = $value;
        $this->options['query']['VServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerPort($value)
    {
        $this->data['ListenerPort'] = $value;
        $this->options['query']['ListenerPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbId($value)
    {
        $this->data['SlbId'] = $value;
        $this->options['query']['SlbId'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlbIp($value)
    {
        $this->data['SlbIp'] = $value;
        $this->options['query']['SlbIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetUserIds()
 */
class BindSubAccount extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/bindSubAccount';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserIds($value)
    {
        $this->data['TargetUserIds'] = $value;
        $this->options['query']['TargetUserIds'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 */
class DeleteCluster extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIds()
 * @method string getTargetUserId()
 */
class AuthorizeApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authorize_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppIds($value)
    {
        $this->data['AppIds'] = $value;
        $this->options['query']['AppIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceGroupIds()
 * @method string getTargetUserId()
 */
class AuthorizeResourceGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/account/authorize_res_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupIds($value)
    {
        $this->data['ResourceGroupIds'] = $value;
        $this->options['query']['ResourceGroupIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUserId($value)
    {
        $this->data['TargetUserId'] = $value;
        $this->options['query']['TargetUserId'] = $value;

        return $this;
    }
}

/**
 * @method string getChangeOrderId()
 */
class GetChangeOrderInfo extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/change_order_info';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChangeOrderId($value)
    {
        $this->data['ChangeOrderId'] = $value;
        $this->options['query']['ChangeOrderId'] = $value;

        return $this;
    }
}

/**
 * @method string getLogicalRegionId()
 */
class ListCluster extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/cluster_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class DeleteApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_delete_app';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getGroupId()
 * @method string getBatchWaitTime()
 * @method string getBatch()
 * @method string getHistoryVersion()
 */
class RollbackApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_rollback';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatch($value)
    {
        $this->data['Batch'] = $value;
        $this->options['query']['Batch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHistoryVersion($value)
    {
        $this->data['HistoryVersion'] = $value;
        $this->options['query']['HistoryVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getForceStatus()
 * @method string getAppId()
 * @method string getEccInfo()
 */
class ScaleInApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_scale_in';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceStatus($value)
    {
        $this->data['ForceStatus'] = $value;
        $this->options['query']['ForceStatus'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getEcuInfo()
 * @method string getDeployGroup()
 * @method string getAppId()
 */
class ScaleOutApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_scale_out';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcuInfo($value)
    {
        $this->data['EcuInfo'] = $value;
        $this->options['query']['EcuInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployGroup($value)
    {
        $this->data['DeployGroup'] = $value;
        $this->options['query']['DeployGroup'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class StartApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_start';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class StopApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_stop';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getEccInfo()
 */
class ResetApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_reset';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }
}

/**
 * @method string getWebContainer()
 * @method string getEcuInfo()
 * @method string getBuildPackId()
 * @method string getHealthCheckURL()
 * @method string getReservedPortStr()
 * @method string getDescription()
 * @method string getCpu()
 * @method string getClusterId()
 * @method string getApplicationName()
 * @method string getJdk()
 * @method string getMem()
 * @method string getLogicalRegionId()
 * @method string getPackageType()
 */
class InsertApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_create_app';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWebContainer($value)
    {
        $this->data['WebContainer'] = $value;
        $this->options['query']['WebContainer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEcuInfo($value)
    {
        $this->data['EcuInfo'] = $value;
        $this->options['query']['EcuInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckURL($value)
    {
        $this->data['HealthCheckURL'] = $value;
        $this->options['query']['HealthCheckURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReservedPortStr($value)
    {
        $this->data['ReservedPortStr'] = $value;
        $this->options['query']['ReservedPortStr'] = $value;

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
        $this->options['query']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['query']['ClusterId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApplicationName($value)
    {
        $this->data['ApplicationName'] = $value;
        $this->options['query']['ApplicationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJdk($value)
    {
        $this->data['Jdk'] = $value;
        $this->options['query']['Jdk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMem($value)
    {
        $this->data['Mem'] = $value;
        $this->options['query']['Mem'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageType($value)
    {
        $this->data['PackageType'] = $value;
        $this->options['query']['PackageType'] = $value;

        return $this;
    }
}

/**
 * @method string getForceStatus()
 * @method string getAppId()
 * @method string getEccInfo()
 * @method string getGroupName()
 */
class ChangeApplicationGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_change_group';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForceStatus($value)
    {
        $this->data['ForceStatus'] = $value;
        $this->options['query']['ForceStatus'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEccInfo($value)
    {
        $this->data['EccInfo'] = $value;
        $this->options['query']['EccInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getBuildPackId()
 * @method string getComponentIds()
 * @method string getAppId()
 * @method string getImageUrl()
 * @method string getGroupId()
 * @method string getBatchWaitTime()
 * @method string getBatch()
 * @method string getAppEnv()
 * @method string getWarUrl()
 * @method string getPackageVersion()
 * @method string getDesc()
 * @method string getDeployType()
 */
class DeployApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_deploy';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentIds($value)
    {
        $this->data['ComponentIds'] = $value;
        $this->options['query']['ComponentIds'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['query']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatchWaitTime($value)
    {
        $this->data['BatchWaitTime'] = $value;
        $this->options['query']['BatchWaitTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBatch($value)
    {
        $this->data['Batch'] = $value;
        $this->options['query']['Batch'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppEnv($value)
    {
        $this->data['AppEnv'] = $value;
        $this->options['query']['AppEnv'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWarUrl($value)
    {
        $this->data['WarUrl'] = $value;
        $this->options['query']['WarUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPackageVersion($value)
    {
        $this->data['PackageVersion'] = $value;
        $this->options['query']['PackageVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDesc($value)
    {
        $this->data['Desc'] = $value;
        $this->options['query']['Desc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeployType($value)
    {
        $this->data['DeployType'] = $value;
        $this->options['query']['DeployType'] = $value;

        return $this;
    }
}

/**
 * @method string getBuildPackId()
 * @method string getAppId()
 */
class UpdateContainer extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/changeorder/co_update_container';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBuildPackId($value)
    {
        $this->data['BuildPackId'] = $value;
        $this->options['query']['BuildPackId'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

class ListApplicationEcu extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/resource/ecu_list';
}

class ListBuildPack extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/build_pack_list';
}

/**
 * @method string getAppId()
 */
class ListDeployGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/deploy_group_list';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class QueryConfigCenter extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenter';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getDuration()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getRtThreshold()
 * @method string getServiceName()
 * @method string getRuleId()
 * @method string getMethodName()
 */
class UpdateDegradeControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradeControl';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['query']['Duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRtThreshold($value)
    {
        $this->data['RtThreshold'] = $value;
        $this->options['query']['RtThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getConsumerAppId()
 * @method string getGranularity()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getServiceName()
 * @method string getThreshold()
 * @method string getRuleId()
 * @method string getStrategy()
 * @method string getMethodName()
 */
class UpdateFlowControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowControl';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppId($value)
    {
        $this->data['ConsumerAppId'] = $value;
        $this->options['query']['ConsumerAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGranularity($value)
    {
        $this->data['Granularity'] = $value;
        $this->options['query']['Granularity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['query']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategy($value)
    {
        $this->data['Strategy'] = $value;
        $this->options['query']['Strategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListFlowControls extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/flowControls';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListPublishedServices extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/listPublishedServices';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

class ListServiceGroups extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/serviceGroups';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConsumerAppId()
 * @method string getGranularity()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getServiceName()
 * @method string getThreshold()
 * @method string getStrategy()
 * @method string getMethodName()
 */
class InsertFlowControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowControl';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerAppId($value)
    {
        $this->data['ConsumerAppId'] = $value;
        $this->options['query']['ConsumerAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGranularity($value)
    {
        $this->data['Granularity'] = $value;
        $this->options['query']['Granularity'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withThreshold($value)
    {
        $this->data['Threshold'] = $value;
        $this->options['query']['Threshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrategy($value)
    {
        $this->data['Strategy'] = $value;
        $this->options['query']['Strategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupName()
 */
class InsertServiceGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/serviceGroups';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupName($value)
    {
        $this->data['GroupName'] = $value;
        $this->options['query']['GroupName'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getLogicalRegionId()
 * @method string getDataIdPattern()
 * @method string getGroup()
 */
class ListConfigCenters extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenters';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataIdPattern($value)
    {
        $this->data['DataIdPattern'] = $value;
        $this->options['query']['DataIdPattern'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListConsumedServices extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/listConsumedServices';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListDegradeControls extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/degradeControls';

    /** @var string */
    public $method = 'GET';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DisableDegradeControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradecontrol/disable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DisableFlowControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowcontrol/disable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class EnableFlowControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowcontrol/enable';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getData()
 * @method string getAppName()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class InsertConfigCenter extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenter';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['query']['Data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['query']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getDuration()
 * @method string getRuleType()
 * @method string getAppId()
 * @method string getUrlVar()
 * @method string getRtThreshold()
 * @method string getServiceName()
 * @method string getMethodName()
 */
class InsertDegradeControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradeControl';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDuration($value)
    {
        $this->data['Duration'] = $value;
        $this->options['query']['Duration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleType($value)
    {
        $this->data['RuleType'] = $value;
        $this->options['query']['RuleType'] = $value;

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
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrlVar($value)
    {
        $this->data['UrlVar'] = $value;
        $this->options['query']['UrlVar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRtThreshold($value)
    {
        $this->data['RtThreshold'] = $value;
        $this->options['query']['RtThreshold'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceName($value)
    {
        $this->data['ServiceName'] = $value;
        $this->options['query']['ServiceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMethodName($value)
    {
        $this->data['MethodName'] = $value;
        $this->options['query']['MethodName'] = $value;

        return $this;
    }
}

/**
 * @method string getDataId()
 * @method string getLogicalRegionId()
 * @method string getGroup()
 */
class DeleteConfigCenter extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/configCenter';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataId($value)
    {
        $this->data['DataId'] = $value;
        $this->options['query']['DataId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLogicalRegionId($value)
    {
        $this->data['LogicalRegionId'] = $value;
        $this->options['query']['LogicalRegionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['query']['Group'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DeleteDegradeControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/degradeControl';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getRuleId()
 */
class DeleteFlowControl extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/flowControl';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleId($value)
    {
        $this->data['RuleId'] = $value;
        $this->options['query']['RuleId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class DeleteServiceGroup extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/service/serviceGroups';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['query']['GroupId'] = $value;

        return $this;
    }
}

class ListApplication extends V20170801Roa
{
    /** @var string */
    public $pathPattern = '/pop/v5/app/app_list';
}
