<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateMailAddress
 *
 * @method string getResourceOwnerId()
 * @method string getAccountName()
 * @method string getResourceOwnerAccount()
 * @method string getReplyAddress()
 * @method string getSendtype()
 * @method string getOwnerId()
 */
class CreateMailAddress extends RpcRequest
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
    public $action = 'CreateMailAddress';

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
     * @param string $accountName
     *
     * @return $this
     */
    public function withAccountName($accountName)
    {
        $this->data['AccountName'] = $accountName;
        $this->options['query']['AccountName'] = $accountName;

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
     * @param string $replyAddress
     *
     * @return $this
     */
    public function withReplyAddress($replyAddress)
    {
        $this->data['ReplyAddress'] = $replyAddress;
        $this->options['query']['ReplyAddress'] = $replyAddress;

        return $this;
    }

    /**
     * @param string $sendtype
     *
     * @return $this
     */
    public function withSendtype($sendtype)
    {
        $this->data['Sendtype'] = $sendtype;
        $this->options['query']['Sendtype'] = $sendtype;

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
