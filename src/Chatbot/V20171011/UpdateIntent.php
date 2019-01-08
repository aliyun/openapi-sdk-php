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
