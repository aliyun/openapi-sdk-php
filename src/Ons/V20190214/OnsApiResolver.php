<?php

namespace AlibabaCloud\Ons\V20190214;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ListTagResources listTagResources(array $options = [])
 * @method OnsConsumerAccumulate onsConsumerAccumulate(array $options = [])
 * @method OnsConsumerGetConnection onsConsumerGetConnection(array $options = [])
 * @method OnsConsumerResetOffset onsConsumerResetOffset(array $options = [])
 * @method OnsConsumerStatus onsConsumerStatus(array $options = [])
 * @method OnsConsumerTimeSpan onsConsumerTimeSpan(array $options = [])
 * @method OnsDLQMessageGetById onsDLQMessageGetById(array $options = [])
 * @method OnsDLQMessagePageQueryByGroupId onsDLQMessagePageQueryByGroupId(array $options = [])
 * @method OnsDLQMessageResendById onsDLQMessageResendById(array $options = [])
 * @method OnsGroupConsumerUpdate onsGroupConsumerUpdate(array $options = [])
 * @method OnsGroupCreate onsGroupCreate(array $options = [])
 * @method OnsGroupDelete onsGroupDelete(array $options = [])
 * @method OnsGroupList onsGroupList(array $options = [])
 * @method OnsGroupSubDetail onsGroupSubDetail(array $options = [])
 * @method OnsInstanceBaseInfo onsInstanceBaseInfo(array $options = [])
 * @method OnsInstanceCreate onsInstanceCreate(array $options = [])
 * @method OnsInstanceDelete onsInstanceDelete(array $options = [])
 * @method OnsInstanceInServiceList onsInstanceInServiceList(array $options = [])
 * @method OnsInstanceUpdate onsInstanceUpdate(array $options = [])
 * @method OnsMessageGetByKey onsMessageGetByKey(array $options = [])
 * @method OnsMessageGetByMsgId onsMessageGetByMsgId(array $options = [])
 * @method OnsMessagePageQueryByTopic onsMessagePageQueryByTopic(array $options = [])
 * @method OnsMessagePush onsMessagePush(array $options = [])
 * @method OnsMessageSend onsMessageSend(array $options = [])
 * @method OnsMessageTrace onsMessageTrace(array $options = [])
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
 * @method OnsTopicSubDetail onsTopicSubDetail(array $options = [])
 * @method OnsTopicUpdate onsTopicUpdate(array $options = [])
 * @method OnsTraceGetResult onsTraceGetResult(array $options = [])
 * @method OnsTraceQueryByMsgId onsTraceQueryByMsgId(array $options = [])
 * @method OnsTraceQueryByMsgKey onsTraceQueryByMsgKey(array $options = [])
 * @method OnsTrendGroupOutputTps onsTrendGroupOutputTps(array $options = [])
 * @method OnsTrendTopicInputTps onsTrendTopicInputTps(array $options = [])
 * @method OnsWarnCreate onsWarnCreate(array $options = [])
 * @method OnsWarnDelete onsWarnDelete(array $options = [])
 * @method OpenOnsService openOnsService(array $options = [])
 * @method TagResources tagResources(array $options = [])
 * @method UntagResources untagResources(array $options = [])
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
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method array getTag()
 */
class ListTagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerAccumulate extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsConsumerGetConnection extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getResetTimestamp()
 * @method $this withResetTimestamp($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsConsumerResetOffset extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNeedJstack()
 * @method $this withNeedJstack($value)
 * @method string getDetail()
 * @method $this withDetail($value)
 */
class OnsConsumerStatus extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsConsumerTimeSpan extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsDLQMessageGetById extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class OnsDLQMessagePageQueryByGroupId extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsDLQMessageResendById extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getReadEnable()
 * @method $this withReadEnable($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsGroupConsumerUpdate extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 */
class OnsGroupCreate extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsGroupDelete extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getGroupType()
 * @method $this withGroupType($value)
 * @method array getTag()
 */
class OnsGroupList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsGroupSubDetail extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsInstanceBaseInfo extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class OnsInstanceCreate extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsInstanceDelete extends Rpc
{
}

/**
 * @method array getTag()
 */
class OnsInstanceInServiceList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsInstanceUpdate extends Rpc
{
}

/**
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
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMessageGetByMsgId extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class OnsMessagePageQueryByTopic extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMessagePush extends Rpc
{
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getTag()
 * @method $this withTag($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class OnsMessageSend extends Rpc
{
}

/**
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMessageTrace extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsMqttGroupIdCreate extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttGroupIdDelete extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttGroupIdList extends Rpc
{
}

/**
 * @method string getClientId()
 * @method $this withClientId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttQueryClientByClientId extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttQueryClientByGroupId extends Rpc
{
}

/**
 * @method string getParentTopic()
 * @method $this withParentTopic($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSubTopic()
 * @method $this withSubTopic($value)
 */
class OnsMqttQueryClientByTopic extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class OnsMqttQueryHistoryOnline extends Rpc
{
}

/**
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getQos()
 * @method $this withQos($value)
 * @method string getMsgType()
 * @method $this withMsgType($value)
 * @method string getSubTopic()
 * @method $this withSubTopic($value)
 */
class OnsMqttQueryMsgTransTrend extends Rpc
{
}

class OnsRegionList extends Rpc
{
}

/**
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicCreate extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicDelete extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method array getTag()
 */
class OnsTopicList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicSubDetail extends Rpc
{
}

/**
 * @method string getPerm()
 * @method $this withPerm($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTopicUpdate extends Rpc
{
}

/**
 * @method string getQueryId()
 * @method $this withQueryId($value)
 */
class OnsTraceGetResult extends Rpc
{
}

/**
 * @method string getMsgId()
 * @method $this withMsgId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTraceQueryByMsgId extends Rpc
{
}

/**
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getMsgKey()
 * @method $this withMsgKey($value)
 */
class OnsTraceQueryByMsgKey extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTrendGroupOutputTps extends Rpc
{
}

/**
 * @method string getPeriod()
 * @method $this withPeriod($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getBeginTime()
 * @method $this withBeginTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsTrendTopicInputTps extends Rpc
{
}

/**
 * @method string getLevel()
 * @method $this withLevel($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDelayTime()
 * @method $this withDelayTime($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getAlertTime()
 * @method $this withAlertTime($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBlockTime()
 * @method $this withBlockTime($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getContacts()
 * @method $this withContacts($value)
 */
class OnsWarnCreate extends Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class OnsWarnDelete extends Rpc
{
}

class OpenOnsService extends Rpc
{
}

/**
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getTag()
 */
class TagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getAll()
 * @method $this withAll($value)
 * @method array getResourceId()
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getTagKey()
 */
class UntagResources extends Rpc
{

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function withResourceId(array $resourceId)
	{
	    $this->data['ResourceId'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->options['query']['ResourceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function withTagKey(array $tagKey)
	{
	    $this->data['TagKey'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->options['query']['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
