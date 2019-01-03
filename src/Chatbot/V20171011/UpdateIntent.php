<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateIntent
 *
 * @method string getIntentDefinition()
 * @method string getIntentId()
 */
class UpdateIntent extends RpcRequest
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
    public $action = 'UpdateIntent';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withIntentDefinition() instead.
     *
     * @param string $intentDefinition
     *
     * @return $this
     */
    public function setIntentDefinition($intentDefinition)
    {
        return $this->withIntentDefinition($intentDefinition);
    }

    /**
     * @param string $intentDefinition
     *
     * @return $this
     */
    public function withIntentDefinition($intentDefinition)
    {
        $this->data['IntentDefinition'] = $intentDefinition;
        $this->options['query']['IntentDefinition'] = $intentDefinition;

        return $this;
    }

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
