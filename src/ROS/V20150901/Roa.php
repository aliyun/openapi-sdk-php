<?php

namespace AlibabaCloud\ROS\V20150901;

use AlibabaCloud\Roa;

class V20150901Roa extends Roa
{
    /**
     * @var string
     */
    public $product = 'ROS';

    /**
     * @var string
     */
    public $version = '2015-09-01';

    /**
     * @var string
     */
    public $method = 'PUT';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class CancelUpdateStack extends V20150901Roa
{
    public $pathPattern = '/stacks/[StackName]/[StackId]/cancel';

}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class ContinueCreateStack extends V20150901Roa
{
    public $pathPattern = '/stacks/[StackName]/[StackId]/continue';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]/policy';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]/policy';

    public $method = 'GET';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class UpdateStack extends V20150901Roa
{
    public $pathPattern = '/stacks/[StackName]/[StackId]';

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
    public $pathPattern = '/waitcondition';

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
    public $pathPattern = '/stacks/inquiry';

    public $method = 'POST';
}

class PreviewStack extends V20150901Roa
{
    public $pathPattern = '/stacks/preview';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]/actions';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]/template';

    public $method = 'GET';
}

class ValidateTemplate extends V20150901Roa
{
    public $pathPattern = '/validate';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]';

    public $method = 'GET';
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
    public $pathPattern = '/stacks';

    public $method = 'GET';

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
    public $pathPattern = '/resource_types/[TypeName]/template';

    public $method = 'GET';
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
    public $pathPattern = '/stacks/[StackName]/[StackId]/resources/[ResourceName]';

    public $method = 'GET';
}

/**
 * @method string getStackId()
 * @method $this withStackId($value)
 * @method string getStackName()
 * @method $this withStackName($value)
 */
class DescribeResources extends V20150901Roa
{
    public $pathPattern = '/stacks/[StackName]/[StackId]/resources';

    public $method = 'GET';
}

/**
 * @method string getTypeName()
 * @method $this withTypeName($value)
 */
class DescribeResourceTypeDetail extends V20150901Roa
{
    public $pathPattern = '/resource_types/[TypeName]';

    public $method = 'GET';
}

/**
 * @method string getSupportStatus()
 */
class DescribeResourceTypes extends V20150901Roa
{
    public $pathPattern = '/resource_types';

    public $method = 'GET';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]/abandon';

    public $method = 'DELETE';
}

class CreateStacks extends V20150901Roa
{
    public $pathPattern = '/stacks';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]';

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
    public $pathPattern = '/stacks/[StackName]/[StackId]/events';

    public $method = 'GET';

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
    public $pathPattern = '/regions';

    public $method = 'GET';
}
