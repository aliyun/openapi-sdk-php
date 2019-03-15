<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getRuleIds()
 * @method $this withRuleIds($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getMachineGroupIds()
 * @method $this withMachineGroupIds($value)
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getGroupName()
 * @method $this withGroupName($value)
 */
class CreateOrUpdateGroup extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
