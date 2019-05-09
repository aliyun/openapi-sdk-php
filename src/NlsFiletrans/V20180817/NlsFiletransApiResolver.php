<?php

namespace AlibabaCloud\NlsFiletrans\V20180817;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method SubmitTask submitTask(array $options = [])
 * @method GetTaskResult getTaskResult(array $options = [])
 */
class NlsFiletransApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'nls-filetrans';

    /** @var string */
    public $version = '2018-08-17';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getTask()
 * @method $this withTask($value)
 * @method string getDebug()
 * @method $this withDebug($value)
 */
class SubmitTask extends Rpc
{
}

/**
 * @method string getDebug()
 * @method $this withDebug($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class GetTaskResult extends Rpc
{

    /** @var string */
    public $method = 'GET';
}
