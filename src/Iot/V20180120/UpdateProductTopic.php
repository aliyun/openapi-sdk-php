<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateProductTopic
 *
 * @method string getTopicId()
 * @method string getOperation()
 * @method string getTopicShortName()
 * @method string getDesc()
 */
class UpdateProductTopic extends RpcRequest
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
    public $action = 'UpdateProductTopic';

    /**
     * @var string
     */
    public $method = 'POST';

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

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function withOperation($operation)
    {
        $this->data['Operation'] = $operation;
        $this->options['query']['Operation'] = $operation;

        return $this;
    }

    /**
     * @param string $topicShortName
     *
     * @return $this
     */
    public function withTopicShortName($topicShortName)
    {
        $this->data['TopicShortName'] = $topicShortName;
        $this->options['query']['TopicShortName'] = $topicShortName;

        return $this;
    }

    /**
     * @param string $desc
     *
     * @return $this
     */
    public function withDesc($desc)
    {
        $this->data['Desc'] = $desc;
        $this->options['query']['Desc'] = $desc;

        return $this;
    }
}
