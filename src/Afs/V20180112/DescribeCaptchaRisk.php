<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getConfigName()
 * @method $this withConfigName($value)
 * @method string getRefExtId()
 * @method $this withRefExtId($value)
 * @method string getTime()
 * @method $this withTime($value)
 */
class DescribeCaptchaRisk extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}
