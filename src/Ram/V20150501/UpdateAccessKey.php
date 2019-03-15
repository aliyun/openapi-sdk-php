<?php

namespace AlibabaCloud\Ram\V20150501;

use AlibabaCloud\Rpc;

/**
 * @method string getUserAccessKeyId()
 * @method $this withUserAccessKeyId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateAccessKey extends Rpc
{
    public $product = 'Ram';

    public $version = '2015-05-01';

    public $scheme = 'https';

    public $method = 'POST';
}
