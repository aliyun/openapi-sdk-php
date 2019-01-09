<?php

namespace AlibabaCloud\Rtc\V20180111;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Rtc based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Rtc\V20180111
 *
 * @method CreateChannel createChannel(array $options = [])
 * @method CreateChannelToken createChannelToken(array $options = [])
 * @method CreateConference createConference(array $options = [])
 * @method CreateTemplate createTemplate(array $options = [])
 * @method DeleteChannel deleteChannel(array $options = [])
 * @method DeleteConference deleteConference(array $options = [])
 * @method DeleteTemplate deleteTemplate(array $options = [])
 * @method DescribeApps describeApps(array $options = [])
 * @method DescribeConferenceAuthInfo describeConferenceAuthInfo(array $options = [])
 * @method DescribeRealTimeRecordDetail describeRealTimeRecordDetail(array $options = [])
 * @method DescribeRealTimeRecordList describeRealTimeRecordList(array $options = [])
 * @method DescribeRecordDetail describeRecordDetail(array $options = [])
 * @method DescribeRecordList describeRecordList(array $options = [])
 * @method DescribeStatis describeStatis(array $options = [])
 * @method GetAllTemplate getAllTemplate(array $options = [])
 * @method GetTaskParam getTaskParam(array $options = [])
 * @method GetTaskStatus getTaskStatus(array $options = [])
 * @method GetTemplateInfo getTemplateInfo(array $options = [])
 * @method ModifyApp modifyApp(array $options = [])
 * @method ModifyConference modifyConference(array $options = [])
 * @method MuteAudio muteAudio(array $options = [])
 * @method MuteAudioAll muteAudioAll(array $options = [])
 * @method RemoveParticipants removeParticipants(array $options = [])
 * @method RemoveTerminals removeTerminals(array $options = [])
 * @method StartApp startApp(array $options = [])
 * @method StartTask startTask(array $options = [])
 * @method StopApp stopApp(array $options = [])
 * @method StopTask stopTask(array $options = [])
 * @method UnmuteAudio unmuteAudio(array $options = [])
 * @method UnmuteAudioAll unmuteAudioAll(array $options = [])
 * @method UpdateChannel updateChannel(array $options = [])
 * @method UpdateTaskParam updateTaskParam(array $options = [])
 */
class RtcApiResolver
{
    use ApiResolverTrait;
}
