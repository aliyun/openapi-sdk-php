<?php

namespace AlibabaCloud\Adcp\V20220101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachClusterToHub attachClusterToHub(array $options = [])
 * @method CreateHubCluster createHubCluster(array $options = [])
 * @method DeleteHubCluster deleteHubCluster(array $options = [])
 * @method DeletePolicyInstance deletePolicyInstance(array $options = [])
 * @method DeleteUserPermission deleteUserPermission(array $options = [])
 * @method DeployPolicyInstance deployPolicyInstance(array $options = [])
 * @method DescribeHubClusterDetails describeHubClusterDetails(array $options = [])
 * @method DescribeHubClusterKubeconfig describeHubClusterKubeconfig(array $options = [])
 * @method DescribeHubClusterLogs describeHubClusterLogs(array $options = [])
 * @method DescribeHubClusters describeHubClusters(array $options = [])
 * @method DescribeManagedClusters describeManagedClusters(array $options = [])
 * @method DescribePolicies describePolicies(array $options = [])
 * @method DescribePolicyDetails describePolicyDetails(array $options = [])
 * @method DescribePolicyGovernanceInCluster describePolicyGovernanceInCluster(array $options = [])
 * @method DescribePolicyInstances describePolicyInstances(array $options = [])
 * @method DescribePolicyInstancesStatus describePolicyInstancesStatus(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeUserPermissions describeUserPermissions(array $options = [])
 * @method DetachClusterFromHub detachClusterFromHub(array $options = [])
 * @method GrantUserPermission grantUserPermission(array $options = [])
 * @method GrantUserPermissions grantUserPermissions(array $options = [])
 * @method UpdateHubClusterFeature updateHubClusterFeature(array $options = [])
 * @method UpdateUserPermission updateUserPermission(array $options = [])
 */
class AdcpApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'adcp';

    /** @var string */
    public $version = '2022-01-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'adcp';
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterIds()
 * @method string getAttachToMesh()
 * @method $this withAttachToMesh($value)
 */
class AttachClusterToHub extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterIds($value)
    {
        $this->data['ClusterIds'] = $value;
        $this->options['form_params']['ClusterIds'] = $value;

        return $this;
    }
}

/**
 * @method string getAuditLogProject()
 * @method string getLoadBalancerSpec()
 * @method string getKubernetesVersion()
 * @method string getProfile()
 * @method string getVSwitches()
 * @method string getControlPlaneLogProject()
 * @method string getLoadBalancerId()
 * @method string getClusterSpec()
 * @method string getName()
 * @method string getClusterDomain()
 * @method string getControlPlaneLogTTL()
 * @method string getWorkflowUnits()
 * @method string getAuditLogStoreTTL()
 * @method string getIPStack()
 * @method string getControlPlaneLogEnabled()
 * @method string getArgoServerEnabled()
 * @method string getWorkflowScheduleMode()
 * @method string getApiServerPublicEip()
 * @method string getAuditLogEnabled()
 * @method string getSecurityGroupIDs()
 * @method string getPriceLimit()
 * @method string getIsEnterpriseSecurityGroup()
 * @method string getVpcId()
 */
