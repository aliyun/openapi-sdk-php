<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of BatchSendMail
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
class BatchSendMail extends RpcRequest
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
    public $action = 'BatchSendMail';

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
     * @deprecated deprecated since version 2.0, Use withClickTrace() instead.
     *
     * @param string $clickTrace
     *
     * @return $this
     */
    public function setClickTrace($clickTrace)
    {
        return $this->withClickTrace($clickTrace);
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
     * @deprecated deprecated since version 2.0, Use withReplyAddressAlias() instead.
     *
     * @param string $replyAddressAlias
     *
     * @return $this
     */
    public function setReplyAddressAlias($replyAddressAlias)
    {
        return $this->withReplyAddressAlias($replyAddressAlias);
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
     * @deprecated deprecated since version 2.0, Use withTagName() instead.
     *
     * @param string $tagName
     *
     * @return $this
     */
    public function setTagName($tagName)
    {
        return $this->withTagName($tagName);
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
     * @deprecated deprecated since version 2.0, Use withAccountName() instead.
     *
     * @param string $accountName
     *
     * @return $this
     */
    public function setAccountName($accountName)
    {
        return $this->withAccountName($accountName);
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
     * @deprecated deprecated since version 2.0, Use withReceiversName() instead.
     *
     * @param string $receiversName
     *
     * @return $this
     */
    public function setReceiversName($receiversName)
    {
        return $this->withReceiversName($receiversName);
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
     * @deprecated deprecated since version 2.0, Use withReplyAddress() instead.
     *
     * @param string $replyAddress
     *
     * @return $this
     */
    public function setReplyAddress($replyAddress)
    {
        return $this->withReplyAddress($replyAddress);
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
     * @deprecated deprecated since version 2.0, Use withAddressType() instead.
     *
     * @param string $addressType
     *
     * @return $this
     */
    public function setAddressType($addressType)
    {
        return $this->withAddressType($addressType);
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
     * @deprecated deprecated since version 2.0, Use withTemplateName() instead.
     *
     * @param string $templateName
     *
     * @return $this
     */
    public function setTemplateName($templateName)
    {
        return $this->withTemplateName($templateName);
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
