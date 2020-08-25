<?php

namespace AlibabaCloud\SmartHosting\V20200801;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ListManagedHosts listManagedHosts(array $options = [])
 * @method ListManagedPrivateSpaces listManagedPrivateSpaces(array $options = [])
 * @method ListManagedRacks listManagedRacks(array $options = [])
 * @method UpdateManagedHostAttributes updateManagedHostAttributes(array $options = [])
 */
class SmartHostingApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'SmartHosting';

    /** @var string */
    public $version = '2020-08-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'smarthosting';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostType()
 * @method $this withHostType($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method array getManagedHostId()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getManagedPrivateSpaceId()
 * @method $this withManagedPrivateSpaceId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getManagedHostName()
 * @method $this withManagedHostName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListManagedHosts extends Rpc
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

    /**
     * @param array $managedHostId
     *
     * @return $this
     */
	public function withManagedHostId(array $managedHostId)
	{
	    $this->data['ManagedHostId'] = $managedHostId;
		foreach ($managedHostId as $i => $iValue) {
			$this->options['query']['ManagedHostId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getManagedPrivateSpaceName()
 * @method $this withManagedPrivateSpaceName($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getManagedPrivateSpaceId()
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListManagedPrivateSpaces extends Rpc
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

    /**
     * @param array $managedPrivateSpaceId
     *
     * @return $this
     */
	public function withManagedPrivateSpaceId(array $managedPrivateSpaceId)
	{
	    $this->data['ManagedPrivateSpaceId'] = $managedPrivateSpaceId;
		foreach ($managedPrivateSpaceId as $i => $iValue) {
			$this->options['query']['ManagedPrivateSpaceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getHostType()
 * @method $this withHostType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getManagedRackId()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getManagedPrivateSpaceId()
 * @method $this withManagedPrivateSpaceId($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListManagedRacks extends Rpc
{

    /**
     * @param array $managedRackId
     *
     * @return $this
     */
	public function withManagedRackId(array $managedRackId)
	{
	    $this->data['ManagedRackId'] = $managedRackId;
		foreach ($managedRackId as $i => $iValue) {
			$this->options['query']['ManagedRackId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getManagedHostId()
 * @method $this withManagedHostId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getManagedHostName()
 * @method $this withManagedHostName($value)
 */
class UpdateManagedHostAttributes extends Rpc
{
}
