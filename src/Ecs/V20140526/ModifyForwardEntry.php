<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyForwardEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getForwardTableId()
 * @method string getOwnerId()
 * @method string getInternalIp()
 * @method string getForwardEntryId()
 * @method string getInternalPort()
 * @method string getExternalIp()
 * @method string getExternalPort()
 */
class ModifyForwardEntry extends RpcRequest
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
    public $action = 'ModifyForwardEntry';

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
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function withIpProtocol($ipProtocol)
    {
        $this->data['IpProtocol'] = $ipProtocol;
        $this->options['query']['IpProtocol'] = $ipProtocol;

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
     * @param string $forwardTableId
     *
     * @return $this
     */
    public function withForwardTableId($forwardTableId)
    {
        $this->data['ForwardTableId'] = $forwardTableId;
        $this->options['query']['ForwardTableId'] = $forwardTableId;

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
     * @param string $internalIp
     *
     * @return $this
     */
    public function withInternalIp($internalIp)
    {
        $this->data['InternalIp'] = $internalIp;
        $this->options['query']['InternalIp'] = $internalIp;

        return $this;
    }

    /**
     * @param string $forwardEntryId
     *
     * @return $this
     */
    public function withForwardEntryId($forwardEntryId)
    {
        $this->data['ForwardEntryId'] = $forwardEntryId;
        $this->options['query']['ForwardEntryId'] = $forwardEntryId;

        return $this;
    }

    /**
     * @param string $internalPort
     *
     * @return $this
     */
    public function withInternalPort($internalPort)
    {
        $this->data['InternalPort'] = $internalPort;
        $this->options['query']['InternalPort'] = $internalPort;

        return $this;
    }

    /**
     * @param string $externalIp
     *
     * @return $this
     */
    public function withExternalIp($externalIp)
    {
        $this->data['ExternalIp'] = $externalIp;
        $this->options['query']['ExternalIp'] = $externalIp;

        return $this;
    }

    /**
     * @param string $externalPort
     *
     * @return $this
     */
    public function withExternalPort($externalPort)
    {
        $this->data['ExternalPort'] = $externalPort;
        $this->options['query']['ExternalPort'] = $externalPort;

        return $this;
    }
}
