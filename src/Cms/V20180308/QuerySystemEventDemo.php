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
     * @deprecated deprecated since version 2.0, Use withProduct() instead.
     *
     * @param string $product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        return $this->withProduct($product);
    }

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
     * @deprecated deprecated since version 2.0, Use withEventName() instead.
     *
     * @param string $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        return $this->withEventName($eventName);
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
