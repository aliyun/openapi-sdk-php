<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getFunctionId()
 * @method string getInstanceId()
 */
class UnbindFunctionFromEdgeInstance extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'UnbindFunctionFromEdgeInstance';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $functionId
     *
     * @return $this
     */
    public function withFunctionId($functionId)
    {
        $this->data['FunctionId']             = $functionId;
        $this->options['query']['FunctionId'] = $functionId;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId']             = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }
}
