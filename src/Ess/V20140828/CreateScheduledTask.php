<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getLaunchTime()
 * @method $this withLaunchTime($value)
 * @method string getScheduledAction()
 * @method $this withScheduledAction($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRecurrenceValue()
 * @method $this withRecurrenceValue($value)
 * @method string getLaunchExpirationTime()
 * @method $this withLaunchExpirationTime($value)
 * @method string getRecurrenceEndTime()
 * @method $this withRecurrenceEndTime($value)
 * @method string getScheduledTaskName()
 * @method $this withScheduledTaskName($value)
 * @method string getTaskEnabled()
 * @method $this withTaskEnabled($value)
 * @method string getRecurrenceType()
 * @method $this withRecurrenceType($value)
 */
class CreateScheduledTask extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';
}
