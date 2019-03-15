<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Rpc;

/**
 * @method string getImages()
 * @method $this withImages($value)
 * @method string getSourceIp()
 * @method $this withSourceIp($value)
 * @method string getImageLibId()
 * @method $this withImageLibId($value)
 */
class UploadImageToLib extends Rpc
{
    public $product = 'Green';

    public $version = '2017-08-23';

    public $method = 'POST';

    public $serviceCode = 'green';
}
