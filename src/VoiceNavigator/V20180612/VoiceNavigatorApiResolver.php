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
 * @method DescribeConversation describeConversation(array $options = [])
 * @method DescribeConversationContext describeConversationContext(array $options = [])
 * @method DescribeExportProgress describeExportProgress(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeNavigationConfig describeNavigationConfig(array $options = [])
 * @method DescribeRecording describeRecording(array $options = [])
 * @method DescribeStatisticalData describeStatisticalData(array $options = [])
 * @method DescribeTTSConfig describeTTSConfig(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DisableInstance disableInstance(array $options = [])
 * @method EnableInstance enableInstance(array $options = [])
 * @method EndDialogue endDialogue(array $options = [])
 * @method ExportConversationDetails exportConversationDetails(array $options = [])
 * @method ExportStatisticalData exportStatisticalData(array $options = [])
 * @method GenerateUploadUrl generateUploadUrl(array $options = [])
 * @method GetAsrConfig getAsrConfig(array $options = [])
 * @method GetRealTimeConcurrency getRealTimeConcurrency(array $options = [])
 * @method ListChatbotInstances listChatbotInstances(array $options = [])
 * @method ListConversationDetails listConversationDetails(array $options = [])
 * @method ListConversations listConversations(array $options = [])
 * @method ListDownloadTasks listDownloadTasks(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ModifyAsrConfig modifyAsrConfig(array $options = [])
 * @method ModifyGreetingConfig modifyGreetingConfig(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ModifySilenceTimeoutConfig modifySilenceTimeoutConfig(array $options = [])
 * @method ModifyTTSConfig modifyTTSConfig(array $options = [])
 * @method ModifyUnrecognizingConfig modifyUnrecognizingConfig(array $options = [])
 * @method QueryConversations queryConversations(array $options = [])
 * @method SaveRecording saveRecording(array $options = [])
 * @method SilenceTimeout silenceTimeout(array $options = [])
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
 * @method string getNeedVoiceSliceRecording()
 * @method $this withNeedVoiceSliceRecording($value)
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
 * @method array getOptions()
 */
class ExportConversationDetails extends Rpc
{

    /**
     * @param array $options
     *
     * @return $this
     */
	public function withOptions(array $options)
	{
	    $this->data['Options'] = $options;
		foreach ($options as $i => $iValue) {
			$this->options['query']['Options.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getCallerParentId()
 * @method string getSecurityTransport()
 * @method string getProxyOriginalSecurityTransport()
 * @method string getUserId()
 * @method string getCallerType()
 * @method string getCallerIp()
 * @method string getSecurityToken()
 * @method string getInstanceOwnerId()
 * @method string getClientIp()
 * @method string getTenantId()
 * @method string getProxyOriginalSourceIp()
 * @method string getKey()
 * @method string getCallerUid()
 * @method string getCallerBid()
 * @method string getXspaceTenantBuId()
 * @method string getMfaPresent()
 * @method string getEnvironment()
 * @method string getFileName()
 * @method string getInstanceId()
 * @method string getRequestId()
 * @method string getXspaceServicerId()
 * @method string getTenantName()
 * @method string getProxyTrustTransportInfo()
 * @method string getUserName()
 */
class GenerateUploadUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerParentId($value)
    {
        $this->data['CallerParentId'] = $value;
        $this->options['form_params']['CallerParentId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityTransport($value)
    {
        $this->data['SecurityTransport'] = $value;
        $this->options['form_params']['SecurityTransport'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyOriginalSecurityTransport($value)
    {
        $this->data['ProxyOriginalSecurityTransport'] = $value;
        $this->options['form_params']['ProxyOriginalSecurityTransport'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerType($value)
    {
        $this->data['CallerType'] = $value;
        $this->options['form_params']['CallerType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerIp($value)
    {
        $this->data['CallerIp'] = $value;
        $this->options['form_params']['CallerIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSecurityToken($value)
    {
        $this->data['SecurityToken'] = $value;
        $this->options['form_params']['SecurityToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withInstanceOwnerId($value)
    {
        $this->data['InstanceOwnerId'] = $value;
        $this->options['form_params']['InstanceOwnerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientIp($value)
    {
        $this->data['ClientIp'] = $value;
        $this->options['form_params']['ClientIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantId($value)
    {
        $this->data['TenantId'] = $value;
        $this->options['form_params']['TenantId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyOriginalSourceIp($value)
    {
        $this->data['ProxyOriginalSourceIp'] = $value;
        $this->options['form_params']['ProxyOriginalSourceIp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withKey($value)
    {
        $this->data['Key'] = $value;
        $this->options['form_params']['Key'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerUid($value)
    {
        $this->data['CallerUid'] = $value;
        $this->options['form_params']['CallerUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCallerBid($value)
    {
        $this->data['CallerBid'] = $value;
        $this->options['form_params']['CallerBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXspaceTenantBuId($value)
    {
        $this->data['XspaceTenantBuId'] = $value;
        $this->options['form_params']['XspaceTenantBuId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMfaPresent($value)
    {
        $this->data['MfaPresent'] = $value;
        $this->options['form_params']['MfaPresent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEnvironment($value)
    {
        $this->data['Environment'] = $value;
        $this->options['form_params']['Environment'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

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
    public function withRequestId($value)
    {
        $this->data['RequestId'] = $value;
        $this->options['form_params']['RequestId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withXspaceServicerId($value)
    {
        $this->data['XspaceServicerId'] = $value;
        $this->options['form_params']['XspaceServicerId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTenantName($value)
    {
        $this->data['TenantName'] = $value;
        $this->options['form_params']['TenantName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProxyTrustTransportInfo($value)
    {
        $this->data['ProxyTrustTransportInfo'] = $value;
        $this->options['form_params']['ProxyTrustTransportInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserName($value)
    {
        $this->data['UserName'] = $value;
        $this->options['form_params']['UserName'] = $value;

        return $this;
    }
}

/**
 * @method string getEntryId()
 * @method $this withEntryId($value)
 * @method string getConfigLevel()
 * @method $this withConfigLevel($value)
 */
class GetAsrConfig extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetRealTimeConcurrency extends Rpc
{

    /** @var string */
    public $method = 'GET';
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
 * @method string getIsSandBox()
 * @method $this withIsSandBox($value)
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
 * @method string getNluServiceTypeListJsonString()
 * @method $this withNluServiceTypeListJsonString($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListInstances extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getAsrVocabularyId()
 * @method $this withAsrVocabularyId($value)
 * @method string getAsrClassVocabularyId()
 * @method $this withAsrClassVocabularyId($value)
 * @method string getEntryId()
 * @method $this withEntryId($value)
 * @method string getAsrCustomizationId()
 * @method $this withAsrCustomizationId($value)
 * @method string getConfigLevel()
 * @method $this withConfigLevel($value)
 * @method string getAsrAcousticModelId()
 * @method $this withAsrAcousticModelId($value)
 */
class ModifyAsrConfig extends Rpc
{
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
 * @method string getVoiceSliceRecordingList()
 * @method $this withVoiceSliceRecordingList($value)
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
