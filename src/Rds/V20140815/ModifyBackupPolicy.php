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
