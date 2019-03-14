<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Rpc;

/**
 * Api ModifyBackupPolicy
 *
 * @method string getPreferredBackupTime()
 * @method string getPreferredBackupPeriod()
 * @method string getBackupMethod()
 * @method string getResourceOwnerId()
 * @method string getSecurityToken()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDBInstanceId()
 * @method string getOwnerId()
 */
class ModifyBackupPolicy extends Rpc
{
    public $product = 'Dds';

    public $version = '2015-12-01';

    public $method = 'POST';

    public $serviceCode = 'dds';

    /**
     * @param string $preferredBackupTime
     *
     * @return $this
     */
    public function withPreferredBackupTime($preferredBackupTime)
    {
        $this->data['PreferredBackupTime'] = $preferredBackupTime;
        $this->options['query']['PreferredBackupTime'] = $preferredBackupTime;

        return $this;
    }

    /**
     * @param string $preferredBackupPeriod
     *
     * @return $this
     */
    public function withPreferredBackupPeriod($preferredBackupPeriod)
    {
        $this->data['PreferredBackupPeriod'] = $preferredBackupPeriod;
        $this->options['query']['PreferredBackupPeriod'] = $preferredBackupPeriod;

        return $this;
    }

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
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
}
