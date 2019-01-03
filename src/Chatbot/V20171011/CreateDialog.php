<?php

namespace AlibabaCloud\Chatbot\V20171011;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateDialog
 *
 * @method string getInstanceId()
 * @method string getDescription()
 * @method string getDialogName()
 */
class CreateDialog extends RpcRequest
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
    public $action = 'CreateDialog';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'beebot';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

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
