<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class AllowPushStream extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
