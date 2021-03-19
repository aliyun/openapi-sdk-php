<?php

namespace AlibabaCloud\Oos\V20190601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelExecution cancelExecution(array $options = [])
 * @method CreateParameter createParameter(array $options = [])
 * @method CreatePatchBaseline createPatchBaseline(array $options = [])
 * @method CreateSecretParameter createSecretParameter(array $options = [])
 * @method CreateStateConfiguration createStateConfiguration(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteExecutions deleteExecutions(array $options = [])
 * @method DeleteParameter deleteParameter(array $options = [])
 * @method DeletePatchBaseline deletePatchBaseline(array $options = [])
 * @method DeleteSecretParameter deleteSecretParameter(array $options = [])
 * @method DeleteStateConfigurations deleteStateConfigurations(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteTemplates deleteTemplates(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method GenerateExecutionPolicy generateExecutionPolicy(array $options = [])
 * @method GetExecutionTemplate getExecutionTemplate(array $options = [])
 * @method GetInventorySchema getInventorySchema(array $options = [])
 * @method GetParameter getParameter(array $options = [])
 * @method GetParameters getParameters(array $options = [])
 * @method GetParametersByPath getParametersByPath(array $options = [])
 * @method GetPatchBaseline getPatchBaseline(array $options = [])
 * @method GetSecretParameter getSecretParameter(array $options = [])
 * @method GetSecretParameters getSecretParameters(array $options = [])
 * @method GetSecretParametersByPath getSecretParametersByPath(array $options = [])
 * @method GetServiceSettings getServiceSettings(array $options = [])
 * @method GetTemplate getTemplate(array $options = [])
 * @method ListActions listActions(array $options = [])
 * @method ListExecutionLogs listExecutionLogs(array $options = [])
 * @method ListExecutionRiskyTasks listExecutionRiskyTasks(array $options = [])
 * @method ListExecutions listExecutions(array $options = [])
 * @method ListInstancePatches listInstancePatches(array $options = [])
 * @method ListInstancePatchStates listInstancePatchStates(array $options = [])
 * @method ListInstanceStateReports listInstanceStateReports(array $options = [])
 * @method ListInventoryEntries listInventoryEntries(array $options = [])
 * @method ListParameters listParameters(array $options = [])
 * @method ListParameterVersions listParameterVersions(array $options = [])
 * @method ListPatchBaselines listPatchBaselines(array $options = [])
 * @method ListResourceExecutionStatus listResourceExecutionStatus(array $options = [])
 * @method ListSecretParameters listSecretParameters(array $options = [])
 * @method ListSecretParameterVersions listSecretParameterVersions(array $options = [])
 * @method ListStateConfigurations listStateConfigurations(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ListTaskExecutions listTaskExecutions(array $options = [])
 * @method ListTemplates listTemplates(array $options = [])
 * @method ListTemplateVersions listTemplateVersions(array $options = [])
 * @method NotifyExecution notifyExecution(array $options = [])
 * @method RegisterDefaultPatchBaseline registerDefaultPatchBaseline(array $options = [])
 * @method SearchInventory searchInventory(array $options = [])
 * @method SetServiceSettings setServiceSettings(array $options = [])
 * @method StartExecution startExecution(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TriggerExecution triggerExecution(array $options = [])
 * @method UntagResources untagResources(array $options = [])
 * @method UpdateExecution updateExecution(array $options = [])
 * @method UpdateInstanceInformation updateInstanceInformation(array $options = [])
 * @method UpdateParameter updateParameter(array $options = [])
 * @method UpdatePatchBaseline updatePatchBaseline(array $options = [])
 * @method UpdateSecretParameter updateSecretParameter(array $options = [])
 * @method UpdateStateConfiguration updateStateConfiguration(array $options = [])
 * @method UpdateTemplate updateTemplate(array $options = [])
 * @method ValidateTemplateContent validateTemplateContent(array $options = [])
 */
class OosApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'oos';

    /** @var string */
    public $version = '2019-06-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 */
class CancelExecution extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConstraints()
 * @method $this withConstraints($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class CreateParameter extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getApprovalRules()
 * @method $this withApprovalRules($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOperationSystem()
 * @method $this withOperationSystem($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreatePatchBaseline extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConstraints()
 * @method $this withConstraints($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKeyId()
 * @method $this withKeyId($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateSecretParameter extends Rpc
{
}

/**
 * @method string getScheduleType()
 * @method $this withScheduleType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTargets()
 * @method $this withTargets($value)
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getScheduleExpression()
 * @method $this withScheduleExpression($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getConfigureMode()
 * @method $this withConfigureMode($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class CreateStateConfiguration extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class CreateTemplate extends Rpc
{
}

/**
 * @method string getExecutionIds()
 * @method $this withExecutionIds($value)
 */
class DeleteExecutions extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteParameter extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeletePatchBaseline extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteSecretParameter extends Rpc
{
}

/**
 * @method string getStateConfigurationIds()
 * @method $this withStateConfigurationIds($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 */
class DeleteStateConfigurations extends Rpc
{
}

/**
 * @method string getAutoDeleteExecutions()
 * @method $this withAutoDeleteExecutions($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class DeleteTemplate extends Rpc
{
}

/**
 * @method string getTemplateNames()
 * @method $this withTemplateNames($value)
 * @method string getAutoDeleteExecutions()
 * @method $this withAutoDeleteExecutions($value)
 */
class DeleteTemplates extends Rpc
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
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class GenerateExecutionPolicy extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 */
class GetExecutionTemplate extends Rpc
{
}

/**
 * @method string getAggregator()
 * @method $this withAggregator($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class GetInventorySchema extends Rpc
{
}

/**
 * @method string getParameterVersion()
 * @method $this withParameterVersion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class GetParameter extends Rpc
{
}

/**
 * @method string getNames()
 * @method $this withNames($value)
 */
class GetParameters extends Rpc
{
}

/**
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class GetParametersByPath extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class GetPatchBaseline extends Rpc
{
}

/**
 * @method string getWithDecryption()
 * @method $this withWithDecryption($value)
 * @method string getParameterVersion()
 * @method $this withParameterVersion($value)
 * @method string getName()
 * @method $this withName($value)
 */
class GetSecretParameter extends Rpc
{
}

/**
 * @method string getWithDecryption()
 * @method $this withWithDecryption($value)
 * @method string getNames()
 * @method $this withNames($value)
 */
class GetSecretParameters extends Rpc
{
}

/**
 * @method string getWithDecryption()
 * @method $this withWithDecryption($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class GetSecretParametersByPath extends Rpc
{
}

class GetServiceSettings extends Rpc
{
}

/**
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class GetTemplate extends Rpc
{
}

/**
 * @method string getOOSActionName()
 * @method $this withOOSActionName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListActions extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getLogType()
 * @method $this withLogType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTaskExecutionId()
 * @method $this withTaskExecutionId($value)
 */
class ListExecutionLogs extends Rpc
{
}

/**
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class ListExecutionRiskyTasks extends Rpc
{
}

/**
 * @method string getExecutedBy()
 * @method $this withExecutedBy($value)
 * @method string getIncludeChildExecution()
 * @method $this withIncludeChildExecution($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getRamRole()
 * @method $this withRamRole($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getEndDateBefore()
 * @method $this withEndDateBefore($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getStartDateAfter()
 * @method $this withStartDateAfter($value)
 * @method string getStartDateBefore()
 * @method $this withStartDateBefore($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getParentExecutionId()
 * @method $this withParentExecutionId($value)
 * @method string getEndDateAfter()
 * @method $this withEndDateAfter($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 * @method string getResourceTemplateName()
 * @method $this withResourceTemplateName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListExecutions extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListInstancePatches extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListInstancePatchStates extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStateConfigurationId()
 * @method $this withStateConfigurationId($value)
 */
class ListInstanceStateReports extends Rpc
{
}

/**
 * @method array getFilter()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class ListInventoryEntries extends Rpc
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
			if(isset($depth1Value['Name'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
			}
			foreach ($depth1Value['Value'] as $i => $iValue) {
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Value.' . ($i + 1)] = $iValue;
			}
			if(isset($depth1Value['Operator'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
			}
		}

		return $this;
    }
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 */
class ListParameters extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 */
class ListParameterVersions extends Rpc
{
}

/**
 * @method string getOperationSystem()
 * @method $this withOperationSystem($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 */
class ListPatchBaselines extends Rpc
{
}

/**
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListResourceExecutionStatus extends Rpc
{
}

/**
 * @method string getRecursive()
 * @method $this withRecursive($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getPath()
 * @method $this withPath($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 */
class ListSecretParameters extends Rpc
{
}

/**
 * @method string getWithDecryption()
 * @method $this withWithDecryption($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 */
class ListSecretParameterVersions extends Rpc
{
}

/**
 * @method string getStateConfigurationIds()
 * @method $this withStateConfigurationIds($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 */
class ListStateConfigurations extends Rpc
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
class ListTagKeys extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class ListTagResources extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class ListTagValues extends Rpc
{
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getIncludeChildTaskExecution()
 * @method $this withIncludeChildTaskExecution($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getParentTaskExecutionId()
 * @method $this withParentTaskExecutionId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getEndDateBefore()
 * @method $this withEndDateBefore($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getStartDateAfter()
 * @method $this withStartDateAfter($value)
 * @method string getStartDateBefore()
 * @method $this withStartDateBefore($value)
 * @method string getEndDateAfter()
 * @method $this withEndDateAfter($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTaskExecutionId()
 * @method $this withTaskExecutionId($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 * @method string getTaskAction()
 * @method $this withTaskAction($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTaskExecutions extends Rpc
{
}

/**
 * @method string getCreatedDateBefore()
 * @method $this withCreatedDateBefore($value)
 * @method string getCreatedBy()
 * @method $this withCreatedBy($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getSortOrder()
 * @method $this withSortOrder($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 * @method string getHasTrigger()
 * @method $this withHasTrigger($value)
 * @method string getCreatedDateAfter()
 * @method $this withCreatedDateAfter($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTemplateFormat()
 * @method $this withTemplateFormat($value)
 * @method string getSortField()
 * @method $this withSortField($value)
 * @method string getCategory()
 * @method $this withCategory($value)
 */
class ListTemplates extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getShareType()
 * @method $this withShareType($value)
 */
class ListTemplateVersions extends Rpc
{
}

/**
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getNotifyType()
 * @method $this withNotifyType($value)
 * @method string getExecutionStatus()
 * @method $this withExecutionStatus($value)
 * @method string getNotifyNote()
 * @method $this withNotifyNote($value)
 * @method string getLoopItem()
 * @method $this withLoopItem($value)
 * @method string getTaskExecutionIds()
 * @method $this withTaskExecutionIds($value)
 * @method string getTaskExecutionId()
 * @method $this withTaskExecutionId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class NotifyExecution extends Rpc
{
}

/**
 * @method string getName()
 * @method $this withName($value)
 */
class RegisterDefaultPatchBaseline extends Rpc
{
}

/**
 * @method array getAggregator()
 * @method array getFilter()
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class SearchInventory extends Rpc
{

    /**
     * @param array $aggregator
     *
     * @return $this
     */
	public function withAggregator(array $aggregator)
	{
	    $this->data['Aggregator'] = $aggregator;
		foreach ($aggregator as $i => $iValue) {
			$this->options['query']['Aggregator.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Operator'])){
				$this->options['query']['Filter.' . ($depth1 + 1) . '.Operator'] = $depth1Value['Operator'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDeliverySlsEnabled()
 * @method $this withDeliverySlsEnabled($value)
 * @method string getDeliveryOssKeyPrefix()
 * @method $this withDeliveryOssKeyPrefix($value)
 * @method string getDeliveryOssEnabled()
 * @method $this withDeliveryOssEnabled($value)
 * @method string getDeliverySlsProjectName()
 * @method $this withDeliverySlsProjectName($value)
 * @method string getDeliveryOssBucketName()
 * @method $this withDeliveryOssBucketName($value)
 */
class SetServiceSettings extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getMode()
 * @method $this withMode($value)
 * @method string getTemplateVersion()
 * @method $this withTemplateVersion($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getLoopMode()
 * @method $this withLoopMode($value)
 * @method string getSafetyCheck()
 * @method $this withSafetyCheck($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTemplateContent()
 * @method $this withTemplateContent($value)
 * @method string getParentExecutionId()
 * @method $this withParentExecutionId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class StartExecution extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class TagResources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 */
class TriggerExecution extends Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTagKeys()
 * @method $this withTagKeys($value)
 * @method string getResourceIds()
 * @method $this withResourceIds($value)
 */
class UntagResources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getExecutionId()
 * @method $this withExecutionId($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 */
class UpdateExecution extends Rpc
{
}

/**
 * @method string getAgentVersion()
 * @method $this withAgentVersion($value)
 * @method string getIpAddress()
 * @method $this withIpAddress($value)
 * @method string getComputerName()
 * @method $this withComputerName($value)
 * @method string getPlatformName()
 * @method $this withPlatformName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAgentName()
 * @method $this withAgentName($value)
 * @method string getPlatformType()
 * @method $this withPlatformType($value)
 * @method string getPlatformVersion()
 * @method $this withPlatformVersion($value)
 */
class UpdateInstanceInformation extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class UpdateParameter extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getApprovalRules()
 * @method $this withApprovalRules($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getName()
 * @method $this withName($value)
 */
class UpdatePatchBaseline extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class UpdateSecretParameter extends Rpc
{
}

/**
 * @method string getScheduleType()
 * @method $this withScheduleType($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTargets()
 * @method $this withTargets($value)
 * @method string getScheduleExpression()
 * @method $this withScheduleExpression($value)
 * @method string getConfigureMode()
 * @method $this withConfigureMode($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getParameters()
 * @method $this withParameters($value)
 * @method string getStateConfigurationId()
 * @method $this withStateConfigurationId($value)
 */
class UpdateStateConfiguration extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getTags()
 * @method $this withTags($value)
 * @method string getTemplateName()
 * @method $this withTemplateName($value)
 * @method string getVersionName()
 * @method $this withVersionName($value)
 */
class UpdateTemplate extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 */
class ValidateTemplateContent extends Rpc
{
}
