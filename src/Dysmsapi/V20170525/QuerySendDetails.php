<?php

namespace AlibabaCloud\Dysmsapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getSendDate()
 * @method $this withSendDate($value)
 * @method string getPhoneNumber()
 * @method $this withPhoneNumber($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QuerySendDetails extends Rpc
{
    public $product = 'Dysmsapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    public $serviceCode = 'dysmsapi';
}
