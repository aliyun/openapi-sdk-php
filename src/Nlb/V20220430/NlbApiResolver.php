<?php

namespace AlibabaCloud\Nlb\V20220430;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddServersToServerGroup addServersToServerGroup(array $options = [])
 * @method AssociateAdditionalCertificatesWithListener associateAdditionalCertificatesWithListener(array $options = [])
 * @method AttachCommonBandwidthPackageToLoadBalancer attachCommonBandwidthPackageToLoadBalancer(array $options = [])
 * @method CancelShiftLoadBalancerZones cancelShiftLoadBalancerZones(array $options = [])
 * @method CreateListener createListener(array $options = [])
 * @method CreateLoadBalancer createLoadBalancer(array $options = [])
 * @method CreateSecurityPolicy createSecurityPolicy(array $options = [])
 * @method CreateServerGroup createServerGroup(array $options = [])
 * @method DeleteListener deleteListener(array $options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer(array $options = [])
 * @method DeleteSecurityPolicy deleteSecurityPolicy(array $options = [])
 * @method DeleteServerGroup deleteServerGroup(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DetachCommonBandwidthPackageFromLoadBalancer detachCommonBandwidthPackageFromLoadBalancer(array $options = [])
 * @method DisableLoadBalancerIpv6Internet disableLoadBalancerIpv6Internet(array $options = [])
 * @method DisassociateAdditionalCertificatesWithListener disassociateAdditionalCertificatesWithListener(array $options = [])
 * @method EnableLoadBalancerIpv6Internet enableLoadBalancerIpv6Internet(array $options = [])
 * @method GetJobStatus getJobStatus(array $options = [])
 * @method GetListenerAttribute getListenerAttribute(array $options = [])
 * @method GetListenerHealthStatus getListenerHealthStatus(array $options = [])
 * @method GetLoadBalancerAttribute getLoadBalancerAttribute(array $options = [])
 * @method ListListenerCertificates listListenerCertificates(array $options = [])
 * @method ListListeners listListeners(array $options = [])
 * @method ListLoadBalancers listLoadBalancers(array $options = [])
 * @method ListSecurityPolicy listSecurityPolicy(array $options = [])
 * @method ListServerGroups listServerGroups(array $options = [])
 * @method ListServerGroupServers listServerGroupServers(array $options = [])
 * @method ListSystemSecurityPolicy listSystemSecurityPolicy(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method LoadBalancerJoinSecurityGroup loadBalancerJoinSecurityGroup(array $options = [])
 * @method LoadBalancerLeaveSecurityGroup loadBalancerLeaveSecurityGroup(array $options = [])
 * @method MoveResourceGroup moveResourceGroup(array $options = [])
 * @method RemoveServersFromServerGroup removeServersFromServerGroup(array $options = [])
 * @method StartListener startListener(array $options = [])
 * @method StartShiftLoadBalancerZones startShiftLoadBalancerZones(array $options = [])
 * @method StopListener stopListener(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateListenerAttribute updateListenerAttribute(array $options = [])
 * @method UpdateLoadBalancerAddressTypeConfig updateLoadBalancerAddressTypeConfig(array $options = [])
 * @method UpdateLoadBalancerAttribute updateLoadBalancerAttribute(array $options = [])
 * @method UpdateLoadBalancerProtection updateLoadBalancerProtection(array $options = [])
 * @method UpdateLoadBalancerZones updateLoadBalancerZones(array $options = [])
 * @method UpdateSecurityPolicyAttribute updateSecurityPolicyAttribute(array $options = [])
 * @method UpdateServerGroupAttribute updateServerGroupAttribute(array $options = [])
 * @method UpdateServerGroupServersAttribute updateServerGroupServersAttribute(array $options = [])
 */
class NlbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Nlb';

    /** @var string */
    public $version = '2022-04-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'nlb';
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getServers()
 * @method string getDryRun()
 */
class AddServersToServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServers($value)
    {
        $this->data['Servers'] = $value;
        $this->options['form_params']['Servers'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getListenerId()
 * @method string getDryRun()
 * @method array getAdditionalCertificateIds()
 */
class AssociateAdditionalCertificatesWithListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $additionalCertificateIds
     *
     * @return $this
     */
	public function withAdditionalCertificateIds(array $additionalCertificateIds)
	{
	    $this->data['AdditionalCertificateIds'] = $additionalCertificateIds;
		foreach ($additionalCertificateIds as $i => $iValue) {
			$this->options['form_params']['AdditionalCertificateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getBandwidthPackageId()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class AttachCommonBandwidthPackageToLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidthPackageId($value)
    {
        $this->data['BandwidthPackageId'] = $value;
        $this->options['form_params']['BandwidthPackageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method array getZoneMappings()
 * @method string getLoadBalancerId()
 */
class CancelShiftLoadBalancerZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $zoneMappings
     *
     * @return $this
     */
	public function withZoneMappings(array $zoneMappings)
	{
	    $this->data['ZoneMappings'] = $zoneMappings;
		foreach ($zoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

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
}

/**
 * @method array getCaCertificateIds()
 * @method string getStartPort()
 * @method string getClientToken()
 * @method string getSecSensorEnabled()
 * @method string getAlpnPolicy()
 * @method string getMss()
 * @method string getServerGroupId()
 * @method array getCertificateIds()
 * @method array getTag()
 * @method string getAlpnEnabled()
 * @method string getEndPort()
 * @method string getListenerPort()
 * @method string getDryRun()
 * @method string getProxyProtocolEnabled()
 * @method string getCps()
 * @method string getListenerProtocol()
 * @method string getSecurityPolicyId()
 * @method string getIdleTimeout()
 * @method string getLoadBalancerId()
 * @method string getListenerDescription()
 * @method string getCaEnabled()
 */
class CreateListener extends Rpc
{

    /**
     * @param array $caCertificateIds
     *
     * @return $this
     */
	public function withCaCertificateIds(array $caCertificateIds)
	{
	    $this->data['CaCertificateIds'] = $caCertificateIds;
		foreach ($caCertificateIds as $i => $iValue) {
			$this->options['form_params']['CaCertificateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartPort($value)
    {
        $this->data['StartPort'] = $value;
        $this->options['form_params']['StartPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecSensorEnabled($value)
    {
        $this->data['SecSensorEnabled'] = $value;
        $this->options['form_params']['SecSensorEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlpnPolicy($value)
    {
        $this->data['AlpnPolicy'] = $value;
        $this->options['form_params']['AlpnPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMss($value)
    {
        $this->data['Mss'] = $value;
        $this->options['form_params']['Mss'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param array $certificateIds
     *
     * @return $this
     */
	public function withCertificateIds(array $certificateIds)
	{
	    $this->data['CertificateIds'] = $certificateIds;
		foreach ($certificateIds as $i => $iValue) {
			$this->options['form_params']['CertificateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlpnEnabled($value)
    {
        $this->data['AlpnEnabled'] = $value;
        $this->options['form_params']['AlpnEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndPort($value)
    {
        $this->data['EndPort'] = $value;
        $this->options['form_params']['EndPort'] = $value;

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
        $this->options['form_params']['ListenerPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyProtocolEnabled($value)
    {
        $this->data['ProxyProtocolEnabled'] = $value;
        $this->options['form_params']['ProxyProtocolEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCps($value)
    {
        $this->data['Cps'] = $value;
        $this->options['form_params']['Cps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerProtocol($value)
    {
        $this->data['ListenerProtocol'] = $value;
        $this->options['form_params']['ListenerProtocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicyId($value)
    {
        $this->data['SecurityPolicyId'] = $value;
        $this->options['form_params']['SecurityPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdleTimeout($value)
    {
        $this->data['IdleTimeout'] = $value;
        $this->options['form_params']['IdleTimeout'] = $value;

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
    public function withListenerDescription($value)
    {
        $this->data['ListenerDescription'] = $value;
        $this->options['form_params']['ListenerDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaEnabled($value)
    {
        $this->data['CaEnabled'] = $value;
        $this->options['form_params']['CaEnabled'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getModificationProtectionConfig()
 * @method string getLoadBalancerBillingConfig()
 * @method string getBizFlag()
 * @method string getDeletionProtectionConfig()
 * @method string getAddressIpVersion()
 * @method string getResourceGroupId()
 * @method string getLoadBalancerName()
 * @method string getAddressType()
 * @method array getTag()
 * @method string getBandwidthPackageId()
 * @method string getDryRun()
 * @method string getZoneMappings()
 * @method array getSecurityGroupIds()
 * @method string getLoadBalancerType()
 * @method string getVpcId()
 */
class CreateLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModificationProtectionConfig($value)
    {
        $this->data['ModificationProtectionConfig'] = $value;
        $this->options['form_params']['ModificationProtectionConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerBillingConfig($value)
    {
        $this->data['LoadBalancerBillingConfig'] = $value;
        $this->options['form_params']['LoadBalancerBillingConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizFlag($value)
    {
        $this->data['BizFlag'] = $value;
        $this->options['form_params']['BizFlag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeletionProtectionConfig($value)
    {
        $this->data['DeletionProtectionConfig'] = $value;
        $this->options['form_params']['DeletionProtectionConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressIpVersion($value)
    {
        $this->data['AddressIpVersion'] = $value;
        $this->options['form_params']['AddressIpVersion'] = $value;

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
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerName($value)
    {
        $this->data['LoadBalancerName'] = $value;
        $this->options['form_params']['LoadBalancerName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressType($value)
    {
        $this->data['AddressType'] = $value;
        $this->options['form_params']['AddressType'] = $value;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidthPackageId($value)
    {
        $this->data['BandwidthPackageId'] = $value;
        $this->options['form_params']['BandwidthPackageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withZoneMappings($value)
    {
        $this->data['ZoneMappings'] = $value;
        $this->options['form_params']['ZoneMappings'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['form_params']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerType($value)
    {
        $this->data['LoadBalancerType'] = $value;
        $this->options['form_params']['LoadBalancerType'] = $value;

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
 * @method string getClientToken()
 * @method string getResourceGroupId()
 * @method array getCiphers()
 * @method array getTag()
 * @method array getTlsVersions()
 * @method string getSecurityPolicyName()
 * @method string getDryRun()
 */
class CreateSecurityPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

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
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param array $ciphers
     *
     * @return $this
     */
	public function withCiphers(array $ciphers)
	{
	    $this->data['Ciphers'] = $ciphers;
		foreach ($ciphers as $i => $iValue) {
			$this->options['form_params']['Ciphers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param array $tlsVersions
     *
     * @return $this
     */
	public function withTlsVersions(array $tlsVersions)
	{
	    $this->data['TlsVersions'] = $tlsVersions;
		foreach ($tlsVersions as $i => $iValue) {
			$this->options['form_params']['TlsVersions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicyName($value)
    {
        $this->data['SecurityPolicyName'] = $value;
        $this->options['form_params']['SecurityPolicyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getQuicVersion()
 * @method string getServerGroupName()
 * @method string getClientToken()
 * @method string getPreserveClientIpEnabled()
 * @method string getHealthCheckConfig()
 * @method string getAddressIPVersion()
 * @method string getScheduler()
 * @method string getResourceGroupId()
 * @method string getProtocol()
 * @method string getPersistenceEnabled()
 * @method string getPersistenceTimeout()
 * @method array getTag()
 * @method string getDryRun()
 * @method string getConnectionDrainEnabled()
 * @method string getConnectionDrainTimeout()
 * @method string getAnyPortEnabled()
 * @method string getServerGroupType()
 * @method string getVpcId()
 */
class CreateServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuicVersion($value)
    {
        $this->data['QuicVersion'] = $value;
        $this->options['form_params']['QuicVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupName($value)
    {
        $this->data['ServerGroupName'] = $value;
        $this->options['form_params']['ServerGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreserveClientIpEnabled($value)
    {
        $this->data['PreserveClientIpEnabled'] = $value;
        $this->options['form_params']['PreserveClientIpEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckConfig($value)
    {
        $this->data['HealthCheckConfig'] = $value;
        $this->options['form_params']['HealthCheckConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressIPVersion($value)
    {
        $this->data['AddressIPVersion'] = $value;
        $this->options['form_params']['AddressIPVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduler($value)
    {
        $this->data['Scheduler'] = $value;
        $this->options['form_params']['Scheduler'] = $value;

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
        $this->options['form_params']['ResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocol($value)
    {
        $this->data['Protocol'] = $value;
        $this->options['form_params']['Protocol'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersistenceEnabled($value)
    {
        $this->data['PersistenceEnabled'] = $value;
        $this->options['form_params']['PersistenceEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersistenceTimeout($value)
    {
        $this->data['PersistenceTimeout'] = $value;
        $this->options['form_params']['PersistenceTimeout'] = $value;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['form_params']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionDrainEnabled($value)
    {
        $this->data['ConnectionDrainEnabled'] = $value;
        $this->options['form_params']['ConnectionDrainEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionDrainTimeout($value)
    {
        $this->data['ConnectionDrainTimeout'] = $value;
        $this->options['form_params']['ConnectionDrainTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAnyPortEnabled($value)
    {
        $this->data['AnyPortEnabled'] = $value;
        $this->options['form_params']['AnyPortEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupType($value)
    {
        $this->data['ServerGroupType'] = $value;
        $this->options['form_params']['ServerGroupType'] = $value;

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
 * @method string getClientToken()
 * @method string getListenerId()
 * @method string getDryRun()
 */
class DeleteListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class DeleteLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method string getSecurityPolicyId()
 */
class DeleteSecurityPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicyId($value)
    {
        $this->data['SecurityPolicyId'] = $value;
        $this->options['form_params']['SecurityPolicyId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method string getDryRun()
 */
class DeleteServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceCode()
 * @method $this withServiceCode($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeZones extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getBandwidthPackageId()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class DetachCommonBandwidthPackageFromLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBandwidthPackageId($value)
    {
        $this->data['BandwidthPackageId'] = $value;
        $this->options['form_params']['BandwidthPackageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class DisableLoadBalancerIpv6Internet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method string getListenerId()
 * @method string getDryRun()
 * @method array getAdditionalCertificateIds()
 */
class DisassociateAdditionalCertificatesWithListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $additionalCertificateIds
     *
     * @return $this
     */
	public function withAdditionalCertificateIds(array $additionalCertificateIds)
	{
	    $this->data['AdditionalCertificateIds'] = $additionalCertificateIds;
		foreach ($additionalCertificateIds as $i => $iValue) {
			$this->options['form_params']['AdditionalCertificateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method string getLoadBalancerId()
 */
class EnableLoadBalancerIpv6Internet extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 */
class GetJobStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class GetListenerAttribute extends Rpc
{
}

/**
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class GetListenerHealthStatus extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class GetLoadBalancerAttribute extends Rpc
{
}

/**
 * @method string getListenerId()
 * @method string getCertType()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListListenerCertificates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertType($value)
    {
        $this->data['CertType'] = $value;
        $this->options['form_params']['CertType'] = $value;

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
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method array getLoadBalancerIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method array getListenerIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListListeners extends Rpc
{

    /**
     * @param array $loadBalancerIds
     *
     * @return $this
     */
	public function withLoadBalancerIds(array $loadBalancerIds)
	{
	    $this->data['LoadBalancerIds'] = $loadBalancerIds;
		foreach ($loadBalancerIds as $i => $iValue) {
			$this->options['query']['LoadBalancerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $listenerIds
     *
     * @return $this
     */
	public function withListenerIds(array $listenerIds)
	{
	    $this->data['ListenerIds'] = $listenerIds;
		foreach ($listenerIds as $i => $iValue) {
			$this->options['query']['ListenerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getLoadBalancerNames()
 * @method array getLoadBalancerIds()
 * @method string getAddressIpVersion()
 * @method $this withAddressIpVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getDNSName()
 * @method $this withDNSName($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method array getVpcIds()
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getLoadBalancerBusinessStatus()
 * @method $this withLoadBalancerBusinessStatus($value)
 * @method string getLoadBalancerStatus()
 * @method $this withLoadBalancerStatus($value)
 * @method string getLoadBalancerType()
 * @method $this withLoadBalancerType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getIpv6AddressType()
 * @method $this withIpv6AddressType($value)
 */
class ListLoadBalancers extends Rpc
{

    /**
     * @param array $loadBalancerNames
     *
     * @return $this
     */
	public function withLoadBalancerNames(array $loadBalancerNames)
	{
	    $this->data['LoadBalancerNames'] = $loadBalancerNames;
		foreach ($loadBalancerNames as $i => $iValue) {
			$this->options['query']['LoadBalancerNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $loadBalancerIds
     *
     * @return $this
     */
	public function withLoadBalancerIds(array $loadBalancerIds)
	{
	    $this->data['LoadBalancerIds'] = $loadBalancerIds;
		foreach ($loadBalancerIds as $i => $iValue) {
			$this->options['query']['LoadBalancerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $vpcIds
     *
     * @return $this
     */
	public function withVpcIds(array $vpcIds)
	{
	    $this->data['VpcIds'] = $vpcIds;
		foreach ($vpcIds as $i => $iValue) {
			$this->options['query']['VpcIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getSecurityPolicyNames()
 * @method string getResourceGroupId()
 * @method string getNextToken()
 * @method string getTag()
 * @method $this withTag($value)
 * @method array getSecurityPolicyIds()
 * @method string getMaxResults()
 */
class ListSecurityPolicy extends Rpc
{

    /**
     * @param array $securityPolicyNames
     *
     * @return $this
     */
	public function withSecurityPolicyNames(array $securityPolicyNames)
	{
	    $this->data['SecurityPolicyNames'] = $securityPolicyNames;
		foreach ($securityPolicyNames as $i => $iValue) {
			$this->options['form_params']['SecurityPolicyNames.' . ($i + 1)] = $iValue;
		}

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
        $this->options['form_params']['ResourceGroupId'] = $value;

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
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param array $securityPolicyIds
     *
     * @return $this
     */
	public function withSecurityPolicyIds(array $securityPolicyIds)
	{
	    $this->data['SecurityPolicyIds'] = $securityPolicyIds;
		foreach ($securityPolicyIds as $i => $iValue) {
			$this->options['form_params']['SecurityPolicyIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method array getServerGroupNames()
 * @method string getResourceGroupId()
 * @method string getNextToken()
 * @method string getTag()
 * @method $this withTag($value)
 * @method array getServerGroupIds()
 * @method string getServerGroupType()
 * @method string getVpcId()
 * @method string getMaxResults()
 */
class ListServerGroups extends Rpc
{

    /**
     * @param array $serverGroupNames
     *
     * @return $this
     */
	public function withServerGroupNames(array $serverGroupNames)
	{
	    $this->data['ServerGroupNames'] = $serverGroupNames;
		foreach ($serverGroupNames as $i => $iValue) {
			$this->options['form_params']['ServerGroupNames.' . ($i + 1)] = $iValue;
		}

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
        $this->options['form_params']['ResourceGroupId'] = $value;

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
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param array $serverGroupIds
     *
     * @return $this
     */
	public function withServerGroupIds(array $serverGroupIds)
	{
	    $this->data['ServerGroupIds'] = $serverGroupIds;
		foreach ($serverGroupIds as $i => $iValue) {
			$this->options['form_params']['ServerGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupType($value)
    {
        $this->data['ServerGroupType'] = $value;
        $this->options['form_params']['ServerGroupType'] = $value;

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
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getServerGroupId()
 * @method string getNextToken()
 * @method array getServerIds()
 * @method array getServerIps()
 * @method string getMaxResults()
 */
class ListServerGroupServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

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
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param array $serverIds
     *
     * @return $this
     */
	public function withServerIds(array $serverIds)
	{
	    $this->data['ServerIds'] = $serverIds;
		foreach ($serverIds as $i => $iValue) {
			$this->options['form_params']['ServerIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $serverIps
     *
     * @return $this
     */
	public function withServerIps(array $serverIps)
	{
	    $this->data['ServerIps'] = $serverIps;
		foreach ($serverIps as $i => $iValue) {
			$this->options['form_params']['ServerIps.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

class ListSystemSecurityPolicy extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method string getPageSize()
 * @method string getTag()
 * @method string getResourceId()
 * @method string getResourceType()
 * @method string getMaxResults()
 * @method string getPage()
 */
class ListTagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPage($value)
    {
        $this->data['Page'] = $value;
        $this->options['form_params']['Page'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method array getSecurityGroupIds()
 * @method string getLoadBalancerId()
 */
class LoadBalancerJoinSecurityGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['form_params']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

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
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method array getSecurityGroupIds()
 * @method string getLoadBalancerId()
 */
class LoadBalancerLeaveSecurityGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['form_params']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

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
}

/**
 * @method string getClientToken()
 * @method string getChannel()
 * @method string getOwnerIdLoginEmail()
 * @method string getResourceDescription()
 * @method string getCallerBidLoginEmail()
 * @method string getCallerUidLoginEmail()
 * @method string getRequestContent()
 * @method string getResourceId()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getResourceType()
 * @method string getNewResourceGroupId()
 * @method string getServiceCode()
 * @method string getResourceName()
 */
class MoveResourceGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannel($value)
    {
        $this->data['Channel'] = $value;
        $this->options['form_params']['Channel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerIdLoginEmail($value)
    {
        $this->data['OwnerIdLoginEmail'] = $value;
        $this->options['form_params']['OwnerIdLoginEmail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceDescription($value)
    {
        $this->data['ResourceDescription'] = $value;
        $this->options['form_params']['ResourceDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBidLoginEmail($value)
    {
        $this->data['CallerBidLoginEmail'] = $value;
        $this->options['form_params']['CallerBidLoginEmail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUidLoginEmail($value)
    {
        $this->data['CallerUidLoginEmail'] = $value;
        $this->options['form_params']['CallerUidLoginEmail'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequestContent($value)
    {
        $this->data['RequestContent'] = $value;
        $this->options['form_params']['RequestContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceOwnerAccount($value)
    {
        $this->data['ResourceOwnerAccount'] = $value;
        $this->options['form_params']['ResourceOwnerAccount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOwnerAccount($value)
    {
        $this->data['OwnerAccount'] = $value;
        $this->options['form_params']['OwnerAccount'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNewResourceGroupId($value)
    {
        $this->data['NewResourceGroupId'] = $value;
        $this->options['form_params']['NewResourceGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceName($value)
    {
        $this->data['ResourceName'] = $value;
        $this->options['form_params']['ResourceName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method array getServers()
 * @method string getDryRun()
 */
class RemoveServersFromServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param array $servers
     *
     * @return $this
     */
	public function withServers(array $servers)
	{
	    $this->data['Servers'] = $servers;
		foreach ($servers as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServerId'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.ServerId'] = $depth1Value['ServerId'];
			}
			if(isset($depth1Value['ServerType'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.ServerType'] = $depth1Value['ServerType'];
			}
			if(isset($depth1Value['ServerIp'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.ServerIp'] = $depth1Value['ServerIp'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getListenerId()
 * @method string getDryRun()
 */
class StartListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method array getZoneMappings()
 * @method string getLoadBalancerId()
 */
class StartShiftLoadBalancerZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $zoneMappings
     *
     * @return $this
     */
	public function withZoneMappings(array $zoneMappings)
	{
	    $this->data['ZoneMappings'] = $zoneMappings;
		foreach ($zoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
		}

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
}

/**
 * @method string getClientToken()
 * @method string getListenerId()
 * @method string getDryRun()
 */
class StopListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getTag()
 * @method string getResourceId()
 * @method string getDryRun()
 * @method string getResourceType()
 */
class TagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getAll()
 * @method string getResourceId()
 * @method string getDryRun()
 * @method string getResourceType()
 * @method string getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['form_params']['All'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceId($value)
    {
        $this->data['ResourceId'] = $value;
        $this->options['form_params']['ResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

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
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKey($value)
    {
        $this->data['TagKey'] = $value;
        $this->options['form_params']['TagKey'] = $value;

        return $this;
    }
}

/**
 * @method array getCaCertificateIds()
 * @method string getStartPort()
 * @method string getClientToken()
 * @method string getSecSensorEnabled()
 * @method string getAlpnPolicy()
 * @method string getMss()
 * @method string getServerGroupId()
 * @method string getListenerId()
 * @method array getCertificateIds()
 * @method string getAlpnEnabled()
 * @method string getEndPort()
 * @method string getDryRun()
 * @method string getProxyProtocolEnabled()
 * @method string getCps()
 * @method string getSecurityPolicyId()
 * @method string getIdleTimeout()
 * @method string getListenerDescription()
 * @method string getCaEnabled()
 */
class UpdateListenerAttribute extends Rpc
{

    /**
     * @param array $caCertificateIds
     *
     * @return $this
     */
	public function withCaCertificateIds(array $caCertificateIds)
	{
	    $this->data['CaCertificateIds'] = $caCertificateIds;
		foreach ($caCertificateIds as $i => $iValue) {
			$this->options['form_params']['CaCertificateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartPort($value)
    {
        $this->data['StartPort'] = $value;
        $this->options['form_params']['StartPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecSensorEnabled($value)
    {
        $this->data['SecSensorEnabled'] = $value;
        $this->options['form_params']['SecSensorEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlpnPolicy($value)
    {
        $this->data['AlpnPolicy'] = $value;
        $this->options['form_params']['AlpnPolicy'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMss($value)
    {
        $this->data['Mss'] = $value;
        $this->options['form_params']['Mss'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerId($value)
    {
        $this->data['ListenerId'] = $value;
        $this->options['form_params']['ListenerId'] = $value;

        return $this;
    }

    /**
     * @param array $certificateIds
     *
     * @return $this
     */
	public function withCertificateIds(array $certificateIds)
	{
	    $this->data['CertificateIds'] = $certificateIds;
		foreach ($certificateIds as $i => $iValue) {
			$this->options['form_params']['CertificateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlpnEnabled($value)
    {
        $this->data['AlpnEnabled'] = $value;
        $this->options['form_params']['AlpnEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndPort($value)
    {
        $this->data['EndPort'] = $value;
        $this->options['form_params']['EndPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyProtocolEnabled($value)
    {
        $this->data['ProxyProtocolEnabled'] = $value;
        $this->options['form_params']['ProxyProtocolEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCps($value)
    {
        $this->data['Cps'] = $value;
        $this->options['form_params']['Cps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicyId($value)
    {
        $this->data['SecurityPolicyId'] = $value;
        $this->options['form_params']['SecurityPolicyId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdleTimeout($value)
    {
        $this->data['IdleTimeout'] = $value;
        $this->options['form_params']['IdleTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withListenerDescription($value)
    {
        $this->data['ListenerDescription'] = $value;
        $this->options['form_params']['ListenerDescription'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaEnabled($value)
    {
        $this->data['CaEnabled'] = $value;
        $this->options['form_params']['CaEnabled'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getAddressType()
 * @method string getDryRun()
 * @method array getZoneMappings()
 * @method string getLoadBalancerId()
 */
class UpdateLoadBalancerAddressTypeConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAddressType($value)
    {
        $this->data['AddressType'] = $value;
        $this->options['form_params']['AddressType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $zoneMappings
     *
     * @return $this
     */
	public function withZoneMappings(array $zoneMappings)
	{
	    $this->data['ZoneMappings'] = $zoneMappings;
		foreach ($zoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
			if(isset($depth1Value['AllocationId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.AllocationId'] = $depth1Value['AllocationId'];
			}
			if(isset($depth1Value['EipType'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.EipType'] = $depth1Value['EipType'];
			}
		}

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
}

/**
 * @method string getCrossZoneEnabled()
 * @method string getClientToken()
 * @method string getLoadBalancerName()
 * @method string getDryRun()
 * @method string getCps()
 * @method string getTrafficAffinityEnabled()
 * @method array getSecurityGroupIds()
 * @method string getLoadBalancerId()
 */
class UpdateLoadBalancerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrossZoneEnabled($value)
    {
        $this->data['CrossZoneEnabled'] = $value;
        $this->options['form_params']['CrossZoneEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLoadBalancerName($value)
    {
        $this->data['LoadBalancerName'] = $value;
        $this->options['form_params']['LoadBalancerName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCps($value)
    {
        $this->data['Cps'] = $value;
        $this->options['form_params']['Cps'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTrafficAffinityEnabled($value)
    {
        $this->data['TrafficAffinityEnabled'] = $value;
        $this->options['form_params']['TrafficAffinityEnabled'] = $value;

        return $this;
    }

    /**
     * @param array $securityGroupIds
     *
     * @return $this
     */
	public function withSecurityGroupIds(array $securityGroupIds)
	{
	    $this->data['SecurityGroupIds'] = $securityGroupIds;
		foreach ($securityGroupIds as $i => $iValue) {
			$this->options['form_params']['SecurityGroupIds.' . ($i + 1)] = $iValue;
		}

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
}

/**
 * @method string getDeletionProtectionReason()
 * @method string getModificationProtectionReason()
 * @method string getClientToken()
 * @method string getDeletionProtectionEnabled()
 * @method string getDryRun()
 * @method string getModificationProtectionStatus()
 * @method string getLoadBalancerId()
 */
class UpdateLoadBalancerProtection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeletionProtectionReason($value)
    {
        $this->data['DeletionProtectionReason'] = $value;
        $this->options['form_params']['DeletionProtectionReason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModificationProtectionReason($value)
    {
        $this->data['ModificationProtectionReason'] = $value;
        $this->options['form_params']['ModificationProtectionReason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeletionProtectionEnabled($value)
    {
        $this->data['DeletionProtectionEnabled'] = $value;
        $this->options['form_params']['DeletionProtectionEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withModificationProtectionStatus($value)
    {
        $this->data['ModificationProtectionStatus'] = $value;
        $this->options['form_params']['ModificationProtectionStatus'] = $value;

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
}

/**
 * @method string getClientToken()
 * @method string getDryRun()
 * @method array getZoneMappings()
 * @method string getLoadBalancerId()
 */
class UpdateLoadBalancerZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param array $zoneMappings
     *
     * @return $this
     */
	public function withZoneMappings(array $zoneMappings)
	{
	    $this->data['ZoneMappings'] = $zoneMappings;
		foreach ($zoneMappings as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
			if(isset($depth1Value['PrivateIPv4Address'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.PrivateIPv4Address'] = $depth1Value['PrivateIPv4Address'];
			}
			if(isset($depth1Value['AllocationId'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.AllocationId'] = $depth1Value['AllocationId'];
			}
			if(isset($depth1Value['EipType'])){
				$this->options['form_params']['ZoneMappings.' . ($depth1 + 1) . '.EipType'] = $depth1Value['EipType'];
			}
		}

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
}

/**
 * @method string getClientToken()
 * @method array getCiphers()
 * @method array getTlsVersions()
 * @method string getSecurityPolicyName()
 * @method string getDryRun()
 * @method string getSecurityPolicyId()
 */
class UpdateSecurityPolicyAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param array $ciphers
     *
     * @return $this
     */
	public function withCiphers(array $ciphers)
	{
	    $this->data['Ciphers'] = $ciphers;
		foreach ($ciphers as $i => $iValue) {
			$this->options['form_params']['Ciphers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tlsVersions
     *
     * @return $this
     */
	public function withTlsVersions(array $tlsVersions)
	{
	    $this->data['TlsVersions'] = $tlsVersions;
		foreach ($tlsVersions as $i => $iValue) {
			$this->options['form_params']['TlsVersions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicyName($value)
    {
        $this->data['SecurityPolicyName'] = $value;
        $this->options['form_params']['SecurityPolicyName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityPolicyId($value)
    {
        $this->data['SecurityPolicyId'] = $value;
        $this->options['form_params']['SecurityPolicyId'] = $value;

        return $this;
    }
}

/**
 * @method string getQuicVersion()
 * @method string getServerGroupName()
 * @method string getClientToken()
 * @method string getPreserveClientIpEnabled()
 * @method string getHealthCheckConfig()
 * @method string getServerGroupId()
 * @method string getScheduler()
 * @method string getPersistenceEnabled()
 * @method string getPersistenceTimeout()
 * @method string getDryRun()
 * @method string getConnectionDrainEnabled()
 * @method string getConnectionDrainTimeout()
 */
class UpdateServerGroupAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQuicVersion($value)
    {
        $this->data['QuicVersion'] = $value;
        $this->options['form_params']['QuicVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupName($value)
    {
        $this->data['ServerGroupName'] = $value;
        $this->options['form_params']['ServerGroupName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPreserveClientIpEnabled($value)
    {
        $this->data['PreserveClientIpEnabled'] = $value;
        $this->options['form_params']['PreserveClientIpEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckConfig($value)
    {
        $this->data['HealthCheckConfig'] = $value;
        $this->options['form_params']['HealthCheckConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduler($value)
    {
        $this->data['Scheduler'] = $value;
        $this->options['form_params']['Scheduler'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersistenceEnabled($value)
    {
        $this->data['PersistenceEnabled'] = $value;
        $this->options['form_params']['PersistenceEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersistenceTimeout($value)
    {
        $this->data['PersistenceTimeout'] = $value;
        $this->options['form_params']['PersistenceTimeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionDrainEnabled($value)
    {
        $this->data['ConnectionDrainEnabled'] = $value;
        $this->options['form_params']['ConnectionDrainEnabled'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionDrainTimeout($value)
    {
        $this->data['ConnectionDrainTimeout'] = $value;
        $this->options['form_params']['ConnectionDrainTimeout'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getServerGroupId()
 * @method array getServers()
 * @method string getDryRun()
 */
class UpdateServerGroupServersAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServerGroupId($value)
    {
        $this->data['ServerGroupId'] = $value;
        $this->options['form_params']['ServerGroupId'] = $value;

        return $this;
    }

    /**
     * @param array $servers
     *
     * @return $this
     */
	public function withServers(array $servers)
	{
	    $this->data['Servers'] = $servers;
		foreach ($servers as $depth1 => $depth1Value) {
			if(isset($depth1Value['ServerId'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.ServerId'] = $depth1Value['ServerId'];
			}
			if(isset($depth1Value['ServerType'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.ServerType'] = $depth1Value['ServerType'];
			}
			if(isset($depth1Value['ServerIp'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.ServerIp'] = $depth1Value['ServerIp'];
			}
			if(isset($depth1Value['Port'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.Port'] = $depth1Value['Port'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['form_params']['Servers.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDryRun($value)
    {
        $this->data['DryRun'] = $value;
        $this->options['form_params']['DryRun'] = $value;

        return $this;
    }
}
