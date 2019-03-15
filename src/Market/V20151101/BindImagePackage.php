<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Rpc;

/**
 * @method string getEcsInstanceId()
 * @method $this withEcsInstanceId($value)
 * @method string getImagePackageInstanceId()
 * @method $this withImagePackageInstanceId($value)
 */
class BindImagePackage extends Rpc
{
    public $product = 'Market';

    public $version = '2015-11-01';

    public $method = 'POST';
}
