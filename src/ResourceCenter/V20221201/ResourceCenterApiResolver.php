<?php

namespace AlibabaCloud\ResourceCenter\V20221201;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssociateDefaultFilter associateDefaultFilter(array $options = [])
 * @method CreateFilter createFilter(array $options = [])
 * @method CreateSavedQuery createSavedQuery(array $options = [])
 * @method DeleteFilter deleteFilter(array $options = [])
 * @method DeleteSavedQuery deleteSavedQuery(array $options = [])
 * @method DisableMultiAccountResourceCenter disableMultiAccountResourceCenter(array $options = [])
 * @method DisableResourceCenter disableResourceCenter(array $options = [])
 * @method DisassociateDefaultFilter disassociateDefaultFilter(array $options = [])
 * @method EnableMultiAccountResourceCenter enableMultiAccountResourceCenter(array $options = [])
 * @method EnableResourceCenter enableResourceCenter(array $options = [])
 * @method ExecuteMultiAccountSQLQuery executeMultiAccountSQLQuery(array $options = [])
 * @method ExecuteSQLQuery executeSQLQuery(array $options = [])
 * @method GetExampleQuery getExampleQuery(array $options = [])
 * @method GetMultiAccountResourceCenterServiceStatus getMultiAccountResourceCenterServiceStatus(array $options = [])
 * @method GetMultiAccountResourceConfiguration getMultiAccountResourceConfiguration(array $options = [])
 * @method GetResourceCenterServiceStatus getResourceCenterServiceStatus(array $options = [])
 * @method GetResourceConfiguration getResourceConfiguration(array $options = [])
 * @method GetResourceCounts getResourceCounts(array $options = [])
 * @method GetSavedQuery getSavedQuery(array $options = [])
 * @method ListExampleQueries listExampleQueries(array $options = [])
 * @method ListFilters listFilters(array $options = [])
 * @method ListMultiAccountResourceGroups listMultiAccountResourceGroups(array $options = [])
 * @method ListMultiAccountTagKeys listMultiAccountTagKeys(array $options = [])
 * @method ListMultiAccountTagValues listMultiAccountTagValues(array $options = [])
 * @method ListResourceTypes listResourceTypes(array $options = [])
 * @method ListSavedQueries listSavedQueries(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method SearchMultiAccountResources searchMultiAccountResources(array $options = [])
 * @method SearchResources searchResources(array $options = [])
 * @method UpdateFilter updateFilter(array $options = [])
 * @method UpdateSavedQuery updateSavedQuery(array $options = [])
 */
class ResourceCenterApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ResourceCenter';

    /** @var string */
    public $version = '2022-12-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getFilterName()
 * @method $this withFilterName($value)
 */
class AssociateDefaultFilter extends Rpc
{
}

/**
 * @method string getFilterName()
 * @method $this withFilterName($value)
 * @method string getFilterConfiguration()
 * @method $this withFilterConfiguration($value)
 */
class CreateFilter extends Rpc
{
}

/**
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSavedQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getFilterName()
 * @method $this withFilterName($value)
 */
class DeleteFilter extends Rpc
{
}

/**
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class DeleteSavedQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

class DisableMultiAccountResourceCenter extends Rpc
{
}

class DisableResourceCenter extends Rpc
{
}

class DisassociateDefaultFilter extends Rpc
{
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 */
class EnableMultiAccountResourceCenter extends Rpc
{
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 */
class EnableResourceCenter extends Rpc
{
}

/**
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ExecuteMultiAccountSQLQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ExecuteSQLQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class GetExampleQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

class GetMultiAccountResourceCenterServiceStatus extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class GetMultiAccountResourceConfiguration extends Rpc
{
}

class GetResourceCenterServiceStatus extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 */
class GetResourceConfiguration extends Rpc
{
}

/**
 * @method array getFilter()
 * @method string getView()
 * @method $this withView($value)
 * @method string getGroupByKey()
 * @method $this withGroupByKey($value)
 */
class GetResourceCounts extends Rpc
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
			if(isset($depth1Value['MatchType'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.MatchType'] = $depth1Value['MatchType'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class GetSavedQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListExampleQueries extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

class ListFilters extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getResourceGroupIds()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListMultiAccountResourceGroups extends Rpc
{

    /**
     * @param array $resourceGroupIds
     *
     * @return $this
     */
	public function withResourceGroupIds(array $resourceGroupIds)
	{
	    $this->data['ResourceGroupIds'] = $resourceGroupIds;
		foreach ($resourceGroupIds as $i => $iValue) {
			$this->options['query']['ResourceGroupIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListMultiAccountTagKeys extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListMultiAccountTagValues extends Rpc
{
}

/**
 * @method array getQuery()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getAcceptLanguage()
 * @method $this withAcceptLanguage($value)
 */
class ListResourceTypes extends Rpc
{

    /**
     * @param array $query
     *
     * @return $this
     */
	public function withQuery(array $query)
	{
	    $this->data['Query'] = $query;
		foreach ($query as $i => $iValue) {
			$this->options['query']['Query.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListSavedQueries extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListTagKeys extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMatchType()
 * @method $this withMatchType($value)
 * @method string getTagValue()
 * @method $this withTagValue($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTagKey()
 * @method $this withTagKey($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getScope()
 * @method $this withScope($value)
 * @method string getSortCriterion()
 * @method $this withSortCriterion($value)
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SearchMultiAccountResources extends Rpc
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
			if(isset($depth1Value['MatchType'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.MatchType'] = $depth1Value['MatchType'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getView()
 * @method $this withView($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSortCriterion()
 * @method $this withSortCriterion($value)
 * @method array getFilter()
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SearchResources extends Rpc
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
			if(isset($depth1Value['MatchType'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.MatchType'] = $depth1Value['MatchType'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFilterName()
 * @method $this withFilterName($value)
 * @method string getFilterConfiguration()
 * @method $this withFilterConfiguration($value)
 */
class UpdateFilter extends Rpc
{
}

/**
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdateSavedQuery extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}
