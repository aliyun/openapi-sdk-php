<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api BatchSendMail
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClickTrace()
 * @method string getOwnerId()
 * @method string getReplyAddressAlias()
 * @method string getTagName()
 * @method string getAccountName()
 * @method string getReceiversName()
 * @method string getReplyAddress()
 * @method string getAddressType()
 * @method string getTemplateName()
 */
class BatchSendMail extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

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
     * @param string $clickTrace
     *
     * @return $this
     */
    public function withClickTrace($clickTrace)
    {
        $this->data['ClickTrace'] = $clickTrace;
        $this->options['query']['ClickTrace'] = $clickTrace;

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
     * @param string $replyAddressAlias
     *
     * @return $this
     */
    public function withReplyAddressAlias($replyAddressAlias)
    {
        $this->data['ReplyAddressAlias'] = $replyAddressAlias;
        $this->options['query']['ReplyAddressAlias'] = $replyAddressAlias;

        return $this;
    }

    /**
     * @param string $tagName
     *
     * @return $this
     */
    public function withTagName($tagName)
    {
        $this->data['TagName'] = $tagName;
        $this->options['query']['TagName'] = $tagName;

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
     * @param string $receiversName
     *
     * @return $this
     */
    public function withReceiversName($receiversName)
    {
        $this->data['ReceiversName'] = $receiversName;
        $this->options['query']['ReceiversName'] = $receiversName;

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
     * @param string $addressType
     *
     * @return $this
     */
    public function withAddressType($addressType)
    {
        $this->data['AddressType'] = $addressType;
        $this->options['query']['AddressType'] = $addressType;

        return $this;
    }

    /**
     * @param string $templateName
     *
     * @return $this
     */
    public function withTemplateName($templateName)
    {
        $this->data['TemplateName'] = $templateName;
        $this->options['query']['TemplateName'] = $templateName;

        return $this;
    }
}
