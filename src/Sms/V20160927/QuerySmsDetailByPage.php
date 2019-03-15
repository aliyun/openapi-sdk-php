<?php

namespace AlibabaCloud\Sms\V20160927;

use AlibabaCloud\Rpc;

/**
 * @method string getRecNum()
 * @method $this withRecNum($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getQueryTime()
 * @method $this withQueryTime($value)
 */
class QuerySmsDetailByPage extends Rpc
{
    public $product = 'Sms';

    public $version = '2016-09-27';

    public $method = 'POST';
}
