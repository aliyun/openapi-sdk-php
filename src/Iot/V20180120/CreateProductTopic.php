<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateProductTopic
 *
 * @method string getProductKey()
 * @method string getTopicShortName()
 * @method string getOperation()
 * @method string getDesc()
 */
class CreateProductTopic extends RpcRequest
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
    public $action = 'CreateProductTopic';

    /**
     * @var string
     */
    public $method = 'POST';

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
