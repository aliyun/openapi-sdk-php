<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendDryRunSystemEvent
 *
 * @method string getProduct()
 * @method string getGroupId()
 * @method string getEventName()
 * @method string getEventContent()
 */
class SendDryRunSystemEvent extends RpcRequest
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
    public $action = 'SendDryRunSystemEvent';

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
     * @deprecated deprecated since version 2.0, Use withGroupId() instead.
     *
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        return $this->withGroupId($groupId);
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

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

    /**
     * @deprecated deprecated since version 2.0, Use withEventContent() instead.
     *
     * @param string $eventContent
     *
     * @return $this
     */
    public function setEventContent($eventContent)
    {
        return $this->withEventContent($eventContent);
    }

    /**
     * @param string $eventContent
     *
     * @return $this
     */
    public function withEventContent($eventContent)
    {
        $this->data['EventContent'] = $eventContent;
        $this->options['query']['EventContent'] = $eventContent;

        return $this;
    }
}
