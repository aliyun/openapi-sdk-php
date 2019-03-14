<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api CreateCabInstance
 *
 * @method string getMaxConcurrentConversation()
 * @method string getInstanceName()
 * @method string getCallCenterInstanceId()
 * @method string getInstanceDescription()
 */
class CreateCabInstance extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param string $maxConcurrentConversation
     *
     * @return $this
     */
    public function withMaxConcurrentConversation($maxConcurrentConversation)
    {
        $this->data['MaxConcurrentConversation'] = $maxConcurrentConversation;
        $this->options['query']['MaxConcurrentConversation'] = $maxConcurrentConversation;

        return $this;
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function withInstanceName($instanceName)
    {
        $this->data['InstanceName'] = $instanceName;
        $this->options['query']['InstanceName'] = $instanceName;

        return $this;
    }

    /**
     * @param string $callCenterInstanceId
     *
     * @return $this
     */
    public function withCallCenterInstanceId($callCenterInstanceId)
    {
        $this->data['CallCenterInstanceId'] = $callCenterInstanceId;
        $this->options['query']['CallCenterInstanceId'] = $callCenterInstanceId;

        return $this;
    }

    /**
     * @param string $instanceDescription
     *
     * @return $this
     */
    public function withInstanceDescription($instanceDescription)
    {
        $this->data['InstanceDescription'] = $instanceDescription;
        $this->options['query']['InstanceDescription'] = $instanceDescription;

        return $this;
    }
}
