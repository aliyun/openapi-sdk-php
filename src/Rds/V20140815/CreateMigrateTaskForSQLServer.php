<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api CreateMigrateTaskForSQLServer
 *
 * @method string getResourceOwnerId()
 * @method string getTaskType()
 * @method string getDBName()
 * @method string getResourceOwnerAccount()
 * @method string getIsOnlineDB()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 * @method string getOSSUrls()
 */
class CreateMigrateTaskForSQLServer extends Rpc
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
     * @param string $taskType
     *
     * @return $this
     */
    public function withTaskType($taskType)
    {
        $this->data['TaskType'] = $taskType;
        $this->options['query']['TaskType'] = $taskType;

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
}
