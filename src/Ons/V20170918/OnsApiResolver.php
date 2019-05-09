<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method OnsMqttGroupIdCreate onsMqttGroupIdCreate(array $options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps(array $options = [])
 * @method OnsMqttGroupIdList onsMqttGroupIdList(array $options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey(array $options = [])
 * @method OnsTopicSearch onsTopicSearch(array $options = [])
 * @method OnsEmpowerDelete onsEmpowerDelete(array $options = [])
 * @method OnsSubscriptionGet onsSubscriptionGet(array $options = [])
 * @method OnsPublishCreate onsPublishCreate(array $options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection(array $options = [])
 * @method OnsMessageTrace onsMessageTrace(array $options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId(array $options = [])
 * @method OnsWarnCreate onsWarnCreate(array $options = [])
 * @method OnsEmpowerCreate onsEmpowerCreate(array $options = [])
 * @method OnsWarnDelete onsWarnDelete(array $options = [])
 * @method OnsSubscriptionCreate onsSubscriptionCreate(array $options = [])
 * @method OnsEmpowerList onsEmpowerList(array $options = [])
 * @method OnsRegionList onsRegionList(array $options = [])
 * @method OnsPublishDelete onsPublishDelete(array $options = [])
 * @method OnsTopicStatus onsTopicStatus(array $options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId(array $options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps(array $options = [])
 * @method OnsMessagePush onsMessagePush(array $options = [])
 * @method OnsPublishList onsPublishList(array $options = [])
 * @method OnsSubscriptionSearch onsSubscriptionSearch(array $options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey(array $options = [])
 * @method OnsMqttQueryClientByClientId onsMqttQueryClientByClientId(array $options = [])
 * @method OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId(array $options = [])
 * @method OnsPublishSearch onsPublishSearch(array $options = [])
 * @method OnsConsumerStatus onsConsumerStatus(array $options = [])
 * @method OnsTopicList onsTopicList(array $options = [])
 * @method OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline(array $options = [])
 * @method OnsTopicDelete onsTopicDelete(array $options = [])
 * @method OnsPublishGet onsPublishGet(array $options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan(array $options = [])
 * @method OnsMqttQueryClientByTopic onsMqttQueryClientByTopic(array $options = [])
 * @method OnsMqttQueryMsgByPubInfo onsMqttQueryMsgByPubInfo(array $options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic(array $options = [])
 * @method OnsTopicCreate onsTopicCreate(array $options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate(array $options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset(array $options = [])
 * @method OnsMqttQueryTraceByTraceId onsMqttQueryTraceByTraceId(array $options = [])
 * @method OnsSubscriptionDelete onsSubscriptionDelete(array $options = [])
 * @method OnsSubscriptionList onsSubscriptionList(array $options = [])
 * @method OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend(array $options = [])
 * @method OnsMessageSend onsMessageSend(array $options = [])
 * @method OnsTraceGetResult onsTraceGetResult(array $options = [])
 * @method OnsSubscriptionUpdate onsSubscriptionUpdate(array $options = [])
 * @method OnsTopicUpdate onsTopicUpdate(array $options = [])
 * @method OnsTopicGet onsTopicGet(array $options = [])
 */
class OnsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ons';

    /** @var string */
    public $version = '2017-09-18';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsMqttGroupIdList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsTopicSearch extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getEmpowerUser()
 * @method $this withEmpowerUser($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsEmpowerDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsSubscriptionGet extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class OnsPublishCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 */
class OnsConsumerGetConnection extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getBlockTime()
 * @method $this withBlockTime($value)
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getEmpowerUser()
 * @method $this withEmpowerUser($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRelation()
 * @method $this withRelation($value)
 */
class OnsEmpowerCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsWarnDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsSubscriptionCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getEmpowerUser()
 * @method $this withEmpowerUser($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsEmpowerList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsRegionList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class OnsPublishDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicStatus extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsPublishList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsSubscriptionSearch extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsMqttQueryClientByClientId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class OnsMqttQueryClientByGroupId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getSearch()
 * @method $this withSearch($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsPublishSearch extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getNeedJstack()
 * @method $this withNeedJstack($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerStatus extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class OnsPublishGet extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsConsumerTimeSpan extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 */
class OnsMqttQueryMsgByPubInfo extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getCluster()
 * @method $this withCluster($value)
 * @method string getQueueNum()
 * @method $this withQueueNum($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getAppName()
 * @method $this withAppName($value)
 * @method string getQps()
 * @method $this withQps($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getAppkey()
 * @method $this withAppkey($value)
 * @method string getOrder()
 * @method $this withOrder($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class OnsTopicCreate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerAccumulate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
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
 * @method string getTraceId()
 * @method $this withTraceId($value)
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMqttQueryTraceByTraceId extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsSubscriptionDelete extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 */
class OnsSubscriptionList extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class OnsTraceGetResult extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getReadEnable()
 * @method $this withReadEnable($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 */
class OnsSubscriptionUpdate extends Rpc
{
}

/**
 * @method string getPreventCache()
 * @method $this withPreventCache($value)
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
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
 * @method string getOnsRegionId()
 * @method $this withOnsRegionId($value)
 * @method string getOnsPlatform()
 * @method $this withOnsPlatform($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicGet extends Rpc
{
}
