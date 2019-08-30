<?php

namespace AlibabaCloud\ROS\V20190910;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateStack createStack(array $options = [])
 * @method GetStack getStack(array $options = [])
 * @method DeleteStack deleteStack(array $options = [])
 * @method UpdateStack updateStack(array $options = [])
 * @method ListStacks listStacks(array $options = [])
 * @method PreviewStack previewStack(array $options = [])
 * @method GetTemplateEstimateCost getTemplateEstimateCost(array $options = [])
 * @method CancelUpdateStack cancelUpdateStack(array $options = [])
 * @method ContinueCreateStack continueCreateStack(array $options = [])
 * @method SetStackPolicy setStackPolicy(array $options = [])
 * @method GetStackPolicy getStackPolicy(array $options = [])
 * @method ValidateTemplate validateTemplate(array $options = [])
 * @method GetTemplate getTemplate(array $options = [])
 * @method GetChangeSet getChangeSet(array $options = [])
 * @method ListChangeSets listChangeSets(array $options = [])
 * @method ExecuteChangeSet executeChangeSet(array $options = [])
 * @method DeleteChangeSet deleteChangeSet(array $options = [])
 * @method ListStackEvents listStackEvents(array $options = [])
 * @method ListStackResources listStackResources(array $options = [])
 * @method GetStackResource getStackResource(array $options = [])
 * @method GetResourceTypeTemplate getResourceTypeTemplate(array $options = [])
 * @method GetResourceType getResourceType(array $options = [])
 * @method ListResourceTypes listResourceTypes(array $options = [])
 * @method SignalResource signalResource(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method CreateChangeSet createChangeSet(array $options = [])
 */
class ROSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'ROS';

    /** @var string */
    public $version = '2019-09-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ROS';
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTemplateBody()
 * @method $this withTemplateBody($value)
 * @method string getDisableRollback()
 * @method $this withDisableRollback($value)
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getOrderSource()
 * @method $this withOrderSource($value)
 * @method string getTemplateURL()
 * @method $this withTemplateURL($value)
 * @method string getActivityId()
 * @method $this withActivityId($value)
 * @method array getNotificationURLs()
 * @method string getStackPolicyURL()
 * @method $this withStackPolicyURL($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method array getParameters()
 * @method string getStackPolicyBody()
 * @method $this withStackPolicyBody($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateStack extends Rpc
{

    /**
     * @param array $notificationURLs
     *
     * @return $this
     */
    public function withNotificationURLs(array $notificationURLs)
    {
        $this->data['NotificationURLs'] = $notificationURLs;
        foreach ($notificationURLs as $i => $iValue) {
            $this->options['query']['NotificationURLs.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function withParameters(array $parameters)
    {
        $this->data['Parameters'] = $parameters;
        foreach ($parameters as $depth1 => $depth1Value) {
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterValue'] = $depth1Value['ParameterValue'];
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterKey'] = $depth1Value['ParameterKey'];
        }

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 */
class GetStack extends Rpc
{
}

/**
 * @method string getRetainAllResources()
 * @method $this withRetainAllResources($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 */
class DeleteStack extends Rpc
{
}

/**
 * @method string getStackPolicyDuringUpdateURL()
 * @method $this withStackPolicyDuringUpdateURL($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTemplateBody()
 * @method $this withTemplateBody($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getDisableRollback()
 * @method $this withDisableRollback($value)
 * @method string getEnableRecover()
 * @method $this withEnableRecover($value)
 * @method string getUpdateAllowPolicy()
 * @method $this withUpdateAllowPolicy($value)
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getUsePreviousParameters()
 * @method $this withUsePreviousParameters($value)
 * @method string getTemplateURL()
 * @method $this withTemplateURL($value)
 * @method string getStackPolicyDuringUpdateBody()
 * @method $this withStackPolicyDuringUpdateBody($value)
 * @method string getStackPolicyURL()
 * @method $this withStackPolicyURL($value)
 * @method array getParameters()
 * @method string getStackPolicyBody()
 * @method $this withStackPolicyBody($value)
 */
class UpdateStack extends Rpc
{

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function withParameters(array $parameters)
    {
        $this->data['Parameters'] = $parameters;
        foreach ($parameters as $depth1 => $depth1Value) {
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterValue'] = $depth1Value['ParameterValue'];
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterKey'] = $depth1Value['ParameterKey'];
        }

        return $this;
    }
}

/**
 * @method string getParentStackId()
 * @method $this withParentStackId($value)
 * @method string getShowNestedStack()
 * @method $this withShowNestedStack($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getStackName()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getStatus()
 */
class ListStacks extends Rpc
{

    /**
     * @param array $stackName
     *
     * @return $this
     */
    public function withStackName(array $stackName)
    {
        $this->data['StackName'] = $stackName;
        foreach ($stackName as $i => $iValue) {
            $this->options['query']['StackName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
    public function withStatus(array $status)
    {
        $this->data['Status'] = $status;
        foreach ($status as $i => $iValue) {
            $this->options['query']['Status.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getStackPolicyURL()
 * @method $this withStackPolicyURL($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTemplateBody()
 * @method $this withTemplateBody($value)
 * @method string getDisableRollback()
 * @method $this withDisableRollback($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method array getParameters()
 * @method string getStackPolicyBody()
 * @method $this withStackPolicyBody($value)
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getTemplateURL()
 * @method $this withTemplateURL($value)
 */
class PreviewStack extends Rpc
{

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function withParameters(array $parameters)
    {
        $this->data['Parameters'] = $parameters;
        foreach ($parameters as $depth1 => $depth1Value) {
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterValue'] = $depth1Value['ParameterValue'];
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterKey'] = $depth1Value['ParameterKey'];
        }

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTemplateBody()
 * @method $this withTemplateBody($value)
 * @method array getParameters()
 * @method string getTemplateURL()
 * @method $this withTemplateURL($value)
 */
class GetTemplateEstimateCost extends Rpc
{

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function withParameters(array $parameters)
    {
        $this->data['Parameters'] = $parameters;
        foreach ($parameters as $depth1 => $depth1Value) {
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterValue'] = $depth1Value['ParameterValue'];
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterKey'] = $depth1Value['ParameterKey'];
        }

        return $this;
    }
}

/**
 * @method string getCancelType()
 * @method $this withCancelType($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 */
class CancelUpdateStack extends Rpc
{
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method array getRecreatingResources()
 */
class ContinueCreateStack extends Rpc
{

    /**
     * @param array $recreatingResources
     *
     * @return $this
     */
    public function withRecreatingResources(array $recreatingResources)
    {
        $this->data['RecreatingResources'] = $recreatingResources;
        foreach ($recreatingResources as $i => $iValue) {
            $this->options['query']['RecreatingResources.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getStackPolicyURL()
 * @method $this withStackPolicyURL($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackPolicyBody()
 * @method $this withStackPolicyBody($value)
 */
class SetStackPolicy extends Rpc
{
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 */
class GetStackPolicy extends Rpc
{
}

/**
 * @method string getTemplateBody()
 * @method $this withTemplateBody($value)
 * @method string getTemplateURL()
 * @method $this withTemplateURL($value)
 */
class ValidateTemplate extends Rpc
{
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getChangeSetId()
 * @method $this withChangeSetId($value)
 */
class GetTemplate extends Rpc
{
}

/**
 * @method string getChangeSetId()
 * @method $this withChangeSetId($value)
 * @method string getShowTemplate()
 * @method $this withShowTemplate($value)
 */
class GetChangeSet extends Rpc
{
}

/**
 * @method array getExecutionStatus()
 * @method array getChangeSetName()
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getStatus()
 */
class ListChangeSets extends Rpc
{

    /**
     * @param array $executionStatus
     *
     * @return $this
     */
    public function withExecutionStatus(array $executionStatus)
    {
        $this->data['ExecutionStatus'] = $executionStatus;
        foreach ($executionStatus as $i => $iValue) {
            $this->options['query']['ExecutionStatus.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $changeSetName
     *
     * @return $this
     */
    public function withChangeSetName(array $changeSetName)
    {
        $this->data['ChangeSetName'] = $changeSetName;
        foreach ($changeSetName as $i => $iValue) {
            $this->options['query']['ChangeSetName.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
    public function withStatus(array $status)
    {
        $this->data['Status'] = $status;
        foreach ($status as $i => $iValue) {
            $this->options['query']['Status.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getChangeSetId()
 * @method $this withChangeSetId($value)
 */
class ExecuteChangeSet extends Rpc
{
}

/**
 * @method string getChangeSetId()
 * @method $this withChangeSetId($value)
 */
class DeleteChangeSet extends Rpc
{
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getLogicalResourceId()
 * @method array getResourceType()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method array getStatus()
 */
class ListStackEvents extends Rpc
{

    /**
     * @param array $logicalResourceId
     *
     * @return $this
     */
    public function withLogicalResourceId(array $logicalResourceId)
    {
        $this->data['LogicalResourceId'] = $logicalResourceId;
        foreach ($logicalResourceId as $i => $iValue) {
            $this->options['query']['LogicalResourceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $resourceType
     *
     * @return $this
     */
    public function withResourceType(array $resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        foreach ($resourceType as $i => $iValue) {
            $this->options['query']['ResourceType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $status
     *
     * @return $this
     */
    public function withStatus(array $status)
    {
        $this->data['Status'] = $status;
        foreach ($status as $i => $iValue) {
            $this->options['query']['Status.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 */
class ListStackResources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getLogicalResourceId()
 * @method $this withLogicalResourceId($value)
 * @method string getShowResourceAttributes()
 * @method $this withShowResourceAttributes($value)
 */
class GetStackResource extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class GetResourceTypeTemplate extends Rpc
{
}

/**
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class GetResourceType extends Rpc
{
}

class ListResourceTypes extends Rpc
{
}

/**
 * @method string getData()
 * @method $this withData($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getLogicalResourceId()
 * @method $this withLogicalResourceId($value)
 * @method string getUniqueId()
 * @method $this withUniqueId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SignalResource extends Rpc
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
 * @method string getStackPolicyDuringUpdateURL()
 * @method $this withStackPolicyDuringUpdateURL($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getTemplateBody()
 * @method $this withTemplateBody($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getChangeSetType()
 * @method $this withChangeSetType($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getDisableRollback()
 * @method $this withDisableRollback($value)
 * @method string getUpdateAllowPolicy()
 * @method $this withUpdateAllowPolicy($value)
 * @method string getTimeoutInMinutes()
 * @method $this withTimeoutInMinutes($value)
 * @method string getUsePreviousParameters()
 * @method $this withUsePreviousParameters($value)
 * @method string getTemplateURL()
 * @method $this withTemplateURL($value)
 * @method string getOrderSource()
 * @method $this withOrderSource($value)
 * @method string getActivityId()
 * @method $this withActivityId($value)
 * @method string getStackPolicyDuringUpdateBody()
 * @method $this withStackPolicyDuringUpdateBody($value)
 * @method array getNotificationURLs()
 * @method string getStackPolicyURL()
 * @method $this withStackPolicyURL($value)
 * @method string getChangeSetName()
 * @method $this withChangeSetName($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method array getParameters()
 * @method string getStackPolicyBody()
 * @method $this withStackPolicyBody($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateChangeSet extends Rpc
{

    /**
     * @param array $notificationURLs
     *
     * @return $this
     */
    public function withNotificationURLs(array $notificationURLs)
    {
        $this->data['NotificationURLs'] = $notificationURLs;
        foreach ($notificationURLs as $i => $iValue) {
            $this->options['query']['NotificationURLs.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $parameters
     *
     * @return $this
     */
    public function withParameters(array $parameters)
    {
        $this->data['Parameters'] = $parameters;
        foreach ($parameters as $depth1 => $depth1Value) {
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterValue'] = $depth1Value['ParameterValue'];
            $this->options['query']['Parameters.' . ($depth1 + 1) . '.ParameterKey'] = $depth1Value['ParameterKey'];
        }

        return $this;
    }
}
