<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method CreateMPULayout createMPULayout(array $options = [])
 * @method DeleteMPULayout deleteMPULayout(array $options = [])
 * @method GetMPUAllLayoutId getMPUAllLayoutId(array $options = [])
 * @method GetMPULayoutInfo getMPULayoutInfo(array $options = [])
 * @method GetMPUTaskParam getMPUTaskParam(array $options = [])
 * @method GetMPUTaskStatus getMPUTaskStatus(array $options = [])
 * @method StartMPUTask startMPUTask(array $options = [])
 * @method StopMPUTask stopMPUTask(array $options = [])
 * @method DescribeRtcChannelCntData describeRtcChannelCntData(array $options = [])
 * @method DescribeRtcDurationData describeRtcDurationData(array $options = [])
 * @method DescribeRtcPeakChannelCntData describeRtcPeakChannelCntData(array $options = [])
 * @method DescribeRtcPeakUserCntData describeRtcPeakUserCntData(array $options = [])
 * @method DescribeRtcUserCntData describeRtcUserCntData(array $options = [])
 * @method ReceiveNotify receiveNotify(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method StopTask stopTask(array $options = [])
 * @method StartTask startTask(array $options = [])
 * @method RemoveTerminals removeTerminals(array $options = [])
 * @method CreateChannelToken createChannelToken(array $options = [])
 * @method UpdateChannel updateChannel(array $options = [])
 * @method DeleteChannel deleteChannel(array $options = [])
 * @method CreateChannel createChannel(array $options = [])
 * @method RemoveParticipants removeParticipants(array $options = [])
 * @method DescribeStatis describeStatis(array $options = [])
 * @method DescribeRecordDetail describeRecordDetail(array $options = [])
 * @method DescribeRecordList describeRecordList(array $options = [])
 * @method DescribeRealTimeRecordList describeRealTimeRecordList(array $options = [])
 * @method DescribeRealTimeRecordDetail describeRealTimeRecordDetail(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method DescribeConferenceAuthInfo describeConferenceAuthInfo(array $options = [])
 * @method ModifyConference modifyConference(array $options = [])
 * @method UnmuteAudioAll unmuteAudioAll(array $options = [])
 * @method UnmuteAudio unmuteAudio(array $options = [])
 * @method MuteAudioAll muteAudioAll(array $options = [])
 * @method MuteAudio muteAudio(array $options = [])
 * @method DeleteConference deleteConference(array $options = [])
 * @method CreateConference createConference(array $options = [])
 */
class RtcApiResolver
{
    use ApiResolverTrait;
}

class V20180111Rpc extends Rpc
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
 * @method string getCropMode()
 * @method $this withCropMode($value)
 * @method array getPanes()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getAudioMixCount()
 * @method $this withAudioMixCount($value)
 */
class CreateMPULayout extends V20180111Rpc
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
            $this->options['query']['Panes.' . ($depth1 + 1) . '.PaneId'] = $depth1Value['PaneId'];
            $this->options['query']['Panes.' . ($depth1 + 1) . '.MajorPane'] = $depth1Value['MajorPane'];
            $this->options['query']['Panes.' . ($depth1 + 1) . '.X'] = $depth1Value['X'];
            $this->options['query']['Panes.' . ($depth1 + 1) . '.Y'] = $depth1Value['Y'];
            $this->options['query']['Panes.' . ($depth1 + 1) . '.Width'] = $depth1Value['Width'];
            $this->options['query']['Panes.' . ($depth1 + 1) . '.Height'] = $depth1Value['Height'];
            $this->options['query']['Panes.' . ($depth1 + 1) . '.ZOrder'] = $depth1Value['ZOrder'];
        }

        return $this;
    }
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteMPULayout extends V20180111Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetMPUAllLayoutId extends V20180111Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getLayoutId()
 * @method $this withLayoutId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class GetMPULayoutInfo extends V20180111Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetMPUTaskParam extends V20180111Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetMPUTaskStatus extends V20180111Rpc
{
}

/**
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StartMPUTask extends V20180111Rpc
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

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopMPUTask extends V20180111Rpc
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
class DescribeRtcChannelCntData extends V20180111Rpc
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
class DescribeRtcDurationData extends V20180111Rpc
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
class DescribeRtcPeakChannelCntData extends V20180111Rpc
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
class DescribeRtcPeakUserCntData extends V20180111Rpc
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
class DescribeRtcUserCntData extends V20180111Rpc
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
class ReceiveNotify extends V20180111Rpc
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
class CreateTemplate extends V20180111Rpc
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
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class StopTask extends V20180111Rpc
{
}

/**
 * @method array getUserPanes()
 * @method string getBackgroundColor()
 * @method $this withBackgroundColor($value)
 * @method array getLayoutIds()
 * @method string getTaskId()
 * @method $this withTaskId($value)
 * @method string getStreamURL()
 * @method $this withStreamURL($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getMediaEncode()
 * @method $this withMediaEncode($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class StartTask extends V20180111Rpc
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

/**
 * @method array getTerminalIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class RemoveTerminals extends V20180111Rpc
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
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getUId()
 * @method $this withUId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getNonce()
 * @method $this withNonce($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class CreateChannelToken extends V20180111Rpc
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
class UpdateChannel extends V20180111Rpc
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
class DeleteChannel extends V20180111Rpc
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
class CreateChannel extends V20180111Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class RemoveParticipants extends V20180111Rpc
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
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getDataType()
 * @method $this withDataType($value)
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
class DescribeStatis extends V20180111Rpc
{
}

/**
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRecordDetail extends V20180111Rpc
{
}

/**
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getServiceArea()
 * @method $this withServiceArea($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getIdType()
 * @method $this withIdType($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DescribeRecordList extends V20180111Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class DescribeRealTimeRecordList extends V20180111Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecordId()
 * @method $this withRecordId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class DescribeRealTimeRecordDetail extends V20180111Rpc
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
class DescribeApps extends V20180111Rpc
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
class ModifyApp extends V20180111Rpc
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
class DescribeConferenceAuthInfo extends V20180111Rpc
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
class ModifyConference extends V20180111Rpc
{
}

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParticipantId()
 * @method $this withParticipantId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UnmuteAudioAll extends V20180111Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class UnmuteAudio extends V20180111Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getParticipantId()
 * @method $this withParticipantId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class MuteAudioAll extends V20180111Rpc
{
}

/**
 * @method array getParticipantIds()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class MuteAudio extends V20180111Rpc
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
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getConferenceId()
 * @method $this withConferenceId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class DeleteConference extends V20180111Rpc
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
class CreateConference extends V20180111Rpc
{
}
