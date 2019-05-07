<?php

namespace AlibabaCloud\Ons\V20170918;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method OnsMqttGroupIdCreate onsMqttGroupIdCreate(array $options = [])
 * @method OnsPublishCreate onsPublishCreate(array $options = [])
 * @method OnsEmpowerDelete onsEmpowerDelete(array $options = [])
 * @method OnsEmpowerCreate onsEmpowerCreate(array $options = [])
 * @method OnsWarnCreate onsWarnCreate(array $options = [])
 * @method OnsPublishDelete onsPublishDelete(array $options = [])
 * @method OnsSubscriptionCreate onsSubscriptionCreate(array $options = [])
 * @method OnsWarnDelete onsWarnDelete(array $options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId(array $options = [])
 * @method OnsConsumerStatus onsConsumerStatus(array $options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey(array $options = [])
 * @method OnsTopicDelete onsTopicDelete(array $options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset(array $options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate(array $options = [])
 * @method OnsTopicCreate onsTopicCreate(array $options = [])
 * @method OnsSubscriptionDelete onsSubscriptionDelete(array $options = [])
 * @method OnsSubscriptionUpdate onsSubscriptionUpdate(array $options = [])
 * @method OnsTraceGetResult onsTraceGetResult(array $options = [])
 * @method OnsTopicUpdate onsTopicUpdate(array $options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey(array $options = [])
 * @method OnsMqttGroupIdList onsMqttGroupIdList(array $options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps(array $options = [])
 * @method OnsSubscriptionGet onsSubscriptionGet(array $options = [])
 * @method OnsTopicSearch onsTopicSearch(array $options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId(array $options = [])
 * @method OnsMessageTrace onsMessageTrace(array $options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection(array $options = [])
 * @method OnsRegionList onsRegionList(array $options = [])
 * @method OnsEmpowerList onsEmpowerList(array $options = [])
 * @method OnsPublishList onsPublishList(array $options = [])
 * @method OnsMessagePush onsMessagePush(array $options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps(array $options = [])
 * @method OnsTopicStatus onsTopicStatus(array $options = [])
 * @method OnsMqttQueryClientByGroupId onsMqttQueryClientByGroupId(array $options = [])
 * @method OnsMqttQueryClientByClientId onsMqttQueryClientByClientId(array $options = [])
 * @method OnsSubscriptionSearch onsSubscriptionSearch(array $options = [])
 * @method OnsMqttQueryHistoryOnline onsMqttQueryHistoryOnline(array $options = [])
 * @method OnsTopicList onsTopicList(array $options = [])
 * @method OnsPublishSearch onsPublishSearch(array $options = [])
 * @method OnsMqttQueryClientByTopic onsMqttQueryClientByTopic(array $options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan(array $options = [])
 * @method OnsPublishGet onsPublishGet(array $options = [])
 * @method OnsMqttQueryMsgByPubInfo onsMqttQueryMsgByPubInfo(array $options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic(array $options = [])
 * @method OnsSubscriptionList onsSubscriptionList(array $options = [])
 * @method OnsMqttQueryTraceByTraceId onsMqttQueryTraceByTraceId(array $options = [])
 * @method OnsMessageSend onsMessageSend(array $options = [])
 * @method OnsMqttQueryMsgTransTrend onsMqttQueryMsgTransTrend(array $options = [])
 * @method OnsTopicGet onsTopicGet(array $options = [])
 */
class OnsApiResolver
{
    use ApiResolverTrait;
}

class V20170918Rpc extends Rpc
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
class OnsMqttGroupIdCreate extends V20170918Rpc
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
class OnsPublishCreate extends V20170918Rpc
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
class OnsEmpowerDelete extends V20170918Rpc
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
class OnsEmpowerCreate extends V20170918Rpc
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
class OnsWarnCreate extends V20170918Rpc
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
class OnsPublishDelete extends V20170918Rpc
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
class OnsSubscriptionCreate extends V20170918Rpc
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
class OnsWarnDelete extends V20170918Rpc
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
class OnsTraceQueryByMsgId extends V20170918Rpc
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
class OnsConsumerStatus extends V20170918Rpc
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
class OnsTraceQueryByMsgKey extends V20170918Rpc
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
class OnsTopicDelete extends V20170918Rpc
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
class OnsConsumerResetOffset extends V20170918Rpc
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
class OnsConsumerAccumulate extends V20170918Rpc
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
class OnsTopicCreate extends V20170918Rpc
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
class OnsSubscriptionDelete extends V20170918Rpc
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
class OnsSubscriptionUpdate extends V20170918Rpc
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
class OnsTraceGetResult extends V20170918Rpc
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
class OnsTopicUpdate extends V20170918Rpc
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
class OnsMessageGetByKey extends V20170918Rpc
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
class OnsMqttGroupIdList extends V20170918Rpc
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
class OnsTrendTopicInputTps extends V20170918Rpc
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
class OnsSubscriptionGet extends V20170918Rpc
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
class OnsTopicSearch extends V20170918Rpc
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
class OnsMessageGetByMsgId extends V20170918Rpc
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
class OnsMessageTrace extends V20170918Rpc
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
class OnsConsumerGetConnection extends V20170918Rpc
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
class OnsRegionList extends V20170918Rpc
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
class OnsEmpowerList extends V20170918Rpc
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
class OnsPublishList extends V20170918Rpc
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
class OnsMessagePush extends V20170918Rpc
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
class OnsTrendGroupOutputTps extends V20170918Rpc
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
class OnsTopicStatus extends V20170918Rpc
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
class OnsMqttQueryClientByGroupId extends V20170918Rpc
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
class OnsMqttQueryClientByClientId extends V20170918Rpc
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
class OnsSubscriptionSearch extends V20170918Rpc
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
class OnsMqttQueryHistoryOnline extends V20170918Rpc
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
class OnsTopicList extends V20170918Rpc
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
class OnsPublishSearch extends V20170918Rpc
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
class OnsMqttQueryClientByTopic extends V20170918Rpc
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
class OnsConsumerTimeSpan extends V20170918Rpc
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
class OnsPublishGet extends V20170918Rpc
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
class OnsMqttQueryMsgByPubInfo extends V20170918Rpc
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
class OnsMessagePageQueryByTopic extends V20170918Rpc
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
class OnsSubscriptionList extends V20170918Rpc
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
class OnsMqttQueryTraceByTraceId extends V20170918Rpc
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
class OnsMessageSend extends V20170918Rpc
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
class OnsMqttQueryMsgTransTrend extends V20170918Rpc
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
class OnsTopicGet extends V20170918Rpc
{
}
