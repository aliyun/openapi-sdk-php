<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method ScaleOutCluster scaleOutCluster(array $options = [])
 * @method DescribeKubernetesVersionMetadata describeKubernetesVersionMetadata(array $options = [])
 * @method DeleteClusterTags deleteClusterTags(array $options = [])
 * @method ModifyClusterTags modifyClusterTags(array $options = [])
 * @method DeleteClusterNodes deleteClusterNodes(array $options = [])
 * @method DescribeEdgeClusterAttachScripts describeEdgeClusterAttachScripts(array $options = [])
 * @method UpdateClusterKubenetesVersion updateClusterKubenetesVersion(array $options = [])
 * @method DescribeClusterEndpoint describeClusterEndpoint(array $options = [])
 * @method DescribeClusterUserKubeconfig describeClusterUserKubeconfig(array $options = [])
 * @method DescribeClusterEndpoints describeClusterEndpoints(array $options = [])
 * @method DescribeClusterLogs describeClusterLogs(array $options = [])
 * @method DescribeClusterNodes describeClusterNodes(array $options = [])
 * @method CheckAliyunCSServiceRole checkAliyunCSServiceRole(array $options = [])
 * @method RevokeTrigger revokeTrigger(array $options = [])
 * @method CreateTrigger createTrigger(array $options = [])
 * @method DeleteTrigger deleteTrigger(array $options = [])
 * @method DescribeTrigger describeTrigger(array $options = [])
 * @method UpgradeClusterAgent upgradeClusterAgent(array $options = [])
 * @method UpdateSharedServices updateSharedServices(array $options = [])
 * @method UpdateClusterDockerVersion updateClusterDockerVersion(array $options = [])
 * @method UpdateController updateController(array $options = [])
 * @method UpdateControllers updateControllers(array $options = [])
 * @method UpdateRamPolicy updateRamPolicy(array $options = [])
 * @method UpdateSharedService updateSharedService(array $options = [])
 * @method RevokeTriggerHook revokeTriggerHook(array $options = [])
 * @method UnBindSLB unBindSLB(array $options = [])
 * @method UpdateAutoScale updateAutoScale(array $options = [])
 * @method UpdateClusterAgentVersion updateClusterAgentVersion(array $options = [])
 * @method RecoverController recoverController(array $options = [])
 * @method RecoverControllers recoverControllers(array $options = [])
 * @method ReDeploySharedService reDeploySharedService(array $options = [])
 * @method ResetClusterNode resetClusterNode(array $options = [])
 * @method RevokeClusterCerts revokeClusterCerts(array $options = [])
 * @method LoginAliyunHub loginAliyunHub(array $options = [])
 * @method ProbeTriggerHook probeTriggerHook(array $options = [])
 * @method PushMonitoringData pushMonitoringData(array $options = [])
 * @method DescribeUserResourceDomain describeUserResourceDomain(array $options = [])
 * @method DescribeUserResources describeUserResources(array $options = [])
 * @method DescribeVxlanPortsRules describeVxlanPortsRules(array $options = [])
 * @method FixSecurityGroup fixSecurityGroup(array $options = [])
 * @method DescribeTriggerHookStatus describeTriggerHookStatus(array $options = [])
 * @method DescribeUserInstances describeUserInstances(array $options = [])
 * @method DescribeUserIoOptimizedInstances describeUserIoOptimizedInstances(array $options = [])
 * @method DescribeUserQuota describeUserQuota(array $options = [])
 * @method DescribeClusterVxlanPortRule describeClusterVxlanPortRule(array $options = [])
 * @method DescribeRamUsers describeRamUsers(array $options = [])
 * @method DescribeRegionImages describeRegionImages(array $options = [])
 * @method DescribeRegionSharedServices describeRegionSharedServices(array $options = [])
 * @method DescribeClusterSharedServices describeClusterSharedServices(array $options = [])
 * @method DescribeClusterSnapshots describeClusterSnapshots(array $options = [])
 * @method DescribeClusterStatus describeClusterStatus(array $options = [])
 * @method DescribeClusterAutoScale describeClusterAutoScale(array $options = [])
 * @method DescribeClusterCRL describeClusterCRL(array $options = [])
 * @method DescribeClusterExtInfo describeClusterExtInfo(array $options = [])
 * @method DeleteAutoScale deleteAutoScale(array $options = [])
 * @method DeployEMLSolution deployEMLSolution(array $options = [])
 * @method DeploySharedService deploySharedService(array $options = [])
 * @method DescribeAgentVersions describeAgentVersions(array $options = [])
 * @method CreateAutoScale createAutoScale(array $options = [])
 * @method CreateMonitoringUser createMonitoringUser(array $options = [])
 * @method CreateTriggerHook createTriggerHook(array $options = [])
 * @method CleanUpETCD cleanUpETCD(array $options = [])
 * @method BindSLB bindSLB(array $options = [])
 * @method CheckSecurityGroup checkSecurityGroup(array $options = [])
 * @method CleanUpControllerEvent cleanUpControllerEvent(array $options = [])
 * @method BatchUpdateSharedService batchUpdateSharedService(array $options = [])
 * @method DeleteClusterNode deleteClusterNode(array $options = [])
 * @method DownloadClusterNodeCerts downloadClusterNodeCerts(array $options = [])
 * @method RevokeClusterToken revokeClusterToken(array $options = [])
 * @method AttachInstances attachInstances(array $options = [])
 * @method DescribeUserServices describeUserServices(array $options = [])
 * @method DescribeApiVersion describeApiVersion(array $options = [])
 * @method DeleteCluster deleteCluster(array $options = [])
 * @method DescribeClusterCerts describeClusterCerts(array $options = [])
 * @method DescribeClusterDetail describeClusterDetail(array $options = [])
 * @method DescribeClusters describeClusters(array $options = [])
 * @method ScaleCluster scaleCluster(array $options = [])
 * @method CreateCluster createCluster(array $options = [])
 */
