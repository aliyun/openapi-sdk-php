<?php

namespace AlibabaCloud\Config\V20190108;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveConfigRules activeConfigRules(array $options = [])
 * @method DeleteConfigRules deleteConfigRules(array $options = [])
 * @method DescribeCompliance describeCompliance(array $options = [])
 * @method DescribeComplianceSummary describeComplianceSummary(array $options = [])
 * @method DescribeConfigRule describeConfigRule(array $options = [])
 * @method DescribeConfigurationRecorder describeConfigurationRecorder(array $options = [])
 * @method DescribeDeliveryChannels describeDeliveryChannels(array $options = [])
 * @method DescribeDiscoveredResource describeDiscoveredResource(array $options = [])
 * @method DescribeEvaluationResults describeEvaluationResults(array $options = [])
 * @method GetAggregateDiscoveredResource getAggregateDiscoveredResource(array $options = [])
 * @method GetDiscoveredResourceCounts getDiscoveredResourceCounts(array $options = [])
 * @method GetDiscoveredResourceSummary getDiscoveredResourceSummary(array $options = [])
 * @method GetResourceComplianceTimeline getResourceComplianceTimeline(array $options = [])
 * @method GetResourceConfigurationTimeline getResourceConfigurationTimeline(array $options = [])
 * @method GetSupportedResourceTypes getSupportedResourceTypes(array $options = [])
 * @method ListAggregateDiscoveredResources listAggregateDiscoveredResources(array $options = [])
 * @method ListConfigRules listConfigRules(array $options = [])
 * @method ListDiscoveredResources listDiscoveredResources(array $options = [])
 * @method ListRemediationTemplates listRemediationTemplates(array $options = [])
 * @method PutConfigRule putConfigRule(array $options = [])
 * @method PutConfigurationRecorder putConfigurationRecorder(array $options = [])
 * @method PutDeliveryChannel putDeliveryChannel(array $options = [])
 * @method PutEvaluations putEvaluations(array $options = [])
 * @method StartConfigRuleEvaluation startConfigRuleEvaluation(array $options = [])
 * @method StartConfigurationRecorder startConfigurationRecorder(array $options = [])
 * @method StopConfigRules stopConfigRules(array $options = [])
 */
class ConfigApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Config';

    /** @var string */
    public $version = '2019-01-08';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class ActiveConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class DeleteConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DescribeCompliance extends Rpc
{
}

/**
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DescribeComplianceSummary extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DescribeConfigRule extends Rpc
{
}

class DescribeConfigurationRecorder extends Rpc
{
}

/**
 * @method string getDeliveryChannelIds()
 * @method $this withDeliveryChannelIds($value)
 */
class DescribeDeliveryChannels extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DescribeDiscoveredResource extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class DescribeEvaluationResults extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetAggregateDiscoveredResource extends Rpc
{
}

/**
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getGroupByKey()
 * @method $this withGroupByKey($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class GetDiscoveredResourceCounts extends Rpc
{
}

/**
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class GetDiscoveredResourceSummary extends Rpc
{
}

/**
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class GetResourceComplianceTimeline extends Rpc
{
}

/**
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class GetResourceConfigurationTimeline extends Rpc
{
}

class GetSupportedResourceTypes extends Rpc
{
}

/**
 * @method string getResourceDeleted()
 * @method $this withResourceDeleted($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getFolderId()
 * @method $this withFolderId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 */
