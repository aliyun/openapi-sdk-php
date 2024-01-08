<?php

namespace AlibabaCloud\ResourceSharing\V20200110;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptResourceShareInvitation acceptResourceShareInvitation(array $options = [])
 * @method AssociateResourceShare associateResourceShare(array $options = [])
 * @method AssociateResourceSharePermission associateResourceSharePermission(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CheckSharingWithResourceDirectoryStatus checkSharingWithResourceDirectoryStatus(array $options = [])
 * @method CreateResourceShare createResourceShare(array $options = [])
 * @method DeleteResourceShare deleteResourceShare(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DisassociateResourceShare disassociateResourceShare(array $options = [])
 * @method DisassociateResourceSharePermission disassociateResourceSharePermission(array $options = [])
 * @method EnableSharingWithResourceDirectory enableSharingWithResourceDirectory(array $options = [])
 * @method GetPermission getPermission(array $options = [])
 * @method ListPermissions listPermissions(array $options = [])
 * @method ListPermissionVersions listPermissionVersions(array $options = [])
 * @method ListResourceShareAssociations listResourceShareAssociations(array $options = [])
 * @method ListResourceShareInvitations listResourceShareInvitations(array $options = [])
 * @method ListResourceSharePermissions listResourceSharePermissions(array $options = [])
 * @method ListResourceShares listResourceShares(array $options = [])
 * @method ListSharedResources listSharedResources(array $options = [])
 * @method ListSharedTargets listSharedTargets(array $options = [])
 * @method RejectResourceShareInvitation rejectResourceShareInvitation(array $options = [])
 * @method UpdateResourceShare updateResourceShare(array $options = [])
 */
class ResourceSharingApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ResourceSharing';

    /** @var string */
    public $version = '2020-01-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'ressharing';
}

/**
 * @method string getResourceShareInvitationId()
 * @method $this withResourceShareInvitationId($value)
 */
class AcceptResourceShareInvitation extends Rpc
{
}

/**
 * @method array getResources()
 * @method array getTargets()
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 * @method array getPermissionNames()
 * @method string getTargetProperties()
 * @method $this withTargetProperties($value)
 */
class AssociateResourceShare extends Rpc
{

    /**
     * @param array $resources
     *
     * @return $this
     */
	public function withResources(array $resources)
	{
	    $this->data['Resources'] = $resources;
		foreach ($resources as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Resources.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['Resources.' . ($depth1 + 1) . '.ResourceType'] = $depth1Value['ResourceType'];
			}
		}

		return $this;
    }

    /**
     * @param array $targets
     *
     * @return $this
     */
	public function withTargets(array $targets)
	{
	    $this->data['Targets'] = $targets;
		foreach ($targets as $i => $iValue) {
			$this->options['query']['Targets.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $permissionNames
     *
     * @return $this
     */
	public function withPermissionNames(array $permissionNames)
	{
	    $this->data['PermissionNames'] = $permissionNames;
		foreach ($permissionNames as $i => $iValue) {
			$this->options['query']['PermissionNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method string getPermissionName()
 * @method $this withPermissionName($value)
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 */
class AssociateResourceSharePermission extends Rpc
{
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getService()
 * @method $this withService($value)
 */
class ChangeResourceGroup extends Rpc
{
}

class CheckSharingWithResourceDirectoryStatus extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getResourceShareName()
 * @method $this withResourceShareName($value)
 * @method array getTargets()
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method array getResources()
 * @method string getAllowExternalTargets()
 * @method $this withAllowExternalTargets($value)
 * @method array getPermissionNames()
 * @method string getTargetProperties()
 * @method $this withTargetProperties($value)
 */
class CreateResourceShare extends Rpc
{

    /**
     * @param array $targets
     *
     * @return $this
     */
	public function withTargets(array $targets)
	{
	    $this->data['Targets'] = $targets;
		foreach ($targets as $i => $iValue) {
			$this->options['query']['Targets.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resources
     *
     * @return $this
     */
	public function withResources(array $resources)
	{
	    $this->data['Resources'] = $resources;
		foreach ($resources as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Resources.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['Resources.' . ($depth1 + 1) . '.ResourceType'] = $depth1Value['ResourceType'];
			}
		}

		return $this;
    }

    /**
     * @param array $permissionNames
     *
     * @return $this
     */
	public function withPermissionNames(array $permissionNames)
	{
	    $this->data['PermissionNames'] = $permissionNames;
		foreach ($permissionNames as $i => $iValue) {
			$this->options['query']['PermissionNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 */
class DeleteResourceShare extends Rpc
{
}

/**
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getResourceOwner()
 * @method $this withResourceOwner($value)
 * @method array getResources()
 * @method array getTargets()
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 */
class DisassociateResourceShare extends Rpc
{

    /**
     * @param array $resources
     *
     * @return $this
     */
	public function withResources(array $resources)
	{
	    $this->data['Resources'] = $resources;
		foreach ($resources as $depth1 => $depth1Value) {
			if(isset($depth1Value['ResourceId'])){
				$this->options['query']['Resources.' . ($depth1 + 1) . '.ResourceId'] = $depth1Value['ResourceId'];
			}
			if(isset($depth1Value['ResourceType'])){
				$this->options['query']['Resources.' . ($depth1 + 1) . '.ResourceType'] = $depth1Value['ResourceType'];
			}
		}

		return $this;
    }

    /**
     * @param array $targets
     *
     * @return $this
     */
	public function withTargets(array $targets)
	{
	    $this->data['Targets'] = $targets;
		foreach ($targets as $i => $iValue) {
			$this->options['query']['Targets.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPermissionName()
 * @method $this withPermissionName($value)
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 */
class DisassociateResourceSharePermission extends Rpc
{
}

class EnableSharingWithResourceDirectory extends Rpc
{
}

/**
 * @method string getPermissionVersion()
 * @method $this withPermissionVersion($value)
 * @method string getPermissionName()
 * @method $this withPermissionName($value)
 */
class GetPermission extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListPermissions extends Rpc
{
}

/**
 * @method string getPermissionName()
 * @method $this withPermissionName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListPermissionVersions extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceShareIds()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getAssociationType()
 * @method $this withAssociationType($value)
 * @method string getAssociationStatus()
 * @method $this withAssociationStatus($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListResourceShareAssociations extends Rpc
{

    /** @var string */
    public $scheme = 'http';

    /**
     * @param array $resourceShareIds
     *
     * @return $this
     */
	public function withResourceShareIds(array $resourceShareIds)
	{
	    $this->data['ResourceShareIds'] = $resourceShareIds;
		foreach ($resourceShareIds as $i => $iValue) {
			$this->options['query']['ResourceShareIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getResourceShareInvitationIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceShareIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListResourceShareInvitations extends Rpc
{

    /**
     * @param array $resourceShareInvitationIds
     *
     * @return $this
     */
	public function withResourceShareInvitationIds(array $resourceShareInvitationIds)
	{
	    $this->data['ResourceShareInvitationIds'] = $resourceShareInvitationIds;
		foreach ($resourceShareInvitationIds as $i => $iValue) {
			$this->options['query']['ResourceShareInvitationIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceShareIds
     *
     * @return $this
     */
	public function withResourceShareIds(array $resourceShareIds)
	{
	    $this->data['ResourceShareIds'] = $resourceShareIds;
		foreach ($resourceShareIds as $i => $iValue) {
			$this->options['query']['ResourceShareIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwner()
 * @method $this withResourceOwner($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 */
class ListResourceSharePermissions extends Rpc
{
}

/**
 * @method string getResourceShareName()
 * @method $this withResourceShareName($value)
 * @method string getPermissionName()
 * @method $this withPermissionName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceShareIds()
 * @method string getResourceOwner()
 * @method $this withResourceOwner($value)
 * @method string getResourceShareStatus()
 * @method $this withResourceShareStatus($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListResourceShares extends Rpc
{

    /**
     * @param array $resourceShareIds
     *
     * @return $this
     */
	public function withResourceShareIds(array $resourceShareIds)
	{
	    $this->data['ResourceShareIds'] = $resourceShareIds;
		foreach ($resourceShareIds as $i => $iValue) {
			$this->options['query']['ResourceShareIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceShareIds()
 * @method string getResourceOwner()
 * @method $this withResourceOwner($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTarget()
 * @method $this withTarget($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method array getResourceIds()
 */
class ListSharedResources extends Rpc
{

    /**
     * @param array $resourceShareIds
     *
     * @return $this
     */
	public function withResourceShareIds(array $resourceShareIds)
	{
	    $this->data['ResourceShareIds'] = $resourceShareIds;
		foreach ($resourceShareIds as $i => $iValue) {
			$this->options['query']['ResourceShareIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceIds
     *
     * @return $this
     */
	public function withResourceIds(array $resourceIds)
	{
	    $this->data['ResourceIds'] = $resourceIds;
		foreach ($resourceIds as $i => $iValue) {
			$this->options['query']['ResourceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getTargets()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceShareIds()
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwner()
 * @method $this withResourceOwner($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListSharedTargets extends Rpc
{

    /**
     * @param array $targets
     *
     * @return $this
     */
	public function withTargets(array $targets)
	{
	    $this->data['Targets'] = $targets;
		foreach ($targets as $i => $iValue) {
			$this->options['query']['Targets.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $resourceShareIds
     *
     * @return $this
     */
	public function withResourceShareIds(array $resourceShareIds)
	{
	    $this->data['ResourceShareIds'] = $resourceShareIds;
		foreach ($resourceShareIds as $i => $iValue) {
			$this->options['query']['ResourceShareIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceShareInvitationId()
 * @method $this withResourceShareInvitationId($value)
 */
class RejectResourceShareInvitation extends Rpc
{
}

/**
 * @method string getResourceShareName()
 * @method $this withResourceShareName($value)
 * @method string getResourceShareId()
 * @method $this withResourceShareId($value)
 * @method string getAllowExternalTargets()
 * @method $this withAllowExternalTargets($value)
 */
class UpdateResourceShare extends Rpc
{
}
