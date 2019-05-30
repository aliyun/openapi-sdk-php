<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DownloadClusterNodeCerts downloadClusterNodeCerts(array $options = [])
 * @method CreateClusterToken createClusterToken(array $options = [])
 * @method DescribeClusterHosts describeClusterHosts(array $options = [])
 * @method DescribeClusterResources describeClusterResources(array $options = [])
 * @method DescribeApiVersion describeApiVersion(array $options = [])
 * @method AddAgilityCluster addAgilityCluster(array $options = [])
 * @method ScaleCluster scaleCluster(array $options = [])
 * @method DeleteClusterNode deleteClusterNode(array $options = [])
 * @method DescribeMonitorToken describeMonitorToken(array $options = [])
 * @method ScaleOutCluster scaleOutCluster(array $options = [])
 * @method ScaleInCluster scaleInCluster(array $options = [])
 * @method DescribeServiceContainers describeServiceContainers(array $options = [])
 * @method CheckAliyunCSServiceRole checkAliyunCSServiceRole(array $options = [])
 * @method DescribeKubernetesTemplates describeKubernetesTemplates(array $options = [])
 * @method UpgradeClusterAddons upgradeClusterAddons(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method CallbackClusterToken callbackClusterToken(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method GetProjectEvents getProjectEvents(array $options = [])
 * @method DescribeKubernetesClusterScaleMeta describeKubernetesClusterScaleMeta(array $options = [])
 * @method DescribeClusterEndpoints describeClusterEndpoints(array $options = [])
 * @method GetTriggerHook getTriggerHook(array $options = [])
 * @method DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method RenewK8sClusterCert renewK8sClusterCert(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method ReBindSecurityGroup reBindSecurityGroup(array $options = [])
 * @method ModifyClusterName modifyClusterName(array $options = [])
 * @method DescribeKubernetesVersionMetadata describeKubernetesVersionMetadata(array $options = [])
 * @method PreCheckForCreateCluster preCheckForCreateCluster(array $options = [])
 * @method DescribeK8sResourceGroup describeK8sResourceGroup(array $options = [])
 * @method RenewClusterNodeCerts renewClusterNodeCerts(array $options = [])
 * @method DescribeEdasClusterToken describeEdasClusterToken(array $options = [])
 * @method AttachInstances attachInstances(array $options = [])
 * @method DescribeClusterLogs describeClusterLogs(array $options = [])
 * @method DescribeTaskInfo describeTaskInfo(array $options = [])
 * @method DescribeClusterAttachScripts describeClusterAttachScripts(array $options = [])
 * @method DescribeImages describeImages(array $options = [])
 * @method DescribeKubernetesTemplate describeKubernetesTemplate(array $options = [])
 * @method DescribeClusterNodeInfo describeClusterNodeInfo(array $options = [])
 * @method CreateClusterByResourcesGroup createClusterByResourcesGroup(array $options = [])
 * @method GetCidrsForVpc getCidrsForVpc(array $options = [])
 * @method UpdateEdasClusterRole updateEdasClusterRole(array $options = [])
 * @method ResetClusterNode resetClusterNode(array $options = [])
 * @method DescribeAgilityTunnelCerts describeAgilityTunnelCerts(array $options = [])
 * @method DescribeClusterAddonUpgradeStatus describeClusterAddonUpgradeStatus(array $options = [])
 * @method GatherLogsToken gatherLogsToken(array $options = [])
 * @method DescribeTemplateAttribute describeTemplateAttribute(array $options = [])
 * @method DescribeClusterDetail describeClusterDetail(array $options = [])
 * @method UpgradeClusterComponents upgradeClusterComponents(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeClusterServices describeClusterServices(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method DescribeClusterUserKubeconfig describeClusterUserKubeconfig(array $options = [])
 * @method DescribeClusterCerts describeClusterCerts(array $options = [])
 * @method DescribeUserContainers describeUserContainers(array $options = [])
 * @method CallBackAgilityCluster callBackAgilityCluster(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method UpdateSubUserResouces updateSubUserResouces(array $options = [])
 * @method GetClusterCertInfo getClusterCertInfo(array $options = [])
 * @method DescribeClusterNodeInfoWithInstance describeClusterNodeInfoWithInstance(array $options = [])
 * @method UpdateEdasClusterRoleBinding updateEdasClusterRoleBinding(array $options = [])
 * @method DescribeClusterScaledNode describeClusterScaledNode(array $options = [])
 * @method CreateTriggerHook createTriggerHook(array $options = [])
 * @method CreateEdasClusterRoleBinding createEdasClusterRoleBinding(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method CreateEdasClusterRole createEdasClusterRole(array $options = [])
 * @method DescribeAgilityTunnelAgentInfo describeAgilityTunnelAgentInfo(array $options = [])
 * @method DescribeEdgeClusterAttachScripts describeEdgeClusterAttachScripts(array $options = [])
 * @method DescribeClusterAddonsVersion describeClusterAddonsVersion(array $options = [])
 * @method RevokeClusterToken revokeClusterToken(array $options = [])
 * @method AbandonCluster abandonCluster(array $options = [])
 * @method GetClusterProjects getClusterProjects(array $options = [])
 * @method DescribeKubernetesClusterHookTrigger describeKubernetesClusterHookTrigger(array $options = [])
 * @method DescribeClusterTokens describeClusterTokens(array $options = [])
 * @method DeleteClusterNodes deleteClusterNodes(array $options = [])
 */
class CSApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'CS';

    /** @var string */
    public $version = '2015-12-15';

    /** @var string */
    public $serviceCode = 'cs';
}

/**
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DownloadClusterNodeCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateClusterToken extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/token';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterHosts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/hosts';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterResources extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/resources';
}

class DescribeApiVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/version';
}

class AddAgilityCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/add_agility_cluster';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ScaleCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getReleaseInstance()
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getForce()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNode extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/ip/[Ip]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReleaseInstance($value)
    {
        $this->data['ReleaseInstance'] = $value;
        $this->options['query']['releaseInstance'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withForce($value)
    {
        $this->data['Force'] = $value;
        $this->options['query']['force'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeMonitorToken extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/monitor/token';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ScaleOutCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ScaleInCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/scalein';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DescribeServiceContainers extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/services/[ServiceId]/containers';
}

class CheckAliyunCSServiceRole extends Roa
{
    /** @var string */
    public $pathPattern = '/aliyuncsrole/status';
}

/**
 * @method string getKubernetesVersion()
 * @method string getRegion()
 */
class DescribeKubernetesTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/templates';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKubernetesVersion($value)
    {
        $this->data['KubernetesVersion'] = $value;
        $this->options['query']['KubernetesVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClusterAddons extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getReqOnce()
 * @method $this withReqOnce($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class CallbackClusterToken extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/req_once/[ReqOnce]/callback';

    /** @var string */
    public $method = 'POST';
}

class CreateCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProjectEvents extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/projects/[ProjectId]/events';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeKubernetesClusterScaleMeta extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/clusters/[ClusterId]/scale_metadata';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterEndpoints extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/endpoints';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetTriggerHook extends Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger/[ClusterId]/[ProjectId]';
}

/**
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class DescribeClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['pageSize'] = $value;

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
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RenewK8sClusterCert extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/cert_renew';

    /** @var string */
    public $method = 'POST';
}

class CreateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/templates';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ReBindSecurityGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/rebind_sg';

    /** @var string */
    public $method = 'POST';
}

class ModifyClusterName extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/name/[ClusterName]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterType()
 * @method string getMultiAZ()
 * @method string getKubernetesVersion()
 * @method string getRegion()
 */
class DescribeKubernetesVersionMetadata extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/metadata/versions';

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
    public function withMultiAZ($value)
    {
        $this->data['MultiAZ'] = $value;
        $this->options['query']['MultiAZ'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKubernetesVersion($value)
    {
        $this->data['KubernetesVersion'] = $value;
        $this->options['query']['KubernetesVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegion($value)
    {
        $this->data['Region'] = $value;
        $this->options['query']['Region'] = $value;

        return $this;
    }
}

class PreCheckForCreateCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/ess/precheck';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeK8sResourceGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/monitor/resource_group';
}

/**
 * @method string getHostId()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RenewClusterNodeCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/hosts/[hostId]/renew';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHostId($value)
    {
        $this->data['HostId'] = $value;
        $this->pathParameters['hostId'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeEdasClusterToken extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/token';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attach';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/logs';
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTaskInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/tasks/[TaskId]';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAttachScripts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attachscript';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getImageName()
 * @method string getDockerVersion()
 */
class DescribeImages extends Roa
{
    /** @var string */
    public $pathPattern = '/images';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageName($value)
    {
        $this->data['ImageName'] = $value;
        $this->options['query']['ImageName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDockerVersion($value)
    {
        $this->data['DockerVersion'] = $value;
        $this->options['query']['DockerVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeKubernetesTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/templates/[ClusterId]';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class DescribeClusterNodeInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/node_info';
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 */
class CreateClusterByResourcesGroup extends Roa
{
    /** @var string */
    public $pathPattern = '/resource_groups/[ResourceGroupId]/clusters';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getVpcId()
 * @method $this withVpcId($value)
 */
class GetCidrsForVpc extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/vpc/[VpcId]/cidrs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateEdasClusterRole extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/clusterroles';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResetClusterNode extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/instances/[InstanceId]/reset';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class DescribeAgilityTunnelCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/agility/[Token]/agent_certs';
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAddonUpgradeStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/[ComponentId]/upgradestatus';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class GatherLogsToken extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/gather_logs';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DescribeTemplateAttribute extends Roa
{
    /** @var string */
    public $pathPattern = '/templates/[TemplateId]';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';
}

/**
 * @method string getComponentId()
 * @method $this withComponentId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClusterComponents extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/[ComponentId]/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['clusterType'] = $value;

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
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterServices extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/services';
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class UpdateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/templates/[TemplateId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getPrivateIpAddress()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterUserKubeconfig extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/user_config';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateIpAddress($value)
    {
        $this->data['PrivateIpAddress'] = $value;
        $this->options['query']['PrivateIpAddress'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/certs';
}

/**
 * @method string getServiceId()
 */
class DescribeUserContainers extends Roa
{
    /** @var string */
    public $pathPattern = '/region/[RegionId]/containers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceId($value)
    {
        $this->data['ServiceId'] = $value;
        $this->options['query']['ServiceId'] = $value;

        return $this;
    }
}

/**
 * @method string getReqOnce()
 * @method $this withReqOnce($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class CallBackAgilityCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/agility/token/[Token]/req_once/[ReqOnce]/callback';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DeleteTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/templates/[TemplateId]';

    /** @var string */
    public $method = 'DELETE';
}

class UpdateSubUserResouces extends Roa
{
    /** @var string */
    public $pathPattern = '/ram/resources';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetClusterCertInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/hosts/certs';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DescribeClusterNodeInfoWithInstance extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/instance/[InstanceId]/node_info';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateEdasClusterRoleBinding extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/clusterrolebindings';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterScaledNode extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/scaled_nodes/';
}

class CreateTriggerHook extends Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateEdasClusterRoleBinding extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/clusterrolebindings';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTemplateType()
 */
class DescribeTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/templates';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateType($value)
    {
        $this->data['TemplateType'] = $value;
        $this->options['query']['template_type'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateEdasClusterRole extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/clusterroles';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class DescribeAgilityTunnelAgentInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/agility/[Token]/agent_info';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNamePrefix()
 */
class DescribeEdgeClusterAttachScripts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attachscript';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamePrefix($value)
    {
        $this->data['NamePrefix'] = $value;
        $this->options['query']['NamePrefix'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAddonsVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/version';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class RevokeClusterToken extends Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/revoke';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AbandonCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/abandon';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetClusterProjects extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/projects';
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getDdeployment()
 * @method $this withDdeployment($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeKubernetesClusterHookTrigger extends Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger/[ClusterId]/[Namespace]/[Ddeployment]';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterTokens extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/tokens';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

    /** @var string */
    public $method = 'POST';
}
