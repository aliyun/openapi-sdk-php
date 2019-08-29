<?php

namespace AlibabaCloud\Fnf\V20190315;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ReportTaskSucceeded reportTaskSucceeded(array $options = [])
 * @method ReportTaskFailed reportTaskFailed(array $options = [])
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
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'fnf';
}

/**
 * @method string getOutput()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getTaskToken()
 * @method $this withTaskToken($value)
 */
class ReportTaskSucceeded extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOutput($value)
    {
        $this->data['Output'] = $value;
        $this->options['form_params']['Output'] = $value;

        return $this;
    }
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getCause()
 * @method string getTaskToken()
 * @method $this withTaskToken($value)
 * @method string getError()
 */
class ReportTaskFailed extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCause($value)
    {
        $this->data['Cause'] = $value;
        $this->options['form_params']['Cause'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withError($value)
    {
        $this->data['Error'] = $value;
        $this->options['form_params']['Error'] = $value;

        return $this;
    }
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
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getCause()
 * @method string getFlowName()
 * @method string getError()
 */
class StopExecution extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutionName($value)
    {
        $this->data['ExecutionName'] = $value;
        $this->options['form_params']['ExecutionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCause($value)
    {
        $this->data['Cause'] = $value;
        $this->options['form_params']['Cause'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withError($value)
    {
        $this->data['Error'] = $value;
        $this->options['form_params']['Error'] = $value;

        return $this;
    }
}

/**
 * @method string getInput()
 * @method string getExecutionName()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 */
class StartExecution extends Rpc
{

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutionName($value)
    {
        $this->data['ExecutionName'] = $value;
        $this->options['form_params']['ExecutionName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeFlow extends Rpc
{

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteFlow extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
