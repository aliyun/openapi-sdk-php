<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeAuditContentItem extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
