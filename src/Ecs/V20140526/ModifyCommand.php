<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyCommand
 *
 * @method string getResourceOwnerId()
 * @method string getWorkingDir()
 * @method string getDescription()
 * @method string getCommandId()
 * @method string getCommandContent()
 * @method string getTimeout()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getName()
 */
class ModifyCommand extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'ModifyCommand';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

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
     * @param string $description
     *
     * @return $this
     */
    public function withDescription($description)
    {
        $this->data['Description'] = $description;
        $this->options['query']['Description'] = $description;

        return $this;
    }

    /**
     * @param string $commandId
     *
     * @return $this
     */
    public function withCommandId($commandId)
    {
        $this->data['CommandId'] = $commandId;
        $this->options['query']['CommandId'] = $commandId;

        return $this;
    }

    /**
     * @param string $commandContent
     *
     * @return $this
     */
    public function withCommandContent($commandContent)
    {
        $this->data['CommandContent'] = $commandContent;
        $this->options['query']['CommandContent'] = $commandContent;

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

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

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
}
