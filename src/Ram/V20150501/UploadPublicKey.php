<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getPublicKeySpec()
 * @method $this withPublicKeySpec($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UploadPublicKey extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
