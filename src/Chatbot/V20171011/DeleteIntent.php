<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api DeleteIntent
 *
 * @method string getIntentId()
 */
class DeleteIntent extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';

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
