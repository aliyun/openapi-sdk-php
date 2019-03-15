<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getTotalCount()
 * @method $this withTotalCount($value)
 * @method string getSubServiceModule()
 * @method $this withSubServiceModule($value)
 * @method string getSiteUrl()
 * @method $this withSiteUrl($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getHandleStatus()
 * @method $this withHandleStatus($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLabel()
 * @method $this withLabel($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeWebsiteScanResult extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
