<?php

namespace AlibabaCloud\VoiceNavigator\V20180612;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AuditTTSVoice auditTTSVoice(array $options = [])
 * @method Authorized authorized(array $options = [])
 * @method BatchDeleteNavigationScripts batchDeleteNavigationScripts(array $options = [])
 * @method BatchMoveNavigationScripts batchMoveNavigationScripts(array $options = [])
 * @method BeginDialogue beginDialogue(array $options = [])
 * @method CollectedNumber collectedNumber(array $options = [])
 * @method CreateCategory createCategory(array $options = [])
 * @method CreateInstance createInstance(array $options = [])
 * @method CreateKnowledge createKnowledge(array $options = [])
 * @method CreateRedirection createRedirection(array $options = [])
 * @method DebugAuthorized debugAuthorized(array $options = [])
 * @method DebugBeginDialogue debugBeginDialogue(array $options = [])
 * @method DebugCollectedNumber debugCollectedNumber(array $options = [])
 * @method DebugDialogue debugDialogue(array $options = [])
 * @method DeleteCategory deleteCategory(array $options = [])
 * @method DeleteInstance deleteInstance(array $options = [])
 * @method DeleteNavigationScript deleteNavigationScript(array $options = [])
 * @method DescribeCategoryTree describeCategoryTree(array $options = [])
 * @method DescribeConversation describeConversation(array $options = [])
 * @method DescribeConversationContext describeConversationContext(array $options = [])
 * @method DescribeExportProgress describeExportProgress(array $options = [])
 * @method DescribeInstance describeInstance(array $options = [])
 * @method DescribeKnowledge describeKnowledge(array $options = [])
 * @method DescribeNavigationConfig describeNavigationConfig(array $options = [])
 * @method DescribeRecording describeRecording(array $options = [])
 * @method DescribeRedirection describeRedirection(array $options = [])
 * @method DescribeStatisticalData describeStatisticalData(array $options = [])
 * @method DescribeTTSConfig describeTTSConfig(array $options = [])
 * @method Dialogue dialogue(array $options = [])
 * @method DisableInstance disableInstance(array $options = [])
 * @method DuplicateInstance duplicateInstance(array $options = [])
 * @method EnableInstance enableInstance(array $options = [])
 * @method EndDialogue endDialogue(array $options = [])
 * @method ExportConversationDetails exportConversationDetails(array $options = [])
 * @method ExportStatisticalData exportStatisticalData(array $options = [])
 * @method ListCategories listCategories(array $options = [])
 * @method ListConversationDetails listConversationDetails(array $options = [])
 * @method ListConversations listConversations(array $options = [])
 * @method ListInstances listInstances(array $options = [])
 * @method ListNavigationScripts listNavigationScripts(array $options = [])
 * @method ListPublishHistories listPublishHistories(array $options = [])
 * @method ModifyAskingBackConfig modifyAskingBackConfig(array $options = [])
 * @method ModifyCategory modifyCategory(array $options = [])
 * @method ModifyComplainingConfig modifyComplainingConfig(array $options = [])
 * @method ModifyGreetingConfig modifyGreetingConfig(array $options = [])
 * @method ModifyInstance modifyInstance(array $options = [])
 * @method ModifyKnowledge modifyKnowledge(array $options = [])
 * @method ModifyRedirection modifyRedirection(array $options = [])
 * @method ModifyRepeatingConfig modifyRepeatingConfig(array $options = [])
 * @method ModifySilenceTimeoutConfig modifySilenceTimeoutConfig(array $options = [])
 * @method ModifyTTSConfig modifyTTSConfig(array $options = [])
 * @method ModifyUnrecognizingConfig modifyUnrecognizingConfig(array $options = [])
 * @method MoveCategory moveCategory(array $options = [])
 * @method MoveNavigationScript moveNavigationScript(array $options = [])
 * @method PublishInstance publishInstance(array $options = [])
 * @method QueryConversations queryConversations(array $options = [])
 * @method QueryNavigationScripts queryNavigationScripts(array $options = [])
 * @method QueryPerformanceIndicators queryPerformanceIndicators(array $options = [])
 * @method QueryRecording queryRecording(array $options = [])
 * @method RollbackInstance rollbackInstance(array $options = [])
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class Authorized extends Rpc
{
}

