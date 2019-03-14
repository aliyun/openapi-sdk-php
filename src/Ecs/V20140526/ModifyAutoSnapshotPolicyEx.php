<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api ModifyAutoSnapshotPolicyEx
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAutoSnapshotPolicyId()
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class ModifyAutoSnapshotPolicyEx extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->data['AutoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->options['query']['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;

        return $this;
    }

    /**
     * @param string $timePoints
     *
     * @return $this
     */
    public function withTimePoints($timePoints)
    {
        $this->data['TimePoints'] = $timePoints;
        $this->options['query']['timePoints'] = $timePoints;

        return $this;
    }

    /**
     * @param string $retentionDays
     *
     * @return $this
     */
    public function withRetentionDays($retentionDays)
    {
        $this->data['RetentionDays'] = $retentionDays;
        $this->options['query']['retentionDays'] = $retentionDays;

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
     * @param string $repeatWeekdays
     *
     * @return $this
     */
    public function withRepeatWeekdays($repeatWeekdays)
    {
        $this->data['RepeatWeekdays'] = $repeatWeekdays;
        $this->options['query']['repeatWeekdays'] = $repeatWeekdays;

        return $this;
    }

    /**
     * @param string $autoSnapshotPolicyName
     *
     * @return $this
     */
    public function withAutoSnapshotPolicyName($autoSnapshotPolicyName)
    {
        $this->data['AutoSnapshotPolicyName'] = $autoSnapshotPolicyName;
        $this->options['query']['autoSnapshotPolicyName'] = $autoSnapshotPolicyName;

        return $this;
    }
}
