<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api SingleSendMail
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
class SingleSendMail extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';

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
