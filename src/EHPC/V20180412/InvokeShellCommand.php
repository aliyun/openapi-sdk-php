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
