<?php

namespace AlibabaCloud\Ram\V20180302;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method PhysicalDeleteResource physicalDeleteResource(array $options = [])
 * @method CheckResource checkResource(array $options = [])
 */
class RamApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Ram';

    /** @var string */
    public $version = '2018-03-02';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class PhysicalDeleteResource extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getHid()
 * @method $this withHid($value)
 * @method string getGmtWakeup()
 * @method $this withGmtWakeup($value)
 * @method string getPk()
 * @method $this withPk($value)
 * @method string getBid()
 * @method $this withBid($value)
 * @method string getTaskExtraData()
 * @method $this withTaskExtraData($value)
 * @method string getTaskIdentifier()
 * @method $this withTaskIdentifier($value)
 */
class CheckResource extends Rpc
{
}
