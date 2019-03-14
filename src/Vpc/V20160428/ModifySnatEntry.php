<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Rpc;

/**
 * Api ModifySnatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSnatEntryName()
 * @method string getSnatTableId()
 * @method string getSnatEntryId()
 * @method string getOwnerId()
 * @method string getSnatIp()
 */
class ModifySnatEntry extends Rpc
{
    public $product = 'Vpc';

    public $version = '2016-04-28';

    public $method = 'POST';

    public $serviceCode = 'vpc';

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
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $snatEntryName
     *
     * @return $this
     */
    public function withSnatEntryName($snatEntryName)
    {
        $this->data['SnatEntryName'] = $snatEntryName;
        $this->options['query']['SnatEntryName'] = $snatEntryName;

        return $this;
    }

    /**
     * @param string $snatTableId
     *
     * @return $this
     */
    public function withSnatTableId($snatTableId)
    {
        $this->data['SnatTableId'] = $snatTableId;
        $this->options['query']['SnatTableId'] = $snatTableId;

        return $this;
    }

    /**
     * @param string $snatEntryId
     *
     * @return $this
     */
    public function withSnatEntryId($snatEntryId)
    {
        $this->data['SnatEntryId'] = $snatEntryId;
        $this->options['query']['SnatEntryId'] = $snatEntryId;

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
     * @param string $snatIp
     *
     * @return $this
     */
    public function withSnatIp($snatIp)
    {
        $this->data['SnatIp'] = $snatIp;
        $this->options['query']['SnatIp'] = $snatIp;

        return $this;
    }
}
