<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * @method string getStatusList()
 * @method $this withStatusList($value)
 * @method string getSaleId()
 * @method $this withSaleId($value)
 * @method string getRuleType()
 * @method $this withRuleType($value)
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getEndTime()
 * @method $this withEndTime($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStartTime()
 * @method $this withStartTime($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getUuid()
 * @method $this withUuid($value)
 * @method string getSecureToken()
 * @method $this withSecureToken($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWebGroupId()
 * @method $this withWebGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAction1()
 * @method $this withAction1($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getFlow()
 * @method $this withFlow($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class DescribeUuidStatistics extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';
}
