<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getComponentType()
 * @method $this withComponentType($value)
 * @method string getLocationId()
 * @method $this withLocationId($value)
 * @method string getImageLayerContent()
 * @method $this withImageLayerContent($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getEffect()
 * @method $this withEffect($value)
 * @method string getComponentLayer()
 * @method $this withComponentLayer($value)
 * @method string getCaptionLayerContent()
 * @method $this withCaptionLayerContent($value)
 * @method string getComponentName()
 * @method $this withComponentName($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTextLayerContent()
 * @method $this withTextLayerContent($value)
 */
class AddCasterComponent extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
