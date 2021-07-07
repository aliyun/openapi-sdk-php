<?php

namespace AlibabaCloud\Eipanycast\V20200309;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AllocateAnycastEipAddress allocateAnycastEipAddress(array $options = [])
 * @method AssociateAnycastEipAddress associateAnycastEipAddress(array $options = [])
 * @method DescribeAnycastEipAddress describeAnycastEipAddress(array $options = [])
 * @method DescribeAnycastPopLocations describeAnycastPopLocations(array $options = [])
 * @method DescribeAnycastServerRegions describeAnycastServerRegions(array $options = [])
 * @method ListAnycastEipAddresses listAnycastEipAddresses(array $options = [])
 * @method ModifyAnycastEipAddressAttribute modifyAnycastEipAddressAttribute(array $options = [])
 * @method ModifyAnycastEipAddressSpec modifyAnycastEipAddressSpec(array $options = [])
 * @method ReleaseAnycastEipAddress releaseAnycastEipAddress(array $options = [])
 * @method UnassociateAnycastEipAddress unassociateAnycastEipAddress(array $options = [])
 */
class EipanycastApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Eipanycast';

    /** @var string */
    public $version = '2020-03-09';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'eipanycast';
}

/**
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 */
class AllocateAnycastEipAddress extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBindInstanceType()
 * @method $this withBindInstanceType($value)
 * @method string getBindInstanceRegionId()
 * @method $this withBindInstanceRegionId($value)
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 * @method string getBindInstanceId()
 * @method $this withBindInstanceId($value)
 */
class AssociateAnycastEipAddress extends Rpc
{
}

/**
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 * @method string getBindInstanceId()
 * @method $this withBindInstanceId($value)
 */
class DescribeAnycastEipAddress extends Rpc
{
}

/**
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 */
class DescribeAnycastPopLocations extends Rpc
{
}

/**
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 */
class DescribeAnycastServerRegions extends Rpc
{
}

/**
 * @method string getBusinessStatus()
 * @method $this withBusinessStatus($value)
 * @method string getServiceLocation()
 * @method $this withServiceLocation($value)
 * @method string getAnycastEipAddress()
 * @method $this withAnycastEipAddress($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getInternetChargeType()
 * @method $this withInternetChargeType($value)
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method array getBindInstanceIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getInstanceChargeType()
 * @method $this withInstanceChargeType($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAnycastEipAddresses extends Rpc
{

    /**
     * @param array $bindInstanceIds
     *
     * @return $this
     */
	public function withBindInstanceIds(array $bindInstanceIds)
	{
	    $this->data['BindInstanceIds'] = $bindInstanceIds;
		foreach ($bindInstanceIds as $i => $iValue) {
			$this->options['query']['BindInstanceIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class ModifyAnycastEipAddressAttribute extends Rpc
{
}

/**
 * @method string getBandwidth()
 * @method $this withBandwidth($value)
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 */
class ModifyAnycastEipAddressSpec extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 */
class ReleaseAnycastEipAddress extends Rpc
{
}

/**
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getBindInstanceType()
 * @method $this withBindInstanceType($value)
 * @method string getBindInstanceRegionId()
 * @method $this withBindInstanceRegionId($value)
 * @method string getAnycastId()
 * @method $this withAnycastId($value)
 * @method string getBindInstanceId()
 * @method $this withBindInstanceId($value)
 */
class UnassociateAnycastEipAddress extends Rpc
{
}
