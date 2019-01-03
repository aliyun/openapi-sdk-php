<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateAutoSnapshotPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class CreateAutoSnapshotPolicy extends RpcRequest
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
    public $action = 'CreateAutoSnapshotPolicy';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @deprecated deprecated since version 2.0, Use withTimePoints() instead.
     *
     * @param string $timePoints
     *
     * @return $this
     */
    public function settimePoints($timePoints)
    {
        return $this->withTimePoints($timePoints);
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
     * @deprecated deprecated since version 2.0, Use withRetentionDays() instead.
     *
     * @param string $retentionDays
     *
     * @return $this
     */
    public function setretentionDays($retentionDays)
    {
        return $this->withRetentionDays($retentionDays);
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
     * @deprecated deprecated since version 2.0, Use withRepeatWeekdays() instead.
     *
     * @param string $repeatWeekdays
     *
     * @return $this
     */
    public function setrepeatWeekdays($repeatWeekdays)
    {
        return $this->withRepeatWeekdays($repeatWeekdays);
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
     * @deprecated deprecated since version 2.0, Use withAutoSnapshotPolicyName() instead.
     *
     * @param string $autoSnapshotPolicyName
     *
     * @return $this
     */
    public function setautoSnapshotPolicyName($autoSnapshotPolicyName)
    {
        return $this->withAutoSnapshotPolicyName($autoSnapshotPolicyName);
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
