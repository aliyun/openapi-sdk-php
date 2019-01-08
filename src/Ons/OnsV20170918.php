<?php

namespace AlibabaCloud\Ons;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Ons based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Ons
 *
 * @method static V20170918\OnsConsumerAccumulate onsConsumerAccumulate(array $options = [])
 * @method static V20170918\OnsConsumerGetConnection onsConsumerGetConnection(array $options = [])
 * @method static V20170918\OnsConsumerResetOffset onsConsumerResetOffset(array $options = [])
 * @method static V20170918\OnsConsumerStatus onsConsumerStatus(array $options = [])
 * @method static V20170918\OnsConsumerTimeSpan onsConsumerTimeSpan(array $options = [])
 * @method static V20170918\OnsEmpowerCreate onsEmpowerCreate(array $options = [])
 * @method static V20170918\OnsEmpowerDelete onsEmpowerDelete(array $options = [])
 * @method static V20170918\OnsEmpowerList onsEmpowerList(array $options = [])
 * @method static V20170918\OnsMessageGetByKey onsMessageGetByKey(array $options = [])
 * @method static V20170918\OnsMessageGetByMsgId onsMessageGetByMsgId(array $options = [])
 * @method static V20170918\OnsMessagePageQueryByTopic onsMessagePageQueryByTopic(array $options = [])
 * @method static V20170918\OnsMessagePush onsMessagePush(array $options = [])
 * @method static V20170918\OnsMessageSend onsMessageSend(array $options = [])
 * @method static V20170918\OnsMessageTrace onsMessageTrace(array $options = [])
 * @method static V20170918\OnsMqttGroupIdCreate onsMqttGroupIdCreate(array $options = [])
 * @method static V20170918\OnsMqttGroupIdList onsMqttGroupIdList(array $options = [])
 * @method static V20170918\OnsMqttQueryClientByClientId onsMqttQueryClientByClientId(array $options = [])
 * @method static V20170918\OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId(array $options = [])
 * @method static V20170918\OnsMqttQueryClientByTopic onsMqttQueryClientByTopic(array $options = [])
 * @method static V20170918\OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline(array $options = [])
 * @method static V20170918\OnsMqttQueryMsgByPubInfo onsMqttQueryMsgByPubInfo(array $options = [])
 * @method static V20170918\OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend(array $options = [])
 * @method static V20170918\OnsMqttQueryTraceByTraceId onsMqttQueryTraceByTraceId(array $options = [])
 * @method static V20170918\OnsPublishCreate onsPublishCreate(array $options = [])
 * @method static V20170918\OnsPublishDelete onsPublishDelete(array $options = [])
 * @method static V20170918\OnsPublishGet onsPublishGet(array $options = [])
 * @method static V20170918\OnsPublishList onsPublishList(array $options = [])
 * @method static V20170918\OnsPublishSearch onsPublishSearch(array $options = [])
 * @method static V20170918\OnsRegionList onsRegionList(array $options = [])
 * @method static V20170918\OnsSubscriptionCreate onsSubscriptionCreate(array $options = [])
 * @method static V20170918\OnsSubscriptionDelete onsSubscriptionDelete(array $options = [])
 * @method static V20170918\OnsSubscriptionGet onsSubscriptionGet(array $options = [])
 * @method static V20170918\OnsSubscriptionList onsSubscriptionList(array $options = [])
 * @method static V20170918\OnsSubscriptionSearch onsSubscriptionSearch(array $options = [])
 * @method static V20170918\OnsSubscriptionUpdate onsSubscriptionUpdate(array $options = [])
 * @method static V20170918\OnsTopicCreate onsTopicCreate(array $options = [])
 * @method static V20170918\OnsTopicDelete onsTopicDelete(array $options = [])
 * @method static V20170918\OnsTopicGet onsTopicGet(array $options = [])
 * @method static V20170918\OnsTopicList onsTopicList(array $options = [])
 * @method static V20170918\OnsTopicSearch onsTopicSearch(array $options = [])
 * @method static V20170918\OnsTopicStatus onsTopicStatus(array $options = [])
 * @method static V20170918\OnsTopicUpdate onsTopicUpdate(array $options = [])
 * @method static V20170918\OnsTraceGetResult onsTraceGetResult(array $options = [])
 * @method static V20170918\OnsTraceQueryByMsgId onsTraceQueryByMsgId(array $options = [])
 * @method static V20170918\OnsTraceQueryByMsgKey onsTraceQueryByMsgKey(array $options = [])
 * @method static V20170918\OnsTrendGroupOutputTps onsTrendGroupOutputTps(array $options = [])
 * @method static V20170918\OnsTrendTopicInputTps onsTrendTopicInputTps(array $options = [])
 * @method static V20170918\OnsWarnCreate onsWarnCreate(array $options = [])
 * @method static V20170918\OnsWarnDelete onsWarnDelete(array $options = [])
 */
class OnsV20170918
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Ons\\V20170918';
}
