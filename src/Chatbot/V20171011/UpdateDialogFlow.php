<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDialogFlow
 *
 * @method string getModuleDefinition()
 * @method string getDialogId()
 */
class UpdateDialogFlow extends RpcRequest
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
    public $action = 'UpdateDialogFlow';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withModuleDefinition() instead.
     *
     * @param string $moduleDefinition
     *
     * @return $this
     */
    public function setModuleDefinition($moduleDefinition)
    {
        return $this->withModuleDefinition($moduleDefinition);
    }

    /**
     * @param string $moduleDefinition
     *
     * @return $this
     */
    public function withModuleDefinition($moduleDefinition)
    {
        $this->data['ModuleDefinition'] = $moduleDefinition;
        $this->options['query']['ModuleDefinition'] = $moduleDefinition;

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
