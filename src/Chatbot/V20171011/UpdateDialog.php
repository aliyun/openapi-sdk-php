<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Rpc;

/**
 * Api UpdateDialog
 *
 * @method string getDescription()
 * @method string getDialogId()
 * @method string getDialogName()
 */
class UpdateDialog extends Rpc
{
    public $product = 'Chatbot';

    public $version = '2017-10-11';

    public $method = 'POST';

    public $serviceCode = 'beebot';

    /**
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

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

    /**
     * @param string $dialogName
     *
     * @return $this
     */
    public function withDialogName($dialogName)
    {
        $this->data['DialogName'] = $dialogName;
        $this->options['query']['DialogName'] = $dialogName;

        return $this;
    }
}
