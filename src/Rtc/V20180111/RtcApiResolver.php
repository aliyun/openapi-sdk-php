<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddRecordTemplate addRecordTemplate(array $options = [])
 * @method CreateChannel createChannel(array $options = [])
 * @method CreateConference createConference(array $options = [])
 * @method CreateMPULayout createMPULayout(array $options = [])
 * @method CreateMPURule createMPURule(array $options = [])
 * @method CreateServiceLinkedRoleForRtc createServiceLinkedRoleForRtc(array $options = [])
 * @method DeleteChannel deleteChannel(array $options = [])
 * @method DeleteConference deleteConference(array $options = [])
 * @method DeleteMPULayout deleteMPULayout(array $options = [])
 * @method DeleteMPURule deleteMPURule(array $options = [])
 * @method DeleteRecordTemplate deleteRecordTemplate(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeChannelParticipants describeChannelParticipants(array $options = [])
 * @method DescribeChannelUsers describeChannelUsers(array $options = [])
 * @method DescribeConferenceAuthInfo describeConferenceAuthInfo(array $options = [])
 * @method DescribeMPULayoutInfo describeMPULayoutInfo(array $options = [])
 * @method DescribeMPULayoutInfoList describeMPULayoutInfoList(array $options = [])
 * @method DescribeMPULayoutList describeMPULayoutList(array $options = [])
 * @method DescribeMPURule describeMPURule(array $options = [])
 * @method DescribeRecordFiles describeRecordFiles(array $options = [])
 * @method DescribeRecordTasks describeRecordTasks(array $options = [])
 * @method DescribeRecordTemplates describeRecordTemplates(array $options = [])
 * @method DescribeRTCAppKey describeRTCAppKey(array $options = [])
 * @method DescribeRtcChannelCntData describeRtcChannelCntData(array $options = [])
 * @method DescribeRtcChannelDetail describeRtcChannelDetail(array $options = [])
 * @method DescribeRtcChannelList describeRtcChannelList(array $options = [])
 * @method DescribeRtcChannelMetric describeRtcChannelMetric(array $options = [])
 * @method DescribeRtcChannelMetrics describeRtcChannelMetrics(array $options = [])
 * @method DescribeRtcChannels describeRtcChannels(array $options = [])
 * @method DescribeRtcChannelUserList describeRtcChannelUserList(array $options = [])
 * @method DescribeRtcDurationData describeRtcDurationData(array $options = [])
 * @method DescribeRtcPeakChannelCntData describeRtcPeakChannelCntData(array $options = [])
 * @method DescribeRtcPeakUserCntData describeRtcPeakUserCntData(array $options = [])
 * @method DescribeRtcQualityMetric describeRtcQualityMetric(array $options = [])
 * @method DescribeRtcUserCntData describeRtcUserCntData(array $options = [])
 * @method DescribeRtcUserEvents describeRtcUserEvents(array $options = [])
 * @method DescribeRtcUserList describeRtcUserList(array $options = [])
 * @method DescribeUserInfoInChannel describeUserInfoInChannel(array $options = [])
 * @method DisableMPURule disableMPURule(array $options = [])
 * @method EnableMPURule enableMPURule(array $options = [])
 * @method GetMPUTaskStatus getMPUTaskStatus(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyConference modifyConference(array $options = [])
 * @method ModifyMPULayout modifyMPULayout(array $options = [])
 * @method MuteAudio muteAudio(array $options = [])
 * @method MuteAudioAll muteAudioAll(array $options = [])
 * @method ReceiveNotify receiveNotify(array $options = [])
 * @method RemoveParticipants removeParticipants(array $options = [])
 * @method RemoveTerminals removeTerminals(array $options = [])
 * @method SetChannelProperty setChannelProperty(array $options = [])
 * @method StartMPUTask startMPUTask(array $options = [])
 * @method StartRecordTask startRecordTask(array $options = [])
 * @method StopChannelUserPublish stopChannelUserPublish(array $options = [])
 * @method StopMPUTask stopMPUTask(array $options = [])
 * @method StopRecordTask stopRecordTask(array $options = [])
 * @method UnmuteAudio unmuteAudio(array $options = [])
 * @method UnmuteAudioAll unmuteAudioAll(array $options = [])
 * @method UpdateChannel updateChannel(array $options = [])
 * @method UpdateMPULayout updateMPULayout(array $options = [])
 * @method UpdateRecordTask updateRecordTask(array $options = [])
 * @method UpdateRecordTemplate updateRecordTemplate(array $options = [])
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
 * @method array getFormats()
 * @method string getOssFilePrefix()
 * @method $this withOssFilePrefix($value)
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDelayStopTime()
 * @method $this withDelayStopTime($value)
 * @method string getFileSplitInterval()
 * @method $this withFileSplitInterval($value)
 * @method string getMnsQueue()
 * @method $this withMnsQueue($value)
 * @method string getHttpCallbackUrl()
 * @method $this withHttpCallbackUrl($value)
 * @method array getWatermarks()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getBackgrounds()
 * @method string getName()
 * @method $this withName($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 */
class AddRecordTemplate extends Rpc
{

    /**
     * @param array $formats
     *
     * @return $this
     */
	public function withFormats(array $formats)
	{
	    $this->data['Formats'] = $formats;
		foreach ($formats as $i => $iValue) {
			$this->options['query']['Formats.' . ($i + 1)] = $iValue;
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
     * @param array $watermarks
     *
     * @return $this
     */
	public function withWatermarks(array $watermarks)
	{
	    $this->data['Watermarks'] = $watermarks;
		foreach ($watermarks as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }

    /**
     * @param array $backgrounds
     *
     * @return $this
     */
	public function withBackgrounds(array $backgrounds)
	{
	    $this->data['Backgrounds'] = $backgrounds;
		foreach ($backgrounds as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method array getPanes()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAudioMixCount()
 * @method $this withAudioMixCount($value)
 */
class CreateMPULayout extends Rpc
{

    /**
     * @param array $panes
     *
     * @return $this
     */
	public function withPanes(array $panes)
	{
	    $this->data['Panes'] = $panes;
		foreach ($panes as $depth1 => $depth1Value) {
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['MajorPane'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.MajorPane'] = $depth1Value['MajorPane'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }
}

/**
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method string getChannelPrefix()
 * @method $this withChannelPrefix($value)
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 */
class CreateMPURule extends Rpc
{

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

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class CreateServiceLinkedRoleForRtc extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteConference extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteMPULayout extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteMPURule extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteRecordTemplate extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeConferenceAuthInfo extends Rpc
{
}

/**
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeMPULayoutInfo extends Rpc
{
}

/**
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class DescribeMPULayoutInfoList extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeMPULayoutList extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeMPURule extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method array getTaskIds()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRecordFiles extends Rpc
{

    /**
     * @param array $taskIds
     *
     * @return $this
     */
	public function withTaskIds(array $taskIds)
	{
	    $this->data['TaskIds'] = $taskIds;
		foreach ($taskIds as $i => $iValue) {
			$this->options['query']['TaskIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method array getTaskIds()
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeRecordTasks extends Rpc
{

    /**
     * @param array $taskIds
     *
     * @return $this
     */
	public function withTaskIds(array $taskIds)
	{
	    $this->data['TaskIds'] = $taskIds;
		foreach ($taskIds as $i => $iValue) {
			$this->options['query']['TaskIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getTemplateIds()
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRecordTemplates extends Rpc
{

    /**
     * @param array $templateIds
     *
     * @return $this
     */
	public function withTemplateIds(array $templateIds)
	{
	    $this->data['TemplateIds'] = $templateIds;
		foreach ($templateIds as $i => $iValue) {
			$this->options['query']['TemplateIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRtcChannelDetail extends Rpc
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getSubUid()
 * @method $this withSubUid($value)
 * @method string getPubUid()
 * @method $this withPubUid($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRtcChannelMetrics extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRtcChannels extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRtcUserEvents extends Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
class DescribeRtcUserList extends Rpc
{
}

/**
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DisableMPURule extends Rpc
{
}

/**
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class EnableMPURule extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetMPUTaskStatus extends Rpc
{
}

/**
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method array getPanes()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getAudioMixCount()
 * @method $this withAudioMixCount($value)
 */
class ModifyMPULayout extends Rpc
{

    /**
     * @param array $panes
     *
     * @return $this
     */
	public function withPanes(array $panes)
	{
	    $this->data['Panes'] = $panes;
		foreach ($panes as $depth1 => $depth1Value) {
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['MajorPane'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.MajorPane'] = $depth1Value['MajorPane'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }
}

/**
 * @method array getParticipantIds()
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getPayloadType()
 * @method $this withPayloadType($value)
 * @method array getUserPanes()
 * @method string getRtpExtInfo()
 * @method $this withRtpExtInfo($value)
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method string getReportVad()
 * @method $this withReportVad($value)
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getVadInterval()
 * @method $this withVadInterval($value)
 * @method array getWatermarks()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getBackgrounds()
 * @method string getTimeStampRef()
 * @method $this withTimeStampRef($value)
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
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
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
     * @param array $watermarks
     *
     * @return $this
     */
	public function withWatermarks(array $watermarks)
	{
	    $this->data['Watermarks'] = $watermarks;
		foreach ($watermarks as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
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

    /**
     * @param array $backgrounds
     *
     * @return $this
     */
	public function withBackgrounds(array $backgrounds)
	{
	    $this->data['Backgrounds'] = $backgrounds;
		foreach ($backgrounds as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }
}

/**
 * @method array getUserPanes()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StartRecordTask extends Rpc
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
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
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
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StopChannelUserPublish extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class StopMPUTask extends Rpc
{
}

/**
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class StopRecordTask extends Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method array getWatermarks()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getBackgrounds()
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
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
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
     * @param array $watermarks
     *
     * @return $this
     */
	public function withWatermarks(array $watermarks)
	{
	    $this->data['Watermarks'] = $watermarks;
		foreach ($watermarks as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }

    /**
     * @param array $backgrounds
     *
     * @return $this
     */
	public function withBackgrounds(array $backgrounds)
	{
	    $this->data['Backgrounds'] = $backgrounds;
		foreach ($backgrounds as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }
}

/**
 * @method array getUserPanes()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class UpdateRecordTask extends Rpc
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
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
			}
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
 * @method array getFormats()
 * @method string getOssFilePrefix()
 * @method $this withOssFilePrefix($value)
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getMnsQueue()
 * @method $this withMnsQueue($value)
 * @method string getFileSplitInterval()
 * @method $this withFileSplitInterval($value)
 * @method string getHttpCallbackUrl()
 * @method $this withHttpCallbackUrl($value)
 * @method array getWatermarks()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getBackgrounds()
 * @method string getName()
 * @method $this withName($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 */
class UpdateRecordTemplate extends Rpc
{

    /**
     * @param array $formats
     *
     * @return $this
     */
	public function withFormats(array $formats)
	{
	    $this->data['Formats'] = $formats;
		foreach ($formats as $i => $iValue) {
			$this->options['query']['Formats.' . ($i + 1)] = $iValue;
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
     * @param array $watermarks
     *
     * @return $this
     */
	public function withWatermarks(array $watermarks)
	{
	    $this->data['Watermarks'] = $watermarks;
		foreach ($watermarks as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }

    /**
     * @param array $backgrounds
     *
     * @return $this
     */
	public function withBackgrounds(array $backgrounds)
	{
	    $this->data['Backgrounds'] = $backgrounds;
		foreach ($backgrounds as $depth1 => $depth1Value) {
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
		}

		return $this;
    }
}
