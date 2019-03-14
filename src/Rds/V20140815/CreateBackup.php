<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api CreateBackup
 *
 * @method string getBackupMethod()
 * @method string getResourceOwnerId()
 * @method string getBackupStrategy()
 * @method string getDBName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 * @method string getBackupType()
 */
class CreateBackup extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

    /**
     * @param string $backupMethod
     *
     * @return $this
     */
    public function withBackupMethod($backupMethod)
    {
        $this->data['BackupMethod'] = $backupMethod;
        $this->options['query']['BackupMethod'] = $backupMethod;

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
     * @param string $backupStrategy
     *
     * @return $this
     */
    public function withBackupStrategy($backupStrategy)
    {
        $this->data['BackupStrategy'] = $backupStrategy;
        $this->options['query']['BackupStrategy'] = $backupStrategy;

        return $this;
    }

    /**
     * @param string $dBName
     *
     * @return $this
     */
    public function withDBName($dBName)
    {
        $this->data['DBName'] = $dBName;
        $this->options['query']['DBName'] = $dBName;

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
     * @param string $backupType
     *
     * @return $this
     */
    public function withBackupType($backupType)
    {
        $this->data['BackupType'] = $backupType;
        $this->options['query']['BackupType'] = $backupType;

        return $this;
    }
}
