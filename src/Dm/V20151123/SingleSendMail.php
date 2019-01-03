<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SingleSendMail
 *
 * @method string getHtmlBody()
 * @method string getFromAlias()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getToAddress()
 * @method string getClickTrace()
 * @method string getSubject()
 * @method string getOwnerId()
 * @method string getReplyAddressAlias()
 * @method string getTagName()
 * @method string getAccountName()
 * @method string getReplyToAddress()
 * @method string getReplyAddress()
 * @method string getAddressType()
 * @method string getTextBody()
 */
class SingleSendMail extends RpcRequest
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
    public $action = 'SingleSendMail';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withHtmlBody() instead.
     *
     * @param string $htmlBody
     *
     * @return $this
     */
    public function setHtmlBody($htmlBody)
    {
        return $this->withHtmlBody($htmlBody);
    }

    /**
     * @param string $htmlBody
     *
     * @return $this
     */
    public function withHtmlBody($htmlBody)
    {
        $this->data['HtmlBody'] = $htmlBody;
        $this->options['query']['HtmlBody'] = $htmlBody;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withFromAlias() instead.
     *
     * @param string $fromAlias
     *
     * @return $this
     */
    public function setFromAlias($fromAlias)
    {
        return $this->withFromAlias($fromAlias);
    }

    /**
     * @param string $fromAlias
     *
     * @return $this
     */
    public function withFromAlias($fromAlias)
    {
        $this->data['FromAlias'] = $fromAlias;
        $this->options['query']['FromAlias'] = $fromAlias;

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
     * @deprecated deprecated since version 2.0, Use withToAddress() instead.
     *
     * @param string $toAddress
     *
     * @return $this
     */
    public function setToAddress($toAddress)
    {
        return $this->withToAddress($toAddress);
    }

    /**
     * @param string $toAddress
     *
     * @return $this
     */
    public function withToAddress($toAddress)
    {
        $this->data['ToAddress'] = $toAddress;
        $this->options['query']['ToAddress'] = $toAddress;

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
     * @deprecated deprecated since version 2.0, Use withSubject() instead.
     *
     * @param string $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        return $this->withSubject($subject);
    }

    /**
     * @param string $subject
     *
     * @return $this
     */
    public function withSubject($subject)
    {
        $this->data['Subject'] = $subject;
        $this->options['query']['Subject'] = $subject;

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
     * @deprecated deprecated since version 2.0, Use withReplyToAddress() instead.
     *
     * @param string $replyToAddress
     *
     * @return $this
     */
    public function setReplyToAddress($replyToAddress)
    {
        return $this->withReplyToAddress($replyToAddress);
    }

    /**
     * @param string $replyToAddress
     *
     * @return $this
     */
    public function withReplyToAddress($replyToAddress)
    {
        $this->data['ReplyToAddress'] = $replyToAddress;
        $this->options['query']['ReplyToAddress'] = $replyToAddress;

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
     * @deprecated deprecated since version 2.0, Use withTextBody() instead.
     *
     * @param string $textBody
     *
     * @return $this
     */
    public function setTextBody($textBody)
    {
        return $this->withTextBody($textBody);
    }

    /**
     * @param string $textBody
     *
     * @return $this
     */
    public function withTextBody($textBody)
    {
        $this->data['TextBody'] = $textBody;
        $this->options['query']['TextBody'] = $textBody;

        return $this;
    }
}
