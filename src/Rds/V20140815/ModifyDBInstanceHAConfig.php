<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyDBInstanceHAConfig
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSyncMode()
 * @method string getDbInstanceId()
 * @method string getOwnerId()
 * @method string getHAMode()
 */
class ModifyDBInstanceHAConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'ModifyDBInstanceHAConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @deprecated deprecated since version 2.0, Use withSyncMode() instead.
     *
     * @param string $syncMode
     *
     * @return $this
     */
    public function setSyncMode($syncMode)
    {
        return $this->withSyncMode($syncMode);
    }

    /**
     * @param string $syncMode
     *
     * @return $this
     */
    public function withSyncMode($syncMode)
    {
        $this->data['SyncMode'] = $syncMode;
        $this->options['query']['SyncMode'] = $syncMode;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDbInstanceId() instead.
     *
     * @param string $dbInstanceId
     *
     * @return $this
     */
    public function setDbInstanceId($dbInstanceId)
    {
        return $this->withDbInstanceId($dbInstanceId);
    }

    /**
     * @param string $dbInstanceId
     *
     * @return $this
     */
    public function withDbInstanceId($dbInstanceId)
    {
        $this->data['DbInstanceId'] = $dbInstanceId;
        $this->options['query']['DbInstanceId'] = $dbInstanceId;

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
     * @deprecated deprecated since version 2.0, Use withHAMode() instead.
     *
     * @param string $hAMode
     *
     * @return $this
     */
    public function setHAMode($hAMode)
    {
        return $this->withHAMode($hAMode);
    }

    /**
     * @param string $hAMode
     *
     * @return $this
     */
    public function withHAMode($hAMode)
    {
        $this->data['HAMode'] = $hAMode;
        $this->options['query']['HAMode'] = $hAMode;

        return $this;
    }
}
