<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api CreateIntent
 *
 * @method string getIntentDefinition()
 * @method string getDialogId()
 */
class CreateIntent extends Rpc
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
     * @param string $dialogId
     *
     * @return $this
     */
    public function withDialogId($dialogId)
    {
        $this->data['DialogId'] = $dialogId;
        $this->options['query']['DialogId'] = $dialogId;

        return $this;
    }
}
