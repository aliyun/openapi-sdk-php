<?php

namespace AlibabaCloud\Linkedmall\V20180116;

use AlibabaCloud\Rpc;

/**
 * @method string getAmount()
 * @method $this withAmount($value)
 * @method string getPayTypes()
 * @method $this withPayTypes($value)
 * @method string getRequestId()
 * @method $this withRequestId($value)
 * @method string getOperationDate()
 * @method $this withOperationDate($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class NotifyPayOrderStatus extends Rpc
{
    public $product = 'linkedmall';

    public $version = '2018-01-16';

    public $method = 'POST';

    public $serviceCode = 'linkedmall';
}
