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
     * @deprecated deprecated since version 2.0, Use withPhoneNumbers() instead.
     *
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        return $this->withPhoneNumbers($phoneNumbers);
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
     * @deprecated deprecated since version 2.0, Use withConfigId() instead.
     *
     * @param string $configId
     *
     * @return $this
     */
    public function setConfigId($configId)
    {
        return $this->withConfigId($configId);
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
     * @deprecated deprecated since version 2.0, Use withTemplateParam() instead.
     *
     * @param string $templateParam
     *
     * @return $this
     */
    public function setTemplateParam($templateParam)
    {
        return $this->withTemplateParam($templateParam);
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
