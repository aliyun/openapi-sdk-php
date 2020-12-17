<?php

namespace AlibabaCloud\Servicemesh\V20200111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddClusterIntoServiceMesh addClusterIntoServiceMesh(array $options = [])
 * @method AddVmAppToMesh addVmAppToMesh(array $options = [])
 * @method CreateServiceMesh createServiceMesh(array $options = [])
 * @method DeleteServiceMesh deleteServiceMesh(array $options = [])
 * @method DescribeCens describeCens(array $options = [])
 * @method DescribeClusterGrafana describeClusterGrafana(array $options = [])
 * @method DescribeClusterPrometheus describeClusterPrometheus(array $options = [])
 * @method DescribeClustersInServiceMesh describeClustersInServiceMesh(array $options = [])
 * @method DescribeGuestClusterAccessLogDashboards describeGuestClusterAccessLogDashboards(array $options = [])
 * @method DescribeIngressGateways describeIngressGateways(array $options = [])
 * @method DescribeServiceMeshDetail describeServiceMeshDetail(array $options = [])
 * @method DescribeServiceMeshes describeServiceMeshes(array $options = [])
 * @method DescribeServiceMeshKubeconfig describeServiceMeshKubeconfig(array $options = [])
 * @method DescribeUpgradeVersion describeUpgradeVersion(array $options = [])
 * @method GetDiagnosis getDiagnosis(array $options = [])
 * @method GetRegisteredServiceEndpoints getRegisteredServiceEndpoints(array $options = [])
 * @method GetRegisteredServiceNamespaces getRegisteredServiceNamespaces(array $options = [])
 * @method GetRegisteredServices getRegisteredServices(array $options = [])
 * @method GetServiceMeshSlb getServiceMeshSlb(array $options = [])
 * @method GetVmAppMeshInfo getVmAppMeshInfo(array $options = [])
 * @method GetVmMeta getVmMeta(array $options = [])
 * @method RemoveClusterFromServiceMesh removeClusterFromServiceMesh(array $options = [])
 * @method RemoveVmAppFromMesh removeVmAppFromMesh(array $options = [])
 * @method RunDiagnosis runDiagnosis(array $options = [])
 * @method UpdateIstioInjectionConfig updateIstioInjectionConfig(array $options = [])
 * @method UpdateMeshFeature updateMeshFeature(array $options = [])
 * @method UpgradeMeshVersion upgradeMeshVersion(array $options = [])
 */
class ServicemeshApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'servicemesh';

    /** @var string */
    public $version = '2020-01-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'servicemesh';
}

/**
 * @method string getClusterId()
 * @method string getServiceMeshId()
 */
