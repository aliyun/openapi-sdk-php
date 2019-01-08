<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveReceiverDetail
 *
 * @method string getResourceOwnerId()
 * @method string getReceiverId()
 * @method string getResourceOwnerAccount()
 * @method string getDetail()
 * @method string getOwnerId()
 */
class SaveReceiverDetail extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dm';

    /**
     * @var string
     */
    public $version = '2015-11-23';

    /**
     * @var string
     */
    public $action = 'SaveReceiverDetail';

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
     * @param string $receiverId
     *
     * @return $this
     */
    public function withReceiverId($receiverId)
    {
        $this->data['ReceiverId'] = $receiverId;
        $this->options['query']['ReceiverId'] = $receiverId;

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
     * @param string $detail
     *
     * @return $this
     */
    public function withDetail($detail)
    {
        $this->data['Detail'] = $detail;
        $this->options['query']['Detail'] = $detail;

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
