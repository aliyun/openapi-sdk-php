<?php

namespace AlibabaCloud\MnsOpen\V20220119;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateQueue createQueue(array $options = [])
 * @method CreateTopic createTopic(array $options = [])
 * @method DeleteQueue deleteQueue(array $options = [])
 * @method DeleteTopic deleteTopic(array $options = [])
 * @method GetQueueAttributes getQueueAttributes(array $options = [])
 * @method GetSubscriptionAttributes getSubscriptionAttributes(array $options = [])
 * @method GetTopicAttributes getTopicAttributes(array $options = [])
 * @method ListQueue listQueue(array $options = [])
 * @method ListSubscriptionByTopic listSubscriptionByTopic(array $options = [])
 * @method ListTopic listTopic(array $options = [])
 * @method SetQueueAttributes setQueueAttributes(array $options = [])
 * @method SetSubscriptionAttributes setSubscriptionAttributes(array $options = [])
 * @method SetTopicAttributes setTopicAttributes(array $options = [])
 * @method Subscribe subscribe(array $options = [])
 * @method Unsubscribe unsubscribe(array $options = [])
 */
class MnsOpenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Mns-open';

    /** @var string */
    public $version = '2022-01-19';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'mns';
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getMessageRetentionPeriod()
 * @method $this withMessageRetentionPeriod($value)
 * @method string getEnableLogging()
 * @method $this withEnableLogging($value)
 * @method string getVisibilityTimeout()
 * @method $this withVisibilityTimeout($value)
 * @method string getMaximumMessageSize()
 * @method $this withMaximumMessageSize($value)
 * @method string getDelaySeconds()
 * @method $this withDelaySeconds($value)
 * @method string getPollingWaitSeconds()
 * @method $this withPollingWaitSeconds($value)
 */
class CreateQueue extends Rpc
{
}

/**
 * @method string getTopicName()
 * @method string getMaxMessageSize()
 * @method string getEnableLogging()
 */
class CreateTopic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTopicName($value)
    {
        $this->data['TopicName'] = $value;
        $this->options['form_params']['TopicName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxMessageSize($value)
    {
        $this->data['MaxMessageSize'] = $value;
        $this->options['form_params']['MaxMessageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnableLogging($value)
    {
        $this->data['EnableLogging'] = $value;
        $this->options['form_params']['EnableLogging'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 */
class DeleteQueue extends Rpc
{
}

/**
 * @method string getTopicName()
 * @method $this withTopicName($value)
 */
class DeleteTopic extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 */
class GetQueueAttributes extends Rpc
{
}

/**
 * @method string getSubscriptionName()
 * @method $this withSubscriptionName($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 */
class GetSubscriptionAttributes extends Rpc
{
}

/**
 * @method string getTopicName()
 * @method $this withTopicName($value)
 */
class GetTopicAttributes extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListQueue extends Rpc
{
}

/**
 * @method string getSubscriptionName()
 * @method $this withSubscriptionName($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListSubscriptionByTopic extends Rpc
{
}

/**
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListTopic extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getMessageRetentionPeriod()
 * @method $this withMessageRetentionPeriod($value)
 * @method string getEnableLogging()
 * @method $this withEnableLogging($value)
 * @method string getVisibilityTimeout()
 * @method $this withVisibilityTimeout($value)
 * @method string getDelaySeconds()
 * @method $this withDelaySeconds($value)
 * @method string getMaximumMessageSize()
 * @method $this withMaximumMessageSize($value)
 * @method string getPollingWaitSeconds()
 * @method $this withPollingWaitSeconds($value)
 */
class SetQueueAttributes extends Rpc
{
}

/**
 * @method string getSubscriptionName()
 * @method $this withSubscriptionName($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getNotifyStrategy()
 * @method $this withNotifyStrategy($value)
 */
class SetSubscriptionAttributes extends Rpc
{
}

/**
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getMaxMessageSize()
 * @method $this withMaxMessageSize($value)
 * @method string getEnableLogging()
 * @method $this withEnableLogging($value)
 */
class SetTopicAttributes extends Rpc
{
}

/**
 * @method string getTopicName()
 * @method $this withTopicName($value)
 * @method string getMessageTag()
 * @method $this withMessageTag($value)
 * @method string getEndpoint()
 * @method $this withEndpoint($value)
 * @method string getSubscriptionName()
 * @method $this withSubscriptionName($value)
 * @method string getNotifyStrategy()
 * @method $this withNotifyStrategy($value)
 * @method string getNotifyContentFormat()
 * @method $this withNotifyContentFormat($value)
 * @method string getPushType()
 * @method $this withPushType($value)
 */
class Subscribe extends Rpc
{
}

/**
 * @method string getSubscriptionName()
 * @method $this withSubscriptionName($value)
 * @method string getTopicName()
 * @method $this withTopicName($value)
 */
class Unsubscribe extends Rpc
{
}
