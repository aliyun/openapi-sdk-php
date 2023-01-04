<?php

namespace AlibabaCloud\ComputeNestSupplier\V20210521;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateArtifact createArtifact(array $options = [])
 * @method DeleteArtifact deleteArtifact(array $options = [])
 * @method GetArtifact getArtifact(array $options = [])
 * @method GetArtifactRepositoryCredentials getArtifactRepositoryCredentials(array $options = [])
 * @method GetServiceInstance getServiceInstance(array $options = [])
 * @method ListArtifacts listArtifacts(array $options = [])
 * @method ListArtifactVersions listArtifactVersions(array $options = [])
 * @method ListServiceInstances listServiceInstances(array $options = [])
 * @method ReleaseArtifact releaseArtifact(array $options = [])
 * @method UpdateArtifact updateArtifact(array $options = [])
 */
class ComputeNestSupplierApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ComputeNestSupplier';

    /** @var string */
    public $version = '2021-05-21';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getSupportRegionIds()
 * @method string getArtifactType()
 * @method $this withArtifactType($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 * @method string getArtifactProperty()
 * @method $this withArtifactProperty($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class CreateArtifact extends Rpc
{

    /**
     * @param array $supportRegionIds
     *
     * @return $this
     */
	public function withSupportRegionIds(array $supportRegionIds)
	{
	    $this->data['SupportRegionIds'] = $supportRegionIds;
		foreach ($supportRegionIds as $i => $iValue) {
			$this->options['query']['SupportRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getArtifactVersion()
 * @method $this withArtifactVersion($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class DeleteArtifact extends Rpc
{
}

/**
 * @method string getArtifactVersion()
 * @method $this withArtifactVersion($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class GetArtifact extends Rpc
{
}

/**
 * @method string getDeployRegionId()
 * @method $this withDeployRegionId($value)
 * @method string getArtifactType()
 * @method $this withArtifactType($value)
 */
class GetArtifactRepositoryCredentials extends Rpc
{
}

/**
 * @method string getServiceInstanceId()
 * @method $this withServiceInstanceId($value)
 */
class GetServiceInstance extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListArtifacts extends Rpc
{

    /**
     * @param array $filter
     *
     * @return $this
     */
	public function withFilter(array $filter)
	{
	    $this->data['Filter'] = $filter;
		foreach ($filter as $depth1 => $depth1Value) {
			foreach ($depth1Value['Values'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Values.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class ListArtifactVersions extends Rpc
{
}

/**
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

/**
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 */
class ReleaseArtifact extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getSupportRegionIds()
 * @method string getArtifactId()
 * @method $this withArtifactId($value)
 * @method string getArtifactProperty()
 * @method $this withArtifactProperty($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class UpdateArtifact extends Rpc
{

    /**
     * @param array $supportRegionIds
     *
     * @return $this
     */
	public function withSupportRegionIds(array $supportRegionIds)
	{
	    $this->data['SupportRegionIds'] = $supportRegionIds;
		foreach ($supportRegionIds as $i => $iValue) {
			$this->options['query']['SupportRegionIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
