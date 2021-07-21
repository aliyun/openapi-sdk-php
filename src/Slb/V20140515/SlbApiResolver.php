<?php

namespace AlibabaCloud\Slb\V20140515;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddAccessControlListEntry addAccessControlListEntry(array $options = [])
 * @method AddBackendServers addBackendServers(array $options = [])
 * @method AddListenerWhiteListItem addListenerWhiteListItem(array $options = [])
 * @method AddTags addTags(array $options = [])
 * @method AddVServerGroupBackendServers addVServerGroupBackendServers(array $options = [])
 * @method CreateAccessControlList createAccessControlList(array $options = [])
 * @method CreateDomainExtension createDomainExtension(array $options = [])
 * @method CreateLoadBalancer createLoadBalancer(array $options = [])
 * @method CreateLoadBalancerHTTPListener createLoadBalancerHTTPListener(array $options = [])
 * @method CreateLoadBalancerHTTPSListener createLoadBalancerHTTPSListener(array $options = [])
 * @method CreateLoadBalancerTCPListener createLoadBalancerTCPListener(array $options = [])
 * @method CreateLoadBalancerUDPListener createLoadBalancerUDPListener(array $options = [])
 * @method CreateMasterSlaveServerGroup createMasterSlaveServerGroup(array $options = [])
 * @method CreateRules createRules(array $options = [])
 * @method CreateTLSCipherPolicy createTLSCipherPolicy(array $options = [])
 * @method CreateVServerGroup createVServerGroup(array $options = [])
 * @method DeleteAccessControlList deleteAccessControlList(array $options = [])
 * @method DeleteCACertificate deleteCACertificate(array $options = [])
 * @method DeleteDomainExtension deleteDomainExtension(array $options = [])
 * @method DeleteLoadBalancer deleteLoadBalancer(array $options = [])
 * @method DeleteLoadBalancerListener deleteLoadBalancerListener(array $options = [])
 * @method DeleteMasterSlaveServerGroup deleteMasterSlaveServerGroup(array $options = [])
 * @method DeleteRules deleteRules(array $options = [])
 * @method DeleteServerCertificate deleteServerCertificate(array $options = [])
 * @method DeleteTLSCipherPolicy deleteTLSCipherPolicy(array $options = [])
 * @method DeleteVServerGroup deleteVServerGroup(array $options = [])
 * @method DescribeAccessControlListAttribute describeAccessControlListAttribute(array $options = [])
 * @method DescribeAccessControlLists describeAccessControlLists(array $options = [])
 * @method DescribeAvailableResource describeAvailableResource(array $options = [])
 * @method DescribeCACertificates describeCACertificates(array $options = [])
 * @method DescribeDomainExtensionAttribute describeDomainExtensionAttribute(array $options = [])
 * @method DescribeDomainExtensions describeDomainExtensions(array $options = [])
 * @method DescribeHealthStatus describeHealthStatus(array $options = [])
 * @method DescribeListenerAccessControlAttribute describeListenerAccessControlAttribute(array $options = [])
 * @method DescribeLoadBalancerAttribute describeLoadBalancerAttribute(array $options = [])
 * @method DescribeLoadBalancerHTTPListenerAttribute describeLoadBalancerHTTPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerHTTPSListenerAttribute describeLoadBalancerHTTPSListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerListeners describeLoadBalancerListeners(array $options = [])
 * @method DescribeLoadBalancers describeLoadBalancers(array $options = [])
 * @method DescribeLoadBalancerTCPListenerAttribute describeLoadBalancerTCPListenerAttribute(array $options = [])
 * @method DescribeLoadBalancerUDPListenerAttribute describeLoadBalancerUDPListenerAttribute(array $options = [])
 * @method DescribeMasterSlaveServerGroupAttribute describeMasterSlaveServerGroupAttribute(array $options = [])
 * @method DescribeMasterSlaveServerGroups describeMasterSlaveServerGroups(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeRuleAttribute describeRuleAttribute(array $options = [])
 * @method DescribeRules describeRules(array $options = [])
 * @method DescribeServerCertificates describeServerCertificates(array $options = [])
 * @method DescribeTags describeTags(array $options = [])
 * @method DescribeVServerGroupAttribute describeVServerGroupAttribute(array $options = [])
 * @method DescribeVServerGroups describeVServerGroups(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTLSCipherPolicies listTLSCipherPolicies(array $options = [])
 * @method ModifyLoadBalancerInstanceSpec modifyLoadBalancerInstanceSpec(array $options = [])
 * @method ModifyLoadBalancerInternetSpec modifyLoadBalancerInternetSpec(array $options = [])
 * @method ModifyLoadBalancerPayType modifyLoadBalancerPayType(array $options = [])
 * @method ModifyVServerGroupBackendServers modifyVServerGroupBackendServers(array $options = [])
 * @method RemoveAccessControlListEntry removeAccessControlListEntry(array $options = [])
 * @method RemoveBackendServers removeBackendServers(array $options = [])
 * @method RemoveListenerWhiteListItem removeListenerWhiteListItem(array $options = [])
 * @method RemoveTags removeTags(array $options = [])
 * @method RemoveVServerGroupBackendServers removeVServerGroupBackendServers(array $options = [])
 * @method SetAccessControlListAttribute setAccessControlListAttribute(array $options = [])
 * @method SetBackendServers setBackendServers(array $options = [])
 * @method SetCACertificateName setCACertificateName(array $options = [])
 * @method SetDomainExtensionAttribute setDomainExtensionAttribute(array $options = [])
 * @method SetListenerAccessControlStatus setListenerAccessControlStatus(array $options = [])
 * @method SetLoadBalancerDeleteProtection setLoadBalancerDeleteProtection(array $options = [])
 * @method SetLoadBalancerHTTPListenerAttribute setLoadBalancerHTTPListenerAttribute(array $options = [])
 * @method SetLoadBalancerHTTPSListenerAttribute setLoadBalancerHTTPSListenerAttribute(array $options = [])
 * @method SetLoadBalancerModificationProtection setLoadBalancerModificationProtection(array $options = [])
 * @method SetLoadBalancerName setLoadBalancerName(array $options = [])
 * @method SetLoadBalancerStatus setLoadBalancerStatus(array $options = [])
 * @method SetLoadBalancerTCPListenerAttribute setLoadBalancerTCPListenerAttribute(array $options = [])
 * @method SetLoadBalancerUDPListenerAttribute setLoadBalancerUDPListenerAttribute(array $options = [])
 * @method SetRule setRule(array $options = [])
 * @method SetServerCertificateName setServerCertificateName(array $options = [])
 * @method SetTLSCipherPolicyAttribute setTLSCipherPolicyAttribute(array $options = [])
 * @method SetVServerGroupAttribute setVServerGroupAttribute(array $options = [])
 * @method StartLoadBalancerListener startLoadBalancerListener(array $options = [])
 * @method StopLoadBalancerListener stopLoadBalancerListener(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UploadCACertificate uploadCACertificate(array $options = [])
 * @method UploadServerCertificate uploadServerCertificate(array $options = [])
 */
class SlbApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Slb';

    /** @var string */
    public $version = '2014-05-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'slb';
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclEntrys()
 * @method $this withAclEntrys($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class AddAccessControlListEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class AddBackendServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceItems()
 * @method $this withSourceItems($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class AddListenerWhiteListItem extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class AddTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class AddVServerGroupBackendServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class CreateAccessControlList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getServerCertificate()
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getCertificateId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateDomainExtension extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $serverCertificate
     *
     * @return $this
     */
	public function withServerCertificate(array $serverCertificate)
	{
	    $this->data['ServerCertificate'] = $serverCertificate;
		foreach ($serverCertificate as $depth1 => $depth1Value) {
			if(isset($depth1Value['BindingType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.BindingType'] = $depth1Value['BindingType'];
			}
			if(isset($depth1Value['CertificateId'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.CertificateId'] = $depth1Value['CertificateId'];
			}
			if(isset($depth1Value['StandardType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.StandardType'] = $depth1Value['StandardType'];
			}
		}

		return $this;
    }

    /**
     * @param array $certificateId
     *
     * @return $this
     */
	public function withCertificateId(array $certificateId)
	{
	    $this->data['CertificateId'] = $certificateId;
		foreach ($certificateId as $i => $iValue) {
			$this->options['query']['CertificateId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getMasterZoneId()
 * @method $this withMasterZoneId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getSpecType()
 * @method $this withSpecType($value)
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getSlaveZoneId()
 * @method $this withSlaveZoneId($value)
 * @method string getLoadBalancerSpec()
 * @method $this withLoadBalancerSpec($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getEnableVpcVipFlow()
 * @method $this withEnableVpcVipFlow($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getAccessKeyId()
 * @method string getModificationProtectionReason()
 * @method $this withModificationProtectionReason($value)
 * @method string getSupportPrivateLink()
 * @method $this withSupportPrivateLink($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCloudType()
 * @method $this withCloudType($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getDeleteProtection()
 * @method $this withDeleteProtection($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getModificationProtectionStatus()
 * @method $this withModificationProtectionStatus($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class CreateLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getListenerForward()
 * @method $this withListenerForward($value)
 * @method string getXForwardedFor()
 * @method $this withXForwardedFor($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getXForwardedForSLBPORT()
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getForwardCode()
 * @method $this withForwardCode($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getXForwardedForSLBIP()
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getXForwardedForSLBID()
 * @method string getHealthCheckHttpVersion()
 * @method $this withHealthCheckHttpVersion($value)
 * @method string getAccessKeyId()
 * @method string getXForwardedForCLientSrcPort()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getForwardPort()
 * @method $this withForwardPort($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGzip()
 * @method $this withGzip($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getXForwardedForProto()
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class CreateLoadBalancerHTTPListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBPORT($value)
    {
        $this->data['XForwardedForSLBPORT'] = $value;
        $this->options['query']['XForwardedFor_SLBPORT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBIP($value)
    {
        $this->data['XForwardedForSLBIP'] = $value;
        $this->options['query']['XForwardedFor_SLBIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBID($value)
    {
        $this->data['XForwardedForSLBID'] = $value;
        $this->options['query']['XForwardedFor_SLBID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientSrcPort($value)
    {
        $this->data['XForwardedForCLientSrcPort'] = $value;
        $this->options['query']['XForwardedFor_ClientSrcPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForProto($value)
    {
        $this->data['XForwardedForProto'] = $value;
        $this->options['query']['XForwardedFor_proto'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getServerCertificate()
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getXForwardedFor()
 * @method $this withXForwardedFor($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getXForwardedForSLBPORT()
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getXForwardedForCLientCertClientVerify()
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCACertificateId()
 * @method $this withCACertificateId($value)
 * @method string getBackendProtocol()
 * @method $this withBackendProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getXForwardedForCLientCertFingerprintAlias()
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getXForwardedForSLBIP()
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getXForwardedForCLientCertClientVerifyAlias()
 * @method string getXForwardedForSLBID()
 * @method string getXForwardedForCLientCertFingerprint()
 * @method string getHealthCheckHttpVersion()
 * @method $this withHealthCheckHttpVersion($value)
 * @method string getAccessKeyId()
 * @method string getXForwardedForCLientSrcPort()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getXForwardedForCLientCertIssuerDNAlias()
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getEnableHttp2()
 * @method $this withEnableHttp2($value)
 * @method string getXForwardedForCLientCertSubjectDN()
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGzip()
 * @method $this withGzip($value)
 * @method string getTLSCipherPolicy()
 * @method $this withTLSCipherPolicy($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getXForwardedForProto()
 * @method string getXForwardedForCLientCertSubjectDNAlias()
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getXForwardedForCLientCertIssuerDN()
 */
class CreateLoadBalancerHTTPSListener extends Rpc
{

    /**
     * @param array $serverCertificate
     *
     * @return $this
     */
	public function withServerCertificate(array $serverCertificate)
	{
	    $this->data['ServerCertificate'] = $serverCertificate;
		foreach ($serverCertificate as $depth1 => $depth1Value) {
			if(isset($depth1Value['BindingType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.BindingType'] = $depth1Value['BindingType'];
			}
			if(isset($depth1Value['CertificateId'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.CertificateId'] = $depth1Value['CertificateId'];
			}
			if(isset($depth1Value['StandardType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.StandardType'] = $depth1Value['StandardType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBPORT($value)
    {
        $this->data['XForwardedForSLBPORT'] = $value;
        $this->options['query']['XForwardedFor_SLBPORT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertClientVerify($value)
    {
        $this->data['XForwardedForCLientCertClientVerify'] = $value;
        $this->options['query']['XForwardedFor_ClientCertClientVerify'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertFingerprintAlias($value)
    {
        $this->data['XForwardedForCLientCertFingerprintAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertFingerprintAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBIP($value)
    {
        $this->data['XForwardedForSLBIP'] = $value;
        $this->options['query']['XForwardedFor_SLBIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertClientVerifyAlias($value)
    {
        $this->data['XForwardedForCLientCertClientVerifyAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertClientVerifyAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBID($value)
    {
        $this->data['XForwardedForSLBID'] = $value;
        $this->options['query']['XForwardedFor_SLBID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertFingerprint($value)
    {
        $this->data['XForwardedForCLientCertFingerprint'] = $value;
        $this->options['query']['XForwardedFor_ClientCertFingerprint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientSrcPort($value)
    {
        $this->data['XForwardedForCLientSrcPort'] = $value;
        $this->options['query']['XForwardedFor_ClientSrcPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertIssuerDNAlias($value)
    {
        $this->data['XForwardedForCLientCertIssuerDNAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertIssuerDNAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertSubjectDN($value)
    {
        $this->data['XForwardedForCLientCertSubjectDN'] = $value;
        $this->options['query']['XForwardedFor_ClientCertSubjectDN'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForProto($value)
    {
        $this->data['XForwardedForProto'] = $value;
        $this->options['query']['XForwardedFor_proto'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertSubjectDNAlias($value)
    {
        $this->data['XForwardedForCLientCertSubjectDNAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertSubjectDNAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertIssuerDN($value)
    {
        $this->data['XForwardedForCLientCertIssuerDN'] = $value;
        $this->options['query']['XForwardedFor_ClientCertIssuerDN'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getHealthCheckTcpFastCloseEnabled()
 * @method $this withHealthCheckTcpFastCloseEnabled($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getEstablishedTimeout()
 * @method $this withEstablishedTimeout($value)
 * @method string getFailoverStrategy()
 * @method $this withFailoverStrategy($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getMasterSlaveModeEnabled()
 * @method $this withMasterSlaveModeEnabled($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method array getPortRange()
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckInterval()
 * @method string getFailoverThreshold()
 * @method $this withFailoverThreshold($value)
 * @method string getProxyProtocolV2Enabled()
 * @method $this withProxyProtocolV2Enabled($value)
 * @method string getConnectionDrain()
 * @method $this withConnectionDrain($value)
 * @method string getHealthCheckSwitch()
 * @method $this withHealthCheckSwitch($value)
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getSlaveServerGroupId()
 * @method $this withSlaveServerGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getMasterServerGroupId()
 * @method $this withMasterServerGroupId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConnectionDrainTimeout()
 * @method $this withConnectionDrainTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class CreateLoadBalancerTCPListener extends Rpc
{

    /**
     * @param array $portRange
     *
     * @return $this
     */
	public function withPortRange(array $portRange)
	{
	    $this->data['PortRange'] = $portRange;
		foreach ($portRange as $depth1 => $depth1Value) {
			if(isset($depth1Value['StartPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.StartPort'] = $depth1Value['StartPort'];
			}
			if(isset($depth1Value['EndPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.EndPort'] = $depth1Value['EndPort'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckInterval($value)
    {
        $this->data['HealthCheckInterval'] = $value;
        $this->options['query']['healthCheckInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getFailoverStrategy()
 * @method $this withFailoverStrategy($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getMasterSlaveModeEnabled()
 * @method $this withMasterSlaveModeEnabled($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method array getPortRange()
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 * @method string getHealthCheckReq()
 * @method string getBackendServerPort()
 * @method $this withBackendServerPort($value)
 * @method string getHealthCheckInterval()
 * @method string getHealthCheckExp()
 * @method string getFailoverThreshold()
 * @method $this withFailoverThreshold($value)
 * @method string getProxyProtocolV2Enabled()
 * @method $this withProxyProtocolV2Enabled($value)
 * @method string getConnectionDrain()
 * @method $this withConnectionDrain($value)
 * @method string getHealthCheckSwitch()
 * @method $this withHealthCheckSwitch($value)
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getSlaveServerGroupId()
 * @method $this withSlaveServerGroupId($value)
 * @method string getQuicVersion()
 * @method $this withQuicVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getMasterServerGroupId()
 * @method $this withMasterServerGroupId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConnectionDrainTimeout()
 * @method $this withConnectionDrainTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class CreateLoadBalancerUDPListener extends Rpc
{

    /**
     * @param array $portRange
     *
     * @return $this
     */
	public function withPortRange(array $portRange)
	{
	    $this->data['PortRange'] = $portRange;
		foreach ($portRange as $depth1 => $depth1Value) {
			if(isset($depth1Value['StartPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.StartPort'] = $depth1Value['StartPort'];
			}
			if(isset($depth1Value['EndPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.EndPort'] = $depth1Value['EndPort'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckReq($value)
    {
        $this->data['HealthCheckReq'] = $value;
        $this->options['query']['healthCheckReq'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckInterval($value)
    {
        $this->data['HealthCheckInterval'] = $value;
        $this->options['query']['healthCheckInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckExp($value)
    {
        $this->data['HealthCheckExp'] = $value;
        $this->options['query']['healthCheckExp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMasterSlaveBackendServers()
 * @method $this withMasterSlaveBackendServers($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMasterSlaveServerGroupName()
 * @method $this withMasterSlaveServerGroupName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class CreateMasterSlaveServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRuleList()
 * @method $this withRuleList($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class CreateRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getCiphers()
 * @method array getTLSVersions()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateTLSCipherPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			$this->options['query']['Ciphers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tLSVersions
     *
     * @return $this
     */
	public function withTLSVersions(array $tLSVersions)
	{
	    $this->data['TLSVersions'] = $tLSVersions;
		foreach ($tLSVersions as $i => $iValue) {
			$this->options['query']['TLSVersions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getVServerGroupName()
 * @method $this withVServerGroupName($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class CreateVServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DeleteAccessControlList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCACertificateId()
 * @method $this withCACertificateId($value)
 */
class DeleteCACertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDomainExtensionId()
 * @method $this withDomainExtensionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DeleteDomainExtension extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DeleteLoadBalancer extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DeleteLoadBalancerListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 */
class DeleteMasterSlaveServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 */
class DeleteRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DeleteServerCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTLSCipherPolicyId()
 * @method $this withTLSCipherPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTLSCipherPolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DeleteVServerGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getAclEntryComment()
 * @method $this withAclEntryComment($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeAccessControlListAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeAccessControlLists extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeAvailableResource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCACertificateId()
 * @method $this withCACertificateId($value)
 */
class DescribeCACertificates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDomainExtensionId()
 * @method $this withDomainExtensionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeDomainExtensionAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDomainExtensionId()
 * @method $this withDomainExtensionId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeDomainExtensions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeHealthStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeListenerAccessControlAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeReservedData()
 * @method $this withIncludeReservedData($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerHTTPListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerHTTPSListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method array getLoadBalancerId()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class DescribeLoadBalancerListeners extends Rpc
{

    /**
     * @param array $loadBalancerId
     *
     * @return $this
     */
	public function withLoadBalancerId(array $loadBalancerId)
	{
	    $this->data['LoadBalancerId'] = $loadBalancerId;
		foreach ($loadBalancerId as $i => $iValue) {
			$this->options['query']['LoadBalancerId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNetworkType()
 * @method $this withNetworkType($value)
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getMasterZoneId()
 * @method $this withMasterZoneId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getSlaveZoneId()
 * @method $this withSlaveZoneId($value)
 * @method array getTag()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerId()
 * @method $this withServerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getServerIntranetAddress()
 * @method $this withServerIntranetAddress($value)
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getAccessKeyId()
 * @method string getSupportPrivateLink()
 * @method $this withSupportPrivateLink($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAddressType()
 * @method $this withAddressType($value)
 * @method string getFuzzy()
 * @method $this withFuzzy($value)
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getFilterByTagOrName()
 * @method $this withFilterByTagOrName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getLoadBalancerStatus()
 * @method $this withLoadBalancerStatus($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class DescribeLoadBalancers extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerTCPListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeLoadBalancerUDPListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 */
class DescribeMasterSlaveServerGroupAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeListener()
 * @method $this withIncludeListener($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeMasterSlaveServerGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
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
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DescribeRuleAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeServerCertificates extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDistinctKey()
 * @method $this withDistinctKey($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeVServerGroupAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeListener()
 * @method $this withIncludeListener($value)
 * @method string getIncludeRule()
 * @method $this withIncludeRule($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class DescribeVServerGroups extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class DescribeZones extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class ListTagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getIncludeListener()
 * @method $this withIncludeListener($value)
 * @method string getTLSCipherPolicyId()
 * @method $this withTLSCipherPolicyId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxItems()
 * @method $this withMaxItems($value)
 */
class ListTLSCipherPolicies extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLoadBalancerSpec()
 * @method $this withLoadBalancerSpec($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class ModifyLoadBalancerInstanceSpec extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class ModifyLoadBalancerInternetSpec extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class ModifyLoadBalancerPayType extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getNewBackendServers()
 * @method $this withNewBackendServers($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getOldBackendServers()
 * @method $this withOldBackendServers($value)
 */
class ModifyVServerGroupBackendServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclEntrys()
 * @method $this withAclEntrys($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class RemoveAccessControlListEntry extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class RemoveBackendServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceItems()
 * @method $this withSourceItems($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class RemoveListenerWhiteListItem extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class RemoveTags extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class RemoveVServerGroupBackendServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class SetAccessControlListAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetBackendServers extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getCACertificateName()
 * @method $this withCACertificateName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCACertificateId()
 * @method $this withCACertificateId($value)
 */
class SetCACertificateName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getServerCertificate()
 * @method string getDomainExtensionId()
 * @method $this withDomainExtensionId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getCertificateId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class SetDomainExtensionAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $serverCertificate
     *
     * @return $this
     */
	public function withServerCertificate(array $serverCertificate)
	{
	    $this->data['ServerCertificate'] = $serverCertificate;
		foreach ($serverCertificate as $depth1 => $depth1Value) {
			if(isset($depth1Value['BindingType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.BindingType'] = $depth1Value['BindingType'];
			}
			if(isset($depth1Value['CertificateId'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.CertificateId'] = $depth1Value['CertificateId'];
			}
			if(isset($depth1Value['StandardType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.StandardType'] = $depth1Value['StandardType'];
			}
		}

		return $this;
    }

    /**
     * @param array $certificateId
     *
     * @return $this
     */
	public function withCertificateId(array $certificateId)
	{
	    $this->data['CertificateId'] = $certificateId;
		foreach ($certificateId as $i => $iValue) {
			$this->options['query']['CertificateId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAccessControlStatus()
 * @method $this withAccessControlStatus($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetListenerAccessControlStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getDeleteProtection()
 * @method $this withDeleteProtection($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetLoadBalancerDeleteProtection extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getXForwardedFor()
 * @method $this withXForwardedFor($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getXForwardedForSLBPORT()
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getForwardCode()
 * @method $this withForwardCode($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getXForwardedForSLBIP()
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getXForwardedForSLBID()
 * @method string getAccessKeyId()
 * @method string getXForwardedForCLientSrcPort()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGzip()
 * @method $this withGzip($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getXForwardedForProto()
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getVServerGroup()
 * @method $this withVServerGroup($value)
 */
class SetLoadBalancerHTTPListenerAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBPORT($value)
    {
        $this->data['XForwardedForSLBPORT'] = $value;
        $this->options['query']['XForwardedFor_SLBPORT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBIP($value)
    {
        $this->data['XForwardedForSLBIP'] = $value;
        $this->options['query']['XForwardedFor_SLBIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBID($value)
    {
        $this->data['XForwardedForSLBID'] = $value;
        $this->options['query']['XForwardedFor_SLBID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientSrcPort($value)
    {
        $this->data['XForwardedForCLientSrcPort'] = $value;
        $this->options['query']['XForwardedFor_ClientSrcPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForProto($value)
    {
        $this->data['XForwardedForProto'] = $value;
        $this->options['query']['XForwardedFor_proto'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getServerCertificate()
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getXForwardedFor()
 * @method $this withXForwardedFor($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getXForwardedForSLBPORT()
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getXForwardedForCLientCertClientVerify()
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getRequestTimeout()
 * @method $this withRequestTimeout($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getCACertificateId()
 * @method $this withCACertificateId($value)
 * @method string getBackendProtocol()
 * @method $this withBackendProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getXForwardedForCLientCertFingerprintAlias()
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getXForwardedForSLBIP()
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getXForwardedForCLientCertClientVerifyAlias()
 * @method string getXForwardedForSLBID()
 * @method string getXForwardedForCLientCertFingerprint()
 * @method string getAccessKeyId()
 * @method string getXForwardedForCLientSrcPort()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getXForwardedForCLientCertIssuerDNAlias()
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getEnableHttp2()
 * @method $this withEnableHttp2($value)
 * @method string getXForwardedForCLientCertSubjectDN()
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getGzip()
 * @method $this withGzip($value)
 * @method string getTLSCipherPolicy()
 * @method $this withTLSCipherPolicy($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getIdleTimeout()
 * @method $this withIdleTimeout($value)
 * @method string getXForwardedForProto()
 * @method string getXForwardedForCLientCertSubjectDNAlias()
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getVServerGroup()
 * @method $this withVServerGroup($value)
 * @method string getXForwardedForCLientCertIssuerDN()
 */
class SetLoadBalancerHTTPSListenerAttribute extends Rpc
{

    /**
     * @param array $serverCertificate
     *
     * @return $this
     */
	public function withServerCertificate(array $serverCertificate)
	{
	    $this->data['ServerCertificate'] = $serverCertificate;
		foreach ($serverCertificate as $depth1 => $depth1Value) {
			if(isset($depth1Value['BindingType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.BindingType'] = $depth1Value['BindingType'];
			}
			if(isset($depth1Value['CertificateId'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.CertificateId'] = $depth1Value['CertificateId'];
			}
			if(isset($depth1Value['StandardType'])){
				$this->options['query']['ServerCertificate.' . ($depth1 + 1) . '.StandardType'] = $depth1Value['StandardType'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBPORT($value)
    {
        $this->data['XForwardedForSLBPORT'] = $value;
        $this->options['query']['XForwardedFor_SLBPORT'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertClientVerify($value)
    {
        $this->data['XForwardedForCLientCertClientVerify'] = $value;
        $this->options['query']['XForwardedFor_ClientCertClientVerify'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertFingerprintAlias($value)
    {
        $this->data['XForwardedForCLientCertFingerprintAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertFingerprintAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBIP($value)
    {
        $this->data['XForwardedForSLBIP'] = $value;
        $this->options['query']['XForwardedFor_SLBIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertClientVerifyAlias($value)
    {
        $this->data['XForwardedForCLientCertClientVerifyAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertClientVerifyAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForSLBID($value)
    {
        $this->data['XForwardedForSLBID'] = $value;
        $this->options['query']['XForwardedFor_SLBID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertFingerprint($value)
    {
        $this->data['XForwardedForCLientCertFingerprint'] = $value;
        $this->options['query']['XForwardedFor_ClientCertFingerprint'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientSrcPort($value)
    {
        $this->data['XForwardedForCLientSrcPort'] = $value;
        $this->options['query']['XForwardedFor_ClientSrcPort'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertIssuerDNAlias($value)
    {
        $this->data['XForwardedForCLientCertIssuerDNAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertIssuerDNAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertSubjectDN($value)
    {
        $this->data['XForwardedForCLientCertSubjectDN'] = $value;
        $this->options['query']['XForwardedFor_ClientCertSubjectDN'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForProto($value)
    {
        $this->data['XForwardedForProto'] = $value;
        $this->options['query']['XForwardedFor_proto'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertSubjectDNAlias($value)
    {
        $this->data['XForwardedForCLientCertSubjectDNAlias'] = $value;
        $this->options['query']['XForwardedFor_ClientCertSubjectDNAlias'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXForwardedForCLientCertIssuerDN($value)
    {
        $this->data['XForwardedForCLientCertIssuerDN'] = $value;
        $this->options['query']['XForwardedFor_ClientCertIssuerDN'] = $value;

        return $this;
    }
}

/**
 * @method string getModificationProtectionReason()
 * @method $this withModificationProtectionReason($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getModificationProtectionStatus()
 * @method $this withModificationProtectionStatus($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetLoadBalancerModificationProtection extends Rpc
{
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getLoadBalancerName()
 * @method $this withLoadBalancerName($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetLoadBalancerName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLoadBalancerStatus()
 * @method $this withLoadBalancerStatus($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class SetLoadBalancerStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getHealthCheckTcpFastCloseEnabled()
 * @method $this withHealthCheckTcpFastCloseEnabled($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getMasterSlaveServerGroup()
 * @method $this withMasterSlaveServerGroup($value)
 * @method string getEstablishedTimeout()
 * @method $this withEstablishedTimeout($value)
 * @method string getFailoverStrategy()
 * @method $this withFailoverStrategy($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getMasterSlaveModeEnabled()
 * @method $this withMasterSlaveModeEnabled($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method array getPortRange()
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getSynProxy()
 * @method $this withSynProxy($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getFailoverThreshold()
 * @method $this withFailoverThreshold($value)
 * @method string getProxyProtocolV2Enabled()
 * @method $this withProxyProtocolV2Enabled($value)
 * @method string getConnectionDrain()
 * @method $this withConnectionDrain($value)
 * @method string getHealthCheckSwitch()
 * @method $this withHealthCheckSwitch($value)
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getSlaveServerGroupId()
 * @method $this withSlaveServerGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getMasterServerGroupId()
 * @method $this withMasterServerGroupId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConnectionDrainTimeout()
 * @method $this withConnectionDrainTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getVServerGroup()
 * @method $this withVServerGroup($value)
 */
class SetLoadBalancerTCPListenerAttribute extends Rpc
{

    /**
     * @param array $portRange
     *
     * @return $this
     */
	public function withPortRange(array $portRange)
	{
	    $this->data['PortRange'] = $portRange;
		foreach ($portRange as $depth1 => $depth1Value) {
			if(isset($depth1Value['StartPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.StartPort'] = $depth1Value['StartPort'];
			}
			if(isset($depth1Value['EndPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.EndPort'] = $depth1Value['EndPort'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getAclStatus()
 * @method $this withAclStatus($value)
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getMasterSlaveServerGroup()
 * @method $this withMasterSlaveServerGroup($value)
 * @method string getFailoverStrategy()
 * @method $this withFailoverStrategy($value)
 * @method string getPersistenceTimeout()
 * @method $this withPersistenceTimeout($value)
 * @method string getVpcIds()
 * @method $this withVpcIds($value)
 * @method string getMasterSlaveModeEnabled()
 * @method $this withMasterSlaveModeEnabled($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method array getPortRange()
 * @method string getHealthCheckMethod()
 * @method $this withHealthCheckMethod($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 * @method string getMasterSlaveServerGroupId()
 * @method $this withMasterSlaveServerGroupId($value)
 * @method string getHealthCheckReq()
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getHealthCheckExp()
 * @method string getFailoverThreshold()
 * @method $this withFailoverThreshold($value)
 * @method string getProxyProtocolV2Enabled()
 * @method $this withProxyProtocolV2Enabled($value)
 * @method string getConnectionDrain()
 * @method $this withConnectionDrain($value)
 * @method string getHealthCheckSwitch()
 * @method $this withHealthCheckSwitch($value)
 * @method string getAccessKeyId()
 * @method string getHealthCheckConnectTimeout()
 * @method $this withHealthCheckConnectTimeout($value)
 * @method string getSlaveServerGroupId()
 * @method $this withSlaveServerGroupId($value)
 * @method string getQuicVersion()
 * @method $this withQuicVersion($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getMaxConnection()
 * @method $this withMaxConnection($value)
 * @method string getMasterServerGroupId()
 * @method $this withMasterServerGroupId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getHealthCheckType()
 * @method $this withHealthCheckType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getConnectionDrainTimeout()
 * @method $this withConnectionDrainTimeout($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 * @method string getVServerGroup()
 * @method $this withVServerGroup($value)
 */
class SetLoadBalancerUDPListenerAttribute extends Rpc
{

    /**
     * @param array $portRange
     *
     * @return $this
     */
	public function withPortRange(array $portRange)
	{
	    $this->data['PortRange'] = $portRange;
		foreach ($portRange as $depth1 => $depth1Value) {
			if(isset($depth1Value['StartPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.StartPort'] = $depth1Value['StartPort'];
			}
			if(isset($depth1Value['EndPort'])){
				$this->options['query']['PortRange.' . ($depth1 + 1) . '.EndPort'] = $depth1Value['EndPort'];
			}
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckReq($value)
    {
        $this->data['HealthCheckReq'] = $value;
        $this->options['query']['healthCheckReq'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHealthCheckExp($value)
    {
        $this->data['HealthCheckExp'] = $value;
        $this->options['query']['healthCheckExp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHealthCheckTimeout()
 * @method $this withHealthCheckTimeout($value)
 * @method string getHealthCheckURI()
 * @method $this withHealthCheckURI($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getUnhealthyThreshold()
 * @method $this withUnhealthyThreshold($value)
 * @method string getHealthyThreshold()
 * @method $this withHealthyThreshold($value)
 * @method string getScheduler()
 * @method $this withScheduler($value)
 * @method string getHealthCheck()
 * @method $this withHealthCheck($value)
 * @method string getListenerSync()
 * @method $this withListenerSync($value)
 * @method string getCookieTimeout()
 * @method $this withCookieTimeout($value)
 * @method string getStickySessionType()
 * @method $this withStickySessionType($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getCookie()
 * @method $this withCookie($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getStickySession()
 * @method $this withStickySession($value)
 * @method string getHealthCheckDomain()
 * @method $this withHealthCheckDomain($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getHealthCheckInterval()
 * @method $this withHealthCheckInterval($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method string getHealthCheckConnectPort()
 * @method $this withHealthCheckConnectPort($value)
 * @method string getHealthCheckHttpCode()
 * @method $this withHealthCheckHttpCode($value)
 */
class SetRule extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getServerCertificateId()
 * @method $this withServerCertificateId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getServerCertificateName()
 * @method $this withServerCertificateName($value)
 */
class SetServerCertificateName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTLSCipherPolicyId()
 * @method $this withTLSCipherPolicyId($value)
 * @method array getCiphers()
 * @method array getTLSVersions()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class SetTLSCipherPolicyAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			$this->options['query']['Ciphers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tLSVersions
     *
     * @return $this
     */
	public function withTLSVersions(array $tLSVersions)
	{
	    $this->data['TLSVersions'] = $tLSVersions;
		foreach ($tLSVersions as $i => $iValue) {
			$this->options['query']['TLSVersions.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getBackendServers()
 * @method $this withBackendServers($value)
 * @method string getVServerGroupId()
 * @method $this withVServerGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getVServerGroupName()
 * @method $this withVServerGroupName($value)
 */
class SetVServerGroupAttribute extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class StartLoadBalancerListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getListenerPort()
 * @method $this withListenerPort($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getListenerProtocol()
 * @method $this withListenerProtocol($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getLoadBalancerId()
 * @method $this withLoadBalancerId($value)
 */
class StopLoadBalancerListener extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method array getTag()
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class TagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

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
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getCACertificateName()
 * @method $this withCACertificateName($value)
 * @method string getCACertificate()
 * @method $this withCACertificate($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStandardType()
 * @method $this withStandardType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UploadCACertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}

/**
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getServerCertificate()
 * @method $this withServerCertificate($value)
 * @method string getAliCloudCertificateName()
 * @method $this withAliCloudCertificateName($value)
 * @method string getAliCloudCertificateId()
 * @method $this withAliCloudCertificateId($value)
 * @method string getPrivateKey()
 * @method $this withPrivateKey($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getStandardType()
 * @method $this withStandardType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getAliCloudCertificateRegionId()
 * @method $this withAliCloudCertificateRegionId($value)
 * @method string getServerCertificateName()
 * @method $this withServerCertificateName($value)
 */
class UploadServerCertificate extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAccessKeyId($value)
    {
        $this->data['AccessKeyId'] = $value;
        $this->options['query']['access_key_id'] = $value;

        return $this;
    }
}
