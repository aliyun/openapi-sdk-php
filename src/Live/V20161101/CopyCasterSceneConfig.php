<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getFromSceneId()
 * @method $this withFromSceneId($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getToSceneId()
 * @method $this withToSceneId($value)
 */
class CopyCasterSceneConfig extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
