<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteIntent
 *
 * @method string getIntentId()
 */
class DeleteIntent extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Chatbot';

    /**
     * @var string
     */
    public $version = '2017-10-11';

    /**
     * @var string
     */
    public $action = 'DeleteIntent';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withIntentId() instead.
     *
     * @param string $intentId
     *
     * @return $this
     */
    public function setIntentId($intentId)
    {
        return $this->withIntentId($intentId);
    }

    /**
     * @param string $intentId
     *
     * @return $this
     */
    public function withIntentId($intentId)
    {
        $this->data['IntentId'] = $intentId;
        $this->options['query']['IntentId'] = $intentId;

        return $this;
    }
}
