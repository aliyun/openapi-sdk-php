<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainGroupName()
 * @method $this withDomainGroupName($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getShowDeletingGroup()
 * @method $this withShowDeletingGroup($value)
 */
class QueryDomainGroupList extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';
}
