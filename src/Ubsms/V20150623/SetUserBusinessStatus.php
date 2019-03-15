<?php

namespace AlibabaCloud\Ubsms\V20150623;

use AlibabaCloud\Rpc;

/**
 * @method string getUid()
 * @method $this withUid($value)
 * @method string getStatusValue()
 * @method $this withStatusValue($value)
 * @method string getService()
 * @method $this withService($value)
 * @method string getStatusKey()
 * @method $this withStatusKey($value)
 */
class SetUserBusinessStatus extends Rpc
{
    public $product = 'Ubsms';

    public $version = '2015-06-23';

    public $method = 'POST';
}
