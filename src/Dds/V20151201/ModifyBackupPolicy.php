<?php

namespace AlibabaCloud\Dds\V20151201;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyBackupPolicy
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
class ModifyBackupPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dds';

    /**
     * @var string
     */
    public $version = '2015-12-01';

    /**
     * @var string
     */
    public $action = 'ModifyBackupPolicy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'dds';

    /**
     * @deprecated deprecated since version 2.0, Use withPreferredBackupTime() instead.
     *
     * @param string $preferredBackupTime
     *
     * @return $this
     */
    public function setPreferredBackupTime($preferredBackupTime)
    {
        return $this->withPreferredBackupTime($preferredBackupTime);
    }

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
     * @deprecated deprecated since version 2.0, Use withPreferredBackupPeriod() instead.
     *
     * @param string $preferredBackupPeriod
     *
     * @return $this
     */
    public function setPreferredBackupPeriod($preferredBackupPeriod)
    {
        return $this->withPreferredBackupPeriod($preferredBackupPeriod);
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
     * @deprecated deprecated since version 2.0, Use withBackupMethod() instead.
     *
     * @param string $backupMethod
     *
     * @return $this
     */
    public function setBackupMethod($backupMethod)
    {
        return $this->withBackupMethod($backupMethod);
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
     * @deprecated deprecated since version 2.0, Use withSecurityToken() instead.
     *
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        return $this->withSecurityToken($securityToken);
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
}