class ListAggregateDiscoveredResources extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getFilterInCompliancePack()
 * @method $this withFilterInCompliancePack($value)
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getConfigRuleState()
 * @method $this withConfigRuleState($value)
 * @method string getFilterInCompliancePackExcludeIds()
 * @method $this withFilterInCompliancePackExcludeIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getConfigRuleSceneId()
 * @method $this withConfigRuleSceneId($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 * @method string getConfigRuleName()
 * @method $this withConfigRuleName($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class ListConfigRules extends Rpc
{
}

/**
 * @method string getResourceDeleted()
 * @method $this withResourceDeleted($value)
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class ListDiscoveredResources extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getManagedRuleIdentifier()
 * @method $this withManagedRuleIdentifier($value)
 * @method string getRemediationType()
 * @method $this withRemediationType($value)
 */
class ListRemediationTemplates extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleId()
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getSourceIdentifier()
 * @method string getSourceMaximumExecutionFrequency()
 * @method string getScopeComplianceResourceTypes()
 * @method string getSourceDetailMessageType()
 * @method string getRiskLevel()
 * @method string getSourceOwner()
 * @method string getInputParameters()
 * @method string getScopeComplianceExcludeResourceIds()
 * @method string getConfigRuleName()
 * @method string getScopeComplianceResourceId()
 * @method string getScopeComplianceResourceIds()
 * @method string getScopeComplianceRegionIds()
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class PutConfigRule extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRuleId($value)
    {
        $this->data['ConfigRuleId'] = $value;
        $this->options['form_params']['ConfigRuleId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceIdentifier($value)
    {
        $this->data['SourceIdentifier'] = $value;
        $this->options['form_params']['SourceIdentifier'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceMaximumExecutionFrequency($value)
    {
        $this->data['SourceMaximumExecutionFrequency'] = $value;
        $this->options['form_params']['SourceMaximumExecutionFrequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopeComplianceResourceTypes($value)
    {
        $this->data['ScopeComplianceResourceTypes'] = $value;
        $this->options['form_params']['ScopeComplianceResourceTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceDetailMessageType($value)
    {
        $this->data['SourceDetailMessageType'] = $value;
        $this->options['form_params']['SourceDetailMessageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRiskLevel($value)
    {
        $this->data['RiskLevel'] = $value;
        $this->options['form_params']['RiskLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceOwner($value)
    {
        $this->data['SourceOwner'] = $value;
        $this->options['form_params']['SourceOwner'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInputParameters($value)
    {
        $this->data['InputParameters'] = $value;
        $this->options['form_params']['InputParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopeComplianceExcludeResourceIds($value)
    {
        $this->data['ScopeComplianceExcludeResourceIds'] = $value;
        $this->options['form_params']['ScopeComplianceExcludeResourceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRuleName($value)
    {
        $this->data['ConfigRuleName'] = $value;
        $this->options['form_params']['ConfigRuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopeComplianceResourceId($value)
    {
        $this->data['ScopeComplianceResourceId'] = $value;
        $this->options['form_params']['ScopeComplianceResourceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopeComplianceResourceIds($value)
    {
        $this->data['ScopeComplianceResourceIds'] = $value;
        $this->options['form_params']['ScopeComplianceResourceIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScopeComplianceRegionIds($value)
    {
        $this->data['ScopeComplianceRegionIds'] = $value;
        $this->options['form_params']['ScopeComplianceRegionIds'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceTypes()
 */
class PutConfigurationRecorder extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceTypes($value)
    {
        $this->data['ResourceTypes'] = $value;
        $this->options['form_params']['ResourceTypes'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getDeliveryChannelTargetArn()
 * @method string getDeliveryChannelCondition()
 * @method string getDeliveryChannelAssumeRoleArn()
 * @method string getDeliveryChannelName()
 * @method string getDeliveryChannelId()
 * @method string getDeliveryChannelType()
 * @method string getStatus()
 */
class PutDeliveryChannel extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryChannelTargetArn($value)
    {
        $this->data['DeliveryChannelTargetArn'] = $value;
        $this->options['form_params']['DeliveryChannelTargetArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryChannelCondition($value)
    {
        $this->data['DeliveryChannelCondition'] = $value;
        $this->options['form_params']['DeliveryChannelCondition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryChannelAssumeRoleArn($value)
    {
        $this->data['DeliveryChannelAssumeRoleArn'] = $value;
        $this->options['form_params']['DeliveryChannelAssumeRoleArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryChannelName($value)
    {
        $this->data['DeliveryChannelName'] = $value;
        $this->options['form_params']['DeliveryChannelName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryChannelId($value)
    {
        $this->data['DeliveryChannelId'] = $value;
        $this->options['form_params']['DeliveryChannelId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeliveryChannelType($value)
    {
        $this->data['DeliveryChannelType'] = $value;
        $this->options['form_params']['DeliveryChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getEvaluations()
 * @method string getDeleteMode()
 * @method string getResultToken()
 */
class PutEvaluations extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEvaluations($value)
    {
        $this->data['Evaluations'] = $value;
        $this->options['form_params']['Evaluations'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteMode($value)
    {
        $this->data['DeleteMode'] = $value;
        $this->options['form_params']['DeleteMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResultToken($value)
    {
        $this->data['ResultToken'] = $value;
        $this->options['form_params']['ResultToken'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getMultiAccount()
 * @method $this withMultiAccount($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getRevertEvaluation()
 * @method $this withRevertEvaluation($value)
 * @method string getMemberId()
 * @method $this withMemberId($value)
 */
class StartConfigRuleEvaluation extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getEnterpriseEdition()
 */
class StartConfigurationRecorder extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnterpriseEdition($value)
    {
        $this->data['EnterpriseEdition'] = $value;
        $this->options['form_params']['EnterpriseEdition'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class StopConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}
