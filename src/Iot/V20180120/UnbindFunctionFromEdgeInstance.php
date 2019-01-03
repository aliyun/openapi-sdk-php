<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UnbindFunctionFromEdgeInstance
 *
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
     * @deprecated deprecated since version 2.0, Use withFunctionId() instead.
     *
     * @param string $functionId
     *
     * @return $this
     */
    public function setFunctionId($functionId)
    {
        return $this->withFunctionId($functionId);
    }

    /**
     * @param string $functionId
     *
     * @return $this
     */
    public function withFunctionId($functionId)
    {
        $this->data['FunctionId'] = $functionId;
        $this->options['query']['FunctionId'] = $functionId;

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
}
