<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

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
     * @param array $value
     *
     * @return $this
     */
    public function withSentence(array $value)
    {
        $this->data['Sentence'] = $value;
        foreach ($value as $i => $iValue) {
            $this->options['query']['Sentence.' . ($i + 1) . '.Speaker'] = $value[$i]['Speaker'];
            $this->options['query']['Sentence.' . ($i + 1) . '.EndTime'] = $value[$i]['EndTime'];
            $this->options['query']['Sentence.' . ($i + 1) . '.StartTime'] = $value[$i]['StartTime'];
            $this->options['query']['Sentence.' . ($i + 1) . '.Content'] = $value[$i]['Content'];
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
