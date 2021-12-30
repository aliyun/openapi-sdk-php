<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddRecordTemplate addRecordTemplate(array $options = [])
 * @method CreateAutoLiveStreamRule createAutoLiveStreamRule(array $options = [])
 * @method CreateEventSubscribe createEventSubscribe(array $options = [])
 * @method CreateMPULayout createMPULayout(array $options = [])
 * @method DeleteAutoLiveStreamRule deleteAutoLiveStreamRule(array $options = [])
 * @method DeleteChannel deleteChannel(array $options = [])
 * @method DeleteEventSubscribe deleteEventSubscribe(array $options = [])
 * @method DeleteMPULayout deleteMPULayout(array $options = [])
 * @method DeleteRecordTemplate deleteRecordTemplate(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeAutoLiveStreamRule describeAutoLiveStreamRule(array $options = [])
 * @method DescribeChannelParticipants describeChannelParticipants(array $options = [])
 * @method DescribeChannelUsers describeChannelUsers(array $options = [])
 * @method DescribeMPULayoutInfoList describeMPULayoutInfoList(array $options = [])
 * @method DescribeRecordFiles describeRecordFiles(array $options = [])
 * @method DescribeRecordTemplates describeRecordTemplates(array $options = [])
 * @method DescribeUserInfoInChannel describeUserInfoInChannel(array $options = [])
 * @method DisableAutoLiveStreamRule disableAutoLiveStreamRule(array $options = [])
 * @method EnableAutoLiveStreamRule enableAutoLiveStreamRule(array $options = [])
 * @method GetMPUTaskStatus getMPUTaskStatus(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyMPULayout modifyMPULayout(array $options = [])
 * @method RemoveTerminals removeTerminals(array $options = [])
 * @method StartMPUTask startMPUTask(array $options = [])
 * @method StartRecordTask startRecordTask(array $options = [])
 * @method StopMPUTask stopMPUTask(array $options = [])
 * @method StopRecordTask stopRecordTask(array $options = [])
 * @method UpdateAutoLiveStreamRule updateAutoLiveStreamRule(array $options = [])
 * @method UpdateMPUTask updateMPUTask(array $options = [])
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
 * @method array getClockWidgets()
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
 * @method string getEnableM3u8DateTime()
 * @method $this withEnableM3u8DateTime($value)
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
     * @param array $clockWidgets
     *
     * @return $this
     */
	public function withClockWidgets(array $clockWidgets)
	{
	    $this->data['ClockWidgets'] = $clockWidgets;
		foreach ($clockWidgets as $depth1 => $depth1Value) {
			if(isset($depth1Value['FontType'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontType'] = $depth1Value['FontType'];
			}
			if(isset($depth1Value['FontColor'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontColor'] = $depth1Value['FontColor'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['FontSize'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontSize'] = $depth1Value['FontSize'];
			}
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
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
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
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
		}

		return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getChannelIdPrefixes()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method array getChannelIds()
 */
class CreateAutoLiveStreamRule extends Rpc
{

    /**
     * @param array $channelIdPrefixes
     *
     * @return $this
     */
	public function withChannelIdPrefixes(array $channelIdPrefixes)
	{
	    $this->data['ChannelIdPrefixes'] = $channelIdPrefixes;
		foreach ($channelIdPrefixes as $i => $iValue) {
			$this->options['query']['ChannelIdPrefixes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $channelIds
     *
     * @return $this
     */
	public function withChannelIds(array $channelIds)
	{
	    $this->data['ChannelIds'] = $channelIds;
		foreach ($channelIds as $i => $iValue) {
			$this->options['query']['ChannelIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getNeedCallbackAuth()
 * @method $this withNeedCallbackAuth($value)
 * @method array getEvents()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallbackUrl()
 * @method $this withCallbackUrl($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateEventSubscribe extends Rpc
{

    /**
     * @param array $events
     *
     * @return $this
     */
	public function withEvents(array $events)
	{
	    $this->data['Events'] = $events;
		foreach ($events as $i => $iValue) {
			$this->options['query']['Events.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $users
     *
     * @return $this
     */
	public function withUsers(array $users)
	{
	    $this->data['Users'] = $users;
		foreach ($users as $i => $iValue) {
			$this->options['query']['Users.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
			if(isset($depth1Value['MajorPane'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.MajorPane'] = $depth1Value['MajorPane'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
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
 * @method string getRuleId()
 * @method $this withRuleId($value)
 */
class DeleteAutoLiveStreamRule extends Rpc
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
 * @method string getSubscribeId()
 * @method $this withSubscribeId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteEventSubscribe extends Rpc
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
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeAutoLiveStreamRule extends Rpc
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
class DisableAutoLiveStreamRule extends Rpc
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
class EnableAutoLiveStreamRule extends Rpc
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
			if(isset($depth1Value['MajorPane'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.MajorPane'] = $depth1Value['MajorPane'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Panes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
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
 * @method string getPayloadType()
 * @method $this withPayloadType($value)
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getReportVad()
 * @method $this withReportVad($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method array getClockWidgets()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method array getUnsubSpecCameraUsers()
 * @method string getTaskType()
 * @method $this withTaskType($value)
 * @method array getUnsubSpecAudioUsers()
 * @method string getVadInterval()
 * @method $this withVadInterval($value)
 * @method array getWatermarks()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSubSpecAudioUsers()
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getEnhancedParam()
 * @method string getRtpExtInfo()
 * @method $this withRtpExtInfo($value)
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method array getSubSpecCameraUsers()
 * @method array getOutputStreamParams()
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method array getUnsubSpecShareScreenUsers()
 * @method array getSubSpecShareScreenUsers()
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getBackgrounds()
 * @method string getTimeStampRef()
 * @method $this withTimeStampRef($value)
 * @method string getMixMode()
 * @method $this withMixMode($value)
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
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
			}
			if(isset($depth1Value['SegmentType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SegmentType'] = $depth1Value['SegmentType'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $clockWidgets
     *
     * @return $this
     */
	public function withClockWidgets(array $clockWidgets)
	{
	    $this->data['ClockWidgets'] = $clockWidgets;
		foreach ($clockWidgets as $depth1 => $depth1Value) {
			if(isset($depth1Value['FontType'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontType'] = $depth1Value['FontType'];
			}
			if(isset($depth1Value['FontColor'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontColor'] = $depth1Value['FontColor'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['FontSize'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontSize'] = $depth1Value['FontSize'];
			}
		}

		return $this;
    }

    /**
     * @param array $unsubSpecCameraUsers
     *
     * @return $this
     */
	public function withUnsubSpecCameraUsers(array $unsubSpecCameraUsers)
	{
	    $this->data['UnsubSpecCameraUsers'] = $unsubSpecCameraUsers;
		foreach ($unsubSpecCameraUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecCameraUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $unsubSpecAudioUsers
     *
     * @return $this
     */
	public function withUnsubSpecAudioUsers(array $unsubSpecAudioUsers)
	{
	    $this->data['UnsubSpecAudioUsers'] = $unsubSpecAudioUsers;
		foreach ($unsubSpecAudioUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecAudioUsers.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
		}

		return $this;
    }

    /**
     * @param array $subSpecAudioUsers
     *
     * @return $this
     */
	public function withSubSpecAudioUsers(array $subSpecAudioUsers)
	{
	    $this->data['SubSpecAudioUsers'] = $subSpecAudioUsers;
		foreach ($subSpecAudioUsers as $i => $iValue) {
			$this->options['query']['SubSpecAudioUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnhancedParam($value)
    {
        $this->data['EnhancedParam'] = $value;
        $this->options['form_params']['EnhancedParam'] = $value;

        return $this;
    }

    /**
     * @param array $subSpecCameraUsers
     *
     * @return $this
     */
	public function withSubSpecCameraUsers(array $subSpecCameraUsers)
	{
	    $this->data['SubSpecCameraUsers'] = $subSpecCameraUsers;
		foreach ($subSpecCameraUsers as $i => $iValue) {
			$this->options['query']['SubSpecCameraUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $outputStreamParams
     *
     * @return $this
     */
	public function withOutputStreamParams(array $outputStreamParams)
	{
	    $this->data['OutputStreamParams'] = $outputStreamParams;
		foreach ($outputStreamParams as $depth1 => $depth1Value) {
			if(isset($depth1Value['StreamURL'])){
				$this->options['query']['OutputStreamParams.' . ($depth1 + 1) . '.StreamURL'] = $depth1Value['StreamURL'];
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
     * @param array $unsubSpecShareScreenUsers
     *
     * @return $this
     */
	public function withUnsubSpecShareScreenUsers(array $unsubSpecShareScreenUsers)
	{
	    $this->data['UnsubSpecShareScreenUsers'] = $unsubSpecShareScreenUsers;
		foreach ($unsubSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecShareScreenUsers
     *
     * @return $this
     */
	public function withSubSpecShareScreenUsers(array $subSpecShareScreenUsers)
	{
	    $this->data['SubSpecShareScreenUsers'] = $subSpecShareScreenUsers;
		foreach ($subSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['SubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
		}

		return $this;
    }
}

/**
 * @method array getUserPanes()
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method array getSubSpecCameraUsers()
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method array getUnsubSpecCameraUsers()
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method array getUnsubSpecAudioUsers()
 * @method array getUnsubSpecShareScreenUsers()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method array getSubSpecAudioUsers()
 * @method array getSubSpecShareScreenUsers()
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getMixMode()
 * @method $this withMixMode($value)
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
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $subSpecCameraUsers
     *
     * @return $this
     */
	public function withSubSpecCameraUsers(array $subSpecCameraUsers)
	{
	    $this->data['SubSpecCameraUsers'] = $subSpecCameraUsers;
		foreach ($subSpecCameraUsers as $i => $iValue) {
			$this->options['query']['SubSpecCameraUsers.' . ($i + 1)] = $iValue;
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
     * @param array $unsubSpecCameraUsers
     *
     * @return $this
     */
	public function withUnsubSpecCameraUsers(array $unsubSpecCameraUsers)
	{
	    $this->data['UnsubSpecCameraUsers'] = $unsubSpecCameraUsers;
		foreach ($unsubSpecCameraUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecCameraUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $unsubSpecAudioUsers
     *
     * @return $this
     */
	public function withUnsubSpecAudioUsers(array $unsubSpecAudioUsers)
	{
	    $this->data['UnsubSpecAudioUsers'] = $unsubSpecAudioUsers;
		foreach ($unsubSpecAudioUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecAudioUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $unsubSpecShareScreenUsers
     *
     * @return $this
     */
	public function withUnsubSpecShareScreenUsers(array $unsubSpecShareScreenUsers)
	{
	    $this->data['UnsubSpecShareScreenUsers'] = $unsubSpecShareScreenUsers;
		foreach ($unsubSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecAudioUsers
     *
     * @return $this
     */
	public function withSubSpecAudioUsers(array $subSpecAudioUsers)
	{
	    $this->data['SubSpecAudioUsers'] = $subSpecAudioUsers;
		foreach ($subSpecAudioUsers as $i => $iValue) {
			$this->options['query']['SubSpecAudioUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecShareScreenUsers
     *
     * @return $this
     */
	public function withSubSpecShareScreenUsers(array $subSpecShareScreenUsers)
	{
	    $this->data['SubSpecShareScreenUsers'] = $subSpecShareScreenUsers;
		foreach ($subSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['SubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
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
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method array getChannelIdPrefixes()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getPlayDomain()
 * @method $this withPlayDomain($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getCallBack()
 * @method $this withCallBack($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getRuleId()
 * @method $this withRuleId($value)
 * @method array getChannelIds()
 */
class UpdateAutoLiveStreamRule extends Rpc
{

    /**
     * @param array $channelIdPrefixes
     *
     * @return $this
     */
	public function withChannelIdPrefixes(array $channelIdPrefixes)
	{
	    $this->data['ChannelIdPrefixes'] = $channelIdPrefixes;
		foreach ($channelIdPrefixes as $i => $iValue) {
			$this->options['query']['ChannelIdPrefixes.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $channelIds
     *
     * @return $this
     */
	public function withChannelIds(array $channelIds)
	{
	    $this->data['ChannelIds'] = $channelIds;
		foreach ($channelIds as $i => $iValue) {
			$this->options['query']['ChannelIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method array getClockWidgets()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method array getUnsubSpecCameraUsers()
 * @method array getUnsubSpecAudioUsers()
 * @method array getWatermarks()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method array getSubSpecAudioUsers()
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getEnhancedParam()
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method array getSubSpecCameraUsers()
 * @method string getTaskProfile()
 * @method $this withTaskProfile($value)
 * @method array getLayoutIds()
 * @method string getStreamType()
 * @method $this withStreamType($value)
 * @method array getUnsubSpecShareScreenUsers()
 * @method array getSubSpecShareScreenUsers()
 * @method array getSubSpecUsers()
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method array getBackgrounds()
 * @method string getMixMode()
 * @method $this withMixMode($value)
 */
class UpdateMPUTask extends Rpc
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
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
			}
			if(isset($depth1Value['SegmentType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SegmentType'] = $depth1Value['SegmentType'];
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $clockWidgets
     *
     * @return $this
     */
	public function withClockWidgets(array $clockWidgets)
	{
	    $this->data['ClockWidgets'] = $clockWidgets;
		foreach ($clockWidgets as $depth1 => $depth1Value) {
			if(isset($depth1Value['FontType'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontType'] = $depth1Value['FontType'];
			}
			if(isset($depth1Value['FontColor'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontColor'] = $depth1Value['FontColor'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['FontSize'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontSize'] = $depth1Value['FontSize'];
			}
		}

		return $this;
    }

    /**
     * @param array $unsubSpecCameraUsers
     *
     * @return $this
     */
	public function withUnsubSpecCameraUsers(array $unsubSpecCameraUsers)
	{
	    $this->data['UnsubSpecCameraUsers'] = $unsubSpecCameraUsers;
		foreach ($unsubSpecCameraUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecCameraUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $unsubSpecAudioUsers
     *
     * @return $this
     */
	public function withUnsubSpecAudioUsers(array $unsubSpecAudioUsers)
	{
	    $this->data['UnsubSpecAudioUsers'] = $unsubSpecAudioUsers;
		foreach ($unsubSpecAudioUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecAudioUsers.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
		}

		return $this;
    }

    /**
     * @param array $subSpecAudioUsers
     *
     * @return $this
     */
	public function withSubSpecAudioUsers(array $subSpecAudioUsers)
	{
	    $this->data['SubSpecAudioUsers'] = $subSpecAudioUsers;
		foreach ($subSpecAudioUsers as $i => $iValue) {
			$this->options['query']['SubSpecAudioUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnhancedParam($value)
    {
        $this->data['EnhancedParam'] = $value;
        $this->options['form_params']['EnhancedParam'] = $value;

        return $this;
    }

    /**
     * @param array $subSpecCameraUsers
     *
     * @return $this
     */
	public function withSubSpecCameraUsers(array $subSpecCameraUsers)
	{
	    $this->data['SubSpecCameraUsers'] = $subSpecCameraUsers;
		foreach ($subSpecCameraUsers as $i => $iValue) {
			$this->options['query']['SubSpecCameraUsers.' . ($i + 1)] = $iValue;
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
     * @param array $unsubSpecShareScreenUsers
     *
     * @return $this
     */
	public function withUnsubSpecShareScreenUsers(array $unsubSpecShareScreenUsers)
	{
	    $this->data['UnsubSpecShareScreenUsers'] = $unsubSpecShareScreenUsers;
		foreach ($unsubSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecShareScreenUsers
     *
     * @return $this
     */
	public function withSubSpecShareScreenUsers(array $subSpecShareScreenUsers)
	{
	    $this->data['SubSpecShareScreenUsers'] = $subSpecShareScreenUsers;
		foreach ($subSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['SubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
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
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
		}

		return $this;
    }
}

/**
 * @method array getUserPanes()
 * @method array getSubSpecCameraUsers()
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method array getUnsubSpecCameraUsers()
 * @method array getUnsubSpecAudioUsers()
 * @method array getUnsubSpecShareScreenUsers()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method array getSubSpecAudioUsers()
 * @method array getSubSpecShareScreenUsers()
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
			foreach ($depth1Value['Images'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['Width'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Width'] = $depth2Value['Width'];
				}
				if(isset($depth2Value['Height'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Height'] = $depth2Value['Height'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Url'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Url'] = $depth2Value['Url'];
				}
				if(isset($depth2Value['Display'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.Display'] = $depth2Value['Display'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Images.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
			}
			if(isset($depth1Value['UserId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
			}
			foreach ($depth1Value['Texts'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['FontType'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontType'] = $depth2Value['FontType'];
				}
				if(isset($depth2Value['FontColor'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontColor'] = $depth2Value['FontColor'];
				}
				if(isset($depth2Value['Y'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Y'] = $depth2Value['Y'];
				}
				if(isset($depth2Value['Text'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.Text'] = $depth2Value['Text'];
				}
				if(isset($depth2Value['ZOrder'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.ZOrder'] = $depth2Value['ZOrder'];
				}
				if(isset($depth2Value['X'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.X'] = $depth2Value['X'];
				}
				if(isset($depth2Value['FontSize'])){
					$this->options['query']['UserPanes.' . ($depth1 + 1) . '.Texts.' . ($depth2 + 1) . '.FontSize'] = $depth2Value['FontSize'];
				}
			}
			if(isset($depth1Value['SourceType'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.SourceType'] = $depth1Value['SourceType'];
			}
			if(isset($depth1Value['PaneId'])){
				$this->options['query']['UserPanes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
			}
		}

		return $this;
    }

    /**
     * @param array $subSpecCameraUsers
     *
     * @return $this
     */
	public function withSubSpecCameraUsers(array $subSpecCameraUsers)
	{
	    $this->data['SubSpecCameraUsers'] = $subSpecCameraUsers;
		foreach ($subSpecCameraUsers as $i => $iValue) {
			$this->options['query']['SubSpecCameraUsers.' . ($i + 1)] = $iValue;
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
     * @param array $unsubSpecCameraUsers
     *
     * @return $this
     */
	public function withUnsubSpecCameraUsers(array $unsubSpecCameraUsers)
	{
	    $this->data['UnsubSpecCameraUsers'] = $unsubSpecCameraUsers;
		foreach ($unsubSpecCameraUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecCameraUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $unsubSpecAudioUsers
     *
     * @return $this
     */
	public function withUnsubSpecAudioUsers(array $unsubSpecAudioUsers)
	{
	    $this->data['UnsubSpecAudioUsers'] = $unsubSpecAudioUsers;
		foreach ($unsubSpecAudioUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecAudioUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $unsubSpecShareScreenUsers
     *
     * @return $this
     */
	public function withUnsubSpecShareScreenUsers(array $unsubSpecShareScreenUsers)
	{
	    $this->data['UnsubSpecShareScreenUsers'] = $unsubSpecShareScreenUsers;
		foreach ($unsubSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['UnsubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecAudioUsers
     *
     * @return $this
     */
	public function withSubSpecAudioUsers(array $subSpecAudioUsers)
	{
	    $this->data['SubSpecAudioUsers'] = $subSpecAudioUsers;
		foreach ($subSpecAudioUsers as $i => $iValue) {
			$this->options['query']['SubSpecAudioUsers.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $subSpecShareScreenUsers
     *
     * @return $this
     */
	public function withSubSpecShareScreenUsers(array $subSpecShareScreenUsers)
	{
	    $this->data['SubSpecShareScreenUsers'] = $subSpecShareScreenUsers;
		foreach ($subSpecShareScreenUsers as $i => $iValue) {
			$this->options['query']['SubSpecShareScreenUsers.' . ($i + 1)] = $iValue;
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
 * @method array getClockWidgets()
 * @method string getShowLog()
 * @method $this withShowLog($value)
 * @method string getOssBucket()
 * @method $this withOssBucket($value)
 * @method string getDelayStopTime()
 * @method $this withDelayStopTime($value)
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
 * @method string getEnableM3u8DateTime()
 * @method $this withEnableM3u8DateTime($value)
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
     * @param array $clockWidgets
     *
     * @return $this
     */
	public function withClockWidgets(array $clockWidgets)
	{
	    $this->data['ClockWidgets'] = $clockWidgets;
		foreach ($clockWidgets as $depth1 => $depth1Value) {
			if(isset($depth1Value['FontType'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontType'] = $depth1Value['FontType'];
			}
			if(isset($depth1Value['FontColor'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontColor'] = $depth1Value['FontColor'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
			if(isset($depth1Value['FontSize'])){
				$this->options['query']['ClockWidgets.' . ($depth1 + 1) . '.FontSize'] = $depth1Value['FontSize'];
			}
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
			if(isset($depth1Value['Alpha'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Alpha'] = $depth1Value['Alpha'];
			}
			if(isset($depth1Value['Width'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Watermarks.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
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
			if(isset($depth1Value['Width'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
			}
			if(isset($depth1Value['Height'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
			}
			if(isset($depth1Value['Y'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
			}
			if(isset($depth1Value['Url'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Url'] = $depth1Value['Url'];
			}
			if(isset($depth1Value['Display'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.Display'] = $depth1Value['Display'];
			}
			if(isset($depth1Value['ZOrder'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
			}
			if(isset($depth1Value['X'])){
				$this->options['query']['Backgrounds.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
			}
		}

		return $this;
    }
}
