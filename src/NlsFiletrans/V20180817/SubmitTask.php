<?php

namespace AlibabaCloud\NlsFiletrans\V20180817;

use AlibabaCloud\Rpc;

/**
 * @method string getTask()
 * @method $this withTask($value)
 * @method string getDebug()
 * @method $this withDebug($value)
 */
class SubmitTask extends Rpc
{
    public $product = 'nls-filetrans';

    public $version = '2018-08-17';

    public $method = 'POST';
}
