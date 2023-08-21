<?php

namespace AlibabaCloud\Config\V20200907;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ActiveAggregateConfigRules activeAggregateConfigRules(array $options = [])
 * @method ActiveConfigRules activeConfigRules(array $options = [])
 * @method AttachAggregateConfigRuleToCompliancePack attachAggregateConfigRuleToCompliancePack(array $options = [])
 * @method AttachConfigRuleToCompliancePack attachConfigRuleToCompliancePack(array $options = [])
 * @method CopyCompliancePacks copyCompliancePacks(array $options = [])
 * @method CopyConfigRules copyConfigRules(array $options = [])
 * @method CreateAdvancedSearchFile createAdvancedSearchFile(array $options = [])
 * @method CreateAggregateAdvancedSearchFile createAggregateAdvancedSearchFile(array $options = [])
 * @method CreateAggregateCompliancePack createAggregateCompliancePack(array $options = [])
 * @method CreateAggregateConfigDeliveryChannel createAggregateConfigDeliveryChannel(array $options = [])
 * @method CreateAggregateConfigRule createAggregateConfigRule(array $options = [])
 * @method CreateAggregateRemediation createAggregateRemediation(array $options = [])
 * @method CreateAggregator createAggregator(array $options = [])
 * @method CreateCompliancePack createCompliancePack(array $options = [])
 * @method CreateConfigDeliveryChannel createConfigDeliveryChannel(array $options = [])
 * @method CreateConfigRule createConfigRule(array $options = [])
 * @method CreateDeliveryChannel createDeliveryChannel(array $options = [])
 * @method CreateRemediation createRemediation(array $options = [])
 * @method DeactiveAggregateConfigRules deactiveAggregateConfigRules(array $options = [])
 * @method DeactiveConfigRules deactiveConfigRules(array $options = [])
 * @method DeleteAggregateCompliancePacks deleteAggregateCompliancePacks(array $options = [])
 * @method DeleteAggregateConfigDeliveryChannel deleteAggregateConfigDeliveryChannel(array $options = [])
 * @method DeleteAggregateConfigRules deleteAggregateConfigRules(array $options = [])
 * @method DeleteAggregateRemediations deleteAggregateRemediations(array $options = [])
 * @method DeleteAggregators deleteAggregators(array $options = [])
 * @method DeleteCompliancePacks deleteCompliancePacks(array $options = [])
 * @method DeleteConfigDeliveryChannel deleteConfigDeliveryChannel(array $options = [])
 * @method DeleteConfigRules deleteConfigRules(array $options = [])
 * @method DeleteRemediations deleteRemediations(array $options = [])
 * @method DescribeRemediation describeRemediation(array $options = [])
 * @method DetachAggregateConfigRuleToCompliancePack detachAggregateConfigRuleToCompliancePack(array $options = [])
 * @method DetachConfigRuleToCompliancePack detachConfigRuleToCompliancePack(array $options = [])
 * @method EvaluatePreConfigRules evaluatePreConfigRules(array $options = [])
 * @method GenerateAggregateCompliancePackReport generateAggregateCompliancePackReport(array $options = [])
 * @method GenerateAggregateConfigRulesReport generateAggregateConfigRulesReport(array $options = [])
 * @method GenerateAggregateResourceInventory generateAggregateResourceInventory(array $options = [])
 * @method GenerateCompliancePackReport generateCompliancePackReport(array $options = [])
 * @method GenerateConfigRulesReport generateConfigRulesReport(array $options = [])
 * @method GenerateResourceInventory generateResourceInventory(array $options = [])
 * @method GetAdvancedSearchFile getAdvancedSearchFile(array $options = [])
 * @method GetAggregateAccountComplianceByPack getAggregateAccountComplianceByPack(array $options = [])
 * @method GetAggregateAdvancedSearchFile getAggregateAdvancedSearchFile(array $options = [])
 * @method GetAggregateCompliancePack getAggregateCompliancePack(array $options = [])
 * @method GetAggregateCompliancePackReport getAggregateCompliancePackReport(array $options = [])
 * @method GetAggregateComplianceSummary getAggregateComplianceSummary(array $options = [])
 * @method GetAggregateConfigDeliveryChannel getAggregateConfigDeliveryChannel(array $options = [])
 * @method GetAggregateConfigRule getAggregateConfigRule(array $options = [])
 * @method GetAggregateConfigRuleComplianceByPack getAggregateConfigRuleComplianceByPack(array $options = [])
 * @method GetAggregateConfigRulesReport getAggregateConfigRulesReport(array $options = [])
 * @method GetAggregateConfigRuleSummaryByRiskLevel getAggregateConfigRuleSummaryByRiskLevel(array $options = [])
 * @method GetAggregateDiscoveredResource getAggregateDiscoveredResource(array $options = [])
 * @method GetAggregateResourceComplianceByConfigRule getAggregateResourceComplianceByConfigRule(array $options = [])
 * @method GetAggregateResourceComplianceByPack getAggregateResourceComplianceByPack(array $options = [])
 * @method GetAggregateResourceComplianceGroupByRegion getAggregateResourceComplianceGroupByRegion(array $options = [])
 * @method GetAggregateResourceComplianceGroupByResourceType getAggregateResourceComplianceGroupByResourceType(array $options = [])
 * @method GetAggregateResourceComplianceTimeline getAggregateResourceComplianceTimeline(array $options = [])
 * @method GetAggregateResourceConfigurationTimeline getAggregateResourceConfigurationTimeline(array $options = [])
 * @method GetAggregateResourceCountsGroupByRegion getAggregateResourceCountsGroupByRegion(array $options = [])
 * @method GetAggregateResourceCountsGroupByResourceType getAggregateResourceCountsGroupByResourceType(array $options = [])
 * @method GetAggregateResourceInventory getAggregateResourceInventory(array $options = [])
 * @method GetAggregator getAggregator(array $options = [])
 * @method GetCompliancePack getCompliancePack(array $options = [])
 * @method GetCompliancePackReport getCompliancePackReport(array $options = [])
 * @method GetComplianceSummary getComplianceSummary(array $options = [])
 * @method GetConfigDeliveryChannel getConfigDeliveryChannel(array $options = [])
 * @method GetConfigRule getConfigRule(array $options = [])
 * @method GetConfigRuleComplianceByPack getConfigRuleComplianceByPack(array $options = [])
 * @method GetConfigRulesReport getConfigRulesReport(array $options = [])
 * @method GetConfigRuleSummaryByRiskLevel getConfigRuleSummaryByRiskLevel(array $options = [])
 * @method GetConfigurationRecorder getConfigurationRecorder(array $options = [])
 * @method GetDiscoveredResource getDiscoveredResource(array $options = [])
 * @method GetDiscoveredResourceCountsGroupByRegion getDiscoveredResourceCountsGroupByRegion(array $options = [])
 * @method GetDiscoveredResourceCountsGroupByResourceType getDiscoveredResourceCountsGroupByResourceType(array $options = [])
 * @method GetIntegratedServiceStatus getIntegratedServiceStatus(array $options = [])
 * @method GetManagedRule getManagedRule(array $options = [])
 * @method GetRemediationTemplate getRemediationTemplate(array $options = [])
 * @method GetResourceComplianceByConfigRule getResourceComplianceByConfigRule(array $options = [])
 * @method GetResourceComplianceByPack getResourceComplianceByPack(array $options = [])
 * @method GetResourceComplianceGroupByRegion getResourceComplianceGroupByRegion(array $options = [])
 * @method GetResourceComplianceGroupByResourceType getResourceComplianceGroupByResourceType(array $options = [])
 * @method GetResourceComplianceTimeline getResourceComplianceTimeline(array $options = [])
 * @method GetResourceConfigurationTimeline getResourceConfigurationTimeline(array $options = [])
 * @method GetResourceInventory getResourceInventory(array $options = [])
 * @method GetSupportedResourceRelationConfig getSupportedResourceRelationConfig(array $options = [])
 * @method IgnoreAggregateEvaluationResults ignoreAggregateEvaluationResults(array $options = [])
 * @method IgnoreEvaluationResults ignoreEvaluationResults(array $options = [])
 * @method ListAggregateCompliancePacks listAggregateCompliancePacks(array $options = [])
 * @method ListAggregateConfigDeliveryChannels listAggregateConfigDeliveryChannels(array $options = [])
 * @method ListAggregateConfigRuleEvaluationResults listAggregateConfigRuleEvaluationResults(array $options = [])
 * @method ListAggregateConfigRuleEvaluationStatistics listAggregateConfigRuleEvaluationStatistics(array $options = [])
 * @method ListAggregateConfigRules listAggregateConfigRules(array $options = [])
 * @method ListAggregateDiscoveredResources listAggregateDiscoveredResources(array $options = [])
 * @method ListAggregateRemediationExecutions listAggregateRemediationExecutions(array $options = [])
 * @method ListAggregateRemediations listAggregateRemediations(array $options = [])
 * @method ListAggregateResourceEvaluationResults listAggregateResourceEvaluationResults(array $options = [])
 * @method ListAggregateResourceRelations listAggregateResourceRelations(array $options = [])
 * @method ListAggregateResourcesByAdvancedSearch listAggregateResourcesByAdvancedSearch(array $options = [])
 * @method ListAggregators listAggregators(array $options = [])
 * @method ListCompliancePacks listCompliancePacks(array $options = [])
 * @method ListCompliancePackTemplates listCompliancePackTemplates(array $options = [])
 * @method ListConfigDeliveryChannels listConfigDeliveryChannels(array $options = [])
 * @method ListConfigRuleEvaluationResults listConfigRuleEvaluationResults(array $options = [])
 * @method ListConfigRuleEvaluationStatistics listConfigRuleEvaluationStatistics(array $options = [])
 * @method ListConfigRules listConfigRules(array $options = [])
 * @method ListDiscoveredResources listDiscoveredResources(array $options = [])
 * @method ListIntegratedService listIntegratedService(array $options = [])
 * @method ListManagedRules listManagedRules(array $options = [])
 * @method ListPreManagedRules listPreManagedRules(array $options = [])
 * @method ListRemediationExecutions listRemediationExecutions(array $options = [])
 * @method ListRemediations listRemediations(array $options = [])
 * @method ListRemediationTemplates listRemediationTemplates(array $options = [])
 * @method ListResourceEvaluationResults listResourceEvaluationResults(array $options = [])
 * @method ListResourceRelations listResourceRelations(array $options = [])
 * @method ListResourcesByAdvancedSearch listResourcesByAdvancedSearch(array $options = [])
 * @method ListSupportedProducts listSupportedProducts(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method PutEvaluations putEvaluations(array $options = [])
 * @method RevertAggregateEvaluationResults revertAggregateEvaluationResults(array $options = [])
 * @method RevertEvaluationResults revertEvaluationResults(array $options = [])
 * @method StartAggregateConfigRuleEvaluation startAggregateConfigRuleEvaluation(array $options = [])
 * @method StartAggregateRemediation startAggregateRemediation(array $options = [])
 * @method StartConfigRuleEvaluation startConfigRuleEvaluation(array $options = [])
 * @method StartConfigurationRecorder startConfigurationRecorder(array $options = [])
 * @method StartRemediation startRemediation(array $options = [])
 * @method StopConfigurationRecorder stopConfigurationRecorder(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateAggregateCompliancePack updateAggregateCompliancePack(array $options = [])
 * @method UpdateAggregateConfigDeliveryChannel updateAggregateConfigDeliveryChannel(array $options = [])
 * @method UpdateAggregateConfigRule updateAggregateConfigRule(array $options = [])
 * @method UpdateAggregateRemediation updateAggregateRemediation(array $options = [])
 * @method UpdateAggregator updateAggregator(array $options = [])
 * @method UpdateCompliancePack updateCompliancePack(array $options = [])
 * @method UpdateConfigDeliveryChannel updateConfigDeliveryChannel(array $options = [])
 * @method UpdateConfigRule updateConfigRule(array $options = [])
 * @method UpdateConfigurationRecorder updateConfigurationRecorder(array $options = [])
 * @method UpdateDeliveryChannel updateDeliveryChannel(array $options = [])
 * @method UpdateIntegratedServiceStatus updateIntegratedServiceStatus(array $options = [])
 * @method UpdateRemediation updateRemediation(array $options = [])
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

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class ActiveAggregateConfigRules extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class ActiveConfigRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
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
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class AttachConfigRuleToCompliancePack extends Rpc
{
}

/**
 * @method string getDesAggregatorIds()
 * @method $this withDesAggregatorIds($value)
 * @method string getSrcAggregatorId()
 * @method $this withSrcAggregatorId($value)
 * @method string getSrcCompliancePackIds()
 * @method $this withSrcCompliancePackIds($value)
 */
class CopyCompliancePacks extends Rpc
{
}

/**
 * @method string getDesAggregatorIds()
 * @method $this withDesAggregatorIds($value)
 * @method string getSrcConfigRuleIds()
 * @method $this withSrcConfigRuleIds($value)
 * @method string getSrcAggregatorId()
 * @method $this withSrcAggregatorId($value)
 */
class CopyConfigRules extends Rpc
{
}

/**
 * @method string getSql()
 * @method $this withSql($value)
 * @method string getOnlyBaseLine()
 * @method $this withOnlyBaseLine($value)
 */
class CreateAdvancedSearchFile extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getSql()
 * @method $this withSql($value)
 * @method string getOnlyBaseLine()
 * @method $this withOnlyBaseLine($value)
 */
class CreateAggregateAdvancedSearchFile extends Rpc
{
}

/**
 * @method string getTagKeyScope()
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getCompliancePackTemplateId()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getDefaultEnable()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getExcludeResourceIdsScope()
 */
class CreateAggregateCompliancePack extends Rpc
{

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
    public function withDefaultEnable($value)
    {
        $this->data['DefaultEnable'] = $value;
        $this->options['form_params']['DefaultEnable'] = $value;

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
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getNonCompliantNotification()
 * @method $this withNonCompliantNotification($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConfigurationSnapshot()
 * @method $this withConfigurationSnapshot($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getDeliveryChannelTargetArn()
 * @method $this withDeliveryChannelTargetArn($value)
 * @method string getDeliveryChannelCondition()
 * @method $this withDeliveryChannelCondition($value)
 * @method string getConfigurationItemChangeNotification()
 * @method $this withConfigurationItemChangeNotification($value)
 * @method string getDeliveryChannelName()
 * @method $this withDeliveryChannelName($value)
 * @method string getDeliverySnapshotTime()
 * @method $this withDeliverySnapshotTime($value)
 * @method string getOversizedDataOSSTargetArn()
 * @method $this withOversizedDataOSSTargetArn($value)
 * @method string getDeliveryChannelType()
 * @method $this withDeliveryChannelType($value)
 */
class CreateAggregateConfigDeliveryChannel extends Rpc
{
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
 * @method string getExcludeAccountIdsScope()
 * @method string getRegionIdsScope()
 * @method string getExcludeFolderIdsScope()
 * @method string getRiskLevel()
 * @method string getSourceOwner()
 * @method string getResourceGroupIdsScope()
 * @method string getInputParameters()
 * @method string getConfigRuleName()
 * @method string getTagKeyLogicScope()
 * @method string getMaximumExecutionFrequency()
 * @method string getFolderIdsScope()
 * @method string getExcludeResourceIdsScope()
 * @method string getConditions()
 */
class CreateAggregateConfigRule extends Rpc
{

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
    public function withExcludeAccountIdsScope($value)
    {
        $this->data['ExcludeAccountIdsScope'] = $value;
        $this->options['form_params']['ExcludeAccountIdsScope'] = $value;

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
    public function withExcludeFolderIdsScope($value)
    {
        $this->data['ExcludeFolderIdsScope'] = $value;
        $this->options['form_params']['ExcludeFolderIdsScope'] = $value;

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
    public function withTagKeyLogicScope($value)
    {
        $this->data['TagKeyLogicScope'] = $value;
        $this->options['form_params']['TagKeyLogicScope'] = $value;

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
    public function withFolderIdsScope($value)
    {
        $this->data['FolderIdsScope'] = $value;
        $this->options['form_params']['FolderIdsScope'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['form_params']['Conditions'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method string getRemediationType()
 * @method string getClientToken()
 * @method string getAggregatorId()
 * @method string getSourceType()
 * @method string getRemediationTemplateId()
 * @method string getParams()
 * @method string getInvokeType()
 */
class CreateAggregateRemediation extends Rpc
{

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
    public function withRemediationType($value)
    {
        $this->data['RemediationType'] = $value;
        $this->options['form_params']['RemediationType'] = $value;

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
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationTemplateId($value)
    {
        $this->data['RemediationTemplateId'] = $value;
        $this->options['form_params']['RemediationTemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvokeType($value)
    {
        $this->data['InvokeType'] = $value;
        $this->options['form_params']['InvokeType'] = $value;

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
 * @method string getTagKeyScope()
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getCompliancePackTemplateId()
 * @method string getDescription()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getDefaultEnable()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getExcludeResourceIdsScope()
 */
class CreateCompliancePack extends Rpc
{

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
    public function withDefaultEnable($value)
    {
        $this->data['DefaultEnable'] = $value;
        $this->options['form_params']['DefaultEnable'] = $value;

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
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getNonCompliantNotification()
 * @method $this withNonCompliantNotification($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConfigurationSnapshot()
 * @method $this withConfigurationSnapshot($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDeliveryChannelTargetArn()
 * @method $this withDeliveryChannelTargetArn($value)
 * @method string getDeliveryChannelCondition()
 * @method $this withDeliveryChannelCondition($value)
 * @method string getConfigurationItemChangeNotification()
 * @method $this withConfigurationItemChangeNotification($value)
 * @method string getDeliveryChannelName()
 * @method $this withDeliveryChannelName($value)
 * @method string getDeliverySnapshotTime()
 * @method $this withDeliverySnapshotTime($value)
 * @method string getOversizedDataOSSTargetArn()
 * @method $this withOversizedDataOSSTargetArn($value)
 * @method string getDeliveryChannelType()
 * @method $this withDeliveryChannelType($value)
 */
class CreateConfigDeliveryChannel extends Rpc
{
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
 * @method string getTagKeyLogicScope()
 * @method string getMaximumExecutionFrequency()
 * @method string getExcludeResourceIdsScope()
 * @method string getConditions()
 */
class CreateConfigRule extends Rpc
{

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
    public function withTagKeyLogicScope($value)
    {
        $this->data['TagKeyLogicScope'] = $value;
        $this->options['form_params']['TagKeyLogicScope'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['form_params']['Conditions'] = $value;

        return $this;
    }
}

/**
 * @method string getNonCompliantNotification()
 * @method string getClientToken()
 * @method string getConfigurationSnapshot()
 * @method string getDescription()
 * @method string getDeliveryChannelTargetArn()
 * @method string getDeliveryChannelCondition()
 * @method string getConfigurationItemChangeNotification()
 * @method string getDeliveryChannelAssumeRoleArn()
 * @method string getDeliveryChannelName()
 * @method string getOversizedDataOSSTargetArn()
 * @method string getDeliveryChannelType()
 */
class CreateDeliveryChannel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNonCompliantNotification($value)
    {
        $this->data['NonCompliantNotification'] = $value;
        $this->options['form_params']['NonCompliantNotification'] = $value;

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
    public function withConfigurationSnapshot($value)
    {
        $this->data['ConfigurationSnapshot'] = $value;
        $this->options['form_params']['ConfigurationSnapshot'] = $value;

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
    public function withConfigurationItemChangeNotification($value)
    {
        $this->data['ConfigurationItemChangeNotification'] = $value;
        $this->options['form_params']['ConfigurationItemChangeNotification'] = $value;

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
    public function withOversizedDataOSSTargetArn($value)
    {
        $this->data['OversizedDataOSSTargetArn'] = $value;
        $this->options['form_params']['OversizedDataOSSTargetArn'] = $value;

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
}

/**
 * @method string getConfigRuleId()
 * @method string getRemediationType()
 * @method string getClientToken()
 * @method string getSourceType()
 * @method string getRemediationTemplateId()
 * @method string getParams()
 * @method string getInvokeType()
 */
class CreateRemediation extends Rpc
{

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
    public function withRemediationType($value)
    {
        $this->data['RemediationType'] = $value;
        $this->options['form_params']['RemediationType'] = $value;

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
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationTemplateId($value)
    {
        $this->data['RemediationTemplateId'] = $value;
        $this->options['form_params']['RemediationTemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvokeType($value)
    {
        $this->data['InvokeType'] = $value;
        $this->options['form_params']['InvokeType'] = $value;

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
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class DeactiveConfigRules extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getAggregatorId()
 * @method string getCompliancePackIds()
 * @method string getDeleteRule()
 */
class DeleteAggregateCompliancePacks extends Rpc
{

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
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getDeliveryChannelId()
 * @method $this withDeliveryChannelId($value)
 */
class DeleteAggregateConfigDeliveryChannel extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class DeleteAggregateConfigRules extends Rpc
{
}

/**
 * @method string getRemediationIds()
 * @method string getAggregatorId()
 */
class DeleteAggregateRemediations extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationIds($value)
    {
        $this->data['RemediationIds'] = $value;
        $this->options['form_params']['RemediationIds'] = $value;

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
 * @method string getAggregatorIds()
 */
class DeleteAggregators extends Rpc
{

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
 * @method string getDeliveryChannelId()
 * @method $this withDeliveryChannelId($value)
 */
class DeleteConfigDeliveryChannel extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class DeleteConfigRules extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getRemediationIds()
 */
class DeleteRemediations extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationIds($value)
    {
        $this->data['RemediationIds'] = $value;
        $this->options['form_params']['RemediationIds'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getRemediationId()
 * @method $this withRemediationId($value)
 */
class DescribeRemediation extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class DetachConfigRuleToCompliancePack extends Rpc
{
}

/**
 * @method string getEnableManagedRules()
 * @method string getResourceEvaluateItems()
 * @method string getResourceTypeFormat()
 */
class EvaluatePreConfigRules extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableManagedRules($value)
    {
        $this->data['EnableManagedRules'] = $value;
        $this->options['form_params']['EnableManagedRules'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceEvaluateItems($value)
    {
        $this->data['ResourceEvaluateItems'] = $value;
        $this->options['form_params']['ResourceEvaluateItems'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceTypeFormat($value)
    {
        $this->data['ResourceTypeFormat'] = $value;
        $this->options['form_params']['ResourceTypeFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getAggregatorId()
 * @method string getCompliancePackId()
 */
class GenerateAggregateCompliancePackReport extends Rpc
{

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
 * @method string getConfigRuleIds()
 * @method string getAggregatorId()
 */
class GenerateAggregateConfigRulesReport extends Rpc
{

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
    public function withConfigRuleIds($value)
    {
        $this->data['ConfigRuleIds'] = $value;
        $this->options['form_params']['ConfigRuleIds'] = $value;

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
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getAccountIds()
 * @method $this withAccountIds($value)
 */
class GenerateAggregateResourceInventory extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method string getCompliancePackId()
 */
class GenerateCompliancePackReport extends Rpc
{

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
 * @method string getConfigRuleIds()
 */
class GenerateConfigRulesReport extends Rpc
{

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
    public function withConfigRuleIds($value)
    {
        $this->data['ConfigRuleIds'] = $value;
        $this->options['form_params']['ConfigRuleIds'] = $value;

        return $this;
    }
}

/**
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 */
class GenerateResourceInventory extends Rpc
{
}

class GetAdvancedSearchFile extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateAccountComplianceByPack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateAdvancedSearchFile extends Rpc
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateCompliancePackReport extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateComplianceSummary extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getDeliveryChannelId()
 * @method $this withDeliveryChannelId($value)
 */
class GetAggregateConfigDeliveryChannel extends Rpc
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
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetAggregateConfigRuleComplianceByPack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
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

    /** @var string */
    public $method = 'GET';
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
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetAggregateDiscoveredResource extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateResourceComplianceGroupByRegion extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregateResourceComplianceGroupByResourceType extends Rpc
{
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
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

    /** @var string */
    public $method = 'GET';
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
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
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
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
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
class GetAggregateResourceInventory extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class GetAggregator extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetCompliancePack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetCompliancePackReport extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class GetComplianceSummary extends Rpc
{
}

/**
 * @method string getDeliveryChannelId()
 * @method $this withDeliveryChannelId($value)
 */
class GetConfigDeliveryChannel extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 */
class GetConfigRule extends Rpc
{
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetConfigRuleComplianceByPack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getReportId()
 * @method $this withReportId($value)
 */
class GetConfigRulesReport extends Rpc
{
}

class GetConfigRuleSummaryByRiskLevel extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class GetConfigurationRecorder extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class GetDiscoveredResource extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getServiceCode()
 */
class GetIntegratedServiceStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

        return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 */
class GetManagedRule extends Rpc
{
}

/**
 * @method string getTemplateIdentifier()
 * @method $this withTemplateIdentifier($value)
 */
class GetRemediationTemplate extends Rpc
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 */
class GetResourceComplianceByPack extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class GetResourceComplianceGroupByRegion extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 */
class GetResourceComplianceGroupByResourceType extends Rpc
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

class GetResourceInventory extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class GetSupportedResourceRelationConfig extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method string getReason()
 * @method string getIgnoreDate()
 * @method string getResources()
 * @method string getAggregatorId()
 */
class IgnoreAggregateEvaluationResults extends Rpc
{

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
    public function withIgnoreDate($value)
    {
        $this->data['IgnoreDate'] = $value;
        $this->options['form_params']['IgnoreDate'] = $value;

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
 * @method string getIgnoreDate()
 * @method string getResources()
 */
class IgnoreEvaluationResults extends Rpc
{

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
    public function withIgnoreDate($value)
    {
        $this->data['IgnoreDate'] = $value;
        $this->options['form_params']['IgnoreDate'] = $value;

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
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getDeliveryChannelIds()
 * @method $this withDeliveryChannelIds($value)
 */
class ListAggregateConfigDeliveryChannels extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getResourceGroupIds()
 * @method $this withResourceGroupIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAggregateConfigRuleEvaluationResults extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class ListAggregateConfigRuleEvaluationStatistics extends Rpc
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
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 * @method string getConfigRuleName()
 * @method $this withConfigRuleName($value)
 * @method string getServiceChannel()
 * @method $this withServiceChannel($value)
 */
class ListAggregateConfigRules extends Rpc
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
 * @method string getFolderId()
 * @method $this withFolderId($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAggregateDiscoveredResources extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getExecutionStatus()
 * @method $this withExecutionStatus($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListAggregateRemediationExecutions extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 */
class ListAggregateRemediations extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ListAggregateResourceEvaluationResults extends Rpc
{
}

/**
 * @method string getTargetResourceId()
 * @method $this withTargetResourceId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getRelationType()
 * @method $this withRelationType($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTargetResourceType()
 * @method $this withTargetResourceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ListAggregateResourceRelations extends Rpc
{
}

/**
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getSql()
 * @method $this withSql($value)
 */
class ListAggregateResourcesByAdvancedSearch extends Rpc
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
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
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
 * @method string getDeliveryChannelIds()
 * @method $this withDeliveryChannelIds($value)
 */
class ListConfigDeliveryChannels extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getResourceGroupIds()
 * @method $this withResourceGroupIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListConfigRuleEvaluationResults extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

class ListConfigRuleEvaluationStatistics extends Rpc
{
}

/**
 * @method string getFilterInCompliancePack()
 * @method $this withFilterInCompliancePack($value)
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
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getComplianceType()
 * @method $this withComplianceType($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 * @method string getConfigRuleName()
 * @method $this withConfigRuleName($value)
 * @method string getServiceChannel()
 * @method $this withServiceChannel($value)
 */
class ListConfigRules extends Rpc
{
}

/**
 * @method string getResourceDeleted()
 * @method $this withResourceDeleted($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getRegions()
 * @method $this withRegions($value)
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListDiscoveredResources extends Rpc
{
}

class ListIntegratedService extends Rpc
{
}

/**
 * @method string getResourceTypes()
 * @method $this withResourceTypes($value)
 * @method string getSupportRemediation()
 * @method $this withSupportRemediation($value)
 * @method string getRiskLevel()
 * @method $this withRiskLevel($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSupportPreviewManagedRule()
 * @method $this withSupportPreviewManagedRule($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class ListManagedRules extends Rpc
{
}

/**
 * @method string getResourceTypes()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getResourceTypeFormat()
 */
class ListPreManagedRules extends Rpc
{

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceTypeFormat($value)
    {
        $this->data['ResourceTypeFormat'] = $value;
        $this->options['form_params']['ResourceTypeFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getExecutionStatus()
 * @method $this withExecutionStatus($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListRemediationExecutions extends Rpc
{
}

/**
 * @method string getConfigRuleIds()
 * @method $this withConfigRuleIds($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRemediations extends Rpc
{
}

/**
 * @method string getManagedRuleIdentifier()
 * @method $this withManagedRuleIdentifier($value)
 * @method string getRemediationType()
 * @method $this withRemediationType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListRemediationTemplates extends Rpc
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
 * @method string getTargetResourceType()
 * @method $this withTargetResourceType($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getTargetResourceId()
 * @method $this withTargetResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getRelationType()
 * @method $this withRelationType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ListResourceRelations extends Rpc
{
}

/**
 * @method string getSql()
 * @method $this withSql($value)
 */
class ListResourcesByAdvancedSearch extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListSupportedProducts extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method string getNextToken()
 * @method string getTag()
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['form_params']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

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
    public $scheme = 'https';

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
 * @method string getResources()
 * @method string getAggregatorId()
 */
class RevertAggregateEvaluationResults extends Rpc
{

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
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getResourceAccountId()
 * @method $this withResourceAccountId($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class StartAggregateRemediation extends Rpc
{
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getCompliancePackId()
 * @method $this withCompliancePackId($value)
 * @method string getRevertEvaluation()
 * @method $this withRevertEvaluation($value)
 */
class StartConfigRuleEvaluation extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

class StartConfigurationRecorder extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getConfigRuleId()
 * @method $this withConfigRuleId($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getResourceRegionId()
 * @method $this withResourceRegionId($value)
 */
class StartRemediation extends Rpc
{
}

class StopConfigurationRecorder extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method string getTag()
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['form_params']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }
}

/**
 * @method string getAll()
 * @method array getResourceId()
 * @method string getResourceType()
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAll($value)
    {
        $this->data['All'] = $value;
        $this->options['form_params']['All'] = $value;

        return $this;
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['form_params']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceType($value)
    {
        $this->data['ResourceType'] = $value;
        $this->options['form_params']['ResourceType'] = $value;

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
			$this->options['form_params']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTagKeyScope()
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getAggregatorId()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getCompliancePackId()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getExcludeResourceIdsScope()
 */
class UpdateAggregateCompliancePack extends Rpc
{

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
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getNonCompliantNotification()
 * @method $this withNonCompliantNotification($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConfigurationSnapshot()
 * @method $this withConfigurationSnapshot($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAggregatorId()
 * @method $this withAggregatorId($value)
 * @method string getDeliveryChannelTargetArn()
 * @method $this withDeliveryChannelTargetArn($value)
 * @method string getDeliveryChannelCondition()
 * @method $this withDeliveryChannelCondition($value)
 * @method string getConfigurationItemChangeNotification()
 * @method $this withConfigurationItemChangeNotification($value)
 * @method string getDeliveryChannelName()
 * @method $this withDeliveryChannelName($value)
 * @method string getDeliverySnapshotTime()
 * @method $this withDeliverySnapshotTime($value)
 * @method string getDeliveryChannelId()
 * @method $this withDeliveryChannelId($value)
 * @method string getOversizedDataOSSTargetArn()
 * @method $this withOversizedDataOSSTargetArn($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAggregateConfigDeliveryChannel extends Rpc
{
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
 * @method string getExcludeAccountIdsScope()
 * @method string getRegionIdsScope()
 * @method string getExcludeFolderIdsScope()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getInputParameters()
 * @method string getConfigRuleName()
 * @method string getTagKeyLogicScope()
 * @method string getMaximumExecutionFrequency()
 * @method string getFolderIdsScope()
 * @method string getExcludeResourceIdsScope()
 * @method string getConditions()
 */
class UpdateAggregateConfigRule extends Rpc
{

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
    public function withExcludeAccountIdsScope($value)
    {
        $this->data['ExcludeAccountIdsScope'] = $value;
        $this->options['form_params']['ExcludeAccountIdsScope'] = $value;

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
    public function withExcludeFolderIdsScope($value)
    {
        $this->data['ExcludeFolderIdsScope'] = $value;
        $this->options['form_params']['ExcludeFolderIdsScope'] = $value;

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
    public function withTagKeyLogicScope($value)
    {
        $this->data['TagKeyLogicScope'] = $value;
        $this->options['form_params']['TagKeyLogicScope'] = $value;

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
    public function withFolderIdsScope($value)
    {
        $this->data['FolderIdsScope'] = $value;
        $this->options['form_params']['FolderIdsScope'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['form_params']['Conditions'] = $value;

        return $this;
    }
}

/**
 * @method string getRemediationType()
 * @method string getRemediationId()
 * @method string getAggregatorId()
 * @method string getSourceType()
 * @method string getRemediationTemplateId()
 * @method string getParams()
 * @method string getInvokeType()
 */
class UpdateAggregateRemediation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationType($value)
    {
        $this->data['RemediationType'] = $value;
        $this->options['form_params']['RemediationType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationId($value)
    {
        $this->data['RemediationId'] = $value;
        $this->options['form_params']['RemediationId'] = $value;

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
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationTemplateId($value)
    {
        $this->data['RemediationTemplateId'] = $value;
        $this->options['form_params']['RemediationTemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvokeType($value)
    {
        $this->data['InvokeType'] = $value;
        $this->options['form_params']['InvokeType'] = $value;

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
 * @method string getTagKeyScope()
 * @method string getCompliancePackName()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getTagValueScope()
 * @method string getRegionIdsScope()
 * @method string getCompliancePackId()
 * @method string getConfigRules()
 * @method string getRiskLevel()
 * @method string getResourceGroupIdsScope()
 * @method string getExcludeResourceIdsScope()
 */
class UpdateCompliancePack extends Rpc
{

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
    public function withExcludeResourceIdsScope($value)
    {
        $this->data['ExcludeResourceIdsScope'] = $value;
        $this->options['form_params']['ExcludeResourceIdsScope'] = $value;

        return $this;
    }
}

/**
 * @method string getNonCompliantNotification()
 * @method $this withNonCompliantNotification($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getConfigurationSnapshot()
 * @method $this withConfigurationSnapshot($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDeliveryChannelTargetArn()
 * @method $this withDeliveryChannelTargetArn($value)
 * @method string getDeliveryChannelCondition()
 * @method $this withDeliveryChannelCondition($value)
 * @method string getConfigurationItemChangeNotification()
 * @method $this withConfigurationItemChangeNotification($value)
 * @method string getDeliveryChannelName()
 * @method $this withDeliveryChannelName($value)
 * @method string getDeliverySnapshotTime()
 * @method $this withDeliverySnapshotTime($value)
 * @method string getDeliveryChannelId()
 * @method $this withDeliveryChannelId($value)
 * @method string getOversizedDataOSSTargetArn()
 * @method $this withOversizedDataOSSTargetArn($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateConfigDeliveryChannel extends Rpc
{
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
 * @method string getTagKeyLogicScope()
 * @method string getMaximumExecutionFrequency()
 * @method string getExcludeResourceIdsScope()
 * @method string getConditions()
 */
class UpdateConfigRule extends Rpc
{

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
    public function withTagKeyLogicScope($value)
    {
        $this->data['TagKeyLogicScope'] = $value;
        $this->options['form_params']['TagKeyLogicScope'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConditions($value)
    {
        $this->data['Conditions'] = $value;
        $this->options['form_params']['Conditions'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceTypes()
 */
class UpdateConfigurationRecorder extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
 * @method string getNonCompliantNotification()
 * @method string getClientToken()
 * @method string getConfigurationSnapshot()
 * @method string getDescription()
 * @method string getDeliveryChannelTargetArn()
 * @method string getDeliveryChannelCondition()
 * @method string getConfigurationItemChangeNotification()
 * @method string getDeliveryChannelAssumeRoleArn()
 * @method string getDeliveryChannelName()
 * @method string getDeliveryChannelId()
 * @method string getOversizedDataOSSTargetArn()
 * @method string getStatus()
 */
class UpdateDeliveryChannel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNonCompliantNotification($value)
    {
        $this->data['NonCompliantNotification'] = $value;
        $this->options['form_params']['NonCompliantNotification'] = $value;

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
    public function withConfigurationSnapshot($value)
    {
        $this->data['ConfigurationSnapshot'] = $value;
        $this->options['form_params']['ConfigurationSnapshot'] = $value;

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
    public function withConfigurationItemChangeNotification($value)
    {
        $this->data['ConfigurationItemChangeNotification'] = $value;
        $this->options['form_params']['ConfigurationItemChangeNotification'] = $value;

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
    public function withOversizedDataOSSTargetArn($value)
    {
        $this->data['OversizedDataOSSTargetArn'] = $value;
        $this->options['form_params']['OversizedDataOSSTargetArn'] = $value;

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
 * @method string getServiceCode()
 * @method string getStatus()
 */
class UpdateIntegratedServiceStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withServiceCode($value)
    {
        $this->data['ServiceCode'] = $value;
        $this->options['form_params']['ServiceCode'] = $value;

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
 * @method string getConfigRuleId()
 * @method string getRemediationType()
 * @method string getClientToken()
 * @method string getRemediationId()
 * @method string getSourceType()
 * @method string getRemediationTemplateId()
 * @method string getParams()
 * @method string getInvokeType()
 */
class UpdateRemediation extends Rpc
{

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
    public function withRemediationType($value)
    {
        $this->data['RemediationType'] = $value;
        $this->options['form_params']['RemediationType'] = $value;

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
    public function withRemediationId($value)
    {
        $this->data['RemediationId'] = $value;
        $this->options['form_params']['RemediationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRemediationTemplateId($value)
    {
        $this->data['RemediationTemplateId'] = $value;
        $this->options['form_params']['RemediationTemplateId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParams($value)
    {
        $this->data['Params'] = $value;
        $this->options['form_params']['Params'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInvokeType($value)
    {
        $this->data['InvokeType'] = $value;
        $this->options['form_params']['InvokeType'] = $value;

        return $this;
    }
}
