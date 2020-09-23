<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachInstances attachInstances(array $options = [])
 * @method CancelClusterUpgrade cancelClusterUpgrade(array $options = [])
 * @method CancelComponentUpgrade cancelComponentUpgrade(array $options = [])
 * @method CancelWorkflow cancelWorkflow(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 * @method CreateKubernetesTrigger createKubernetesTrigger(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
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
 * @method DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method DescribeClusterResources describeClusterResources(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method DescribeClustersV1 describeClustersV1(array $options = [])
 * @method DescribeClusterUserKubeconfig describeClusterUserKubeconfig(array $options = [])
 * @method DescribeClusterV2UserKubeconfig describeClusterV2UserKubeconfig(array $options = [])
 * @method DescribeExternalAgent describeExternalAgent(array $options = [])
 * @method DescribeTemplates describeTemplates(array $options = [])
 * @method DescribeUserQuota describeUserQuota(array $options = [])
 * @method DescribeWorkflows describeWorkflows(array $options = [])
 * @method GetKubernetesTrigger getKubernetesTrigger(array $options = [])
 * @method GetUpgradeStatus getUpgradeStatus(array $options = [])
 * @method InstallClusterAddons installClusterAddons(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ModifyCluster modifyCluster(array $options = [])
 * @method ModifyClusterConfiguration modifyClusterConfiguration(array $options = [])
 * @method ModifyClusterTags modifyClusterTags(array $options = [])
 * @method PauseClusterUpgrade pauseClusterUpgrade(array $options = [])
 * @method PauseComponentUpgrade pauseComponentUpgrade(array $options = [])
 * @method RemoveClusterNodes removeClusterNodes(array $options = [])
 * @method RemoveWorkflow removeWorkflow(array $options = [])
 * @method ResumeComponentUpgrade resumeComponentUpgrade(array $options = [])
 * @method ResumeUpgradeCluster resumeUpgradeCluster(array $options = [])
 * @method ScaleCluster scaleCluster(array $options = [])
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

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPassword()
 * @method string getKeepInstanceName()
 * @method string getKeyPair()
 * @method string getCpuPolicy()
 * @method string getIsEdgeWorker()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getUserData()
 * @method string getImageId()
 * @method string getFormatDisk()
 * @method string getNodepoolId()
 */
class AttachInstances extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attach';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPassword($value)
    {
        $this->data['Password'] = $value;
        $this->options['form_params']['password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeepInstanceName($value)
    {
        $this->data['KeepInstanceName'] = $value;
        $this->options['form_params']['keep_instance_name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyPair($value)
    {
        $this->data['KeyPair'] = $value;
        $this->options['form_params']['key_pair'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuPolicy($value)
    {
        $this->data['CpuPolicy'] = $value;
        $this->options['form_params']['cpu_policy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsEdgeWorker($value)
    {
        $this->data['IsEdgeWorker'] = $value;
        $this->options['form_params']['is_edge_worker'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserData($value)
    {
        $this->data['UserData'] = $value;
        $this->options['form_params']['user_data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['form_params']['image_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFormatDisk($value)
    {
        $this->data['FormatDisk'] = $value;
        $this->options['form_params']['format_disk'] = $value;

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
        $this->options['form_params']['nodepool_id'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CancelClusterUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade/cancel';
}

/**
 * @method string getComponentid()
 * @method string getClusterid()
 */
class CancelComponentUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[clusterid]/components/[componentid]/cancel';

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

/**
 * @method string getPrivateZone()
 * @method string getProxyMode()
 * @method string getMasterSystemDiskCategory()
 * @method string getMasterPeriod()
 * @method string getCloudMonitorFlags()
 * @method string getSshFlags()
 * @method string getSecurityGroupId()
 * @method string getContainerCidr()
 * @method string getClusterType()
 * @method string getEndpointPublicAccess()
 * @method string getWorkerAutoRenew()
 * @method string getPlatform()
 * @method string getServiceCidr()
 * @method string getNodePortRange()
 * @method string getZoneId()
 * @method string getLoginPassword()
 * @method string getKubernetesVersion()
 * @method string getIsEnterpriseSecurityGroup()
 * @method string getMasterPeriodUnit()
 * @method string getMasterSystemDiskSize()
 * @method string getMasterCount()
 * @method string getNumOfNodes()
 * @method string getDeletionProtection()
 * @method string getKeyPair()
 * @method string getMasterAutoRenew()
 * @method string getProfile()
 * @method string getRegionId()
 * @method string getSnatEntry()
 * @method string getWorkerSystemDiskCategory()
 * @method string getUserData()
 * @method string getWorkerPeriodUnit()
 * @method string getMasterInstanceChargeType()
 * @method string getNodeCidrMask()
 * @method string getWorkerAutoRenewPeriod()
 * @method string getMasterAutoRenewPeriod()
 * @method string getWorkerPeriod()
 * @method string getTimeoutMins()
 * @method string getImagesId()
 * @method string getWorkerSystemDiskSize()
 * @method string getVpcid()
 * @method string getOsType()
 * @method string getCpuPolicy()
 * @method string getName()
 * @method string getDisableRollback()
 * @method string getWorkerInstanceChargeType()
 */
class CreateCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrivateZone($value)
    {
        $this->data['PrivateZone'] = $value;
        $this->options['form_params']['private_zone'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyMode($value)
    {
        $this->data['ProxyMode'] = $value;
        $this->options['form_params']['proxy_mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterSystemDiskCategory($value)
    {
        $this->data['MasterSystemDiskCategory'] = $value;
        $this->options['form_params']['master_system_disk_category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterPeriod($value)
    {
        $this->data['MasterPeriod'] = $value;
        $this->options['form_params']['master_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudMonitorFlags($value)
    {
        $this->data['CloudMonitorFlags'] = $value;
        $this->options['form_params']['cloud_monitor_flags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSshFlags($value)
    {
        $this->data['SshFlags'] = $value;
        $this->options['form_params']['ssh_flags'] = $value;

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
        $this->options['form_params']['security_group_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContainerCidr($value)
    {
        $this->data['ContainerCidr'] = $value;
        $this->options['form_params']['container_cidr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterType($value)
    {
        $this->data['ClusterType'] = $value;
        $this->options['form_params']['cluster_type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndpointPublicAccess($value)
    {
        $this->data['EndpointPublicAccess'] = $value;
        $this->options['form_params']['endpoint_public_access'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerAutoRenew($value)
    {
        $this->data['WorkerAutoRenew'] = $value;
        $this->options['form_params']['worker_auto_renew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlatform($value)
    {
        $this->data['Platform'] = $value;
        $this->options['form_params']['platform'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCidr($value)
    {
        $this->data['ServiceCidr'] = $value;
        $this->options['form_params']['service_cidr'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodePortRange($value)
    {
        $this->data['NodePortRange'] = $value;
        $this->options['form_params']['node_port_range'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneId($value)
    {
        $this->data['ZoneId'] = $value;
        $this->options['form_params']['zone_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoginPassword($value)
    {
        $this->data['LoginPassword'] = $value;
        $this->options['form_params']['login_password'] = $value;

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
        $this->options['form_params']['kubernetes_version'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIsEnterpriseSecurityGroup($value)
    {
        $this->data['IsEnterpriseSecurityGroup'] = $value;
        $this->options['form_params']['is_enterprise_security_group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterPeriodUnit($value)
    {
        $this->data['MasterPeriodUnit'] = $value;
        $this->options['form_params']['master_period_unit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterSystemDiskSize($value)
    {
        $this->data['MasterSystemDiskSize'] = $value;
        $this->options['form_params']['master_system_disk_size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterCount($value)
    {
        $this->data['MasterCount'] = $value;
        $this->options['form_params']['master_count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNumOfNodes($value)
    {
        $this->data['NumOfNodes'] = $value;
        $this->options['form_params']['num_of_nodes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeletionProtection($value)
    {
        $this->data['DeletionProtection'] = $value;
        $this->options['form_params']['deletion_protection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyPair($value)
    {
        $this->data['KeyPair'] = $value;
        $this->options['form_params']['key_pair'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterAutoRenew($value)
    {
        $this->data['MasterAutoRenew'] = $value;
        $this->options['form_params']['master_auto_renew'] = $value;

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
        $this->options['form_params']['profile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionId($value)
    {
        $this->data['RegionId'] = $value;
        $this->options['form_params']['region_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSnatEntry($value)
    {
        $this->data['SnatEntry'] = $value;
        $this->options['form_params']['snat_entry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerSystemDiskCategory($value)
    {
        $this->data['WorkerSystemDiskCategory'] = $value;
        $this->options['form_params']['worker_system_disk_category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserData($value)
    {
        $this->data['UserData'] = $value;
        $this->options['form_params']['user_data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerPeriodUnit($value)
    {
        $this->data['WorkerPeriodUnit'] = $value;
        $this->options['form_params']['worker_period_unit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterInstanceChargeType($value)
    {
        $this->data['MasterInstanceChargeType'] = $value;
        $this->options['form_params']['master_instance_charge_type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNodeCidrMask($value)
    {
        $this->data['NodeCidrMask'] = $value;
        $this->options['form_params']['node_cidr_mask'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerAutoRenewPeriod($value)
    {
        $this->data['WorkerAutoRenewPeriod'] = $value;
        $this->options['form_params']['worker_auto_renew_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMasterAutoRenewPeriod($value)
    {
        $this->data['MasterAutoRenewPeriod'] = $value;
        $this->options['form_params']['master_auto_renew_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerPeriod($value)
    {
        $this->data['WorkerPeriod'] = $value;
        $this->options['form_params']['worker_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutMins($value)
    {
        $this->data['TimeoutMins'] = $value;
        $this->options['form_params']['timeout_mins'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImagesId($value)
    {
        $this->data['ImagesId'] = $value;
        $this->options['form_params']['images_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerSystemDiskSize($value)
    {
        $this->data['WorkerSystemDiskSize'] = $value;
        $this->options['form_params']['worker_system_disk_size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVpcid($value)
    {
        $this->data['Vpcid'] = $value;
        $this->options['form_params']['vpcid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOsType($value)
    {
        $this->data['OsType'] = $value;
        $this->options['form_params']['os_type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuPolicy($value)
    {
        $this->data['CpuPolicy'] = $value;
        $this->options['form_params']['cpu_policy'] = $value;

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
    public function withDisableRollback($value)
    {
        $this->data['DisableRollback'] = $value;
        $this->options['form_params']['disable_rollback'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerInstanceChargeType($value)
    {
        $this->data['WorkerInstanceChargeType'] = $value;
        $this->options['form_params']['worker_instance_charge_type'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method string getType()
 * @method string getProjectId()
 */
class CreateKubernetesTrigger extends Roa
{
    /** @var string */
    public $pathPattern = '/triggers';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterId($value)
    {
        $this->data['ClusterId'] = $value;
        $this->options['form_params']['ClusterId'] = $value;

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
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProjectId($value)
    {
        $this->data['ProjectId'] = $value;
        $this->options['form_params']['ProjectId'] = $value;

        return $this;
    }
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
 * @method string getReleaseNode()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

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

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAddonsVersion extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/version';

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getArch()
 */
class DescribeClusterAttachScripts extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attachscript';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArch($value)
    {
        $this->data['Arch'] = $value;
        $this->options['form_params']['arch'] = $value;

        return $this;
    }
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterLogs extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/logs';

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTemplateType()
 */
class DescribeTemplates extends Roa
{
    /** @var string */
    public $pathPattern = '/templates';

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';
}

class DescribeWorkflows extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflows';

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';

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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class InstallClusterAddons extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/install';
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

    /** @var string */
    public $method = 'GET';

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
 * @method string getApiServerEip()
 * @method string getResourceGroupId()
 * @method string getIngressDomainRebinding()
 * @method string getDeletionProtection()
 * @method string getIngressLoadbalancerId()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApiServerEipId()
 */
class ModifyCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiServerEip($value)
    {
        $this->data['ApiServerEip'] = $value;
        $this->options['form_params']['api_server_eip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceGroupId($value)
    {
        $this->data['ResourceGroupId'] = $value;
        $this->options['form_params']['resource_group_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressDomainRebinding($value)
    {
        $this->data['IngressDomainRebinding'] = $value;
        $this->options['form_params']['ingress_domain_rebinding'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeletionProtection($value)
    {
        $this->data['DeletionProtection'] = $value;
        $this->options['form_params']['deletion_protection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIngressLoadbalancerId($value)
    {
        $this->data['IngressLoadbalancerId'] = $value;
        $this->options['form_params']['ingress_loadbalancer_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiServerEipId($value)
    {
        $this->data['ApiServerEipId'] = $value;
        $this->options['form_params']['api_server_eip_id'] = $value;

        return $this;
    }
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
 */
class ModifyClusterTags extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/tags';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class PauseClusterUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade/pause';
}

/**
 * @method string getComponentid()
 * @method string getClusterid()
 */
class PauseComponentUpgrade extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[clusterid]/components/[componentid]/pause';

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
 * @method string getReleaseNode()
 * @method string getDrainNode()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RemoveClusterNodes extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/nodes/remove';

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDrainNode($value)
    {
        $this->data['DrainNode'] = $value;
        $this->options['form_params']['drain_node'] = $value;

        return $this;
    }
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
}

/**
 * @method string getKeyPair()
 * @method string getWorkerDataDisk()
 * @method string getCount()
 * @method string getWorkerSystemDiskCategory()
 * @method string getCloudMonitorFlags()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getWorkerPeriodUnit()
 * @method string getWorkerAutoRenew()
 * @method string getWorkerAutoRenewPeriod()
 * @method string getWorkerPeriod()
 * @method string getLoginPassword()
 * @method string getWorkerSystemDiskSize()
 * @method string getCpuPolicy()
 * @method string getDisableRollback()
 * @method string getWorkerInstanceChargeType()
 */
class ScaleCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'PUT';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyPair($value)
    {
        $this->data['KeyPair'] = $value;
        $this->options['form_params']['key_pair'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerDataDisk($value)
    {
        $this->data['WorkerDataDisk'] = $value;
        $this->options['form_params']['worker_data_disk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerSystemDiskCategory($value)
    {
        $this->data['WorkerSystemDiskCategory'] = $value;
        $this->options['form_params']['worker_system_disk_category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudMonitorFlags($value)
    {
        $this->data['CloudMonitorFlags'] = $value;
        $this->options['form_params']['cloud_monitor_flags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerPeriodUnit($value)
    {
        $this->data['WorkerPeriodUnit'] = $value;
        $this->options['form_params']['worker_period_unit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerAutoRenew($value)
    {
        $this->data['WorkerAutoRenew'] = $value;
        $this->options['form_params']['worker_auto_renew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerAutoRenewPeriod($value)
    {
        $this->data['WorkerAutoRenewPeriod'] = $value;
        $this->options['form_params']['worker_auto_renew_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerPeriod($value)
    {
        $this->data['WorkerPeriod'] = $value;
        $this->options['form_params']['worker_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoginPassword($value)
    {
        $this->data['LoginPassword'] = $value;
        $this->options['form_params']['login_password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerSystemDiskSize($value)
    {
        $this->data['WorkerSystemDiskSize'] = $value;
        $this->options['form_params']['worker_system_disk_size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuPolicy($value)
    {
        $this->data['CpuPolicy'] = $value;
        $this->options['form_params']['cpu_policy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisableRollback($value)
    {
        $this->data['DisableRollback'] = $value;
        $this->options['form_params']['disable_rollback'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerInstanceChargeType($value)
    {
        $this->data['WorkerInstanceChargeType'] = $value;
        $this->options['form_params']['worker_instance_charge_type'] = $value;

        return $this;
    }
}

/**
 * @method string getWorkerDataDisk()
 * @method string getKeyPair()
 * @method string getCount()
 * @method string getWorkerSystemDiskCategory()
 * @method string getCloudMonitorFlags()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getUserData()
 * @method string getWorkerPeriodUnit()
 * @method string getWorkerAutoRenew()
 * @method string getWorkerAutoRenewPeriod()
 * @method string getWorkerPeriod()
 * @method string getLoginPassword()
 * @method string getWorkerSystemDiskSize()
 * @method string getCpuPolicy()
 * @method string getDisableRollback()
 * @method string getImageId()
 * @method string getWorkerInstanceChargeType()
 */
class ScaleOutCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerDataDisk($value)
    {
        $this->data['WorkerDataDisk'] = $value;
        $this->options['form_params']['worker_data_disk'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKeyPair($value)
    {
        $this->data['KeyPair'] = $value;
        $this->options['form_params']['key_pair'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCount($value)
    {
        $this->data['Count'] = $value;
        $this->options['form_params']['count'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerSystemDiskCategory($value)
    {
        $this->data['WorkerSystemDiskCategory'] = $value;
        $this->options['form_params']['worker_system_disk_category'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCloudMonitorFlags($value)
    {
        $this->data['CloudMonitorFlags'] = $value;
        $this->options['form_params']['cloud_monitor_flags'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserData($value)
    {
        $this->data['UserData'] = $value;
        $this->options['form_params']['user_data'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerPeriodUnit($value)
    {
        $this->data['WorkerPeriodUnit'] = $value;
        $this->options['form_params']['worker_period_unit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerAutoRenew($value)
    {
        $this->data['WorkerAutoRenew'] = $value;
        $this->options['form_params']['worker_auto_renew'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerAutoRenewPeriod($value)
    {
        $this->data['WorkerAutoRenewPeriod'] = $value;
        $this->options['form_params']['worker_auto_renew_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerPeriod($value)
    {
        $this->data['WorkerPeriod'] = $value;
        $this->options['form_params']['worker_period'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoginPassword($value)
    {
        $this->data['LoginPassword'] = $value;
        $this->options['form_params']['login_password'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerSystemDiskSize($value)
    {
        $this->data['WorkerSystemDiskSize'] = $value;
        $this->options['form_params']['worker_system_disk_size'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCpuPolicy($value)
    {
        $this->data['CpuPolicy'] = $value;
        $this->options['form_params']['cpu_policy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDisableRollback($value)
    {
        $this->data['DisableRollback'] = $value;
        $this->options['form_params']['disable_rollback'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageId($value)
    {
        $this->data['ImageId'] = $value;
        $this->options['form_params']['image_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkerInstanceChargeType($value)
    {
        $this->data['WorkerInstanceChargeType'] = $value;
        $this->options['form_params']['worker_instance_charge_type'] = $value;

        return $this;
    }
}

class StartWorkflow extends Roa
{
    /** @var string */
    public $pathPattern = '/gs/workflow';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UnInstallClusterAddons extends Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/uninstall';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateK8sClusterUserConfigExpire extends Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/user_config/expire';
}

/**
 * @method string getTemplate()
 * @method string getName()
 * @method string getDescription()
 * @method string getTemplateType()
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getTags()
 */
class UpdateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/templates/[TemplateId]';

    /** @var string */
    public $method = 'PUT';

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
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['description'] = $value;

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
 * @method string getComponentName()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersion()
 * @method string getNextVersion()
 */
class UpgradeCluster extends Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]/upgrade';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withComponentName($value)
    {
        $this->data['ComponentName'] = $value;
        $this->options['form_params']['component_name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVersion($value)
    {
        $this->data['Version'] = $value;
        $this->options['form_params']['version'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextVersion($value)
    {
        $this->data['NextVersion'] = $value;
        $this->options['form_params']['next_version'] = $value;

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
}
