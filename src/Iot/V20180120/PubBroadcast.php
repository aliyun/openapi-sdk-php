<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of PubBroadcast
 *
 * @method string getTopicFullName()
 * @method string getMessageContent()
 * @method string getProductKey()
 */
class PubBroadcast extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'PubBroadcast';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $topicFullName
     *
     * @return $this
     */
    public function withTopicFullName($topicFullName)
    {
        $this->data['TopicFullName'] = $topicFullName;
        $this->options['query']['TopicFullName'] = $topicFullName;

        return $this;
    }

    /**
     * @param string $messageContent
     *
     * @return $this
     */
    public function withMessageContent($messageContent)
    {
        $this->data['MessageContent'] = $messageContent;
        $this->options['query']['MessageContent'] = $messageContent;

        return $this;
    }

    /**
     * @param string $productKey
     *
     * @return $this
     */
    public function withProductKey($productKey)
    {
        $this->data['ProductKey'] = $productKey;
        $this->options['query']['ProductKey'] = $productKey;

        return $this;
    }
}
