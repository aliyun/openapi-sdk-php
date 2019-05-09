<?php

namespace AlibabaCloud\Dybaseapi\V20170525;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method QueryTokenForMnsQueue queryTokenForMnsQueue(array $options = [])
 */
class DybaseapiApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Dybaseapi';

    /** @var string */
    public $version = '2017-05-25';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'dybaseapi';
}

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
}
