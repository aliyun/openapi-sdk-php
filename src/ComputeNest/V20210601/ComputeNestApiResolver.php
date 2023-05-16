<?php

namespace AlibabaCloud\ComputeNest\V20210601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ContinueDeployServiceInstance continueDeployServiceInstance(array $options = [])
 * @method CreateServiceInstance createServiceInstance(array $options = [])
 * @method DeleteServiceInstances deleteServiceInstances(array $options = [])
 * @method GetServiceInstance getServiceInstance(array $options = [])
 * @method ListServiceInstanceLogs listServiceInstanceLogs(array $options = [])
 * @method ListServiceInstanceResources listServiceInstanceResources(array $options = [])
 * @method ListServiceInstances listServiceInstances(array $options = [])
 */
class ComputeNestApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ComputeNest';

    /** @var string */
    public $version = '2021-06-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'computenest';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method array getOption()
 */
class ContinueDeployServiceInstance extends Rpc
{

    /**
     * @param array $option
     *
     * @return $this
     */
	public function withOption(array $option)
	{
	    $this->data['Option'] = $option;
		foreach ($option as $i => $iValue) {
			$this->options['query']['Option.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCommodity()
 * @method $this withCommodity($value)
 * @method string getContactGroup()
 * @method $this withContactGroup($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getSpecificationCode()
 * @method $this withSpecificationCode($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getEnableInstanceOps()
 * @method $this withEnableInstanceOps($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method array getTag()
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getEnableUserPrometheus()
 * @method $this withEnableUserPrometheus($value)
 * @method string getSpecificationName()
 * @method $this withSpecificationName($value)
 * @method string getTrialType()
 * @method $this withTrialType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getServiceVersion()
 * @method $this withServiceVersion($value)
 * @method string getServiceId()
 * @method $this withServiceId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 * @method string getOperationMetadata()
 * @method $this withOperationMetadata($value)
 */
class CreateServiceInstance extends Rpc
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
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getServiceInstanceId()
 */
class DeleteServiceInstances extends Rpc
{

    /**
     * @param array $serviceInstanceId
     *
     * @return $this
     */
	public function withServiceInstanceId(array $serviceInstanceId)
	{
	    $this->data['ServiceInstanceId'] = $serviceInstanceId;
		foreach ($serviceInstanceId as $i => $iValue) {
			$this->options['query']['ServiceInstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getMarketInstanceId()
 * @method $this withMarketInstanceId($value)
 */
class GetServiceInstance extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServiceInstanceLogs extends Rpc
{
}

/**
 * @method string getExpireTimeEnd()
 * @method $this withExpireTimeEnd($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceARN()
 * @method array getTag()
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 * @method string getExpireTimeStart()
 * @method $this withExpireTimeStart($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getPayType()
 * @method $this withPayType($value)
 */
class ListServiceInstanceResources extends Rpc
{

    /**
     * @param array $resourceARN
     *
     * @return $this
     */
	public function withResourceARN(array $resourceARN)
	{
	    $this->data['ResourceARN'] = $resourceARN;
		foreach ($resourceARN as $i => $iValue) {
			$this->options['query']['ResourceARN.' . ($i + 1)] = $iValue;
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
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListServiceInstances extends Rpc
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
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
		}

		return $this;
    }
}
