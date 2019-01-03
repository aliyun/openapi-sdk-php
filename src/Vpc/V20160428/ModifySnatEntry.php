<?php

namespace AlibabaCloud\Vpc\V20160428;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySnatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSnatTableId()
 * @method string getSnatEntryId()
 * @method string getOwnerId()
 * @method string getSnatIp()
 */
class ModifySnatEntry extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Vpc';

    /**
     * @var string
     */
    public $version = '2016-04-28';

    /**
     * @var string
     */
    public $action = 'ModifySnatEntry';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vpc';

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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withSnatTableId() instead.
     *
     * @param string $snatTableId
     *
     * @return $this
     */
    public function setSnatTableId($snatTableId)
    {
        return $this->withSnatTableId($snatTableId);
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
     * @deprecated deprecated since version 2.0, Use withSnatEntryId() instead.
     *
     * @param string $snatEntryId
     *
     * @return $this
     */
    public function setSnatEntryId($snatEntryId)
    {
        return $this->withSnatEntryId($snatEntryId);
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
     * @deprecated deprecated since version 2.0, Use withSnatIp() instead.
     *
     * @param string $snatIp
     *
     * @return $this
     */
    public function setSnatIp($snatIp)
    {
        return $this->withSnatIp($snatIp);
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
