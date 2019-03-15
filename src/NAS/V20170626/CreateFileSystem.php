<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * @method string getDescription()
 * @method $this withDescription($value)
 * @method string getProtocolType()
 * @method $this withProtocolType($value)
 * @method string getStorageType()
 * @method $this withStorageType($value)
 */
class CreateFileSystem extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';
}
