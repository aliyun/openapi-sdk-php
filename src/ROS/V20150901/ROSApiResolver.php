<?php

namespace AlibabaCloud\ROS\V20150901;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateChangeSet createChangeSet(array $options = [])
 * @method DescribeChangeSetDetail describeChangeSetDetail(array $options = [])
 * @method DescribeChangeSets describeChangeSets(array $options = [])
 * @method ExecuteChangeSet executeChangeSet(array $options = [])
 * @method DeleteChangeSet deleteChangeSet(array $options = [])
 * @method ContinueCreateStack continueCreateStack(array $options = [])
 * @method CancelUpdateStack cancelUpdateStack(array $options = [])
 * @method GetStackPolicy getStackPolicy(array $options = [])
 * @method SetStackPolicy setStackPolicy(array $options = [])
 * @method UpdateStack updateStack(array $options = [])
 * @method WaitConditions waitConditions(array $options = [])
 * @method InquiryStack inquiryStack(array $options = [])
 * @method PreviewStack previewStack(array $options = [])
 * @method DoActions doActions(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DescribeEvents describeEvents(array $options = [])
 * @method DeleteStack deleteStack(array $options = [])
 * @method CreateStacks createStacks(array $options = [])
 * @method AbandonStack abandonStack(array $options = [])
 * @method DescribeResourceTypes describeResourceTypes(array $options = [])
 * @method DescribeResourceTypeDetail describeResourceTypeDetail(array $options = [])
 * @method DescribeResources describeResources(array $options = [])
 * @method DescribeResourceDetail describeResourceDetail(array $options = [])
 * @method DescribeResourceTypeTemplate describeResourceTypeTemplate(array $options = [])
 * @method DescribeStacks describeStacks(array $options = [])
 * @method DescribeStackDetail describeStackDetail(array $options = [])
 * @method ValidateTemplate validateTemplate(array $options = [])
 * @method DescribeTemplate describeTemplate(array $options = [])
 */
class ROSApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'ROS';

    /** @var string */
    public $version = '2015-09-01';

    /** @var string */
    public $serviceCode = 'ROS';
}

class CreateChangeSet extends Roa
{
    /** @var string */
    public $pathPattern = '/changeSets';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getChangeSetName()
 * @method $this withChangeSetName($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeChangeSetDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets/[ChangeSetName]';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeChangeSets extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets';
}

/**
 * @method string getChangeSetName()
 * @method $this withChangeSetName($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class ExecuteChangeSet extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets/[ChangeSetName]/execute';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getChangeSetName()
 * @method $this withChangeSetName($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DeleteChangeSet extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets/[ChangeSetName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class ContinueCreateStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/continue';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class CancelUpdateStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/cancel';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class GetStackPolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/policy';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class SetStackPolicy extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/policy';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class UpdateStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getResource()
 * @method string getSignature()
 * @method string getStackid()
 * @method string getExpire()
 * @method string getStackname()
 */
class WaitConditions extends Roa
{
    /** @var string */
    public $pathPattern = '/waitcondition';

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResource($value)
    {
        $this->data['Resource'] = $value;
        $this->options['query']['resource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSignature($value)
    {
        $this->data['Signature'] = $value;
        $this->options['query']['signature'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStackid($value)
    {
        $this->data['Stackid'] = $value;
        $this->options['query']['stackid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExpire($value)
    {
        $this->data['Expire'] = $value;
        $this->options['query']['expire'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStackname($value)
    {
        $this->data['Stackname'] = $value;
        $this->options['query']['stackname'] = $value;

        return $this;
    }
}

class InquiryStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/inquiry';

    /** @var string */
    public $method = 'POST';
}

class PreviewStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/preview';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DoActions extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/actions';

    /** @var string */
    public $method = 'POST';
}

class DescribeRegions extends Roa
{
    /** @var string */
    public $pathPattern = '/regions';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getPageSize()
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getResourceName()
 * @method string getResourceStatus()
 * @method string getResourceType()
 * @method string getPageNumber()
 */
class DescribeEvents extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/events';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['query']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceName($value)
    {
        $this->data['ResourceName'] = $value;
        $this->options['query']['ResourceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withResourceStatus($value)
    {
        $this->data['ResourceStatus'] = $value;
        $this->options['query']['ResourceStatus'] = $value;

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
        $this->options['query']['ResourceType'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

        return $this;
    }
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DeleteStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]';

    /** @var string */
    public $method = 'DELETE';
}

class CreateStacks extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class AbandonStack extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/abandon';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getSupportStatus()
 */
class DescribeResourceTypes extends Roa
{
    /** @var string */
    public $pathPattern = '/resource_types';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSupportStatus($value)
    {
        $this->data['SupportStatus'] = $value;
        $this->options['query']['SupportStatus'] = $value;

        return $this;
    }
}

/**
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class DescribeResourceTypeDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/resource_types/[TypeName]';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeResources extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/resources';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class DescribeResourceDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/resources/[ResourceName]';
}

/**
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class DescribeResourceTypeTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/resource_types/[TypeName]/template';
}

/**
 * @method string getStackId()
 * @method string getName()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getStatus()
 */
class DescribeStacks extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStackId($value)
    {
        $this->data['StackId'] = $value;
        $this->options['query']['StackId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['query']['Name'] = $value;

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
        $this->options['query']['PageSize'] = $value;

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
        $this->options['query']['PageNumber'] = $value;

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
        $this->options['query']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeStackDetail extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]';
}

class ValidateTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/validate';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeTemplate extends Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/template';
}
