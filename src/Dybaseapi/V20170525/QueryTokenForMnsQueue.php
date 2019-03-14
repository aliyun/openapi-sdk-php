<?php

namespace AlibabaCloud\Dybaseapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * Api QueryTokenForMnsQueue
 *
 * @method string getQueueName()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getMessageType()
 * @method string getOwnerId()
 */
class QueryTokenForMnsQueue extends Rpc
{
    public $product = 'Dybaseapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    public $serviceCode = 'dybaseapi';

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
