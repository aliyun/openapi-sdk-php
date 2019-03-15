<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSrcIP()
 * @method $this withSrcIP($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getWlState()
 * @method $this withWlState($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeCdnIpList extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
