<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api RemovePhoneNumber
 *
 * @method string getInstanceId()
 * @method string getPhoneNumberId()
 */
class RemovePhoneNumber extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

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
