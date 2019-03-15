<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Rpc;

/**
 * @method string getSourceImageType()
 * @method $this withSourceImageType($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getTargetImageType()
 * @method $this withTargetImageType($value)
 * @method string getSourceImageValue()
 * @method $this withSourceImageValue($value)
 * @method string getTargetImageValue()
 * @method $this withTargetImageValue($value)
 */
class CompareFaces extends Rpc
{
    public $product = 'Cloudauth';

    public $version = '2018-09-16';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudauth';
}
