<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTopicRouteTable
 *
 * @method string getTopic()
 */
class QueryTopicRouteTable extends RpcRequest
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
    public $action = 'QueryTopicRouteTable';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withTopic() instead.
     *
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        return $this->withTopic($topic);
    }

    /**
     * @param string $topic
     *
     * @return $this
     */
    public function withTopic($topic)
    {
        $this->data['Topic'] = $topic;
        $this->options['query']['Topic'] = $topic;

        return $this;
    }
}
