<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getTriggerURL()
 * @method $this withTriggerURL($value)
 * @method string getSecret()
 * @method $this withSecret($value)
 */
class DescribeTriggerHookStatus extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/hook/trigger/status/[TriggerURL]/[Secret]/';

    public $serviceCode = 'cs';
}
