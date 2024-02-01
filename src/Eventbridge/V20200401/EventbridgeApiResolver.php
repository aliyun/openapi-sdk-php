<?php

namespace AlibabaCloud\Eventbridge\V20200401;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateApiDestination createApiDestination(array $options = [])
 * @method CreateConnection createConnection(array $options = [])
 * @method CreateEventBus createEventBus(array $options = [])
 * @method CreateEventSource createEventSource(array $options = [])
 * @method CreateEventStreaming createEventStreaming(array $options = [])
 * @method CreateRule createRule(array $options = [])
 * @method CreateServiceLinkedRoleForProduct createServiceLinkedRoleForProduct(array $options = [])
 * @method DeleteApiDestination deleteApiDestination(array $options = [])
 * @method DeleteConnection deleteConnection(array $options = [])
 * @method DeleteEventBus deleteEventBus(array $options = [])
 * @method DeleteEventSource deleteEventSource(array $options = [])
 * @method DeleteEventStreaming deleteEventStreaming(array $options = [])
 * @method DeleteRule deleteRule(array $options = [])
 * @method DeleteTargets deleteTargets(array $options = [])
 * @method DisableRule disableRule(array $options = [])
 * @method EnableRule enableRule(array $options = [])
 * @method GetApiDestination getApiDestination(array $options = [])
 * @method GetConnection getConnection(array $options = [])
 * @method GetEventBus getEventBus(array $options = [])
 * @method GetEventStreaming getEventStreaming(array $options = [])
 * @method GetRule getRule(array $options = [])
 * @method ListAliyunOfficialEventSources listAliyunOfficialEventSources(array $options = [])
 * @method ListApiDestinations listApiDestinations(array $options = [])
 * @method ListConnections listConnections(array $options = [])
 * @method ListEventBuses listEventBuses(array $options = [])
 * @method ListEventStreamings listEventStreamings(array $options = [])
 * @method ListRules listRules(array $options = [])
 * @method ListTargets listTargets(array $options = [])
 * @method ListUserDefinedEventSources listUserDefinedEventSources(array $options = [])
 * @method PauseEventStreaming pauseEventStreaming(array $options = [])
 * @method PutTargets putTargets(array $options = [])
 * @method QueryEvent queryEvent(array $options = [])
 * @method QueryEventTraces queryEventTraces(array $options = [])
 * @method QueryTracedEventByEventId queryTracedEventByEventId(array $options = [])
 * @method QueryTracedEvents queryTracedEvents(array $options = [])
 * @method StartEventStreaming startEventStreaming(array $options = [])
 * @method TestEventPattern testEventPattern(array $options = [])
 * @method UpdateApiDestination updateApiDestination(array $options = [])
 * @method UpdateConnection updateConnection(array $options = [])
 * @method UpdateEventBus updateEventBus(array $options = [])
 * @method UpdateEventSource updateEventSource(array $options = [])
 * @method UpdateEventStreaming updateEventStreaming(array $options = [])
 * @method UpdateRule updateRule(array $options = [])
 */
class EventbridgeApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'eventbridge';

    /** @var string */
    public $version = '2020-04-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getHttpApiParameters()
 * @method $this withHttpApiParameters($value)
 * @method string getApiDestinationName()
 * @method $this withApiDestinationName($value)
 * @method string getInvocationRateLimitPerSecond()
 * @method $this withInvocationRateLimitPerSecond($value)
 */
class CreateApiDestination extends Rpc
{
}

/**
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkParameters()
 * @method $this withNetworkParameters($value)
 * @method string getAuthParameters()
 * @method $this withAuthParameters($value)
 */
class CreateConnection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class CreateEventBus extends Rpc
{
}

/**
 * @method string getDescription()
 * @method string getEventBusName()
 * @method string getSourceMNSParameters()
 * @method string getLinkedExternalSource()
 * @method string getExternalSourceType()
 * @method string getExternalSourceConfig()
 * @method string getSourceRabbitMQParameters()
 * @method string getSourceRocketMQParameters()
 * @method string getSourceSLSParameters()
 * @method string getSourceScheduledEventParameters()
 * @method string getSourceKafkaParameters()
 * @method string getSourceHttpEventParameters()
 * @method string getEventSourceName()
 */
class CreateEventSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventBusName($value)
    {
        $this->data['EventBusName'] = $value;
        $this->options['form_params']['EventBusName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceMNSParameters($value)
    {
        $this->data['SourceMNSParameters'] = $value;
        $this->options['form_params']['SourceMNSParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLinkedExternalSource($value)
    {
        $this->data['LinkedExternalSource'] = $value;
        $this->options['form_params']['LinkedExternalSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalSourceType($value)
    {
        $this->data['ExternalSourceType'] = $value;
        $this->options['form_params']['ExternalSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalSourceConfig($value)
    {
        $this->data['ExternalSourceConfig'] = $value;
        $this->options['form_params']['ExternalSourceConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceRabbitMQParameters($value)
    {
        $this->data['SourceRabbitMQParameters'] = $value;
        $this->options['form_params']['SourceRabbitMQParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceRocketMQParameters($value)
    {
        $this->data['SourceRocketMQParameters'] = $value;
        $this->options['form_params']['SourceRocketMQParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceSLSParameters($value)
    {
        $this->data['SourceSLSParameters'] = $value;
        $this->options['form_params']['SourceSLSParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceScheduledEventParameters($value)
    {
        $this->data['SourceScheduledEventParameters'] = $value;
        $this->options['form_params']['SourceScheduledEventParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceKafkaParameters($value)
    {
        $this->data['SourceKafkaParameters'] = $value;
        $this->options['form_params']['SourceKafkaParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceHttpEventParameters($value)
    {
        $this->data['SourceHttpEventParameters'] = $value;
        $this->options['form_params']['SourceHttpEventParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventSourceName($value)
    {
        $this->data['EventSourceName'] = $value;
        $this->options['form_params']['EventSourceName'] = $value;

        return $this;
    }
}

/**
 * @method string getSink()
 * @method string getTransforms()
 * @method string getDescription()
 * @method string getFilterPattern()
 * @method string getSource()
 * @method string getRunOptions()
 * @method string getEventStreamingName()
 * @method string getTag()
 */
class CreateEventStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSink($value)
    {
        $this->data['Sink'] = $value;
        $this->options['form_params']['Sink'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransforms($value)
    {
        $this->data['Transforms'] = $value;
        $this->options['form_params']['Transforms'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterPattern($value)
    {
        $this->data['FilterPattern'] = $value;
        $this->options['form_params']['FilterPattern'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRunOptions($value)
    {
        $this->data['RunOptions'] = $value;
        $this->options['form_params']['RunOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventStreamingName($value)
    {
        $this->data['EventStreamingName'] = $value;
        $this->options['form_params']['EventStreamingName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getTargets()
 * @method $this withTargets($value)
 * @method string getEventTargets()
 * @method $this withEventTargets($value)
 * @method string getFilterPattern()
 * @method $this withFilterPattern($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class CreateRule extends Rpc
{
}

/**
 * @method string getProductName()
 * @method $this withProductName($value)
 */
class CreateServiceLinkedRoleForProduct extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getApiDestinationName()
 * @method $this withApiDestinationName($value)
 */
class DeleteApiDestination extends Rpc
{
}

/**
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 */
class DeleteConnection extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class DeleteEventBus extends Rpc
{
}

/**
 * @method string getEventSourceName()
 */
class DeleteEventSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventSourceName($value)
    {
        $this->data['EventSourceName'] = $value;
        $this->options['form_params']['EventSourceName'] = $value;

        return $this;
    }
}

/**
 * @method string getEventStreamingName()
 */
class DeleteEventStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventStreamingName($value)
    {
        $this->data['EventStreamingName'] = $value;
        $this->options['form_params']['EventStreamingName'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class DeleteRule extends Rpc
{
}

/**
 * @method string getTargetIds()
 * @method $this withTargetIds($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class DeleteTargets extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class DisableRule extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class EnableRule extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getApiDestinationName()
 * @method $this withApiDestinationName($value)
 */
class GetApiDestination extends Rpc
{
}

/**
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 */
class GetConnection extends Rpc
{
}

/**
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class GetEventBus extends Rpc
{
}

/**
 * @method string getEventStreamingName()
 */
class GetEventStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventStreamingName($value)
    {
        $this->data['EventStreamingName'] = $value;
        $this->options['form_params']['EventStreamingName'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class GetRule extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 */
class ListAliyunOfficialEventSources extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getApiDestinationNamePrefix()
 * @method $this withApiDestinationNamePrefix($value)
 */
class ListApiDestinations extends Rpc
{
}

/**
 * @method string getConnectionNamePrefix()
 * @method string getNextToken()
 * @method string getMaxResults()
 */
class ListConnections extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withConnectionNamePrefix($value)
    {
        $this->data['ConnectionNamePrefix'] = $value;
        $this->options['form_params']['ConnectionNamePrefix'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxResults($value)
    {
        $this->data['MaxResults'] = $value;
        $this->options['form_params']['MaxResults'] = $value;

        return $this;
    }
}

/**
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 * @method string getEventBusType()
 * @method $this withEventBusType($value)
 */
class ListEventBuses extends Rpc
{
}

/**
 * @method string getSourceArn()
 * @method string getSinkType()
 * @method string getSinkArn()
 * @method string getNextToken()
 * @method string getLimit()
 * @method string getSourceType()
 * @method string getNamePrefix()
 * @method string getTag()
 */
class ListEventStreamings extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceArn($value)
    {
        $this->data['SourceArn'] = $value;
        $this->options['form_params']['SourceArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSinkType($value)
    {
        $this->data['SinkType'] = $value;
        $this->options['form_params']['SinkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSinkArn($value)
    {
        $this->data['SinkArn'] = $value;
        $this->options['form_params']['SinkArn'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNextToken($value)
    {
        $this->data['NextToken'] = $value;
        $this->options['form_params']['NextToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceType($value)
    {
        $this->data['SourceType'] = $value;
        $this->options['form_params']['SourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNamePrefix($value)
    {
        $this->data['NamePrefix'] = $value;
        $this->options['form_params']['NamePrefix'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }
}

/**
 * @method string getRuleNamePrefix()
 * @method $this withRuleNamePrefix($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 */
class ListRules extends Rpc
{
}

/**
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getArn()
 * @method $this withArn($value)
 */
class ListTargets extends Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getNamePrefix()
 * @method $this withNamePrefix($value)
 */
class ListUserDefinedEventSources extends Rpc
{
}

/**
 * @method string getEventStreamingName()
 */
class PauseEventStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventStreamingName($value)
    {
        $this->data['EventStreamingName'] = $value;
        $this->options['form_params']['EventStreamingName'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getTargets()
 * @method $this withTargets($value)
 */
class PutTargets extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getEventSource()
 * @method $this withEventSource($value)
 */
class QueryEvent extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class QueryEventTraces extends Rpc
{
}

/**
 * @method string getEventId()
 * @method $this withEventId($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getEventSource()
 * @method $this withEventSource($value)
 */
class QueryTracedEventByEventId extends Rpc
{
}

/**
 * @method string getMatchedRule()
 * @method $this withMatchedRule($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getEventSource()
 * @method $this withEventSource($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getEventType()
 * @method $this withEventType($value)
 */
class QueryTracedEvents extends Rpc
{
}

/**
 * @method string getEventStreamingName()
 */
class StartEventStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventStreamingName($value)
    {
        $this->data['EventStreamingName'] = $value;
        $this->options['form_params']['EventStreamingName'] = $value;

        return $this;
    }
}

/**
 * @method string getEventPattern()
 * @method string getEvent()
 */
class TestEventPattern extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventPattern($value)
    {
        $this->data['EventPattern'] = $value;
        $this->options['form_params']['EventPattern'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEvent($value)
    {
        $this->data['Event'] = $value;
        $this->options['form_params']['Event'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getApiDestinationName()
 * @method $this withApiDestinationName($value)
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 * @method string getHttpApiParameters()
 * @method $this withHttpApiParameters($value)
 * @method string getInvocationRateLimitPerSecond()
 * @method $this withInvocationRateLimitPerSecond($value)
 */
class UpdateApiDestination extends Rpc
{
}

/**
 * @method string getConnectionName()
 * @method $this withConnectionName($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getNetworkParameters()
 * @method $this withNetworkParameters($value)
 * @method string getAuthParameters()
 * @method $this withAuthParameters($value)
 */
class UpdateConnection extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 */
class UpdateEventBus extends Rpc
{
}

/**
 * @method string getDescription()
 * @method string getEventBusName()
 * @method string getSourceMNSParameters()
 * @method string getLinkedExternalSource()
 * @method string getExternalSourceType()
 * @method string getExternalSourceConfig()
 * @method string getSourceRabbitMQParameters()
 * @method string getSourceRocketMQParameters()
 * @method string getSourceSLSParameters()
 * @method string getSourceScheduledEventParameters()
 * @method string getSourceKafkaParameters()
 * @method string getSourceHttpEventParameters()
 * @method string getEventSourceName()
 */
class UpdateEventSource extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventBusName($value)
    {
        $this->data['EventBusName'] = $value;
        $this->options['form_params']['EventBusName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceMNSParameters($value)
    {
        $this->data['SourceMNSParameters'] = $value;
        $this->options['form_params']['SourceMNSParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLinkedExternalSource($value)
    {
        $this->data['LinkedExternalSource'] = $value;
        $this->options['form_params']['LinkedExternalSource'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalSourceType($value)
    {
        $this->data['ExternalSourceType'] = $value;
        $this->options['form_params']['ExternalSourceType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExternalSourceConfig($value)
    {
        $this->data['ExternalSourceConfig'] = $value;
        $this->options['form_params']['ExternalSourceConfig'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceRabbitMQParameters($value)
    {
        $this->data['SourceRabbitMQParameters'] = $value;
        $this->options['form_params']['SourceRabbitMQParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceRocketMQParameters($value)
    {
        $this->data['SourceRocketMQParameters'] = $value;
        $this->options['form_params']['SourceRocketMQParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceSLSParameters($value)
    {
        $this->data['SourceSLSParameters'] = $value;
        $this->options['form_params']['SourceSLSParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceScheduledEventParameters($value)
    {
        $this->data['SourceScheduledEventParameters'] = $value;
        $this->options['form_params']['SourceScheduledEventParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceKafkaParameters($value)
    {
        $this->data['SourceKafkaParameters'] = $value;
        $this->options['form_params']['SourceKafkaParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSourceHttpEventParameters($value)
    {
        $this->data['SourceHttpEventParameters'] = $value;
        $this->options['form_params']['SourceHttpEventParameters'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventSourceName($value)
    {
        $this->data['EventSourceName'] = $value;
        $this->options['form_params']['EventSourceName'] = $value;

        return $this;
    }
}

/**
 * @method string getSink()
 * @method string getTransforms()
 * @method string getDescription()
 * @method string getFilterPattern()
 * @method string getSource()
 * @method string getRunOptions()
 * @method string getEventStreamingName()
 * @method string getTag()
 */
class UpdateEventStreaming extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSink($value)
    {
        $this->data['Sink'] = $value;
        $this->options['form_params']['Sink'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTransforms($value)
    {
        $this->data['Transforms'] = $value;
        $this->options['form_params']['Transforms'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilterPattern($value)
    {
        $this->data['FilterPattern'] = $value;
        $this->options['form_params']['FilterPattern'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRunOptions($value)
    {
        $this->data['RunOptions'] = $value;
        $this->options['form_params']['RunOptions'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEventStreamingName($value)
    {
        $this->data['EventStreamingName'] = $value;
        $this->options['form_params']['EventStreamingName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTag($value)
    {
        $this->data['Tag'] = $value;
        $this->options['form_params']['Tag'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getRuleName()
 * @method $this withRuleName($value)
 * @method string getEventBusName()
 * @method $this withEventBusName($value)
 * @method string getFilterPattern()
 * @method $this withFilterPattern($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateRule extends Rpc
{
}
