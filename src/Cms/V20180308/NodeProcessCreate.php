<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of NodeProcessCreate
 *
 * @method string getInstanceId()
 * @method string getProcessName()
 * @method string getName()
 * @method string getProcessUser()
 * @method string getCommand()
 */
class NodeProcessCreate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cms';

    /**
     * @var string
     */
    public $version = '2018-03-08';

    /**
     * @var string
     */
    public $action = 'NodeProcessCreate';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $processName
     *
     * @return $this
     */
    public function withProcessName($processName)
    {
        $this->data['ProcessName'] = $processName;
        $this->options['query']['ProcessName'] = $processName;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $processUser
     *
     * @return $this
     */
    public function withProcessUser($processUser)
    {
        $this->data['ProcessUser'] = $processUser;
        $this->options['query']['ProcessUser'] = $processUser;

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
}
