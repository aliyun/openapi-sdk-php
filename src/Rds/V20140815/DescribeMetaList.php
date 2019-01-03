<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeMetaList
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
class DescribeMetaList extends RpcRequest
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
    public $action = 'DescribeMetaList';

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
     * @deprecated deprecated since version 2.0, Use withRestoreTime() instead.
     *
     * @param string $restoreTime
     *
     * @return $this
     */
    public function setRestoreTime($restoreTime)
    {
        return $this->withRestoreTime($restoreTime);
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
     * @deprecated deprecated since version 2.0, Use withPattern() instead.
     *
     * @param string $pattern
     *
     * @return $this
     */
    public function setPattern($pattern)
    {
        return $this->withPattern($pattern);
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
     * @deprecated deprecated since version 2.0, Use withBackupSetID() instead.
     *
     * @param string $backupSetID
     *
     * @return $this
     */
    public function setBackupSetID($backupSetID)
    {
        return $this->withBackupSetID($backupSetID);
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
     * @deprecated deprecated since version 2.0, Use withGetDbName() instead.
     *
     * @param string $getDbName
     *
     * @return $this
     */
    public function setGetDbName($getDbName)
    {
        return $this->withGetDbName($getDbName);
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
     * @deprecated deprecated since version 2.0, Use withRestoreType() instead.
     *
     * @param string $restoreType
     *
     * @return $this
     */
    public function setRestoreType($restoreType)
    {
        return $this->withRestoreType($restoreType);
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
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
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
     * @deprecated deprecated since version 2.0, Use withPageIndex() instead.
     *
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setPageIndex($pageIndex)
    {
        return $this->withPageIndex($pageIndex);
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
