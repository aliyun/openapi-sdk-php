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
