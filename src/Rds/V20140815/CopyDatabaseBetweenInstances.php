<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api CopyDatabaseBetweenInstances
 *
 * @method string getResourceOwnerId()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getBackupId()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getSyncUserPrivilege()
 * @method string getDbNames()
 * @method string getResourceGroupId()
 * @method string getTargetDBInstanceId()
 * @method string getDBInstanceId()
 * @method string getPayType()
 */
class CopyDatabaseBetweenInstances extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

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
     * @param string $restoreTime
     *
     * @return $this
     */
    public function withRestoreTime($restoreTime)
    {
        $this->data['RestoreTime'] = $restoreTime;
        $this->options['query']['RestoreTime'] = $restoreTime;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @param string $backupId
     *
     * @return $this
     */
    public function withBackupId($backupId)
    {
        $this->data['BackupId'] = $backupId;
        $this->options['query']['BackupId'] = $backupId;

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
     * @param string $syncUserPrivilege
     *
     * @return $this
     */
    public function withSyncUserPrivilege($syncUserPrivilege)
    {
        $this->data['SyncUserPrivilege'] = $syncUserPrivilege;
        $this->options['query']['SyncUserPrivilege'] = $syncUserPrivilege;

        return $this;
    }

    /**
     * @param string $dbNames
     *
     * @return $this
     */
    public function withDbNames($dbNames)
    {
        $this->data['DbNames'] = $dbNames;
        $this->options['query']['DbNames'] = $dbNames;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function withResourceGroupId($resourceGroupId)
    {
        $this->data['ResourceGroupId'] = $resourceGroupId;
        $this->options['query']['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $targetDBInstanceId
     *
     * @return $this
     */
    public function withTargetDBInstanceId($targetDBInstanceId)
    {
        $this->data['TargetDBInstanceId'] = $targetDBInstanceId;
        $this->options['query']['TargetDBInstanceId'] = $targetDBInstanceId;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function withDBInstanceId($dBInstanceId)
    {
        $this->data['DBInstanceId'] = $dBInstanceId;
        $this->options['query']['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $payType
     *
     * @return $this
     */
    public function withPayType($payType)
    {
        $this->data['PayType'] = $payType;
        $this->options['query']['PayType'] = $payType;

        return $this;
    }
}
