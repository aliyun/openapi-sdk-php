<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendPredefinedShortMessage
 *
 * @method string getInstanceId()
 * @method string getPhoneNumbers()
 * @method string getConfigId()
 * @method string getTemplateParam()
 */
class SendPredefinedShortMessage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'SendPredefinedShortMessage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

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
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function withPhoneNumbers($phoneNumbers)
    {
        $this->data['PhoneNumbers'] = $phoneNumbers;
        $this->options['query']['PhoneNumbers'] = $phoneNumbers;

        return $this;
    }

    /**
     * @param string $configId
     *
     * @return $this
     */
    public function withConfigId($configId)
    {
        $this->data['ConfigId'] = $configId;
        $this->options['query']['ConfigId'] = $configId;

        return $this;
    }

    /**
     * @param string $templateParam
     *
     * @return $this
     */
    public function withTemplateParam($templateParam)
    {
        $this->data['TemplateParam'] = $templateParam;
        $this->options['query']['TemplateParam'] = $templateParam;

        return $this;
    }
}
