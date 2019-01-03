<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UpdateEdgeInstanceFunction
 *
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
     * @deprecated deprecated since version 2.0, Use withRunMode() instead.
     *
     * @param string $runMode
     *
     * @return $this
     */
    public function setRunMode($runMode)
    {
        return $this->withRunMode($runMode);
    }

    /**
     * @param string $runMode
     *
     * @return $this
     */
    public function withRunMode($runMode)
    {
        $this->data['RunMode'] = $runMode;
        $this->options['query']['RunMode'] = $runMode;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withMemorySize() instead.
     *
     * @param string $memorySize
     *
     * @return $this
     */
    public function setMemorySize($memorySize)
    {
        return $this->withMemorySize($memorySize);
    }

    /**
     * @param string $memorySize
     *
     * @return $this
     */
    public function withMemorySize($memorySize)
    {
        $this->data['MemorySize'] = $memorySize;
        $this->options['query']['MemorySize'] = $memorySize;

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
     * @deprecated deprecated since version 2.0, Use withTriggerContent() instead.
     *
     * @param string $triggerContent
     *
     * @return $this
     */
    public function setTriggerContent($triggerContent)
    {
        return $this->withTriggerContent($triggerContent);
    }

    /**
     * @param string $triggerContent
     *
     * @return $this
     */
    public function withTriggerContent($triggerContent)
    {
        $this->data['TriggerContent'] = $triggerContent;
        $this->options['query']['TriggerContent'] = $triggerContent;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTimeout() instead.
     *
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        return $this->withTimeout($timeout);
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function withTimeout($timeout)
    {
        $this->data['Timeout'] = $timeout;
        $this->options['query']['Timeout'] = $timeout;

        return $this;
    }
}
