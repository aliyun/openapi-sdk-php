<?php

namespace AlibabaCloud\Tag\V20180828;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AttachPolicy attachPolicy(array $options = [])
 * @method CheckCreatedByEnabled checkCreatedByEnabled(array $options = [])
 * @method CloseCreatedBy closeCreatedBy(array $options = [])
 * @method CreatePolicy createPolicy(array $options = [])
 * @method CreateTags createTags(array $options = [])
 * @method DeletePolicy deletePolicy(array $options = [])
 * @method DeleteTag deleteTag(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DetachPolicy detachPolicy(array $options = [])
 * @method DisablePolicyType disablePolicyType(array $options = [])
 * @method EnablePolicyType enablePolicyType(array $options = [])
 * @method GenerateConfigRuleReport generateConfigRuleReport(array $options = [])
 * @method GetConfigRuleReport getConfigRuleReport(array $options = [])
 * @method GetEffectivePolicy getEffectivePolicy(array $options = [])
 * @method GetPolicy getPolicy(array $options = [])
 * @method GetPolicyEnableStatus getPolicyEnableStatus(array $options = [])
 * @method ListConfigRulesForTarget listConfigRulesForTarget(array $options = [])
 * @method ListPolicies listPolicies(array $options = [])
 * @method ListPoliciesForTarget listPoliciesForTarget(array $options = [])
 * @method ListResourcesByTag listResourcesByTag(array $options = [])
 * @method ListSupportResourceTypes listSupportResourceTypes(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ListTargetsForPolicy listTargetsForPolicy(array $options = [])
 * @method ModifyPolicy modifyPolicy(array $options = [])
 * @method OpenCreatedBy openCreatedBy(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 */
class TagApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Tag';

    /** @var string */
    public $version = '2018-08-28';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'tag';
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class AttachPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CheckCreatedByEnabled extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CloseCreatedBy extends Rpc
{
}

/**
 * @method string getPolicyDesc()
 * @method $this withPolicyDesc($value)
 * @method string getPolicyContent()
 * @method $this withPolicyContent($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class CreatePolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKeyValueParamList()
 */
class CreateTags extends Rpc
{

    /**
     * @param array $tagKeyValueParamList
     *
     * @return $this
     */
	public function withTagKeyValueParamList(array $tagKeyValueParamList)
	{
	    $this->data['TagKeyValueParamList'] = $tagKeyValueParamList;
		foreach ($tagKeyValueParamList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Key'])){
				$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
			foreach ($depth1Value['TagValueParamList'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Value'])){
					$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.TagValueParamList.' . ($depth2 + 1) . '.Value'] = $depth2Value['Value'];
				}
				if(isset($depth2Value['Description'])){
					$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.TagValueParamList.' . ($depth2 + 1) . '.Description'] = $depth2Value['Description'];
				}
			}
			if(isset($depth1Value['Description'])){
				$this->options['query']['TagKeyValueParamList.' . ($depth1 + 1) . '.Description'] = $depth1Value['Description'];
			}
		}

		return $this;
    }
}

/**
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeletePolicy extends Rpc
{
}

/**
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DeleteTag extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class DescribeRegions extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DetachPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DisablePolicyType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class EnablePolicyType extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GenerateConfigRuleReport extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetConfigRuleReport extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetEffectivePolicy extends Rpc
{
}

/**
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class GetPolicyEnableStatus extends Rpc
{
}

/**
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPolicyType()
 * @method $this withPolicyType($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListConfigRulesForTarget extends Rpc
{
}

/**
 * @method array getPolicyNames()
 * @method array getPolicyIds()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getUserType()
 * @method $this withUserType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class ListPolicies extends Rpc
{

    /**
     * @param array $policyNames
     *
     * @return $this
     */
	public function withPolicyNames(array $policyNames)
	{
	    $this->data['PolicyNames'] = $policyNames;
		foreach ($policyNames as $i => $iValue) {
			$this->options['query']['PolicyNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

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
 * @method string getTargetId()
 * @method $this withTargetId($value)
 * @method string getTargetType()
 * @method $this withTargetType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class ListPoliciesForTarget extends Rpc
{
}

/**
 * @method string getTagFilterKey()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getIncludeAllTags()
 * @method $this withIncludeAllTags($value)
 * @method string getTagFilterValue()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 * @method string getFuzzyType()
 * @method $this withFuzzyType($value)
 */
class ListResourcesByTag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterKey($value)
    {
        $this->data['TagFilterKey'] = $value;
        $this->options['query']['TagFilter.Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterValue($value)
    {
        $this->data['TagFilterValue'] = $value;
        $this->options['query']['TagFilter.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method $this withProductCode($value)
 * @method string getSupportCode()
 * @method $this withSupportCode($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getResourceTye()
 * @method $this withResourceTye($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 * @method string getShowItems()
 * @method $this withShowItems($value)
 */
class ListSupportResourceTypes extends Rpc
{
}

/**
 * @method string getTagProduct()
 * @method $this withTagProduct($value)
 * @method string getTagFilterKey()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getFuzzyType()
 * @method $this withFuzzyType($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagKeys extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterKey($value)
    {
        $this->data['TagFilterKey'] = $value;
        $this->options['query']['TagFilter.Key'] = $value;

        return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getResourceARN()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTagResources extends Rpc
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
}

/**
 * @method string getTagProduct()
 * @method $this withTagProduct($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTagFilterValue()
 * @method string getKey()
 * @method $this withKey($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getFuzzyType()
 * @method $this withFuzzyType($value)
 */
class ListTagValues extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagFilterValue($value)
    {
        $this->data['TagFilterValue'] = $value;
        $this->options['query']['TagFilter.Value'] = $value;

        return $this;
    }
}

/**
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMaxResult()
 * @method $this withMaxResult($value)
 */
class ListTargetsForPolicy extends Rpc
{
}

/**
 * @method string getPolicyDesc()
 * @method $this withPolicyDesc($value)
 * @method string getPolicyId()
 * @method $this withPolicyId($value)
 * @method string getPolicyContent()
 * @method $this withPolicyContent($value)
 * @method string getDryRun()
 * @method $this withDryRun($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPolicyName()
 * @method $this withPolicyName($value)
 */
class ModifyPolicy extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class OpenCreatedBy extends Rpc
{
}

/**
 * @method array getResourceARN()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTags()
 * @method $this withTags($value)
 */
class TagResources extends Rpc
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
}

/**
 * @method array getResourceARN()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
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
