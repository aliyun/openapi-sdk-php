<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * Api ModifySenderAddressNotification
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getSenderAddressId()
 * @method string getSenderAddress()
 * @method string getOwnerId()
 * @method string getRegion()
 * @method string getStatus()
 */
class ModifySenderAddressNotification extends Rpc
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
