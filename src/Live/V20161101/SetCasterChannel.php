<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getPlayStatus()
 * @method $this withPlayStatus($value)
 * @method string getCasterId()
 * @method $this withCasterId($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getSeekOffset()
 * @method $this withSeekOffset($value)
 * @method string getChannelId()
 * @method $this withChannelId($value)
 */
class SetCasterChannel extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