class AddClusterIntoServiceMesh extends Rpc
{

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
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceAccount()
 * @method $this withServiceAccount($value)
 * @method string getAnnotations()
 * @method $this withAnnotations($value)
 * @method string getPorts()
 * @method $this withPorts($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getUseWorkload()
 * @method $this withUseWorkload($value)
 * @method string getIps()
 * @method $this withIps($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class AddVmAppToMesh extends Rpc
{
}

/**
 * @method string getProxyRequestCPU()
 * @method string getOPALimitCPU()
 * @method string getOpenAgentPolicy()
 * @method string getOpaEnabled()
 * @method string getProxyLimitMemory()
 * @method string getStrictMTLS()
 * @method string getOPALogLevel()
 * @method string getExcludeIPRanges()
 * @method string getIstioVersion()
 * @method string getTracing()
 * @method string getIncludeIPRanges()
 * @method string getExcludeInboundPorts()
 * @method string getOPALimitMemory()
 * @method string getVSwitches()
 * @method string getCADisableSecretAutoGeneration()
 * @method string getCAListenedNamespaces()
 * @method string getProxyLimitCPU()
 * @method string getProxyRequestMemory()
 * @method string getName()
 * @method string getTelemetry()
 * @method string getOPARequestCPU()
 * @method string getOPARequestMemory()
 * @method string getEnableAudit()
 * @method string getClusterDomain()
 * @method string getLocalityLoadBalancing()
 * @method string getApiServerPublicEip()
 * @method string getTraceSampling()
 * @method string getAppNamespaces()
 * @method string getPilotPublicEip()
 * @method string getAuditProject()
 * @method string getOutboundTrafficPolicy()
 * @method string getVpcId()
 * @method string getExcludeOutboundPorts()
 */
class CreateServiceMesh extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyRequestCPU($value)
    {
        $this->data['ProxyRequestCPU'] = $value;
        $this->options['form_params']['ProxyRequestCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPALimitCPU($value)
    {
        $this->data['OPALimitCPU'] = $value;
        $this->options['form_params']['OPALimitCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenAgentPolicy($value)
    {
        $this->data['OpenAgentPolicy'] = $value;
        $this->options['form_params']['OpenAgentPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpaEnabled($value)
    {
        $this->data['OpaEnabled'] = $value;
        $this->options['form_params']['OpaEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyLimitMemory($value)
    {
        $this->data['ProxyLimitMemory'] = $value;
        $this->options['form_params']['ProxyLimitMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStrictMTLS($value)
    {
        $this->data['StrictMTLS'] = $value;
        $this->options['form_params']['StrictMTLS'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPALogLevel($value)
    {
        $this->data['OPALogLevel'] = $value;
        $this->options['form_params']['OPALogLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeIPRanges($value)
    {
        $this->data['ExcludeIPRanges'] = $value;
        $this->options['form_params']['ExcludeIPRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIstioVersion($value)
    {
        $this->data['IstioVersion'] = $value;
        $this->options['form_params']['IstioVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTracing($value)
    {
        $this->data['Tracing'] = $value;
        $this->options['form_params']['Tracing'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeIPRanges($value)
    {
        $this->data['IncludeIPRanges'] = $value;
        $this->options['form_params']['IncludeIPRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeInboundPorts($value)
    {
        $this->data['ExcludeInboundPorts'] = $value;
        $this->options['form_params']['ExcludeInboundPorts'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPALimitMemory($value)
    {
        $this->data['OPALimitMemory'] = $value;
        $this->options['form_params']['OPALimitMemory'] = $value;

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
    public function withCADisableSecretAutoGeneration($value)
    {
        $this->data['CADisableSecretAutoGeneration'] = $value;
        $this->options['form_params']['CADisableSecretAutoGeneration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCAListenedNamespaces($value)
    {
        $this->data['CAListenedNamespaces'] = $value;
        $this->options['form_params']['CAListenedNamespaces'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyLimitCPU($value)
    {
        $this->data['ProxyLimitCPU'] = $value;
        $this->options['form_params']['ProxyLimitCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyRequestMemory($value)
    {
        $this->data['ProxyRequestMemory'] = $value;
        $this->options['form_params']['ProxyRequestMemory'] = $value;

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
    public function withTelemetry($value)
    {
        $this->data['Telemetry'] = $value;
        $this->options['form_params']['Telemetry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPARequestCPU($value)
    {
        $this->data['OPARequestCPU'] = $value;
        $this->options['form_params']['OPARequestCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPARequestMemory($value)
    {
        $this->data['OPARequestMemory'] = $value;
        $this->options['form_params']['OPARequestMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAudit($value)
    {
        $this->data['EnableAudit'] = $value;
        $this->options['form_params']['EnableAudit'] = $value;

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
    public function withLocalityLoadBalancing($value)
    {
        $this->data['LocalityLoadBalancing'] = $value;
        $this->options['form_params']['LocalityLoadBalancing'] = $value;

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
    public function withTraceSampling($value)
    {
        $this->data['TraceSampling'] = $value;
        $this->options['form_params']['TraceSampling'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppNamespaces($value)
    {
        $this->data['AppNamespaces'] = $value;
        $this->options['form_params']['AppNamespaces'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPilotPublicEip($value)
    {
        $this->data['PilotPublicEip'] = $value;
        $this->options['form_params']['PilotPublicEip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditProject($value)
    {
        $this->data['AuditProject'] = $value;
        $this->options['form_params']['AuditProject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutboundTrafficPolicy($value)
    {
        $this->data['OutboundTrafficPolicy'] = $value;
        $this->options['form_params']['OutboundTrafficPolicy'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeOutboundPorts($value)
    {
        $this->data['ExcludeOutboundPorts'] = $value;
        $this->options['form_params']['ExcludeOutboundPorts'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceMeshId()
 * @method string getForce()
 */
class DeleteServiceMesh extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

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
        $this->options['form_params']['Force'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeCens extends Rpc
{
}

/**
 * @method string getK8sClusterId()
 * @method $this withK8sClusterId($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeClusterGrafana extends Rpc
{
}

/**
 * @method string getK8sClusterId()
 * @method $this withK8sClusterId($value)
 * @method string getK8sClusterRegionId()
 * @method $this withK8sClusterRegionId($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeClusterPrometheus extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeClustersInServiceMesh extends Rpc
{
}

/**
 * @method string getK8sClusterId()
 */
class DescribeGuestClusterAccessLogDashboards extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withK8sClusterId($value)
    {
        $this->data['K8sClusterId'] = $value;
        $this->options['form_params']['K8sClusterId'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeIngressGateways extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getServiceMeshId()
 */
class DescribeServiceMeshDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }
}

class DescribeServiceMeshes extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPrivateIpAddress()
 * @method $this withPrivateIpAddress($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeServiceMeshKubeconfig extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class DescribeUpgradeVersion extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class GetDiagnosis extends Rpc
{
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class GetRegisteredServiceEndpoints extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 */
class GetRegisteredServiceNamespaces extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class GetRegisteredServices extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class GetServiceMeshSlb extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class GetVmAppMeshInfo extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getServiceAccount()
 * @method $this withServiceAccount($value)
 * @method string getTrustDomain()
 * @method $this withTrustDomain($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class GetVmMeta extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getClusterId()
 * @method string getServiceMeshId()
 */
class RemoveClusterFromServiceMesh extends Rpc
{

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
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 */
class RemoveVmAppFromMesh extends Rpc
{
}

/**
 * @method string getServiceMeshId()
 */
class RunDiagnosis extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }
}

/**
 * @method string getEnableIstioInjection()
 * @method string getNamespace()
 * @method string getServiceMeshId()
 */
class UpdateIstioInjectionConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableIstioInjection($value)
    {
        $this->data['EnableIstioInjection'] = $value;
        $this->options['form_params']['EnableIstioInjection'] = $value;

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
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }
}

/**
 * @method string getProxyRequestCPU()
 * @method string getOPALimitCPU()
 * @method string getOpenAgentPolicy()
 * @method string getOpaEnabled()
 * @method string getProxyLimitMemory()
 * @method string getCniExcludeNamespaces()
 * @method string getOPALogLevel()
 * @method string getCustomizedZipkin()
 * @method string getSidecarInjectorRequestCPU()
 * @method string getCniEnabled()
 * @method string getTracing()
 * @method string getIncludeIPRanges()
 * @method string getOPALimitMemory()
 * @method string getCADisableSecretAutoGeneration()
 * @method string getCAListenedNamespaces()
 * @method string getProxyLimitCPU()
 * @method string getProxyRequestMemory()
 * @method string getTelemetry()
 * @method string getOPARequestCPU()
 * @method string getSidecarInjectorWebhookAsYaml()
 * @method string getOPARequestMemory()
 * @method string getAutoInjectionPolicyEnabled()
 * @method string getSidecarInjectorLimitMemory()
 * @method string getEnableAudit()
 * @method string getClusterDomain()
 * @method string getSidecarInjectorRequestMemory()
 * @method string getServiceMeshId()
 * @method string getLocalityLoadBalancing()
 * @method string getSidecarInjectorLimitCPU()
 * @method string getTraceSampling()
 * @method string getHttp10Enabled()
 * @method string getAppNamespaces()
 * @method string getPilotPublicEip()
 * @method string getAuditProject()
 * @method string getOutboundTrafficPolicy()
 * @method string getEnableNamespacesByDefault()
 */
class UpdateMeshFeature extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyRequestCPU($value)
    {
        $this->data['ProxyRequestCPU'] = $value;
        $this->options['form_params']['ProxyRequestCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPALimitCPU($value)
    {
        $this->data['OPALimitCPU'] = $value;
        $this->options['form_params']['OPALimitCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpenAgentPolicy($value)
    {
        $this->data['OpenAgentPolicy'] = $value;
        $this->options['form_params']['OpenAgentPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpaEnabled($value)
    {
        $this->data['OpaEnabled'] = $value;
        $this->options['form_params']['OpaEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyLimitMemory($value)
    {
        $this->data['ProxyLimitMemory'] = $value;
        $this->options['form_params']['ProxyLimitMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCniExcludeNamespaces($value)
    {
        $this->data['CniExcludeNamespaces'] = $value;
        $this->options['form_params']['CniExcludeNamespaces'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPALogLevel($value)
    {
        $this->data['OPALogLevel'] = $value;
        $this->options['form_params']['OPALogLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCustomizedZipkin($value)
    {
        $this->data['CustomizedZipkin'] = $value;
        $this->options['form_params']['CustomizedZipkin'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSidecarInjectorRequestCPU($value)
    {
        $this->data['SidecarInjectorRequestCPU'] = $value;
        $this->options['form_params']['SidecarInjectorRequestCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCniEnabled($value)
    {
        $this->data['CniEnabled'] = $value;
        $this->options['form_params']['CniEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTracing($value)
    {
        $this->data['Tracing'] = $value;
        $this->options['form_params']['Tracing'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIncludeIPRanges($value)
    {
        $this->data['IncludeIPRanges'] = $value;
        $this->options['form_params']['IncludeIPRanges'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPALimitMemory($value)
    {
        $this->data['OPALimitMemory'] = $value;
        $this->options['form_params']['OPALimitMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCADisableSecretAutoGeneration($value)
    {
        $this->data['CADisableSecretAutoGeneration'] = $value;
        $this->options['form_params']['CADisableSecretAutoGeneration'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCAListenedNamespaces($value)
    {
        $this->data['CAListenedNamespaces'] = $value;
        $this->options['form_params']['CAListenedNamespaces'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyLimitCPU($value)
    {
        $this->data['ProxyLimitCPU'] = $value;
        $this->options['form_params']['ProxyLimitCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyRequestMemory($value)
    {
        $this->data['ProxyRequestMemory'] = $value;
        $this->options['form_params']['ProxyRequestMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTelemetry($value)
    {
        $this->data['Telemetry'] = $value;
        $this->options['form_params']['Telemetry'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPARequestCPU($value)
    {
        $this->data['OPARequestCPU'] = $value;
        $this->options['form_params']['OPARequestCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSidecarInjectorWebhookAsYaml($value)
    {
        $this->data['SidecarInjectorWebhookAsYaml'] = $value;
        $this->options['form_params']['SidecarInjectorWebhookAsYaml'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOPARequestMemory($value)
    {
        $this->data['OPARequestMemory'] = $value;
        $this->options['form_params']['OPARequestMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoInjectionPolicyEnabled($value)
    {
        $this->data['AutoInjectionPolicyEnabled'] = $value;
        $this->options['form_params']['AutoInjectionPolicyEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSidecarInjectorLimitMemory($value)
    {
        $this->data['SidecarInjectorLimitMemory'] = $value;
        $this->options['form_params']['SidecarInjectorLimitMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableAudit($value)
    {
        $this->data['EnableAudit'] = $value;
        $this->options['form_params']['EnableAudit'] = $value;

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
    public function withSidecarInjectorRequestMemory($value)
    {
        $this->data['SidecarInjectorRequestMemory'] = $value;
        $this->options['form_params']['SidecarInjectorRequestMemory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceMeshId($value)
    {
        $this->data['ServiceMeshId'] = $value;
        $this->options['form_params']['ServiceMeshId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocalityLoadBalancing($value)
    {
        $this->data['LocalityLoadBalancing'] = $value;
        $this->options['form_params']['LocalityLoadBalancing'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSidecarInjectorLimitCPU($value)
    {
        $this->data['SidecarInjectorLimitCPU'] = $value;
        $this->options['form_params']['SidecarInjectorLimitCPU'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTraceSampling($value)
    {
        $this->data['TraceSampling'] = $value;
        $this->options['form_params']['TraceSampling'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHttp10Enabled($value)
    {
        $this->data['Http10Enabled'] = $value;
        $this->options['form_params']['Http10Enabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppNamespaces($value)
    {
        $this->data['AppNamespaces'] = $value;
        $this->options['form_params']['AppNamespaces'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPilotPublicEip($value)
    {
        $this->data['PilotPublicEip'] = $value;
        $this->options['form_params']['PilotPublicEip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuditProject($value)
    {
        $this->data['AuditProject'] = $value;
        $this->options['form_params']['AuditProject'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutboundTrafficPolicy($value)
    {
        $this->data['OutboundTrafficPolicy'] = $value;
        $this->options['form_params']['OutboundTrafficPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableNamespacesByDefault($value)
    {
        $this->data['EnableNamespacesByDefault'] = $value;
        $this->options['form_params']['EnableNamespacesByDefault'] = $value;

        return $this;
    }
}

/**
 * @method string getServiceMeshId()
 * @method $this withServiceMeshId($value)
 */
class UpgradeMeshVersion extends Rpc
{
}