class CSApiResolver
{
    use ApiResolverTrait;
}

class V20151215Roa extends Roa
{
    /** @var string */
    public $product = 'CS';

    /** @var string */
    public $version = '2015-12-15';

    /** @var string */
    public $serviceCode = 'cs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ScaleOutCluster extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/api/v2/clusters/[ClusterId]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterType()
 * @method string getMultiAZ()
 * @method string getKubernetesVersion()
 * @method string getRegion()
 */
class DescribeKubernetesVersionMetadata extends V20151215Roa
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

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterTags extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/tags';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ModifyClusterTags extends V20151215Roa
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
class DeleteClusterNodes extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/nodes';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNamePrefix()
 */
class DescribeEdgeClusterAttachScripts extends V20151215Roa
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
class UpdateClusterKubenetesVersion extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/components/Kubernetes/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterEndpoint extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/endpoint';
}

/**
 * @method string getPrivateIpAddress()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterUserKubeconfig extends V20151215Roa
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
class DescribeClusterEndpoints extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/endpoints';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterLogs extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/logs';
}

/**
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class DescribeClusterNodes extends V20151215Roa
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

class CheckAliyunCSServiceRole extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/aliyuncsrole/status';
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RevokeTrigger extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ActionType]/';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateTrigger extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/trigger/';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DeleteTrigger extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ApplicationId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeTrigger extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ActionType]/';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClusterAgent extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateSharedServices extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[ProjectName]/upgrade';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateClusterDockerVersion extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/update_docker';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateController extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/controller/update/[ClusterId]';

    /** @var string */
    public $method = 'POST';
}

class UpdateControllers extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/controller/update';

    /** @var string */
    public $method = 'POST';
}

class UpdateRamPolicy extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/user/raminfo';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateSharedService extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/update';

    /** @var string */
    public $method = 'POST';
}

class RevokeTriggerHook extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UnBindSLB extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/unbind_slb';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateAutoScale extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/autoscale/update';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class UpdateClusterAgentVersion extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/admin/clusters/[ClusterId]/agent/[Version]/modify';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RecoverController extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/controller/recover/[ClusterId]';

    /** @var string */
    public $method = 'POST';
}

class RecoverControllers extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/controller/recover';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ReDeploySharedService extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/redeploy';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResetClusterNode extends V20151215Roa
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
class RevokeClusterCerts extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/certs';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getVersion()
 * @method $this withVersion($value)
 */
class LoginAliyunHub extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/admin/clusters/[ClusterId]/hub_login';

    /** @var string */
    public $method = 'POST';
}

class ProbeTriggerHook extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class PushMonitoringData extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/admin/monnitoring/[ClusterId]/push';

    /** @var string */
    public $method = 'POST';
}

class DescribeUserResourceDomain extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/resource_domain';
}

/**
 * @method string getAliuid()
 * @method $this withAliuid($value)
 */
class DescribeUserResources extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/ram/resources/[Aliuid]';
}

class DescribeVxlanPortsRules extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/config/vxlan_ports';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class FixSecurityGroup extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/fix_sg';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTriggerURL()
 * @method $this withTriggerURL($value)
 * @method string getSecret()
 * @method $this withSecret($value)
 */
class DescribeTriggerHookStatus extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/hook/trigger/status/[TriggerURL]/[Secret]/';
}

class DescribeUserInstances extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/instances';
}

class DescribeUserIoOptimizedInstances extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/instances/io_optimized';
}

class DescribeUserQuota extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/quota';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterVxlanPortRule extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/vxlan_ports';
}

class DescribeRamUsers extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/ram/users';
}

class DescribeRegionImages extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/region/images';
}

/**
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeRegionSharedServices extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/region/[Region]/shared_services';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterSharedServices extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/shared_services';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterSnapshots extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/snapshots';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterStatus extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/status';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAutoScale extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/autoscale/';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCRL extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/crl';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterExtInfo extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/extinfo';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteAutoScale extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/autoscale/';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeployEMLSolution extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/solutions/deploy';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeploySharedService extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/deploy';

    /** @var string */
    public $method = 'POST';
}

class DescribeAgentVersions extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/agent_version';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateAutoScale extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/cluster/[ClusterId]/autoscale/';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateMonitoringUser extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/admin/monnitoring/[ClusterId]/create_or_update';

    /** @var string */
    public $method = 'POST';
}

class CreateTriggerHook extends V20151215Roa
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
class CleanUpETCD extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/clean-etcd';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getSlbID()
 * @method $this withSlbID($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BindSLB extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/slb/[SlbID]/bind';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CheckSecurityGroup extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/check_sg';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CleanUpControllerEvent extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/controller/event_clean/[ClusterId]';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BatchUpdateSharedService extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/shared_services/batch_update';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getReleaseInstance()
 * @method string getIp()
 * @method $this withIp($value)
 * @method string getForce()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteClusterNode extends V20151215Roa
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
 * @method string getNodeId()
 * @method $this withNodeId($value)
 * @method string getToken()
 * @method $this withToken($value)
 */
class DownloadClusterNodeCerts extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class RevokeClusterToken extends V20151215Roa
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
class AttachInstances extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/attach';

    /** @var string */
    public $method = 'POST';
}

class DescribeUserServices extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/region/[RegionId]/services';
}

class DescribeApiVersion extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/version';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCerts extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]/certs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';
}

/**
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends V20151215Roa
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
class ScaleCluster extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters/[ClusterId]';

    /** @var string */
    public $method = 'PUT';
}

class CreateCluster extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/clusters';

    /** @var string */
    public $method = 'POST';
}
