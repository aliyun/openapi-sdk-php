<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api DescribeMetaList
 *
 * @method string getResourceOwnerId()
 * @method string getRestoreTime()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getPattern()
 * @method string getBackupSetID()
 * @method string getOwnerId()
 * @method string getGetDbName()
 * @method string getRestoreType()
 * @method string getPageSize()
 * @method string getDBInstanceId()
 * @method string getPageIndex()
 */
class DescribeMetaList extends Rpc
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
     * @param string $pattern
     *
     * @return $this
     */
    public function withPattern($pattern)
    {
        $this->data['Pattern'] = $pattern;
        $this->options['query']['Pattern'] = $pattern;

        return $this;
    }

    /**
     * @param string $backupSetID
     *
     * @return $this
     */
    public function withBackupSetID($backupSetID)
    {
        $this->data['BackupSetID'] = $backupSetID;
        $this->options['query']['BackupSetID'] = $backupSetID;

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
     * @param string $getDbName
     *
     * @return $this
     */
    public function withGetDbName($getDbName)
    {
        $this->data['GetDbName'] = $getDbName;
        $this->options['query']['GetDbName'] = $getDbName;

        return $this;
    }

    /**
     * @param string $restoreType
     *
     * @return $this
     */
    public function withRestoreType($restoreType)
    {
        $this->data['RestoreType'] = $restoreType;
        $this->options['query']['RestoreType'] = $restoreType;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

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
     * @param string $pageIndex
     *
     * @return $this
     */
    public function withPageIndex($pageIndex)
    {
        $this->data['PageIndex'] = $pageIndex;
        $this->options['query']['PageIndex'] = $pageIndex;

        return $this;
    }
}
