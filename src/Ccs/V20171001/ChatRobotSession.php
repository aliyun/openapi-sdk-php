<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * Api ChatRobotSession
 *
 * @method string getKnowledgeId()
 * @method string getJsonFactors()
 * @method string getIntentionId()
 * @method string getSessionId()
 * @method string getCcsInstanceId()
 * @method string getUtterance()
 */
class ChatRobotSession extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';

    /**
     * @param string $knowledgeId
     *
     * @return $this
     */
    public function withKnowledgeId($knowledgeId)
    {
        $this->data['KnowledgeId'] = $knowledgeId;
        $this->options['query']['KnowledgeId'] = $knowledgeId;

        return $this;
    }

    /**
     * @param string $jsonFactors
     *
     * @return $this
     */
    public function withJsonFactors($jsonFactors)
    {
        $this->data['JsonFactors'] = $jsonFactors;
        $this->options['query']['JsonFactors'] = $jsonFactors;

        return $this;
    }

    /**
     * @param string $intentionId
     *
     * @return $this
     */
    public function withIntentionId($intentionId)
    {
        $this->data['IntentionId'] = $intentionId;
        $this->options['query']['IntentionId'] = $intentionId;

        return $this;
    }

    /**
     * @param string $sessionId
     *
     * @return $this
     */
    public function withSessionId($sessionId)
    {
        $this->data['SessionId'] = $sessionId;
        $this->options['query']['SessionId'] = $sessionId;

        return $this;
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @param string $utterance
     *
     * @return $this
     */
    public function withUtterance($utterance)
    {
        $this->data['Utterance'] = $utterance;
        $this->options['query']['Utterance'] = $utterance;

        return $this;
    }
}
