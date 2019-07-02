<?php

namespace AlibabaCloud\Fnf\V20190315;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method UpdateFlow updateFlow(array $options = [])
 * @method StopExecution stopExecution(array $options = [])
 * @method StartExecution startExecution(array $options = [])
 * @method ListFlows listFlows(array $options = [])
 * @method ListExecutions listExecutions(array $options = [])
 * @method GetExecutionHistory getExecutionHistory(array $options = [])
 * @method DescribeFlow describeFlow(array $options = [])
 * @method DescribeExecution describeExecution(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method CreateFlow createFlow(array $options = [])
 */
class FnfApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'fnf';

    /** @var string */
    public $version = '2019-03-15';

    /** @var string */
    public $serviceCode = 'fnf';
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getRoleArn()
 * @method string getName()
 * @method string getDescription()
 * @method string getDefinition()
 * @method string getType()
 */
class UpdateFlow extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleArn($value)
    {
        $this->data['RoleArn'] = $value;
        $this->options['form_params']['RoleArn'] = $value;

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
        $this->options['form_params']['Name'] = $value;

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
    public function withDefinition($value)
    {
        $this->data['Definition'] = $value;
        $this->options['form_params']['Definition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }
}

/**
 * @method string getExecutionName()
 * @method $this withExecutionName($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getCause()
 * @method $this withCause($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getError()
 * @method $this withError($value)
 */
class StopExecution extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getInput()
 * @method string getExecutionName()
 * @method $this withExecutionName($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class StartExecution extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInput($value)
    {
        $this->data['Input'] = $value;
        $this->options['form_params']['Input'] = $value;

        return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 */
class ListFlows extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class ListExecutions extends Rpc
{
}

/**
 * @method string getExecutionName()
 * @method $this withExecutionName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class GetExecutionHistory extends Rpc
{
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeFlow extends Rpc
{
}

/**
 * @method string getExecutionName()
 * @method $this withExecutionName($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class DescribeExecution extends Rpc
{
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteFlow extends Rpc
{
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getRoleArn()
 * @method string getName()
 * @method string getDescription()
 * @method string getDefinition()
 * @method string getType()
 */
class CreateFlow extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRoleArn($value)
    {
        $this->data['RoleArn'] = $value;
        $this->options['form_params']['RoleArn'] = $value;

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
        $this->options['form_params']['Name'] = $value;

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
    public function withDefinition($value)
    {
        $this->data['Definition'] = $value;
        $this->options['form_params']['Definition'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }
}
