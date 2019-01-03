<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateDialog
 *
 * @method string getDescription()
 * @method string getDialogId()
 * @method string getDialogName()
 */
class UpdateDialog extends RpcRequest
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
    public $action = 'UpdateDialog';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withDescription() instead.
     *
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->withDescription($description);
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withDialogName() instead.
     *
     * @param string $dialogName
     *
     * @return $this
     */
    public function setDialogName($dialogName)
    {
        return $this->withDialogName($dialogName);
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
