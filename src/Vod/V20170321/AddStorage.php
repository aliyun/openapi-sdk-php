<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getResourceOwnerId()
 * @method string getStorageRegion()
 * @method string getResourceOwnerAccount()
 * @method string getStorageACL()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getStorageType()
 * @method string getStorageLocation()
 */
class AddStorage extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'AddStorage';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId']             = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $storageRegion
     *
     * @return $this
     */
    public function withStorageRegion($storageRegion)
    {
        $this->data['StorageRegion']             = $storageRegion;
        $this->options['query']['StorageRegion'] = $storageRegion;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount']             = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $storageACL
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withStorageACL() instead.
     *
     */
    public function setStorageACL($storageACL)
    {
        return $this->withStorageACL($storageACL);
    }

    /**
     * @param string $storageACL
     *
     * @return $this
     */
    public function withStorageACL($storageACL)
    {
        $this->data['StorageACL']             = $storageACL;
        $this->options['query']['StorageACL'] = $storageACL;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount']             = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $storageType
     *
     * @return $this
     */
    public function withStorageType($storageType)
    {
        $this->data['StorageType']             = $storageType;
        $this->options['query']['StorageType'] = $storageType;

        return $this;
    }

    /**
     * @param string $storageLocation
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withStorageLocation() instead.
     *
     */
    public function setStorageLocation($storageLocation)
    {
        return $this->withStorageLocation($storageLocation);
    }

    /**
     * @param string $storageLocation
     *
     * @return $this
     */
    public function withStorageLocation($storageLocation)
    {
        $this->data['StorageLocation']             = $storageLocation;
        $this->options['query']['StorageLocation'] = $storageLocation;

        return $this;
    }
}
