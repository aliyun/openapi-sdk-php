<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * Api SendDryRunSystemEvent
 *
 * @method string getProduct()
 * @method string getGroupId()
 * @method string getEventName()
 * @method string getEventContent()
 */
class SendDryRunSystemEvent extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

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
