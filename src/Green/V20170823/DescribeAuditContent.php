<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSuggestion()
 * @method $this withSuggestion($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getScene()
 * @method $this withScene($value)
 * @method string getBizType()
 * @method $this withBizType($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getDataId()
 * @method $this withDataId($value)
 * @method string getAuditResult()
 * @method $this withAuditResult($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class DescribeAuditContent extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
