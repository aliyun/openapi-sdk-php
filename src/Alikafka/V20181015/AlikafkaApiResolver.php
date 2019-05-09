<?php

namespace AlibabaCloud\Alikafka\V20181015;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateConsumerGroup createConsumerGroup(array $options = [])
 * @method CreateTopic createTopic(array $options = [])
 * @method GetTopicStatus getTopicStatus(array $options = [])
 * @method GetConsumerProgress getConsumerProgress(array $options = [])
 * @method GetConsumerList getConsumerList(array $options = [])
 * @method GetInstanceList getInstanceList(array $options = [])
 * @method GetTopicList getTopicList(array $options = [])
 */
class AlikafkaApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
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
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 */
class CreateConsumerGroup extends Rpc
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
class CreateTopic extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 */
class GetTopicStatus extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getConsumerId()
 * @method $this withConsumerId($value)
 */
class GetConsumerProgress extends Rpc
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
class GetConsumerList extends Rpc
{
}

class GetInstanceList extends Rpc
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
class GetTopicList extends Rpc
{
}
