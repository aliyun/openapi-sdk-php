<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyPhoneNumber
 *
 * @method string getContactFlowId()
 * @method string getInstanceId()
 * @method string getPhoneNumberId()
 * @method string getUsage()
 */
class ModifyPhoneNumber extends RpcRequest
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
    public $action = 'ModifyPhoneNumber';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withContactFlowId() instead.
     *
     * @param string $contactFlowId
     *
     * @return $this
     */
    public function setContactFlowId($contactFlowId)
    {
        return $this->withContactFlowId($contactFlowId);
    }

    /**
     * @param string $contactFlowId
     *
     * @return $this
     */
    public function withContactFlowId($contactFlowId)
    {
        $this->data['ContactFlowId'] = $contactFlowId;
        $this->options['query']['ContactFlowId'] = $contactFlowId;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withPhoneNumberId() instead.
     *
     * @param string $phoneNumberId
     *
     * @return $this
     */
    public function setPhoneNumberId($phoneNumberId)
    {
        return $this->withPhoneNumberId($phoneNumberId);
    }

    /**
     * @param string $phoneNumberId
     *
     * @return $this
     */
    public function withPhoneNumberId($phoneNumberId)
    {
        $this->data['PhoneNumberId'] = $phoneNumberId;
        $this->options['query']['PhoneNumberId'] = $phoneNumberId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUsage() instead.
     *
     * @param string $usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        return $this->withUsage($usage);
    }

    /**
     * @param string $usage
     *
     * @return $this
     */
    public function withUsage($usage)
    {
        $this->data['Usage'] = $usage;
        $this->options['query']['Usage'] = $usage;

        return $this;
    }
}
