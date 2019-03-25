<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method GetHotlineRecord getHotlineRecord(array $options = [])
 * @method QueryHotlineRecord queryHotlineRecord(array $options = [])
 * @method QueryServiceRecord queryServiceRecord(array $options = [])
 * @method GetServiceRecord getServiceRecord(array $options = [])
 * @method ProceedTicket proceedTicket(array $options = [])
 * @method QueryRobotSession queryRobotSession(array $options = [])
 * @method LastRobotSession lastRobotSession(array $options = [])
 * @method EvaluateRobotSession evaluateRobotSession(array $options = [])
 * @method CreateRobotSession createRobotSession(array $options = [])
 * @method CloseRobotSession closeRobotSession(array $options = [])
 * @method ChatRobotSession chatRobotSession(array $options = [])
 * @method AssumeOss assumeOss(array $options = [])
 * @method CheckInspectAudio checkInspectAudio(array $options = [])
 * @method CheckInspectText checkInspectText(array $options = [])
 * @method GetInspectResult getInspectResult(array $options = [])
 * @method CreateTicket createTicket(array $options = [])
 * @method QueryTicket queryTicket(array $options = [])
 */
class CcsApiResolver
{
    use ApiResolverTrait;
}

class V20171001Rpc extends Rpc
{
    /** @var string */
    public $product = 'Ccs';

    /** @var string */
    public $version = '2017-10-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'ccs';
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class GetHotlineRecord extends V20171001Rpc
{
}

/**
 * @method string getAgentId()
 * @method $this withAgentId($value)
 * @method string getMaxTalkDuration()
 * @method $this withMaxTalkDuration($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSatisfaction()
 * @method $this withSatisfaction($value)
 * @method string getMinTalkDuratoin()
 * @method $this withMinTalkDuratoin($value)
 * @method string getCategoryIds()
 * @method $this withCategoryIds($value)
 * @method string getVisitorProvince()
 * @method $this withVisitorProvince($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCallType()
 * @method $this withCallType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorPhone()
 * @method $this withVisitorPhone($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryHotlineRecord extends V20171001Rpc
{
}

/**
 * @method string getVisitorProvince()
 * @method $this withVisitorProvince($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 */
class QueryServiceRecord extends V20171001Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getId()
 * @method $this withId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class GetServiceRecord extends V20171001Rpc
{
}

/**
 * @method string getMemo()
 * @method $this withMemo($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 * @method string getOperatorId()
 * @method $this withOperatorId($value)
 */
class ProceedTicket extends V20171001Rpc
{
}

/**
 * @method string getAnswerSource()
 * @method $this withAnswerSource($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getSatisfaction()
 * @method $this withSatisfaction($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class QueryRobotSession extends V20171001Rpc
{
}

/**
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 */
class LastRobotSession extends V20171001Rpc
{
}

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getSatisfaction()
 * @method $this withSatisfaction($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class EvaluateRobotSession extends V20171001Rpc
{
}

/**
 * @method string getVisitorIp()
 * @method $this withVisitorIp($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getRobotId()
 * @method $this withRobotId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getVisitorId()
 * @method $this withVisitorId($value)
 */
class CreateRobotSession extends V20171001Rpc
{
}

/**
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class CloseRobotSession extends V20171001Rpc
{
}

/**
 * @method string getKnowledgeId()
 * @method $this withKnowledgeId($value)
 * @method string getJsonFactors()
 * @method $this withJsonFactors($value)
 * @method string getIntentionId()
 * @method $this withIntentionId($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getUtterance()
 * @method $this withUtterance($value)
 */
class ChatRobotSession extends V20171001Rpc
{
}

/**
 * @method string getType()
 * @method $this withType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class AssumeOss extends V20171001Rpc
{
}

/**
 * @method string getResourceValue()
 * @method $this withResourceValue($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 */
class CheckInspectAudio extends V20171001Rpc
{
}

/**
 * @method array getSentence()
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class CheckInspectText extends V20171001Rpc
{

    /**
     * @param array $sentence
     *
     * @return $this
     */
    public function withSentence(array $sentence)
    {
        $this->data['Sentence'] = $sentence;
        foreach ($sentence as $depth1 => $depth1Value) {
            $this->options['query']['Sentence.' . ($depth1 + 1) . '.Speaker'] = $depth1Value['Speaker'];
            $this->options['query']['Sentence.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
            $this->options['query']['Sentence.' . ($depth1 + 1) . '.StartTime'] = $depth1Value['StartTime'];
            $this->options['query']['Sentence.' . ($depth1 + 1) . '.Content'] = $depth1Value['Content'];
        }

        return $this;
    }
}

/**
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetInspectResult extends V20171001Rpc
{
}

/**
 * @method string getCreatorId()
 * @method $this withCreatorId($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 * @method string getCustomFields()
 * @method $this withCustomFields($value)
 */
class CreateTicket extends V20171001Rpc
{
}

/**
 * @method string getStage()
 * @method $this withStage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCreatorId()
 * @method $this withCreatorId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getCcsInstanceId()
 * @method $this withCcsInstanceId($value)
 */
class QueryTicket extends V20171001Rpc
{
}
