<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getSubscriptionState()
 * @method $this withSubscriptionState($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getVendorName()
 * @method $this withVendorName($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCdnSubscription extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
