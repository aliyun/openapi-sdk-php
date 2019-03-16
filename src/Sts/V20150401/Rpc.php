<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Rpc;

class V20150401Rpc extends Rpc
{
    /**
     * @var string
     */
    public $product = 'Sts';

    /**
     * @var string
     */
    public $version = '2015-04-01';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $scheme = 'https';
}

/**
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 */
class GenerateSessionAccessKey extends V20150401Rpc
{
}

class GetCallerIdentity extends V20150401Rpc
{
}

/**
 * @method string getRoleArn()
 * @method $this withRoleArn($value)
 * @method string getRoleSessionName()
 * @method $this withRoleSessionName($value)
 * @method string getDurationSeconds()
 * @method $this withDurationSeconds($value)
 * @method string getPolicy()
 * @method $this withPolicy($value)
 */
class AssumeRole extends V20150401Rpc
{
}
