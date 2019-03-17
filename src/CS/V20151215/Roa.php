<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

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
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterUserKubeconfig extends V20151215Roa
{
    /** @var string */
    public $pathPattern = '/k8s/[ClusterId]/user_config';
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
