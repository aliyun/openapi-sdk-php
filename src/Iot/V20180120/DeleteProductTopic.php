<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteProductTopic
 *
 * @method string getTopicId()
 */
class DeleteProductTopic extends RpcRequest
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
    public $action = 'DeleteProductTopic';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTopicId() instead.
     *
     * @param string $topicId
     *
     * @return $this
     */
    public function setTopicId($topicId)
    {
        return $this->withTopicId($topicId);
    }

    /**
     * @param string $topicId
     *
     * @return $this
     */
    public function withTopicId($topicId)
    {
        $this->data['TopicId'] = $topicId;
        $this->options['query']['TopicId'] = $topicId;

        return $this;
    }
}
