<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api DescribeBackupTasks
 *
 * @method string getBackupJobId()
 * @method string getResourceOwnerId()
 * @method string getFlag()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getBackupMode()
 * @method string getOwnerId()
 * @method string getBackupJobStatus()
 */
class DescribeBackupTasks extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

    /**
     * @param string $backupJobId
     *
     * @return $this
     */
    public function withBackupJobId($backupJobId)
    {
        $this->data['BackupJobId'] = $backupJobId;
        $this->options['query']['BackupJobId'] = $backupJobId;

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
     * @param string $flag
     *
     * @return $this
     */
    public function withFlag($flag)
    {
        $this->data['Flag'] = $flag;
        $this->options['query']['Flag'] = $flag;

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
     * @param string $backupMode
     *
     * @return $this
     */
    public function withBackupMode($backupMode)
    {
        $this->data['BackupMode'] = $backupMode;
        $this->options['query']['BackupMode'] = $backupMode;

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
     * @param string $backupJobStatus
     *
     * @return $this
     */
    public function withBackupJobStatus($backupJobStatus)
    {
        $this->data['BackupJobStatus'] = $backupJobStatus;
        $this->options['query']['BackupJobStatus'] = $backupJobStatus;

        return $this;
    }
}
