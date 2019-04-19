<?php

namespace AlibabaCloud\Alikafka\V20181015;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method SendMsg sendMsg(array $options = [])
 * @method AddPartitions addPartitions(array $options = [])
 * @method AddTopicWithPartition addTopicWithPartition(array $options = [])
 * @method GetAllInstanceIdList getAllInstanceIdList(array $options = [])
 * @method UpdateTopicRemark updateTopicRemark(array $options = [])
 * @method UpdateInstanceName updateInstanceName(array $options = [])
 * @method GetVpcInfo getVpcInfo(array $options = [])
 * @method GetTopicSubscribeStatus getTopicSubscribeStatus(array $options = [])
 * @method CorrectInstanceData correctInstanceData(array $options = [])
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreateTopic createTopic(array $options = [])
 * @method GetTopicStatus getTopicStatus(array $options = [])
 * @method GetConsumerProgress getConsumerProgress(array $options = [])
 * @method GetConsumerList getConsumerList(array $options = [])
 * @method GetInstanceList getInstanceList(array $options = [])
 * @method GetTopicList getTopicList(array $options = [])
 */
class AlikafkaApiResolver
{
    use ApiResolverTrait;
}

class V20181015Rpc extends Rpc
{
    /** @var string */
    public $product = 'alikafka';

    /** @var string */
    public $version = '2018-10-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'alikafka';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPartition()
 * @method $this withPartition($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getValue()
 * @method $this withValue($value)
 * @method string getKey()
 * @method $this withKey($value)
 */
class SendMsg extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 */
class AddPartitions extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getPartitionNum()
 * @method $this withPartitionNum($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class AddTopicWithPartition extends V20181015Rpc
{
}

class GetAllInstanceIdList extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 */
class UpdateTopicRemark extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 */
class UpdateInstanceName extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetVpcInfo extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class GetTopicSubscribeStatus extends V20181015Rpc
{
}

class CorrectInstanceData extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 */
class CreateConsumerGroup extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getOrderType()
 * @method $this withOrderType($value)
 */
class CreateTopic extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class GetTopicStatus extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 */
class GetConsumerProgress extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class GetConsumerList extends V20181015Rpc
{
}

class GetInstanceList extends V20181015Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class GetTopicList extends V20181015Rpc
{
}
