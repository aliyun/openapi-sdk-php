<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * Api RevokeTriggerHook
 *
 */
class RevokeTriggerHook extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/hook/trigger';

    public $method = 'DELETE';

    public $serviceCode = 'cs';
}
