<?php

namespace AlibabaCloud\Config\V20200907;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveAggregateConfigRules activeAggregateConfigRules(array $options = [])
 * @method AttachAggregateConfigRuleToCompliancePack attachAggregateConfigRuleToCompliancePack(array $options = [])
 * @method AttachConfigRuleToCompliancePack attachConfigRuleToCompliancePack(array $options = [])
 * @method CreateAggregateCompliancePack createAggregateCompliancePack(array $options = [])
 * @method CreateAggregateConfigRule createAggregateConfigRule(array $options = [])
 * @method CreateAggregator createAggregator(array $options = [])
 * @method CreateCompliancePack createCompliancePack(array $options = [])
 * @method CreateConfigRule createConfigRule(array $options = [])
 * @method DeactiveAggregateConfigRules deactiveAggregateConfigRules(array $options = [])
 * @method DeactiveConfigRules deactiveConfigRules(array $options = [])
 * @method DeleteAggregateCompliancePacks deleteAggregateCompliancePacks(array $options = [])
 * @method DeleteAggregateConfigRules deleteAggregateConfigRules(array $options = [])
 * @method DeleteAggregators deleteAggregators(array $options = [])
 * @method DeleteCompliancePacks deleteCompliancePacks(array $options = [])
 * @method DetachAggregateConfigRuleToCompliancePack detachAggregateConfigRuleToCompliancePack(array $options = [])
 * @method DetachConfigRuleToCompliancePack detachConfigRuleToCompliancePack(array $options = [])
 * @method GenerateAggregateCompliancePackReport generateAggregateCompliancePackReport(array $options = [])
 * @method GenerateAggregateConfigRulesReport generateAggregateConfigRulesReport(array $options = [])
 * @method GenerateCompliancePackReport generateCompliancePackReport(array $options = [])
 * @method GenerateConfigRulesReport generateConfigRulesReport(array $options = [])
 * @method GetAggregateAccountComplianceByPack getAggregateAccountComplianceByPack(array $options = [])
 * @method GetAggregateCompliancePack getAggregateCompliancePack(array $options = [])
 * @method GetAggregateCompliancePackReport getAggregateCompliancePackReport(array $options = [])
 * @method GetAggregateConfigRule getAggregateConfigRule(array $options = [])
 * @method GetAggregateConfigRuleComplianceByPack getAggregateConfigRuleComplianceByPack(array $options = [])
 * @method GetAggregateConfigRulesReport getAggregateConfigRulesReport(array $options = [])
 * @method GetAggregateConfigRuleSummaryByRiskLevel getAggregateConfigRuleSummaryByRiskLevel(array $options = [])
 * @method GetAggregateResourceComplianceByConfigRule getAggregateResourceComplianceByConfigRule(array $options = [])
 * @method GetAggregateResourceComplianceByPack getAggregateResourceComplianceByPack(array $options = [])
 * @method GetAggregateResourceComplianceTimeline getAggregateResourceComplianceTimeline(array $options = [])
 * @method GetAggregateResourceConfigurationTimeline getAggregateResourceConfigurationTimeline(array $options = [])
 * @method GetAggregateResourceCountsGroupByRegion getAggregateResourceCountsGroupByRegion(array $options = [])
 * @method GetAggregateResourceCountsGroupByResourceType getAggregateResourceCountsGroupByResourceType(array $options = [])
 * @method GetAggregator getAggregator(array $options = [])
 * @method GetCompliancePack getCompliancePack(array $options = [])
 * @method GetCompliancePackReport getCompliancePackReport(array $options = [])
 * @method GetConfigRule getConfigRule(array $options = [])
 * @method GetConfigRuleComplianceByPack getConfigRuleComplianceByPack(array $options = [])
 * @method GetConfigRulesReport getConfigRulesReport(array $options = [])
 * @method GetConfigRuleSummaryByRiskLevel getConfigRuleSummaryByRiskLevel(array $options = [])
 * @method GetDiscoveredResourceCountsGroupByRegion getDiscoveredResourceCountsGroupByRegion(array $options = [])
 * @method GetDiscoveredResourceCountsGroupByResourceType getDiscoveredResourceCountsGroupByResourceType(array $options = [])
 * @method GetResourceComplianceByConfigRule getResourceComplianceByConfigRule(array $options = [])
 * @method GetResourceComplianceByPack getResourceComplianceByPack(array $options = [])
 * @method GetResourceComplianceTimeline getResourceComplianceTimeline(array $options = [])
 * @method GetResourceConfigurationTimeline getResourceConfigurationTimeline(array $options = [])
 * @method IgnoreAggregateEvaluationResults ignoreAggregateEvaluationResults(array $options = [])
 * @method IgnoreEvaluationResults ignoreEvaluationResults(array $options = [])
 * @method ListAggregateCompliancePacks listAggregateCompliancePacks(array $options = [])
 * @method ListAggregateConfigRuleEvaluationResults listAggregateConfigRuleEvaluationResults(array $options = [])
 * @method ListAggregateConfigRules listAggregateConfigRules(array $options = [])
 * @method ListAggregateResourceEvaluationResults listAggregateResourceEvaluationResults(array $options = [])
 * @method ListAggregators listAggregators(array $options = [])
 * @method ListCompliancePacks listCompliancePacks(array $options = [])
 * @method ListCompliancePackTemplates listCompliancePackTemplates(array $options = [])
 * @method ListConfigRuleEvaluationResults listConfigRuleEvaluationResults(array $options = [])
 * @method ListResourceEvaluationResults listResourceEvaluationResults(array $options = [])
 * @method RevertAggregateEvaluationResults revertAggregateEvaluationResults(array $options = [])
 * @method RevertEvaluationResults revertEvaluationResults(array $options = [])
 * @method StartAggregateConfigRuleEvaluation startAggregateConfigRuleEvaluation(array $options = [])
 * @method UpdateAggregateCompliancePack updateAggregateCompliancePack(array $options = [])
 * @method UpdateAggregateConfigRule updateAggregateConfigRule(array $options = [])
 * @method UpdateAggregator updateAggregator(array $options = [])
 * @method UpdateCompliancePack updateCompliancePack(array $options = [])
 * @method UpdateConfigRule updateConfigRule(array $options = [])
 */
class ConfigApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Config';

    /** @var string */
    public $version = '2020-09-07';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class ActiveAggregateConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class AttachAggregateConfigRuleToCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class AttachConfigRuleToCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getCompliancePackTemplateId()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 */
class CreateAggregateCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackName($value)
    {
        $this->data['CompliancePackName'] = $value;
        $this->options['form_params']['CompliancePackName'] = $value;

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
    public function withCompliancePackTemplateId($value)
    {
        $this->data['CompliancePackTemplateId'] = $value;
        $this->options['form_params']['CompliancePackTemplateId'] = $value;

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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRules($value)
    {
        $this->data['ConfigRules'] = $value;
        $this->options['form_params']['ConfigRules'] = $value;

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
}

/**
 * @method string getTagKeyScope()
 * @method string getClientToken()
 * @method string getResourceTypesScope()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getConfigRuleTriggerTypes()
 * @method string getSourceIdentifier()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getRiskLevel()
 * @method string getSourceOwner()
 * @method string getResourceGroupIdsScope()
 * @method string getInputParameters()
 * @method string getConfigRuleName()
 * @method string getMaximumExecutionFrequency()
 * @method string getExcludeResourceIdsScope()
 */
class CreateAggregateConfigRule extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeyScope($value)
    {
        $this->data['TagKeyScope'] = $value;
        $this->options['form_params']['TagKeyScope'] = $value;

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
    public function withResourceTypesScope($value)
    {
        $this->data['ResourceTypesScope'] = $value;
        $this->options['form_params']['ResourceTypesScope'] = $value;

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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRuleTriggerTypes($value)
    {
        $this->data['ConfigRuleTriggerTypes'] = $value;
        $this->options['form_params']['ConfigRuleTriggerTypes'] = $value;

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
    public function withTagValueScope($value)
    {
        $this->data['TagValueScope'] = $value;
        $this->options['form_params']['TagValueScope'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIdsScope($value)
    {
        $this->data['RegionIdsScope'] = $value;
        $this->options['form_params']['RegionIdsScope'] = $value;

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
    public function withResourceGroupIdsScope($value)
    {
        $this->data['ResourceGroupIdsScope'] = $value;
        $this->options['form_params']['ResourceGroupIdsScope'] = $value;

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
    public function withMaximumExecutionFrequency($value)
    {
        $this->data['MaximumExecutionFrequency'] = $value;
        $this->options['form_params']['MaximumExecutionFrequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getAggregatorType()
 * @method string getClientToken()
 * @method string getAggregatorName()
 * @method string getDescription()
 * @method string getAggregatorAccounts()
 */
class CreateAggregator extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregatorType($value)
    {
        $this->data['AggregatorType'] = $value;
        $this->options['form_params']['AggregatorType'] = $value;

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
    public function withAggregatorName($value)
    {
        $this->data['AggregatorName'] = $value;
        $this->options['form_params']['AggregatorName'] = $value;

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
    public function withAggregatorAccounts($value)
    {
        $this->data['AggregatorAccounts'] = $value;
        $this->options['form_params']['AggregatorAccounts'] = $value;

        return $this;
    }
}

/**
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getCompliancePackTemplateId()
 * @method string getDescription()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 */
class CreateCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackName($value)
    {
        $this->data['CompliancePackName'] = $value;
        $this->options['form_params']['CompliancePackName'] = $value;

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
    public function withCompliancePackTemplateId($value)
    {
        $this->data['CompliancePackTemplateId'] = $value;
        $this->options['form_params']['CompliancePackTemplateId'] = $value;

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
    public function withConfigRules($value)
    {
        $this->data['ConfigRules'] = $value;
        $this->options['form_params']['ConfigRules'] = $value;

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
}

/**
 * @method string getTagKeyScope()
 * @method string getClientToken()
 * @method string getResourceTypesScope()
 * @method string getDescription()
 * @method string getConfigRuleTriggerTypes()
 * @method string getSourceIdentifier()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getRiskLevel()
 * @method string getSourceOwner()
 * @method string getResourceGroupIdsScope()
 * @method string getInputParameters()
 * @method string getConfigRuleName()
 * @method string getMaximumExecutionFrequency()
 * @method string getExcludeResourceIdsScope()
 */
class CreateConfigRule extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagKeyScope($value)
    {
        $this->data['TagKeyScope'] = $value;
        $this->options['form_params']['TagKeyScope'] = $value;

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
    public function withResourceTypesScope($value)
    {
        $this->data['ResourceTypesScope'] = $value;
        $this->options['form_params']['ResourceTypesScope'] = $value;

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
    public function withConfigRuleTriggerTypes($value)
    {
        $this->data['ConfigRuleTriggerTypes'] = $value;
        $this->options['form_params']['ConfigRuleTriggerTypes'] = $value;

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
    public function withTagValueScope($value)
    {
        $this->data['TagValueScope'] = $value;
        $this->options['form_params']['TagValueScope'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIdsScope($value)
    {
        $this->data['RegionIdsScope'] = $value;
        $this->options['form_params']['RegionIdsScope'] = $value;

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
    public function withResourceGroupIdsScope($value)
    {
        $this->data['ResourceGroupIdsScope'] = $value;
        $this->options['form_params']['ResourceGroupIdsScope'] = $value;

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
    public function withMaximumExecutionFrequency($value)
    {
        $this->data['MaximumExecutionFrequency'] = $value;
        $this->options['form_params']['MaximumExecutionFrequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class DeactiveAggregateConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class DeactiveConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method string getAggregatorId()
 * @method string getCompliancePackIds()
 * @method string getDeleteRule()
 */
class DeleteAggregateCompliancePacks extends Rpc
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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackIds($value)
    {
        $this->data['CompliancePackIds'] = $value;
        $this->options['form_params']['CompliancePackIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteRule($value)
    {
        $this->data['DeleteRule'] = $value;
        $this->options['form_params']['DeleteRule'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class DeleteAggregateConfigRules extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method string getAggregatorIds()
 */
class DeleteAggregators extends Rpc
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
    public function withAggregatorIds($value)
    {
        $this->data['AggregatorIds'] = $value;
        $this->options['form_params']['AggregatorIds'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getCompliancePackIds()
 * @method string getDeleteRule()
 */
class DeleteCompliancePacks extends Rpc
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
    public function withCompliancePackIds($value)
    {
        $this->data['CompliancePackIds'] = $value;
        $this->options['form_params']['CompliancePackIds'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeleteRule($value)
    {
        $this->data['DeleteRule'] = $value;
        $this->options['form_params']['DeleteRule'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class DetachAggregateConfigRuleToCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class DetachConfigRuleToCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getClientToken()
 * @method string getAggregatorId()
 * @method string getCompliancePackId()
 */
class GenerateAggregateCompliancePackReport extends Rpc
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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackId($value)
    {
        $this->data['CompliancePackId'] = $value;
        $this->options['form_params']['CompliancePackId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getAggregatorId()
 */
class GenerateAggregateConfigRulesReport extends Rpc
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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getCompliancePackId()
 */
class GenerateCompliancePackReport extends Rpc
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
    public function withCompliancePackId($value)
    {
        $this->data['CompliancePackId'] = $value;
        $this->options['form_params']['CompliancePackId'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 */
class GenerateConfigRulesReport extends Rpc
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
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateAccountComplianceByPack extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateCompliancePack extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateCompliancePackReport extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateConfigRule extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateConfigRuleComplianceByPack extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateConfigRulesReport extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateConfigRuleSummaryByRiskLevel extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 */
class GetAggregateResourceComplianceByConfigRule extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateResourceComplianceByPack extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetAggregateResourceComplianceTimeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetAggregateResourceConfigurationTimeline extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getFolderId()
 * @method $this withFolderId($value)
 */
class GetAggregateResourceCountsGroupByRegion extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getFolderId()
 * @method $this withFolderId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetAggregateResourceCountsGroupByResourceType extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregator extends Rpc
{
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetCompliancePack extends Rpc
{
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetCompliancePackReport extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 */
class GetConfigRule extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetConfigRuleComplianceByPack extends Rpc
{
}

class GetConfigRulesReport extends Rpc
{
}

class GetConfigRuleSummaryByRiskLevel extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class GetDiscoveredResourceCountsGroupByRegion extends Rpc
{
}

/**
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetDiscoveredResourceCountsGroupByResourceType extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 */
class GetResourceComplianceByConfigRule extends Rpc
{
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetResourceComplianceByPack extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetResourceComplianceTimeline extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetResourceConfigurationTimeline extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method string getReason()
 * @method string getResources()
 * @method string getAggregatorId()
 */
class IgnoreAggregateEvaluationResults extends Rpc
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
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['form_params']['Reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method string getReason()
 * @method string getResources()
 */
class IgnoreEvaluationResults extends Rpc
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
    public function withReason($value)
    {
        $this->data['Reason'] = $value;
        $this->options['form_params']['Reason'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListAggregateCompliancePacks extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 */
class ListAggregateConfigRuleEvaluationResults extends Rpc
{
}

/**
 * @method string getFilterInCompliancePack()
 * @method $this withFilterInCompliancePack($value)
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getConfigRuleState()
 * @method $this withConfigRuleState($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
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
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 * @method string getConfigRuleName()
 * @method $this withConfigRuleName($value)
 */
class ListAggregateConfigRules extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 */
class ListAggregateResourceEvaluationResults extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAggregators extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListCompliancePacks extends Rpc
{
}

/**
 * @method string getCompliancePackTemplateId()
 * @method $this withCompliancePackTemplateId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListCompliancePackTemplates extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 */
class ListConfigRuleEvaluationResults extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 */
class ListResourceEvaluationResults extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method string getResources()
 * @method string getAggregatorId()
 */
class RevertAggregateEvaluationResults extends Rpc
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
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method string getResources()
 */
class RevertEvaluationResults extends Rpc
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
    public function withResources($value)
    {
        $this->data['Resources'] = $value;
        $this->options['form_params']['Resources'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getRevertEvaluation()
 * @method $this withRevertEvaluation($value)
 */
class StartAggregateConfigRuleEvaluation extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getCompliancePackId()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 */
class UpdateAggregateCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackName($value)
    {
        $this->data['CompliancePackName'] = $value;
        $this->options['form_params']['CompliancePackName'] = $value;

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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackId($value)
    {
        $this->data['CompliancePackId'] = $value;
        $this->options['form_params']['CompliancePackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRules($value)
    {
        $this->data['ConfigRules'] = $value;
        $this->options['form_params']['ConfigRules'] = $value;

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
}

/**
 * @method string getConfigRuleId()
 * @method string getTagKeyScope()
 * @method string getClientToken()
 * @method string getResourceTypesScope()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getConfigRuleTriggerTypes()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getInputParameters()
 * @method string getConfigRuleName()
 * @method string getMaximumExecutionFrequency()
 * @method string getExcludeResourceIdsScope()
 */
class UpdateAggregateConfigRule extends Rpc
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
    public function withTagKeyScope($value)
    {
        $this->data['TagKeyScope'] = $value;
        $this->options['form_params']['TagKeyScope'] = $value;

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
    public function withResourceTypesScope($value)
    {
        $this->data['ResourceTypesScope'] = $value;
        $this->options['form_params']['ResourceTypesScope'] = $value;

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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRuleTriggerTypes($value)
    {
        $this->data['ConfigRuleTriggerTypes'] = $value;
        $this->options['form_params']['ConfigRuleTriggerTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagValueScope($value)
    {
        $this->data['TagValueScope'] = $value;
        $this->options['form_params']['TagValueScope'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIdsScope($value)
    {
        $this->data['RegionIdsScope'] = $value;
        $this->options['form_params']['RegionIdsScope'] = $value;

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
    public function withResourceGroupIdsScope($value)
    {
        $this->data['ResourceGroupIdsScope'] = $value;
        $this->options['form_params']['ResourceGroupIdsScope'] = $value;

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
    public function withMaximumExecutionFrequency($value)
    {
        $this->data['MaximumExecutionFrequency'] = $value;
        $this->options['form_params']['MaximumExecutionFrequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getAggregatorName()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getAggregatorAccounts()
 */
class UpdateAggregator extends Rpc
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
    public function withAggregatorName($value)
    {
        $this->data['AggregatorName'] = $value;
        $this->options['form_params']['AggregatorName'] = $value;

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
    public function withAggregatorId($value)
    {
        $this->data['AggregatorId'] = $value;
        $this->options['form_params']['AggregatorId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregatorAccounts($value)
    {
        $this->data['AggregatorAccounts'] = $value;
        $this->options['form_params']['AggregatorAccounts'] = $value;

        return $this;
    }
}

/**
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getCompliancePackId()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 */
class UpdateCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCompliancePackName($value)
    {
        $this->data['CompliancePackName'] = $value;
        $this->options['form_params']['CompliancePackName'] = $value;

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
    public function withCompliancePackId($value)
    {
        $this->data['CompliancePackId'] = $value;
        $this->options['form_params']['CompliancePackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConfigRules($value)
    {
        $this->data['ConfigRules'] = $value;
        $this->options['form_params']['ConfigRules'] = $value;

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
}

/**
 * @method string getConfigRuleId()
 * @method string getTagKeyScope()
 * @method string getClientToken()
 * @method string getResourceTypesScope()
 * @method string getDescription()
 * @method string getConfigRuleTriggerTypes()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getInputParameters()
 * @method string getConfigRuleName()
 * @method string getMaximumExecutionFrequency()
 * @method string getExcludeResourceIdsScope()
 */
class UpdateConfigRule extends Rpc
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
    public function withTagKeyScope($value)
    {
        $this->data['TagKeyScope'] = $value;
        $this->options['form_params']['TagKeyScope'] = $value;

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
    public function withResourceTypesScope($value)
    {
        $this->data['ResourceTypesScope'] = $value;
        $this->options['form_params']['ResourceTypesScope'] = $value;

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
    public function withConfigRuleTriggerTypes($value)
    {
        $this->data['ConfigRuleTriggerTypes'] = $value;
        $this->options['form_params']['ConfigRuleTriggerTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagValueScope($value)
    {
        $this->data['TagValueScope'] = $value;
        $this->options['form_params']['TagValueScope'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRegionIdsScope($value)
    {
        $this->data['RegionIdsScope'] = $value;
        $this->options['form_params']['RegionIdsScope'] = $value;

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
    public function withResourceGroupIdsScope($value)
    {
        $this->data['ResourceGroupIdsScope'] = $value;
        $this->options['form_params']['ResourceGroupIdsScope'] = $value;

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
    public function withMaximumExecutionFrequency($value)
    {
        $this->data['MaximumExecutionFrequency'] = $value;
        $this->options['form_params']['MaximumExecutionFrequency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}
