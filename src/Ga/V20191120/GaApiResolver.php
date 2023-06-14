<?php

namespace AlibabaCloud\Ga\V20191120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddEntriesToAcl addEntriesToAcl(array $options = [])
 * @method AssociateAclsWithListener associateAclsWithListener(array $options = [])
 * @method AssociateAdditionalCertificatesWithListener associateAdditionalCertificatesWithListener(array $options = [])
 * @method AttachDdosToAccelerator attachDdosToAccelerator(array $options = [])
 * @method AttachLogStoreToEndpointGroup attachLogStoreToEndpointGroup(array $options = [])
 * @method BandwidthPackageAddAccelerator bandwidthPackageAddAccelerator(array $options = [])
 * @method BandwidthPackageRemoveAccelerator bandwidthPackageRemoveAccelerator(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method ConfigEndpointProbe configEndpointProbe(array $options = [])
 * @method CreateAccelerator createAccelerator(array $options = [])
 * @method CreateAcl createAcl(array $options = [])
 * @method CreateApplicationMonitor createApplicationMonitor(array $options = [])
 * @method CreateBandwidthPackage createBandwidthPackage(array $options = [])
 * @method CreateBasicAccelerateIp createBasicAccelerateIp(array $options = [])
 * @method CreateBasicAccelerateIpEndpointRelation createBasicAccelerateIpEndpointRelation(array $options = [])
 * @method CreateBasicAccelerateIpEndpointRelations createBasicAccelerateIpEndpointRelations(array $options = [])
 * @method CreateBasicAccelerator createBasicAccelerator(array $options = [])
 * @method CreateBasicEndpoint createBasicEndpoint(array $options = [])
 * @method CreateBasicEndpointGroup createBasicEndpointGroup(array $options = [])
 * @method CreateBasicEndpoints createBasicEndpoints(array $options = [])
 * @method CreateBasicIpSet createBasicIpSet(array $options = [])
 * @method CreateCustomRoutingEndpointGroupDestinations createCustomRoutingEndpointGroupDestinations(array $options = [])
 * @method CreateCustomRoutingEndpointGroups createCustomRoutingEndpointGroups(array $options = [])
 * @method CreateCustomRoutingEndpoints createCustomRoutingEndpoints(array $options = [])
 * @method CreateCustomRoutingEndpointTrafficPolicies createCustomRoutingEndpointTrafficPolicies(array $options = [])
 * @method CreateDomain createDomain(array $options = [])
 * @method CreateEndpointGroup createEndpointGroup(array $options = [])
 * @method CreateEndpointGroups createEndpointGroups(array $options = [])
 * @method CreateForwardingRules createForwardingRules(array $options = [])
 * @method CreateIpSets createIpSets(array $options = [])
 * @method CreateListener createListener(array $options = [])
 * @method CreateSpareIps createSpareIps(array $options = [])
 * @method DeleteAccelerator deleteAccelerator(array $options = [])
 * @method DeleteAcl deleteAcl(array $options = [])
 * @method DeleteApplicationMonitor deleteApplicationMonitor(array $options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage(array $options = [])
 * @method DeleteBasicAccelerateIp deleteBasicAccelerateIp(array $options = [])
 * @method DeleteBasicAccelerateIpEndpointRelation deleteBasicAccelerateIpEndpointRelation(array $options = [])
 * @method DeleteBasicAccelerator deleteBasicAccelerator(array $options = [])
 * @method DeleteBasicEndpoint deleteBasicEndpoint(array $options = [])
 * @method DeleteBasicEndpointGroup deleteBasicEndpointGroup(array $options = [])
 * @method DeleteBasicIpSet deleteBasicIpSet(array $options = [])
 * @method DeleteCustomRoutingEndpointGroupDestinations deleteCustomRoutingEndpointGroupDestinations(array $options = [])
 * @method DeleteCustomRoutingEndpointGroups deleteCustomRoutingEndpointGroups(array $options = [])
 * @method DeleteCustomRoutingEndpoints deleteCustomRoutingEndpoints(array $options = [])
 * @method DeleteCustomRoutingEndpointTrafficPolicies deleteCustomRoutingEndpointTrafficPolicies(array $options = [])
 * @method DeleteDomainAcceleratorRelation deleteDomainAcceleratorRelation(array $options = [])
 * @method DeleteEndpointGroup deleteEndpointGroup(array $options = [])
 * @method DeleteEndpointGroups deleteEndpointGroups(array $options = [])
 * @method DeleteForwardingRules deleteForwardingRules(array $options = [])
 * @method DeleteIpSet deleteIpSet(array $options = [])
 * @method DeleteIpSets deleteIpSets(array $options = [])
 * @method DeleteListener deleteListener(array $options = [])
 * @method DeleteSpareIps deleteSpareIps(array $options = [])
 * @method DescribeAccelerator describeAccelerator(array $options = [])
 * @method DescribeAcceleratorAutoRenewAttribute describeAcceleratorAutoRenewAttribute(array $options = [])
 * @method DescribeApplicationMonitor describeApplicationMonitor(array $options = [])
 * @method DescribeBandwidthPackage describeBandwidthPackage(array $options = [])
 * @method DescribeBandwidthPackageAutoRenewAttribute describeBandwidthPackageAutoRenewAttribute(array $options = [])
 * @method DescribeCommodity describeCommodity(array $options = [])
 * @method DescribeCommodityPrice describeCommodityPrice(array $options = [])
 * @method DescribeCustomRoutingEndpoint describeCustomRoutingEndpoint(array $options = [])
 * @method DescribeCustomRoutingEndpointGroup describeCustomRoutingEndpointGroup(array $options = [])
 * @method DescribeCustomRoutingEndpointGroupDestinations describeCustomRoutingEndpointGroupDestinations(array $options = [])
 * @method DescribeCustomRoutingEndPointTrafficPolicy describeCustomRoutingEndPointTrafficPolicy(array $options = [])
 * @method DescribeEndpointGroup describeEndpointGroup(array $options = [])
 * @method DescribeIpSet describeIpSet(array $options = [])
 * @method DescribeListener describeListener(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetachDdosFromAccelerator detachDdosFromAccelerator(array $options = [])
 * @method DetachLogStoreFromEndpointGroup detachLogStoreFromEndpointGroup(array $options = [])
 * @method DetectApplicationMonitor detectApplicationMonitor(array $options = [])
 * @method DisableApplicationMonitor disableApplicationMonitor(array $options = [])
 * @method DissociateAclsFromListener dissociateAclsFromListener(array $options = [])
 * @method DissociateAdditionalCertificatesFromListener dissociateAdditionalCertificatesFromListener(array $options = [])
 * @method EnableApplicationMonitor enableApplicationMonitor(array $options = [])
 * @method GetAcl getAcl(array $options = [])
 * @method GetBasicAccelerateIp getBasicAccelerateIp(array $options = [])
 * @method GetBasicAccelerateIpEndpointRelation getBasicAccelerateIpEndpointRelation(array $options = [])
 * @method GetBasicAccelerateIpIdleCount getBasicAccelerateIpIdleCount(array $options = [])
 * @method GetBasicAccelerator getBasicAccelerator(array $options = [])
 * @method GetBasicEndpoint getBasicEndpoint(array $options = [])
 * @method GetBasicEndpointGroup getBasicEndpointGroup(array $options = [])
 * @method GetBasicIpSet getBasicIpSet(array $options = [])
 * @method GetHealthStatus getHealthStatus(array $options = [])
 * @method GetInvalidDomainCount getInvalidDomainCount(array $options = [])
 * @method GetIpsetsBandwidthLimit getIpsetsBandwidthLimit(array $options = [])
 * @method GetSpareIp getSpareIp(array $options = [])
 * @method ListAccelerateAreas listAccelerateAreas(array $options = [])
 * @method ListAccelerators listAccelerators(array $options = [])
 * @method ListAcls listAcls(array $options = [])
 * @method ListApplicationMonitor listApplicationMonitor(array $options = [])
 * @method ListApplicationMonitorDetectResult listApplicationMonitorDetectResult(array $options = [])
 * @method ListAvailableAccelerateAreas listAvailableAccelerateAreas(array $options = [])
 * @method ListAvailableBusiRegions listAvailableBusiRegions(array $options = [])
 * @method ListBandwidthackages listBandwidthackages(array $options = [])
 * @method ListBandwidthPackages listBandwidthPackages(array $options = [])
 * @method ListBasicAccelerateIpEndpointRelations listBasicAccelerateIpEndpointRelations(array $options = [])
 * @method ListBasicAccelerateIps listBasicAccelerateIps(array $options = [])
 * @method ListBasicAccelerators listBasicAccelerators(array $options = [])
 * @method ListBasicEndpoints listBasicEndpoints(array $options = [])
 * @method ListBusiRegions listBusiRegions(array $options = [])
 * @method ListCommonAreas listCommonAreas(array $options = [])
 * @method ListCustomRoutingEndpointGroupDestinations listCustomRoutingEndpointGroupDestinations(array $options = [])
 * @method ListCustomRoutingEndpointGroups listCustomRoutingEndpointGroups(array $options = [])
 * @method ListCustomRoutingEndpoints listCustomRoutingEndpoints(array $options = [])
 * @method ListCustomRoutingEndpointTrafficPolicies listCustomRoutingEndpointTrafficPolicies(array $options = [])
 * @method ListCustomRoutingPortMappings listCustomRoutingPortMappings(array $options = [])
 * @method ListCustomRoutingPortMappingsByDestination listCustomRoutingPortMappingsByDestination(array $options = [])
 * @method ListDomains listDomains(array $options = [])
 * @method ListEndpointGroups listEndpointGroups(array $options = [])
 * @method ListForwardingRules listForwardingRules(array $options = [])
 * @method ListIpSets listIpSets(array $options = [])
 * @method ListIspTypes listIspTypes(array $options = [])
 * @method ListListenerCertificates listListenerCertificates(array $options = [])
 * @method ListListeners listListeners(array $options = [])
 * @method ListSpareIps listSpareIps(array $options = [])
 * @method ListSystemSecurityPolicies listSystemSecurityPolicies(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method QueryCrossBorderApprovalStatus queryCrossBorderApprovalStatus(array $options = [])
 * @method RemoveEntriesFromAcl removeEntriesFromAcl(array $options = [])
 * @method ReplaceBandwidthPackage replaceBandwidthPackage(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAccelerator updateAccelerator(array $options = [])
 * @method UpdateAcceleratorAutoRenewAttribute updateAcceleratorAutoRenewAttribute(array $options = [])
 * @method UpdateAcceleratorConfirm updateAcceleratorConfirm(array $options = [])
 * @method UpdateAcceleratorCrossBorderMode updateAcceleratorCrossBorderMode(array $options = [])
 * @method UpdateAclAttribute updateAclAttribute(array $options = [])
 * @method UpdateAdditionalCertificateWithListener updateAdditionalCertificateWithListener(array $options = [])
 * @method UpdateApplicationMonitor updateApplicationMonitor(array $options = [])
 * @method UpdateBandwidthPackagaAutoRenewAttribute updateBandwidthPackagaAutoRenewAttribute(array $options = [])
 * @method UpdateBandwidthPackage updateBandwidthPackage(array $options = [])
 * @method UpdateBasicAccelerator updateBasicAccelerator(array $options = [])
 * @method UpdateBasicEndpoint updateBasicEndpoint(array $options = [])
 * @method UpdateBasicEndpointGroup updateBasicEndpointGroup(array $options = [])
 * @method UpdateBasicIpSet updateBasicIpSet(array $options = [])
 * @method UpdateCustomRoutingEndpointGroupAttribute updateCustomRoutingEndpointGroupAttribute(array $options = [])
 * @method UpdateCustomRoutingEndpointGroupDestinations updateCustomRoutingEndpointGroupDestinations(array $options = [])
 * @method UpdateCustomRoutingEndpoints updateCustomRoutingEndpoints(array $options = [])
 * @method UpdateCustomRoutingEndpointTrafficPolicies updateCustomRoutingEndpointTrafficPolicies(array $options = [])
 * @method UpdateDomain updateDomain(array $options = [])
 * @method UpdateDomainState updateDomainState(array $options = [])
 * @method UpdateEndpointGroup updateEndpointGroup(array $options = [])
 * @method UpdateEndpointGroupAttribute updateEndpointGroupAttribute(array $options = [])
 * @method UpdateEndpointGroups updateEndpointGroups(array $options = [])
 * @method UpdateForwardingRules updateForwardingRules(array $options = [])
 * @method UpdateIpSet updateIpSet(array $options = [])
 * @method UpdateIpSets updateIpSets(array $options = [])
 * @method UpdateListener updateListener(array $options = [])
 */
class GaApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ga';

    /** @var string */
    public $version = '2019-11-20';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'gaplus';
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAclEntries()
 */
class AddEntriesToAcl extends Rpc
{

    /**
     * @param array $aclEntries
     *
     * @return $this
     */
	public function withAclEntries(array $aclEntries)
	{
	    $this->data['AclEntries'] = $aclEntries;
		foreach ($aclEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['Entry'])){
				$this->options['query']['AclEntries.' . ($depth1 + 1) . '.Entry'] = $depth1Value['Entry'];
			}
			if(isset($depth1Value['EntryDescription'])){
				$this->options['query']['AclEntries.' . ($depth1 + 1) . '.EntryDescription'] = $depth1Value['EntryDescription'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAclIds()
 * @method string getAclType()
 * @method $this withAclType($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 */
class AssociateAclsWithListener extends Rpc
{

    /**
     * @param array $aclIds
     *
     * @return $this
     */
	public function withAclIds(array $aclIds)
	{
	    $this->data['AclIds'] = $aclIds;
		foreach ($aclIds as $i => $iValue) {
			$this->options['query']['AclIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method array getCertificates()
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class AssociateAdditionalCertificatesWithListener extends Rpc
{

    /**
     * @param array $certificates
     *
     * @return $this
     */
	public function withCertificates(array $certificates)
	{
	    $this->data['Certificates'] = $certificates;
		foreach ($certificates as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Certificates.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
			if(isset($depth1Value['Domain'])){
				$this->options['query']['Certificates.' . ($depth1 + 1) . '.Domain'] = $depth1Value['Domain'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDdosId()
 * @method $this withDdosId($value)
 * @method string getDdosRegionId()
 * @method $this withDdosRegionId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class AttachDdosToAccelerator extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSlsLogStoreName()
 * @method $this withSlsLogStoreName($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method array getEndpointGroupIds()
 * @method string getSlsProjectName()
 * @method $this withSlsProjectName($value)
 * @method string getSlsRegionId()
 * @method $this withSlsRegionId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class AttachLogStoreToEndpointGroup extends Rpc
{

    /**
     * @param array $endpointGroupIds
     *
     * @return $this
     */
	public function withEndpointGroupIds(array $endpointGroupIds)
	{
	    $this->data['EndpointGroupIds'] = $endpointGroupIds;
		foreach ($endpointGroupIds as $i => $iValue) {
			$this->options['query']['EndpointGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class BandwidthPackageAddAccelerator extends Rpc
{
}

/**
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class BandwidthPackageRemoveAccelerator extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 * @method string getProbeProtocol()
 * @method $this withProbeProtocol($value)
 * @method string getProbePort()
 * @method $this withProbePort($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ConfigEndpointProbe extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getIpSetConfig()
 * @method $this withIpSetConfig($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getBandwidthBillingType()
 * @method $this withBandwidthBillingType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateAccelerator extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
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
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method array getAclEntries()
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 */
class CreateAcl extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
		}

		return $this;
    }

    /**
     * @param array $aclEntries
     *
     * @return $this
     */
	public function withAclEntries(array $aclEntries)
	{
	    $this->data['AclEntries'] = $aclEntries;
		foreach ($aclEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['Entry'])){
				$this->options['query']['AclEntries.' . ($depth1 + 1) . '.Entry'] = $depth1Value['Entry'];
			}
			if(isset($depth1Value['EntryDescription'])){
				$this->options['query']['AclEntries.' . ($depth1 + 1) . '.EntryDescription'] = $depth1Value['EntryDescription'];
			}
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
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getDetectEnable()
 * @method $this withDetectEnable($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getDetectThreshold()
 * @method $this withDetectThreshold($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 * @method string getDetectTimes()
 * @method $this withDetectTimes($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 */
class CreateApplicationMonitor extends Rpc
{
}

/**
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getCbnGeographicRegionIdB()
 * @method $this withCbnGeographicRegionIdB($value)
 * @method string getCbnGeographicRegionIdA()
 * @method $this withCbnGeographicRegionIdA($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getBillingType()
 * @method $this withBillingType($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 * @method string getRatio()
 * @method $this withRatio($value)
 */
class CreateBandwidthPackage extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
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
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class CreateBasicAccelerateIp extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class CreateBasicAccelerateIpEndpointRelation extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getAccelerateIpEndpointRelations()
 * @method $this withAccelerateIpEndpointRelations($value)
 */
class CreateBasicAccelerateIpEndpointRelations extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getTag()
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getBandwidthBillingType()
 * @method $this withBandwidthBillingType($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getChargeType()
 * @method $this withChargeType($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateBasicAccelerator extends Rpc
{

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
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
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getEndpointZoneId()
 * @method $this withEndpointZoneId($value)
 * @method string getEndpointSubAddressType()
 * @method $this withEndpointSubAddressType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointAddress()
 * @method $this withEndpointAddress($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointSubAddress()
 * @method $this withEndpointSubAddress($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class CreateBasicEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEndpointAddress()
 * @method $this withEndpointAddress($value)
 * @method string getEndpointGroupRegion()
 * @method $this withEndpointGroupRegion($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointSubAddress()
 * @method $this withEndpointSubAddress($value)
 */
class CreateBasicEndpointGroup extends Rpc
{
}

/**
 * @method string getEndpoints()
 * @method $this withEndpoints($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class CreateBasicEndpoints extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getIspType()
 * @method $this withIspType($value)
 * @method string getAccelerateRegionId()
 * @method $this withAccelerateRegionId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class CreateBasicIpSet extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getDestinationConfigurations()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class CreateCustomRoutingEndpointGroupDestinations extends Rpc
{

    /**
     * @param array $destinationConfigurations
     *
     * @return $this
     */
	public function withDestinationConfigurations(array $destinationConfigurations)
	{
	    $this->data['DestinationConfigurations'] = $destinationConfigurations;
		foreach ($destinationConfigurations as $depth1 => $depth1Value) {
			foreach ($depth1Value['Protocols'] as $i => $iValue) {
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.Protocols.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointGroupConfigurations()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class CreateCustomRoutingEndpointGroups extends Rpc
{

    /**
     * @param array $endpointGroupConfigurations
     *
     * @return $this
     */
	public function withEndpointGroupConfigurations(array $endpointGroupConfigurations)
	{
	    $this->data['EndpointGroupConfigurations'] = $endpointGroupConfigurations;
		foreach ($endpointGroupConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['EndpointGroupRegion'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupRegion'] = $depth1Value['EndpointGroupRegion'];
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
			foreach ($depth1Value['DestinationConfigurations'] as $depth2 => $depth2Value) {
				foreach ($depth2Value['Protocols'] as $i => $iValue) {
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.DestinationConfigurations.' . ($depth2 + 1) . '.Protocols.' . ($i + 1)] = $iValue;
				}
				if(isset($depth2Value['FromPort'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.DestinationConfigurations.' . ($depth2 + 1) . '.FromPort'] = $depth2Value['FromPort'];
				}
				if(isset($depth2Value['ToPort'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.DestinationConfigurations.' . ($depth2 + 1) . '.ToPort'] = $depth2Value['ToPort'];
				}
			}
			foreach ($depth1Value['EndpointConfigurations'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Type'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Type'] = $depth2Value['Type'];
				}
				if(isset($depth2Value['Endpoint'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Endpoint'] = $depth2Value['Endpoint'];
				}
				if(isset($depth2Value['TrafficToEndpointPolicy'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.TrafficToEndpointPolicy'] = $depth2Value['TrafficToEndpointPolicy'];
				}
				foreach ($depth2Value['PolicyConfigurations'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['Address'])){
						$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.PolicyConfigurations.' . ($depth3 + 1) . '.Address'] = $depth3Value['Address'];
					}
					foreach ($depth3Value['PortRanges'] as $depth4 => $depth4Value) {
						if(isset($depth4Value['FromPort'])){
							$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.PolicyConfigurations.' . ($depth3 + 1) . '.PortRanges.' . ($depth4 + 1) . '.FromPort'] = $depth4Value['FromPort'];
						}
						if(isset($depth4Value['ToPort'])){
							$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.PolicyConfigurations.' . ($depth3 + 1) . '.PortRanges.' . ($depth4 + 1) . '.ToPort'] = $depth4Value['ToPort'];
						}
					}
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointConfigurations()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class CreateCustomRoutingEndpoints extends Rpc
{

    /**
     * @param array $endpointConfigurations
     *
     * @return $this
     */
	public function withEndpointConfigurations(array $endpointConfigurations)
	{
	    $this->data['EndpointConfigurations'] = $endpointConfigurations;
		foreach ($endpointConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['Endpoint'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Endpoint'] = $depth1Value['Endpoint'];
			}
			if(isset($depth1Value['TrafficToEndpointPolicy'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.TrafficToEndpointPolicy'] = $depth1Value['TrafficToEndpointPolicy'];
			}
			foreach ($depth1Value['PolicyConfigurations'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Address'])){
					$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.PolicyConfigurations.' . ($depth2 + 1) . '.Address'] = $depth2Value['Address'];
				}
				foreach ($depth2Value['PortRanges'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['FromPort'])){
						$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.PolicyConfigurations.' . ($depth2 + 1) . '.PortRanges.' . ($depth3 + 1) . '.FromPort'] = $depth3Value['FromPort'];
					}
					if(isset($depth3Value['ToPort'])){
						$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.PolicyConfigurations.' . ($depth2 + 1) . '.PortRanges.' . ($depth3 + 1) . '.ToPort'] = $depth3Value['ToPort'];
					}
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method array getPolicyConfigurations()
 */
class CreateCustomRoutingEndpointTrafficPolicies extends Rpc
{

    /**
     * @param array $policyConfigurations
     *
     * @return $this
     */
	public function withPolicyConfigurations(array $policyConfigurations)
	{
	    $this->data['PolicyConfigurations'] = $policyConfigurations;
		foreach ($policyConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['Address'])){
				$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.Address'] = $depth1Value['Address'];
			}
			foreach ($depth1Value['PortRanges'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FromPort'])){
					$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.PortRanges.' . ($depth2 + 1) . '.FromPort'] = $depth2Value['FromPort'];
				}
				if(isset($depth2Value['ToPort'])){
					$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.PortRanges.' . ($depth2 + 1) . '.ToPort'] = $depth2Value['ToPort'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method array getAcceleratorIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateDomain extends Rpc
{

    /**
     * @param array $acceleratorIds
     *
     * @return $this
     */
	public function withAcceleratorIds(array $acceleratorIds)
	{
	    $this->data['AcceleratorIds'] = $acceleratorIds;
		foreach ($acceleratorIds as $i => $iValue) {
			$this->options['query']['AcceleratorIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getPortOverrides()
 * @method string getHealthCheckEnabled()
 * @method $this withHealthCheckEnabled($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSystemTag()
 * @method string getHealthCheckIntervalSeconds()
 * @method $this withHealthCheckIntervalSeconds($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHealthCheckProtocol()
 * @method $this withHealthCheckProtocol($value)
 * @method string getEndpointRequestProtocol()
 * @method $this withEndpointRequestProtocol($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getHealthCheckPath()
 * @method $this withHealthCheckPath($value)
 * @method array getEndpointConfigurations()
 * @method string getEndpointGroupType()
 * @method $this withEndpointGroupType($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method array getTag()
 * @method string getTrafficPercentage()
 * @method $this withTrafficPercentage($value)
 * @method string getHealthCheckPort()
 * @method $this withHealthCheckPort($value)
 * @method string getThresholdCount()
 * @method $this withThresholdCount($value)
 * @method string getEndpointGroupRegion()
 * @method $this withEndpointGroupRegion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateEndpointGroup extends Rpc
{

    /**
     * @param array $portOverrides
     *
     * @return $this
     */
	public function withPortOverrides(array $portOverrides)
	{
	    $this->data['PortOverrides'] = $portOverrides;
		foreach ($portOverrides as $depth1 => $depth1Value) {
			if(isset($depth1Value['ListenerPort'])){
				$this->options['query']['PortOverrides.' . ($depth1 + 1) . '.ListenerPort'] = $depth1Value['ListenerPort'];
			}
			if(isset($depth1Value['EndpointPort'])){
				$this->options['query']['PortOverrides.' . ($depth1 + 1) . '.EndpointPort'] = $depth1Value['EndpointPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $systemTag
     *
     * @return $this
     */
	public function withSystemTag(array $systemTag)
	{
	    $this->data['SystemTag'] = $systemTag;
		foreach ($systemTag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Scope'])){
				$this->options['query']['SystemTag.' . ($depth1 + 1) . '.Scope'] = $depth1Value['Scope'];
			}
		}

		return $this;
    }

    /**
     * @param array $endpointConfigurations
     *
     * @return $this
     */
	public function withEndpointConfigurations(array $endpointConfigurations)
	{
	    $this->data['EndpointConfigurations'] = $endpointConfigurations;
		foreach ($endpointConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['EnableClientIPPreservation'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.EnableClientIPPreservation'] = $depth1Value['EnableClientIPPreservation'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
			if(isset($depth1Value['EnableProxyProtocol'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.EnableProxyProtocol'] = $depth1Value['EnableProxyProtocol'];
			}
			if(isset($depth1Value['Endpoint'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Endpoint'] = $depth1Value['Endpoint'];
			}
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
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointGroupConfigurations()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class CreateEndpointGroups extends Rpc
{

    /**
     * @param array $endpointGroupConfigurations
     *
     * @return $this
     */
	public function withEndpointGroupConfigurations(array $endpointGroupConfigurations)
	{
	    $this->data['EndpointGroupConfigurations'] = $endpointGroupConfigurations;
		foreach ($endpointGroupConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['EndpointGroupName'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupName'] = $depth1Value['EndpointGroupName'];
			}
			if(isset($depth1Value['EndpointGroupDescription'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupDescription'] = $depth1Value['EndpointGroupDescription'];
			}
			if(isset($depth1Value['EndpointGroupRegion'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupRegion'] = $depth1Value['EndpointGroupRegion'];
			}
			if(isset($depth1Value['TrafficPercentage'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.TrafficPercentage'] = $depth1Value['TrafficPercentage'];
			}
			if(isset($depth1Value['HealthCheckEnabled'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckEnabled'] = $depth1Value['HealthCheckEnabled'];
			}
			if(isset($depth1Value['HealthCheckIntervalSeconds'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckIntervalSeconds'] = $depth1Value['HealthCheckIntervalSeconds'];
			}
			if(isset($depth1Value['HealthCheckPath'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckPath'] = $depth1Value['HealthCheckPath'];
			}
			if(isset($depth1Value['HealthCheckPort'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckPort'] = $depth1Value['HealthCheckPort'];
			}
			if(isset($depth1Value['HealthCheckProtocol'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckProtocol'] = $depth1Value['HealthCheckProtocol'];
			}
			if(isset($depth1Value['ThresholdCount'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.ThresholdCount'] = $depth1Value['ThresholdCount'];
			}
			foreach ($depth1Value['EndpointConfigurations'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Type'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Type'] = $depth2Value['Type'];
				}
				if(isset($depth2Value['Weight'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Weight'] = $depth2Value['Weight'];
				}
				if(isset($depth2Value['Endpoint'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Endpoint'] = $depth2Value['Endpoint'];
				}
			}
			if(isset($depth1Value['EndpointRequestProtocol'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointRequestProtocol'] = $depth1Value['EndpointRequestProtocol'];
			}
			if(isset($depth1Value['EndpointGroupType'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupType'] = $depth1Value['EndpointGroupType'];
			}
			foreach ($depth1Value['PortOverrides'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['ListenerPort'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.PortOverrides.' . ($depth2 + 1) . '.ListenerPort'] = $depth2Value['ListenerPort'];
				}
				if(isset($depth2Value['EndpointPort'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.PortOverrides.' . ($depth2 + 1) . '.EndpointPort'] = $depth2Value['EndpointPort'];
				}
			}
			if(isset($depth1Value['EnableClientIPPreservationToa'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EnableClientIPPreservationToa'] = $depth1Value['EnableClientIPPreservationToa'];
			}
			if(isset($depth1Value['EnableClientIPPreservationProxyProtocol'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EnableClientIPPreservationProxyProtocol'] = $depth1Value['EnableClientIPPreservationProxyProtocol'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getForwardingRules()
 * @method $this withForwardingRules($value)
 */
class CreateForwardingRules extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method array getAccelerateRegion()
 */
class CreateIpSets extends Rpc
{

    /**
     * @param array $accelerateRegion
     *
     * @return $this
     */
	public function withAccelerateRegion(array $accelerateRegion)
	{
	    $this->data['AccelerateRegion'] = $accelerateRegion;
		foreach ($accelerateRegion as $depth1 => $depth1Value) {
			if(isset($depth1Value['AccelerateRegionId'])){
				$this->options['query']['AccelerateRegion.' . ($depth1 + 1) . '.AccelerateRegionId'] = $depth1Value['AccelerateRegionId'];
			}
			if(isset($depth1Value['IpVersion'])){
				$this->options['query']['AccelerateRegion.' . ($depth1 + 1) . '.IpVersion'] = $depth1Value['IpVersion'];
			}
			if(isset($depth1Value['Bandwidth'])){
				$this->options['query']['AccelerateRegion.' . ($depth1 + 1) . '.Bandwidth'] = $depth1Value['Bandwidth'];
			}
			if(isset($depth1Value['IspType'])){
				$this->options['query']['AccelerateRegion.' . ($depth1 + 1) . '.IspType'] = $depth1Value['IspType'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCustomRoutingEndpointGroupConfigurations()
 * @method $this withCustomRoutingEndpointGroupConfigurations($value)
 * @method string getType()
 * @method $this withType($value)
 * @method array getBackendPorts()
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupConfigurations()
 * @method $this withEndpointGroupConfigurations($value)
 * @method string getXForwardedForConfig()
 * @method $this withXForwardedForConfig($value)
 * @method string getSecurityPolicyId()
 * @method $this withSecurityPolicyId($value)
 * @method string getProxyProtocol()
 * @method $this withProxyProtocol($value)
 * @method array getPortRanges()
 * @method array getCertificates()
 * @method string getName()
 * @method $this withName($value)
 * @method string getClientAffinity()
 * @method $this withClientAffinity($value)
 */
class CreateListener extends Rpc
{

    /**
     * @param array $backendPorts
     *
     * @return $this
     */
	public function withBackendPorts(array $backendPorts)
	{
	    $this->data['BackendPorts'] = $backendPorts;
		foreach ($backendPorts as $depth1 => $depth1Value) {
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['BackendPorts.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['BackendPorts.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $portRanges
     *
     * @return $this
     */
	public function withPortRanges(array $portRanges)
	{
	    $this->data['PortRanges'] = $portRanges;
		foreach ($portRanges as $depth1 => $depth1Value) {
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['PortRanges.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['PortRanges.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $certificates
     *
     * @return $this
     */
	public function withCertificates(array $certificates)
	{
	    $this->data['Certificates'] = $certificates;
		foreach ($certificates as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Certificates.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSpareIps()
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class CreateSpareIps extends Rpc
{

    /**
     * @param array $spareIps
     *
     * @return $this
     */
	public function withSpareIps(array $spareIps)
	{
	    $this->data['SpareIps'] = $spareIps;
		foreach ($spareIps as $i => $iValue) {
			$this->options['query']['SpareIps.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteAccelerator extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class DeleteAcl extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DeleteApplicationMonitor extends Rpc
{
}

/**
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class DeleteBandwidthPackage extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 */
class DeleteBasicAccelerateIp extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteBasicAccelerateIpEndpointRelation extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteBasicAccelerator extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DeleteBasicEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DeleteBasicEndpointGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 */
class DeleteBasicIpSet extends Rpc
{
}

/**
 * @method array getDestinationIds()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DeleteCustomRoutingEndpointGroupDestinations extends Rpc
{

    /**
     * @param array $destinationIds
     *
     * @return $this
     */
	public function withDestinationIds(array $destinationIds)
	{
	    $this->data['DestinationIds'] = $destinationIds;
		foreach ($destinationIds as $i => $iValue) {
			$this->options['query']['DestinationIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointGroupIds()
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteCustomRoutingEndpointGroups extends Rpc
{

    /**
     * @param array $endpointGroupIds
     *
     * @return $this
     */
	public function withEndpointGroupIds(array $endpointGroupIds)
	{
	    $this->data['EndpointGroupIds'] = $endpointGroupIds;
		foreach ($endpointGroupIds as $i => $iValue) {
			$this->options['query']['EndpointGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointIds()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DeleteCustomRoutingEndpoints extends Rpc
{

    /**
     * @param array $endpointIds
     *
     * @return $this
     */
	public function withEndpointIds(array $endpointIds)
	{
	    $this->data['EndpointIds'] = $endpointIds;
		foreach ($endpointIds as $i => $iValue) {
			$this->options['query']['EndpointIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method array getPolicyIds()
 */
class DeleteCustomRoutingEndpointTrafficPolicies extends Rpc
{

    /**
     * @param array $policyIds
     *
     * @return $this
     */
	public function withPolicyIds(array $policyIds)
	{
	    $this->data['PolicyIds'] = $policyIds;
		foreach ($policyIds as $i => $iValue) {
			$this->options['query']['PolicyIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getAcceleratorIds()
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class DeleteDomainAcceleratorRelation extends Rpc
{

    /**
     * @param array $acceleratorIds
     *
     * @return $this
     */
	public function withAcceleratorIds(array $acceleratorIds)
	{
	    $this->data['AcceleratorIds'] = $acceleratorIds;
		foreach ($acceleratorIds as $i => $iValue) {
			$this->options['query']['AcceleratorIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DeleteEndpointGroup extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointGroupIds()
 */
class DeleteEndpointGroups extends Rpc
{

    /**
     * @param array $endpointGroupIds
     *
     * @return $this
     */
	public function withEndpointGroupIds(array $endpointGroupIds)
	{
	    $this->data['EndpointGroupIds'] = $endpointGroupIds;
		foreach ($endpointGroupIds as $i => $iValue) {
			$this->options['query']['EndpointGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getForwardingRuleIds()
 * @method $this withForwardingRuleIds($value)
 */
class DeleteForwardingRules extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteIpSet extends Rpc
{
}

/**
 * @method array getIpSetIds()
 */
class DeleteIpSets extends Rpc
{

    /**
     * @param array $ipSetIds
     *
     * @return $this
     */
	public function withIpSetIds(array $ipSetIds)
	{
	    $this->data['IpSetIds'] = $ipSetIds;
		foreach ($ipSetIds as $i => $iValue) {
			$this->options['query']['IpSetIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteListener extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSpareIps()
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DeleteSpareIps extends Rpc
{

    /**
     * @param array $spareIps
     *
     * @return $this
     */
	public function withSpareIps(array $spareIps)
	{
	    $this->data['SpareIps'] = $spareIps;
		foreach ($spareIps as $i => $iValue) {
			$this->options['query']['SpareIps.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DescribeAccelerator extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DescribeAcceleratorAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeApplicationMonitor extends Rpc
{
}

/**
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 */
class DescribeBandwidthPackage extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeBandwidthPackageAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getCommodityCode()
 * @method $this withCommodityCode($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class DescribeCommodity extends Rpc
{
}

/**
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getOrders()
 * @method $this withOrders($value)
 */
class DescribeCommodityPrice extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getEndpointGroup()
 * @method $this withEndpointGroup($value)
 */
class DescribeCustomRoutingEndpoint extends Rpc
{
}

/**
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DescribeCustomRoutingEndpointGroup extends Rpc
{
}

/**
 * @method string getDestinationId()
 * @method $this withDestinationId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DescribeCustomRoutingEndpointGroupDestinations extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 */
class DescribeCustomRoutingEndPointTrafficPolicy extends Rpc
{
}

/**
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DescribeEndpointGroup extends Rpc
{
}

/**
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 */
class DescribeIpSet extends Rpc
{
}

/**
 * @method string getListenerId()
 * @method $this withListenerId($value)
 */
class DescribeListener extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DetachDdosFromAccelerator extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method array getEndpointGroupIds()
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DetachLogStoreFromEndpointGroup extends Rpc
{

    /**
     * @param array $endpointGroupIds
     *
     * @return $this
     */
	public function withEndpointGroupIds(array $endpointGroupIds)
	{
	    $this->data['EndpointGroupIds'] = $endpointGroupIds;
		foreach ($endpointGroupIds as $i => $iValue) {
			$this->options['query']['EndpointGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DetectApplicationMonitor extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DisableApplicationMonitor extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAclIds()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 */
class DissociateAclsFromListener extends Rpc
{

    /**
     * @param array $aclIds
     *
     * @return $this
     */
	public function withAclIds(array $aclIds)
	{
	    $this->data['AclIds'] = $aclIds;
		foreach ($aclIds as $i => $iValue) {
			$this->options['query']['AclIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getDomains()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DissociateAdditionalCertificatesFromListener extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $i => $iValue) {
			$this->options['query']['Domains.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class EnableApplicationMonitor extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 */
class GetAcl extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 */
class GetBasicAccelerateIp extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class GetBasicAccelerateIpEndpointRelation extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 */
class GetBasicAccelerateIpIdleCount extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class GetBasicAccelerator extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 */
class GetBasicEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class GetBasicEndpointGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 */
class GetBasicIpSet extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class GetHealthStatus extends Rpc
{
}

class GetInvalidDomainCount extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class GetIpsetsBandwidthLimit extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpareIp()
 * @method $this withSpareIp($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class GetSpareIp extends Rpc
{
}

class ListAccelerateAreas extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method array getTag()
 */
class ListAccelerators extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getTag()
 */
class ListAcls extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchValue()
 * @method $this withSearchValue($value)
 */
class ListApplicationMonitor extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ListApplicationMonitorDetectResult extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListAvailableAccelerateAreas extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListAvailableBusiRegions extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListBandwidthackages extends Rpc
{
}

/**
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method array getTag()
 */
class ListBandwidthPackages extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListBasicAccelerateIpEndpointRelations extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 * @method string getAccelerateIpAddress()
 * @method $this withAccelerateIpAddress($value)
 * @method string getAccelerateIpId()
 * @method $this withAccelerateIpId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListBasicAccelerateIps extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getState()
 * @method $this withState($value)
 * @method array getTag()
 */
class ListBasicAccelerators extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListBasicEndpoints extends Rpc
{
}

class ListBusiRegions extends Rpc
{
}

/**
 * @method string getIsEpg()
 * @method $this withIsEpg($value)
 * @method string getIsIpSet()
 * @method $this withIsIpSet($value)
 * @method string getIpVersion()
 * @method $this withIpVersion($value)
 */
class ListCommonAreas extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getFromPort()
 * @method $this withFromPort($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method array getProtocols()
 * @method string getToPort()
 * @method $this withToPort($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListCustomRoutingEndpointGroupDestinations extends Rpc
{

    /**
     * @param array $protocols
     *
     * @return $this
     */
	public function withProtocols(array $protocols)
	{
	    $this->data['Protocols'] = $protocols;
		foreach ($protocols as $i => $iValue) {
			$this->options['query']['Protocols.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListCustomRoutingEndpointGroups extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListCustomRoutingEndpoints extends Rpc
{
}

/**
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListCustomRoutingEndpointTrafficPolicies extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListCustomRoutingPortMappings extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDestinationAddress()
 * @method $this withDestinationAddress($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListCustomRoutingPortMappingsByDestination extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getState()
 * @method $this withState($value)
 */
class ListDomains extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getEndpointGroupType()
 * @method $this withEndpointGroupType($value)
 * @method string getAccessLogSwitch()
 * @method $this withAccessLogSwitch($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method array getTag()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListEndpointGroups extends Rpc
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
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getForwardingRuleId()
 * @method $this withForwardingRuleId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListForwardingRules extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListIpSets extends Rpc
{
}

/**
 * @method string getAcceleratorType()
 * @method $this withAcceleratorType($value)
 * @method string getBusinessRegionId()
 * @method $this withBusinessRegionId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListIspTypes extends Rpc
{
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListListenerCertificates extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListListeners extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ListSpareIps extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSystemSecurityPolicies extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
{

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
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

class QueryCrossBorderApprovalStatus extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAclEntries()
 */
class RemoveEntriesFromAcl extends Rpc
{

    /**
     * @param array $aclEntries
     *
     * @return $this
     */
	public function withAclEntries(array $aclEntries)
	{
	    $this->data['AclEntries'] = $aclEntries;
		foreach ($aclEntries as $depth1 => $depth1Value) {
			if(isset($depth1Value['Entry'])){
				$this->options['query']['AclEntries.' . ($depth1 + 1) . '.Entry'] = $depth1Value['Entry'];
			}
		}

		return $this;
    }
}

/**
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getTargetBandwidthPackageId()
 * @method $this withTargetBandwidthPackageId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class ReplaceBandwidthPackage extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTag()
 */
class TagResources extends Rpc
{

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
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

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
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class UpdateAccelerator extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class UpdateAcceleratorAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class UpdateAcceleratorConfirm extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCrossBorderMode()
 * @method $this withCrossBorderMode($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class UpdateAcceleratorCrossBorderMode extends Rpc
{
}

/**
 * @method string getAclId()
 * @method $this withAclId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class UpdateAclAttribute extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCertificateId()
 * @method $this withCertificateId($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class UpdateAdditionalCertificateWithListener extends Rpc
{
}

/**
 * @method string getDetectEnable()
 * @method $this withDetectEnable($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getSilenceTime()
 * @method $this withSilenceTime($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getDetectThreshold()
 * @method $this withDetectThreshold($value)
 * @method string getOptionsJson()
 * @method $this withOptionsJson($value)
 * @method string getDetectTimes()
 * @method $this withDetectTimes($value)
 */
class UpdateApplicationMonitor extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoRenewDuration()
 * @method $this withAutoRenewDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoRenew()
 * @method $this withAutoRenew($value)
 * @method string getRenewalStatus()
 * @method $this withRenewalStatus($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateBandwidthPackagaAutoRenewAttribute extends Rpc
{
}

/**
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getBandwidthPackageId()
 * @method $this withBandwidthPackageId($value)
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateBandwidthPackage extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class UpdateBasicAccelerator extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class UpdateBasicEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEndpointAddress()
 * @method $this withEndpointAddress($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndpointSubAddress()
 * @method $this withEndpointSubAddress($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class UpdateBasicEndpointGroup extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 */
class UpdateBasicIpSet extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class UpdateCustomRoutingEndpointGroupAttribute extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getDestinationConfigurations()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class UpdateCustomRoutingEndpointGroupDestinations extends Rpc
{

    /**
     * @param array $destinationConfigurations
     *
     * @return $this
     */
	public function withDestinationConfigurations(array $destinationConfigurations)
	{
	    $this->data['DestinationConfigurations'] = $destinationConfigurations;
		foreach ($destinationConfigurations as $depth1 => $depth1Value) {
			foreach ($depth1Value['Protocols'] as $i => $iValue) {
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.Protocols.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
			if(isset($depth1Value['DestinationId'])){
				$this->options['query']['DestinationConfigurations.' . ($depth1 + 1) . '.DestinationId'] = $depth1Value['DestinationId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointConfigurations()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class UpdateCustomRoutingEndpoints extends Rpc
{

    /**
     * @param array $endpointConfigurations
     *
     * @return $this
     */
	public function withEndpointConfigurations(array $endpointConfigurations)
	{
	    $this->data['EndpointConfigurations'] = $endpointConfigurations;
		foreach ($endpointConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['TrafficToEndpointPolicy'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.TrafficToEndpointPolicy'] = $depth1Value['TrafficToEndpointPolicy'];
			}
			if(isset($depth1Value['EndpointId'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.EndpointId'] = $depth1Value['EndpointId'];
			}
			foreach ($depth1Value['PolicyConfigurations'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Address'])){
					$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.PolicyConfigurations.' . ($depth2 + 1) . '.Address'] = $depth2Value['Address'];
				}
				foreach ($depth2Value['PortRanges'] as $depth3 => $depth3Value) {
					if(isset($depth3Value['FromPort'])){
						$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.PolicyConfigurations.' . ($depth2 + 1) . '.PortRanges.' . ($depth3 + 1) . '.FromPort'] = $depth3Value['FromPort'];
					}
					if(isset($depth3Value['ToPort'])){
						$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.PolicyConfigurations.' . ($depth2 + 1) . '.PortRanges.' . ($depth3 + 1) . '.ToPort'] = $depth3Value['ToPort'];
					}
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method array getPolicyConfigurations()
 */
class UpdateCustomRoutingEndpointTrafficPolicies extends Rpc
{

    /**
     * @param array $policyConfigurations
     *
     * @return $this
     */
	public function withPolicyConfigurations(array $policyConfigurations)
	{
	    $this->data['PolicyConfigurations'] = $policyConfigurations;
		foreach ($policyConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['PolicyId'])){
				$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.PolicyId'] = $depth1Value['PolicyId'];
			}
			if(isset($depth1Value['Address'])){
				$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.Address'] = $depth1Value['Address'];
			}
			foreach ($depth1Value['PortRanges'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FromPort'])){
					$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.PortRanges.' . ($depth2 + 1) . '.FromPort'] = $depth2Value['FromPort'];
				}
				if(isset($depth2Value['ToPort'])){
					$this->options['query']['PolicyConfigurations.' . ($depth1 + 1) . '.PortRanges.' . ($depth2 + 1) . '.ToPort'] = $depth2Value['ToPort'];
				}
			}
		}

		return $this;
    }
}

/**
 * @method string getTargetDomain()
 * @method $this withTargetDomain($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class UpdateDomain extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class UpdateDomainState extends Rpc
{
}

/**
 * @method array getPortOverrides()
 * @method string getHealthCheckEnabled()
 * @method $this withHealthCheckEnabled($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getHealthCheckIntervalSeconds()
 * @method $this withHealthCheckIntervalSeconds($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHealthCheckProtocol()
 * @method $this withHealthCheckProtocol($value)
 * @method string getEndpointRequestProtocol()
 * @method $this withEndpointRequestProtocol($value)
 * @method string getHealthCheckPath()
 * @method $this withHealthCheckPath($value)
 * @method array getEndpointConfigurations()
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 * @method string getTrafficPercentage()
 * @method $this withTrafficPercentage($value)
 * @method string getHealthCheckPort()
 * @method $this withHealthCheckPort($value)
 * @method string getThresholdCount()
 * @method $this withThresholdCount($value)
 * @method string getEndpointGroupRegion()
 * @method $this withEndpointGroupRegion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateEndpointGroup extends Rpc
{

    /**
     * @param array $portOverrides
     *
     * @return $this
     */
	public function withPortOverrides(array $portOverrides)
	{
	    $this->data['PortOverrides'] = $portOverrides;
		foreach ($portOverrides as $depth1 => $depth1Value) {
			if(isset($depth1Value['ListenerPort'])){
				$this->options['query']['PortOverrides.' . ($depth1 + 1) . '.ListenerPort'] = $depth1Value['ListenerPort'];
			}
			if(isset($depth1Value['EndpointPort'])){
				$this->options['query']['PortOverrides.' . ($depth1 + 1) . '.EndpointPort'] = $depth1Value['EndpointPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $endpointConfigurations
     *
     * @return $this
     */
	public function withEndpointConfigurations(array $endpointConfigurations)
	{
	    $this->data['EndpointConfigurations'] = $endpointConfigurations;
		foreach ($endpointConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['Type'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
			}
			if(isset($depth1Value['EnableClientIPPreservation'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.EnableClientIPPreservation'] = $depth1Value['EnableClientIPPreservation'];
			}
			if(isset($depth1Value['Weight'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Weight'] = $depth1Value['Weight'];
			}
			if(isset($depth1Value['EnableProxyProtocol'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.EnableProxyProtocol'] = $depth1Value['EnableProxyProtocol'];
			}
			if(isset($depth1Value['Endpoint'])){
				$this->options['query']['EndpointConfigurations.' . ($depth1 + 1) . '.Endpoint'] = $depth1Value['Endpoint'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class UpdateEndpointGroupAttribute extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getEndpointGroupConfigurations()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 */
class UpdateEndpointGroups extends Rpc
{

    /**
     * @param array $endpointGroupConfigurations
     *
     * @return $this
     */
	public function withEndpointGroupConfigurations(array $endpointGroupConfigurations)
	{
	    $this->data['EndpointGroupConfigurations'] = $endpointGroupConfigurations;
		foreach ($endpointGroupConfigurations as $depth1 => $depth1Value) {
			if(isset($depth1Value['EndpointGroupName'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupName'] = $depth1Value['EndpointGroupName'];
			}
			if(isset($depth1Value['EndpointGroupDescription'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupDescription'] = $depth1Value['EndpointGroupDescription'];
			}
			if(isset($depth1Value['TrafficPercentage'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.TrafficPercentage'] = $depth1Value['TrafficPercentage'];
			}
			if(isset($depth1Value['HealthCheckEnabled'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckEnabled'] = $depth1Value['HealthCheckEnabled'];
			}
			if(isset($depth1Value['HealthCheckIntervalSeconds'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckIntervalSeconds'] = $depth1Value['HealthCheckIntervalSeconds'];
			}
			if(isset($depth1Value['HealthCheckPath'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckPath'] = $depth1Value['HealthCheckPath'];
			}
			if(isset($depth1Value['HealthCheckPort'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckPort'] = $depth1Value['HealthCheckPort'];
			}
			if(isset($depth1Value['HealthCheckProtocol'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.HealthCheckProtocol'] = $depth1Value['HealthCheckProtocol'];
			}
			if(isset($depth1Value['ThresholdCount'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.ThresholdCount'] = $depth1Value['ThresholdCount'];
			}
			foreach ($depth1Value['EndpointConfigurations'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Type'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Type'] = $depth2Value['Type'];
				}
				if(isset($depth2Value['Weight'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Weight'] = $depth2Value['Weight'];
				}
				if(isset($depth2Value['Endpoint'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointConfigurations.' . ($depth2 + 1) . '.Endpoint'] = $depth2Value['Endpoint'];
				}
			}
			if(isset($depth1Value['EndpointRequestProtocol'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointRequestProtocol'] = $depth1Value['EndpointRequestProtocol'];
			}
			foreach ($depth1Value['PortOverrides'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['ListenerPort'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.PortOverrides.' . ($depth2 + 1) . '.ListenerPort'] = $depth2Value['ListenerPort'];
				}
				if(isset($depth2Value['EndpointPort'])){
					$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.PortOverrides.' . ($depth2 + 1) . '.EndpointPort'] = $depth2Value['EndpointPort'];
				}
			}
			if(isset($depth1Value['EnableClientIPPreservationToa'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EnableClientIPPreservationToa'] = $depth1Value['EnableClientIPPreservationToa'];
			}
			if(isset($depth1Value['EnableClientIPPreservationProxyProtocol'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EnableClientIPPreservationProxyProtocol'] = $depth1Value['EnableClientIPPreservationProxyProtocol'];
			}
			if(isset($depth1Value['EndpointGroupId'])){
				$this->options['query']['EndpointGroupConfigurations.' . ($depth1 + 1) . '.EndpointGroupId'] = $depth1Value['EndpointGroupId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getForwardingRules()
 * @method $this withForwardingRules($value)
 */
class UpdateForwardingRules extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getIpSetId()
 * @method $this withIpSetId($value)
 */
class UpdateIpSet extends Rpc
{
}

/**
 * @method array getIpSets()
 */
class UpdateIpSets extends Rpc
{

    /**
     * @param array $ipSets
     *
     * @return $this
     */
	public function withIpSets(array $ipSets)
	{
	    $this->data['IpSets'] = $ipSets;
		foreach ($ipSets as $depth1 => $depth1Value) {
			if(isset($depth1Value['Bandwidth'])){
				$this->options['query']['IpSets.' . ($depth1 + 1) . '.Bandwidth'] = $depth1Value['Bandwidth'];
			}
			if(isset($depth1Value['IpSetId'])){
				$this->options['query']['IpSets.' . ($depth1 + 1) . '.IpSetId'] = $depth1Value['IpSetId'];
			}
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getBackendPorts()
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getXForwardedForConfig()
 * @method $this withXForwardedForConfig($value)
 * @method string getSecurityPolicyId()
 * @method $this withSecurityPolicyId($value)
 * @method string getProxyProtocol()
 * @method $this withProxyProtocol($value)
 * @method array getPortRanges()
 * @method array getCertificates()
 * @method string getName()
 * @method $this withName($value)
 * @method string getClientAffinity()
 * @method $this withClientAffinity($value)
 */
class UpdateListener extends Rpc
{

    /**
     * @param array $backendPorts
     *
     * @return $this
     */
	public function withBackendPorts(array $backendPorts)
	{
	    $this->data['BackendPorts'] = $backendPorts;
		foreach ($backendPorts as $depth1 => $depth1Value) {
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['BackendPorts.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['BackendPorts.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $portRanges
     *
     * @return $this
     */
	public function withPortRanges(array $portRanges)
	{
	    $this->data['PortRanges'] = $portRanges;
		foreach ($portRanges as $depth1 => $depth1Value) {
			if(isset($depth1Value['FromPort'])){
				$this->options['query']['PortRanges.' . ($depth1 + 1) . '.FromPort'] = $depth1Value['FromPort'];
			}
			if(isset($depth1Value['ToPort'])){
				$this->options['query']['PortRanges.' . ($depth1 + 1) . '.ToPort'] = $depth1Value['ToPort'];
			}
		}

		return $this;
    }

    /**
     * @param array $certificates
     *
     * @return $this
     */
	public function withCertificates(array $certificates)
	{
	    $this->data['Certificates'] = $certificates;
		foreach ($certificates as $depth1 => $depth1Value) {
			if(isset($depth1Value['Id'])){
				$this->options['query']['Certificates.' . ($depth1 + 1) . '.Id'] = $depth1Value['Id'];
			}
		}

		return $this;
    }
}
