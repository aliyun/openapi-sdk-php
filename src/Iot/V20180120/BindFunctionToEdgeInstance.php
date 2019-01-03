<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BindFunctionToEdgeInstance
 *
 * @method string getRunMode()
 * @method string getMemorySize()
 * @method string getInstanceId()
 * @method string getTriggerContent()
 * @method string getRoleArn()
 * @method string getFunctionName()
 * @method string getFcRegionId()
 * @method string getServiceName()
 * @method string getTimeout()
 */
class BindFunctionToEdgeInstance extends RpcRequest
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
    public $action = 'BindFunctionToEdgeInstance';

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
     * @deprecated deprecated since version 2.0, Use withRoleArn() instead.
     *
     * @param string $roleArn
     *
     * @return $this
     */
    public function setRoleArn($roleArn)
    {
        return $this->withRoleArn($roleArn);
    }

    /**
     * @param string $roleArn
     *
     * @return $this
     */
    public function withRoleArn($roleArn)
    {
        $this->data['RoleArn'] = $roleArn;
        $this->options['query']['RoleArn'] = $roleArn;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFunctionName() instead.
     *
     * @param string $functionName
     *
     * @return $this
     */
    public function setFunctionName($functionName)
    {
        return $this->withFunctionName($functionName);
    }

    /**
     * @param string $functionName
     *
     * @return $this
     */
    public function withFunctionName($functionName)
    {
        $this->data['FunctionName'] = $functionName;
        $this->options['query']['FunctionName'] = $functionName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFcRegionId() instead.
     *
     * @param string $fcRegionId
     *
     * @return $this
     */
    public function setFcRegionId($fcRegionId)
    {
        return $this->withFcRegionId($fcRegionId);
    }

    /**
     * @param string $fcRegionId
     *
     * @return $this
     */
    public function withFcRegionId($fcRegionId)
    {
        $this->data['FcRegionId'] = $fcRegionId;
        $this->options['query']['FcRegionId'] = $fcRegionId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withServiceName() instead.
     *
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        return $this->withServiceName($serviceName);
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function withServiceName($serviceName)
    {
        $this->data['ServiceName'] = $serviceName;
        $this->options['query']['ServiceName'] = $serviceName;

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
