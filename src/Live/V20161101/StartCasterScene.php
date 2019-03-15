<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getSceneId()
 * @method $this withSceneId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class StartCasterScene extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
