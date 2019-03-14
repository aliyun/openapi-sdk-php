<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api UpdateIntent
 *
 * @method string getIntentDefinition()
 * @method string getIntentId()
 */
class UpdateIntent extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

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
