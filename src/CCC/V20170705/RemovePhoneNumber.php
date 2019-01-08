<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemovePhoneNumber
 *
 * @method string getInstanceId()
 * @method string getPhoneNumberId()
 */
class RemovePhoneNumber extends RpcRequest
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
    public $action = 'RemovePhoneNumber';

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
}
