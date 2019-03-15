<?php

namespace AlibabaCloud\Alidns\V20150109;

use AlibabaCloud\Rpc;

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getSearchMode()
 * @method $this withSearchMode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDomains extends Rpc
{
    public $product = 'Alidns';

    public $version = '2015-01-09';

    public $method = 'POST';

    public $serviceCode = 'alidns';
}
