<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeBackupTasks
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
class DescribeBackupTasks extends RpcRequest
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
    public $action = 'DescribeBackupTasks';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withBackupJobId() instead.
     *
     * @param string $backupJobId
     *
     * @return $this
     */
    public function setBackupJobId($backupJobId)
    {
        return $this->withBackupJobId($backupJobId);
    }

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
     * @deprecated deprecated since version 2.0, Use withFlag() instead.
     *
     * @param string $flag
     *
     * @return $this
     */
    public function setFlag($flag)
    {
        return $this->withFlag($flag);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withDBInstanceId() instead.
     *
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        return $this->withDBInstanceId($dBInstanceId);
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
     * @deprecated deprecated since version 2.0, Use withBackupMode() instead.
     *
     * @param string $backupMode
     *
     * @return $this
     */
    public function setBackupMode($backupMode)
    {
        return $this->withBackupMode($backupMode);
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
     * @deprecated deprecated since version 2.0, Use withBackupJobStatus() instead.
     *
     * @param string $backupJobStatus
     *
     * @return $this
     */
    public function setBackupJobStatus($backupJobStatus)
    {
        return $this->withBackupJobStatus($backupJobStatus);
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
