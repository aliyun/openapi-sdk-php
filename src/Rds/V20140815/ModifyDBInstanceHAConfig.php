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
