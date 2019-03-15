<?php

namespace AlibabaCloud\Dm\V20151123;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getTotal()
 * @method $this withTotal($value)
 * @method string getOffset()
 * @method $this withOffset($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getPageNo()
 * @method $this withPageNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getNotifyUrl()
 * @method $this withNotifyUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 */
class GetSenderAddressList extends Rpc
{
    public $product = 'Dm';

    public $version = '2015-11-23';

    public $method = 'POST';
}
