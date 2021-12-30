<?php

namespace AlibabaCloud\Schedulerx2\V20190430;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchDeleteJobs batchDeleteJobs(array $options = [])
 * @method BatchDisableJobs batchDisableJobs(array $options = [])
 * @method BatchEnableJobs batchEnableJobs(array $options = [])
 * @method CreateAppGroup createAppGroup(array $options = [])
 * @method CreateJob createJob(array $options = [])
 * @method DeleteJob deleteJob(array $options = [])
 * @method DeleteWorkflow deleteWorkflow(array $options = [])
 * @method DescribeRegions describeRegions(array $options = [])
 * @method DesignateWorkers designateWorkers(array $options = [])
 * @method DisableJob disableJob(array $options = [])
 * @method DisableWorkflow disableWorkflow(array $options = [])
 * @method EnableJob enableJob(array $options = [])
 * @method EnableWorkflow enableWorkflow(array $options = [])
 * @method ExecuteJob executeJob(array $options = [])
 * @method ExecuteWorkflow executeWorkflow(array $options = [])
 * @method GetJobInfo getJobInfo(array $options = [])
 * @method GetJobInstance getJobInstance(array $options = [])
 * @method GetJobInstanceList getJobInstanceList(array $options = [])
 * @method GetWorkerList getWorkerList(array $options = [])
 * @method GetWorkFlow getWorkFlow(array $options = [])
 * @method GrantPermission grantPermission(array $options = [])
 * @method ListGroups listGroups(array $options = [])
 * @method ListJobs listJobs(array $options = [])
 * @method ListNamespaces listNamespaces(array $options = [])
 * @method RevokePermission revokePermission(array $options = [])
 * @method StopInstance stopInstance(array $options = [])
 * @method UpdateJob updateJob(array $options = [])
 */
class Schedulerx2ApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'schedulerx2';

    /** @var string */
    public $version = '2019-04-30';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method array getJobIdList()
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class BatchDeleteJobs extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method array getJobIdList()
 */
class BatchDisableJobs extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method array getJobIdList()
 */
