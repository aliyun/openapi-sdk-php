<?php

namespace AlibabaCloud\Rtc;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Rtc based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Rtc
 *
 * @method static V20180111\CreateChannel createChannel(array $options = [])
 * @method static V20180111\CreateChannelToken createChannelToken(array $options = [])
 * @method static V20180111\CreateConference createConference(array $options = [])
 * @method static V20180111\CreateTemplate createTemplate(array $options = [])
 * @method static V20180111\DeleteChannel deleteChannel(array $options = [])
 * @method static V20180111\DeleteConference deleteConference(array $options = [])
 * @method static V20180111\DeleteTemplate deleteTemplate(array $options = [])
 * @method static V20180111\DescribeApps describeApps(array $options = [])
 * @method static V20180111\DescribeConferenceAuthInfo describeConferenceAuthInfo(array $options = [])
 * @method static V20180111\DescribeRealTimeRecordDetail describeRealTimeRecordDetail(array $options = [])
 * @method static V20180111\DescribeRealTimeRecordList describeRealTimeRecordList(array $options = [])
 * @method static V20180111\DescribeRecordDetail describeRecordDetail(array $options = [])
 * @method static V20180111\DescribeRecordList describeRecordList(array $options = [])
 * @method static V20180111\DescribeStatis describeStatis(array $options = [])
 * @method static V20180111\GetAllTemplate getAllTemplate(array $options = [])
 * @method static V20180111\GetTaskParam getTaskParam(array $options = [])
 * @method static V20180111\GetTaskStatus getTaskStatus(array $options = [])
 * @method static V20180111\GetTemplateInfo getTemplateInfo(array $options = [])
 * @method static V20180111\ModifyApp modifyApp(array $options = [])
 * @method static V20180111\ModifyConference modifyConference(array $options = [])
 * @method static V20180111\MuteAudio muteAudio(array $options = [])
 * @method static V20180111\MuteAudioAll muteAudioAll(array $options = [])
 * @method static V20180111\RemoveParticipants removeParticipants(array $options = [])
 * @method static V20180111\RemoveTerminals removeTerminals(array $options = [])
 * @method static V20180111\StartApp startApp(array $options = [])
 * @method static V20180111\StartTask startTask(array $options = [])
 * @method static V20180111\StopApp stopApp(array $options = [])
 * @method static V20180111\StopTask stopTask(array $options = [])
 * @method static V20180111\UnmuteAudio unmuteAudio(array $options = [])
 * @method static V20180111\UnmuteAudioAll unmuteAudioAll(array $options = [])
 * @method static V20180111\UpdateChannel updateChannel(array $options = [])
 * @method static V20180111\UpdateTaskParam updateTaskParam(array $options = [])
 */
class RtcV20180111
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Rtc\\V20180111';
}
