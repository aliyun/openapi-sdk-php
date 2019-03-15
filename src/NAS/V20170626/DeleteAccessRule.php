<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 */
class DeleteAccessRule extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
