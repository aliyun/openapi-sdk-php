<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

class V20170705Rpc extends Rpc
{
    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getEvent()
 * @method $this withEvent($value)
 * @method string getRamId()
 * @method $this withRamId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentEvents extends V20170705Rpc
{
}

/**
 * @method array getPrioritizedCallerArea()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getServiceTag()
 * @method array getSkillGroupId()
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickOutboundNumbersByTags extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPrioritizedCallerArea(array $value)
    {
        $this->data['PrioritizedCallerArea'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PrioritizedCallerArea.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withServiceTag(array $value)
    {
        $this->data['ServiceTag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ServiceTag.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetJobFileUploadUrl extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getJobsJson()
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 */
class CreatePredictiveJobGroup extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobsJson(array $value)
    {
        $this->data['JobsJson'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobsJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method array getSkillGroupId()
 * @method array getPhoneNumber()
 */
class AddBulkPhoneNumbers extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPhoneNumber(array $value)
    {
        $this->data['PhoneNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PhoneNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getPrioritizedCallerArea()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getServiceTag()
 * @method array getSkillGroupId()
 * @method string getCount()
 * @method $this withCount($value)
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickNumbersByTags extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPrioritizedCallerArea(array $value)
    {
        $this->data['PrioritizedCallerArea'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PrioritizedCallerArea.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withServiceTag(array $value)
    {
        $this->data['ServiceTag'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ServiceTag.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getMaxConcurrentConversation()
 * @method $this withMaxConcurrentConversation($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getCallCenterInstanceId()
 * @method $this withCallCenterInstanceId($value)
 * @method string getInstanceDescription()
 * @method $this withInstanceDescription($value)
 */
class CreateCabInstance extends V20170705Rpc
{
}

/**
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListIvrTrackingDetail extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCount()
 * @method $this withCount($value)
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickOutboundNumbers extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCandidateNumber(array $value)
    {
        $this->data['CandidateNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CandidateNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getMockResponse()
 * @method $this withMockResponse($value)
 */
class QueryRedialIndicator extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDn()
 * @method $this withDn($value)
 */
class GetAgentState extends V20170705Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class AddNumberToSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class RemoveNumberFromSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getConnectId()
 * @method $this withConnectId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecordingOfDualTrack extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method array getUserId()
 */
class RemoveUsersFromSkillGroup extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserId(array $value)
    {
        $this->data['UserId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 */
class ListCallMeasureSummaryReports extends V20170705Rpc
{
}

/**
 * @method string getIntervalType()
 * @method $this withIntervalType($value)
 * @method string getMonth()
 * @method $this withMonth($value)
 * @method string getYear()
 * @method $this withYear($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getDay()
 * @method $this withDay($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetCallMeasureSummaryReport extends V20170705Rpc
{
}

/**
 * @method string getTelA()
 * @method $this withTelA($value)
 * @method string getTelB()
 * @method $this withTelB($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class CallOnlinePrivacyNumber extends V20170705Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ModifyPrivacyNumberCallDetail extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getAgentName()
 * @method $this withAgentName($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPrivacyNumberCallDetails extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DeleteMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOssFilePath()
 * @method $this withOssFilePath($value)
 * @method string getUploadResult()
 * @method $this withUploadResult($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getOssFileName()
 * @method $this withOssFileName($value)
 */
class ModifyMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class PreModifyMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListMedias extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOssFilePath()
 * @method $this withOssFilePath($value)
 * @method string getUploadResult()
 * @method $this withUploadResult($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getOssFileName()
 * @method $this withOssFileName($value)
 */
class CreateMedia extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class PreCreateMedia extends V20170705Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateCCCPostOrder extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class FindUsers extends V20170705Rpc
{
}

/**
 * @method array getSubscriptions()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class ModifyNotificationConfig extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSubscriptions(array $value)
    {
        $this->data['Subscriptions'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Subscriptions.' . ($i + 1) . '.DisplayName'] = $value[$i]['DisplayName'];
            $this->options['query']['Subscriptions.' . ($i + 1) . '.Name'] = $value[$i]['Name'];
            $this->options['query']['Subscriptions.' . ($i + 1) . '.Selected'] = $value[$i]['Selected'];
        }

        return $this;
    }
}

/**
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRoleId()
 * @method array getSkillGroupId()
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ModifySkillGroupOfUser extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillLevel(array $value)
    {
        $this->data['SkillLevel'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRoleId(array $value)
    {
        $this->data['RoleId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListOutboundPhoneNumberOfUser extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceState extends V20170705Rpc
{
}

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContractFlowId()
 * @method $this withContractFlowId($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 */
class SimpleDial extends V20170705Rpc
{
}

/**
 * @method array getUserObject()
 * @method string getName()
 * @method $this withName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method array getPhoneNumber()
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getStorageMaxDays()
 * @method $this withStorageMaxDays($value)
 * @method string getStorageMaxSize()
 * @method $this withStorageMaxSize($value)
 * @method string getDirectoryId()
 * @method $this withDirectoryId($value)
 * @method array getAdminRamId()
 */
class CreateInstance extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserObject(array $value)
    {
        $this->data['UserObject'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserObject.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withPhoneNumber(array $value)
    {
        $this->data['PhoneNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['PhoneNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withAdminRamId(array $value)
    {
        $this->data['AdminRamId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['AdminRamId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstance extends V20170705Rpc
{
}

/**
 * @method string getCanvas()
 * @method $this withCanvas($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class CreateContactFlow extends V20170705Rpc
{
}

/**
 * @method string getCanvas()
 * @method $this withCanvas($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 * @method string getContent()
 * @method $this withContent($value)
 */
class CommitContactFlowVersionModification extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactFlowVersionId()
 * @method $this withContactFlowVersionId($value)
 */
class PublishContactFlowVersion extends V20170705Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetPredictiveJob extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOutboundTaskId()
 * @method $this withOutboundTaskId($value)
 */
class GetContactIdentifyByOutBoundTaskId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupStates extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetInstanceSummaryReportSinceMidnight extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetInstanceSummaryReportByInterval extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetInstanceSummaryReport extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupSummaryReportsByInterval extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroups()
 * @method $this withSkillGroups($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupSummaryReportsSinceMidnight extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentSummaryReportsSinceMidnight extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupIds()
 * @method $this withSkillGroupIds($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListSkillGroupSummaryReports extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentSummaryReportsByInterval extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentSummaryReports extends V20170705Rpc
{
}

/**
 * @method string getAgentIds()
 * @method $this withAgentIds($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListAgentStates extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getScenario()
 */
class GetSmsConfig extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withScenario(array $value)
    {
        $this->data['Scenario'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Scenario.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecentCallRecords extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getConfigId()
 * @method $this withConfigId($value)
 * @method string getTemplateParam()
 * @method $this withTemplateParam($value)
 */
class SendPredefinedShortMessage extends V20170705Rpc
{
}

/**
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getPhoneNumbers()
 * @method $this withPhoneNumbers($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class LaunchShortMessageAppraise extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetConversationDetailByContactId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DeleteJobGroup extends V20170705Rpc
{
}

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ModifyScenario extends V20170705Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTimeAlignment()
 * @method $this withTimeAlignment($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListPredictiveJobStatus extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method array getJobsJson()
 */
class CreatePredictiveJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobsJson(array $value)
    {
        $this->data['JobsJson'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobsJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class CancelPredictiveJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobId(array $value)
    {
        $this->data['JobId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetJobTemplateDownloadParams extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetScenario extends V20170705Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class PublishSurvey extends V20170705Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getFlowId()
 * @method $this withFlowId($value)
 */
class ModifySurvey extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ListSurveys extends V20170705Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class GetSurvey extends V20170705Rpc
{
}

/**
 * @method string getSurveyId()
 * @method $this withSurveyId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class DeleteSurvey extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRole()
 * @method $this withRole($value)
 * @method string getRound()
 * @method $this withRound($value)
 * @method string getFlowJson()
 * @method $this withFlowJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getGlobalQuestions()
 * @method $this withGlobalQuestions($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getCorpora()
 * @method $this withCorpora($value)
 * @method string getSpeechOptimizationParam()
 * @method $this withSpeechOptimizationParam($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateSurvey extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListBasicStatisticsReportSubItems extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUnreachableContacts extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DownloadUnreachableContacts extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class DownloadOriginalStatisticsReport extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListPrivilegesOfUser extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GenerateAgentStatisticReport extends V20170705Rpc
{
}

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCallCenterNumber()
 * @method $this withCallCenterNumber($value)
 * @method string getCallee()
 * @method $this withCallee($value)
 * @method string getWorkflowId()
 * @method $this withWorkflowId($value)
 */
class StartBack2BackCall extends V20170705Rpc
{
}

/**
 * @method string getCaller()
 * @method $this withCaller($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalleeCustomer()
 * @method $this withCalleeCustomer($value)
 * @method string getCalleeAgent()
 * @method $this withCalleeAgent($value)
 */
class TwoPartiesCall extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStartDay()
 * @method $this withStartDay($value)
 * @method string getEndDay()
 * @method $this withEndDay($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class GetAgentData extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class GetJobGroup extends V20170705Rpc
{
}

class ListScenarioTemplates extends V20170705Rpc
{
}

/**
 * @method string getVariables()
 * @method $this withVariables($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 */
class CreateScenarioFromTemplate extends V20170705Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class SuspendJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobId(array $value)
    {
        $this->data['JobId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobReferenceId(array $value)
    {
        $this->data['JobReferenceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 */
class SubmitBatchJobs extends V20170705Rpc
{
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class ResumeJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobId(array $value)
    {
        $this->data['JobId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobReferenceId(array $value)
    {
        $this->data['JobReferenceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobFailureReason()
 * @method $this withJobFailureReason($value)
 * @method string getJobStatus()
 * @method $this withJobStatus($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobsByGroup extends V20170705Rpc
{
}

/**
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubmitted()
 * @method $this withSubmitted($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getJobFilePath()
 * @method $this withJobFilePath($value)
 */
class CreateBatchJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCallingNumber(array $value)
    {
        $this->data['CallingNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getJobId()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getJobReferenceId()
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CancelJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobId(array $value)
    {
        $this->data['JobId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobReferenceId(array $value)
    {
        $this->data['JobReferenceId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobReferenceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method array getJobsJson()
 */
class AssignJobs extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCallingNumber(array $value)
    {
        $this->data['CallingNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withJobsJson(array $value)
    {
        $this->data['JobsJson'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['JobsJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 */
class GetJobDataUploadParams extends V20170705Rpc
{
}

/**
 * @method string getAcid()
 * @method $this withAcid($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class LaunchAppraise extends V20170705Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetTaskList extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getJobGroupId()
 * @method $this withJobGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getQueryAll()
 * @method $this withQueryAll($value)
 */
class GetJobList extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetConversationList extends V20170705Rpc
{
}

/**
 * @method string getJobId()
 * @method $this withJobId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetJob extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRealTimeAgent extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getConfigItem()
 */
class ListConfig extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withConfigItem(array $value)
    {
        $this->data['ConfigItem'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['ConfigItem.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListScenarios extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSurveysJson()
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 */
class CreateScenario extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSurveysJson(array $value)
    {
        $this->data['SurveysJson'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SurveysJson.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getCandidateNumber()
 * @method string getCalleeNumber()
 * @method $this withCalleeNumber($value)
 */
class PickLocalNumber extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCandidateNumber(array $value)
    {
        $this->data['CandidateNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CandidateNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNumberRegionInfo extends V20170705Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getActionKey()
 * @method $this withActionKey($value)
 * @method string getActionParams()
 * @method $this withActionParams($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class Dialogue extends V20170705Rpc
{
}

/**
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getStrategyJson()
 * @method $this withStrategyJson($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class CreateJobGroup extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCallingNumber(array $value)
    {
        $this->data['CallingNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobGroups extends V20170705Rpc
{
}

/**
 * @method string getCallId()
 * @method $this withCallId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetJobStatusByCallId extends V20170705Rpc
{
}

/**
 * @method string getContactName()
 * @method $this withContactName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTimeAlignment()
 * @method $this withTimeAlignment($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListJobStatus extends V20170705Rpc
{
}

/**
 * @method string getJobJson()
 * @method $this withJobJson($value)
 * @method array getCallingNumber()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getSelfHostedCallCenter()
 * @method $this withSelfHostedCallCenter($value)
 * @method string getScenarioId()
 * @method $this withScenarioId($value)
 */
class StartJob extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withCallingNumber(array $value)
    {
        $this->data['CallingNumber'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['CallingNumber.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 */
class ListRecordingsByContactId extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getChannel()
 * @method $this withChannel($value)
 */
class DownloadRecording extends V20170705Rpc
{
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getContactDisposition()
 * @method $this withContactDisposition($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getWithRecording()
 * @method $this withWithRecording($value)
 */
class ListCallDetailRecords extends V20170705Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCriteria()
 * @method $this withCriteria($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStopTime()
 * @method $this withStopTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListRecordings extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RefreshToken extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumberId()
 * @method $this withPhoneNumberId($value)
 */
class RemovePhoneNumber extends V20170705Rpc
{
}

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method array getRoleId()
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ModifyUser extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillLevel(array $value)
    {
        $this->data['SkillLevel'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRoleId(array $value)
    {
        $this->data['RoleId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAllowPrivateOutboundNumber()
 * @method $this withAllowPrivateOutboundNumber($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getUserId()
 */
class ModifySkillGroup extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillLevel(array $value)
    {
        $this->data['SkillLevel'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOutboundPhoneNumberId(array $value)
    {
        $this->data['OutboundPhoneNumberId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserId(array $value)
    {
        $this->data['UserId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPhoneNumberId()
 * @method $this withPhoneNumberId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method array getSkillGroupId()
 */
class ModifyPhoneNumber extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getUserId()
 */
class RemoveUsers extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserId(array $value)
    {
        $this->data['UserId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsersOfSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RequestLoginInfo extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListUsers extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class ListSkillGroupsOfUser extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListSkillGroups extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListRoles extends V20170705Rpc
{
}

/**
 * @method string getOutboundOnly()
 * @method $this withOutboundOnly($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListPhoneNumbers extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListContactFlows extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 */
class GetUser extends V20170705Rpc
{
}

/**
 * @method string getServiceType()
 * @method $this withServiceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetServiceExtensions extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getObjectId()
 * @method $this withObjectId($value)
 */
class GetConfig extends V20170705Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSkillGroupId()
 * @method $this withSkillGroupId($value)
 */
class DeleteSkillGroup extends V20170705Rpc
{
}

/**
 * @method string getPrivateOutboundNumberId()
 * @method $this withPrivateOutboundNumberId($value)
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getLoginName()
 * @method $this withLoginName($value)
 * @method string getPhone()
 * @method $this withPhone($value)
 * @method array getRoleId()
 * @method string getDisplayName()
 * @method $this withDisplayName($value)
 * @method array getSkillGroupId()
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class CreateUser extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillLevel(array $value)
    {
        $this->data['SkillLevel'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRoleId(array $value)
    {
        $this->data['RoleId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getOutboundPhoneNumberId()
 * @method string getName()
 * @method $this withName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method array getUserId()
 */
class CreateSkillGroup extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillLevel(array $value)
    {
        $this->data['SkillLevel'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withOutboundPhoneNumberId(array $value)
    {
        $this->data['OutboundPhoneNumberId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['OutboundPhoneNumberId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserId(array $value)
    {
        $this->data['UserId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method array getUserRamId()
 * @method array getSkillLevel()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getRoleId()
 * @method array getSkillGroupId()
 */
class AssignUsers extends V20170705Rpc
{

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withUserRamId(array $value)
    {
        $this->data['UserRamId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserRamId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillLevel(array $value)
    {
        $this->data['SkillLevel'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillLevel.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRoleId(array $value)
    {
        $this->data['RoleId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RoleId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withSkillGroupId(array $value)
    {
        $this->data['SkillGroupId'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['SkillGroupId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}

/**
 * @method string getContactFlowId()
 * @method $this withContactFlowId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUsage()
 * @method $this withUsage($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 */
class AddPhoneNumber extends V20170705Rpc
{
}
