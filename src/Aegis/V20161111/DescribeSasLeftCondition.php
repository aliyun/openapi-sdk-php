<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConditionType()
 * @method $this withConditionType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFilterConditions()
 * @method $this withFilterConditions($value)
 */
class DescribeSasLeftCondition extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
