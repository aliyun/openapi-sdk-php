<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getTemplateConfig()
 * @method $this withTemplateConfig($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getVodTemplateId()
 * @method $this withVodTemplateId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class UpdateVodTemplate extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';
}
