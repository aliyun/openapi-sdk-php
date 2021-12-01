<?php

namespace AlibabaCloud\Saf\V20190521;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ExecuteExtendService executeExtendService(array $options = [])
 * @method ExecuteRequest executeRequest(array $options = [])
 * @method ExecuteRequestML executeRequestML(array $options = [])
 * @method ExecuteRequestSG executeRequestSG(array $options = [])
 * @method RequestDecision requestDecision(array $options = [])
 */
class SafApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'saf';

    /** @var string */
    public $version = '2019-05-21';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';
}

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getRegion()
 * @method $this withRegion($value)
 */
class ExecuteExtendService extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getService()
 * @method $this withService($value)
 */
class ExecuteRequest extends Rpc
{
}

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ExecuteRequestML extends Rpc
{
}

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ExecuteRequestSG extends Rpc
{
}

/**
 * @method string getServiceParameters()
 * @method $this withServiceParameters($value)
 * @method string getEventCode()
 * @method $this withEventCode($value)
 */
class RequestDecision extends Rpc
{

    /** @var string */
    public $scheme = 'http';
}
