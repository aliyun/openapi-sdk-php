<?php

namespace AlibabaCloud\Dybaseapi\V20170525;

use AlibabaCloud\Rpc;

/**
 * @method string getQueueName()
 * @method $this withQueueName($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getMessageType()
 * @method $this withMessageType($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class QueryTokenForMnsQueue extends Rpc
{
    public $product = 'Dybaseapi';

    public $version = '2017-05-25';

    public $method = 'POST';

    public $serviceCode = 'dybaseapi';
}
