<?php

namespace AlibabaCloud\CS\V20151215;

use AlibabaCloud\Roa;

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getClusterId()
 * @method $this withClusterId($value)
 */
class DescribeTrigger extends Roa
{
    public $product = 'CS';

    public $version = '2015-12-15';

    public $pathPattern = '/clusters/[ClusterId]/trigger/[ActionType]/';

    public $serviceCode = 'cs';
}
