<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getRWAccessType()
 * @method $this withRWAccessType($value)
 * @method string getSourceCidrIp()
 * @method $this withSourceCidrIp($value)
 * @method string getUserAccessType()
 * @method $this withUserAccessType($value)
 * @method string getPriority()
 * @method $this withPriority($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 */
class ModifyAccessRule extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
