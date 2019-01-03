<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateIntent
 *
 * @method string getIntentDefinition()
 * @method string getDialogId()
 */
class CreateIntent extends RpcRequest
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
    public $action = 'CreateIntent';

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
     * @deprecated deprecated since version 2.0, Use withDialogId() instead.
     *
     * @param string $dialogId
     *
     * @return $this
     */
    public function setDialogId($dialogId)
    {
        return $this->withDialogId($dialogId);
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
