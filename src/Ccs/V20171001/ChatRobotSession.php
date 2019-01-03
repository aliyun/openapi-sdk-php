<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ChatRobotSession
 *
 * @method string getKnowledgeId()
 * @method string getJsonFactors()
 * @method string getIntentionId()
 * @method string getSessionId()
 * @method string getCcsInstanceId()
 * @method string getUtterance()
 */
class ChatRobotSession extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'ChatRobotSession';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use withKnowledgeId() instead.
     *
     * @param string $knowledgeId
     *
     * @return $this
     */
    public function setKnowledgeId($knowledgeId)
    {
        return $this->withKnowledgeId($knowledgeId);
    }

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
     * @deprecated deprecated since version 2.0, Use withJsonFactors() instead.
     *
     * @param string $jsonFactors
     *
     * @return $this
     */
    public function setJsonFactors($jsonFactors)
    {
        return $this->withJsonFactors($jsonFactors);
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
     * @deprecated deprecated since version 2.0, Use withIntentionId() instead.
     *
     * @param string $intentionId
     *
     * @return $this
     */
    public function setIntentionId($intentionId)
    {
        return $this->withIntentionId($intentionId);
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
     * @deprecated deprecated since version 2.0, Use withSessionId() instead.
     *
     * @param string $sessionId
     *
     * @return $this
     */
    public function setSessionId($sessionId)
    {
        return $this->withSessionId($sessionId);
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
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withUtterance() instead.
     *
     * @param string $utterance
     *
     * @return $this
     */
    public function setUtterance($utterance)
    {
        return $this->withUtterance($utterance);
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
