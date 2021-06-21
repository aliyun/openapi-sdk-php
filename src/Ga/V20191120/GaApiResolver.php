<?php

namespace AlibabaCloud\Ga\V20191120;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddEntriesToAcl addEntriesToAcl(array $options = [])
 * @method AssociateAclsWithListener associateAclsWithListener(array $options = [])
 * @method AttachDdosToAccelerator attachDdosToAccelerator(array $options = [])
 * @method AttachLogStoreToEndpointGroup attachLogStoreToEndpointGroup(array $options = [])
 * @method BandwidthPackageAddAccelerator bandwidthPackageAddAccelerator(array $options = [])
 * @method BandwidthPackageRemoveAccelerator bandwidthPackageRemoveAccelerator(array $options = [])
 * @method ConfigEndpointProbe configEndpointProbe(array $options = [])
 * @method CreateAccelerator createAccelerator(array $options = [])
 * @method CreateAcl createAcl(array $options = [])
 * @method CreateBandwidthPackage createBandwidthPackage(array $options = [])
 * @method CreateEndpointGroup createEndpointGroup(array $options = [])
 * @method CreateForwardingRules createForwardingRules(array $options = [])
 * @method CreateIpSets createIpSets(array $options = [])
 * @method CreateListener createListener(array $options = [])
 * @method DeleteAccelerator deleteAccelerator(array $options = [])
 * @method DeleteAcl deleteAcl(array $options = [])
 * @method DeleteBandwidthPackage deleteBandwidthPackage(array $options = [])
 * @method DeleteEndpointGroup deleteEndpointGroup(array $options = [])
 * @method DeleteForwardingRules deleteForwardingRules(array $options = [])
 * @method DeleteIpSet deleteIpSet(array $options = [])
 * @method DeleteIpSets deleteIpSets(array $options = [])
 * @method DeleteListener deleteListener(array $options = [])
 * @method DescribeAccelerator describeAccelerator(array $options = [])
 * @method DescribeBandwidthPackage describeBandwidthPackage(array $options = [])
 * @method DescribeEndpointGroup describeEndpointGroup(array $options = [])
 * @method DescribeIpSet describeIpSet(array $options = [])
 * @method DescribeListener describeListener(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetachDdosFromAccelerator detachDdosFromAccelerator(array $options = [])
 * @method DetachLogStoreFromEndpointGroup detachLogStoreFromEndpointGroup(array $options = [])
 * @method DissociateAclsFromListener dissociateAclsFromListener(array $options = [])
 * @method GetAcl getAcl(array $options = [])
 * @method ListAccelerateAreas listAccelerateAreas(array $options = [])
 * @method ListAccelerators listAccelerators(array $options = [])
 * @method ListAcls listAcls(array $options = [])
 * @method ListAvailableAccelerateAreas listAvailableAccelerateAreas(array $options = [])
 * @method ListAvailableBusiRegions listAvailableBusiRegions(array $options = [])
 * @method ListBandwidthackages listBandwidthackages(array $options = [])
 * @method ListBandwidthPackages listBandwidthPackages(array $options = [])
 * @method ListBusiRegions listBusiRegions(array $options = [])
 * @method ListEndpointGroups listEndpointGroups(array $options = [])
 * @method ListForwardingRules listForwardingRules(array $options = [])
 * @method ListIpSets listIpSets(array $options = [])
 * @method ListListeners listListeners(array $options = [])
 * @method RemoveEntriesFromAcl removeEntriesFromAcl(array $options = [])
 * @method ReplaceBandwidthPackage replaceBandwidthPackage(array $options = [])
 * @method UpdateAccelerator updateAccelerator(array $options = [])
 * @method UpdateAclAttribute updateAclAttribute(array $options = [])
 * @method UpdateBandwidthPackage updateBandwidthPackage(array $options = [])
 * @method UpdateEndpointGroup updateEndpointGroup(array $options = [])
 * @method UpdateEndpointGroupAttribute updateEndpointGroupAttribute(array $options = [])
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
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getPromotionOptionNo()
 * @method $this withPromotionOptionNo($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getSpec()
 * @method $this withSpec($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPricingCycle()
 * @method $this withPricingCycle($value)
 */
class CreateAccelerator extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getAclEntries()
 * @method string getAddressIPVersion()
 * @method $this withAddressIPVersion($value)
 */
class CreateAcl extends Rpc
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
 * @method string getBandwidthType()
 * @method $this withBandwidthType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoUseCoupon()
 * @method $this withAutoUseCoupon($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDuration()
 * @method $this withDuration($value)
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
}

/**
 * @method array getPortOverrides()
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
 * @method string getListenerId()
 * @method $this withListenerId($value)
 * @method string getHealthCheckPath()
 * @method $this withHealthCheckPath($value)
 * @method array getEndpointConfigurations()
 * @method string getEndpointGroupType()
 * @method $this withEndpointGroupType($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
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
 * @method string getProtocol()
 * @method $this withProtocol($value)
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
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
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class DeleteEndpointGroup extends Rpc
{
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
 * @method string getAcceleratorId()
 * @method $this withAcceleratorId($value)
 */
class DescribeAccelerator extends Rpc
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
 * @method string getAclId()
 * @method $this withAclId($value)
 */
class GetAcl extends Rpc
{
}

class ListAccelerateAreas extends Rpc
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
class ListAccelerators extends Rpc
{
}

/**
 * @method string getAclName()
 * @method $this withAclName($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAclIds()
 * @method $this withAclIds($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAcls extends Rpc
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
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 */
class ListBandwidthPackages extends Rpc
{
}

class ListBusiRegions extends Rpc
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
 * @method string getEndpointGroupId()
 * @method $this withEndpointGroupId($value)
 */
class ListEndpointGroups extends Rpc
{
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
 */
class ReplaceBandwidthPackage extends Rpc
{
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
 * @method array getPortOverrides()
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
