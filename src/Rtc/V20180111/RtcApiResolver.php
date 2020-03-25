<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateChannel createChannel(array $options = [])
 * @method CreateConference createConference(array $options = [])
 * @method CreateMAURule createMAURule(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteChannel deleteChannel(array $options = [])
 * @method DeleteConference deleteConference(array $options = [])
 * @method DeleteMAURule deleteMAURule(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeChannelParticipants describeChannelParticipants(array $options = [])
 * @method DescribeChannelUsers describeChannelUsers(array $options = [])
 * @method DescribeConferenceAuthInfo describeConferenceAuthInfo(array $options = [])
 * @method DescribeMAURule describeMAURule(array $options = [])
 * @method DescribeRTCAppKey describeRTCAppKey(array $options = [])
 * @method DescribeRtcChannelCntData describeRtcChannelCntData(array $options = [])
 * @method DescribeRtcChannelList describeRtcChannelList(array $options = [])
 * @method DescribeRtcChannelMetric describeRtcChannelMetric(array $options = [])
 * @method DescribeRtcChannelUserList describeRtcChannelUserList(array $options = [])
 * @method DescribeRtcDurationData describeRtcDurationData(array $options = [])
 * @method DescribeRtcPeakChannelCntData describeRtcPeakChannelCntData(array $options = [])
 * @method DescribeRtcPeakUserCntData describeRtcPeakUserCntData(array $options = [])
 * @method DescribeRtcQualityMetric describeRtcQualityMetric(array $options = [])
 * @method DescribeRtcUserCntData describeRtcUserCntData(array $options = [])
 * @method DescribeRtcUserList describeRtcUserList(array $options = [])
 * @method DescribeUserInfoInChannel describeUserInfoInChannel(array $options = [])
 * @method DisableMAURule disableMAURule(array $options = [])
 * @method EnableMAURule enableMAURule(array $options = [])
 * @method GetMPUTaskStatus getMPUTaskStatus(array $options = [])
 * @method GetTaskStatus getTaskStatus(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyConference modifyConference(array $options = [])
 * @method MuteAudio muteAudio(array $options = [])
 * @method MuteAudioAll muteAudioAll(array $options = [])
 * @method ReceiveNotify receiveNotify(array $options = [])
 * @method RemoveParticipants removeParticipants(array $options = [])
 * @method RemoveTerminals removeTerminals(array $options = [])
 * @method SetChannelProperty setChannelProperty(array $options = [])
 * @method StartMPUTask startMPUTask(array $options = [])
 * @method StartTask startTask(array $options = [])
 * @method StopMPUTask stopMPUTask(array $options = [])
 * @method StopTask stopTask(array $options = [])
 * @method UnmuteAudio unmuteAudio(array $options = [])
 * @method UnmuteAudioAll unmuteAudioAll(array $options = [])
 * @method UpdateChannel updateChannel(array $options = [])
 * @method UpdateMPULayout updateMPULayout(array $options = [])
 */
class RtcApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'rtc';

    /** @var string */
    public $version = '2018-01-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'rtc';
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateChannel extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConferenceName()
 * @method $this withConferenceName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRemindNotice()
 * @method $this withRemindNotice($value)
 */
class CreateConference extends Rpc
{
}

/**
 * @method string getUseridPrefix()
 * @method $this withUseridPrefix($value)
 * @method string getChannelPrefix()
 * @method $this withChannelPrefix($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getMauTemplateId()
 * @method $this withMauTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 */
class CreateMAURule extends Rpc
{
}

/**
 * @method string getServiceMode()
 * @method $this withServiceMode($value)
 * @method array getLiveConfig()
 * @method string getMediaConfig()
 * @method $this withMediaConfig($value)
 * @method string getMaxMixStreamCount()
 * @method $this withMaxMixStreamCount($value)
 * @method array getRecordConfig()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getLayOut()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 * @method string getMixMode()
 * @method $this withMixMode($value)
 */
class CreateTemplate extends Rpc
{

    /**
     * @param array $liveConfig
     *
     * @return $this
     */
	public function withLiveConfig(array $liveConfig)
	{
	    $this->data['LiveConfig'] = $liveConfig;
		foreach ($liveConfig as $depth1 => $depth1Value) {
			$this->options['query']['LiveConfig.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			$this->options['query']['LiveConfig.' . ($depth1 + 1) . '.AppName'] = $depth1Value['AppName'];
		}

		return $this;
    }

    /**
     * @param array $recordConfig
     *
     * @return $this
     */
	public function withRecordConfig(array $recordConfig)
	{
	    $this->data['RecordConfig'] = $recordConfig;
		foreach ($recordConfig as $depth1 => $depth1Value) {
			$this->options['query']['RecordConfig.' . ($depth1 + 1) . '.StorageType'] = $depth1Value['StorageType'];
			$this->options['query']['RecordConfig.' . ($depth1 + 1) . '.FileFormat'] = $depth1Value['FileFormat'];
			$this->options['query']['RecordConfig.' . ($depth1 + 1) . '.OssEndPoint'] = $depth1Value['OssEndPoint'];
			$this->options['query']['RecordConfig.' . ($depth1 + 1) . '.OssBucket'] = $depth1Value['OssBucket'];
			$this->options['query']['RecordConfig.' . ($depth1 + 1) . '.VodTransCodeGroupId'] = $depth1Value['VodTransCodeGroupId'];
		}

		return $this;
    }

    /**
     * @param array $layOut
     *
     * @return $this
     */
	public function withLayOut(array $layOut)
	{
	    $this->data['LayOut'] = $layOut;
		foreach ($layOut as $depth1 => $depth1Value) {
			$this->options['query']['LayOut.' . ($depth1 + 1) . '.Color'] = $depth1Value['Color'];
			$this->options['query']['LayOut.' . ($depth1 + 1) . '.CutMode'] = $depth1Value['CutMode'];
			$this->options['query']['LayOut.' . ($depth1 + 1) . '.LayOutId'] = $depth1Value['LayOutId'];
		}

		return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DeleteChannel extends Rpc
{
}

/**
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteConference extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteMAURule extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteTemplate extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeApps extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeChannelParticipants extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeChannelUsers extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeConferenceAuthInfo extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeMAURule extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRTCAppKey extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeRtcChannelCntData extends Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeRtcChannelList extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeRtcChannelMetric extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTimePoint()
 * @method $this withTimePoint($value)
 */
class DescribeRtcChannelUserList extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeRtcDurationData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeRtcPeakChannelCntData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeRtcPeakUserCntData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSubUser()
 * @method $this withSubUser($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPubUser()
 * @method $this withPubUser($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRtcQualityMetric extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 */
class DescribeRtcUserCntData extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRtcUserList extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeUserInfoInChannel extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DisableMAURule extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class EnableMAURule extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetMPUTaskStatus extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTaskStatus extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class ModifyApp extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getConferenceName()
 * @method $this withConferenceName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRemindNotice()
 * @method $this withRemindNotice($value)
 */
class ModifyConference extends Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class MuteAudio extends Rpc
{

    /**
     * @param array $participantIds
     *
     * @return $this
     */
	public function withParticipantIds(array $participantIds)
	{
	    $this->data['ParticipantIds'] = $participantIds;
		foreach ($participantIds as $i => $iValue) {
			$this->options['query']['ParticipantIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParticipantId()
 * @method $this withParticipantId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class MuteAudioAll extends Rpc
{
}

/**
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getContent()
 * @method $this withContent($value)
 * @method string getEvent()
 * @method $this withEvent($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContentType()
 * @method $this withContentType($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class ReceiveNotify extends Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RemoveParticipants extends Rpc
{

    /**
     * @param array $participantIds
     *
     * @return $this
     */
	public function withParticipantIds(array $participantIds)
	{
	    $this->data['ParticipantIds'] = $participantIds;
		foreach ($participantIds as $i => $iValue) {
			$this->options['query']['ParticipantIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getTerminalIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class RemoveTerminals extends Rpc
{

    /**
     * @param array $terminalIds
     *
     * @return $this
     */
	public function withTerminalIds(array $terminalIds)
	{
	    $this->data['TerminalIds'] = $terminalIds;
		foreach ($terminalIds as $i => $iValue) {
			$this->options['query']['TerminalIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getMaxUserNum()
 * @method $this withMaxUserNum($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getTopics()
 * @method $this withTopics($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SetChannelProperty extends Rpc
{
}

/**
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StartMPUTask extends Rpc
{

    /**
     * @param array $userPanes
     *
     * @return $this
     */
	public function withUserPanes(array $userPanes)
	{
	    $this->data['UserPanes'] = $userPanes;
		foreach ($userPanes as $depth1 => $depth1Value) {
			$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
		}

		return $this;
    }

    /**
     * @param array $layoutIds
     *
     * @return $this
     */
	public function withLayoutIds(array $layoutIds)
	{
	    $this->data['LayoutIds'] = $layoutIds;
		foreach ($layoutIds as $i => $iValue) {
			$this->options['query']['LayoutIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecUsers
     *
     * @return $this
     */
	public function withSubSpecUsers(array $subSpecUsers)
	{
	    $this->data['SubSpecUsers'] = $subSpecUsers;
		foreach ($subSpecUsers as $i => $iValue) {
			$this->options['query']['SubSpecUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getMixPanes()
 * @method string getIdempotentId()
 * @method $this withIdempotentId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StartTask extends Rpc
{

    /**
     * @param array $mixPanes
     *
     * @return $this
     */
	public function withMixPanes(array $mixPanes)
	{
	    $this->data['MixPanes'] = $mixPanes;
		foreach ($mixPanes as $depth1 => $depth1Value) {
			$this->options['query']['MixPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			$this->options['query']['MixPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			$this->options['query']['MixPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
		}

		return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopMPUTask extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopTask extends Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UnmuteAudio extends Rpc
{

    /**
     * @param array $participantIds
     *
     * @return $this
     */
	public function withParticipantIds(array $participantIds)
	{
	    $this->data['ParticipantIds'] = $participantIds;
		foreach ($participantIds as $i => $iValue) {
			$this->options['query']['ParticipantIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParticipantId()
 * @method $this withParticipantId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UnmuteAudioAll extends Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNonce()
 * @method $this withNonce($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class UpdateChannel extends Rpc
{
}

/**
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UpdateMPULayout extends Rpc
{

    /**
     * @param array $userPanes
     *
     * @return $this
     */
	public function withUserPanes(array $userPanes)
	{
	    $this->data['UserPanes'] = $userPanes;
		foreach ($userPanes as $depth1 => $depth1Value) {
			$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
		}

		return $this;
    }

    /**
     * @param array $layoutIds
     *
     * @return $this
     */
	public function withLayoutIds(array $layoutIds)
	{
	    $this->data['LayoutIds'] = $layoutIds;
		foreach ($layoutIds as $i => $iValue) {
			$this->options['query']['LayoutIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
