<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api UpdateDialogFlow
 *
 * @method string getModuleDefinition()
 * @method string getDialogId()
 */
class UpdateDialogFlow extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';

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