class BatchEnableJobs extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param array $jobIdList
     *
     * @return $this
     */
	public function withJobIdList(array $jobIdList)
	{
	    $this->data['JobIdList'] = $jobIdList;
		foreach ($jobIdList as $i => $iValue) {
			$this->options['form_params']['JobIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMaxJobs()
 * @method $this withMaxJobs($value)
 * @method string getNamespaceName()
 * @method $this withNamespaceName($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getMetricsThresholdJson()
 * @method $this withMetricsThresholdJson($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getAlarmJson()
 * @method $this withAlarmJson($value)
 */
class CreateAppGroup extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getNamespaceSource()
 * @method string getDescription()
 * @method string getAttemptInterval()
 * @method string getContent()
 * @method string getTimeout()
 * @method string getTimeoutKillEnable()
 * @method string getPageSize()
 * @method string getConsumerSize()
 * @method string getJarUrl()
 * @method string getCalendar()
 * @method string getFailEnable()
 * @method string getSendChannel()
 * @method string getDataOffset()
 * @method string getGroupId()
 * @method string getTaskMaxAttempt()
 * @method string getMaxAttempt()
 * @method string getDispatcherSize()
 * @method string getJobType()
 * @method string getTaskAttemptInterval()
 * @method string getExecuteMode()
 * @method string getQueueSize()
 * @method string getTimeExpression()
 * @method string getClassName()
 * @method string getTimeoutEnable()
 * @method array getContactInfo()
 * @method string getName()
 * @method string getNamespace()
 * @method string getMaxConcurrency()
 * @method string getTimeType()
 * @method string getParameters()
 */
class CreateJob extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

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
    public function withAttemptInterval($value)
    {
        $this->data['AttemptInterval'] = $value;
        $this->options['form_params']['AttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutKillEnable($value)
    {
        $this->data['TimeoutKillEnable'] = $value;
        $this->options['form_params']['TimeoutKillEnable'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerSize($value)
    {
        $this->data['ConsumerSize'] = $value;
        $this->options['form_params']['ConsumerSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarUrl($value)
    {
        $this->data['JarUrl'] = $value;
        $this->options['form_params']['JarUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailEnable($value)
    {
        $this->data['FailEnable'] = $value;
        $this->options['form_params']['FailEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendChannel($value)
    {
        $this->data['SendChannel'] = $value;
        $this->options['form_params']['SendChannel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataOffset($value)
    {
        $this->data['DataOffset'] = $value;
        $this->options['form_params']['DataOffset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskMaxAttempt($value)
    {
        $this->data['TaskMaxAttempt'] = $value;
        $this->options['form_params']['TaskMaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAttempt($value)
    {
        $this->data['MaxAttempt'] = $value;
        $this->options['form_params']['MaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDispatcherSize($value)
    {
        $this->data['DispatcherSize'] = $value;
        $this->options['form_params']['DispatcherSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobType($value)
    {
        $this->data['JobType'] = $value;
        $this->options['form_params']['JobType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskAttemptInterval($value)
    {
        $this->data['TaskAttemptInterval'] = $value;
        $this->options['form_params']['TaskAttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteMode($value)
    {
        $this->data['ExecuteMode'] = $value;
        $this->options['form_params']['ExecuteMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueSize($value)
    {
        $this->data['QueueSize'] = $value;
        $this->options['form_params']['QueueSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutEnable($value)
    {
        $this->data['TimeoutEnable'] = $value;
        $this->options['form_params']['TimeoutEnable'] = $value;

        return $this;
    }

    /**
     * @param array $contactInfo
     *
     * @return $this
     */
	public function withContactInfo(array $contactInfo)
	{
	    $this->data['ContactInfo'] = $contactInfo;
		foreach ($contactInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['UserPhone'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserPhone'] = $depth1Value['UserPhone'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

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
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DeleteJob extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class DeleteWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

class DescribeRegions extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTransferable()
 * @method $this withTransferable($value)
 * @method string getLabels()
 * @method $this withLabels($value)
 * @method string getDesignateType()
 * @method $this withDesignateType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkers()
 * @method $this withWorkers($value)
 */
class DesignateWorkers extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class DisableJob extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class DisableWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class EnableJob extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class EnableWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getCheckJobStatus()
 * @method $this withCheckJobStatus($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getDesignateType()
 * @method $this withDesignateType($value)
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorker()
 * @method $this withWorker($value)
 * @method string getInstanceParameters()
 * @method $this withInstanceParameters($value)
 */
class ExecuteJob extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 * @method string getInstanceParameters()
 * @method $this withInstanceParameters($value)
 */
class ExecuteWorkflow extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetJobInfo extends Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobInstanceId()
 * @method $this withJobInstanceId($value)
 */
class GetJobInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetJobInstanceList extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class GetWorkerList extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class GetWorkFlow extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getGrantOption()
 * @method $this withGrantOption($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class GrantPermission extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class ListGroups extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getJobName()
 * @method $this withJobName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListJobs extends Rpc
{
}

class ListNamespaces extends Rpc
{
}

/**
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class RevokePermission extends Rpc
{

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getNamespaceSource()
 * @method $this withNamespaceSource($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getNamespace()
 * @method $this withNamespace($value)
 */
class StopInstance extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getNamespaceSource()
 * @method string getDescription()
 * @method string getAttemptInterval()
 * @method string getContent()
 * @method string getTimeout()
 * @method string getTimeoutKillEnable()
 * @method string getJobId()
 * @method string getPageSize()
 * @method string getConsumerSize()
 * @method string getJarUrl()
 * @method string getCalendar()
 * @method string getFailEnable()
 * @method string getSendChannel()
 * @method string getDataOffset()
 * @method string getGroupId()
 * @method string getTaskMaxAttempt()
 * @method string getMaxAttempt()
 * @method string getDispatcherSize()
 * @method string getTaskAttemptInterval()
 * @method string getExecuteMode()
 * @method string getQueueSize()
 * @method string getTimeExpression()
 * @method string getClassName()
 * @method string getTimeoutEnable()
 * @method array getContactInfo()
 * @method string getName()
 * @method string getNamespace()
 * @method string getMaxConcurrency()
 * @method string getTimeType()
 * @method string getParameters()
 */
class UpdateJob extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamespaceSource($value)
    {
        $this->data['NamespaceSource'] = $value;
        $this->options['form_params']['NamespaceSource'] = $value;

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
    public function withAttemptInterval($value)
    {
        $this->data['AttemptInterval'] = $value;
        $this->options['form_params']['AttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContent($value)
    {
        $this->data['Content'] = $value;
        $this->options['form_params']['Content'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeout($value)
    {
        $this->data['Timeout'] = $value;
        $this->options['form_params']['Timeout'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutKillEnable($value)
    {
        $this->data['TimeoutKillEnable'] = $value;
        $this->options['form_params']['TimeoutKillEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJobId($value)
    {
        $this->data['JobId'] = $value;
        $this->options['form_params']['JobId'] = $value;

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
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConsumerSize($value)
    {
        $this->data['ConsumerSize'] = $value;
        $this->options['form_params']['ConsumerSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJarUrl($value)
    {
        $this->data['JarUrl'] = $value;
        $this->options['form_params']['JarUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCalendar($value)
    {
        $this->data['Calendar'] = $value;
        $this->options['form_params']['Calendar'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFailEnable($value)
    {
        $this->data['FailEnable'] = $value;
        $this->options['form_params']['FailEnable'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSendChannel($value)
    {
        $this->data['SendChannel'] = $value;
        $this->options['form_params']['SendChannel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataOffset($value)
    {
        $this->data['DataOffset'] = $value;
        $this->options['form_params']['DataOffset'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskMaxAttempt($value)
    {
        $this->data['TaskMaxAttempt'] = $value;
        $this->options['form_params']['TaskMaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxAttempt($value)
    {
        $this->data['MaxAttempt'] = $value;
        $this->options['form_params']['MaxAttempt'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDispatcherSize($value)
    {
        $this->data['DispatcherSize'] = $value;
        $this->options['form_params']['DispatcherSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskAttemptInterval($value)
    {
        $this->data['TaskAttemptInterval'] = $value;
        $this->options['form_params']['TaskAttemptInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExecuteMode($value)
    {
        $this->data['ExecuteMode'] = $value;
        $this->options['form_params']['ExecuteMode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueSize($value)
    {
        $this->data['QueueSize'] = $value;
        $this->options['form_params']['QueueSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeExpression($value)
    {
        $this->data['TimeExpression'] = $value;
        $this->options['form_params']['TimeExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClassName($value)
    {
        $this->data['ClassName'] = $value;
        $this->options['form_params']['ClassName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeoutEnable($value)
    {
        $this->data['TimeoutEnable'] = $value;
        $this->options['form_params']['TimeoutEnable'] = $value;

        return $this;
    }

    /**
     * @param array $contactInfo
     *
     * @return $this
     */
	public function withContactInfo(array $contactInfo)
	{
	    $this->data['ContactInfo'] = $contactInfo;
		foreach ($contactInfo as $depth1 => $depth1Value) {
			if(isset($depth1Value['UserPhone'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserPhone'] = $depth1Value['UserPhone'];
			}
			if(isset($depth1Value['UserName'])){
				$this->options['form_params']['ContactInfo.' . ($depth1 + 1) . '.UserName'] = $depth1Value['UserName'];
			}
		}

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
    public function withNamespace($value)
    {
        $this->data['Namespace'] = $value;
        $this->options['form_params']['Namespace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxConcurrency($value)
    {
        $this->data['MaxConcurrency'] = $value;
        $this->options['form_params']['MaxConcurrency'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeType($value)
    {
        $this->data['TimeType'] = $value;
        $this->options['form_params']['TimeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParameters($value)
    {
        $this->data['Parameters'] = $value;
        $this->options['form_params']['Parameters'] = $value;

        return $this;
    }
}
