<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QuerySystemEventDemo
 *
 * @method string getProduct()
 * @method string getEventName()
 */
class QuerySystemEventDemo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'QuerySystemEventDemo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $product
     *
     * @return $this
     */
    public function withProduct($product)
    {
        $this->data['Product'] = $product;
        $this->options['query']['Product'] = $product;

        return $this;
    }

    /**
     * @param string $eventName
     *
     * @return $this
     */
    public function withEventName($eventName)
    {
        $this->data['EventName'] = $eventName;
        $this->options['query']['EventName'] = $eventName;

        return $this;
    }
}
