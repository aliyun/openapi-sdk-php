<?php

namespace AlibabaCloud\Privatelink\V20200415;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddUserToVpcEndpointService addUserToVpcEndpointService(array $options = [])
 * @method AddZoneToVpcEndpoint addZoneToVpcEndpoint(array $options = [])
 * @method AttachResourceToVpcEndpointService attachResourceToVpcEndpointService(array $options = [])
 * @method AttachSecurityGroupToVpcEndpoint attachSecurityGroupToVpcEndpoint(array $options = [])
 * @method CheckProductOpen checkProductOpen(array $options = [])
 * @method CreateVpcEndpoint createVpcEndpoint(array $options = [])
 * @method CreateVpcEndpointService createVpcEndpointService(array $options = [])
 * @method DeleteVpcEndpoint deleteVpcEndpoint(array $options = [])
 * @method DeleteVpcEndpointService deleteVpcEndpointService(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeZones describeZones(array $options = [])
 * @method DetachResourceFromVpcEndpointService detachResourceFromVpcEndpointService(array $options = [])
 * @method DetachSecurityGroupFromVpcEndpoint detachSecurityGroupFromVpcEndpoint(array $options = [])
 * @method DisableVpcEndpointConnection disableVpcEndpointConnection(array $options = [])
 * @method DisableVpcEndpointZoneConnection disableVpcEndpointZoneConnection(array $options = [])
 * @method EnableVpcEndpointConnection enableVpcEndpointConnection(array $options = [])
 * @method EnableVpcEndpointZoneConnection enableVpcEndpointZoneConnection(array $options = [])
 * @method GetVpcEndpointAttribute getVpcEndpointAttribute(array $options = [])
 * @method GetVpcEndpointServiceAttribute getVpcEndpointServiceAttribute(array $options = [])
 * @method ListVpcEndpointConnections listVpcEndpointConnections(array $options = [])
 * @method ListVpcEndpoints listVpcEndpoints(array $options = [])
 * @method ListVpcEndpointSecurityGroups listVpcEndpointSecurityGroups(array $options = [])
 * @method ListVpcEndpointServiceResources listVpcEndpointServiceResources(array $options = [])
 * @method ListVpcEndpointServices listVpcEndpointServices(array $options = [])
 * @method ListVpcEndpointServicesByEndUser listVpcEndpointServicesByEndUser(array $options = [])
 * @method ListVpcEndpointServiceUsers listVpcEndpointServiceUsers(array $options = [])
 * @method ListVpcEndpointZones listVpcEndpointZones(array $options = [])
 * @method OpenPrivateLinkService openPrivateLinkService(array $options = [])
 * @method RemoveUserFromVpcEndpointService removeUserFromVpcEndpointService(array $options = [])
 * @method RemoveZoneFromVpcEndpoint removeZoneFromVpcEndpoint(array $options = [])
 * @method UpdateVpcEndpointAttribute updateVpcEndpointAttribute(array $options = [])
 * @method UpdateVpcEndpointConnectionAttribute updateVpcEndpointConnectionAttribute(array $options = [])
 * @method UpdateVpcEndpointServiceAttribute updateVpcEndpointServiceAttribute(array $options = [])
 * @method UpdateVpcEndpointServiceResourceAttribute updateVpcEndpointServiceResourceAttribute(array $options = [])
 * @method UpdateVpcEndpointZoneConnectionResourceAttribute updateVpcEndpointZoneConnectionResourceAttribute(array $options = [])
 */
class PrivatelinkApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Privatelink';

    /** @var string */
    public $version = '2020-04-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'privatelink';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class AddUserToVpcEndpointService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getIp()
 * @method string getVSwitchId()
 * @method $this withVSwitchId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class AddZoneToVpcEndpoint extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['query']['ip'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class AttachResourceToVpcEndpointService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class AttachSecurityGroupToVpcEndpoint extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

class CheckProductOpen extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getSecurityGroupId()
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method array getZone()
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getEndpointDescription()
 * @method $this withEndpointDescription($value)
 * @method string getZonePrivateIpAddressCount()
 * @method $this withZonePrivateIpAddressCount($value)
 * @method string getProtectedEnabled()
 * @method $this withProtectedEnabled($value)
 * @method string getEndpointName()
 * @method $this withEndpointName($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class CreateVpcEndpoint extends Rpc
{

    /**
     * @param array $securityGroupId
     *
     * @return $this
     */
	public function withSecurityGroupId(array $securityGroupId)
	{
	    $this->data['SecurityGroupId'] = $securityGroupId;
		foreach ($securityGroupId as $i => $iValue) {
			$this->options['query']['SecurityGroupId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $zone
     *
     * @return $this
     */
	public function withZone(array $zone)
	{
	    $this->data['Zone'] = $zone;
		foreach ($zone as $depth1 => $depth1Value) {
			if(isset($depth1Value['VSwitchId'])){
				$this->options['query']['Zone.' . ($depth1 + 1) . '.VSwitchId'] = $depth1Value['VSwitchId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['Zone.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
			}
			if(isset($depth1Value['Ip'])){
				$this->options['query']['Zone.' . ($depth1 + 1) . '.ip'] = $depth1Value['Ip'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPrivateServiceDomainEnabled()
 * @method $this withPrivateServiceDomainEnabled($value)
 * @method string getPrivateServiceDomain()
 * @method $this withPrivateServiceDomain($value)
 * @method string getAutoAcceptEnabled()
 * @method $this withAutoAcceptEnabled($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getPayer()
 * @method $this withPayer($value)
 * @method string getZoneAffinityEnabled()
 * @method $this withZoneAffinityEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method array getResource()
 * @method string getServiceResourceType()
 * @method $this withServiceResourceType($value)
 * @method string getServiceDescription()
 * @method $this withServiceDescription($value)
 */
class CreateVpcEndpointService extends Rpc
{

    /**
     * @param array $resource
     *
     * @return $this
     */
	public function withResource(array $resource)
	{
	    $this->data['Resource'] = $resource;
		foreach ($resource as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ResourceType'] = $depth1Value['ResourceType'];
			}
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['ZoneId'])){
				$this->options['query']['Resource.' . ($depth1 + 1) . '.ZoneId'] = $depth1Value['ZoneId'];
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
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getForce()
 * @method $this withForce($value)
 */
class DeleteVpcEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DeleteVpcEndpointService extends Rpc
{
}

class DescribeRegions extends Rpc
{
}

class DescribeZones extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DetachResourceFromVpcEndpointService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getSecurityGroupId()
 * @method $this withSecurityGroupId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 */
class DetachSecurityGroupFromVpcEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DisableVpcEndpointConnection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getReplacedResource()
 * @method $this withReplacedResource($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class DisableVpcEndpointZoneConnection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class EnableVpcEndpointConnection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class EnableVpcEndpointZoneConnection extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 */
class GetVpcEndpointAttribute extends Rpc
{
}

/**
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class GetVpcEndpointServiceAttribute extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getEndpointOwnerId()
 * @method $this withEndpointOwnerId($value)
 * @method string getReplacedResourceId()
 * @method $this withReplacedResourceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getConnectionStatus()
 * @method $this withConnectionStatus($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getEniId()
 * @method $this withEniId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ListVpcEndpointConnections extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getEndpointStatus()
 * @method $this withEndpointStatus($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getEndpointType()
 * @method $this withEndpointType($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getConnectionStatus()
 * @method $this withConnectionStatus($value)
 * @method string getVpcId()
 * @method $this withVpcId($value)
 * @method string getEndpointName()
 * @method $this withEndpointName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVpcEndpoints extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVpcEndpointSecurityGroups extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ListVpcEndpointServiceResources extends Rpc
{
}

/**
 * @method string getServiceBusinessStatus()
 * @method $this withServiceBusinessStatus($value)
 * @method string getAutoAcceptEnabled()
 * @method $this withAutoAcceptEnabled($value)
 * @method string getServiceStatus()
 * @method $this withServiceStatus($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getZoneAffinityEnabled()
 * @method $this withZoneAffinityEnabled($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getServiceResourceType()
 * @method $this withServiceResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ListVpcEndpointServices extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getServiceName()
 * @method $this withServiceName($value)
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ListVpcEndpointServicesByEndUser extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class ListVpcEndpointServiceUsers extends Rpc
{
}

/**
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVpcEndpointZones extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenPrivateLinkService extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class RemoveUserFromVpcEndpointService extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 */
class RemoveZoneFromVpcEndpoint extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getEndpointDescription()
 * @method $this withEndpointDescription($value)
 * @method string getEndpointName()
 * @method $this withEndpointName($value)
 */
class UpdateVpcEndpointAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateVpcEndpointConnectionAttribute extends Rpc
{
}

/**
 * @method string getPrivateServiceDomainEnabled()
 * @method $this withPrivateServiceDomainEnabled($value)
 * @method string getPrivateServiceDomain()
 * @method $this withPrivateServiceDomain($value)
 * @method string getAutoAcceptEnabled()
 * @method $this withAutoAcceptEnabled($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConnectBandwidth()
 * @method $this withConnectBandwidth($value)
 * @method string getZoneAffinityEnabled()
 * @method $this withZoneAffinityEnabled($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getServiceDescription()
 * @method $this withServiceDescription($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateVpcEndpointServiceAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAutoAllocatedEnabled()
 * @method $this withAutoAllocatedEnabled($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateVpcEndpointServiceResourceAttribute extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndpointId()
 * @method $this withEndpointId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceAllocateMode()
 * @method $this withResourceAllocateMode($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceReplaceMode()
 * @method $this withResourceReplaceMode($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 */
class UpdateVpcEndpointZoneConnectionResourceAttribute extends Rpc
{
}
