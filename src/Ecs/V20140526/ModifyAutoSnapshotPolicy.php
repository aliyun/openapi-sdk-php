<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyAutoSnapshotPolicy
 *
 * @method string getDataDiskPolicyEnabled()
 * @method string getResourceOwnerId()
 * @method string getDataDiskPolicyRetentionDays()
 * @method string getResourceOwnerAccount()
 * @method string getSystemDiskPolicyRetentionLastWeek()
 * @method string getOwnerAccount()
 * @method string getSystemDiskPolicyTimePeriod()
 * @method string getOwnerId()
 * @method string getDataDiskPolicyRetentionLastWeek()
 * @method string getSystemDiskPolicyRetentionDays()
 * @method string getDataDiskPolicyTimePeriod()
 * @method string getSystemDiskPolicyEnabled()
 */
class ModifyAutoSnapshotPolicy extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $dataDiskPolicyEnabled
     *
     * @return $this
     */
    public function withDataDiskPolicyEnabled($dataDiskPolicyEnabled)
    {
        $this->data['DataDiskPolicyEnabled'] = $dataDiskPolicyEnabled;
        $this->options['query']['DataDiskPolicyEnabled'] = $dataDiskPolicyEnabled;

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
     * @param string $dataDiskPolicyRetentionDays
     *
     * @return $this
     */
    public function withDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays)
    {
        $this->data['DataDiskPolicyRetentionDays'] = $dataDiskPolicyRetentionDays;
        $this->options['query']['DataDiskPolicyRetentionDays'] = $dataDiskPolicyRetentionDays;

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
     * @param string $systemDiskPolicyRetentionLastWeek
     *
     * @return $this
     */
    public function withSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek)
    {
        $this->data['SystemDiskPolicyRetentionLastWeek'] = $systemDiskPolicyRetentionLastWeek;
        $this->options['query']['SystemDiskPolicyRetentionLastWeek'] = $systemDiskPolicyRetentionLastWeek;

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
     * @param string $systemDiskPolicyTimePeriod
     *
     * @return $this
     */
    public function withSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod)
    {
        $this->data['SystemDiskPolicyTimePeriod'] = $systemDiskPolicyTimePeriod;
        $this->options['query']['SystemDiskPolicyTimePeriod'] = $systemDiskPolicyTimePeriod;

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
     * @param string $dataDiskPolicyRetentionLastWeek
     *
     * @return $this
     */
    public function withDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek)
    {
        $this->data['DataDiskPolicyRetentionLastWeek'] = $dataDiskPolicyRetentionLastWeek;
        $this->options['query']['DataDiskPolicyRetentionLastWeek'] = $dataDiskPolicyRetentionLastWeek;

        return $this;
    }

    /**
     * @param string $systemDiskPolicyRetentionDays
     *
     * @return $this
     */
    public function withSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays)
    {
        $this->data['SystemDiskPolicyRetentionDays'] = $systemDiskPolicyRetentionDays;
        $this->options['query']['SystemDiskPolicyRetentionDays'] = $systemDiskPolicyRetentionDays;

        return $this;
    }

    /**
     * @param string $dataDiskPolicyTimePeriod
     *
     * @return $this
     */
    public function withDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod)
    {
        $this->data['DataDiskPolicyTimePeriod'] = $dataDiskPolicyTimePeriod;
        $this->options['query']['DataDiskPolicyTimePeriod'] = $dataDiskPolicyTimePeriod;

        return $this;
    }

    /**
     * @param string $systemDiskPolicyEnabled
     *
     * @return $this
     */
    public function withSystemDiskPolicyEnabled($systemDiskPolicyEnabled)
    {
        $this->data['SystemDiskPolicyEnabled'] = $systemDiskPolicyEnabled;
        $this->options['query']['SystemDiskPolicyEnabled'] = $systemDiskPolicyEnabled;

        return $this;
    }
}
