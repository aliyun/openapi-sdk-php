<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 */
class ModifyAccessGroup extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
