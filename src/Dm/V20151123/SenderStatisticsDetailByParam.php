<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SenderStatisticsDetailByParam
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getToAddress()
 * @method string getLength()
 * @method string getNextStart()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getOwnerId()
 * @method string getTagName()
 * @method string getAccountName()
 * @method string getStatus()
 */
class SenderStatisticsDetailByParam extends RpcRequest
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
    public $action = 'SenderStatisticsDetailByParam';

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
     * @deprecated deprecated since version 2.0, Use withLength() instead.
     *
     * @param string $length
     *
     * @return $this
     */
    public function setLength($length)
    {
        return $this->withLength($length);
    }

    /**
     * @param string $length
     *
     * @return $this
     */
    public function withLength($length)
    {
        $this->data['Length'] = $length;
        $this->options['query']['Length'] = $length;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNextStart() instead.
     *
     * @param string $nextStart
     *
     * @return $this
     */
    public function setNextStart($nextStart)
    {
        return $this->withNextStart($nextStart);
    }

    /**
     * @param string $nextStart
     *
     * @return $this
     */
    public function withNextStart($nextStart)
    {
        $this->data['NextStart'] = $nextStart;
        $this->options['query']['NextStart'] = $nextStart;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEndTime() instead.
     *
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        return $this->withEndTime($endTime);
    }

    /**
     * @param string $endTime
     *
     * @return $this
     */
    public function withEndTime($endTime)
    {
        $this->data['EndTime'] = $endTime;
        $this->options['query']['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withStartTime() instead.
     *
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        return $this->withStartTime($startTime);
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function withStartTime($startTime)
    {
        $this->data['StartTime'] = $startTime;
        $this->options['query']['StartTime'] = $startTime;

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
     * @deprecated deprecated since version 2.0, Use withStatus() instead.
     *
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        return $this->withStatus($status);
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function withStatus($status)
    {
        $this->data['Status'] = $status;
        $this->options['query']['Status'] = $status;

        return $this;
    }
}
