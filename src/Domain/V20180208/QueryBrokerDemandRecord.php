<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Rpc;

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryBrokerDemandRecord extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-02-08';

    public $method = 'POST';
}
