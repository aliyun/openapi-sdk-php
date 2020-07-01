<?php

namespace AlibabaCloud\AmqpOpen\V20191212;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateBinding createBinding(array $options = [])
 * @method CreateExchange createExchange(array $options = [])
 * @method CreateQueue createQueue(array $options = [])
 * @method CreateVirtualHost createVirtualHost(array $options = [])
 * @method DeleteBinding deleteBinding(array $options = [])
 * @method DeleteExchange deleteExchange(array $options = [])
 * @method DeleteQueue deleteQueue(array $options = [])
 * @method DeleteVirtualHost deleteVirtualHost(array $options = [])
 * @method GetMetadataAmount getMetadataAmount(array $options = [])
 * @method ListBindings listBindings(array $options = [])
 * @method ListDownStreamBindings listDownStreamBindings(array $options = [])
 * @method ListExchanges listExchanges(array $options = [])
 * @method ListExchangeUpStreamBindings listExchangeUpStreamBindings(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListQueueConsumers listQueueConsumers(array $options = [])
 * @method ListQueues listQueues(array $options = [])
 * @method ListQueueUpStreamBindings listQueueUpStreamBindings(array $options = [])
 * @method ListVirtualHosts listVirtualHosts(array $options = [])
 */
class AmqpOpenApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'amqp-open';

    /** @var string */
    public $version = '2019-12-12';

    /** @var string */
    public $serviceCode = 'onsproxy';
}

/**
 * @method string getArgument()
 * @method string getDestinationName()
 * @method string getSourceExchange()
 * @method string getBindingKey()
 * @method string getBindingType()
 * @method string getInstanceId()
 * @method string getVirtualHost()
 */
class CreateBinding extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withArgument($value)
    {
        $this->data['Argument'] = $value;
        $this->options['form_params']['Argument'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationName($value)
    {
        $this->data['DestinationName'] = $value;
        $this->options['form_params']['DestinationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceExchange($value)
    {
        $this->data['SourceExchange'] = $value;
        $this->options['form_params']['SourceExchange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBindingKey($value)
    {
        $this->data['BindingKey'] = $value;
        $this->options['form_params']['BindingKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBindingType($value)
    {
        $this->data['BindingType'] = $value;
        $this->options['form_params']['BindingType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getInternal()
 * @method string getExchangeName()
 * @method string getInstanceId()
 * @method string getAlternateExchange()
 * @method string getAutoDeleteState()
 * @method string getExchangeType()
 * @method string getVirtualHost()
 */
class CreateExchange extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInternal($value)
    {
        $this->data['Internal'] = $value;
        $this->options['form_params']['Internal'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExchangeName($value)
    {
        $this->data['ExchangeName'] = $value;
        $this->options['form_params']['ExchangeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlternateExchange($value)
    {
        $this->data['AlternateExchange'] = $value;
        $this->options['form_params']['AlternateExchange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoDeleteState($value)
    {
        $this->data['AutoDeleteState'] = $value;
        $this->options['form_params']['AutoDeleteState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExchangeType($value)
    {
        $this->data['ExchangeType'] = $value;
        $this->options['form_params']['ExchangeType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getDeadLetterRoutingKey()
 * @method string getMaxLength()
 * @method string getAutoExpireState()
 * @method string getDeadLetterExchange()
 * @method string getInstanceId()
 * @method string getExclusiveState()
 * @method string getAutoDeleteState()
 * @method string getMessageTTL()
 * @method string getVirtualHost()
 * @method string getMaximumPriority()
 */
class CreateQueue extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['form_params']['QueueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeadLetterRoutingKey($value)
    {
        $this->data['DeadLetterRoutingKey'] = $value;
        $this->options['form_params']['DeadLetterRoutingKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxLength($value)
    {
        $this->data['MaxLength'] = $value;
        $this->options['form_params']['MaxLength'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoExpireState($value)
    {
        $this->data['AutoExpireState'] = $value;
        $this->options['form_params']['AutoExpireState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeadLetterExchange($value)
    {
        $this->data['DeadLetterExchange'] = $value;
        $this->options['form_params']['DeadLetterExchange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExclusiveState($value)
    {
        $this->data['ExclusiveState'] = $value;
        $this->options['form_params']['ExclusiveState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAutoDeleteState($value)
    {
        $this->data['AutoDeleteState'] = $value;
        $this->options['form_params']['AutoDeleteState'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageTTL($value)
    {
        $this->data['MessageTTL'] = $value;
        $this->options['form_params']['MessageTTL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaximumPriority($value)
    {
        $this->data['MaximumPriority'] = $value;
        $this->options['form_params']['MaximumPriority'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getVirtualHost()
 */
class CreateVirtualHost extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getDestinationName()
 * @method string getSourceExchange()
 * @method string getBindingKey()
 * @method string getBindingType()
 * @method string getInstanceId()
 * @method string getVirtualHost()
 */
class DeleteBinding extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDestinationName($value)
    {
        $this->data['DestinationName'] = $value;
        $this->options['form_params']['DestinationName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceExchange($value)
    {
        $this->data['SourceExchange'] = $value;
        $this->options['form_params']['SourceExchange'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBindingKey($value)
    {
        $this->data['BindingKey'] = $value;
        $this->options['form_params']['BindingKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBindingType($value)
    {
        $this->data['BindingType'] = $value;
        $this->options['form_params']['BindingType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getExchangeName()
 * @method string getInstanceId()
 * @method string getVirtualHost()
 */
class DeleteExchange extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExchangeName($value)
    {
        $this->data['ExchangeName'] = $value;
        $this->options['form_params']['ExchangeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getQueueName()
 * @method string getInstanceId()
 * @method string getVirtualHost()
 */
class DeleteQueue extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withQueueName($value)
    {
        $this->data['QueueName'] = $value;
        $this->options['form_params']['QueueName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method string getVirtualHost()
 */
class DeleteVirtualHost extends Rpc
{

    /** @var string */
    public $method = 'POST';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceId($value)
    {
        $this->data['InstanceId'] = $value;
        $this->options['form_params']['InstanceId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVirtualHost($value)
    {
        $this->data['VirtualHost'] = $value;
        $this->options['form_params']['VirtualHost'] = $value;

        return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetMetadataAmount extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 */
class ListBindings extends Rpc
{
}

/**
 * @method string getExchangeName()
 * @method $this withExchangeName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 */
class ListDownStreamBindings extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 */
class ListExchanges extends Rpc
{
}

/**
 * @method string getExchangeName()
 * @method $this withExchangeName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 */
class ListExchangeUpStreamBindings extends Rpc
{
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListInstances extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getQueryCount()
 * @method $this withQueryCount($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 * @method string getQueue()
 * @method $this withQueue($value)
 */
class ListQueueConsumers extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 */
class ListQueues extends Rpc
{
}

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getVirtualHost()
 * @method $this withVirtualHost($value)
 */
class ListQueueUpStreamBindings extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListVirtualHosts extends Rpc
{
}
