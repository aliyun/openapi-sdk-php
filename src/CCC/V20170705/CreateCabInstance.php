<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCabInstance
 *
 * @method string getMaxConcurrentConversation()
 * @method string getInstanceName()
 * @method string getCallCenterInstanceId()
 * @method string getInstanceDescription()
 */
class CreateCabInstance extends RpcRequest
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
    public $action = 'CreateCabInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
