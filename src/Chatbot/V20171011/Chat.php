<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of Chat
 *
 * @method string getKnowledgeId()
 * @method string getSenderId()
 * @method string getInstanceId()
 * @method string getSenderNick()
 * @method array getPerspective()
 * @method string getSessionId()
 * @method string getTag()
 * @method string getUtterance()
 */
class Chat extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'Chat';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

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
     * @deprecated deprecated since version 2.0, Use withSenderId() instead.
     *
     * @param string $senderId
     *
     * @return $this
     */
    public function setSenderId($senderId)
    {
        return $this->withSenderId($senderId);
    }

    /**
     * @param string $senderId
     *
     * @return $this
     */
    public function withSenderId($senderId)
    {
        $this->data['SenderId'] = $senderId;
        $this->options['query']['SenderId'] = $senderId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSenderNick() instead.
     *
     * @param string $senderNick
     *
     * @return $this
     */
    public function setSenderNick($senderNick)
    {
        return $this->withSenderNick($senderNick);
    }

    /**
     * @param string $senderNick
     *
     * @return $this
     */
    public function withSenderNick($senderNick)
    {
        $this->data['SenderNick'] = $senderNick;
        $this->options['query']['SenderNick'] = $senderNick;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getPerspective() instead.
     *
     * @return array
     */
    public function getPerspectives()
    {
        return $this->getPerspective();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPerspective() instead.
     *
     * @param array $perspectives
     *
     * @return $this
     */
    public function setPerspectives(array $perspectives)
    {
        return $this->withPerspective($perspectives);
    }

    /**
     * @param array $perspective
     *
     * @return $this
     */
    public function withPerspective(array $perspective)
    {
        $this->data['Perspective'] = $perspective;
        foreach ($perspective as $i => $iValue) {
            $this->options['query']['Perspective.' . ($i + 1)] = $iValue;
        }

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
     * @deprecated deprecated since version 2.0, Use withTag() instead.
     *
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        return $this->withTag($tag);
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function withTag($tag)
    {
        $this->data['Tag'] = $tag;
        $this->options['query']['Tag'] = $tag;

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
