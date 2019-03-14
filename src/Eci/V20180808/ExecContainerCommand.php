<?php

namespace AlibabaCloud\Eci\V20180808;

use AlibabaCloud\Rpc;

/**
 * Api ExecContainerCommand
 *
 * @method string getResourceOwnerId()
 * @method string getContainerName()
 * @method string getContainerGroupId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getCommand()
 */
class ExecContainerCommand extends Rpc
{
    public $product = 'Eci';

    public $version = '2018-08-08';

    public $method = 'POST';

    public $serviceCode = 'eci';

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
     * @param string $containerName
     *
     * @return $this
     */
    public function withContainerName($containerName)
    {
        $this->data['ContainerName'] = $containerName;
        $this->options['query']['ContainerName'] = $containerName;

        return $this;
    }

    /**
     * @param string $containerGroupId
     *
     * @return $this
     */
    public function withContainerGroupId($containerGroupId)
    {
        $this->data['ContainerGroupId'] = $containerGroupId;
        $this->options['query']['ContainerGroupId'] = $containerGroupId;

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
