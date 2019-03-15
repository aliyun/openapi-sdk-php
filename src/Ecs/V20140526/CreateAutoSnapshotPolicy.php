<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTimePoints()
 * @method string getRetentionDays()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRepeatWeekdays()
 * @method string getAutoSnapshotPolicyName()
 */
class CreateAutoSnapshotPolicy extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
