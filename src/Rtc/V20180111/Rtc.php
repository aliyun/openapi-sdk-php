<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Rtc based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Rtc\V20180111
 *
 * @method static CreateChannel createChannel(array $options = [])
 * @method static CreateChannelToken createChannelToken(array $options = [])
 * @method static CreateConference createConference(array $options = [])
 * @method static CreateTemplate createTemplate(array $options = [])
 * @method static DeleteChannel deleteChannel(array $options = [])
 * @method static DeleteConference deleteConference(array $options = [])
 * @method static DeleteTemplate deleteTemplate(array $options = [])
 * @method static DescribeApps describeApps(array $options = [])
 * @method static DescribeConferenceAuthInfo describeConferenceAuthInfo(array $options = [])
 * @method static DescribeRealTimeRecordDetail describeRealTimeRecordDetail(array $options = [])
 * @method static DescribeRealTimeRecordList describeRealTimeRecordList(array $options = [])
 * @method static DescribeRecordDetail describeRecordDetail(array $options = [])
 * @method static DescribeRecordList describeRecordList(array $options = [])
 * @method static DescribeStatis describeStatis(array $options = [])
 * @method static GetAllTemplate getAllTemplate(array $options = [])
 * @method static GetTaskParam getTaskParam(array $options = [])
 * @method static GetTaskStatus getTaskStatus(array $options = [])
 * @method static GetTemplateInfo getTemplateInfo(array $options = [])
 * @method static ModifyApp modifyApp(array $options = [])
 * @method static ModifyConference modifyConference(array $options = [])
 * @method static MuteAudio muteAudio(array $options = [])
 * @method static MuteAudioAll muteAudioAll(array $options = [])
 * @method static RemoveParticipants removeParticipants(array $options = [])
 * @method static RemoveTerminals removeTerminals(array $options = [])
 * @method static RtcApiResolver rtcApiResolver(array $options = [])
 * @method static StartApp startApp(array $options = [])
 * @method static StartTask startTask(array $options = [])
 * @method static StopApp stopApp(array $options = [])
 * @method static StopTask stopTask(array $options = [])
 * @method static UnmuteAudio unmuteAudio(array $options = [])
 * @method static UnmuteAudioAll unmuteAudioAll(array $options = [])
 * @method static UpdateChannel updateChannel(array $options = [])
 * @method static UpdateTaskParam updateTaskParam(array $options = [])
 */
class Rtc
{
    use ApiResolverTrait;
}
