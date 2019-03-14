<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api CreateMigrateTask
 *
 * @method string getResourceOwnerId()
 * @method string getMigrateTaskId()
 * @method string getResourceOwnerAccount()
 * @method string getIsOnlineDB()
 * @method string getOwnerId()
 * @method string getOssObjectPositions()
 * @method string getOSSUrls()
 * @method string getDBName()
 * @method string getDBInstanceId()
 * @method string getBackupMode()
 * @method string getCheckDBMode()
 */
class CreateMigrateTask extends Rpc
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
     * @param string $migrateTaskId
     *
     * @return $this
     */
    public function withMigrateTaskId($migrateTaskId)
    {
        $this->data['MigrateTaskId'] = $migrateTaskId;
        $this->options['query']['MigrateTaskId'] = $migrateTaskId;

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
     * @param string $isOnlineDB
     *
     * @return $this
     */
    public function withIsOnlineDB($isOnlineDB)
    {
        $this->data['IsOnlineDB'] = $isOnlineDB;
        $this->options['query']['IsOnlineDB'] = $isOnlineDB;

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
     * @param string $ossObjectPositions
     *
     * @return $this
     */
    public function withOssObjectPositions($ossObjectPositions)
    {
        $this->data['OssObjectPositions'] = $ossObjectPositions;
        $this->options['query']['OssObjectPositions'] = $ossObjectPositions;

        return $this;
    }

    /**
     * @param string $oSSUrls
     *
     * @return $this
     */
    public function withOSSUrls($oSSUrls)
    {
        $this->data['OSSUrls'] = $oSSUrls;
        $this->options['query']['OSSUrls'] = $oSSUrls;

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
     * @param string $checkDBMode
     *
     * @return $this
     */
    public function withCheckDBMode($checkDBMode)
    {
        $this->data['CheckDBMode'] = $checkDBMode;
        $this->options['query']['CheckDBMode'] = $checkDBMode;

        return $this;
    }
}
