<?php

namespace AlibabaCloud\Idrsservice\V20200630;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckServiceLinkedRole checkServiceLinkedRole(array $options = [])
 * @method CreateApp createApp(array $options = [])
 * @method CreateDepartment createDepartment(array $options = [])
 * @method CreateLive createLive(array $options = [])
 * @method CreateLiveDetection createLiveDetection(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateStatisticsRecord createStatisticsRecord(array $options = [])
 * @method CreateStatisticsTask createStatisticsTask(array $options = [])
 * @method CreateTaskGroup createTaskGroup(array $options = [])
 * @method CreateUserDepartments createUserDepartments(array $options = [])
 * @method DeleteApp deleteApp(array $options = [])
 * @method DeleteDepartment deleteDepartment(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteUser deleteUser(array $options = [])
 * @method DeleteUserDepartments deleteUserDepartments(array $options = [])
 * @method ExitLive exitLive(array $options = [])
 * @method GetApp getApp(array $options = [])
 * @method GetDepartment getDepartment(array $options = [])
 * @method GetDetectEvaluation getDetectEvaluation(array $options = [])
 * @method GetDetection getDetection(array $options = [])
 * @method GetModelSignedUrl getModelSignedUrl(array $options = [])
 * @method GetPreSignedUrl getPreSignedUrl(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method GetServiceConfiguration getServiceConfiguration(array $options = [])
 * @method GetSignedUrl getSignedUrl(array $options = [])
 * @method GetSlrConfiguration getSlrConfiguration(array $options = [])
 * @method GetStatistics getStatistics(array $options = [])
 * @method GetTask getTask(array $options = [])
 * @method GetTaskGroup getTaskGroup(array $options = [])
 * @method GetUser getUser(array $options = [])
 * @method InitializeServiceLinkedRole initializeServiceLinkedRole(array $options = [])
 * @method JoinLive joinLive(array $options = [])
 * @method ListApps listApps(array $options = [])
 * @method ListDepartments listDepartments(array $options = [])
 * @method ListDetections listDetections(array $options = [])
 * @method ListFiles listFiles(array $options = [])
 * @method ListLives listLives(array $options = [])
 * @method ListRoles listRoles(array $options = [])
 * @method ListRules listRules(array $options = [])
 * @method ListStatisticsTask listStatisticsTask(array $options = [])
 * @method ListTaskGroups listTaskGroups(array $options = [])
 * @method ListTaskItems listTaskItems(array $options = [])
 * @method ListTasks listTasks(array $options = [])
 * @method ListUsers listUsers(array $options = [])
 * @method UpdateApp updateApp(array $options = [])
 * @method UpdateDepartment updateDepartment(array $options = [])
 * @method UpdateLive updateLive(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 * @method UpdateServiceConfiguration updateServiceConfiguration(array $options = [])
 * @method UpdateSlrConfiguration updateSlrConfiguration(array $options = [])
 * @method UpdateUser updateUser(array $options = [])
 */
class IdrsserviceApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'idrsservice';

    /** @var string */
    public $version = '2020-06-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'idrsservice';
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class CheckServiceLinkedRole extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateApp extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateDepartment extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getRtcCode()
 * @method $this withRtcCode($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateLive extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getLiveId()
 * @method $this withLiveId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getMetaUrl()
 * @method $this withMetaUrl($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class CreateLiveDetection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getBeginAt()
 * @method $this withBeginAt($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEndAt()
 * @method $this withEndAt($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateStatisticsRecord extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method array getDepartmentId()
 * @method string getDateTo()
 * @method $this withDateTo($value)
 * @method string getDateFrom()
 * @method $this withDateFrom($value)
 */
class CreateStatisticsTask extends Rpc
{

    /**
     * @param array $departmentId
     *
     * @return $this
     */
	public function withDepartmentId(array $departmentId)
	{
	    $this->data['DepartmentId'] = $departmentId;
		foreach ($departmentId as $i => $iValue) {
			$this->options['query']['DepartmentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getExpireAt()
 * @method $this withExpireAt($value)
 * @method array getDay()
 * @method string getRunnableTimeTo()
 * @method $this withRunnableTimeTo($value)
 * @method string getTriggerPeriod()
 * @method $this withTriggerPeriod($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 * @method array getVideoUrl()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRunnableTimeFrom()
 * @method $this withRunnableTimeFrom($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class CreateTaskGroup extends Rpc
{

    /**
     * @param array $day
     *
     * @return $this
     */
	public function withDay(array $day)
	{
	    $this->data['Day'] = $day;
		foreach ($day as $i => $iValue) {
			$this->options['query']['Day.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $videoUrl
     *
     * @return $this
     */
	public function withVideoUrl(array $videoUrl)
	{
	    $this->data['VideoUrl'] = $videoUrl;
		foreach ($videoUrl as $i => $iValue) {
			$this->options['query']['VideoUrl.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDepartmentId()
 * @method array getUserId()
 */
class CreateUserDepartments extends Rpc
{

    /**
     * @param array $departmentId
     *
     * @return $this
     */
	public function withDepartmentId(array $departmentId)
	{
	    $this->data['DepartmentId'] = $departmentId;
		foreach ($departmentId as $i => $iValue) {
			$this->options['query']['DepartmentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $userId
     *
     * @return $this
     */
	public function withUserId(array $userId)
	{
	    $this->data['UserId'] = $userId;
		foreach ($userId as $i => $iValue) {
			$this->options['query']['UserId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteApp extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteDepartment extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteRule extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class DeleteUser extends Rpc
{
}

/**
 * @method array getDepartmentId()
 * @method array getUserId()
 */
class DeleteUserDepartments extends Rpc
{

    /**
     * @param array $departmentId
     *
     * @return $this
     */
	public function withDepartmentId(array $departmentId)
	{
	    $this->data['DepartmentId'] = $departmentId;
		foreach ($departmentId as $i => $iValue) {
			$this->options['query']['DepartmentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $userId
     *
     * @return $this
     */
	public function withUserId(array $userId)
	{
	    $this->data['UserId'] = $userId;
		foreach ($userId as $i => $iValue) {
			$this->options['form_params']['UserId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getRtcCode()
 * @method $this withRtcCode($value)
 */
class ExitLive extends Rpc
{
}

/**
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getDeviceId()
 * @method $this withDeviceId($value)
 * @method string getId()
 * @method $this withId($value)
 */
class GetApp extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetDepartment extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 */
class GetDetectEvaluation extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetDetection extends Rpc
{
}

/**
 * @method array getModelPath()
 */
class GetModelSignedUrl extends Rpc
{

    /**
     * @param array $modelPath
     *
     * @return $this
     */
	public function withModelPath(array $modelPath)
	{
	    $this->data['ModelPath'] = $modelPath;
		foreach ($modelPath as $i => $iValue) {
			$this->options['form_params']['ModelPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getPrefix()
 */
class GetPreSignedUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrefix($value)
    {
        $this->data['Prefix'] = $value;
        $this->options['form_params']['Prefix'] = $value;

        return $this;
    }
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetRule extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetServiceConfiguration extends Rpc
{
}

/**
 * @method string getFileUrl()
 */
class GetSignedUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileUrl($value)
    {
        $this->data['FileUrl'] = $value;
        $this->options['form_params']['FileUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetSlrConfiguration extends Rpc
{
}

/**
 * @method array getDepartmentId()
 * @method string getDateTo()
 * @method $this withDateTo($value)
 * @method string getDateFrom()
 * @method $this withDateFrom($value)
 */
class GetStatistics extends Rpc
{

    /**
     * @param array $departmentId
     *
     * @return $this
     */
	public function withDepartmentId(array $departmentId)
	{
	    $this->data['DepartmentId'] = $departmentId;
		foreach ($departmentId as $i => $iValue) {
			$this->options['query']['DepartmentId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTask extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetTaskGroup extends Rpc
{
}

/**
 * @method string getId()
 * @method $this withId($value)
 */
class GetUser extends Rpc
{
}

/**
 * @method string getRoleName()
 * @method $this withRoleName($value)
 */
class InitializeServiceLinkedRole extends Rpc
{
}

/**
 * @method string getChannel()
 * @method $this withChannel($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getRtcCode()
 * @method $this withRtcCode($value)
 */
class JoinLive extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListApps extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListDepartments extends Rpc
{
}

/**
 * @method string getCreateDateTo()
 * @method $this withCreateDateTo($value)
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getRecordingType()
 * @method $this withRecordingType($value)
 * @method string getCreateDateFrom()
 * @method $this withCreateDateFrom($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class ListDetections extends Rpc
{
}

/**
 * @method string getPrefix()
 * @method string getLimit()
 */
class ListFiles extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrefix($value)
    {
        $this->data['Prefix'] = $value;
        $this->options['form_params']['Prefix'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListLives extends Rpc
{
}

class ListRoles extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListRules extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListStatisticsTask extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListTaskGroups extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ListTaskItems extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskGroupId()
 * @method $this withTaskGroupId($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 */
class ListTasks extends Rpc
{
}

/**
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getUsername()
 * @method $this withUsername($value)
 */
class ListUsers extends Rpc
{
}

/**
 * @method string getDepartmentId()
 * @method $this withDepartmentId($value)
 * @method string getPackageName()
 * @method $this withPackageName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDisabled()
 * @method $this withDisabled($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateApp extends Rpc
{
}

/**
 * @method string getDescription()
 * @method string getLabel()
 * @method string getName()
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateDepartment extends Rpc
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
    public function withLabel($value)
    {
        $this->data['Label'] = $value;
        $this->options['form_params']['Label'] = $value;

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
}

/**
 * @method string getLiveId()
 * @method $this withLiveId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateLive extends Rpc
{
}

/**
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 */
class UpdateRule extends Rpc
{
}

/**
 * @method string getLiveRecordMaxClient()
 * @method $this withLiveRecordMaxClient($value)
 * @method string getLiveRecordVideoResolution()
 * @method $this withLiveRecordVideoResolution($value)
 * @method string getTaskItemQueueSize()
 * @method $this withTaskItemQueueSize($value)
 * @method string getLiveRecordLayout()
 * @method $this withLiveRecordLayout($value)
 * @method string getClientQueueSize()
 * @method $this withClientQueueSize($value)
 * @method string getLiveRecordTaskProfile()
 * @method $this withLiveRecordTaskProfile($value)
 * @method string getLiveRecordAll()
 * @method $this withLiveRecordAll($value)
 * @method string getLiveRecordEveryOne()
 * @method $this withLiveRecordEveryOne($value)
 */
class UpdateServiceConfiguration extends Rpc
{
}

/**
 * @method string getMqInstanceId()
 * @method $this withMqInstanceId($value)
 * @method string getMqGroupId()
 * @method $this withMqGroupId($value)
 * @method array getMqEvent()
 * @method string getMqEndpoint()
 * @method $this withMqEndpoint($value)
 * @method string getMqTopic()
 * @method $this withMqTopic($value)
 * @method string getMqSubscribe()
 * @method $this withMqSubscribe($value)
 */
class UpdateSlrConfiguration extends Rpc
{

    /**
     * @param array $mqEvent
     *
     * @return $this
     */
	public function withMqEvent(array $mqEvent)
	{
	    $this->data['MqEvent'] = $mqEvent;
		foreach ($mqEvent as $i => $iValue) {
			$this->options['query']['MqEvent.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class UpdateUser extends Rpc
{
}
