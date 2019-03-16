<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

class V20151215Roa extends Roa
{
    /**
     * @var string
     */
    public $product = 'CS';

    /**
     * @var string
     */
    public $version = '2015-12-15';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cs';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateClusterKubenetesVersion extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/components/Kubernetes/upgrade';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterEndpoint extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/endpoint';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterUserKubeconfig extends V20151215Roa
{
    public $pathPattern = '/k8s/[ClusterId]/user_config';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterEndpoints extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/endpoints';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterLogs extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/logs';

    public $method = 'GET';
}

/**
 * @method string getPageSize()
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPageNumber()
 */
class DescribeClusterNodes extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/nodes';

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
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['query']['pageNumber'] = $value;

        return $this;
    }
}

class CheckAliyunCSServiceRole extends V20151215Roa
{
    public $pathPattern = '/aliyuncsrole/status';

    public $method = 'GET';
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RevokeTrigger extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ActionType]/';

    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateTrigger extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/trigger/';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getApplicationId()
 * @method $this withApplicationId($value)
 */
class DeleteTrigger extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ApplicationId]';

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
    public $pathPattern = '/clusters/[ClusterId]/trigger/[ActionType]/';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpgradeClusterAgent extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/upgrade';

}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateSharedServices extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[ProjectName]/upgrade';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateClusterDockerVersion extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/update_docker';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateController extends V20151215Roa
{
    public $pathPattern = '/controller/update/[ClusterId]';

}

class UpdateControllers extends V20151215Roa
{
    public $pathPattern = '/controller/update';

}

class UpdateRamPolicy extends V20151215Roa
{
    public $pathPattern = '/user/raminfo';

}

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateSharedService extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/update';

}

class RevokeTriggerHook extends V20151215Roa
{
    public $pathPattern = '/hook/trigger';

    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UnBindSLB extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/unbind_slb';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class UpdateAutoScale extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/autoscale/update';

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
    public $pathPattern = '/admin/clusters/[ClusterId]/agent/[Version]/modify';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RecoverController extends V20151215Roa
{
    public $pathPattern = '/controller/recover/[ClusterId]';

}

class RecoverControllers extends V20151215Roa
{
    public $pathPattern = '/controller/recover';

}

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ReDeploySharedService extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/redeploy';

}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class ResetClusterNode extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/instances/[InstanceId]/reset';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class RevokeClusterCerts extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/certs';

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
    public $pathPattern = '/admin/clusters/[ClusterId]/hub_login';

}

class ProbeTriggerHook extends V20151215Roa
{
    public $pathPattern = '/hook/trigger';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class PushMonitoringData extends V20151215Roa
{
    public $pathPattern = '/admin/monnitoring/[ClusterId]/push';

}

class DescribeUserResourceDomain extends V20151215Roa
{
    public $pathPattern = '/resource_domain';

    public $method = 'GET';
}

/**
 * @method string getAliuid()
 * @method $this withAliuid($value)
 */
class DescribeUserResources extends V20151215Roa
{
    public $pathPattern = '/ram/resources/[Aliuid]';

    public $method = 'GET';
}

class DescribeVxlanPortsRules extends V20151215Roa
{
    public $pathPattern = '/config/vxlan_ports';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class FixSecurityGroup extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/fix_sg';

}

/**
 * @method string getTriggerURL()
 * @method $this withTriggerURL($value)
 * @method string getSecret()
 * @method $this withSecret($value)
 */
class DescribeTriggerHookStatus extends V20151215Roa
{
    public $pathPattern = '/hook/trigger/status/[TriggerURL]/[Secret]/';

    public $method = 'GET';
}

class DescribeUserInstances extends V20151215Roa
{
    public $pathPattern = '/instances';

    public $method = 'GET';
}

class DescribeUserIoOptimizedInstances extends V20151215Roa
{
    public $pathPattern = '/instances/io_optimized';

    public $method = 'GET';
}

class DescribeUserQuota extends V20151215Roa
{
    public $pathPattern = '/quota';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterVxlanPortRule extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/vxlan_ports';

    public $method = 'GET';
}

class DescribeRamUsers extends V20151215Roa
{
    public $pathPattern = '/ram/users';

    public $method = 'GET';
}

class DescribeRegionImages extends V20151215Roa
{
    public $pathPattern = '/region/images';

    public $method = 'GET';
}

/**
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class DescribeRegionSharedServices extends V20151215Roa
{
    public $pathPattern = '/region/[Region]/shared_services';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterSharedServices extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/shared_services';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterSnapshots extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/snapshots';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterStatus extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/status';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterAutoScale extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/autoscale/';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCRL extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/crl';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterExtInfo extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/extinfo';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteAutoScale extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/autoscale/';

    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeployEMLSolution extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/solutions/deploy';

}

/**
 * @method string getSharedServiceId()
 * @method $this withSharedServiceId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeploySharedService extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/shared_services/[SharedServiceId]/deploy';

}

class DescribeAgentVersions extends V20151215Roa
{
    public $pathPattern = '/agent_version';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateAutoScale extends V20151215Roa
{
    public $pathPattern = '/cluster/[ClusterId]/autoscale/';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CreateMonitoringUser extends V20151215Roa
{
    public $pathPattern = '/admin/monnitoring/[ClusterId]/create_or_update';

}

class CreateTriggerHook extends V20151215Roa
{
    public $pathPattern = '/hook/trigger';

    public $method = 'PUT';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CleanUpETCD extends V20151215Roa
{
    public $pathPattern = '/clusters/clean-etcd';

}

/**
 * @method string getSlbID()
 * @method $this withSlbID($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BindSLB extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/slb/[SlbID]/bind';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CheckSecurityGroup extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/check_sg';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class CleanUpControllerEvent extends V20151215Roa
{
    public $pathPattern = '/controller/event_clean/[ClusterId]';

}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class BatchUpdateSharedService extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/shared_services/batch_update';

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
    public $pathPattern = '/clusters/[ClusterId]/ip/[Ip]';

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
    public $pathPattern = '/token/[Token]/nodes/[NodeId]/certs';

    public $method = 'GET';
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 */
class RevokeClusterToken extends V20151215Roa
{
    public $pathPattern = '/token/[Token]/revoke';

    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class AttachInstances extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/attach';

}

class DescribeUserServices extends V20151215Roa
{
    public $pathPattern = '/region/[RegionId]/services';

    public $method = 'GET';
}

class DescribeApiVersion extends V20151215Roa
{
    public $pathPattern = '/version';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteCluster extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]';

    public $method = 'DELETE';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterCerts extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]/certs';

    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeClusterDetail extends V20151215Roa
{
    public $pathPattern = '/clusters/[ClusterId]';

    public $method = 'GET';
}

/**
 * @method string getClusterType()
 * @method string getName()
 */
class DescribeClusters extends V20151215Roa
{
    public $pathPattern = '/clusters';

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
    public $pathPattern = '/clusters/[ClusterId]';

    public $method = 'PUT';
}

class CreateCluster extends V20151215Roa
{
    public $pathPattern = '/clusters';

}
