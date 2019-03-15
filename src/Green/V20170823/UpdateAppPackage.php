<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getDebug()
 * @method $this withDebug($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getPackageUrl()
 * @method $this withPackageUrl($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getPlatform()
 * @method $this withPlatform($value)
 */
class UpdateAppPackage extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