/**
 * @method array getNavigationScriptIds()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class BatchDeleteNavigationScripts extends Rpc
{

    /**
     * @param array $navigationScriptIds
     *
     * @return $this
     */
	public function withNavigationScriptIds(array $navigationScriptIds)
	{
	    $this->data['NavigationScriptIds'] = $navigationScriptIds;
		foreach ($navigationScriptIds as $i => $iValue) {
			$this->options['query']['NavigationScriptIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getNavigationScriptIds()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTargetCategoryId()
 * @method $this withTargetCategoryId($value)
 */
class BatchMoveNavigationScripts extends Rpc
{

    /**
     * @param array $navigationScriptIds
     *
     * @return $this
     */
	public function withNavigationScriptIds(array $navigationScriptIds)
	{
	    $this->data['NavigationScriptIds'] = $navigationScriptIds;
		foreach ($navigationScriptIds as $i => $iValue) {
			$this->options['query']['NavigationScriptIds.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 */
class CollectedNumber extends Rpc
{
}

/**
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 */
class CreateCategory extends Rpc
{
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
 */
class CreateInstance extends Rpc
{
}

/**
 * @method string getUserUtterance()
 * @method $this withUserUtterance($value)
 * @method string getInterruptible()
 * @method $this withInterruptible($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAnswer()
 * @method $this withAnswer($value)
 * @method array getSimilarUtterances()
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class CreateKnowledge extends Rpc
{

    /**
     * @param array $similarUtterances
     *
     * @return $this
     */
	public function withSimilarUtterances(array $similarUtterances)
	{
	    $this->data['SimilarUtterances'] = $similarUtterances;
		foreach ($similarUtterances as $i => $iValue) {
			$this->options['query']['SimilarUtterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRedirectionType()
 * @method $this withRedirectionType($value)
 * @method string getUserUtterance()
 * @method $this withUserUtterance($value)
 * @method string getInterruptible()
 * @method $this withInterruptible($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method array getSimilarUtterances()
 * @method string getRedirectionTarget()
 * @method $this withRedirectionTarget($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class CreateRedirection extends Rpc
{

    /**
     * @param array $similarUtterances
     *
     * @return $this
     */
	public function withSimilarUtterances(array $similarUtterances)
	{
	    $this->data['SimilarUtterances'] = $similarUtterances;
		foreach ($similarUtterances as $i => $iValue) {
			$this->options['query']['SimilarUtterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInitialContext()
 * @method $this withInitialContext($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DebugAuthorized extends Rpc
{
}

/**
 * @method string getCallingNumber()
 * @method $this withCallingNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCalledNumber()
 * @method $this withCalledNumber($value)
 * @method string getConversationId()
 * @method $this withConversationId($value)
 * @method string getInitialContext()
 * @method $this withInitialContext($value)
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
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class DeleteCategory extends Rpc
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
 * @method string getNavigationScriptId()
 * @method $this withNavigationScriptId($value)
 */
class DeleteNavigationScript extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class DescribeCategoryTree extends Rpc
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
 * @method string getNavigationScriptId()
 * @method $this withNavigationScriptId($value)
 */
class DescribeKnowledge extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNavigationScriptId()
 * @method $this withNavigationScriptId($value)
 */
class DescribeRedirection extends Rpc
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
class DuplicateInstance extends Rpc
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
 * @method string getParentId()
 * @method $this withParentId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ListCategories extends Rpc
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
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
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
class ListInstances extends Rpc
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
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class ListNavigationScripts extends Rpc
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
class ListPublishHistories extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getNegativeFeedbackPrompt()
 * @method $this withNegativeFeedbackPrompt($value)
 * @method string getNegativeFeedbackAction()
 * @method $this withNegativeFeedbackAction($value)
 * @method string getEnabled()
 * @method $this withEnabled($value)
 * @method string getEnableNegativeFeedback()
 * @method $this withEnableNegativeFeedback($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 * @method array getNegativeFeedbackUtterances()
 * @method string getNegativeFeedbackActionParams()
 * @method $this withNegativeFeedbackActionParams($value)
 */
class ModifyAskingBackConfig extends Rpc
{

    /**
     * @param array $negativeFeedbackUtterances
     *
     * @return $this
     */
	public function withNegativeFeedbackUtterances(array $negativeFeedbackUtterances)
	{
	    $this->data['NegativeFeedbackUtterances'] = $negativeFeedbackUtterances;
		foreach ($negativeFeedbackUtterances as $i => $iValue) {
			$this->options['query']['NegativeFeedbackUtterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class ModifyCategory extends Rpc
{
}

/**
 * @method array getUtterances()
 * @method string getFinalAction()
 * @method $this withFinalAction($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getFinalActionParams()
 * @method $this withFinalActionParams($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 */
class ModifyComplainingConfig extends Rpc
{

    /**
     * @param array $utterances
     *
     * @return $this
     */
	public function withUtterances(array $utterances)
	{
	    $this->data['Utterances'] = $utterances;
		foreach ($utterances as $i => $iValue) {
			$this->options['query']['Utterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getUserUtterance()
 * @method $this withUserUtterance($value)
 * @method string getInterruptible()
 * @method $this withInterruptible($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNavigationScriptId()
 * @method $this withNavigationScriptId($value)
 * @method string getAnswer()
 * @method $this withAnswer($value)
 * @method array getSimilarUtterances()
 */
class ModifyKnowledge extends Rpc
{

    /**
     * @param array $similarUtterances
     *
     * @return $this
     */
	public function withSimilarUtterances(array $similarUtterances)
	{
	    $this->data['SimilarUtterances'] = $similarUtterances;
		foreach ($similarUtterances as $i => $iValue) {
			$this->options['query']['SimilarUtterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRedirectionType()
 * @method $this withRedirectionType($value)
 * @method string getUserUtterance()
 * @method $this withUserUtterance($value)
 * @method string getInterruptible()
 * @method $this withInterruptible($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNavigationScriptId()
 * @method $this withNavigationScriptId($value)
 * @method array getSimilarUtterances()
 * @method string getRedirectionTarget()
 * @method $this withRedirectionTarget($value)
 * @method string getPrompt()
 * @method $this withPrompt($value)
 */
class ModifyRedirection extends Rpc
{

    /**
     * @param array $similarUtterances
     *
     * @return $this
     */
	public function withSimilarUtterances(array $similarUtterances)
	{
	    $this->data['SimilarUtterances'] = $similarUtterances;
		foreach ($similarUtterances as $i => $iValue) {
			$this->options['query']['SimilarUtterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getUtterances()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class ModifyRepeatingConfig extends Rpc
{

    /**
     * @param array $utterances
     *
     * @return $this
     */
	public function withUtterances(array $utterances)
	{
	    $this->data['Utterances'] = $utterances;
		foreach ($utterances as $i => $iValue) {
			$this->options['query']['Utterances.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
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
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTargetPreviousSiblingId()
 * @method $this withTargetPreviousSiblingId($value)
 * @method string getTargetParentId()
 * @method $this withTargetParentId($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class MoveCategory extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getNavigationScriptId()
 * @method $this withNavigationScriptId($value)
 * @method string getTargetCategoryId()
 * @method $this withTargetCategoryId($value)
 */
class MoveNavigationScript extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class PublishInstance extends Rpc
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
 * @method string getType()
 * @method $this withType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getCategoryId()
 * @method $this withCategoryId($value)
 */
class QueryNavigationScripts extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDateUnit()
 * @method $this withDateUnit($value)
 */
class QueryPerformanceIndicators extends Rpc
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
class QueryRecording extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getTargetVersion()
 * @method $this withTargetVersion($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class RollbackInstance extends Rpc
{
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
 */
class SilenceTimeout extends Rpc
{
}
