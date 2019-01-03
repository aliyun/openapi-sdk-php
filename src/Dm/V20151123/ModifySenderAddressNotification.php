<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySenderAddressNotification
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getSenderAddressId()
 * @method string getSenderAddress()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getStatus()
 */
class ModifySenderAddressNotification extends RpcRequest
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
    public $action = 'ModifySenderAddressNotification';

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
     * @deprecated deprecated since version 2.0, Use withSenderAddressId() instead.
     *
     * @param string $senderAddressId
     *
     * @return $this
     */
    public function setSenderAddressId($senderAddressId)
    {
        return $this->withSenderAddressId($senderAddressId);
    }

    /**
     * @param string $senderAddressId
     *
     * @return $this
     */
    public function withSenderAddressId($senderAddressId)
    {
        $this->data['SenderAddressId'] = $senderAddressId;
        $this->options['query']['SenderAddressId'] = $senderAddressId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSenderAddress() instead.
     *
     * @param string $senderAddress
     *
     * @return $this
     */
    public function setSenderAddress($senderAddress)
    {
        return $this->withSenderAddress($senderAddress);
    }

    /**
     * @param string $senderAddress
     *
     * @return $this
     */
    public function withSenderAddress($senderAddress)
    {
        $this->data['SenderAddress'] = $senderAddress;
        $this->options['query']['SenderAddress'] = $senderAddress;

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
     * @deprecated deprecated since version 2.0, Use withRegion() instead.
     *
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        return $this->withRegion($region);
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function withRegion($region)
    {
        $this->data['Region'] = $region;
        $this->options['query']['Region'] = $region;

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
