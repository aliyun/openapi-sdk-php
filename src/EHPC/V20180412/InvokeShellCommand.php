<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InvokeShellCommand
 *
 * @method array getInstance()
 * @method string getWorkingDir()
 * @method string getClusterId()
 * @method string getCommand()
 * @method string getTimeout()
 */
class InvokeShellCommand extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'InvokeShellCommand';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use getInstance() instead.
     *
     * @return array
     */
    public function getInstances()
    {
        return $this->getInstance();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstance() instead.
     *
     * @param array $instances
     *
     * @return $this
     */
    public function setInstances(array $instances)
    {
        return $this->withInstance($instances);
    }

    /**
     * @param array $instance
     *
     * @return $this
     */
    public function withInstance(array $instance)
    {
        $this->data['Instance'] = $instance;
        foreach ($instance as $i => $iValue) {
            $this->options['query']['Instance.' . ($i + 1) . '.Id'] = $instance[$i]['Id'];
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withWorkingDir() instead.
     *
     * @param string $workingDir
     *
     * @return $this
     */
    public function setWorkingDir($workingDir)
    {
        return $this->withWorkingDir($workingDir);
    }

    /**
     * @param string $workingDir
     *
     * @return $this
     */
    public function withWorkingDir($workingDir)
    {
        $this->data['WorkingDir'] = $workingDir;
        $this->options['query']['WorkingDir'] = $workingDir;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClusterId() instead.
     *
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        return $this->withClusterId($clusterId);
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function withClusterId($clusterId)
    {
        $this->data['ClusterId'] = $clusterId;
        $this->options['query']['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCommand() instead.
     *
     * @param string $command
     *
     * @return $this
     */
    public function setCommand($command)
    {
        return $this->withCommand($command);
    }

    /**
     * @param string $command
     *
     * @return $this
     */
    public function withCommand($command)
    {
        $this->data['Command'] = $command;
        $this->options['query']['Command'] = $command;

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
