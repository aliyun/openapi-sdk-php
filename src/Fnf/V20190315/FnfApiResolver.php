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
 * @method StartSyncExecution startSyncExecution(array $options = [])
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
    public $method = 'POST';

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
 * @method string getExecutionMode()
 */
class CreateFlow extends Rpc
{

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecutionMode($value)
    {
        $this->data['ExecutionMode'] = $value;
        $this->options['form_params']['ExecutionMode'] = $value;

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

    /** @var string */
    public $method = 'GET';
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

    /** @var string */
    public $method = 'GET';
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
 * @method string getScheduleName()
 * @method $this withScheduleName($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 * @method $this withFlowName($value)
 */
class DescribeSchedule extends Rpc
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
class ListSchedules extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getInput()
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getFlowName()
 */
class StartSyncExecution extends Rpc
{

    /** @var string */
    public $scheme = 'https';

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
