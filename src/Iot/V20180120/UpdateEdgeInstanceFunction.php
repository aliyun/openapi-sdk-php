<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getRunMode()
 * @method string getFunctionId()
 * @method string getMemorySize()
 * @method string getInstanceId()
 * @method string getTriggerContent()
 * @method string getTimeout()
 */
class UpdateEdgeInstanceFunction extends RpcRequest
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
    public $action = 'UpdateEdgeInstanceFunction';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $runMode
     *
     * @return $this
     */
    public function withRunMode($runMode)
    {
        $this->data['RunMode']             = $runMode;
        $this->options['query']['RunMode'] = $runMode;

        return $this;
    }

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
     * @param string $memorySize
     *
     * @return $this
     */
    public function withMemorySize($memorySize)
    {
        $this->data['MemorySize']             = $memorySize;
        $this->options['query']['MemorySize'] = $memorySize;

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

    /**
     * @param string $triggerContent
     *
     * @return $this
     */
    public function withTriggerContent($triggerContent)
    {
        $this->data['TriggerContent']             = $triggerContent;
        $this->options['query']['TriggerContent'] = $triggerContent;

        return $this;
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function withTimeout($timeout)
    {
        $this->data['Timeout']             = $timeout;
        $this->options['query']['Timeout'] = $timeout;

        return $this;
    }
}
