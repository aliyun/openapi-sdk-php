<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAccessGroupName()
 * @method $this withAccessGroupName($value)
 * @method string getAccessRuleId()
 * @method $this withAccessRuleId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeAccessRules extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
