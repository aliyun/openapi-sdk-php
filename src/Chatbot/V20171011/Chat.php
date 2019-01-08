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
