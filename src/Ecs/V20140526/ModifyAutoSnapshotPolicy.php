<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyAutoSnapshotPolicy
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
class ModifyAutoSnapshotPolicy extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'ModifyAutoSnapshotPolicy';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withDataDiskPolicyEnabled() instead.
     *
     * @param string $dataDiskPolicyEnabled
     *
     * @return $this
     */
    public function setDataDiskPolicyEnabled($dataDiskPolicyEnabled)
    {
        return $this->withDataDiskPolicyEnabled($dataDiskPolicyEnabled);
    }

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
     * @deprecated deprecated since version 2.0, Use withDataDiskPolicyRetentionDays() instead.
     *
     * @param string $dataDiskPolicyRetentionDays
     *
     * @return $this
     */
    public function setDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays)
    {
        return $this->withDataDiskPolicyRetentionDays($dataDiskPolicyRetentionDays);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskPolicyRetentionLastWeek() instead.
     *
     * @param string $systemDiskPolicyRetentionLastWeek
     *
     * @return $this
     */
    public function setSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek)
    {
        return $this->withSystemDiskPolicyRetentionLastWeek($systemDiskPolicyRetentionLastWeek);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskPolicyTimePeriod() instead.
     *
     * @param string $systemDiskPolicyTimePeriod
     *
     * @return $this
     */
    public function setSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod)
    {
        return $this->withSystemDiskPolicyTimePeriod($systemDiskPolicyTimePeriod);
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
     * @deprecated deprecated since version 2.0, Use withDataDiskPolicyRetentionLastWeek() instead.
     *
     * @param string $dataDiskPolicyRetentionLastWeek
     *
     * @return $this
     */
    public function setDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek)
    {
        return $this->withDataDiskPolicyRetentionLastWeek($dataDiskPolicyRetentionLastWeek);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskPolicyRetentionDays() instead.
     *
     * @param string $systemDiskPolicyRetentionDays
     *
     * @return $this
     */
    public function setSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays)
    {
        return $this->withSystemDiskPolicyRetentionDays($systemDiskPolicyRetentionDays);
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
     * @deprecated deprecated since version 2.0, Use withDataDiskPolicyTimePeriod() instead.
     *
     * @param string $dataDiskPolicyTimePeriod
     *
     * @return $this
     */
    public function setDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod)
    {
        return $this->withDataDiskPolicyTimePeriod($dataDiskPolicyTimePeriod);
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
     * @deprecated deprecated since version 2.0, Use withSystemDiskPolicyEnabled() instead.
     *
     * @param string $systemDiskPolicyEnabled
     *
     * @return $this
     */
    public function setSystemDiskPolicyEnabled($systemDiskPolicyEnabled)
    {
        return $this->withSystemDiskPolicyEnabled($systemDiskPolicyEnabled);
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
