<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
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
     * @param string $roleArn
     *
     * @return $this
     */
    public function withRoleArn($roleArn)
    {
        $this->data['RoleArn']             = $roleArn;
        $this->options['query']['RoleArn'] = $roleArn;

        return $this;
    }

    /**
     * @param string $functionName
     *
     * @return $this
     */
    public function withFunctionName($functionName)
    {
        $this->data['FunctionName']             = $functionName;
        $this->options['query']['FunctionName'] = $functionName;

        return $this;
    }

    /**
     * @param string $fcRegionId
     *
     * @return $this
     */
    public function withFcRegionId($fcRegionId)
    {
        $this->data['FcRegionId']             = $fcRegionId;
        $this->options['query']['FcRegionId'] = $fcRegionId;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function withServiceName($serviceName)
    {
        $this->data['ServiceName']             = $serviceName;
        $this->options['query']['ServiceName'] = $serviceName;

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