class CreateHubCluster extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditLogProject($value)
    {
        $this->data['AuditLogProject'] = $value;
        $this->options['form_params']['AuditLogProject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerSpec($value)
    {
        $this->data['LoadBalancerSpec'] = $value;
        $this->options['form_params']['LoadBalancerSpec'] = $value;

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
        $this->options['form_params']['KubernetesVersion'] = $value;

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
        $this->options['form_params']['Profile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVSwitches($value)
    {
        $this->data['VSwitches'] = $value;
        $this->options['form_params']['VSwitches'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withControlPlaneLogProject($value)
    {
        $this->data['ControlPlaneLogProject'] = $value;
        $this->options['form_params']['ControlPlaneLogProject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerId($value)
    {
        $this->data['LoadBalancerId'] = $value;
        $this->options['form_params']['LoadBalancerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterSpec($value)
    {
        $this->data['ClusterSpec'] = $value;
        $this->options['form_params']['ClusterSpec'] = $value;

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
    public function withClusterDomain($value)
    {
        $this->data['ClusterDomain'] = $value;
        $this->options['form_params']['ClusterDomain'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withControlPlaneLogTTL($value)
    {
        $this->data['ControlPlaneLogTTL'] = $value;
        $this->options['form_params']['ControlPlaneLogTTL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkflowUnits($value)
    {
        $this->data['WorkflowUnits'] = $value;
        $this->options['form_params']['WorkflowUnits'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditLogStoreTTL($value)
    {
        $this->data['AuditLogStoreTTL'] = $value;
        $this->options['form_params']['AuditLogStoreTTL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIPStack($value)
    {
        $this->data['IPStack'] = $value;
        $this->options['form_params']['IPStack'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withControlPlaneLogEnabled($value)
    {
        $this->data['ControlPlaneLogEnabled'] = $value;
        $this->options['form_params']['ControlPlaneLogEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArgoServerEnabled($value)
    {
        $this->data['ArgoServerEnabled'] = $value;
        $this->options['form_params']['ArgoServerEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWorkflowScheduleMode($value)
    {
        $this->data['WorkflowScheduleMode'] = $value;
        $this->options['form_params']['WorkflowScheduleMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withApiServerPublicEip($value)
    {
        $this->data['ApiServerPublicEip'] = $value;
        $this->options['form_params']['ApiServerPublicEip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditLogEnabled($value)
    {
        $this->data['AuditLogEnabled'] = $value;
        $this->options['form_params']['AuditLogEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityGroupIDs($value)
    {
        $this->data['SecurityGroupIDs'] = $value;
        $this->options['form_params']['SecurityGroupIDs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPriceLimit($value)
    {
        $this->data['PriceLimit'] = $value;
        $this->options['form_params']['PriceLimit'] = $value;

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
        $this->options['form_params']['IsEnterpriseSecurityGroup'] = $value;

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
        $this->options['form_params']['VpcId'] = $value;

        return $this;
    }
}

/**
 * @method string getRetainResources()
 * @method $this withRetainResources($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteHubCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DeletePolicyInstance extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DeleteUserPermission extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPolicyAction()
 * @method $this withPolicyAction($value)
 * @method string getClusterIds()
 * @method $this withClusterIds($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 * @method string getNamespaces()
 * @method $this withNamespaces($value)
 */
class DeployPolicyInstance extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeHubClusterDetails extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 */
class DescribeHubClusterKubeconfig extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeHubClusterLogs extends Rpc
{
}

/**
 * @method string getProfile()
 * @method $this withProfile($value)
 */
class DescribeHubClusters extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeManagedClusters extends Rpc
{
}

class DescribePolicies extends Rpc
{
}

/**
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DescribePolicyDetails extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribePolicyGovernanceInCluster extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class DescribePolicyInstances extends Rpc
{
}

/**
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribePolicyInstancesStatus extends Rpc
{
}

/**
 * @method string getLanguage()
 * @method $this withLanguage($value)
 */
class DescribeRegions extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class DescribeUserPermissions extends Rpc
{
}

/**
 * @method string getDetachFromMesh()
 * @method $this withDetachFromMesh($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getClusterIds()
 */
class DetachClusterFromHub extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClusterIds($value)
    {
        $this->data['ClusterIds'] = $value;
        $this->options['form_params']['ClusterIds'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIsRamRole()
 * @method $this withIsRamRole($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GrantUserPermission extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPermissions()
 * @method $this withPermissions($value)
 */
class GrantUserPermissions extends Rpc
{
}

/**
 * @method string getAccessControlList()
 * @method $this withAccessControlList($value)
 * @method string getMonitorEnabled()
 * @method $this withMonitorEnabled($value)
 * @method string getDeletionProtection()
 * @method $this withDeletionProtection($value)
 * @method string getEnableMesh()
 * @method $this withEnableMesh($value)
 * @method string getArgoCDHAEnabled()
 * @method $this withArgoCDHAEnabled($value)
 * @method string getArgoCDEnabled()
 * @method $this withArgoCDEnabled($value)
 * @method string getVSwitches()
 * @method $this withVSwitches($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPublicAccessEnabled()
 * @method $this withPublicAccessEnabled($value)
 * @method string getPublicApiServerEnabled()
 * @method $this withPublicApiServerEnabled($value)
 * @method string getArgoServerEnabled()
 * @method $this withArgoServerEnabled($value)
 * @method string getWorkflowScheduleMode()
 * @method $this withWorkflowScheduleMode($value)
 * @method string getAuditLogEnabled()
 * @method $this withAuditLogEnabled($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getPriceLimit()
 * @method $this withPriceLimit($value)
 * @method string getApiServerEipId()
 * @method $this withApiServerEipId($value)
 */
class UpdateHubClusterFeature extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getRoleType()
 * @method $this withRoleType($value)
 * @method string getRoleName()
 * @method $this withRoleName($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class UpdateUserPermission extends Rpc
{
}
