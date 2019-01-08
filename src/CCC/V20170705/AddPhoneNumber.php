<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddPhoneNumber
 *
 * @method string getContactFlowId()
 * @method string getInstanceId()
 * @method string getUsage()
 * @method string getPhoneNumber()
 */
class AddPhoneNumber extends RpcRequest
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
    public $action = 'AddPhoneNumber';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

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

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function withPhoneNumber($phoneNumber)
    {
        $this->data['PhoneNumber'] = $phoneNumber;
        $this->options['query']['PhoneNumber'] = $phoneNumber;

        return $this;
    }
}
