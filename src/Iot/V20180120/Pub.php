<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Rpc;

/**
 * Api Pub
 *
 * @method string getTopicFullName()
 * @method string getQos()
 * @method string getMessageContent()
 * @method string getIotInstanceId()
 * @method string getProductKey()
 */
class Pub extends Rpc
{
    public $product = 'Iot';

    public $version = '2018-01-20';

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
     * @param string $qos
     *
     * @return $this
     */
    public function withQos($qos)
    {
        $this->data['Qos'] = $qos;
        $this->options['query']['Qos'] = $qos;

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
