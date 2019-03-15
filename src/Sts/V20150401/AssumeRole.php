<?php

namespace AlibabaCloud\Sts\V20150401;

use AlibabaCloud\Rpc;

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
class AssumeRole extends Rpc
{
    public $product = 'Sts';

    public $version = '2015-04-01';

    public $scheme = 'https';

    public $method = 'POST';
}
