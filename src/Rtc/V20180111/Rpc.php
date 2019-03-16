<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withPanes(array $value)
    {
        $this->data['Panes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Panes.' . ($i + 1) . '.PaneId'] = $value[$i]['PaneId'];
            $this->options['query']['Panes.' . ($i + 1) . '.MajorPane'] = $value[$i]['MajorPane'];
            $this->options['query']['Panes.' . ($i + 1) . '.X'] = $value[$i]['X'];
            $this->options['query']['Panes.' . ($i + 1) . '.Y'] = $value[$i]['Y'];
            $this->options['query']['Panes.' . ($i + 1) . '.Width'] = $value[$i]['Width'];
            $this->options['query']['Panes.' . ($i + 1) . '.Height'] = $value[$i]['Height'];
            $this->options['query']['Panes.' . ($i + 1) . '.ZOrder'] = $value[$i]['ZOrder'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withUserPanes(array $value)
    {
        $this->data['UserPanes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserPanes.' . ($i + 1) . '.PaneId'] = $value[$i]['PaneId'];
            $this->options['query']['UserPanes.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['UserPanes.' . ($i + 1) . '.SourceType'] = $value[$i]['SourceType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLayoutIds(array $value)
    {
        $this->data['LayoutIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withLiveConfig(array $value)
    {
        $this->data['LiveConfig'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['LiveConfig.' . ($i + 1) . '.DomainName'] = $value[$i]['DomainName'];
            $this->options['query']['LiveConfig.' . ($i + 1) . '.AppName'] = $value[$i]['AppName'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withRecordConfig(array $value)
    {
        $this->data['RecordConfig'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['RecordConfig.' . ($i + 1) . '.StorageType'] = $value[$i]['StorageType'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.FileFormat'] = $value[$i]['FileFormat'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.OssEndPoint'] = $value[$i]['OssEndPoint'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.OssBucket'] = $value[$i]['OssBucket'];
            $this->options['query']['RecordConfig.' . ($i + 1) . '.VodTransCodeGroupId'] = $value[$i]['VodTransCodeGroupId'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLayOut(array $value)
    {
        $this->data['LayOut'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['LayOut.' . ($i + 1) . '.Color'] = $value[$i]['Color'];
            $this->options['query']['LayOut.' . ($i + 1) . '.CutMode'] = $value[$i]['CutMode'];
            $this->options['query']['LayOut.' . ($i + 1) . '.LayOutId'] = $value[$i]['LayOutId'];
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
     * @param array $value
     *
     * @return $this
     */
    public function withUserPanes(array $value)
    {
        $this->data['UserPanes'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['UserPanes.' . ($i + 1) . '.PaneId'] = $value[$i]['PaneId'];
            $this->options['query']['UserPanes.' . ($i + 1) . '.UserId'] = $value[$i]['UserId'];
            $this->options['query']['UserPanes.' . ($i + 1) . '.SourceType'] = $value[$i]['SourceType'];
        }

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function withLayoutIds(array $value)
    {
        $this->data['LayoutIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withTerminalIds(array $value)
    {
        $this->data['TerminalIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withParticipantIds(array $value)
    {
        $this->data['ParticipantIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withParticipantIds(array $value)
    {
        $this->data['ParticipantIds'] = $value;
        foreach ($value as $i => $iValue) {
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
     * @param array $value
     *
     * @return $this
     */
    public function withParticipantIds(array $value)
    {
        $this->data['ParticipantIds'] = $value;
        foreach ($value as $i => $iValue) {
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
