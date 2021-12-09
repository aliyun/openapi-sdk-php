<?php

namespace AlibabaCloud\Sae\V20190506;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AbortAndRollbackChangeOrder abortAndRollbackChangeOrder(array $options = [])
 * @method AbortChangeOrder abortChangeOrder(array $options = [])
 * @method BatchStartApplications batchStartApplications(array $options = [])
 * @method BatchStopApplications batchStopApplications(array $options = [])
 * @method BindSlb bindSlb(array $options = [])
 * @method ConfirmPipelineBatch confirmPipelineBatch(array $options = [])
 * @method CreateApplication createApplication(array $options = [])
 * @method CreateApplicationScalingRule createApplicationScalingRule(array $options = [])
 * @method CreateConfigMap createConfigMap(array $options = [])
 * @method CreateGreyTagRoute createGreyTagRoute(array $options = [])
 * @method CreateIngress createIngress(array $options = [])
 * @method CreateNamespace createNamespace(array $options = [])
 * @method DeleteApplication deleteApplication(array $options = [])
 * @method DeleteApplicationScalingRule deleteApplicationScalingRule(array $options = [])
 * @method DeleteConfigMap deleteConfigMap(array $options = [])
 * @method DeleteGreyTagRoute deleteGreyTagRoute(array $options = [])
 * @method DeleteIngress deleteIngress(array $options = [])
 * @method DeleteNamespace deleteNamespace(array $options = [])
 * @method DeployApplication deployApplication(array $options = [])
 * @method DescribeApplicationConfig describeApplicationConfig(array $options = [])
 * @method DescribeApplicationGroups describeApplicationGroups(array $options = [])
 * @method DescribeApplicationImage describeApplicationImage(array $options = [])
 * @method DescribeApplicationInstances describeApplicationInstances(array $options = [])
 * @method DescribeApplicationScalingRules describeApplicationScalingRules(array $options = [])
 * @method DescribeApplicationSlbs describeApplicationSlbs(array $options = [])
 * @method DescribeApplicationStatus describeApplicationStatus(array $options = [])
 * @method DescribeAppServiceDetail describeAppServiceDetail(array $options = [])
 * @method DescribeChangeOrder describeChangeOrder(array $options = [])
 * @method DescribeComponents describeComponents(array $options = [])
 * @method DescribeConfigMap describeConfigMap(array $options = [])
 * @method DescribeEdasContainers describeEdasContainers(array $options = [])
 * @method DescribeGreyTagRoute describeGreyTagRoute(array $options = [])
 * @method DescribeIngress describeIngress(array $options = [])
 * @method DescribeInstanceLog describeInstanceLog(array $options = [])
 * @method DescribeInstanceSpecifications describeInstanceSpecifications(array $options = [])
 * @method DescribeNamespace describeNamespace(array $options = [])
 * @method DescribeNamespaceList describeNamespaceList(array $options = [])
 * @method DescribeNamespaceResources describeNamespaceResources(array $options = [])
 * @method DescribeNamespaces describeNamespaces(array $options = [])
 * @method DescribePipeline describePipeline(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DisableApplicationScalingRule disableApplicationScalingRule(array $options = [])
 * @method DownloadFiles downloadFiles(array $options = [])
 * @method EnableApplicationScalingRule enableApplicationScalingRule(array $options = [])
 * @method ListAppEvents listAppEvents(array $options = [])
 * @method ListApplications listApplications(array $options = [])
 * @method ListAppServicesPage listAppServicesPage(array $options = [])
 * @method ListAppVersions listAppVersions(array $options = [])
 * @method ListChangeOrders listChangeOrders(array $options = [])
 * @method ListConsumedServices listConsumedServices(array $options = [])
 * @method ListGreyTagRoute listGreyTagRoute(array $options = [])
 * @method ListIngresses listIngresses(array $options = [])
 * @method ListLogConfigs listLogConfigs(array $options = [])
 * @method ListNamespaceChangeOrders listNamespaceChangeOrders(array $options = [])
 * @method ListNamespacedConfigMaps listNamespacedConfigMaps(array $options = [])
 * @method ListPublishedServices listPublishedServices(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method OpenSaeService openSaeService(array $options = [])
 * @method QueryResourceStatics queryResourceStatics(array $options = [])
 * @method ReduceApplicationCapacityByInstanceIds reduceApplicationCapacityByInstanceIds(array $options = [])
 * @method RescaleApplication rescaleApplication(array $options = [])
 * @method RescaleApplicationVertically rescaleApplicationVertically(array $options = [])
 * @method RestartApplication restartApplication(array $options = [])
 * @method RestartInstances restartInstances(array $options = [])
 * @method RollbackApplication rollbackApplication(array $options = [])
 * @method StartApplication startApplication(array $options = [])
 * @method StopApplication stopApplication(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UnbindSlb unbindSlb(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateApplicationScalingRule updateApplicationScalingRule(array $options = [])
 * @method UpdateAppSecurityGroup updateAppSecurityGroup(array $options = [])
 * @method UpdateConfigMap updateConfigMap(array $options = [])
 * @method UpdateGreyTagRoute updateGreyTagRoute(array $options = [])
 * @method UpdateIngress updateIngress(array $options = [])
 * @method UpdateNamespace updateNamespace(array $options = [])
 * @method UpdateNamespaceVpc updateNamespaceVpc(array $options = [])
 * @method UploadFiles uploadFiles(array $options = [])
 */
class SaeApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'sae';

    /** @var string */
    public $version = '2019-05-06';

    /** @var string */
    public $serviceCode = 'serverless';
}

/**
 * @method string getChangeOrderId()
 */
class AbortAndRollbackChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/AbortAndRollbackChangeOrder';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getChangeOrderId()
 */
class AbortChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/AbortChangeOrder';

    /** @var string */
    public $method = 'PUT';

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
 * @method string getAppIds()
 * @method string getNamespaceId()
 */
class BatchStartApplications extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/batchStartApplications';

    /** @var string */
    public $method = 'PUT';

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
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppIds()
 * @method string getNamespaceId()
 */
class BatchStopApplications extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/batchStopApplications';

    /** @var string */
    public $method = 'PUT';

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
    public function withNamespaceId($value)
    {
        $this->data['NamespaceId'] = $value;
        $this->options['query']['NamespaceId'] = $value;

        return $this;
    }
}

/**
 * @method string getIntranet()
 * @method string getIntranetSlbId()
 * @method string getInternetSlbId()
 * @method string getAppId()
 * @method string getInternet()
 */
class BindSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/slb';

    /** @var string */
    public $method = 'POST';

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
 * @method string getConfirm()
 * @method string getPipelineId()
 */
class ConfirmPipelineBatch extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/ConfirmPipelineBatch';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfirm($value)
    {
        $this->data['Confirm'] = $value;
        $this->options['query']['Confirm'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['query']['PipelineId'] = $value;

        return $this;
    }
}

/**
 * @method string getNasId()
 * @method string getJarStartArgs()
 * @method string getOssAkSecret()
 * @method string getMountHost()
 * @method string getAutoConfig()
 * @method string getEnvs()
 * @method string getPhpPECLExtensions()
 * @method string getPhpArmsConfigLocation()
 * @method string getCustomHostAlias()
 * @method string getDeploy()
 * @method string getJarStartOptions()
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getConfigMapMountDesc()
 * @method string getOssMountDescs()
 * @method string getPreStop()
 * @method string getCpu()
 * @method string getVSwitchId()
 * @method string getPackageType()
 * @method string getPostStart()
 * @method string getPhpExtensions()
 * @method string getAssociateEip()
 * @method string getWebContainer()
 * @method string getMemory()
 * @method string getSlsConfigs()
 * @method string getCommandArgs()
 * @method string getAcrAssumeRoleArn()
 * @method string getReadiness()
 * @method string getTimezone()
 * @method string getOssAkId()
 * @method string getLiveness()
 * @method string getSecurityGroupId()
 * @method string getPackageVersion()
 * @method string getTomcatConfig()
 * @method string getWarStartOptions()
 * @method string getEdasContainerVersion()
 * @method string getPackageUrl()
 * @method string getTerminationGracePeriodSeconds()
 * @method string getPhpConfig()
 * @method string getReplicas()
 * @method string getCommand()
 * @method string getMountDesc()
 * @method string getJdk()
 * @method string getAppDescription()
 * @method string getAcrInstanceId()
 * @method string getVpcId()
 * @method string getImageUrl()
 * @method string getPhp()
 * @method string getPhpConfigLocation()
 */
class CreateApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/createApplication';

    /** @var string */
    public $method = 'POST';

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
    public function withOssAkSecret($value)
    {
        $this->data['OssAkSecret'] = $value;
        $this->options['form_params']['OssAkSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountHost($value)
    {
        $this->data['MountHost'] = $value;
        $this->options['query']['MountHost'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoConfig($value)
    {
        $this->data['AutoConfig'] = $value;
        $this->options['query']['AutoConfig'] = $value;

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
    public function withPhpPECLExtensions($value)
    {
        $this->data['PhpPECLExtensions'] = $value;
        $this->options['form_params']['PhpPECLExtensions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpArmsConfigLocation($value)
    {
        $this->data['PhpArmsConfigLocation'] = $value;
        $this->options['query']['PhpArmsConfigLocation'] = $value;

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
    public function withConfigMapMountDesc($value)
    {
        $this->data['ConfigMapMountDesc'] = $value;
        $this->options['form_params']['ConfigMapMountDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssMountDescs($value)
    {
        $this->data['OssMountDescs'] = $value;
        $this->options['form_params']['OssMountDescs'] = $value;

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
    public function withPostStart($value)
    {
        $this->data['PostStart'] = $value;
        $this->options['query']['PostStart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpExtensions($value)
    {
        $this->data['PhpExtensions'] = $value;
        $this->options['form_params']['PhpExtensions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssociateEip($value)
    {
        $this->data['AssociateEip'] = $value;
        $this->options['form_params']['AssociateEip'] = $value;

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
    public function withSlsConfigs($value)
    {
        $this->data['SlsConfigs'] = $value;
        $this->options['query']['SlsConfigs'] = $value;

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
    public function withAcrAssumeRoleArn($value)
    {
        $this->data['AcrAssumeRoleArn'] = $value;
        $this->options['query']['AcrAssumeRoleArn'] = $value;

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
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['query']['Timezone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssAkId($value)
    {
        $this->data['OssAkId'] = $value;
        $this->options['form_params']['OssAkId'] = $value;

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
    public function withSecurityGroupId($value)
    {
        $this->data['SecurityGroupId'] = $value;
        $this->options['query']['SecurityGroupId'] = $value;

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
    public function withTomcatConfig($value)
    {
        $this->data['TomcatConfig'] = $value;
        $this->options['query']['TomcatConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWarStartOptions($value)
    {
        $this->data['WarStartOptions'] = $value;
        $this->options['query']['WarStartOptions'] = $value;

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
    public function withTerminationGracePeriodSeconds($value)
    {
        $this->data['TerminationGracePeriodSeconds'] = $value;
        $this->options['query']['TerminationGracePeriodSeconds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpConfig($value)
    {
        $this->data['PhpConfig'] = $value;
        $this->options['form_params']['PhpConfig'] = $value;

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
    public function withMountDesc($value)
    {
        $this->data['MountDesc'] = $value;
        $this->options['query']['MountDesc'] = $value;

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
    public function withAcrInstanceId($value)
    {
        $this->data['AcrInstanceId'] = $value;
        $this->options['form_params']['AcrInstanceId'] = $value;

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
    public function withPhp($value)
    {
        $this->data['Php'] = $value;
        $this->options['form_params']['Php'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpConfigLocation($value)
    {
        $this->data['PhpConfigLocation'] = $value;
        $this->options['query']['PhpConfigLocation'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getMinReadyInstances()
 * @method string getScalingRuleEnable()
 * @method string getScalingRuleTimer()
 * @method string getScalingRuleMetric()
 * @method string getAppId()
 * @method string getScalingRuleType()
 */
class CreateApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/scale/applicationScalingRule';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

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
    public function withScalingRuleEnable($value)
    {
        $this->data['ScalingRuleEnable'] = $value;
        $this->options['query']['ScalingRuleEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleTimer($value)
    {
        $this->data['ScalingRuleTimer'] = $value;
        $this->options['query']['ScalingRuleTimer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleMetric($value)
    {
        $this->data['ScalingRuleMetric'] = $value;
        $this->options['query']['ScalingRuleMetric'] = $value;

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
    public function withScalingRuleType($value)
    {
        $this->data['ScalingRuleType'] = $value;
        $this->options['query']['ScalingRuleType'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getNamespaceId()
 * @method string getName()
 * @method string getDescription()
 */
class CreateConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/configmap/configMap';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

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
 * @method string getAppId()
 * @method string getName()
 * @method string getDescription()
 * @method string getDubboRules()
 * @method string getScRules()
 */
class CreateGreyTagRoute extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/tagroute/greyTagRoute';

    /** @var string */
    public $method = 'POST';

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDubboRules($value)
    {
        $this->data['DubboRules'] = $value;
        $this->options['query']['DubboRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScRules($value)
    {
        $this->data['ScRules'] = $value;
        $this->options['query']['ScRules'] = $value;

        return $this;
    }
}

/**
 * @method string getListenerPort()
 * @method string getSlbId()
 * @method string getNamespaceId()
 * @method string getDescription()
 * @method string getRules()
 * @method string getCertId()
 * @method string getDefaultRule()
 */
class CreateIngress extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/ingress/Ingress';

    /** @var string */
    public $method = 'POST';

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
    public function withRules($value)
    {
        $this->data['Rules'] = $value;
        $this->options['form_params']['Rules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertId($value)
    {
        $this->data['CertId'] = $value;
        $this->options['query']['CertId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultRule($value)
    {
        $this->data['DefaultRule'] = $value;
        $this->options['query']['DefaultRule'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceName()
 * @method string getNamespaceDescription()
 * @method string getNamespaceId()
 */
class CreateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/namespace';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceName($value)
    {
        $this->data['NamespaceName'] = $value;
        $this->options['query']['NamespaceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceDescription($value)
    {
        $this->data['NamespaceDescription'] = $value;
        $this->options['query']['NamespaceDescription'] = $value;

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
}

/**
 * @method string getAppId()
 */
class DeleteApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/deleteApplication';

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
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class DeleteApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/scale/applicationScalingRule';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

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
 * @method string getConfigMapId()
 */
class DeleteConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/configmap/configMap';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigMapId($value)
    {
        $this->data['ConfigMapId'] = $value;
        $this->options['query']['ConfigMapId'] = $value;

        return $this;
    }
}

/**
 * @method string getGreyTagRouteId()
 */
class DeleteGreyTagRoute extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/tagroute/greyTagRoute';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGreyTagRouteId($value)
    {
        $this->data['GreyTagRouteId'] = $value;
        $this->options['query']['GreyTagRouteId'] = $value;

        return $this;
    }
}

/**
 * @method string getIngressId()
 */
class DeleteIngress extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/ingress/Ingress';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressId($value)
    {
        $this->data['IngressId'] = $value;
        $this->options['query']['IngressId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class DeleteNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/namespace';

    /** @var string */
    public $method = 'DELETE';

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
 * @method string getNasId()
 * @method string getWebContainer()
 * @method string getJarStartArgs()
 * @method string getEnableAhas()
 * @method string getSlsConfigs()
 * @method string getOssAkSecret()
 * @method string getCommandArgs()
 * @method string getAcrAssumeRoleArn()
 * @method string getReadiness()
 * @method string getTimezone()
 * @method string getMountHost()
 * @method string getBatchWaitTime()
 * @method string getOssAkId()
 * @method string getLiveness()
 * @method string getEnvs()
 * @method string getPhpPECLExtensions()
 * @method string getPhpArmsConfigLocation()
 * @method string getPackageVersion()
 * @method string getTomcatConfig()
 * @method string getCustomHostAlias()
 * @method string getWarStartOptions()
 * @method string getJarStartOptions()
 * @method string getEdasContainerVersion()
 * @method string getPackageUrl()
 * @method string getTerminationGracePeriodSeconds()
 * @method string getConfigMapMountDesc()
 * @method string getOssMountDescs()
 * @method string getPhpConfig()
 * @method string getPreStop()
 * @method string getEnableGreyTagRoute()
 * @method string getCommand()
 * @method string getUpdateStrategy()
 * @method string getMountDesc()
 * @method string getJdk()
 * @method string getMinReadyInstances()
 * @method string getChangeOrderDesc()
 * @method string getAcrInstanceId()
 * @method string getAppId()
 * @method string getImageUrl()
 * @method string getPhp()
 * @method string getAutoEnableApplicationScalingRule()
 * @method string getPhpConfigLocation()
 * @method string getPostStart()
 * @method string getPhpExtensions()
 * @method string getAssociateEip()
 */
class DeployApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/deployApplication';

    /** @var string */
    public $method = 'POST';

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
    public function withEnableAhas($value)
    {
        $this->data['EnableAhas'] = $value;
        $this->options['query']['EnableAhas'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSlsConfigs($value)
    {
        $this->data['SlsConfigs'] = $value;
        $this->options['query']['SlsConfigs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssAkSecret($value)
    {
        $this->data['OssAkSecret'] = $value;
        $this->options['form_params']['OssAkSecret'] = $value;

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
    public function withAcrAssumeRoleArn($value)
    {
        $this->data['AcrAssumeRoleArn'] = $value;
        $this->options['query']['AcrAssumeRoleArn'] = $value;

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
    public function withTimezone($value)
    {
        $this->data['Timezone'] = $value;
        $this->options['query']['Timezone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountHost($value)
    {
        $this->data['MountHost'] = $value;
        $this->options['query']['MountHost'] = $value;

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
    public function withOssAkId($value)
    {
        $this->data['OssAkId'] = $value;
        $this->options['form_params']['OssAkId'] = $value;

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
    public function withPhpPECLExtensions($value)
    {
        $this->data['PhpPECLExtensions'] = $value;
        $this->options['form_params']['PhpPECLExtensions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpArmsConfigLocation($value)
    {
        $this->data['PhpArmsConfigLocation'] = $value;
        $this->options['query']['PhpArmsConfigLocation'] = $value;

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
    public function withTomcatConfig($value)
    {
        $this->data['TomcatConfig'] = $value;
        $this->options['query']['TomcatConfig'] = $value;

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
    public function withWarStartOptions($value)
    {
        $this->data['WarStartOptions'] = $value;
        $this->options['query']['WarStartOptions'] = $value;

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
    public function withTerminationGracePeriodSeconds($value)
    {
        $this->data['TerminationGracePeriodSeconds'] = $value;
        $this->options['query']['TerminationGracePeriodSeconds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigMapMountDesc($value)
    {
        $this->data['ConfigMapMountDesc'] = $value;
        $this->options['form_params']['ConfigMapMountDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOssMountDescs($value)
    {
        $this->data['OssMountDescs'] = $value;
        $this->options['form_params']['OssMountDescs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpConfig($value)
    {
        $this->data['PhpConfig'] = $value;
        $this->options['form_params']['PhpConfig'] = $value;

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
    public function withEnableGreyTagRoute($value)
    {
        $this->data['EnableGreyTagRoute'] = $value;
        $this->options['query']['EnableGreyTagRoute'] = $value;

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
    public function withUpdateStrategy($value)
    {
        $this->data['UpdateStrategy'] = $value;
        $this->options['query']['UpdateStrategy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMountDesc($value)
    {
        $this->data['MountDesc'] = $value;
        $this->options['query']['MountDesc'] = $value;

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
    public function withChangeOrderDesc($value)
    {
        $this->data['ChangeOrderDesc'] = $value;
        $this->options['query']['ChangeOrderDesc'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAcrInstanceId($value)
    {
        $this->data['AcrInstanceId'] = $value;
        $this->options['form_params']['AcrInstanceId'] = $value;

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
    public function withPhp($value)
    {
        $this->data['Php'] = $value;
        $this->options['form_params']['Php'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoEnableApplicationScalingRule($value)
    {
        $this->data['AutoEnableApplicationScalingRule'] = $value;
        $this->options['query']['AutoEnableApplicationScalingRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpConfigLocation($value)
    {
        $this->data['PhpConfigLocation'] = $value;
        $this->options['query']['PhpConfigLocation'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPhpExtensions($value)
    {
        $this->data['PhpExtensions'] = $value;
        $this->options['form_params']['PhpExtensions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAssociateEip($value)
    {
        $this->data['AssociateEip'] = $value;
        $this->options['form_params']['AssociateEip'] = $value;

        return $this;
    }
}

/**
 * @method string getVersionId()
 * @method string getAppId()
 */
class DescribeApplicationConfig extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/describeApplicationConfig';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersionId($value)
    {
        $this->data['VersionId'] = $value;
        $this->options['query']['VersionId'] = $value;

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
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class DescribeApplicationGroups extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/describeApplicationGroups';

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
}

/**
 * @method string getAppId()
 * @method string getImageUrl()
 */
class DescribeApplicationImage extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/container/describeApplicationImage';

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
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getReverse()
 */
class DescribeApplicationInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/describeApplicationInstances';

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
    public function withReverse($value)
    {
        $this->data['Reverse'] = $value;
        $this->options['query']['Reverse'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class DescribeApplicationScalingRules extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/scale/applicationScalingRules';

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
class DescribeApplicationSlbs extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/slb';

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
class DescribeApplicationStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/describeApplicationStatus';

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
 * @method string getServiceType()
 * @method string getAppId()
 * @method string getServiceVersion()
 * @method string getServiceName()
 * @method string getServiceGroup()
 */
class DescribeAppServiceDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/service/describeAppServiceDetail';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['ServiceType'] = $value;

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
    public function withServiceVersion($value)
    {
        $this->data['ServiceVersion'] = $value;
        $this->options['query']['ServiceVersion'] = $value;

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
    public function withServiceGroup($value)
    {
        $this->data['ServiceGroup'] = $value;
        $this->options['query']['ServiceGroup'] = $value;

        return $this;
    }
}

/**
 * @method string getChangeOrderId()
 */
class DescribeChangeOrder extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/DescribeChangeOrder';

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
 * @method string getAppId()
 * @method string getType()
 */
class DescribeComponents extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/resource/components';

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
 * @method string getConfigMapId()
 */
class DescribeConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/configmap/configMap';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigMapId($value)
    {
        $this->data['ConfigMapId'] = $value;
        $this->options['query']['ConfigMapId'] = $value;

        return $this;
    }
}

class DescribeEdasContainers extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/resource/edasContainers';
}

/**
 * @method string getGreyTagRouteId()
 */
class DescribeGreyTagRoute extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/tagroute/greyTagRoute';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGreyTagRouteId($value)
    {
        $this->data['GreyTagRouteId'] = $value;
        $this->options['query']['GreyTagRouteId'] = $value;

        return $this;
    }
}

/**
 * @method string getIngressId()
 */
class DescribeIngress extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/ingress/Ingress';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressId($value)
    {
        $this->data['IngressId'] = $value;
        $this->options['query']['IngressId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 */
class DescribeInstanceLog extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/instance/describeInstanceLog';

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
}

class DescribeInstanceSpecifications extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/quota/instanceSpecifications';
}

/**
 * @method string getNamespaceId()
 */
class DescribeNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/namespace';

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
 * @method string getHybridCloudExclude()
 * @method string getContainCustom()
 */
class DescribeNamespaceList extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/namespace/describeNamespaceList';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHybridCloudExclude($value)
    {
        $this->data['HybridCloudExclude'] = $value;
        $this->options['query']['HybridCloudExclude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContainCustom($value)
    {
        $this->data['ContainCustom'] = $value;
        $this->options['query']['ContainCustom'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class DescribeNamespaceResources extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/namespace/describeNamespaceResources';

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
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class DescribeNamespaces extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/namespaces';

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
}

/**
 * @method string getPipelineId()
 */
class DescribePipeline extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/DescribePipeline';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPipelineId($value)
    {
        $this->data['PipelineId'] = $value;
        $this->options['query']['PipelineId'] = $value;

        return $this;
    }
}

class DescribeRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/regionConfig';
}

/**
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class DisableApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/scale/disableApplicationScalingRule';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

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
 * @method string getInstanceId()
 * @method string getLocalpath()
 * @method string getAppId()
 */
class DownloadFiles extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/downloadFiles';

    /** @var string */
    public $method = 'POST';

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
    public function withLocalpath($value)
    {
        $this->data['Localpath'] = $value;
        $this->options['query']['Localpath'] = $value;

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
 * @method string getScalingRuleName()
 * @method string getAppId()
 */
class EnableApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/scale/enableApplicationScalingRule';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

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
 * @method string getReason()
 * @method string getObjectKind()
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getObjectName()
 * @method string getNamespace()
 * @method string getCurrentPage()
 * @method string getEventType()
 */
class ListAppEvents extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/listAppEvents';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['query']['Reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectKind($value)
    {
        $this->data['ObjectKind'] = $value;
        $this->options['query']['ObjectKind'] = $value;

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
    public function withObjectName($value)
    {
        $this->data['ObjectName'] = $value;
        $this->options['query']['ObjectName'] = $value;

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
    public function withEventType($value)
    {
        $this->data['EventType'] = $value;
        $this->options['query']['EventType'] = $value;

        return $this;
    }
}

/**
 * @method string getAppName()
 * @method string getNamespaceId()
 * @method string getPageSize()
 * @method string getOrderBy()
 * @method string getCurrentPage()
 * @method string getFieldValue()
 * @method string getReverse()
 * @method string getFieldType()
 * @method string getTags()
 */
class ListApplications extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/listApplications';

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
    public function withOrderBy($value)
    {
        $this->data['OrderBy'] = $value;
        $this->options['query']['OrderBy'] = $value;

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
    public function withFieldValue($value)
    {
        $this->data['FieldValue'] = $value;
        $this->options['query']['FieldValue'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReverse($value)
    {
        $this->data['Reverse'] = $value;
        $this->options['query']['Reverse'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFieldType($value)
    {
        $this->data['FieldType'] = $value;
        $this->options['query']['FieldType'] = $value;

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

/**
 * @method string getServiceType()
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class ListAppServicesPage extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/service/listAppServicesPage';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceType($value)
    {
        $this->data['ServiceType'] = $value;
        $this->options['query']['ServiceType'] = $value;

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListAppVersions extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/listAppVersions';

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
 * @method string getCoType()
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getCoStatus()
 * @method string getKey()
 */
class ListChangeOrders extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/ListChangeOrders';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCoType($value)
    {
        $this->data['CoType'] = $value;
        $this->options['query']['CoType'] = $value;

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
    public function withCoStatus($value)
    {
        $this->data['CoStatus'] = $value;
        $this->options['query']['CoStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['query']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class ListConsumedServices extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/service/listConsumedServices';

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
class ListGreyTagRoute extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/tagroute/greyTagRouteList';

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
 * @method string getNamespaceId()
 * @method string getAppId()
 */
class ListIngresses extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/ingress/IngressList';

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class ListLogConfigs extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/log/listLogConfigs';

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
}

/**
 * @method string getCoType()
 * @method string getNamespaceId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getCoStatus()
 * @method string getKey()
 */
class ListNamespaceChangeOrders extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/changeorder/listNamespaceChangeOrders';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCoType($value)
    {
        $this->data['CoType'] = $value;
        $this->options['query']['CoType'] = $value;

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
    public function withCoStatus($value)
    {
        $this->data['CoStatus'] = $value;
        $this->options['query']['CoStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['query']['Key'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceId()
 */
class ListNamespacedConfigMaps extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/configmap/listNamespacedConfigMaps';

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
 * @method string getAppId()
 */
class ListPublishedServices extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/service/listPublishedServices';

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
 * @method string getNextToken()
 * @method string getResourceType()
 * @method string getResourceIds()
 * @method string getTags()
 */
class ListTagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/tags';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

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

class OpenSaeService extends Roa
{
    /** @var string */
    public $pathPattern = '/service/open';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAppId()
 */
class QueryResourceStatics extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/quota/queryResourceStatics';

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
 * @method string getInstanceIds()
 * @method string getAppId()
 */
class ReduceApplicationCapacityByInstanceIds extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/ScaleInApplicationWithInstanceIds';

    /** @var string */
    public $method = 'PUT';

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getMinReadyInstances()
 * @method string getReplicas()
 * @method string getAppId()
 * @method string getAutoEnableApplicationScalingRule()
 */
class RescaleApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/rescaleApplication';

    /** @var string */
    public $method = 'PUT';

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoEnableApplicationScalingRule($value)
    {
        $this->data['AutoEnableApplicationScalingRule'] = $value;
        $this->options['query']['AutoEnableApplicationScalingRule'] = $value;

        return $this;
    }
}

/**
 * @method string getMemory()
 * @method string getAppId()
 * @method string getCpu()
 */
class RescaleApplicationVertically extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/rescaleApplicationVertically';

    /** @var string */
    public $method = 'POST';

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
    public function withCpu($value)
    {
        $this->data['Cpu'] = $value;
        $this->options['query']['Cpu'] = $value;

        return $this;
    }
}

/**
 * @method string getMinReadyInstances()
 * @method string getAppId()
 */
class RestartApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/restartApplication';

    /** @var string */
    public $method = 'PUT';

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceIds()
 * @method string getAppId()
 */
class RestartInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/restartInstances';

    /** @var string */
    public $method = 'PUT';

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
    public function withAppId($value)
    {
        $this->data['AppId'] = $value;
        $this->options['query']['AppId'] = $value;

        return $this;
    }
}

/**
 * @method string getMinReadyInstances()
 * @method string getVersionId()
 * @method string getAppId()
 * @method string getBatchWaitTime()
 * @method string getAutoEnableApplicationScalingRule()
 * @method string getUpdateStrategy()
 */
class RollbackApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/rollbackApplication';

    /** @var string */
    public $method = 'PUT';

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
    public function withVersionId($value)
    {
        $this->data['VersionId'] = $value;
        $this->options['query']['VersionId'] = $value;

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
    public function withAutoEnableApplicationScalingRule($value)
    {
        $this->data['AutoEnableApplicationScalingRule'] = $value;
        $this->options['query']['AutoEnableApplicationScalingRule'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUpdateStrategy($value)
    {
        $this->data['UpdateStrategy'] = $value;
        $this->options['query']['UpdateStrategy'] = $value;

        return $this;
    }
}

/**
 * @method string getAppId()
 */
class StartApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/startApplication';

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
}

/**
 * @method string getAppId()
 */
class StopApplication extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/stopApplication';

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
}

/**
 * @method string getResourceType()
 * @method string getTags()
 * @method string getResourceIds()
 */
class TagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/tags';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

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
        $this->options['form_params']['Tags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['form_params']['ResourceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getIntranet()
 * @method string getAppId()
 * @method string getInternet()
 */
class UnbindSlb extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/slb';

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
 * @method string getTagKeys()
 * @method string getDeleteAll()
 * @method string getResourceType()
 * @method string getResourceIds()
 */
class UntagResources extends Roa
{
    /** @var string */
    public $pathPattern = '/tags';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeys($value)
    {
        $this->data['TagKeys'] = $value;
        $this->options['query']['TagKeys'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteAll($value)
    {
        $this->data['DeleteAll'] = $value;
        $this->options['query']['DeleteAll'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceIds($value)
    {
        $this->data['ResourceIds'] = $value;
        $this->options['query']['ResourceIds'] = $value;

        return $this;
    }
}

/**
 * @method string getScalingRuleName()
 * @method string getMinReadyInstances()
 * @method string getScalingRuleTimer()
 * @method string getScalingRuleMetric()
 * @method string getAppId()
 */
class UpdateApplicationScalingRule extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/scale/applicationScalingRule';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleName($value)
    {
        $this->data['ScalingRuleName'] = $value;
        $this->options['query']['ScalingRuleName'] = $value;

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
    public function withScalingRuleTimer($value)
    {
        $this->data['ScalingRuleTimer'] = $value;
        $this->options['query']['ScalingRuleTimer'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScalingRuleMetric($value)
    {
        $this->data['ScalingRuleMetric'] = $value;
        $this->options['query']['ScalingRuleMetric'] = $value;

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
 * @method string getSecurityGroupId()
 */
class UpdateAppSecurityGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/updateAppSecurityGroup';

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
    public function withSecurityGroupId($value)
    {
        $this->data['SecurityGroupId'] = $value;
        $this->options['query']['SecurityGroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getData()
 * @method string getDescription()
 * @method string getConfigMapId()
 */
class UpdateConfigMap extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/configmap/configMap';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withData($value)
    {
        $this->data['Data'] = $value;
        $this->options['form_params']['Data'] = $value;

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
    public function withConfigMapId($value)
    {
        $this->data['ConfigMapId'] = $value;
        $this->options['query']['ConfigMapId'] = $value;

        return $this;
    }
}

/**
 * @method string getGreyTagRouteId()
 * @method string getDescription()
 * @method string getDubboRules()
 * @method string getScRules()
 */
class UpdateGreyTagRoute extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/tagroute/greyTagRoute';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGreyTagRouteId($value)
    {
        $this->data['GreyTagRouteId'] = $value;
        $this->options['query']['GreyTagRouteId'] = $value;

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
    public function withDubboRules($value)
    {
        $this->data['DubboRules'] = $value;
        $this->options['query']['DubboRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScRules($value)
    {
        $this->data['ScRules'] = $value;
        $this->options['query']['ScRules'] = $value;

        return $this;
    }
}

/**
 * @method string getIngressId()
 * @method string getListenerPort()
 * @method string getDescription()
 * @method string getRules()
 * @method string getCertId()
 * @method string getDefaultRule()
 */
class UpdateIngress extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/ingress/Ingress';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressId($value)
    {
        $this->data['IngressId'] = $value;
        $this->options['query']['IngressId'] = $value;

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
    public function withRules($value)
    {
        $this->data['Rules'] = $value;
        $this->options['form_params']['Rules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertId($value)
    {
        $this->data['CertId'] = $value;
        $this->options['query']['CertId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDefaultRule($value)
    {
        $this->data['DefaultRule'] = $value;
        $this->options['query']['DefaultRule'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceName()
 * @method string getNamespaceDescription()
 * @method string getNamespaceId()
 */
class UpdateNamespace extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/paas/namespace';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceName($value)
    {
        $this->data['NamespaceName'] = $value;
        $this->options['query']['NamespaceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceDescription($value)
    {
        $this->data['NamespaceDescription'] = $value;
        $this->options['query']['NamespaceDescription'] = $value;

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
}

/**
 * @method string getNamespaceId()
 * @method string getVpcId()
 */
class UpdateNamespaceVpc extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/namespace/updateNamespaceVpc';

    /** @var string */
    public $method = 'POST';

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
    public function withVpcId($value)
    {
        $this->data['VpcId'] = $value;
        $this->options['query']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getCloudUrl()
 * @method string getLocalpath()
 * @method string getAppId()
 */
class UploadFiles extends Roa
{
    /** @var string */
    public $pathPattern = '/pop/v1/sam/app/uploadFiles';

    /** @var string */
    public $method = 'POST';

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
    public function withCloudUrl($value)
    {
        $this->data['CloudUrl'] = $value;
        $this->options['query']['CloudUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalpath($value)
    {
        $this->data['Localpath'] = $value;
        $this->options['query']['Localpath'] = $value;

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
