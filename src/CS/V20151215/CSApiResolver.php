<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachInstances attachInstances(array $options = [])
 * @method CancelClusterUpgrade cancelClusterUpgrade(array $options = [])
 * @method CancelComponentUpgrade cancelComponentUpgrade(array $options = [])
 * @method CancelWorkflow cancelWorkflow(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateClusterNodePool createClusterNodePool(array $options = [])
 * @method CreateKubernetesTrigger createKubernetesTrigger(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DeleteClusterNodepool deleteClusterNodepool(array $options = [])
 * @method DeleteClusterNodes deleteClusterNodes(array $options = [])
 * @method DeleteKubernetesTrigger deleteKubernetesTrigger(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescirbeWorkflow descirbeWorkflow(array $options = [])
 * @method DescribeAddons describeAddons(array $options = [])
 * @method DescribeClusterAddonsUpgradeStatus describeClusterAddonsUpgradeStatus(array $options = [])
 * @method DescribeClusterAddonsVersion describeClusterAddonsVersion(array $options = [])
 * @method DescribeClusterAddonUpgradeStatus describeClusterAddonUpgradeStatus(array $options = [])
 * @method DescribeClusterAttachScripts describeClusterAttachScripts(array $options = [])
 * @method DescribeClusterDetail describeClusterDetail(array $options = [])
 * @method DescribeClusterLogs describeClusterLogs(array $options = [])
 * @method DescribeClusterNodePoolDetail describeClusterNodePoolDetail(array $options = [])
 * @method DescribeClusterNodePools describeClusterNodePools(array $options = [])
 * @method DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method DescribeClusterResources describeClusterResources(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeClustersV1 describeClustersV1(array $options = [])
 * @method DescribeClusterUserKubeconfig describeClusterUserKubeconfig(array $options = [])
 * @method DescribeClusterV2UserKubeconfig describeClusterV2UserKubeconfig(array $options = [])
 * @method DescribeExternalAgent describeExternalAgent(array $options = [])
 * @method DescribeKubernetesVersionMetadata describeKubernetesVersionMetadata(array $options = [])
 * @method DescribeTemplateAttribute describeTemplateAttribute(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method DescribeUserQuota describeUserQuota(array $options = [])
 * @method DescribeWorkflows describeWorkflows(array $options = [])
 * @method GetKubernetesTrigger getKubernetesTrigger(array $options = [])
 * @method GetUpgradeStatus getUpgradeStatus(array $options = [])
 * @method InstallClusterAddons installClusterAddons(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyCluster modifyCluster(array $options = [])
 * @method ModifyClusterConfiguration modifyClusterConfiguration(array $options = [])
 * @method ModifyClusterNodePool modifyClusterNodePool(array $options = [])
 * @method ModifyClusterTags modifyClusterTags(array $options = [])
 * @method PauseClusterUpgrade pauseClusterUpgrade(array $options = [])
 * @method PauseComponentUpgrade pauseComponentUpgrade(array $options = [])
 * @method RemoveClusterNodes removeClusterNodes(array $options = [])
 * @method RemoveWorkflow removeWorkflow(array $options = [])
 * @method ResumeComponentUpgrade resumeComponentUpgrade(array $options = [])
 * @method ResumeUpgradeCluster resumeUpgradeCluster(array $options = [])
 * @method ScaleCluster scaleCluster(array $options = [])
 * @method ScaleClusterNodePool scaleClusterNodePool(array $options = [])
 * @method ScaleOutCluster scaleOutCluster(array $options = [])
 * @method StartWorkflow startWorkflow(array $options = [])
 * @method UnInstallClusterAddons unInstallClusterAddons(array $options = [])
 * @method UpdateK8sClusterUserConfigExpire updateK8sClusterUserConfigExpire(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method UpgradeCluster upgradeCluster(array $options = [])
 * @method UpgradeClusterAddons upgradeClusterAddons(array $options = [])
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
class CancelClusterUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade/cancel';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getComponentid()
 * @method string getClusterid()
 */
class CancelComponentUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[clusterid]/components/[componentid]/cancel';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentid($value)
    {
        $this->data['Componentid'] = $value;
        $this->pathParameters['componentid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterid($value)
    {
        $this->data['Clusterid'] = $value;
        $this->pathParameters['clusterid'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkflowName()
 */
class CancelWorkflow extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflow/[workflowName]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkflowName($value)
    {
        $this->data['WorkflowName'] = $value;
        $this->pathParameters['workflowName'] = $value;

        return $this;
    }
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
class CreateClusterNodePool extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodepools';

    /** @var string */
    public $method = 'POST';
}

class CreateKubernetesTrigger extends Roa
{
    /** @var string */
    public $pathPattern = '/triggers';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTemplate()
 * @method string getName()
 * @method string getTemplateType()
 * @method string getTags()
 */
class CreateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/templates';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplate($value)
    {
        $this->data['Template'] = $value;
        $this->options['form_params']['template'] = $value;

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
        $this->options['form_params']['name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateType($value)
    {
        $this->data['TemplateType'] = $value;
        $this->options['form_params']['template_type'] = $value;

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
        $this->options['form_params']['tags'] = $value;

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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodepoolId()
 * @method $this withNodepoolId($value)
 */
class DeleteClusterNodepool extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodepools/[NodepoolId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getReleaseNode()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReleaseNode($value)
    {
        $this->data['ReleaseNode'] = $value;
        $this->options['form_params']['release_node'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteKubernetesTrigger extends Roa
{
    /** @var string */
    public $pathPattern = '/triggers/revoke/[Id]';

    /** @var string */
    public $method = 'DELETE';
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

/**
 * @method string getWorkflowName()
 */
class DescirbeWorkflow extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflow/[workflowName]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkflowName($value)
    {
        $this->data['WorkflowName'] = $value;
        $this->pathParameters['workflowName'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterType()
 * @method string getRegion()
 */
class DescribeAddons extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/components/metadata';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['query']['cluster_type'] = $value;

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
        $this->options['query']['region'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAddonsUpgradeStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/upgradestatus';
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodepoolId()
 * @method $this withNodepoolId($value)
 */
class DescribeClusterNodePoolDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodepools/[NodepoolId]';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterNodePools extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodepools';
}

/**
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getState()
 * @method string getNodepoolId()
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
    public function withState($value)
    {
        $this->data['State'] = $value;
        $this->options['query']['state'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodepoolId($value)
    {
        $this->data['NodepoolId'] = $value;
        $this->options['query']['nodepool_id'] = $value;

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
class DescribeClusterResources extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/resources';
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
        $this->options['query']['name'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterType()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 */
class DescribeClustersV1 extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v1/clusters';

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['page_number'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['page_size'] = $value;

        return $this;
    }
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
 * @method string getPrivateIpAddress()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterV2UserKubeconfig extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/k8s/[ClusterId]/user_config';

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
class DescribeExternalAgent extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/external/agent/deployment';
}

/**
 * @method string getClusterType()
 * @method string getMultiAZ()
 * @method string getKubernetesVersion()
 * @method string getProfile()
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
    public function withProfile($value)
    {
        $this->data['Profile'] = $value;
        $this->options['query']['Profile'] = $value;

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
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class DescribeTemplateAttribute extends Roa
{
    /** @var string */
    public $pathPattern = '/templates/[TemplateId]';
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

class DescribeUserQuota extends Roa
{
    /** @var string */
    public $pathPattern = '/quota';
}

class DescribeWorkflows extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflows';
}

/**
 * @method string getNamespace()
 * @method string getName()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getType()
 */
class GetKubernetesTrigger extends Roa
{
    /** @var string */
    public $pathPattern = '/triggers/[ClusterId]';

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
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['query']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class GetUpgradeStatus extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade/status';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class InstallClusterAddons extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/install';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getResourceType()
 * @method string getNextToken()
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
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['query']['resource_type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['query']['next_token'] = $value;

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
        $this->options['query']['resource_ids'] = $value;

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
        $this->options['query']['tags'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyClusterConfiguration extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/configuration';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodepoolId()
 * @method $this withNodepoolId($value)
 */
class ModifyClusterNodePool extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodepools/[NodepoolId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyClusterTags extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/tags';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class PauseClusterUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade/pause';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getComponentid()
 * @method string getClusterid()
 */
class PauseComponentUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[clusterid]/components/[componentid]/pause';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentid($value)
    {
        $this->data['Componentid'] = $value;
        $this->pathParameters['componentid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterid($value)
    {
        $this->data['Clusterid'] = $value;
        $this->pathParameters['clusterid'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RemoveClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/nodes/remove';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getWorkflowName()
 */
class RemoveWorkflow extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflow/[workflowName]';

    /** @var string */
    public $method = 'DELETE';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkflowName($value)
    {
        $this->data['WorkflowName'] = $value;
        $this->pathParameters['workflowName'] = $value;

        return $this;
    }
}

/**
 * @method string getComponentid()
 * @method string getClusterid()
 */
class ResumeComponentUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[clusterid]/components/[componentid]/resume';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentid($value)
    {
        $this->data['Componentid'] = $value;
        $this->pathParameters['componentid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterid($value)
    {
        $this->data['Clusterid'] = $value;
        $this->pathParameters['clusterid'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResumeUpgradeCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade/resume';

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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNodepoolId()
 * @method $this withNodepoolId($value)
 */
class ScaleClusterNodePool extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodepools/[NodepoolId]';

    /** @var string */
    public $method = 'POST';
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

class StartWorkflow extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflow';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UnInstallClusterAddons extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/uninstall';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateK8sClusterUserConfigExpire extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/user_config/expire';

    /** @var string */
    public $method = 'POST';
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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade';

    /** @var string */
    public $method = 'POST';
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
