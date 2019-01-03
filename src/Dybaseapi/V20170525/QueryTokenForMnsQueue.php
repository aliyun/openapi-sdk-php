<?php

namespace AlibabaCloud\Dybaseapi\V20170525;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryTokenForMnsQueue
 *
 * @method string getQueueName()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getMessageType()
 * @method string getOwnerId()
 */
class QueryTokenForMnsQueue extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dybaseapi';

    /**
     * @var string
     */
    public $version = '2017-05-25';

    /**
     * @var string
     */
    public $action = 'QueryTokenForMnsQueue';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dybaseapi';

    /**
     * @deprecated deprecated since version 2.0, Use withQueueName() instead.
     *
     * @param string $queueName
     *
     * @return $this
     */
    public function setQueueName($queueName)
    {
        return $this->withQueueName($queueName);
    }

    /**
     * @param string $queueName
     *
     * @return $this
     */
    public function withQueueName($queueName)
    {
        $this->data['QueueName'] = $queueName;
        $this->options['query']['QueueName'] = $queueName;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withMessageType() instead.
     *
     * @param string $messageType
     *
     * @return $this
     */
    public function setMessageType($messageType)
    {
        return $this->withMessageType($messageType);
    }

    /**
     * @param string $messageType
     *
     * @return $this
     */
    public function withMessageType($messageType)
    {
        $this->data['MessageType'] = $messageType;
        $this->options['query']['MessageType'] = $messageType;

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
}
