<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getTemplateIds()
 * @method $this withTemplateIds($value)
 * @method string getAnchorId()
 * @method $this withAnchorId($value)
 * @method string getUseAppTranscode()
 * @method $this withUseAppTranscode($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getRoomId()
 * @method $this withRoomId($value)
 * @method string getAppId()
 * @method $this withAppId($value)
 */
class CreateRoom extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
