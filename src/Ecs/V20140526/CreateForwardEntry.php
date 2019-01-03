<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateForwardEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getInternalPort()
 * @method string getOwnerAccount()
 * @method string getForwardTableId()
 * @method string getOwnerId()
 * @method string getExternalIp()
 * @method string getExternalPort()
 * @method string getInternalIp()
 */
class CreateForwardEntry extends RpcRequest
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
    public $action = 'CreateForwardEntry';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withIpProtocol() instead.
     *
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setIpProtocol($ipProtocol)
    {
        return $this->withIpProtocol($ipProtocol);
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
     * @deprecated deprecated since version 2.0, Use withInternalPort() instead.
     *
     * @param string $internalPort
     *
     * @return $this
     */
    public function setInternalPort($internalPort)
    {
        return $this->withInternalPort($internalPort);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withForwardTableId() instead.
     *
     * @param string $forwardTableId
     *
     * @return $this
     */
    public function setForwardTableId($forwardTableId)
    {
        return $this->withForwardTableId($forwardTableId);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withExternalIp() instead.
     *
     * @param string $externalIp
     *
     * @return $this
     */
    public function setExternalIp($externalIp)
    {
        return $this->withExternalIp($externalIp);
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
     * @deprecated deprecated since version 2.0, Use withExternalPort() instead.
     *
     * @param string $externalPort
     *
     * @return $this
     */
    public function setExternalPort($externalPort)
    {
        return $this->withExternalPort($externalPort);
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

    /**
     * @deprecated deprecated since version 2.0, Use withInternalIp() instead.
     *
     * @param string $internalIp
     *
     * @return $this
     */
    public function setInternalIp($internalIp)
    {
        return $this->withInternalIp($internalIp);
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
}
