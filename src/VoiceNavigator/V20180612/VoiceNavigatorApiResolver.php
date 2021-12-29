<?php

namespace AlibabaCloud\VoiceNavigator\V20180612;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AssociateChatbotInstance associateChatbotInstance(array $options = [])
 * @method AuditTTSVoice auditTTSVoice(array $options = [])
 * @method BeginDialogue beginDialogue(array $options = [])
 * @method CollectedNumber collectedNumber(array $options = [])
 * @method CreateDownloadUrl createDownloadUrl(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method DebugBeginDialogue debugBeginDialogue(array $options = [])
 * @method DebugCollectedNumber debugCollectedNumber(array $options = [])
 * @method DebugDialogue debugDialogue(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DescribeAsrVadConfig describeAsrVadConfig(array $options = [])
 * @method DescribeConversation describeConversation(array $options = [])
 * @method DescribeConversationContext describeConversationContext(array $options = [])
 * @method DescribeExportProgress describeExportProgress(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeNavigationConfig describeNavigationConfig(array $options = [])
 * @method DescribeRecording describeRecording(array $options = [])
 * @method DescribeStatisticalData describeStatisticalData(array $options = [])
 * @method DescribeTTSConfig describeTTSConfig(array $options = [])
 * @method DescribeVoiceConfig describeVoiceConfig(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DisableInstance disableInstance(array $options = [])
 * @method EnableInstance enableInstance(array $options = [])
 * @method EndDialogue endDialogue(array $options = [])
 * @method ExportConversationDetails exportConversationDetails(array $options = [])
 * @method ExportStatisticalData exportStatisticalData(array $options = [])
 * @method GetInstanceConfig getInstanceConfig(array $options = [])
 * @method GetNewBargeInSwitch getNewBargeInSwitch(array $options = [])
 * @method ListChatbotInstances listChatbotInstances(array $options = [])
 * @method ListConversationDetails listConversationDetails(array $options = [])
 * @method ListConversations listConversations(array $options = [])
 * @method ListDownloadTasks listDownloadTasks(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ModifyAsrVadConfig modifyAsrVadConfig(array $options = [])
 * @method ModifyGreetingConfig modifyGreetingConfig(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ModifySilenceTimeoutConfig modifySilenceTimeoutConfig(array $options = [])
 * @method ModifyTTSConfig modifyTTSConfig(array $options = [])
 * @method ModifyUnrecognizingConfig modifyUnrecognizingConfig(array $options = [])
 * @method QueryConversations queryConversations(array $options = [])
 * @method SaveRecording saveRecording(array $options = [])
 * @method SilenceTimeout silenceTimeout(array $options = [])
 * @method UpdateNewBargeInSwitch updateNewBargeInSwitch(array $options = [])
 */
class VoiceNavigatorApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'VoiceNavigator';

    /** @var string */
    public $version = '2018-06-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'voicebot';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChatbotInstanceId()
 * @method $this withChatbotInstanceId($value)
 * @method string getChatbotName()
 * @method $this withChatbotName($value)
 */
class AssociateChatbotInstance extends Rpc
{
}

/**
 * @method string getVoice()
 * @method $this withVoice($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getText()
 * @method $this withText($value)
 * @method string getSpeechRate()
 * @method $this withSpeechRate($value)
 */
class AuditTTSVoice extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInitialContext()
 * @method $this withInitialContext($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class BeginDialogue extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class CollectedNumber extends Rpc
{
}

/**
 * @method string getDownloadTaskId()
 * @method $this withDownloadTaskId($value)
 * @method string getFileId()
 * @method $this withFileId($value)
 */
class CreateDownloadUrl extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConcurrency()
 * @method $this withConcurrency($value)
 * @method string getChatbotInstanceId()
 * @method $this withChatbotInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getNluServiceType()
 * @method $this withNluServiceType($value)
 * @method string getChatbotName()
 * @method $this withChatbotName($value)
 */
class CreateInstance extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInitialContext()
 * @method $this withInitialContext($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 */
class DebugBeginDialogue extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getNumber()
 * @method $this withNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DebugCollectedNumber extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAdditionalContext()
 * @method $this withAdditionalContext($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class DebugDialogue extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DeleteInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeAsrVadConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeConversation extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeConversationContext extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getExportTaskId()
 * @method $this withExportTaskId($value)
 */
class DescribeExportProgress extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeInstance extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeNavigationConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeRecording extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBeginTimeLeftRange()
 * @method $this withBeginTimeLeftRange($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBeginTimeRightRange()
 * @method $this withBeginTimeRightRange($value)
 */
class DescribeStatisticalData extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class DescribeTTSConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class DescribeVoiceConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getAdditionalContext()
 * @method $this withAdditionalContext($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class Dialogue extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DisableInstance extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class EnableInstance extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getHangUpParams()
 * @method $this withHangUpParams($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class EndDialogue extends Rpc
{
}

/**
 * @method string getBeginTimeLeftRange()
 * @method $this withBeginTimeLeftRange($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBeginTimeRightRange()
 * @method $this withBeginTimeRightRange($value)
 */
class ExportConversationDetails extends Rpc
{
}

/**
 * @method string getBeginTimeLeftRange()
 * @method $this withBeginTimeLeftRange($value)
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getTimeUnit()
 * @method $this withTimeUnit($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBeginTimeRightRange()
 * @method $this withBeginTimeRightRange($value)
 */
class ExportStatisticalData extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetInstanceConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetNewBargeInSwitch extends Rpc
{
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListChatbotInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListConversationDetails extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getBeginTimeLeftRange()
 * @method $this withBeginTimeLeftRange($value)
 * @method string getQuery()
 * @method $this withQuery($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getResult()
 * @method $this withResult($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBeginTimeRightRange()
 * @method $this withBeginTimeRightRange($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListConversations extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListDownloadTasks extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSpeechNoiseThreshold()
 * @method $this withSpeechNoiseThreshold($value)
 */
class ModifyAsrVadConfig extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getGreetingWords()
 * @method $this withGreetingWords($value)
 * @method string getIntentTrigger()
 * @method $this withIntentTrigger($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 */
class ModifyGreetingConfig extends Rpc
{
}

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getConcurrency()
 * @method $this withConcurrency($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getChatbotInstanceId()
 * @method $this withChatbotInstanceId($value)
 */
class ModifyInstance extends Rpc
{
}

/**
 * @method string getFinalAction()
 * @method $this withFinalAction($value)
 * @method string getFinalPrompt()
 * @method $this withFinalPrompt($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getIntentTrigger()
 * @method $this withIntentTrigger($value)
 * @method string getTimeout()
 * @method $this withTimeout($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSourceType()
 * @method $this withSourceType($value)
 * @method string getFinalActionParams()
 * @method $this withFinalActionParams($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 */
class ModifySilenceTimeoutConfig extends Rpc
{
}

/**
 * @method string getVoice()
 * @method $this withVoice($value)
 * @method string getVolume()
 * @method $this withVolume($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getSpeechRate()
 * @method $this withSpeechRate($value)
 */
class ModifyTTSConfig extends Rpc
{
}

/**
 * @method string getFinalAction()
 * @method $this withFinalAction($value)
 * @method string getFinalPrompt()
 * @method $this withFinalPrompt($value)
 * @method string getThreshold()
 * @method $this withThreshold($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFinalActionParams()
 * @method $this withFinalActionParams($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 */
class ModifyUnrecognizingConfig extends Rpc
{
}

/**
 * @method string getBeginTimeLeftRange()
 * @method $this withBeginTimeLeftRange($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getBeginTimeRightRange()
 * @method $this withBeginTimeRightRange($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class QueryConversations extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getDuration()
 * @method $this withDuration($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFileName()
 * @method $this withFileName($value)
 * @method string getFilePath()
 * @method $this withFilePath($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class SaveRecording extends Rpc
{
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInitialContext()
 * @method $this withInitialContext($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getInstanceOwnerId()
 * @method $this withInstanceOwnerId($value)
 */
class SilenceTimeout extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getEnable()
 * @method $this withEnable($value)
 */
class UpdateNewBargeInSwitch extends Rpc
{
}
