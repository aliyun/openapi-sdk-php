<?php

namespace AlibabaCloud\Afs\V20180112;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DescribeCaptchaOrder extends Rpc
{
    public $product = 'afs';

    public $version = '2018-01-12';

    public $method = 'POST';
}
