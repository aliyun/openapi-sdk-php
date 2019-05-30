<?php

namespace AlibabaCloud\CS\V20180418;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeKubernetesTemplate describeKubernetesTemplate(array $options = [])
 * @method DescribeUserContainers describeUserContainers(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method CheckAliyunCSServiceRole checkAliyunCSServiceRole(array $options = [])
 * @method AddAgilityCluster addAgilityCluster(array $options = [])
 * @method GetTriggerHook getTriggerHook(array $options = [])
 * @method DescribeTemplateAttribute describeTemplateAttribute(array $options = [])
 * @method DescribeTaskInfo describeTaskInfo(array $options = [])
 * @method RevokeClusterToken revokeClusterToken(array $options = [])
 * @method ScaleInCluster scaleInCluster(array $options = [])
 * @method DescribeClusterScaledNode describeClusterScaledNode(array $options = [])
 * @method DescribeClusterServices describeClusterServices(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method DescribeClusterLogs describeClusterLogs(array $options = [])
 * @method DescribeAgilityTunnelCerts describeAgilityTunnelCerts(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeKubernetesTemplates describeKubernetesTemplates(array $options = [])
 * @method ResetClusterNode resetClusterNode(array $options = [])
 * @method ScaleCluster scaleCluster(array $options = [])
 * @method DescribeAgilityTunnelAgentInfo describeAgilityTunnelAgentInfo(array $options = [])
 * @method DeleteClusterNode deleteClusterNode(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DownloadClusterNodeCerts downloadClusterNodeCerts(array $options = [])
 * @method DescribeServiceContainers describeServiceContainers(array $options = [])
 * @method DescribeClusterNodeInfo describeClusterNodeInfo(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method UpdateSubUserResouces updateSubUserResouces(array $options = [])
 * @method DescribeClusterTokens describeClusterTokens(array $options = [])
 * @method DescribeClusterHosts describeClusterHosts(array $options = [])
 * @method GetProjectEvents getProjectEvents(array $options = [])
 * @method ModifyClusterName modifyClusterName(array $options = [])
 * @method CallbackClusterToken callbackClusterToken(array $options = [])
 * @method CallBackAgilityCluster callBackAgilityCluster(array $options = [])
 * @method UpgradeClusterComponents upgradeClusterComponents(array $options = [])
 * @method DescribeClusterDetail describeClusterDetail(array $options = [])
 * @method DescribeImages describeImages(array $options = [])
 * @method DescribeClusterNodeInfoWithInstance describeClusterNodeInfoWithInstance(array $options = [])
 * @method DescribeApiVersion describeApiVersion(array $options = [])
 * @method GatherLogsToken gatherLogsToken(array $options = [])
 * @method DescribeClusterCerts describeClusterCerts(array $options = [])
 * @method GetClusterProjects getClusterProjects(array $options = [])
 * @method DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method AttachInstances attachInstances(array $options = [])
 * @method CreateClusterToken createClusterToken(array $options = [])
 */
class CSApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'CS';

    /** @var string */
    public $version = '2018-04-18';

    /** @var string */
    public $serviceCode = 'cs';
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

class DescribeTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/templates';
}

class CheckAliyunCSServiceRole extends Roa
{
    /** @var string */
    public $pathPattern = '/aliyuncsrole/status';
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
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetTriggerHook extends Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger/[ClusterId]/[ProjectId]';
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeTaskInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/tasks/[TaskId]';
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
 */
class DescribeClusterScaledNode extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/scaled_nodes/';
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
 */
class DescribeClusterLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/logs';
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
 * @method string getToken()
 * @method $this withToken($value)
 */
class DescribeAgilityTunnelAgentInfo extends Roa
{
    /** @var string */
    public $pathPattern = '/agility/[Token]/agent_info';
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
class DeleteCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'DELETE';
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
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DescribeServiceContainers extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/services/[ServiceId]/containers';
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

class CreateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/templates';

    /** @var string */
    public $method = 'PUT';
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
class DescribeClusterTokens extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/tokens';
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
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class GetProjectEvents extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/projects/[ProjectId]/events';
}

class ModifyClusterName extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/name/[ClusterName]';

    /** @var string */
    public $method = 'POST';
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';
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

class DescribeApiVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/version';
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCerts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/certs';
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
class CreateClusterToken extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/token';

    /** @var string */
    public $method = 'POST';
}
