<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyBackupPolicy
 *
 * @method string getPreferredBackupPeriod()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getLocalLogRetentionHours()
 * @method string getOwnerAccount()
 * @method string getLogBackupFrequency()
 * @method string getBackupLog()
 * @method string getLocalLogRetentionSpace()
 * @method string getOwnerId()
 * @method string getDuplication()
 * @method string getPreferredBackupTime()
 * @method string getBackupRetentionPeriod()
 * @method string getDuplicationContent()
 * @method string getHighSpaceUsageProtection()
 * @method string getDBInstanceId()
 * @method string getDuplicationLocation()
 * @method string getLogBackupRetentionPeriod()
 * @method string getEnableBackupLog()
 * @method string getBackupPolicyMode()
 */
class ModifyBackupPolicy extends RpcRequest
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
    public $action = 'ModifyBackupPolicy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

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
     * @deprecated deprecated since version 2.0, Use withLocalLogRetentionHours() instead.
     *
     * @param string $localLogRetentionHours
     *
     * @return $this
     */
    public function setLocalLogRetentionHours($localLogRetentionHours)
    {
        return $this->withLocalLogRetentionHours($localLogRetentionHours);
    }

    /**
     * @param string $localLogRetentionHours
     *
     * @return $this
     */
    public function withLocalLogRetentionHours($localLogRetentionHours)
    {
        $this->data['LocalLogRetentionHours'] = $localLogRetentionHours;
        $this->options['query']['LocalLogRetentionHours'] = $localLogRetentionHours;

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
     * @deprecated deprecated since version 2.0, Use withLogBackupFrequency() instead.
     *
     * @param string $logBackupFrequency
     *
     * @return $this
     */
    public function setLogBackupFrequency($logBackupFrequency)
    {
        return $this->withLogBackupFrequency($logBackupFrequency);
    }

    /**
     * @param string $logBackupFrequency
     *
     * @return $this
     */
    public function withLogBackupFrequency($logBackupFrequency)
    {
        $this->data['LogBackupFrequency'] = $logBackupFrequency;
        $this->options['query']['LogBackupFrequency'] = $logBackupFrequency;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBackupLog() instead.
     *
     * @param string $backupLog
     *
     * @return $this
     */
    public function setBackupLog($backupLog)
    {
        return $this->withBackupLog($backupLog);
    }

    /**
     * @param string $backupLog
     *
     * @return $this
     */
    public function withBackupLog($backupLog)
    {
        $this->data['BackupLog'] = $backupLog;
        $this->options['query']['BackupLog'] = $backupLog;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLocalLogRetentionSpace() instead.
     *
     * @param string $localLogRetentionSpace
     *
     * @return $this
     */
    public function setLocalLogRetentionSpace($localLogRetentionSpace)
    {
        return $this->withLocalLogRetentionSpace($localLogRetentionSpace);
    }

    /**
     * @param string $localLogRetentionSpace
     *
     * @return $this
     */
    public function withLocalLogRetentionSpace($localLogRetentionSpace)
    {
        $this->data['LocalLogRetentionSpace'] = $localLogRetentionSpace;
        $this->options['query']['LocalLogRetentionSpace'] = $localLogRetentionSpace;

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
     * @deprecated deprecated since version 2.0, Use withDuplication() instead.
     *
     * @param string $duplication
     *
     * @return $this
     */
    public function setDuplication($duplication)
    {
        return $this->withDuplication($duplication);
    }

    /**
     * @param string $duplication
     *
     * @return $this
     */
    public function withDuplication($duplication)
    {
        $this->data['Duplication'] = $duplication;
        $this->options['query']['Duplication'] = $duplication;

        return $this;
    }

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
     * @deprecated deprecated since version 2.0, Use withBackupRetentionPeriod() instead.
     *
     * @param string $backupRetentionPeriod
     *
     * @return $this
     */
    public function setBackupRetentionPeriod($backupRetentionPeriod)
    {
        return $this->withBackupRetentionPeriod($backupRetentionPeriod);
    }

    /**
     * @param string $backupRetentionPeriod
     *
     * @return $this
     */
    public function withBackupRetentionPeriod($backupRetentionPeriod)
    {
        $this->data['BackupRetentionPeriod'] = $backupRetentionPeriod;
        $this->options['query']['BackupRetentionPeriod'] = $backupRetentionPeriod;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDuplicationContent() instead.
     *
     * @param string $duplicationContent
     *
     * @return $this
     */
    public function setDuplicationContent($duplicationContent)
    {
        return $this->withDuplicationContent($duplicationContent);
    }

    /**
     * @param string $duplicationContent
     *
     * @return $this
     */
    public function withDuplicationContent($duplicationContent)
    {
        $this->data['DuplicationContent'] = $duplicationContent;
        $this->options['query']['DuplicationContent'] = $duplicationContent;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withHighSpaceUsageProtection() instead.
     *
     * @param string $highSpaceUsageProtection
     *
     * @return $this
     */
    public function setHighSpaceUsageProtection($highSpaceUsageProtection)
    {
        return $this->withHighSpaceUsageProtection($highSpaceUsageProtection);
    }

    /**
     * @param string $highSpaceUsageProtection
     *
     * @return $this
     */
    public function withHighSpaceUsageProtection($highSpaceUsageProtection)
    {
        $this->data['HighSpaceUsageProtection'] = $highSpaceUsageProtection;
        $this->options['query']['HighSpaceUsageProtection'] = $highSpaceUsageProtection;

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
     * @deprecated deprecated since version 2.0, Use withDuplicationLocation() instead.
     *
     * @param string $duplicationLocation
     *
     * @return $this
     */
    public function setDuplicationLocation($duplicationLocation)
    {
        return $this->withDuplicationLocation($duplicationLocation);
    }

    /**
     * @param string $duplicationLocation
     *
     * @return $this
     */
    public function withDuplicationLocation($duplicationLocation)
    {
        $this->data['DuplicationLocation'] = $duplicationLocation;
        $this->options['query']['DuplicationLocation'] = $duplicationLocation;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLogBackupRetentionPeriod() instead.
     *
     * @param string $logBackupRetentionPeriod
     *
     * @return $this
     */
    public function setLogBackupRetentionPeriod($logBackupRetentionPeriod)
    {
        return $this->withLogBackupRetentionPeriod($logBackupRetentionPeriod);
    }

    /**
     * @param string $logBackupRetentionPeriod
     *
     * @return $this
     */
    public function withLogBackupRetentionPeriod($logBackupRetentionPeriod)
    {
        $this->data['LogBackupRetentionPeriod'] = $logBackupRetentionPeriod;
        $this->options['query']['LogBackupRetentionPeriod'] = $logBackupRetentionPeriod;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEnableBackupLog() instead.
     *
     * @param string $enableBackupLog
     *
     * @return $this
     */
    public function setEnableBackupLog($enableBackupLog)
    {
        return $this->withEnableBackupLog($enableBackupLog);
    }

    /**
     * @param string $enableBackupLog
     *
     * @return $this
     */
    public function withEnableBackupLog($enableBackupLog)
    {
        $this->data['EnableBackupLog'] = $enableBackupLog;
        $this->options['query']['EnableBackupLog'] = $enableBackupLog;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withBackupPolicyMode() instead.
     *
     * @param string $backupPolicyMode
     *
     * @return $this
     */
    public function setBackupPolicyMode($backupPolicyMode)
    {
        return $this->withBackupPolicyMode($backupPolicyMode);
    }

    /**
     * @param string $backupPolicyMode
     *
     * @return $this
     */
    public function withBackupPolicyMode($backupPolicyMode)
    {
        $this->data['BackupPolicyMode'] = $backupPolicyMode;
        $this->options['query']['BackupPolicyMode'] = $backupPolicyMode;

        return $this;
    }
}
