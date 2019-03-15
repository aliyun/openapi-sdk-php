<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getFileUrl()
 * @method $this withFileUrl($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getWatermarkConfig()
 * @method $this withWatermarkConfig($value)
 */
class AddWatermark extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
