<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getIsEnable()
 * @method $this withIsEnable($value)
 * @method string getMetricType()
 * @method $this withMetricType($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getAlarmTaskId()
 * @method $this withAlarmTaskId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAlarms extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
