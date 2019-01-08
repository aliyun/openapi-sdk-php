<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of StopInstance
 *
 * @method string getResourceOwnerId()
 * @method string getInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getConfirmStop()
 * @method string getOwnerAccount()
 * @method string getStoppedMode()
 * @method string getOwnerId()
 * @method string getForceStop()
 */
class StopInstance extends RpcRequest
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
    public $action = 'StopInstance';

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
     * @param string $confirmStop
     *
     * @return $this
     */
    public function withConfirmStop($confirmStop)
    {
        $this->data['ConfirmStop'] = $confirmStop;
        $this->options['query']['ConfirmStop'] = $confirmStop;

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
     * @param string $stoppedMode
     *
     * @return $this
     */
    public function withStoppedMode($stoppedMode)
    {
        $this->data['StoppedMode'] = $stoppedMode;
        $this->options['query']['StoppedMode'] = $stoppedMode;

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
     * @param string $forceStop
     *
     * @return $this
     */
    public function withForceStop($forceStop)
    {
        $this->data['ForceStop'] = $forceStop;
        $this->options['query']['ForceStop'] = $forceStop;

        return $this;
    }
}
