<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getWhiteListType()
 * @method $this withWhiteListType($value)
 * @method string getDstIP()
 * @method $this withDstIP($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getSrcUid()
 * @method $this withSrcUid($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 * @method string getSourceCode()
 * @method $this withSourceCode($value)
 */
class DescribeUidWhiteListGroup extends Rpc
{
    public $product = 'jarvis';

    public $version = '2018-02-06';

    public $method = 'POST';
}
