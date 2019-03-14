<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api Feedback
 *
 * @method string getFeedback()
 * @method string getInstanceId()
 * @method string getMessageId()
 * @method string getSessionId()
 */
class Feedback extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';

    /**
     * @param string $feedback
     *
     * @return $this
     */
    public function withFeedback($feedback)
    {
        $this->data['Feedback'] = $feedback;
        $this->options['query']['Feedback'] = $feedback;

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
     * @param string $messageId
     *
     * @return $this
     */
    public function withMessageId($messageId)
    {
        $this->data['MessageId'] = $messageId;
        $this->options['query']['MessageId'] = $messageId;

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
}
