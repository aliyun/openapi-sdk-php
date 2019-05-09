<?php

namespace AlibabaCloud\Ons\V20190214;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method OnsGroupSubDetail onsGroupSubDetail(array $options = [])
 * @method OnsTopicSubDetail onsTopicSubDetail(array $options = [])
 * @method OnsDLQMessageGetById onsDLQMessageGetById(array $options = [])
 * @method OnsDLQMessagePageQueryByGroupId onsDLQMessagePageQueryByGroupId(array $options = [])
 * @method OnsDLQMessageResendById onsDLQMessageResendById(array $options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate(array $options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection(array $options = [])
 * @method OnsConsumerStatus onsConsumerStatus(array $options = [])
 * @method OnsGroupConsumerUpdate onsGroupConsumerUpdate(array $options = [])
 * @method OnsGroupDelete onsGroupDelete(array $options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset(array $options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan(array $options = [])
 * @method OnsGroupCreate onsGroupCreate(array $options = [])
 * @method OnsInstanceBaseInfo onsInstanceBaseInfo(array $options = [])
 * @method OnsGroupList onsGroupList(array $options = [])
 * @method OnsInstanceCreate onsInstanceCreate(array $options = [])
 * @method OnsInstanceDelete onsInstanceDelete(array $options = [])
 * @method OnsInstanceInServiceList onsInstanceInServiceList(array $options = [])
 * @method OnsInstanceUpdate onsInstanceUpdate(array $options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey(array $options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId(array $options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic(array $options = [])
 * @method OnsMessageTrace onsMessageTrace(array $options = [])
 * @method OnsMessagePush onsMessagePush(array $options = [])
 * @method OnsMessageSend onsMessageSend(array $options = [])
 * @method OnsMqttGroupIdCreate onsMqttGroupIdCreate(array $options = [])
 * @method OnsMqttGroupIdDelete onsMqttGroupIdDelete(array $options = [])
 * @method OnsMqttGroupIdList onsMqttGroupIdList(array $options = [])
 * @method OnsMqttQueryClientByClientId onsMqttQueryClientByClientId(array $options = [])
 * @method OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId(array $options = [])
 * @method OnsMqttQueryClientByTopic onsMqttQueryClientByTopic(array $options = [])
 * @method OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline(array $options = [])
 * @method OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend(array $options = [])
 * @method OnsRegionList onsRegionList(array $options = [])
 * @method OnsTopicCreate onsTopicCreate(array $options = [])
 * @method OnsTopicDelete onsTopicDelete(array $options = [])
 * @method OnsTopicList onsTopicList(array $options = [])
 * @method OnsTopicStatus onsTopicStatus(array $options = [])
 * @method OnsTopicUpdate onsTopicUpdate(array $options = [])
 * @method OnsTraceGetResult onsTraceGetResult(array $options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId(array $options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey(array $options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps(array $options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps(array $options = [])
 * @method OnsWarnCreate onsWarnCreate(array $options = [])
 * @method OnsWarnDelete onsWarnDelete(array $options = [])
 */
class OnsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ons';

    /** @var string */
    public $version = '2019-02-14';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ons';
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsGroupSubDetail extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicSubDetail extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 */
class OnsDLQMessageGetById extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class OnsDLQMessagePageQueryByGroupId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 */
class OnsDLQMessageResendById extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerAccumulate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsConsumerGetConnection extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNeedJstack()
 * @method $this withNeedJstack($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerStatus extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getReadEnable()
 * @method $this withReadEnable($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsGroupConsumerUpdate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsGroupDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getResetTimestamp()
 * @method $this withResetTimestamp($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OnsConsumerResetOffset extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsConsumerTimeSpan extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class OnsGroupCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsInstanceBaseInfo extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsGroupList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class OnsInstanceCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsInstanceDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 */
class OnsInstanceInServiceList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class OnsInstanceUpdate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class OnsMessageGetByKey extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMessageGetByMsgId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class OnsMessagePageQueryByTopic extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 */
class OnsMessageTrace extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMessagePush extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class OnsMessageSend extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMqttGroupIdCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsMqttGroupIdDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttGroupIdList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttQueryClientByClientId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsMqttQueryClientByGroupId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getParentTopic()
 * @method $this withParentTopic($value)
 * @method string getSubTopic()
 * @method $this withSubTopic($value)
 */
class OnsMqttQueryClientByTopic extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 */
class OnsMqttQueryHistoryOnline extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getTransType()
 * @method $this withTransType($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getTpsType()
 * @method $this withTpsType($value)
 * @method string getParentTopic()
 * @method $this withParentTopic($value)
 * @method string getMsgType()
 * @method $this withMsgType($value)
 * @method string getSubTopic()
 * @method $this withSubTopic($value)
 */
class OnsMqttQueryMsgTransTrend extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 */
class OnsRegionList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class OnsTopicCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicStatus extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPerm()
 * @method $this withPerm($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicUpdate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class OnsTraceGetResult extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 */
class OnsTraceQueryByMsgId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getMsgKey()
 * @method $this withMsgKey($value)
 */
class OnsTraceQueryByMsgKey extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OnsTrendGroupOutputTps extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getType()
 * @method $this withType($value)
 */
class OnsTrendTopicInputTps extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBlockTime()
 * @method $this withBlockTime($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getAlertTime()
 * @method $this withAlertTime($value)
 * @method string getContacts()
 * @method $this withContacts($value)
 */
class OnsWarnCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsWarnDelete extends Rpc
{
}
