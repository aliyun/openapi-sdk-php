<?php

namespace AlibabaCloud\Oos\V20190601;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CancelExecution cancelExecution(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteExecutions deleteExecutions(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DeleteTemplates deleteTemplates(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method GenerateExecutionPolicy generateExecutionPolicy(array $options = [])
 * @method GetExecutionTemplate getExecutionTemplate(array $options = [])
 * @method GetTemplate getTemplate(array $options = [])
 * @method ListActions listActions(array $options = [])
 * @method ListExecutionLogs listExecutionLogs(array $options = [])
 * @method ListExecutionRiskyTasks listExecutionRiskyTasks(array $options = [])
 * @method ListExecutions listExecutions(array $options = [])
 * @method ListResourceExecutionStatus listResourceExecutionStatus(array $options = [])
 * @method ListTagKeys listTagKeys(array $options = [])
 * @method ListTagResources listTagResources(array $options = [])
 * @method ListTagValues listTagValues(array $options = [])
 * @method ListTaskExecutions listTaskExecutions(array $options = [])
 * @method ListTemplates listTemplates(array $options = [])
 * @method ListTemplateVersions listTemplateVersions(array $options = [])
 * @method NotifyExecution notifyExecution(array $options = [])
 * @method StartExecution startExecution(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method TriggerExecution triggerExecution(array $options = [])
 * @method UntagResources untagResources(array $options = [])
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
