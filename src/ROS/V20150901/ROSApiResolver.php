<?php

namespace AlibabaCloud\ROS\V20150901;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Roa;

/**
 * Resolve Api based on the method name.
 *
 * @method DeleteChangeSet deleteChangeSet(array $options = [])
 * @method ExecuteChangeSet executeChangeSet(array $options = [])
 * @method DescribeChangeSets describeChangeSets(array $options = [])
 * @method DescribeChangeSetDetail describeChangeSetDetail(array $options = [])
 * @method CreateChangeSet createChangeSet(array $options = [])
 * @method CancelUpdateStack cancelUpdateStack(array $options = [])
 * @method ContinueCreateStack continueCreateStack(array $options = [])
 * @method SetStackPolicy setStackPolicy(array $options = [])
 * @method GetStackPolicy getStackPolicy(array $options = [])
 * @method UpdateStack updateStack(array $options = [])
 * @method WaitConditions waitConditions(array $options = [])
 * @method InquiryStack inquiryStack(array $options = [])
 * @method PreviewStack previewStack(array $options = [])
 * @method DoActions doActions(array $options = [])
 * @method DescribeTemplate describeTemplate(array $options = [])
 * @method ValidateTemplate validateTemplate(array $options = [])
 * @method DescribeStackDetail describeStackDetail(array $options = [])
 * @method DescribeStacks describeStacks(array $options = [])
 * @method DescribeResourceTypeTemplate describeResourceTypeTemplate(array $options = [])
 * @method DescribeResourceDetail describeResourceDetail(array $options = [])
 * @method DescribeResources describeResources(array $options = [])
 * @method DescribeResourceTypeDetail describeResourceTypeDetail(array $options = [])
 * @method DescribeResourceTypes describeResourceTypes(array $options = [])
 * @method AbandonStack abandonStack(array $options = [])
 * @method CreateStacks createStacks(array $options = [])
 * @method DeleteStack deleteStack(array $options = [])
 * @method DescribeEvents describeEvents(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 */
class ROSApiResolver
{
    use ApiResolverTrait;
}

class V20150901Roa extends Roa
{
    /** @var string */
    public $product = 'ROS';

    /** @var string */
    public $version = '2015-09-01';
}

/**
 * @method string getChangeSetName()
 * @method $this withChangeSetName($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DeleteChangeSet extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets/[ChangeSetName]';

    /** @var string */
    public $method = 'DELETE';
}

/**
 * @method string getChangeSetName()
 * @method $this withChangeSetName($value)
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class ExecuteChangeSet extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets/[ChangeSetName]/execute';

    /** @var string */
    public $method = 'PUT';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeChangeSets extends V20150901Roa
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
class DescribeChangeSetDetail extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/changeSets/[ChangeSetName]';
}

class CreateChangeSet extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/changeSets';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class CancelUpdateStack extends V20150901Roa
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
class ContinueCreateStack extends V20150901Roa
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
class SetStackPolicy extends V20150901Roa
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
class GetStackPolicy extends V20150901Roa
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
class UpdateStack extends V20150901Roa
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
class WaitConditions extends V20150901Roa
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

class InquiryStack extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/inquiry';

    /** @var string */
    public $method = 'POST';
}

class PreviewStack extends V20150901Roa
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
class DoActions extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/actions';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeTemplate extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/template';
}

class ValidateTemplate extends V20150901Roa
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
class DescribeStackDetail extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]';
}

/**
 * @method string getStackId()
 * @method string getName()
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getStatus()
 */
class DescribeStacks extends V20150901Roa
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
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class DescribeResourceTypeTemplate extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/resource_types/[TypeName]/template';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 * @method string getResourceName()
 * @method $this withResourceName($value)
 */
class DescribeResourceDetail extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/resources/[ResourceName]';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeResources extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/resources';
}

/**
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class DescribeResourceTypeDetail extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/resource_types/[TypeName]';
}

/**
 * @method string getSupportStatus()
 */
class DescribeResourceTypes extends V20150901Roa
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
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class AbandonStack extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]/abandon';

    /** @var string */
    public $method = 'DELETE';
}

class CreateStacks extends V20150901Roa
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
class DeleteStack extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/stacks/[StackName]/[StackId]';

    /** @var string */
    public $method = 'DELETE';
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
class DescribeEvents extends V20150901Roa
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

class DescribeRegions extends V20150901Roa
{
    /** @var string */
    public $pathPattern = '/regions';
}
