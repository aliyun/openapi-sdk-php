<?php

namespace AlibabaCloud\Fnf\V20190315;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateFlow createFlow(array $options = [])
 * @method CreateSchedule createSchedule(array $options = [])
 * @method DeleteFlow deleteFlow(array $options = [])
 * @method DeleteSchedule deleteSchedule(array $options = [])
 * @method DescribeExecution describeExecution(array $options = [])
 * @method DescribeFlow describeFlow(array $options = [])
 * @method DescribeSchedule describeSchedule(array $options = [])
 * @method GetExecutionHistory getExecutionHistory(array $options = [])
 * @method ListExecutions listExecutions(array $options = [])
 * @method ListFlows listFlows(array $options = [])
 * @method ListSchedules listSchedules(array $options = [])
 * @method ReportTaskFailed reportTaskFailed(array $options = [])
 * @method ReportTaskSucceeded reportTaskSucceeded(array $options = [])
 * @method StartExecution startExecution(array $options = [])
 * @method StopExecution stopExecution(array $options = [])
 * @method UpdateFlow updateFlow(array $options = [])
 * @method UpdateSchedule updateSchedule(array $options = [])
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
 * @method string getDescription()
 * @method string getType()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getRoleArn()
 * @method string getName()
 * @method string getDefinition()
 * @method string getExternalStorageLocation()
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
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

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
    public function withExternalStorageLocation($value)
    {
        $this->data['ExternalStorageLocation'] = $value;
        $this->options['form_params']['ExternalStorageLocation'] = $value;

        return $this;
    }
}

/**
 * @method string getScheduleName()
 * @method string getCronExpression()
 * @method string getPayload()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getEnable()
 * @method string getDescription()
 * @method string getFlowName()
 */
class CreateSchedule extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduleName($value)
    {
        $this->data['ScheduleName'] = $value;
        $this->options['form_params']['ScheduleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCronExpression($value)
    {
        $this->data['CronExpression'] = $value;
        $this->options['form_params']['CronExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayload($value)
    {
        $this->data['Payload'] = $value;
        $this->options['form_params']['Payload'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnable($value)
    {
        $this->data['Enable'] = $value;
        $this->options['form_params']['Enable'] = $value;

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
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }
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
 * @method string getScheduleName()
 * @method $this withScheduleName($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class DeleteSchedule extends Rpc
{
}

/**
 * @method string getExecutionName()
 * @method $this withExecutionName($value)
 * @method string getWaitTimeSeconds()
 * @method $this withWaitTimeSeconds($value)
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
class DescribeFlow extends Rpc
{
}

/**
 * @method string getScheduleName()
 * @method $this withScheduleName($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class DescribeSchedule extends Rpc
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
 * @method string getStartedTimeBegin()
 * @method $this withStartedTimeBegin($value)
 * @method string getExecutionNamePrefix()
 * @method $this withExecutionNamePrefix($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 * @method string getStartedTimeEnd()
 * @method $this withStartedTimeEnd($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListExecutions extends Rpc
{
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
class ListSchedules extends Rpc
{
}

/**
 * @method string getCause()
 * @method string getError()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getTaskToken()
 * @method $this withTaskToken($value)
 */
class ReportTaskFailed extends Rpc
{

    /** @var string */
    public $method = 'POST';

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
 * @method string getOutput()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getTaskToken()
 * @method $this withTaskToken($value)
 */
class ReportTaskSucceeded extends Rpc
{

    /** @var string */
    public $method = 'POST';

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
 * @method string getCallbackFnFTaskToken()
 * @method string getExecutionName()
 * @method string getInput()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
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
    public function withCallbackFnFTaskToken($value)
    {
        $this->data['CallbackFnFTaskToken'] = $value;
        $this->options['form_params']['CallbackFnFTaskToken'] = $value;

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
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }
}

/**
 * @method string getExecutionName()
 * @method string getCause()
 * @method string getError()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 */
class StopExecution extends Rpc
{

    /** @var string */
    public $method = 'POST';

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
    public function withError($value)
    {
        $this->data['Error'] = $value;
        $this->options['form_params']['Error'] = $value;

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
 * @method string getDescription()
 * @method string getType()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getRoleArn()
 * @method string getName()
 * @method string getDefinition()
 * @method string getExternalStorageLocation()
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
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

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
    public function withExternalStorageLocation($value)
    {
        $this->data['ExternalStorageLocation'] = $value;
        $this->options['form_params']['ExternalStorageLocation'] = $value;

        return $this;
    }
}

/**
 * @method string getScheduleName()
 * @method string getCronExpression()
 * @method string getPayload()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getEnable()
 * @method string getDescription()
 * @method string getFlowName()
 */
class UpdateSchedule extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withScheduleName($value)
    {
        $this->data['ScheduleName'] = $value;
        $this->options['form_params']['ScheduleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCronExpression($value)
    {
        $this->data['CronExpression'] = $value;
        $this->options['form_params']['CronExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayload($value)
    {
        $this->data['Payload'] = $value;
        $this->options['form_params']['Payload'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnable($value)
    {
        $this->data['Enable'] = $value;
        $this->options['form_params']['Enable'] = $value;

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
    public function withFlowName($value)
    {
        $this->data['FlowName'] = $value;
        $this->options['form_params']['FlowName'] = $value;

        return $this;
    }
}
