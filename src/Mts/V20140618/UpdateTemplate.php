<?php

namespace AlibabaCloud\Mts\V20140618;

use AlibabaCloud\Rpc;

/**
 * @method string getContainer()
 * @method $this withContainer($value)
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getMuxConfig()
 * @method $this withMuxConfig($value)
 * @method string getVideo()
 * @method $this withVideo($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateId()
 * @method $this withTemplateId($value)
 * @method string getName()
 * @method $this withName($value)
 * @method string getTransConfig()
 * @method $this withTransConfig($value)
 * @method string getAudio()
 * @method $this withAudio($value)
 */
class UpdateTemplate extends Rpc
{
    public $product = 'Mts';

    public $version = '2014-06-18';

    public $method = 'POST';

    public $serviceCode = 'mts';
}
