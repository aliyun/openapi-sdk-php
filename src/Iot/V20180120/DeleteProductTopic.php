<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api DeleteProductTopic
 *
 * @method string getTopicId()
 * @method string getIotInstanceId()
 */
class DeleteProductTopic extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

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
     * @param string $iotInstanceId
     *
     * @return $this
     */
    public function withIotInstanceId($iotInstanceId)
    {
        $this->data['IotInstanceId'] = $iotInstanceId;
        $this->options['query']['IotInstanceId'] = $iotInstanceId;

        return $this;
    }
}
