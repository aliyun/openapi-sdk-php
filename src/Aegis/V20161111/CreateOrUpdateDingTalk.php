<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getRuleActionName()
 * @method $this withRuleActionName($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSendUrl()
 * @method $this withSendUrl($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getIntervalTime()
 * @method $this withIntervalTime($value)
 */
class CreateOrUpdateDingTalk extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
